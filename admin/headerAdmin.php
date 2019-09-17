
   <?php
   session_start();
   $id=$_SESSION['admin_session'];
    $role=$_SESSION['role'];
if(!isset($id)|| $role!=1)
{
	header("Location: ../index.php");
}

include_once '../inc/connect.php';
$stmt = $conn->prepare("SELECT * FROM staff_tbl INNER JOIN login_tbl ON (login_tbl.username=staff_tbl.pfnumber) WHERE login_tbl.username=:uid");
$stmt->execute(array(":uid"=>$id));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

 <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
   <meta charset="utf-8" />
   <link rel="shortcut icon" href="images/favicon.ico">
    <title>project repository system</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="../assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="../css/style.css" rel="stylesheet" />
   <link href="../css/style-responsive.css" rel="stylesheet" />
   <link href="../css/style-default.css" rel="stylesheet" id="style_color" />
   <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
  <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.php">
                   <h4 style="color: #FFFFFF">MMUST PROJECTS</h4>
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->

               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                           <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-tasks"></i>
                               <span class="badge badge-important">0</span>
                           </a>
                           <ul class="dropdown-menu extended tasks-bar">
                               <li>
                                   <p>You have 0 pending tasks</p>
                               </li>

                           </ul>
                       </li>

                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">0</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 0 new messages</p>
                               </li>

                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                               <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">0</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 0 new notifications</p>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown dropdown-user">
                           <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                               <img src="img/profile.jpg" alt="">
                               <span class="username"> <?php echo $row['firstname'].' '.$row['lastname']; ?></span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="enrolment-profile"><i class="icon-user"></i> My Profile</a></li>
                               <li>
                            <a href="#"><i class="icon-calendar"></i> My Calendar </a> </li>

                               <li><a href="account-administration"><i class="icon-cog"></i> My Settings</a></li>
                               <li><a href="../logout"><i class="icon-key"></i> Log Out&nbsp; &nbsp;<strong>(<?php echo  $row['pfnumber'];?>)</strong></a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>

   <!-- END HEADER -->