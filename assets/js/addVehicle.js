/**
 * File : addVehicle.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Rajesh Gupta
 */

$(document).ready(function(){
	
	var addVehicleForm = $("#addVehicle");
	
	var validator = addVehicleForm.validate({
		
		rules:{
			cid : { required : true, selected : true},
			vehiclemake :{ required : true },
			vehiclemodel :{ required : true },
			vehicleregistrationnumber :{ required : true },
			vehiclenumber :{ required : true },
			gpskitinstalldate :{ required : true },
			eminumber :{ required : true },
			gpskitmobilenumber :{ required : true },
			erpportalassociation :{ required : true },
			erpportalusername :{ required : true },
		},
		messages:{
			cid : { required : "This field is required", selected : "Please select atleast one option" },	
			vehiclemake :{ required : "This field is required" }
			vehiclemodel :{ required : "This field is required" }	
			vehicleregistrationnumber :{ required : "This field is required" }	
			vehiclenumber :{ required : "This field is required" }	
			gpskitinstalldate :{ required : "This field is required" }	
			eminumber :{ required : "This field is required" }	
			gpskitmobilenumber :{ required : "This field is required" }	
			erpportalassociation :{ required : "This field is required" }	
			erpportalusername :{ required : "This field is required" }	
		}
	});
});
