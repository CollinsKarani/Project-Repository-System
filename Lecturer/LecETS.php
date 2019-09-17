<?php  require_once("headerLec.php"); ?>
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
                      <li class="active"><a class="" href="Lecturer.php">Home</a></li>

                      </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>My Account</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                  <li><a class="" href="enrolment-profile.php">Enrolment Profile</a></li>
                  <li><a class="" href="account-administration.php">Account Administration</a></li>

                  <!-- <li><a class="" href="update-profile-to-upto-date">Update Admission info</a></li>
                      <li><a class="" href="parent-record-info">Parent Information</a></li>
                      <li><a class="" href="assessment-performance">My Results</a></li>
                      <li><a class="" href="feepaidbal">Fee Status</a></li>
                      <li><a class="" href="account-administration">Account Administration</a></li>
                   </li>-->
                  </ul>

              <li class="sub-menu">
                  <a href="LecProject.php" class="">
                      <i class="icon-building"></i>
                      <span>Repositories</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="students.php" class="">
                      <i class="icon-building"></i>
                      <span>Students</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="AddStudent.php" class="">
                      <i class="icon-building"></i>
                      <span>Add Student</span>
                  </a>
              </li>
              
              <li class="sub-menu">
                  <a href="staff.php" class="">
                      <i class="icon-building"></i>
                      <span>Supervisors/Lecturers</span>
                  </a>
              </li>

              <!--<li class="sub-menu">
                  <a href="AddAdmin.php" class="">
                      <i class="icon-building"></i>
                      <span>Add Admin</span>
                  </a>
              </li>-->
              <li class="sub-menu">
                  <!--<a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>My Projects</span>
                      <span class="arrow"></span>
                  </a>-->
                  <ul class="sub">
                      <li><a class="" href="#">   View projects</a></li>
                  </ul>


              </li>
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
                                <img src="images/logo.JPG" alt="" style="height:62px;padding-top:none !important;" />&nbsp;&nbsp;MMUST PROJECT REPOSITORY
                            </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Project repository system</a>
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
                  <div class="span12">
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-home"></i> Available Repositories</h4>
                                   <span class="tools">
                                       <a class="icon-chevron-down" href="javascript:;"></a>
                                       <a class="icon-remove" href="javascript:;"></a>
                                       </span>
                        </div>
                        <div class="widget-body form">
                               <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                            <tr>


                                <th >Registration Number</th>
                                <th>Project Title</th>
                                <th>Submission Date</th>
                                <th>Project Description</th>
                                <th>Project Name</th>
                                <th>View</th>
                                <th>Download doc</th>
                                <th>Download zip</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                              $result = $conn ->prepare("SELECT * FROM project_tbl WHERE studentRegNo LIKE'%ETS%'");
                              $result ->execute();
                              	while($project=$result->fetch(PDO::FETCH_ASSOC))
                                   {
                         	?>
                         <tr>
                       <td><?php echo $project['studentRegNo']; ?></td>
                          <td><?php echo $project['project_title']; ?></td>
                          <td><?php echo $project['project_description']; ?></td>
                          <td><?php echo $project['project_documentation']; ?></td>
                          <td><?php echo $project['project_sourcefiles']; ?></td>
                          <td><?php echo $project['date']; ?></td>
                          <td><a href="../uploads/sourcefiles/<?php echo $project['project_documentation']; ?>">Download</a></td>
                          <td><a href="../uploads/sourcefiles/<?php echo $project['project_sourcefiles']; ?>">Download</a></td>
                          <td><input type="button" value="Delete" onclick="deleteRow(this)"></td>


                    </tr>
            <?php
        }
        ?>

                            </tbody>
                            </table>
                        </div>
                    </div>
                      </div>




            </div>

         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
</div>

   <!-- BEGIN FOOTER -->
   <?php include('../footer.php'); ?>
   <!-- END FOOTER -->
