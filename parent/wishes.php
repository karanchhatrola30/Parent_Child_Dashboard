<?php
include '../includes/db.php';
include '../includes/header.php';
include '../includes/sidebar.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'parent') {
    header("Location: ../login.php");
    exit();
}

$parent_id = $_SESSION['user_id'];
$message = '';

// Handle Wish Actions
if (isset($_GET['action']) && isset($_GET['id'])) {
    $wish_id = $_GET['id'];
    $action = $_GET['action'];
    $status = ($action == 'approve') ? 'approved' : 'rejected';
    
    // Verify ownership
    $check = $conn->query("SELECT w.id FROM wishes w JOIN children c ON w.child_id = c.id WHERE w.id = $wish_id AND c.parent_id = $parent_id");
    
    if($check->num_rows > 0){
        $stmt = $conn->prepare("UPDATE wishes SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $wish_id);
        if($stmt->execute()){
             $message = '<div class="alert alert-success">Wish updated successfully!</div>';
        }
    }
}

// Fetch Wishes
$wishes = $conn->query("SELECT w.*, c.name as child_name FROM wishes w JOIN children c ON w.child_id = c.id WHERE c.parent_id = $parent_id ORDER BY w.created_at DESC");
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Wishes & Rewards</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?php echo $message; ?>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Child Wishlist</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Child</th>
                                <th>Wish</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($wish = $wishes->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $wish['child_name']; ?></td>
                                <td><?php echo $wish['title']; ?></td>
                                <td>
                                    <?php 
                                    $status_class = 'badge-warning';
                                    if($wish['status'] == 'approved') $status_class = 'badge-success';
                                    if($wish['status'] == 'rejected') $status_class = 'badge-danger';
                                    ?>
                                    <span class="badge <?php echo $status_class; ?>"><?php echo ucfirst($wish['status']); ?></span>
                                </td>
                                <td><?php echo $wish['created_at']; ?></td>
                                <td>
                                    <?php if($wish['status'] == 'pending'): ?>
                                    <a href="?action=approve&id=<?php echo $wish['id']; ?>" class="btn btn-success btn-sm">
                                        <i class="fas fa-check"></i> Approve
                                    </a>
                                    <a href="?action=reject&id=<?php echo $wish['id']; ?>" class="btn btn-danger btn-sm">
                                        <i class="fas fa-times"></i> Reject
                                    </a>
                                    <?php else: ?>
                                        <span class="text-muted">No actions</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include '../includes/footer.php'; ?>
