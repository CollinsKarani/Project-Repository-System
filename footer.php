 <div id="footer">
      2016 - <?php echo date('Y')   ?> &copy; Developed by Collins Karani.
   </div>
    <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="../js/jquery-1.8.3.min.js"></script>
   <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="../assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="../assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="../assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

   <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="../assets/chart-master/Chart.js"></script>
   <script src="../js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="../js/common-scripts.js"></script>
   <script>
    var timer = 0;
    function set_interval() {
        timer = setInterval("auto_logout()", 60000);
        // the figure '10000' above indicates how many milliseconds the timer be set to.
        // Eg: to set it to 5 mins, calculate 5min = 1x60 = 60 sec = 60,000 millisec.
        // So set it to 300000
    }
    function reset_interval() {
        if (timer != 0) {
            clearInterval(timer);
            timer = 0;
            timer = setInterval("auto_logout()", 60000);
        }
    }
    function auto_logout() {
        window.location = "portal-lock.php";
    }
    
</script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>