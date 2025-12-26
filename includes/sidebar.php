<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">ParentChild Dash</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">
                    <?php echo isset($_SESSION['user_type']) ? ucfirst($_SESSION['user_type']) : 'User'; ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'parent'): ?>
                    <!-- Parent Menu -->
                    <li class="nav-item">
                        <a href="../parent/dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../parent/children.php" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Student Records</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../parent/tasks.php" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>Tasks & Homework</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../parent/results.php" class="nav-link">
                            <i class="nav-icon fas fa-chart-bar"></i>
                            <p>Results</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../parent/wishes.php" class="nav-link">
                            <i class="nav-icon fas fa-gift"></i>
                            <p>Wishes & Rewards</p>
                        </a>
                    </li>

                <?php elseif (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'child'): ?>
                    <!-- Child Menu -->
                    <li class="nav-item">
                        <a href="../child/dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../child/tasks.php" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>My Tasks</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../child/results.php" class="nav-link">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>My Results</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="../child/rewards.php" class="nav-link">
                            <i class="nav-icon fas fa-trophy"></i>
                            <p>My Rewards</p>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a href="../logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
