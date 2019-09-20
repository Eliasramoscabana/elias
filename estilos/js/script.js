
$('document').ready(function()
{ 
/* validation */
$("#login-form").validate({

submitHandler: submitForm	
});  
/* validation */

	

function submitForm()
{		
var data = $("#login-form").serialize();

$.ajax({

type : 'POST',
url  : 'login_process.php',
data : data,
beforeSend: function()
{	
$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Ingresar ...');
},
success :  function(response)
{						
        if(response == 1){

                $("#btn-login").html(' redirigiendo...');
                 $("#btn-login").attr('disabled','disabled');
                setTimeout(' window.location.href = "menuprincipal.php"; ',2000);
						$("body").overhang({
						  type: "primary",
						  message: "usuario encontrado lo estamos redirigiendo... ",
						});
						        }
        else{

                $("#error").fadeIn(2000, function(){						

                                                        $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Ingresar...');
                                                        $("#btn-login").attr('disabled','disabled');
                                                     $("body").overhang({
													  type: "error",
													  message: "Usuario Incorrecto :("
													});
                                                                      $("#btn-login").removeAttr('disabled');

                                        });
        }
}
});
return false;
}
/* login submit */
});