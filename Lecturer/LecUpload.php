
 <?php include('headerLec.php');  ?>

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
         <!-- BEGIN PAGE CONTENT-->
         <div class="row-fluid">
             <!--BEGIN METRO STATES-->
             <div class="metro-nav">
                 <div class="metro-nav-block nav-block-orange">
                     <a data-original-title="" href="COM_projects.php">
                         <i class="icon-book"></i>
                         <div class="info"></div>
                         <div class="status">Computer Science</div>
                     </a>
                 </div>
                 <div class="metro-nav-block nav-olive">
                     <a data-original-title="" href="SIT_projects.php">
                         <i class="icon-calendar"></i>
                         <div class="info"></div>
                         <div class="status">Information Technology</div>
                     </a>
                 </div>
                 <div class="metro-nav-block nav-block-yellow">
                     <a data-original-title="" href="SIK_projects.php">
                         <i class="icon-comments-alt"></i>
                         <div class="info"></div>
                         <div class="status">Knowledge Management</div>
                     </a>
                 </div>

                 <div class="metro-nav-block nav-block-green double">
                     <a data-original-title="" href="ETS_projects.php">
                         <i class="icon-calendar"></i>
                         <div class="info"></div>
                         <div class="status">Education Technology</div>
                     </a>
                 </div>

                 <div class="metro-nav-block nav-block-red">
                     <a data-original-title="" href="#">
                         <i class="icon-bar-chart"></i>
                         <div class="info"></div>
                         <div class="status"></div>
                     </a>
                 </div>
             </div>

         </div>
         <div class="row-fluid">
             <div class="span6">
                 <!-- BEGIN CHART PORTLET-->
                
                <strong> <font color="red"><big>Kindly enter project details</big></font></strong>
                 </div>
                 <!-- END CHART PORTLET-->
             </div>
             <div class="span6">
                 <!-- BEGIN CHART PORTLET-->
                 <div class="widget green">
                     <div class="widget-title">
                         <h4><i class="icon-bolt"></i>Upload Your Repository</h4>
                         <span class="tools">
                             <a href="javascript:;" class="icon-chevron-down"></a>
                             <a href="javascript:;" class="icon-remove"></a>
                         </span> </div>

                     <div class="widget-body">
                           <?php

       if(isset($_POST['upload'])){
           move_uploaded_file($_FILES["project_documentation"]["tmp_name"],"../uploads/documentation/".$_FILES['project_documentation']['name']);
           move_uploaded_file($_FILES["project_sourcefiles"]["tmp_name"],"../uploads/sourcefiles/".$_FILES['project_sourcefiles']['name']);

           $studentRegNo = $row['username'];
           $project_title = $_POST['projecttitle'];
           $academicID = $_POST['year'];
           $SupervisorID = $_POST['superID'];
           $project_description = $_POST['desc'];
           $date = date('Y-m-d');
          $doc = $_FILES['project_documentation']['name'];
          $soc = $_FILES['project_sourcefiles']['name'];
           $sql = $conn->prepare("INSERT INTO project_tbl (studentRegNo,academicID,SupervisorID,project_title,project_description,project_documentation,project_sourcefiles,date) VALUES ('$studentRegNo','$academicID','$SupervisorID','$project_title','$project_description','$doc','$soc','date')");
           //$upload = mysqli_query($conn, $sql);
           if(!$sql->execute()){
               echo "Error Occurred:".$e->getMessage();
           }
           else{
              echo "<div class='alert alert-success'>Your project is successfully uploaded. Kindly wait for approval by the lecturer</div> ";
           }

         }

   ?>
   <form method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="">Project Name:</label>
          <input type="text" class="form-control" name="projecttitle" />
      </div>

       <div class="form-group">
          <label for="">SupervisorID:</label>
          <select name="superID" id="superID" class="form-control">
             <option value="">~~Select Supervisor~~</option>
             <?php
               $sql=$conn->prepare("SELECT * FROM staff_tbl");
               $sql->execute();
               while($acaderow=$sql->fetch(PDO::FETCH_ASSOC)){
                   ?>
                   <option value="<?php echo $acaderow['pfnumber']; ?>"><?php echo $acaderow['firstname'].' '.$acaderow['lastname']; ?></option>
                   <?php
               }

             ?>
         </select>
      </div>
       <div class="form-group">
          <label for="">AcademicYear:</label>
         <select name="year" id="year" class="form-control">
             <option value="">~~Select Academic Year~~</option>
             <?php
               $sql=$conn->prepare("SELECT * FROM academic_tbl");
               $sql->execute();
               while($acaderow=$sql->fetch(PDO::FETCH_ASSOC)){
                   ?>
                   <option value="<?php echo $acaderow['academicID']; ?>"><?php echo $acaderow['academic_name']; ?></option>
                   <?php
               }

             ?>
         </select>
      </div>

        <div class="form-group">
          <label for="">Project Description:</label>
          <textarea name="desc" id="desc" cols="30" rows="2"></textarea>
      </div>
      <!--<div class="form-group">
          <label for="">Project Summary:</label>
          <textarea name="sum" id="sum" cols="30" rows="4"></textarea>
      </div>-->

       <div class="form-group">
          <label for=""><strong>Upload Documentation:</strong></label>
          <input type="file" class="form-control" name="project_documentation" />
      </div>
      <p>
      <div class="form-group">
          <label for=""><strong>Upload Source Code:</strong></label>
          <input type="file" class="form-control" name="project_sourcefiles" />
      </div>
      </p>
      <div class="form-group">
          <button class="btn btn-success" type="submit" name="upload"><i class="fa fa-upload"></i>&nbsp;&nbsp;Upload Now</button>
      </div>
   </form>
                 </div>
                 <!-- END CHART PORTLET-->

         </div>

         <!--<div class="row-fluid">
              <div class="span6">
                  <!- BEGIN NOTIFICATIONS PORTLET-->
                 <!-- <div class="widget blue">
                      <div class="widget-title">
                          <h4><i class="icon-edit"></i> Update Information </h4>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                        </span>
                      </div>
                      <div class="widget-body form">

                      </div>
                  </div>
                  <-- END NOTIFICATIONS PORTLET-->
              </div>
              <!--<div class="span6">
                  <!- BEGIN CHAT PORTLET-->
                  <!--<div class="widget red">
                      <div class="widget-title">
                          <h4><i class="icon-comments-alt"></i> Information</h4>
                                 <span class="tools">
                                 <a href="javascript:;" class="icon-chevron-down"></a>
                                 <a href="javascript:;" class="icon-remove"></a>
                                 </span>
                      </div>
                      <div class="widget-body">

                      </div>
                  </div>
                  <!- END CHAT PORTLET-->
              </div>
          </div>
         <!-- END PAGE CONTENT-->
      </div>
      <!-- END PAGE CONTAINER-->
   </div>
   <!-- END PAGE -->
</div>
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<?php include('../footer.php'); ?>
