/**
 * @author Rajesh Gupta
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteUser", function(){
		var userId = $(this).data("userid"),
			hitURL = baseURL + "deleteUser",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to delete this user ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("User successfully deleted"); }
				else if(data.status = false) { alert("User deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});


// Delete Customers

/**
 * @author Rajesh Gupta
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteCustomer", function(){
		var id = $(this).data("id"),
			hitURL = baseURL + "deleteCustomer",
			currentRow = $(this);
		//alert(id);
		var confirmation = confirm("Are you sure to delete this customer ?");
		
		if(confirmation)
		{   //alert (hitURL); 
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { id : id } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Customer successfully deleted"); }
				else if(data.status = false) { alert("Customer deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});


// Delete Vehicles

/**
 * @author Rajesh Gupta
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteVehicle", function(){
		var id = $(this).data("id"),
			hitURL = baseURL + "deleteVehicle",
			currentRow = $(this);
		//alert(id);
		var confirmation = confirm("Are you sure to delete this vehicle ?");
		
		if(confirmation)
		{   //alert (hitURL); 
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { id : id } 
			}).done(function(data){
				console.log(data);
				currentRow.parents('tr').remove();
				if(data.status = true) { alert("Vehicle successfully deleted"); }
				else if(data.status = false) { alert("Vehicle deletion failed"); }
				else { alert("Access denied..!"); }
			});
		}
	});
	
	
	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});
