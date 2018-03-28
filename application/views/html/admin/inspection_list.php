        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
		  <div class="clearfix"></div>
          <!-- /top tiles -->
			<div class="row">
			   <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $this->lang->line('inspection_list'); ?></h3>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				<div class="form-group">
				 	 <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg"><label class="control-label-kh">ធ្វើសំណើរសុំប្រកបវិជ្ជាជីវៈមេធាវីថ្មី</label></button>
					
					 <button type="button" class="btn btn-success btn-sm"><label class="control-label-kh">Update តារាង</label></button>
				</div>
				
				 <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel"><?php echo $page_title; ?></h4>
                        </div>
                        <div class="modal-body">
                        <?php 							
							          include("application/views/html/admin/new_inspection_popup.php");
							          ?>
                        </div>
                      </div>
                    </div>
                  </div>					  
                  <div class="form-group">  
					<table id="datatable" class="table table-striped table-bordered">
            <thead>
             <tr>      					 
						  <th><label class="control-label-kh"><b>លេខរៀង</b></label></th>
              <th><label class="control-label-kh"><b>ឈ្មោះ (ជាខ្មែរ)</b></label></th>
						  <th><label class="control-label-kh"><b>ឈ្មោះ (ជាឡាតាំង)</b></label></th>
						  <th><label class="control-label-kh"><b>ថ្អៃ ខែ ឆ្នាំកំណើត</b> </label></th>
              <th><label class="control-label-kh"><b>ចូលមើល</b></label></th>
						  <th><label class="control-label-kh"><b>កែប្រែ</b></label></th>	
             </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach($candidates as $candidate){
                echo "<tr><td>".$i."</td><td>";
                echo "<label class='control-label-kh'>".$candidate->candidate_name_kh."</label></td>";
                echo "<td><label class='control-label-kh'>".$candidate->candidate_name_en."</label></td>";
                echo "<td><label class='control-label-kh'>".$candidate->candidate_dob."</label></td>";
                echo "<td><a class='btn btn-app1' href='view_candidate/".$candidate->id."'>";
                echo "<i class='glyphicon glyphicon-eye-open'></i>";
                echo "<label>ចូលមើល</label></a></td>";
                echo "<td><a class='btn btn-app1 edit-candidate' data-toggle='modal' data-id='".$candidate->id."'><i class='glyphicon glyphicon-edit'></i>";
                echo "<label>កែប្រែ</label></a></td></tr>";
                $i++;

            }


            ?>
 						  
            </tbody>
          </table>					  				  
                  </div>
				 </div>	  
                </div>
              </div>				
			</div>	
		</div>
        <!-- /page content -->
     

