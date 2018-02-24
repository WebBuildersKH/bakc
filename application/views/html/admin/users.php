       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3><?php echo $this->lang->line('users_list'); ?></h3>
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
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg">
                       <label class="control-label-kh">បង្កើតអ្នកប្រើថ្មី</label></button>                
                       <button type="button" class="btn btn-success btn-sm"><label class="control-label-kh">Update តារាង</label></button>	
                  </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>      
                          <th>No</th>
						  <th>Login Usersname</th>
                          <th>Name</th>
						  <th>Staff Id</th>
						  <th>Creating Date</th>
						  <th>Modifying Date</th>
						  <th>isActive</th>
						  <th>Edit</th>	
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
						  <td>ponleu</td>
                          <td>Ponleu Koy</td>
                          <td>S2002</td>
                          <td>2011/04/25</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
						  <td>yanno</td>
                          <td>Ponleu Koy</td>
                          <td>S2003</td>
                          <td>2011/04/25</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                          </td>
                        </tr>                       
                        <tr>
                          <td>3</td>
						  <td>dara</td>
                          <td>Dara Sok</td>
                          <td>S2004</td>
                          <td>2011/04/25</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
						  <td>khim</td>
                          <td>Khim Sok</td>
                          <td>S2005</td>
                          <td>2011/04/25</td>
                          <td>2011/04/25</td>
						  <td>Open</td>
						  <td><a class="btn btn-app1"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                          </td>
                        </tr>   
                        <tr>
                          <td>5</td>
						  <td>seng</td>
                          <td>Seng Khim</td>
                          <td>S2035</td>
                          <td>2011/04/25</td>
                          <td>2011/04/25</td>
						  <td>Close</td>
						  <td><a class="btn btn-app1"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                          </td>
                        </tr>   						  
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /page content -->
