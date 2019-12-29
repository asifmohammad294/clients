		function float_submit(panel){
							
			console.log('function call');

                var u_name, u_phone, u_email, u_location, currentdate, comnt_date, comnt_time;

            	currentdate = new Date(); 
            	comnt_date = currentdate.getDate() + "/" + (currentdate.getMonth()+1)  + "/" + currentdate.getFullYear();
        		comnt_time = currentdate.getHours() + ":" + currentdate.getMinutes() + ":" + currentdate.getSeconds(); 
                if(panel == 'active') {
                    u_name = $("#float_name_active").val();
                    u_phone= $("#float_phone_active").val();
                    u_email = $("#float_email_active").val();
                    u_location = $("#float_location_active").val();
                }
                if(panel == 'passive') {
                    u_name = $("#float_name_passive").val();
                    u_phone= $("#float_phone_passive").val();
                    u_email = $("#float_email_passive").val();
                    u_location = $("#float_location_passive").val();
                }

			//	alert(u_name + "\n" + u_phone + "\n" + u_email + "\n" + u_location + "\n" + comnt_date + "\n" + comnt_time);

            	 $.ajax({
                            type : 'POST',
                            url : 'scripts/post/phppdf/feedback.php',
                            data : {name:u_name, phone: u_phone, email:u_email,llocation: u_location,date:comnt_date,time:comnt_time},
                            success : function(feedback) {
								//alert(feedback);
								console.log(feedback);
							if(feedback=="TRUE"){
            				$('.success-box').show();
            				setTimeout("$('.success-box').hide(); document.getElementById('active_form').reset(); document.getElementById('passive_form').reset();", 5000);
                            }
							else{
								//alert(feedback);
                                console.log(feedback);
								$('.error-box').show();
							setTimeout("$('.error-box').hide();", 5000);
							}
            				}
                        })
        }
				
			