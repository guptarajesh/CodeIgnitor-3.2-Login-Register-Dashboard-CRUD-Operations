<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-cab"></i> Customer Management
        <small>View Customer Informations</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                       <div class="row"> <div class="col-md-6"><h3 class="box-title">View Customer Details</h3></div>  <div class="col-md-6"><a class="btn btn-sm btn-primary" href="<?php echo base_url().'customerListing' ?>" title="Back to Customers List"><i class="fa fa-backward"></i></a></div> </div>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                           
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="mobile">Full Name: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php echo $customerInfo->fullname; ?>
                                    </div>
                                </div>  
                            </div>
							
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="mobile">Email: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($customerInfo->email) { echo $customerInfo->email; }  else  {  echo 'N/A'; }  ?>
                                    </div>
                                </div>  
                            </div>
							
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="mobile">Contact Number: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($customerInfo->phone) { echo $customerInfo->phone; }  else  {  echo 'N/A'; }  ?>
                                    </div>
                                </div>  
                            </div>
							
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="mobile">Associate Vehicle(s): </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($customerInfo->vehicles) { echo $customerInfo->vehicles; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
                            </div>
							
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="mobile">User Name: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($customerInfo->username) { echo $customerInfo->username; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="mobile">Server Name: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($customerInfo->servername) { echo $customerInfo->servername; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
                            </div>
							
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="mobile">Ongoing Communication(s): </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($customerInfo->communication) { echo $customerInfo->communication; }  else  {  echo 'N/A'; }  ?>
                                    </div>
                                </div>  
                            </div>
							
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="role">Address: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                        <?php if($customerInfo->address) { echo $customerInfo->address; }  else  {  echo 'N/A'; }  ?>  
                                    </div>
                                </div>  
                            </div>
							
							
                        </div><!-- /.box-body -->
                </div>
            </div>
            
        </div>    
    </section>
</div>