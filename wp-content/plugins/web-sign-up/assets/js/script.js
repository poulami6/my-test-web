jQuery('.user_type').change(function (event) {
	
	var id = jQuery(this).data('id');
	alert("change to " +id);
	jQuery(".commondiv").hide();
	jQuery("."+id).show();
	
	});

function confirmEmail() {
	//alert("email matching");
			var email = document.getElementById("email_address").value
			var confemail = document.getElementById("email_confirm").value
			if(email != confemail) {
			alert('Email Not Matching!');
			}
		}

function confirmEmail_customer() {
			var cust_email = document.getElementById("cust_email_address").value
			var cust_confemail = document.getElementById("cust_confirm_email").value
			if(cust_email != cust_confemail) {
			alert('Email Not Matching!');
			}
		}

	function validate_Phone_Number() {
    //var number = $('#phone_number').val();
    var ph_number=document.getElementById("phone_number").value;
    var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
    if (filter.test(ph_number) && phone_number.length > 9) {
        return true;
    }
    else {
    	alert("Please enter valid phone number");
        return false;
    }
}


  jQuery(document).ready(function() {
  		alert("hello");

  		jQuery("#partnerSubmit").click(function(){

  			alert("form ajax submit start");
  			jQuery('#signup_partnet').validate({
  				rules : {					  
					
					email_address:{
						required: true,
						email: true
					  },
					email_confirm:{
						required: true,
						email: true
					},					
					user_type:{
						required: true
					}			
			},
			submitHandler: function(form) {
				var ajaxurl = "http://localhost/test-web/wp-admin/admin-ajax.php";
			    	var business_name = jQuery('#business_name').val();
			    	var first_name = jQuery('#first_name').val();
			    	var last_name = jQuery('#last_name').val();
			    	var apt_no = jQuery('#apt_no').val();
			    	var street_name = jQuery('#street_name').val();
			    	var city_name = jQuery('#city_name').val();
			    	var country_name = jQuery('#country_name').val();
			    	var phone_number = jQuery('#phone_number').val();
			    	var user_password = jQuery('#user_password').val();
			    	var email_address = jQuery('#email_address').val();			    	
			    	var user_type = jQuery( 'input[name=user_type]:checked' ).val();
			    	jQuery('.main-loader').show();
			    	var data = {'business_name':business_name, 
			    				'first_name':first_name, 
			    				'last_name':last_name, 
			    				'apt_no':apt_no,
			    				'street_name':street_name,
			    				'city_name':city_name,
			    				'country_name':country_name,
			    				'phone_number':phone_number,
			    				'user_password':user_password,
			    				'email_address':email_address,			    				
			    				'user_type':user_type,
			    				'action':'partner_submit_data'};
			    	
			    	jQuery.ajax({
						url: ajaxurl,     
						data: data,
						type : 'POST',          
						success:function(response) { 
						jQuery('.main-loader').hide();
						jQuery( '#email_status' ).html(response);
						jQuery("#signup_partnet")[0].reset();
						//console.log(response);	
							if(response=="OK") 
								{
								//alert("okkkkkkk");	
								return true; 
								}
							else
								{
									//alert("not okk");
								return false;								
								}						 					
						}
					});		




			}





  			});




  		});

  		
  	});





  



    