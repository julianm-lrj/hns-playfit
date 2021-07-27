<!DOCTYPE html>
<html>
    <head>
        <?php require 'assets/includes/dashboard/dashboard-head.php' ?>
    </head>
    <body class="nav-fixed">
        <?php require 'assets/includes/dashboard/nav-top.php' ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php require 'assets/includes/dashboard/nav-side.php' ?>
            </div>
            <div id="layoutSidenav_content">
                <?php require 'assets/includes/dashboard/content/dashboard-main.php' ?>
                <?php require 'assets/includes/dashboard/dashboard-footer.php' ?>
            </div>
        </div>
        
        <?php require 'assets/includes/scripts.php' ?>
    </body>  
</html>