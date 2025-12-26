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

// Handle Add Child
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_child'])) {
    $name = $_POST['name'];
    $standard = $_POST['standard'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT id FROM children WHERE username = '$username'");
    if ($check->num_rows > 0) {
        $message = '<div class="alert alert-danger">Username already exists!</div>';
    } else {
        $stmt = $conn->prepare("INSERT INTO children (parent_id, name, standard, username, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $parent_id, $name, $standard, $username, $password);
        if ($stmt->execute()) {
            $message = '<div class="alert alert-success">Child added successfully!</div>';
        } else {
            $message = '<div class="alert alert-danger">Error adding child.</div>';
        }
    }
}

// Handle Delete Child
if (isset($_GET['delete'])) {
    $child_id = $_GET['delete'];
    $conn->query("DELETE FROM children WHERE id = $child_id AND parent_id = $parent_id");
    $message = '<div class="alert alert-success">Child deleted successfully!</div>';
}

// Fetch Children
$children = $conn->query("SELECT * FROM children WHERE parent_id = $parent_id");
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student Records</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?php echo $message; ?>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">My Children</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addChildModal">
                            <i class="fas fa-plus"></i> Add Child
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Standard</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($child = $children->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $child['id']; ?></td>
                                <td><?php echo $child['name']; ?></td>
                                <td><?php echo $child['standard']; ?></td>
                                <td><?php echo $child['username']; ?></td>
                                <td>
                                    <a href="?delete=<?php echo $child['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
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

<!-- Add Child Modal -->
<div class="modal fade" id="addChildModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Child</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Standard</label>
                        <input type="text" name="standard" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="add_child" class="btn btn-primary">Add Child</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
