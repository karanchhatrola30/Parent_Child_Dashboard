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

// Handle Add Result
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_result'])) {
    $child_id = $_POST['child_id'];
    $subject = $_POST['subject'];
    $marks_obtained = $_POST['marks_obtained'];
    $total_marks = $_POST['total_marks'];
    $exam_date = $_POST['exam_date'];

    $stmt = $conn->prepare("INSERT INTO results (child_id, subject, marks_obtained, total_marks, exam_date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("isiis", $child_id, $subject, $marks_obtained, $total_marks, $exam_date);
    
    if ($stmt->execute()) {
        $message = '<div class="alert alert-success">Result added successfully!</div>';
    } else {
        $message = '<div class="alert alert-danger">Error adding result.</div>';
    }
}

// Handle Delete Result
if (isset($_GET['delete'])) {
    $result_id = $_GET['delete'];
    // Verify ownership through child
    $check = $conn->query("SELECT r.id FROM results r JOIN children c ON r.child_id = c.id WHERE r.id = $result_id AND c.parent_id = $parent_id");
    if($check->num_rows > 0){
        $conn->query("DELETE FROM results WHERE id = $result_id");
        $message = '<div class="alert alert-success">Result deleted successfully!</div>';
    }
}

// Fetch Children for Dropdown
$children = $conn->query("SELECT * FROM children WHERE parent_id = $parent_id");
$children_options = [];
while ($child = $children->fetch_assoc()) {
    $children_options[] = $child;
}

// Fetch Results
$results = $conn->query("SELECT r.*, c.name as child_name FROM results r JOIN children c ON r.child_id = c.id WHERE c.parent_id = $parent_id ORDER BY r.exam_date DESC");
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Exam Results</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <?php echo $message; ?>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Student Results</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addResultModal">
                            <i class="fas fa-plus"></i> Add Result
                        </button>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Subject</th>
                                <th>Marks</th>
                                <th>Percentage</th>
                                <th>Exam Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $results->fetch_assoc()): 
                                $percentage = ($row['marks_obtained'] / $row['total_marks']) * 100;
                            ?>
                            <tr>
                                <td><?php echo $row['child_name']; ?></td>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['marks_obtained'] . ' / ' . $row['total_marks']; ?></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" style="width: <?php echo $percentage; ?>%"></div>
                                    </div>
                                    <span class="badge bg-success"><?php echo number_format($percentage, 1); ?>%</span>
                                </td>
                                <td><?php echo $row['exam_date']; ?></td>
                                <td>
                                    <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
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

<!-- Add Result Modal -->
<div class="modal fade" id="addResultModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Exam Result</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Student</label>
                        <select name="child_id" class="form-control" required>
                            <?php foreach($children_options as $child): ?>
                                <option value="<?php echo $child['id']; ?>"><?php echo $child['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Marks Obtained</label>
                        <input type="number" name="marks_obtained" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Total Marks</label>
                        <input type="number" name="total_marks" class="form-control" value="100" required>
                    </div>
                    <div class="form-group">
                        <label>Exam Date</label>
                        <input type="date" name="exam_date" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="add_result" class="btn btn-primary">Save Result</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
