<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
			<a href="#tab_content1" id="tab1" role="home-tab" data-toggle="tab" aria-expanded="true">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">អត្តសញ្ញាណបេក្ខជន
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">លក្ខណវិនិច្ឆ័យខាងកម្រិតវិជ្ជា
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">លក្ខណវិនិច្ឆ័យខាងបទពិសោធ
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការជឿនលឿន
			</span></a>
        </li>
    </ul>
	<form name="form_inspection" id="form_inspection" enctype="multipart/form-data">	
    <div id="myTabContent" class="tab-content">  
      <div id="tab_content1" role="tabpanel" class="tab-pane fade active in" aria-labelledby="home-tab">
				<br />
				<div class="form-group">
					<label class="control-label-kh">ឈ្មោះ (ជាខ្មែរ)</label>
					<input  maxlength="100" type="text" name="candidate_name_kh" class="form-control" placeholder="ជាខ្មែរ"  />
				</div>
				<div class="form-group">
					<label class="control-label-kh">ជាឡាតាំង</label>
					<input maxlength="100" type="text" name="candidate_name_en" class="form-control" placeholder="ឈ្មោះឡាតាំង" />
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំកំណើត</label>
					<input type="text" class="form-control" name="candidate_dob" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
      </div>
      
			<div id="tab_content2" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh"><b>បរិញ្ញាប័ត្រច្បាប់</b></label>
						<input type="checkbox" name="is_ba" id="is_ba">
                  	</div>
				</div>
				<br />
				<div class="form-inline">					
					<div class="form-group">
						<label class="control-label-kh">ចេញដោយសាកលវិទ្យាល័យ</label>
						<input placeholder="សូមវាយបញ្ចូល" name="ba_institution" class="form-control" />
					</div>
					<div class="form-group">
						<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ</label>
						<input type="text" class="form-control" name="date_of_ba" data-inputmask="'mask': '99/99/9999'">
					</div>
					<div class="form-group">
						<input type="file" id="ba_file" name="ba_file"/>
					</div>
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh"><b>អនុបណ្ឌិតច្បាប់</b></label>
						<input type="checkbox" name="is_ma" id="is_ma">
					</div>
				</div>
				<br />
				<div class="form-inline">					
					<div class="form-group">
						<label class="control-label-kh">ចេញដោយសាកលវិទ្យាល័យ</label>
						<input placeholder="សូមវាយបញ្ចូល" name="ma_institution" class="form-control" />
					</div>
					<div class="form-group">
						<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ</label>
						<input type="text" class="form-control" name="date_of_ma" data-inputmask="'mask': '99/99/9999'">
					</div>
					<div class="form-group">
						<input type="file" id="ma_file" name="ma_file"/>
					</div>
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh"><b>បណ្ឌិតច្បាប់</b></label>
						<input type="checkbox" name="is_phd" id="is_phd">
					</div>
				</div>
				<br />	
				<div class="form-inline">					
					<div class="form-group">
						<label class="control-label-kh">ចេញដោយសាកលវិទ្យាល័យ</label>
						<input placeholder="សូមវាយបញ្ចូល" name="phd_institution" class="form-control" />
					</div>
					<div class="form-group">
						<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ</label>
						<input type="text" class="form-control" name="date_of_phd" data-inputmask="'mask': '99/99/9999'">
					</div>
					<div class="form-group">
						<input type="file" id="phd_file" name="phd_file"/>
					</div>
				</div>
    		</div> <!-- End Tab Content 2-->
      
			<div id="tab_content3" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">ស្ថាប័ន</label>
						<input placeholder="សូមវាយបញ្ចូល" name="institution" class="form-control" />
					</div>	
				</div>
				<br />
				<div class="form-group row">
					<div class="col-md-6 col-sm-12 col-xs-12 form-group">
						<label class="control-label-kh">រៀបរាប់សង្ខេបពីបទពិសោធ</label>
						<textarea id="exp_detail" cols="100" rows="6" class="form-control"></textarea>
					</div>
				</div>
      		</div> <!-- End Tab3-->
      
			<div id="tab_content4" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">៤.១ ថ្ងៃដាក់ពាក្យ</label>
						<input data-inputmask="'mask': '99/99/9999'" name="applying_date" class="form-control" />
					</div>

				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">៤.២ ចំណាត់ការចាត់តាំងអធិការកិច្ចរួច</label>
						<input type='radio' name="is_inspection_assigned" value="1" >
					</div>
					<div class="form-group">
						<label class="control-label-kh">មិនទាន់ចាត់តាំង</label>
						<input type='radio' name="is_inspection_assigned" value="0" >
					</div>
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">សមាសភាព ឈ្មោះទី១</label>
						<input type="text" class="form-control" name="composition_name1" placeholder="សូមវាយបញ្ចូល">
					</div>
					<div class="form-group">
						<label class="control-label-kh">ឈ្មោះទី២</label>
						<input type="text" class="form-control" name="composition_name2" placeholder="សូមវាយបញ្ចូល">
					</div>
					<div class="form-group">
						<label class="control-label-kh">ឈ្មោះទី៣</label>
						<input type="text" class="form-control" name="composition_name3" placeholder="សូមវាយបញ្ចូល">
					</div>
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh"><b>៤.3 របាយការណ៍អធិការកិច្ច</b></label>	
					</div>			
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">ថ្ងៃដាក់ជូនប្រធាន</label>
						<input type="text" class="form-control" name="date_of_inspection_submission"​​ data-inputmask="'mask': '99/99/9999'">
					</div>
					<div class="form-group">
						<label class="control-label-kh">តាមសេចក្តីសម្រេចលេខ</label>
						<input type="text" class="form-control" name="inspection_decision_no" />
					</div>
					<div class="form-group">
						<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ</label>
						<input type="text" class="form-control" name="date_of_inspection_decision" data-inputmask="'mask': '99/99/9999'"​ />
					</div>
				</div>
				<br />
				<div class="form-inline row">
					<div class="col-md-4 col-sm-12 col-xs-12 form-group">
					<!--	<span class="btn btn-success btn-file"> -->
							<input type="file" id="inspection_report_file" name="inspection_report_file"/>
					<!--	</span> -->
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 form-group">
						<label class="control-label-kh">បញ្ចូលរបាយការណ៍អធិការកិច្ច</label>
						<textarea id="inspection_report_des" cols="70" rows="5" class="form-control"></textarea>
					</div>
				</div>
				<br />				
				<div class="form-inline row">
					<div class="form-group">
						<label class="control-label-kh"><b>៤.៤ របាយការណ៍សម្ភាសន៍</b></label>
					</div>
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ</label>
						<input data-inputmask="'mask': '99/99/9999'"​ name="date_of_interview" class="form-control" />
					</div>
					<div class="form-group">
					<!--	<span class="btn btn-success btn-file"> -->
							<input type="file" id="interview_file" name="interview_file"/>
					<!--	</span> -->
					</div>
				</div>
				<br />
				<div class="form-inline row">
					<div class="col-md-6 col-sm-12 col-xs-12 form-group">
						<label class="control-label-kh">របាយការណ៍សម្ភាសន៍</label>
						<textarea id="interview_report_des" cols="70" rows="5" class="form-control"></textarea>
					</div>
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">ប្រជុំក្រុមព្រឺក្សានៅ ថ្ងៃ ខែ ឆ្នាំ</label>
						<input data-inputmask="'mask': '99/99/9999'"​ name="date_of_board_meeting" class="form-control" />
					</div>
				</div>
				<br />
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">លទ្ធផលនៃកិច្ចប្រជុំ :</label>
						<label class="control-label-kh">សម្រេចអោយចូលប្រកប</label>
						<input type="checkbox" name="meeting_outcome_approval">
					</div>
					<div class="form-group">
						<label class="control-label-kh">តាមសេចក្តីសម្រេច</label>					
						<input type="text" placeholder="សូមវាយបញ្ចូល" class="form-control" name="meeting_approval_no" />
					</div>
					<div class="form-group">
						<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ</label>
						<input type="text" class="form-control" name="date_of_meeting_approval" data-inputmask="'mask': '99/99/9999'" />
					</div>
				</div>
				<br />
			</div> <!-- end content tab4-->
				<button type="button" id="insert_inspection" class="btn btn-success btn-lg pull-right"><label>Submit</label></button>
	   </div>
	</form>	
</div>
   