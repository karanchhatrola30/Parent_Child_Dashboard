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

// Handle Mark as Completed
if (isset($_GET['complete'])) {
    $task_id = $_GET['complete'];
    // Verify ownership
    $check = $conn->query("SELECT id FROM tasks WHERE id = $task_id AND child_id = $child_id");
    if($check->num_rows > 0){
        $conn->query("UPDATE tasks SET status = 'completed' WHERE id = $task_id");
        
        // Get task points
        $task = $conn->query("SELECT points, title FROM tasks WHERE id = $task_id")->fetch_assoc();
        $points = $task['points'];
        $title = $task['title'];
        
        // Award points
        $stmt = $conn->prepare("INSERT INTO points (child_id, task_id, points, note) VALUES (?, ?, ?, ?)");
        $note = "Completed task: $title";
        $stmt->bind_param("iiis", $child_id, $task_id, $points, $note);
        $stmt->execute();
        
        $message = '<div class="alert alert-success">Task marked as completed and points awarded!</div>';
    }
}

// Fetch Tasks
$tasks = $conn->query("SELECT * FROM tasks WHERE child_id = $child_id ORDER BY created_at DESC");
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Tasks</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?php echo $message; ?>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Task List</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Description</th>
                                <th>Due Date</th>
                                <th>Points</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($task = $tasks->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $task['title']; ?></td>
                                <td><?php echo $task['note']; ?></td>
                                <td><?php echo $task['submit_date']; ?></td>
                                <td><?php echo $task['points']; ?></td>
                                <td>
                                    <?php 
                                    $status_class = 'badge-warning';
                                    if($task['status'] == 'completed') $status_class = 'badge-success';
                                    if($task['status'] == 'pending') $status_class = 'badge-info';
                                    ?>
                                    <span class="badge <?php echo $status_class; ?>"><?php echo ucfirst($task['status']); ?></span>
                                </td>
                                <td>
                                    <?php if($task['status'] == 'pending'): ?>
                                    <a href="?complete=<?php echo $task['id']; ?>" class="btn btn-success btn-sm" onclick="return confirm('Mark as completed?')">
                                        <i class="fas fa-check"></i> Complete
                                    </a>
                                    <?php else: ?>
                                        <span class="text-success"><i class="fas fa-check-circle"></i> Done</span>
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
