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

// Handle Add Task
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_task'])) {
    $child_id = $_POST['child_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $points = $_POST['points'];

    $stmt = $conn->prepare("INSERT INTO tasks (parent_id, child_id, title, note, submit_date, points) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iisssi", $parent_id, $child_id, $title, $description, $due_date, $points);
    
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Task assigned successfully!</div>';
    } else {
        $message = '<div class="alert alert-danger">Error assigning task.</div>';
    }
}

// Handle Delete Task
if (isset($_GET['delete'])) {
    $task_id = $_GET['delete'];
    $conn->query("DELETE FROM tasks WHERE id = $task_id AND parent_id = $parent_id");
    $message = '<div class="alert alert-success">Task deleted successfully!</div>';
}

// Fetch Children for Dropdown
$children = $conn->query("SELECT * FROM children WHERE parent_id = $parent_id");
$children_options = [];
while ($child = $children->fetch_assoc()) {
    $children_options[] = $child;
}

// Fetch Tasks
$tasks = $conn->query("SELECT t.*, c.name as child_name FROM tasks t JOIN children c ON t.child_id = c.id WHERE t.parent_id = $parent_id ORDER BY t.created_at DESC");
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tasks & Homework</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?php echo $message; ?>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Assigned Tasks</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTaskModal">
                            <i class="fas fa-plus"></i> Assign Task
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Assigned To</th>
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
                                <td><?php echo $task['child_name']; ?></td>
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
                                    <a href="?delete=<?php echo $task['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
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

<!-- Add Task Modal -->
<div class="modal fade" id="addTaskModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Assign New Task</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Assign To</label>
                        <select name="child_id" class="form-control" required>
                            <?php foreach($children_options as $child): ?>
                                <option value="<?php echo $child['id']; ?>"><?php echo $child['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Task Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Due Date</label>
                        <input type="date" name="due_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Points Reward</label>
                        <input type="number" name="points" class="form-control" value="10">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="add_task" class="btn btn-primary">Assign Task</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
