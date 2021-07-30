<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="../../../alerts.php">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="../../../messages.php">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Dashboard</div>
            <!-- Sidenav Accordion (Dashboard)-->
            <a class="nav-link <?php if ($activePage =="dashboard") { echo 'active'; } ?>" href="../../../dashboard.php">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Home
            </a>
            <a class="nav-link <?php if ($activePage =="mycalendar") { echo 'active'; } ?>" href="../../../mycalendar.php">
                <div class="nav-link-icon"><i data-feather="calendar"></i></div>
                Calendar
            </a>
            <a class="nav-link <?php if ($activePage =="myworkouts") { echo 'active'; } ?>"  href="../../../myworkouts.php">
                <div class="nav-link-icon"><i data-feather="user"></i></div>
                My Workouts
            </a>
            <a class="nav-link <?php if ($activePage =="bookaworkout") { echo 'active'; } ?>" href="../../../bookaworkout.php">
                <div class="nav-link-icon"><i data-feather="fast-forward"></i></div>
                Book A Workout
            </a>
            <div class="sidenav-menu-heading">Profile</div>
            <a class="nav-link" href="../../../profile.php">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                My Account
            </a>
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">Valerie Luna</div>
        </div>
    </div>
</nav>
