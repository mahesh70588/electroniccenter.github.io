<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--font awesome css-->
    <link rel="stylesheet" href="css/all.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">

    <title>
        <?php echo TITLE ?></title>
    <style>
    /* CSS for changing the color of nav items in the sidebar */
    .sidebar-sticky .nav-link {
        color: #333; /* Change this to your desired color */
    }

    
    .sidebar-sticky .nav-link.active {
    background-color: blue; /* Your desired color for active link */
    /* Additional styles for active link */
}

</style>

</head>
<body>
    <!--top navbar-->
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="requesterprofile.php">Electronic service repairing</a></nav>


    <!--start container-->
<div class="container-fluid"  style="margin-top:40px;">
    <div class="row"><!--start row-->
        <nav class="col-sm-2 bg-light sidebar py-5">
            <!--sidebar-->
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='requesterprofile'){echo 'active';} ?>" href="requesterprofile.php"><i class="fas fa-user"></i>Profile</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='submitrequest'){echo 'active';} ?>" href="submitrequest.php"><i class="fab fa-accessible-icon"></i>Submit Request</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='servicestatus'){echo 'active';} ?>" href="servicestatus.php"><i class="fas fa-align center"></i>Service status</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='changepassword'){echo 'active';} ?>" href="changepassword.php"><i class="fas fa-key"></i>Change Password</a></li>

                    <li class="nav-item">
                    <a  class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                </ul>
            </div>
</nav>
 <!--sidebar end-->


 

   