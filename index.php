<?php
session_start();
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_type'] == 'parent') {
        header("Location: parent/dashboard.php");
        exit();
    } else {
        header("Location: child/dashboard.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskJoy - Make Tasks for Kids Fun</title>
    <link rel="stylesheet" href="assets/css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- San Francisco Font -->
    <!-- Note: The San Francisco font is Apple's proprietary font and isn't freely available via web fonts.
         We will use a strong fallback font stack that includes system fonts for a similar clean look. -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="logo">
            <i class="fas fa-star"></i> TaskJoy
        </a>
        <!-- Mobile Menu Toggle Button -->
        <div class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- Navigation Links -->
        <div class="nav-links">
            <a href="login.php" class="btn btn-ghost">Login</a>
            <a href="parent_register.php" class="btn btn-primary">Registration</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content animate-fade-in">
            <h1>Make Tasks for Kids<br><span style="color: var(--primary);">Fun & Rewarding</span></h1>
            <p>Transform daily chores into exciting quests with our task management platform designed specifically for children.</p>
            <div class="hero-buttons">
                <a href="parent_register.php" class="btn btn-primary">Start Your Quest</a>
                <a href="#features" class="btn btn-secondary">Why Kids Love TaskJoy?</a>
            </div>
        </div>
        <div class="hero-image animate-float">
            <img src="assets/img/side.jpg" alt="TaskJoy Dashboard Preview">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="section-header">
            <h2>Turning chores into adventures!</h2>
            <p>Discover how TaskJoy makes productivity fun for the whole family</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <h3>Gamified Experience</h3>
                <p>Earn points, unlock achievements, and level up as you complete tasks!</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <h3>Fun Rewards</h3>
                <p>Redeem points for exciting rewards chosen by parents and kids together.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Track Progress</h3>
                <p>Visual progress charts make it easy to see improvement and stay motivated.</p>
            </div>
        </div>
    </section>

    <!-- Parent/Child Benefits -->
    <section class="split-section">
        <div class="section-header">
            <h2>Parent-Child Task Management</h2>
            <p>A revolutionary system to manage tasks and rewards for your children</p>
        </div>
        <div class="split-grid">
            <div class="split-card parent">
                <h3><i class="fas fa-user-shield" style="color: var(--primary);"></i> For Parents</h3>
                <ul class="benefit-list">
                    <li><i class="fas fa-check-circle"></i> Create and assign tasks to your children</li>
                    <li><i class="fas fa-check-circle"></i> Track progress and completion</li>
                    <li><i class="fas fa-check-circle"></i> Award points for completed tasks</li>
                    <li><i class="fas fa-check-circle"></i> Set up a reward system</li>
                </ul>
            </div>
            <div class="split-card child">
                <h3><i class="fas fa-child" style="color: var(--secondary);"></i> For Children</h3>
                <ul class="benefit-list">
                    <li><i class="fas fa-check-circle"></i> View assigned tasks and deadlines</li>
                    <li><i class="fas fa-check-circle"></i> Submit completed tasks</li>
                    <li><i class="fas fa-check-circle"></i> Earn points and rewards</li>
                    <li><i class="fas fa-check-circle"></i> Track progress with fun visuals</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Today's Quests Preview -->
    <section class="quests-preview">
        <h2>Today's Quests</h2>
        <p>See what adventures await!</p>
        <div class="quest-cards">
            <div class="quest-card">
                <span class="quest-points">10 points</span>
                <div class="quest-title">Make Your Bed</div>
                <div class="progress-bar" style="height: 4px; background: #eee; border-radius: 2px; margin-top: 10px;">
                    <div style="width: 0%; height: 100%; background: var(--success); border-radius: 2px;"></div>
                </div>
            </div>
            <div class="quest-card">
                <span class="quest-points">20 points</span>
                <div class="quest-title">Read for 20 Minutes</div>
                <div class="progress-bar" style="height: 4px; background: #eee; border-radius: 2px; margin-top: 10px;">
                    <div style="width: 60%; height: 100%; background: var(--warning); border-radius: 2px;"></div>
                </div>
            </div>
            <div class="quest-card">
                <span class="quest-points">30 points</span>
                <div class="quest-title">Help with Dinner</div>
                <div class="progress-bar" style="height: 4px; background: #eee; border-radius: 2px; margin-top: 10px;">
                    <div style="width: 100%; height: 100%; background: var(--primary); border-radius: 2px;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Transform Chores into Adventures?</h2>
            <p>Join thousands of families making task management fun and rewarding for kids!</p>
            <a href="parent_register.php" class="btn btn-white">Start Your Free Trial</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">TaskJoy</div>
            <div class="social-links">
                <!-- Social icons could go here -->
            </div>
        </div>
        <div class="copyright">
            &copy; 2025 TaskJoy. All rights reserved.
        </div>
    </footer>

    <!-- =================================== -->
    <!-- JAVASCRIPT FOR TOGGLE FUNCTIONALITY -->
    <!-- =================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const navLinks = document.querySelector('.nav-links');

            // Toggle mobile menu
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenuToggle.classList.toggle('active');
                navLinks.classList.toggle('active');
            });

            // Close mobile menu when clicking on a link
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenuToggle.classList.remove('active');
                    navLinks.classList.remove('active');
                });
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
