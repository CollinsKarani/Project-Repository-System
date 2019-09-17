 <?php include('headerAdmin.php');  ?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
           <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->
                    <ul class="sidebar-menu">
              <li class="sub-menu active">
                  <a class="" href="javascript:;">
                      <i class="icon-dashboard"></i>
                      <span>Dashboard</span>
                       <span class="arrow"></span>
                  </a>
                   <ul class="sub">
                      <li class="active"><a class="" href="administration.php">Home</a></li>

                      </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>My Account</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                  <li><a class="" href="#">Enrolment Profile</a></li>
                  <li><a class="" href="account-administration.php">Account Administration</a></li>

                  <!-- <li><a class="" href="update-profile-to-upto-date">Update Admission info</a></li>
                      <li><a class="" href="parent-record-info">Parent Information</a></li>
                      <li><a class="" href="assessment-performance">My Results</a></li>
                      <li><a class="" href="feepaidbal">Fee Status</a></li>
                      <li><a class="" href="account-administration">Account Administration</a></li>
                   </li>-->
                  </ul>

              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-building"></i>
                      <span>Repositories</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="projects.php">View projects</a></li>
                  </ul>
              </li>
              
              <li class="sub-menu">
                  <a href="AdminProject.php" class="">
                      <i class="icon-building"></i>
                      <span>Repositories</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="AddStudent.php" class="">
                      <i class="icon-building"></i>
                      <span>Add Student</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="AddLecturer.php" class="">
                      <i class="icon-building"></i>
                      <span>Add Lecturer</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="staff.php" class="">
                      <i class="icon-building"></i>
                      <span>Supervisors/Lecturers</span>
                  </a>
              <li class="sub-menu">
                  <a href="students.php" class="">
                      <i class="icon-building"></i>
                      <span>Students</span>
                      
                  </a>
                  <!-- <ul class="sub">
                      <li><a class="" href="students.php">View projects</a></li>
                  </ul> -->
              </li>
              <!--<li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>My Projects</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="myproject.php">   View projects</a></li>
                  </ul>


              </li>-->
              <!--
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-calendar"></i>
                      <span>Reporting Dates</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="termdates">Term Updates</a></li>
                  </ul>
              </li>    -->
              <li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-envelope"></i>
                      <span>Messages</span>
                      <span class="arrow"></span>
                  </a>
                  <li class="sub-menu">
                  <!--<a class="" href="administration.php">
                      <i class="icon-key"></i>
                      <span>Admin Panel</span>
                      <span class="arrow"></span>
                  </a>-->
                  <!--
                  <ul class="sub">
                      <li><a href="#" class=""> Discipline</a></li>
                      <li><a href="#" class="">Mails</a></li>
                  </ul>
              </li>
              -->
              <!--<li class="sub-menu">
                  <a class="" href="javascript:;">
                      <i class="icon-folder-close"></i>
                      <span>File/Documents</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">

                      <li><a class="" href="assignment">My Assignment</a></li>
                  </ul>
              </li>
             <li class="sub-menu">
                      <a class="" href="assignment.php">
                          <i class="icon-file-alt"></i>
                          <span>My Assignment</span>
                      </a>
                  </li>
                  <li class="tooltips s" data-placement="right" data-original-title="Reporting Dates"><a href="#"><i class="icon-signin"></i> <span class="title">Reporting Dates</span></a></li>

          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Profile
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Profile</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           View
                       </li>
                       <li class="pull-right no-text-shadow" style="background-color: #99CCFF; padding: 4px; height: 20px;">
                                    <div id="dashboard-rert-range" class="dashboard-date-range no-tooltip-on-touch-device responsive">

                                      <?php
                                    echo'Welcome: ' .date('l jS  F Y ');
                                       ?>
                                    </div>
                                </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
                 <!-- BEGIN PROFILE PORTLET-->
                 <div class=" profile span12">

                     <div class="span10">
                         <div class="profile-head">
                             <div class="span4">
                                 <h1><?php echo  $row['firstname'] .' '.$row['lastname']; ?></h1>
                                 <p>Lead Designer at <a href="#">Mmust.</a></p>
                             </div>

                             <div class="span4">
                                 <ul class="social-link-pf">
                                     <li><a href="#">
                                         <i class="icon-facebook"></i>
                                     </a></li>
                                     <li><a href="#">
                                         <i class="icon-twitter"></i>
                                     </a></li>
                                     <li><a href="#">
                                         <i class="icon-linkedin"></i>
                                     </a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="space15"></div>
                         <div class="row-fluid">
                         <div class="widget red">
                          <div class="widget-title">
                                <h4><i class="icon-home"></i>Account Details</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                            </div>

                             <div class="span6 bio">
                                 <h3>Personal</h3>
                                 <hr>
                                 <p><label>First Name </label>: <strong><?php echo  $row['firstname'] ?></strong></p>
                                  <p><label>Registration No </label>:<strong> <?php echo $row['pfnumber'] ?></strong></p>
                                 <p><label>Country </label>:<strong> Kenya</strong></p>
                                 <p><label>Middle Name </label>:<strong><?php echo $row['middlename']; ?></strong></p>
                                 <p><label>Last Name </label>: <strong><?php echo $row['lastname']; ?></strong></p>
                                 <p><label>Phone Number</label>:<strong><?php echo $row['phone_number'];?></strong></p>
                                  <div class="space20"></div>

                                 <hr>
                                 <div class="text-center">
                                     <a href="update-profile-to-upto-date.php"><button class="btn btn-primary" ><i class="icon-pencil icon-white"></i>Edit Information</button></a>
                                 </div>
                             </div>
                             <h3>Information</h3>
                                 <hr>
                               <!--<div class="row-fluid">
                             <div class="span6 bio">
                                <p><label>K.C.P.E Marks </label>: <strong><?php echo  $row['PriSchMarks']; ?></strong></p>
                                 <p><label>Phone Number </label>: <strong><?php echo  $row['Phone']; ?></strong></p>
                                  <p><label>Religion </label>:<strong> <?php  echo $row['studeReligion']; ?></strong></p>
                                 <p><label>Address </label>:<strong> <?php echo $row['studeAddress']; ?></strong></p>
                                  <p><label>County </label>:<strong> <?php  echo $row['studeCounty']; ?></strong></p>
                                 <p><label>Sub-County </label>: <strong><?php echo $row['studeSubCounty']; ?></strong></p>

                                  <div class="space20"></div>
                                 <hr>
                                 <div class="space20"></div>
                             </div>
                             <div class="space20"></div>
                                    <div class="space20"></div>
                         </div>-->
                         </div>

                     </div>

                 </div>
                 <!-- END PROFILE PORTLET-->
             </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
     <?php include('../footer.php'); ?>