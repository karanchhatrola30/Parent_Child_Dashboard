<?php
include '../includes/db.php';
include '../includes/header.php';
include '../includes/sidebar.php';

// Check if user is logged in and is a parent
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'parent') {
    header("Location: ../login.php");
    exit();
}

$parent_id = $_SESSION['user_id'];

// Get counts
$children_count = $conn->query("SELECT COUNT(*) as count FROM children WHERE parent_id = $parent_id")->fetch_assoc()['count'];
$tasks_count = $conn->query("SELECT COUNT(*) as count FROM tasks WHERE parent_id = $parent_id")->fetch_assoc()['count'];
$pending_wishes = $conn->query("SELECT COUNT(*) as count FROM wishes w JOIN children c ON w.child_id = c.id WHERE c.parent_id = $parent_id AND w.status = 'pending'")->fetch_assoc()['count'];
$unread_notifications = $conn->query("SELECT COUNT(*) as count FROM notifications WHERE user_id = $parent_id AND user_type = 'parent' AND is_read = 0")->fetch_assoc()['count'];

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
                <h3><?php echo $children_count; ?></h3>
                <p>Children</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="children.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $tasks_count; ?></h3>
                <p>Total Tasks</p>
              </div>
              <div class="icon">
                <i class="fas fa-tasks"></i>
              </div>
              <a href="tasks.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $pending_wishes; ?></h3>
                <p>Pending Wishes</p>
              </div>
              <div class="icon">
                <i class="fas fa-gift"></i>
              </div>
              <a href="wishes.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
