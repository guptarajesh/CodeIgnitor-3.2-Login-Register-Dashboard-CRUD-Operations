<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Customer Management
        <small>Customer Control for Add/Edit/Delete Module</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNewCustomer"><i class="fa fa-plus"></i> Add New Customer</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3>List of Customer(s)</h3>
                   
                </div><!-- /.box-header -->
				<div>&nbsp;<div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. #</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
				  <th>User Name</th>
                  <th>Action(s)</th>
                </tr>
                </thead>
                <tbody>
				
				
				 <?php 
                    if(!empty($customerRecords))
                    { $i=1;
                        foreach($customerRecords as $record)
                        {
                    ?>
					
                <tr>
                  <td><?php echo $i;?>.</td>
                  <td><?php echo $record->fullname; ?></td>
                  <td><?php if($record->email) { echo $record->email; } else { echo 'N/A';}?></td>
                  <td> <?php if($record->phone) { echo $record->phone; } else { echo 'N/A';}?></td>
				  <td> <?php if($record->username) { echo $record->username; } else { echo 'N/A';}?></td>
                   <td class="text-center">
                           <a class="btn btn-sm btn-primary" href="<?php echo base_url().'viewCustomer/'.$record->id; ?>" title="View"><i class="fa fa-history"></i></a>&nbsp;
                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'modifyCustomer/'.$record->id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>&nbsp;
                            						
							<a class="btn btn-sm btn-danger deleteCustomer" href="#" data-id="<?php echo $record->id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
							
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
            jQuery("#searchList").attr("action", baseURL + "customerListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
