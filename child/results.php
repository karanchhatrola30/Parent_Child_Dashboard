<?php
include '../includes/db.php';
include '../includes/header.php';
include '../includes/sidebar.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'child') {
    header("Location: ../login.php");
    exit();
}

$child_id = $_SESSION['user_id'];

// Fetch Results
$results = $conn->query("SELECT * FROM results WHERE child_id = $child_id ORDER BY exam_date DESC");
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Results</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Exam History</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Marks</th>
                                <th>Percentage</th>
                                <th>Exam Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $results->fetch_assoc()): 
                                $percentage = ($row['marks_obtained'] / $row['total_marks']) * 100;
                            ?>
                            <tr>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['marks_obtained'] . ' / ' . $row['total_marks']; ?></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" style="width: <?php echo $percentage; ?>%"></div>
                                    </div>
                                    <span class="badge bg-success"><?php echo number_format($percentage, 1); ?>%</span>
                                </td>
                                <td><?php echo $row['exam_date']; ?></td>
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
