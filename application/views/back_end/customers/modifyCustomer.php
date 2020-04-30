<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Customer Management
        <small>Edit Customer Informations</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <div class="row"> <div class="col-md-6"><h3 class="box-title">Enter Customer Details</h3></div>  <div class="col-md-6"><a class="btn btn-sm btn-primary" href="<?php echo base_url().'customerListing' ?>" title="Back to Customers List"><i class="fa fa-backward"></i></a></div> </div>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>editCustomer" method="post" id="editCustomer">
                        <div class="box-body">
						<div class="row"><div class="col-md-12">     
						<div class="text-center">
    			<span aria-hidden="true" class="error">*</span>&nbsp;Required field
  			</div></div>
						</div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Full Name&nbsp;<span class="error">*</span></label>
								<input type="text" class="form-control required" id="fname" placeholder="Enter Full Name" name="fname" value="<?php echo $customerInfo->fullname; ?>" maxlength="128">
								<input type="hidden" value="<?php echo $customerInfo->id; ?>" name="customerId" id="customerId" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $customerInfo->email; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Contact Number</label>
                                        <input type="text" class="form-control" id="mobile" placeholder="Contact Number" name="mobile" value="<?php echo $customerInfo->phone; ?>" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">User Name</label>
										<input type="username" class="form-control" id="username" placeholder="Enter User Name" name="username" value="<?php echo $customerInfo->username; ?>" maxlength="100">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="servername">Server Name</label>
                                        <input type="servername" class="form-control" id="servername" placeholder="Enter Server Name" name="servername" value="<?php echo $customerInfo->servername; ?>" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehicles">Associate Vehicle(s)&nbsp;<span class="error">*</span></label>
										<textarea name="vehicles" id="vehicles" class="form-control required" cols="6" rows="2" placeholder="Enter Associate Vehicles(s)"> <?php echo $customerInfo->vehicles; ?></textarea>
                                    </div>
                                </div>
                            </div>
							
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="communication">Ongoing Communication(s)</label>
                                        <textarea name="communication" class="form-control" cols="6" rows="2" placeholder="Enter Ongoing Communications(s)"> <?php echo $customerInfo->communication; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" cols="6" rows="2" class="form-control" placeholder="Enter Address"> <?php echo $customerInfo->address; ?></textarea>
                                    </div>
                                </div>    
                            </div>
							
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />&nbsp;&nbsp;
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editCustomer.js" type="text/javascript"></script>