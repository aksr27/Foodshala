$(document).ready(function(){
	$('.remove_btn').click(function(){
		if (confirm("Are you sure, you want to remove!")) 
		{
			var id=$(this).attr('id');
	    	var base_url = $('#base_url').val()+"remove_item/";
	    	var data={id:id};
	    	$.post(base_url,
			{
				data:data,
			},
			function(data){
				var data=$.parseJSON(data);
				if(data['status']=='200')
				{
					alert("Removed Successfully!");
					$(document).ajaxStop(function(){
					  setTimeout(window.location.reload(),1000);
					});
				}
				else if(data['status']=='401')
					alert("Some error occured!");
			});
	  	}
	});
});

$(document).ready(function(){				
	$('#update_btn').click(function(){
		var restraunt_name=$('#rest_name').val();
		var description=$('#rest_description').val();
		var cusine=$('#rest_cusine').val();
		var address=$('#rest_address').val();
		var contact=$('#rest_contact').val();
		var email=$('#rest_email').val();
		var base_url = $('#base_url').val()+"update_restaurant/";

		$('#update_err').hide();
		$('#update_cont_err').hide();
		if(restraunt_name==null || description=='' || cusine==''|| contact=='' || address=='')
		{
			$('#update_err').show();
			$('#update_err').html("All input fields are required*.").css({'color':'red','font-size':'15px'});
			return false;
		}
		if(!contact.match('^[0-9]{10,10}$'))
		{
			$('#update_cont_err').show();
			$('#update_cont_err').html("10 digit mobile number required.").css({'color':'red','font-size':'15px'});
			$('#rest_contact').focus();
			return false;
		}
		else
		{
			var data={restraunt_name:restraunt_name,description:description,cusine:cusine,address:address,contact:contact,email:email};
			$.post(base_url,
			{
				data:data,
			},
			function(data){
				var data=$.parseJSON(data);
				if(data['status']=='200')
				{
					alert("Updated Successfully!");
				}
				else if(data['status']=='401')
					alert("Some error occured!");
			});
			$('.close').click();
		}
	});
});


$(document).ready(function(){
	$('#item_btn').click(function(){
		var id=$('#food_id').val();
		var name=$('#food_name').val();
		var description=$('#food_description').val();
		var price=$('#price').val();
		var type=$('input[type=radio][name=food_type]:checked').val();
		var base_url = $('#base_url').val()+"add_item/";
		$('#err').hide();
		$('#cont_err').hide();
		if(name=='' || description=='' || price==''|| type=='')
		{
			$('#err').show();
			$('#err').html("All input fields are required*.").css({'color':'red','font-size':'15px'});
			return false;
		}

		var data={id:id,name:name,description:description,price:price,type:type}
		$.post(base_url,
		{
			data:data,
		},
		function(data){
			var data=$.parseJSON(data);
			if(data['status']=='200')
			{
				alert("Added Successfully!");
				$(document).ajaxStop(function(){
				  setTimeout(window.location.reload(),1000);
				});
			}
			else if(data['status']=='401')
				alert("Some error occured!");
		});
		$('.close').click();
	});
});


$(document).ready(function(){
	$('.cart-button').click(function(){
		if(is_logged_in=='')
		{
			$("#login_modal").modal('toggle');
		}
		else if(user_type=='R')
		{
			alert("You are not allowed!.")
		}
		else
		{
			var prod_id=$(this).attr('id');
			var rest_id=$('#rest_id').text();
			var cust_id=user_id;
			var quantity=$('#'+prod_id+'qty').val();
			var base_url = $('#base_url').val()+"order_item/";
			if(quantity=='')
				quantity=1;
			var data={prod_id:prod_id,rest_id:rest_id,quantity:quantity,cust_id:cust_id};
			$.post(base_url,
			{
				data:data,
			},
			function(data){
				var data=$.parseJSON(data);
				if(data['status']=='200')
				{
					alert("Item Ordered!");
				}
				else if(data['status']=='401')
					alert("Some error occured!");
			});
		}
	});
});


$(document).ready(function(){
	$('.delivery').click(function(){
			var order_id=$(this).attr('id');
			$('#'+order_id).prop('checked',true);
			$('#'+order_id).prop('disabled',true);
			var base_url = $('#base_url').val()+"delivered/";
			var data={order_id:order_id};
			$.post(base_url,
			{
				data:data,
			});
	});
});