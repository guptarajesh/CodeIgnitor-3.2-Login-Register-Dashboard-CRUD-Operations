/**
 * File : editCustomer.js 
 * 
 * This file contain the validation of edit Customer form
 * 
 * @author Rajesh Gupta
 */
$(document).ready(function(){
	
	var editUserForm = $("#editCustomer");
	
	var validator = editCustomerForm.validate({
		
		rules:{
			fname :{ required : true },
			vehicles :{ required : true }
		},
		messages:{
			fname :{ required : "This field is required" },
			vehicles :{ required : "This field is required" }	
		}
	});

});