<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-cab"></i> Vehicles Management
        <small>View Vehicle Informations</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                       <div class="row"> <div class="col-md-6"><h3 class="box-title">View Vehicles Details</h3></div>  <div class="col-md-6"><a class="btn btn-sm btn-primary" href="<?php echo base_url().'vehicleListing' ?>" title="Back to Vehicles List"><i class="fa fa-backward"></i></a></div> </div>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                           
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="cid">Customer Name:</label>&nbsp;&nbsp;<?php echo $vehicleInfo->cid; ?>
                                    </div>
                                </div>  
								<div class="col-md-6">
                                  <div class="form-group">
                                   <label for="cid">Vehicle Make:</label>&nbsp;&nbsp;<?php if($vehicleInfo->vehiclemake) { echo $vehicleInfo->vehiclemake; }  else  {  echo 'N/A'; }  ?>
                                   </div>
                                </div>  
                            </div>
							
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="vehiclemodel"> Vehicle Model: </label>&nbsp;&nbsp;<?php if($vehicleInfo->vehiclemodel) { echo $vehicleInfo->vehiclemodel; }  else  {  echo 'N/A'; }  ?>
                                    </div>
                                </div>  
								<div class="col-md-6">
                                  <div class="form-group">
                                  <label for="vehiclemadeyear">Vehicle Made Year: </label>&nbsp;&nbsp;<?php if($vehicleInfo->vehiclemadeyear) { echo $vehicleInfo->vehiclemadeyear; }  else  {  echo 'N/A'; }  ?> 
                                   </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="vehicleregistrationnumber">Vehicle Registration Number: </label>&nbsp;&nbsp; <?php if($vehicleInfo->vehicleregistrationnumber) { echo $vehicleInfo->vehicleregistrationnumber; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
								<div class="col-md-6">
                                  <div class="form-group">
                                    <label for="vehiclenumber">Vehicle Number: </label>&nbsp;&nbsp; <?php if($vehicleInfo->vehiclenumber) { echo $vehicleInfo->vehiclenumber; }  else  {  echo 'N/A'; }  ?> 
                                   </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="ownername">Owner Name: </label> &nbsp;&nbsp; <?php if($vehicleInfo->ownername) { echo $vehicleInfo->ownername; }  else  {  echo 'N/A'; }  ?>
                                    </div>
                                </div>  
								<div class="col-md-6">
                                  <div class="form-group">
                                  <label for="gpskitinstalldate">GPS Kit Install Date: </label> &nbsp;&nbsp; <?php if($vehicleInfo->gpskitinstalldate) { echo $vehicleInfo->gpskitinstalldate; }  else  {  echo 'N/A'; }  ?>  
                                   </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="eminumber">EMI Number: </label> &nbsp;&nbsp; <?php if($vehicleInfo->eminumber) { echo $vehicleInfo->eminumber; }  else  {  echo 'N/A'; }  ?>  
                                    </div>
                                </div>  
								<div class="col-md-6">
                                  <div class="form-group">
                                    <label for="gpskitmobilenumber">GPS Kit Mobile Number: </label>&nbsp;&nbsp; <?php if($vehicleInfo->gpskitmobilenumber) { echo $vehicleInfo->gpskitmobilenumber; }  else  {  echo 'N/A'; }  ?> 
                                   </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="erpportalassociation">Vehicle ERP Portal Association: </label>&nbsp;&nbsp; <?php if($vehicleInfo->erpportalassociation) { echo $vehicleInfo->erpportalassociation; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
								<div class="col-md-6">
                                  <div class="form-group">
                                  <label for="gpsdevicemodelnumber">GPS Device Model Number: </label>&nbsp;&nbsp; <?php if($vehicleInfo->gpsdevicemodelnumber) { echo $vehicleInfo->gpsdevicemodelnumber; }  else  {  echo 'N/A'; }  ?> 
                                   </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="erpportalusername">ERP Portal User Name: </label>&nbsp;&nbsp; <?php if($vehicleInfo->erpportalusername) { echo $vehicleInfo->erpportalusername; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
								<div class="col-md-6">
                                  <div class="form-group">
                                    <label for="nextrenewaldate">Next Renewal Date: </label>&nbsp;&nbsp;  <?php if($vehicleInfo->nextrenewaldate) { echo $vehicleInfo->nextrenewaldate; }  else  {  echo 'N/A'; }  ?> 
                                   </div>
                                </div>  
                            </div>
							
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="installbystaff">Install By Staff: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($vehicleInfo->installbystaff) { echo $vehicleInfo->installbystaff; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="communication">Ongoing Communication(s): </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($vehicleInfo->communication) { echo $vehicleInfo->communication; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
                            </div>
							<div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                       <label for="address">Address: </label>
                                    </div>
                                </div>  
								<div class="col-md-5">
                                    <div class="form-group">
                                         <?php if($vehicleInfo->address) { echo $vehicleInfo->address; }  else  {  echo 'N/A'; }  ?> 
                                    </div>
                                </div>  
                            </div>
							
                        </div><!-- /.box-body -->
                </div>
            </div>
            
        </div>    
    </section>
</div>