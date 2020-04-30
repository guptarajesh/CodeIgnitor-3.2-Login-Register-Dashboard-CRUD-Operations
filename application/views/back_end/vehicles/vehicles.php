<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-cab"></i> Vehicles Management
        <small>Vehicles Control for Add/Edit/Delete Module</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNewVehicle"><i class="fa fa-plus"></i> Add New Vehicle</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3>List of Vehicle(s)</h3>
                   
                </div><!-- /.box-header -->
				<div>&nbsp;<div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. #</th>
                  <th>Owner Name</th>
                  <th>Vehicle Number</th>
                  <th>Kit Mobule #</th>
				  <th>User Name</th>
                  <th>Action(s)</th>
                </tr>
                </thead>
                <tbody>
				
				
				 <?php 
                    if(!empty($vehicleRecords))
                    { $i=1;
                        foreach($vehicleRecords as $record)
                        {
                    ?>
					
                <tr>
                  <td><?php echo $i;?>.</td>
                  <td><?php echo $record->ownername; ?></td>
                  <td><?php if($record->vehiclenumber) { echo $record->vehiclenumber; } else { echo 'N/A';}?></td>
                  <td> <?php if($record->gpskitmobilenumber) { echo $record->gpskitmobilenumber; } else { echo 'N/A';}?></td>
				  <td> <?php if($record->erpportalusername) { echo $record->erpportalusername; } else { echo 'N/A';}?></td>
                   <td class="text-center">
                           <a class="btn btn-sm btn-primary" href="<?php echo base_url().'viewVehicle/'.$record->id; ?>" title="View"><i class="fa fa-history"></i></a>&nbsp;
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'modifyVehicle/'.$record->id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>&nbsp;
                            						
							<a class="btn btn-sm btn-danger deleteVehicle" href="#" data-id="<?php echo $record->id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
							
                        </td>
                </tr>
				<?php
                        $i++; }
                    }
                    ?>
                </tbody>
                </tfoot>
              </table>
            </div>&nbsp;</div>
                <!-- /.box-body -->
               
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "vehicleListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
