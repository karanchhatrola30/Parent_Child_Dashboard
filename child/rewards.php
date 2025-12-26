<?php
include '../includes/db.php';
include '../includes/header.php';
include '../includes/sidebar.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'child') {
    header("Location: ../login.php");
    exit();
}

$child_id = $_SESSION['user_id'];
$message = '';

// Handle Make Wish
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['make_wish'])) {
    $title = $_POST['title'];
    $note = $_POST['note'];

    $stmt = $conn->prepare("INSERT INTO wishes (child_id, title, note) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $child_id, $title, $note);
    
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Wish sent to parent!</div>';
    } else {
        $message = '<div class="alert alert-danger">Error sending wish.</div>';
    }
}

// Fetch Total Points
$total_points = $conn->query("SELECT SUM(points) as total FROM points WHERE child_id = $child_id")->fetch_assoc()['total'];

// Fetch Wishes
$wishes = $conn->query("SELECT * FROM wishes WHERE child_id = $child_id ORDER BY created_at DESC");
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rewards & Wishes</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?php echo $message; ?>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $total_points ? $total_points : 0; ?></h3>
                            <p>Total Points Earned</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                    </div>
                    
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Make a Wish</h3>
                        </div>
                        <form method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>I want...</label>
                                    <input type="text" name="title" class="form-control" placeholder="e.g. New Bicycle" required>
                                </div>
                                <div class="form-group">
                                    <label>Why?</label>
                                    <textarea name="note" class="form-control" rows="3" placeholder="I have been good..."></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="make_wish" class="btn btn-primary">Send Wish</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">My Wishes</h3>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Wish</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($wish = $wishes->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $wish['title']; ?></td>
                                        <td><?php echo $wish['note']; ?></td>
                                        <td>
                                            <?php 
                                            $status_class = 'badge-warning';
                                            if($wish['status'] == 'approved') $status_class = 'badge-success';
                                            if($wish['status'] == 'rejected') $status_class = 'badge-danger';
                                            ?>
                                            <span class="badge <?php echo $status_class; ?>"><?php echo ucfirst($wish['status']); ?></span>
                                        </td>
                                        <td><?php echo $wish['created_at']; ?></td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include '../includes/footer.php'; ?>
