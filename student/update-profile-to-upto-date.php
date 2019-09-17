
   <?php include('header.php'); ?>
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
                      <li class="active"><a class="" href="dashboard.php">Home</a></li>

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
                  <a href="myproject.php" class="">
                      <i class="icon-building"></i>
                      <span>My Projects</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="students.php" class="">
                      <i class="icon-building"></i>
                      <span>Students Catalog</span>
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
                  <!--   <div class="span2">
                         <div class="profile-photo">
                             <img src="images/noimage.png" alt="">
                             <a href="javascript:;" class="edit" title="Edit Photo">
                                 <i class="icon-pencil"></i>
                             </a>
                         </div>
                         <a href="update-profile-to-upto-date" class="profile-features active">
                             <i class=" icon-home"></i>
                             <p class="info">Main Details</p>
                         </a>
                         <a href="parent-info-update" class="profile-features ">
                             <i class=" icon-male"></i>
                             <p class="info">Parent Info</p>
                         </a>
                         <a href="schoolupdate" class="profile-features">
                             <i class=" icon-certificate"></i>
                             <p class="info">My Schools</p>
                         </a>
                         <a href="#" class="profile-features">
                             <i class=" icon-lightbulb"></i>
                             <p class="info">Work Experience</p>
                         </a>
                         <a href="#" class="profile-features">
                             <i class=" icon-user"></i>
                             <p class="info">Profile</p>
                         </a>
                     </div>-->
                     <div class="span10">
                         <div class="profile-head">
                             <div class="span4">
                                 <h1><?php echo  $row['first_name'] .' '.$row['lastname']; ?></h1>
                                 <p>Student at <a href="#">Mmust SCI.</a></p>
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
                             <div class="span12 bio form">
                             <div class="widget green">
                                 <div class="widget-title">
                            <h4><i class="icon-home"></i>Main Profile Info</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="space20"></div>

                         <?php
            if((isset($_POST['btn-update'])))
                {

                $phone=($_POST['phone']);
                    try
                	{
            $stmt = $conn->prepare("UPDATE student_tbl SET phone='$phone' WHERE student_regno='$id'");
            
           	if($stmt->execute())
                {
                     ?>
                  <div class="alert alert-success" style="height: 20px; width: 90%;">
                  <strong>Success!</strong> Your Profile information has been updated successfully. Thanks you.</div>
                     <?php
                }
               	else
                {
                    ?>
                  <div class="alert alert-danger" style="height: 20px; width: 90%;">
                  <strong>Sorry!</strong> There was an error submitting your data.</div>
                     <?php
                }


            }
            	catch(PDOException $e){
            echo $e->getMessage();
        }

            }

?>
                                 <form class="form-horizontal" style="padding-left: 15px;" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" autocomplete="off" enctype="multipart/form-data">
                                      <div class="control-group">
                                         <label class="control-label">Registration Number:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="student_regno" value="<?php echo $update['student_regno']; ?>" readonly="readonly">
                                         </div>
                                     </div>
                                     <div class="control-group">
                                         <label class="control-label">First Name:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="first_name" value="<?php echo $update['first_name']; ?>" readonly="readonly">
                                         </div>
                                     </div>
                                      <div class="control-group">
                                         <label class="control-label">Middle Name:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="middlename" value="<?php echo $update['middlename']; ?>" readonly="readonly">
                                         </div>
                                     </div>
                                       <div class="control-group">
                                         <label class="control-label">Last Name:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="lastname" value="<?php echo $update['lastname']; ?>" readonly="readonly">
                                         </div>
                                     </div>
                                      <div class="control-group">
                                         <label class="control-label">Phone:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="phone" value="<?php echo $update['phone']; ?>">
                                         </div>
                                     </div>
                                 <!--<div class="control-group">
                                         <label class="control-label">Date of Birth:</label>

                                         <div class="controls">
                                             <input type="text" class="m-ctrl-medium span6" size="16" value="<?php echo $update['dob'];  ?>" placeholder="Click the field to choose date" id="dp3" name="dob">
                                         </div>
                                     </div>-->
                                     <!--<div class="control-group">
                                         <label class="control-label">Student Address:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="studeAddress" value="<?php echo $update['studeAddress'];  ?>"  autocomplete="off">
                                         </div>
                                     </div>-->
                                      <!--<div class="control-group">
                                         <label class="control-label">Religion:</label>
                                         <div class="controls">
                                             <input type="text" class="span6" name="studeReligion" value="<?php echo $update['studeReligion'];  ?>" autocomplete="off">
                                         </div>
                                     </div>-->
                                     <!--<div class="control-group">
                                         <label class="control-label">Email:</label>
                                         <div class="controls">
                                             <input type="email" class="span6 " name="studeEmail" value="<?php echo $update['studeEmail'];  ?>"  autocomplete="off">
                                         </div>
                                     </div>-->
                                      <!--<div class="control-group">
                                <label class="control-label">County:</label>
                                <div class="controls">
                                    <select class="span6" name="studeCounty" value="<?php echo $update['studeCounty'];  ?>" data-placeholder="Choose a County" >
                                        <option value="">Select County...</option>
