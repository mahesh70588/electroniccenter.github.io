<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE   ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!--bootstrap css-->
     <link rel="stylesheet" href="../css/bootstrap.min.css">

<!--font awesome css-->
<link rel="stylesheet" href="../css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">



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
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Electronic service repairing</a></nav>

 <!--start container-->
 <div class="container-fluid"  style="margin-top:40px;">
    <div class="row"><!--start row-->
        <nav class="col-sm-2 bg-light sidebar py-5">
            <!--sidebar-->
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='dashboard'){echo 'active';} ?>" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='work'){echo 'active';} ?>" href="work.php"><i class="fab fa-accessible-icon"></i> Work Order</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='requests'){echo 'active';} ?>" href="requests.php"><i class="fas fa-align-center"></i> Requests</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='assests'){echo 'active';} ?>" href="assests.php"><i class="fas fa-database"></i> Assests</a></li>


                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='technician'){echo 'active';} ?>" href="technician.php"><i class="fab fa-teamspeak"></i> Technician</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='requester'){echo 'active';} ?>" href="requester.php"><i class="fas fa-users"></i> Requester</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='sellreport'){echo 'active';} ?>" href="sellreport.php"><i class="fas fa-table"></i> Sell Report</a></li>

                    <li class="nav-item">
                    <a  class="nav-link <?php if(PAGE =='workreport'){echo 'active';} ?>" href="workreport.php"><i class="fas fa-table"></i> Work report</a></li>




                   
                    <li class="nav-item">
                    <a  class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                </ul>
            </div>
</nav>
 <!--sidebar end 1st column-->

