/**
 * File : addCustomer.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Rajesh Gupta
 */

$(document).ready(function(){
	
	var addCustomerForm = $("#addCustomer");
	
	var validator = addCustomerForm.validate({
		
		rules:{
			fname :{ required : true },
			vehicles :{ required : true },
		},
		messages:{
			fname :{ required : "This field is required" },
			vehicles :{ required : "This field is required" }	
		}
	});
});