<option value="BARINGO">BARINGO</option>
<option value="BOMET">BOMET</option>
<option value="BUNGOMA">BUNGOMA</option>
<option value="BUSIA">BUSIA</option>
<option value="ELGEYO MARAKWET">ELGEYO MARAKWET</option>
<option value="EMBU">EMBU</option>
<option value="GARISSA">GARISSA</option>
<option value="HOMA BAY">HOMA BAY</option>
<option value="ISIOLO">ISIOLO</option>
<option value="KAJIADO">KAJIADO</option>
<option value="KAKAMEGA">KAKAMEGA</option>
<option value="KERICHO">KERICHO</option>
<option value="KIAMBU">KIAMBU</option>
<option value="KILIFI">KILIFI</option>
<option value="KIRINYAGA">KIRINYAGA</option>
<option value="KISII">KISII</option>
<option value="KISUMU">KISUMU</option>
<option value="KITUI">KITUI</option>
<option value="KWALE">KWALE</option>
<option value="LAIKIPIA">LAIKIPIA</option>
<option value="LAMU">LAMU</option>
<option value="MACHAKOS">MACHAKOS</option>
<option value="MAKUENI">MAKUENI</option>
<option value="MANDERA">MANDERA</option>
<option value="MARSABIT">MARSABIT</option>
<option value="MERU">MERU</option>
<option value="MIGORI">MIGORI</option>
<option value="MOMBASA">MOMBASA</option>
<option value="MURANGA">MURANGA</option>
<option value="NAIROBI">NAIROBI</option>
<option value="NAKURU">NAKURU</option>
<option value="NANDI">NANDI</option>
<option value="NAROK">NAROK</option>
<option value="NYAMIRA">NYAMIRA</option>
<option value="NYANDARUA">NYANDARUA</option>
<option value="NYERI">NYERI</option>
<option value="SAMBURU">SAMBURU</option>
<option value="SIAYA">SIAYA</option>
<option value="TAITA TAVETA">TAITA TAVETA</option>
<option value="TANA RIVER">TANA RIVER</option>
<option value="THARAKA NITHI">THARAKA NITHI</option>
<option value="TRANS NZOIA">TRANS NZOIA</option>
<option value="TURKANA">TURKANA</option>
<option value="UASIN GISHU">UASIN GISHU</option>
<option value="VIHIGA">VIHIGA</option>
<option value="WAJIR">WAJIR</option>
<option value="WEST POKOT">WEST POKOT</option>
                                    </select>
                                </div>
                                </div>
                                      <div class="control-group">
                                         <label class="control-label">Sub-County:</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="studeSubCounty" value="<?php echo $update['studeSubCounty'];  ?>" autocomplete="off">
                                         </div>
                                     </div>
                                     <div class="control-group">
                                         <label class="control-label">Mobile</label>
                                         <div class="controls">
                                             <input type="text" class="span6 " name="studeMobile" value="<?php echo $update['studeMobile'];  ?>" maxlength="10" autocomplete="off">
                                         </div>
                                     </div>
                                     -->

                                     <div class="form-actions">
                                         <button class="btn btn-success" type="submit" name="btn-update">Update Info</button>
                                         <button class="btn btn-danger" type="reset" name="btn-cancel">Cancel</button>
                                     </div>
                                 </form>
                                 </div>
                                 <div class="space10"></div>
                                 <div class="space20"></div>

                             </div>
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