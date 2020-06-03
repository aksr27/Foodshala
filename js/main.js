
$(document).ready(function(){
	$('#user_R').click(function(){
		$('#signup_rest_name').prop('hidden',false);
	});
	$('#user_U').click(function(){
		$('#signup_rest_name').prop('hidden',true);
	});
});

$(document).ready(function(){	
	$('#sidebar_login').click(function(){
		$("#login_modal").modal('toggle');
	});
	$('#sidebar_signup').click(function(){
		$("#signup_modal").modal('toggle');
	});	
	$('#login_btn').click(function(){
		var email=$('#login-email').val();
		var passwd=$('#passwd').val();
		var type=$('input[type=radio][name=user_type]:checked').val();
		var base_url = $('#base_url').val()+"login/";

		var data={email:email,passwd:passwd,type:type}
		$.post(base_url,
		{
			data:data,
		},
		function(data){
			var data=$.parseJSON(data);
			if(data['status']=='200')
			{
				if(data['user_type']=='R')
				{
					$(document).ajaxStop(function(){
					  setTimeout(window.location.replace(data['url']),1000);
					  window.location.reload()
					});
				}
				else
				{
					$(document).ajaxStop(function(){
					  setTimeout(window.location.reload(),1000);
					});
				}
				alert("Logged in Successfully!");
			}
			else if(data['status']=='401')
				alert("Enter correct email and password!");
		});
	});
});


$(document).ready(function(){
	$('#logouts').click(function(){
		var base_url = $('#base_url').val();
		$.get(base_url+'logout/',{},
		function(data){
			$(document).ajaxStop(function(){
			  setTimeout(window.location.replace(base_url),1000);
			});
			alert("Logged out!");
		});
	});
});


$(document).ready(function(){
$('#signup_btn').click(function(){
		var email=$('#signup_email').val();
		var passwd1=$('#pwd1').val();
		var passwd2=$('#pwd2').val();
		var type=$('input[type=radio][name=signup_user_type]:checked').val();
		var name=$('#signup_name').val();
		var contact=$('#signup_contact').val();
		var address=$('#signup_address').val();
		var base_url = $('#base_url').val()+"signup/";
		$('#err').hide();
		$('#pass_err').hide();
		$('#cont_err').hide();
		$('#email_err').hide();
		$('#name_err').hide();
		if(email=='' || name=='' || passwd1=='' || passwd2=='' || type==undefined || name=='' || contact=='' || address=='')
		{
			$('#err').show();
			$('#err').html("All input fields are required*.").css({'color':'red','font-size':'15px'});
			return false;
		}
		if(name!='' && !name.match('[a-zA-Z]{3,20}'))
		{
			$('#name_err').show();
			$('#name_err').html("Enter valid name.").css({'color':'red','font-size':'15px'});
			$('#signup_name').focus();
			return false;
		}
		if(passwd1!='' && passwd1!=passwd2)
		{
			$('#pass_err').show();
			$('#pass_err').html("Enter same passwords in both fields.").css({'color':'red','font-size':'15px'});
			$('#pwd2').focus();
			return false;
		}
		if(contact!='' && !contact.match('[0-9]{10}'))
		{
			$('#cont_err').show();
			$('#cont_err').html("10 digit mobile number required.").css({'color':'red','font-size':'15px'});
			$('#signup_contact').focus();
			return false;
		}
		if(email!='' && !email.match('^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+[.][a-zA-Z]{2,4}$'))
		{
			$('#email_err').show();
			$('#email_err').html("Invalid format.").css({'color':'red','font-size':'15px'});
			$('#signup_email').focus();
			return false;
		}
		else
		{
			var data={email:email,passwd:passwd1,type:type,name:name,contact:contact,address:address};
			$.post(base_url,
			{
				data:data,
			},
			function(data){
				var data=$.parseJSON(data);
				// alert(data['status']);
				if(data['status']=='200')
				{
					alert("Successfully registered with foodshala!");
				}
				else if(data['status']=='403')
				{
					alert("You are already registered!");
				}
				else
					alert("Something went wrong, please try again!");
				$('.close').click();
			});
		}
	});
});

