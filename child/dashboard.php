<?php
include '../includes/db.php';
include '../includes/header.php';
include '../includes/sidebar.php';

// Check if user is logged in and is a child
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'child') {
    header("Location: ../login.php");
    exit();
}

$child_id = $_SESSION['user_id'];

// Get counts
$pending_tasks = $conn->query("SELECT COUNT(*) as count FROM tasks WHERE child_id = $child_id AND status = 'pending'")->fetch_assoc()['count'];
$total_points = $conn->query("SELECT SUM(points) as total FROM points WHERE child_id = $child_id")->fetch_assoc()['total'];
$approved_wishes = $conn->query("SELECT COUNT(*) as count FROM wishes WHERE child_id = $child_id AND status = 'approved'")->fetch_assoc()['count'];
$unread_notifications = $conn->query("SELECT COUNT(*) as count FROM notifications WHERE user_id = $child_id AND user_type = 'child' AND is_read = 0")->fetch_assoc()['count'];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">My Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $pending_tasks; ?></h3>
                <p>Pending Tasks</p>
              </div>
              <div class="icon">
                <i class="fas fa-tasks"></i>
              </div>
              <a href="tasks.php" class="small-box-footer">View Tasks <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $total_points ? $total_points : 0; ?></h3>
                <p>My Points</p>
              </div>
              <div class="icon">
                <i class="fas fa-star"></i>
              </div>
              <a href="rewards.php" class="small-box-footer">View Rewards <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $approved_wishes; ?></h3>
                <p>Approved Wishes</p>
              </div>
              <div class="icon">
                <i class="fas fa-gift"></i>
              </div>
              <a href="rewards.php" class="small-box-footer">View Wishes <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $unread_notifications; ?></h3>
                <p>Notifications</p>
              </div>
              <div class="icon">
                <i class="fas fa-bell"></i>
              </div>
              <a href="#" class="small-box-footer">View All <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include '../includes/footer.php'; ?>
