<!-- DataTables -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>CRM System Control Panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>26</h3>
                  <p>Total Expired Vehicle(s)</p>
                </div>
                <div class="icon">
                  <i class="fa fa-car"></i>
                </div>
                <a href="<?php echo base_url(); ?>vehicleExpired" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>2390</h3>
                  <p>Total Vehicle(s)</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cab"></i>
                </div>
                <a href="<?php echo base_url(); ?>vehicleListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>1230</h3>
                  <p>Total Customer(s)</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="<?php echo base_url(); ?>customerListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Total Month Renewal(s)</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo base_url(); ?>vehicleRenewal" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
		  <div class="card-header card">
                     <h3 class="card-title"><i class="fa fa-table"></i>&nbsp;List of <?php if(date("M")=="Jan") { $month=1;  } 
																						 elseif(date("M")=="Feb") { $month=2; } 
																						 elseif(date("M")=="Mar") { $month=3; }
																						 elseif(date("M")=="Apr") { $month=4; }
																						 elseif(date("M")=="May") { $month=5; }
																						 elseif(date("M")=="Jun") { $month=6; }
																						 elseif(date("M")=="Jul") { $month=7; }
																						 elseif(date("M")=="Aug") { $month=8; }
																						 elseif(date("M")=="Sep") { $month=9; }
																						 elseif(date("M")=="Oct") { $month=10; }
																						 elseif(date("M")=="Nov") { $month=11; } 
																						 elseif(date("M")=="Dec") { $month=12; } 
																						 else { $month=""; } 
					 																	$month_num =$month; 
																						$month_name = date("F", mktime(0, 0, 0, $month_num, 10)); 
																						echo $month_name."\n"; ?> 
 																		Month Renewal Vehicle(s) </h3>
                </div>
				<div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. #</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
				  <th>User Name</th>
                  <th>Action</th>
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
                  <td><a class="btn btn-sm btn-primary" href="<?php echo base_url().'viewCustomer/'.$record->id; ?>" title="View"><i class="fa fa-history"></i></a></td>
                </tr>
				<?php
                        $i++; }
                    }
                    ?>
                
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
              
    </section>
</div>