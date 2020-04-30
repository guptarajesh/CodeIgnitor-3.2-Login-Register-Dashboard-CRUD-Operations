<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Customer Management
        <small>Add New Customer</small>
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
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addCustomer" action="<?php echo base_url() ?>addNewCustomer" method="post">
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
                                        <input type="text" class="form-control required" placeholder="Enter Full Name" value="<?php echo set_value('fname'); ?>" id="fname" name="fname" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Email Address" value="<?php echo set_value('email'); ?>" name="email" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Contact Number</label>
                                        <input type="phone" class="form-control" id="mobile" placeholder="Enter Phone Number" value="<?php echo set_value('mobile'); ?>" name="mobile" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="username">User Name</label>
										<input type="text" class="form-control" id="username" placeholder="Enter User Name" value="<?php echo set_value('username'); ?>" name="username" maxlength="100">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="servername">Server Name</label>
                                        <input type="text" class="form-control" id="servername" placeholder="Enter Server Name" value="<?php echo set_value('servername'); ?>" name="servername" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehicles">Associate Vehicle(s)&nbsp;<span class="error">*</span></label>
										<textarea name="vehicles" class="form-control required" cols="6" rows="2" placeholder="Enter Associate Vehicle(s)"> <?php echo set_value('vehicles'); ?></textarea>
                                    </div>
                                </div>
                            </div>
							
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="communication">Ongoing Communication(s)</label>
                                        <textarea name="communication" class="form-control" cols="6" rows="2" placeholder="Enter Communication(s)"> <?php echo set_value('communication'); ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" cols="6" rows="2" class="form-control" placeholder="Enter Address"> <?php echo set_value('address'); ?></textarea>
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
<script src="<?php echo base_url(); ?>assets/js/addCustomer.js" type="text/javascript"></script>