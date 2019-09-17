

$('document').ready(function()
{
     /* validation */
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			RegNo: {
            required: true,
            },
	   },
       messages:
	   {
            password:{
                      required: "Please Re-enter Registration Number."
                     },
            RegNo: {
              required: "Please enter your Registration Number"
            },
       },
	   submitHandler: submitForm
       });
	   /* validation */

	   /* login submit */
	   function submitForm()
	   {
			var data = $("#login-form").serialize();

			$.ajax({

			type : 'POST',
			url  : 'login_process.php',
			data : data,
			beforeSend: function()
			{
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success :  function(response)
			   {
					if(response=="ok"){

						$("#btn-login").html('<img src="img/btn-ajax-loader.gif" /> &nbsp;Admin Signing In ...');
						//setTimeout(' window.location.href = "dashboard.php"; ',4000);
					}
                      else	if(response=="ok1"){

						$("#btn-login").html('<img src="img/btn-ajax-loader.gif" /> &nbsp;Student Signing In ...');
						//setTimeout(' window.location.href = "dashboard.php"; ',4000);
					}
                      else	if(response=="ok2"){

						$("#btn-login").html('<img src="img/btn-ajax-loader.gif" /> &nbsp; LecturerAccount...');
						//setTimeout(' window.location.href = "dashboard.php"; ',4000);
					}
					else{

						$("#error").fadeIn(1000, function(){
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});