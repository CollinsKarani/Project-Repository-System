<?php  require_once("headerAdmin.php"); ?>

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
                  <a href="projects.php" class="">
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
             <!-- <li class="sub-menu">
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
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Project repository system</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Dashboard
                       </li>
                       <li class="pull-right no-text-shadow" style="background-color: #99CCFF; padding: 4px; height: 20px;">
                                    <div id="dashboard-rert-range" class="dashboard-date-range no-tooltip-on-touch-device responsive">
                                       <i class="icon-calendar"></i>
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



                  <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN CHART PORTLET-->
                    <div class="widget purple ">
                        <div class="widget-title">
                            <h4><i class="icon-info-sign"></i> Student Details</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-refresh"></a>
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>

                        <div class="widget-body">
                            <?php
                              if(isset($_POST['register'])){
                                  $reg=$_POST['student_regno'];
                                  $fname=$_POST['first_name'];
                                  $mname=$_POST['middlename'];
                                  $lname=$_POST['lastname'];
                                  $phone=$_POST['phone'];
                                  $prog=$_POST['programmeID'];
                                  $register=$conn->prepare("INSERT INTO student_tbl (student_regno,first_name,middlename,lastname,phone,programmeID) VALUES('$reg','$fname','$mname','$lname','$phone','$prog')");
                                  if($register->execute()){
                                   echo '<div class="alert alert-success">Data successfully Saved. </div>';
                                  }
                                  else{
                                     echo '<div class="alert alert-danger">Opps!! An error occured while processing. </div>';
                                  }
                              }
                            ?>
                       <form method="post">
                              <div class="span4"> <div class="form-group">
             <label for="">Registration No:</label>
             <input type="text" class="form-control" name="student_regno" />
         </div> </div>
                               <div class="span4"> <div class="form-group">
             <label for="">First Name:</label>
             <input type="text" class="form-control" name="first_name" />
         </div> </div>
                                <div class="span4"> <div class="form-group">
             <label for="">Midddle Name:</label>
             <input type="text" class="form-control" name="middlename" />
         </div> </div>


                      <div class="row-fluid">
                          <div class="span12">
                              <div class="span4"> <div class="form-group">
             <label for="">Last Name:</label>
             <input type="text" class="form-control" name="lastname" />
         </div></div>
                      <div class="span4"><div class="form-group">
             <label for="">Phone No:</label>
             <input type="text" class="form-control" name="phone" />
         </div></div>
                      <div class="span4"> <div class="form-group">
             <label for="">Programme Id:</label>
             <select class="form-control" name="programmeID">
                 <option value="">Choose the Programme</option>
                 <?php
                 $prog=$conn->prepare("SELECT * FROM programme_tbl");
                 $prog->execute();
                 while($row=$prog->fetch(PDO::FETCH_ASSOC)){
                     ?>
                      <option value="<?php echo $row['programme_code']; ?>"><?php echo $row['programme_name']; ?></option>
                     <?php
                 }
                 ?>
             </select>
         </div></div>
                          </div>
                      </div>

                        <div class="row-fluid">
                          <div class="span12">

                      <div class="span4"> <div class="form-group">
            <button type="submit" name="register" class="btn btn-primary">Register Student</button>
         </div></div>
                          </div>
                      </div>




            </form>
                    </div>
                    </div>
                    <!-- END CHART PORTLET-->
                </div>
                  </div>
















            </div>

      <!-- END PAGE -->
   </div>
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <?php include('../footer.php'); ?>
   <!-- END FOOTER -->
