<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" />
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-cab"></i> Vehicles Management
        <small>Edit Vehicle Informations</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <div class="row"> <div class="col-md-6"><h3 class="box-title">Enter Vehicle Details</h3></div>  <div class="col-md-6"><a class="btn btn-sm btn-primary" href="<?php echo base_url().'vehicleListing' ?>" title="Back to Vehicles List"><i class="fa fa-backward"></i></a></div> </div>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>editVehicle" method="post" id="editVehicle">
					<input type="hidden" value="<?php echo $vehicleInfo->id; ?>" name="vehicleId" id="vehicleId" />    
                        <div class="box-body">
						<div class="row"><div class="col-md-12">     
						<div class="text-center">
    			<span aria-hidden="true" class="error">*</span>&nbsp;Required field
  			</div></div>
						</div>
						
						
						<div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="cid">Customer Name&nbsp;<span class="error">*</span></label>
                                        <select class="form-control" id="cid" name="cid">
                                            <option value="0" id="0">Select Customer</option>
                                            <?php 
                                            if(!empty($edit_customers))
                                            {
                                                foreach ($edit_customers as $cname)
                                                {
                                                    ?>
                                                    <option value="<?php echo $cname->id ?>" <?php if($cname->id == $vehicleInfo->cid) {echo "selected=selected";} ?>><?php echo $cname->fullname ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehiclemake">Vehicle Make&nbsp;<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="vehiclemake" placeholder="Enter Vehicle Make" value="<?php echo $vehicleInfo->vehiclemake; ?>" name="vehiclemake" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehiclemodel">Vehicle Model&nbsp;<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="vehiclemodel" placeholder="Enter Vehicle Model" value="<?php echo $vehicleInfo->vehiclemodel; ?>" name="vehiclemodel" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehiclemadeyear">Vehicle Made Year</label>
										<input type="text" class="form-control" id="vehiclemadeyear" placeholder="Enter Vehicle Made Year" value="<?php echo $vehicleInfo->vehiclemadeyear; ?>" name="vehiclemadeyear" maxlength="100">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehicleregistrationnumber">Vehicle Registration Number&nbsp;<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="vehicleregistrationnumber" placeholder="Enter Vehicle Registration Number" value="<?php echo $vehicleInfo->vehicleregistrationnumber; ?>" name="vehicleregistrationnumber" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vehiclenumber">Vehicle Number&nbsp;<span class="error">*</span></label>
										<input type="text" class="form-control" id="vehiclenumber" placeholder="Enter Vehicle Number" value="<?php echo $vehicleInfo->vehiclenumber; ?>" name="vehiclenumber" maxlength="100">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="servername">Owner Name</label>
                                        <input type="text" class="form-control" id="ownername" placeholder="Enter Owner Name" value="<?php echo $vehicleInfo->ownername; ?>" name="ownername" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   	<label for="gpskitinstalldate">GPS Kit Install Date&nbsp;<span class="error">*</span></label>		
									<div class="input-group ">
                                        <input id="gpskitinstalldate" type="text" name="gpskitinstalldate" value="<?php echo $vehicleInfo->gpskitinstalldate; ?>" class="form-control datepicker" placeholder="Enter GPS Kit Install Date" autocomplete="off" />
                <span class="input-group-addon"><label for="gpskitinstalldate"><i class="fa fa-calendar"></i></label></span>
				
                                    </div>
									
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="eminumber">EMI Number&nbsp;<span class="error">*</span></label>
                                        <input type="text" class="form-control" id="eminumber" placeholder="Enter EMI Number" value="<?php echo $vehicleInfo->eminumber; ?>" name="eminumber" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gpskitmobilenumber"> GPS Kit Mobile Number&nbsp;<span class="error">*</span></label>
										<input type="text" class="form-control" id="gpskitmobilenumber" placeholder="Enter GPS Kit Mobile Number" value="<?php echo $vehicleInfo->gpskitmobilenumber; ?>" name="gpskitmobilenumber" maxlength="100">
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gpsdevicemodelnumber"> GPS Device Model Number</label>
                                        <input type="text" class="form-control" id="gpsdevicemodelnumber" placeholder="Enter GPS Device Model Number" value="<?php echo $vehicleInfo->gpsdevicemodelnumber; ?>" name="gpsdevicemodelnumber" maxlength="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="erpportalassociation">Vehicle ERP Portal Association&nbsp;<span class="error">*</span></label>
										<input type="text" class="form-control" id="erpportalassociation" placeholder="Enter Vehicle ERP Portal Association" value="<?php echo $vehicleInfo->erpportalassociation; ?>" name="erpportalassociation" maxlength="100">
                                    </div>
                                </div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="erpportalusername">ERP Portal User Name&nbsp;<span class="error">*</span></label>
                                        <input type="text" class="form-control" value="<?php echo $vehicleInfo->erpportalusername; ?>" placeholder="Enter ERP Portal User Name" id="erpportalusername" name="erpportalusername" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-6">
								<label for="nextrenewaldate">Next Renewal Date</label>
                                    <div class="input-group ">
                                        <input id="nextrenewaldate" type="text" name="nextrenewaldate" value="<?php echo $vehicleInfo->nextrenewaldate; ?>" class="form-control datepicker" placeholder="Enter Next Renewal Date" autocomplete="off" />
                <span class="input-group-addon"><label for="nextrenewaldate"><i class="fa fa-calendar"></i></label></span>
				
                                    </div>
                                </div>    
                            </div>
							
							
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="installbystaff">Install By Staff</label>
                                        <input type="text" class="form-control" value="<?php echo $vehicleInfo->installbystaff; ?>" placeholder="Enter Install By Staff" id="installbystaff" name="installbystaff" maxlength="128">
                                    </div>
                                </div>
                                    
                            </div>
							
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="communication">Ongoing Communication(s)</label>
                                        <textarea name="communication" class="form-control" cols="6" rows="2" placeholder="Enter Communication(s)"> <?php echo $vehicleInfo->communication; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" cols="6" rows="2" class="form-control" placeholder="Enter Address"> <?php echo $vehicleInfo->address; ?></textarea>
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

<script src="<?php echo base_url(); ?>assets/js/editVehicle.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery('.datepicker').datepicker({
          autoclose: true,
          format : "yyyy-mm-dd"
        });
        
    });
</script>