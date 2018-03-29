<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
			<a href="#tab_content1" id="tab1" role="home-tab" data-toggle="tab" aria-expanded="true">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">អត្តសញ្ញាណមេធាវី
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការបំពេញលក្ខខណ្ឌប្រកបវិជ្ជាជីវៈ
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការអប់រំបន្ត
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content4" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">វិធានការវិន័យ
			</span></a>
        </li>
    </ul>
	
	<form name="form1" id="form1">	
    <div id="myTabContent" class="tab-content">  
        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>១.១</b> ឈ្មោះ (ជាខ្មែរ)</label>
					<input  maxlength="100" type="text" name="namekh" class="form-control" placeholder="ជាខ្មែរ"  />
				</div>
				<div class="form-group">
					<label class="control-label-kh">ជាឡាតាំង</label>
					<input maxlength="100" type="text" name="nameeng" class="form-control" placeholder="ឈ្មោះឡាតាំង" />
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំកំណើត</label>
					<input type="text" class="form-control" name="dob" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>១.២</b> អត្តលេខ</label>
					<input maxlength="100" type="text" name="id" class="form-control" placeholder="អត្តលេខ" />
				</div>
				<div class="form-group">
					<label class="control-label-kh">អស់សុពលភាពត្រឹម ថ្ងៃ ខែ ឆ្នាំ</label>
					<input maxlength="100" type="text" name="date_of_code_validity" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY" />
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;ទាញយកលិខិតបញ្ជាក់សុពលភាព </label>			
				</div>
				<div class="form-group">
					<input type="file" id="code_validity_file" name="code_validity_file"/>
				</div>
			</div>
        </div>
        <div id="tab_content2" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
			<br />
			<div class="form-group">				
				<label class="control-label-kh"><b>២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី</b></label>
				<input type="radio" name="is_2" id="is_2" value="is_2_1">
				<label class="control-label-kh"><b>២.១ លក្ខខណ្ឌប្រកបតាមមាត្រា ៣២</b></label>
				<input type="radio" name="is_2" id="is_2" value="is_2_2">
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.១.១</b> បញ្ចប់</label>
					<input type="checkbox" name="end_cert" id="end_cert">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ផ្តើមថ្ងៃទី ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="date_of_completion" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
				<div class="form-group">
					<label class="control-label-kh">យោងតាមសេចក្តីសំរេចលេខ</label>
					<input type="text" class="form-control" name="cert_completion_no">
				</div>
			</div>
			<br />
			<!-- END SESSION -->
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.១.២</b> ចប់កម្មសិក្សា</label>
					<input type="checkbox" name="end_prob" id="end_prob">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ</label> 
					<input type="text" name="date_of_prob" class="form-control" id="date_of_prob" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<!-- END SESSION -->	
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.១.៣</b>	កម្មសិក្សាត្រូវបន្ត</label>
					<input type="checkbox" name="pursue_study">
				</div>
			</div>												
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.១.៤</b>	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ</label>
					<input type="checkbox" name="is_fulltime" id="is_fulltime">
				</div>
				<div class="form-group">
					<label class="control-label-kh">សេចក្តីសម្រេចលេខ</label>
					<input type="text" class="form-control" name="fulltime_no">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="date_of_fulltime" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកឯកសារនៃសេចក្តីសម្រេច</label>
				</div>
				<div class="form-group">
					<input type="file" id="fulltime_file" name="fulltime_file"/>
				</div>
			</div>	
			<!-- END SESSION -->
			<hr />
			<div class="form-group">
				<label class="control-label-kh"><b>២.២	លក្ខខណ្ឌប្រកបតាមមាត្រា ៣២</b></label>
			</div>
			<br />
			<!-- END SESSION -->
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.២.១</b> ត្រូវបំពេញសុក្រិត្យការ</label>
					<input type="checkbox" name="fairness" id="fairness">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ចាប់ផ្តើមថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="fairness_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
				<div class="form-group">
					<label class="control-label-kh">បញ្ចប់ថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="fairness_date_end" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<!-- END SESSION -->
<!-- -->
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.២.២</b> វិញ្ញាបនប័ត្រសុក្រិត្យការ វិជ្ជាជីវៈមេធាវី</label>
					<input type="checkbox" name="is_cert_of_pro_accr" id="is_cert_of_pro_accr">
				</div>
				<div class="form-group">
					<label class="control-label-kh">សេចក្តីសម្រេចលេខ</label>
					<input type="text" class="form-control" name="cert_of_pro_accr_no">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="cert_of_pro_accr_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកឯកសារនៃសេចក្តីសម្រេច</label>
				</div>
				<div class="form-group">
					<input type="file" id="cert_of_pro_file" name="cert_of_pro_file"/>
				</div>
			</div>	
			<br />
			<!-- END SESSION -->
<!-- -->				
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.២.៣</b>	កម្មសិក្សា</label>
					<input type="checkbox" name="probation" id="probation">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="probation_date" id="probation_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
				<div class="form-group">
				</div>
			</div>
			<br />
			<!-- END SESSION -->	
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.២.៥</b>	លើកលែងធ្វើកម្មសិក្សា</label>
					<input type="checkbox" name="no_probabtion" id="no_probabtion">
				</div>
				<div class="form-group">
					<label class="control-label-kh">សេចក្តីសម្រេចលេខ</label>
					<input type="text" name="probabtion_verdict" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ</label>
					<input type="text" name="date_of_probabtion_verdict" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកឯកសារនៃសេចក្តីសម្រេច</label>
				</div>
				<div class="form-group">
					<input type="file" id="no_probabtion_file" name="no_probabtion_file"/>
				</div>
			</div>	
			<br />
			<!-- END SESSION -->
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.២.៦</b>	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ</label>
					<input type="checkbox" name="allow_fulltime" id="allow_fulltime">
				</div>
				<div class="form-group">
					<label class="control-label-kh">សេចក្តីសម្រេច លេខ</label>
					<input type="text" class="form-control" name="fulltime_verdict">
				</div>
				<div class="form-group">
					<label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="fulltime_verdict_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកឯកសារនៃសេចក្តីសម្រេច</label>
				</div>
				<div class="form-group">
					<input type="file" id="fulltime_approval_file" name="fulltime_approval_file"/>
				</div>
			</div>								
			<hr />
			<!-- END SESSION -->
			<div class="form-group">
				<label class="control-label-kh"><b>២.៣	ការប្រកបវិជ្ជាជីវៈ</b></label>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.៣.១</b>	ការិយាល័យឈ្មោះ</label>
					<input type="text" class="form-control" name="firm_name">
				</div>
				<div class="form-group">
					<label class="control-label-kh">លិខិតអនុញ្ញាតលេខ</label>
					<input type="text" class="form-control" name="approval_id">
				</div>
			</div>		
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកលិខិតអនុញ្ញាត</label>
				</div>
				<div class="form-group">
					<input type="file" id="firm_approval_file" name="firm_approval_file"/>
				</div>
			</div>	
			<br />
			<!-- END SESSION -->						
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.៣.២</b>	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ</label>
					<input type="text" class="form-control" name="approval_number">
				</div>
				<div class="form-group">
					<label class="control-label-kh">អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="date_of_validity" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកលិខិតបញ្ជាក់សុពលភាព</label>
				</div>
				<div class="form-group">
					<input type="file" id="firm_validity_file" name="firm_validity_file"/>
				</div>
			</div>									
			<hr />
			<!-- END SESSION -->
			<div class="form-group">
				<label class="control-label-kh"><b>២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី</b></label>
			</div>				
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.៤.១</b>	តាមសេចក្តីស្នើសុំ</label>
					<input type="checkbox" name="follow_proposal" id="follow_proposal">
				</div>
				<div class="form-group">
					<label class="control-label-kh">អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="date_of_out_validity" id="date_of_out_validity" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>	
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកលិខិតសេចក្តីស្នើសុំ</label>
				</div>
				<div class="form-group">
					<input type="file" id="proposal_file" name="proposal_file"/>
				</div>
			</div>		
			<br />	
			<!-- END SESSION -->	
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.៤.២</b>	តំរូវឲ្យនៅក្រៅបញ្ជី</label>
					<input type="checkbox" name="is_out" id="is_out">
				</div>
				<div class="form-group">
					<label class="control-label-kh">សេចក្តីសម្រេចលេខ</label>
					<input type="text" class="form-control" name="verdict_no">
				</div>
				<div class="form-group">
					<label class="control-label-kh">នៅថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="date_of_verdict" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>	
			<br />				
			<!-- -->
			<div class="form-inline row">
				<div class="col-md-5 col-sm-12 col-xs-12 form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;អស់សុពលភាពត្រឹម</label>
					<input type="text" class="form-control" name="out_list_validity" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12 form-group">
					<label class="control-label-kh">មូលហេតុ</label>
					<textarea name="out_list_reason" id="out_list_reason" type="text"></textarea>
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកសេចក្តីសម្រេច</label>
				</div>
				<div class="form-group">
					<input type="file" id="out_list_validity_file" name="out_list_validity_file"/>
				</div>
			</div>
			<br />
			<!-- END SESSION -->
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.៤.៣</b>​ សុំមិនប្រកបវិជ្ជាជីវៈមេធាវី</label>
					<input type="checkbox" name="is_no_pro" id="is_no_pro">
				</div>
				<div class="form-group">
					<label class="control-label-kh">សេចក្តីសម្រេចលេខ</label>
					<input type="text" class="form-control" name="no_pro_no">
				</div>
				<div class="form-group">
					<label class="control-label-kh">នៅថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="date_of_no_pro" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកសេចក្តីសម្រេច</label>
				</div>
				<div class="form-group">
					<input type="file" id="no_pro_file" name="no_pro_file"/>
				</div>
			</div>	
			<!-- -->
			<hr />	
			<!-- END SESSION -->								
			<div class="form-group">
				<label class="control-label-kh"><b>២.៥ ការហាមឃាត់មិនឲ្យប្រកប</b></label>
			</div>		
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh"><b>២.៥.១</b>	សេចក្តីសម្រេចលេខ</label>
					<input type="text" class="form-control" name="final_statement">
				</div>
				<div class="form-group">
					<label class="control-label-kh">នៅថ្ងៃ ខែ ឆ្នាំ</label>
					<input type="text" class="form-control" name="date_of_final_statement" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
				</div>
			</div>	
			<br />	
			<!-- END SESSION -->
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;មូលហេតុ</label>
					<textarea name="final_statement_reason" id="final_statement_reason" rows="4" cols="300" type="text"></textarea>
				</div>
			</div>	
			<br />
			<div class="form-inline">
				<div class="form-group">
					<label class="control-label-kh">&emsp;&emsp;&emsp;ទាញយកសេចក្តីសម្រេច</label>
				</div>
				<div class="form-group">
					<input type="file" id="prohibition_statement_file" name="prohibition_statement_file"/>
				</div>
			</div>										
        </div> <!-- End of Content2-->
		
		<div id="tab_content3" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
		  <div class="form-group after-add-edu-more">	
			<div class="form-group">
				<p><label class="control-label-kh">លើកទី ១</label></p>
				<table>
		 		  <tr>
					<td><label class="control-label-kh">មុខវិជ្ជា&emsp;</label></td>
					<td><input type="text" name="subject" class="form-control"></td>
					<td><label class="control-label-kh">&emsp;ចំនួនម៉ោងសិក្សា៖&emsp;</label></td>
					<td><input type="text" name="class_hours" class="form-control"></td>
		 		  </tr>	
				</table>
			</div>
		  </div>	   
		<!-- This is where the form elements are dynamically generated-->
			<div class="copy-edu hide">
				<hr />	
				<div class="form-group">
					<p><label class="control-label-kh">លើកទីបន្ទាប់</label></p>		
				   <table>
				    <tr>
						<td><label class="control-label-kh">មុខវិជ្ជា&emsp;</label></td>
						<td><input type="text" name="subject" class="form-control"></td>
						<td><label class="control-label-kh">&emsp;ចំនួនម៉ោងសិក្សា៖&emsp;</label></td>
						<td><input type="text" name="class_hours" class="form-control"></td>
					</tr>									  
				   </table>
					<br />
					<div class="input-group-btn"> 
						<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>				  
					</div>										
			    </div>
			</div>			
		<!-- -->			   
	
			<div class="input-group-btn"> 
				<button class="btn btn-success add-edu-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
			</div>	   
        </div> <!-- End Tab3-->
        
		<div id="tab_content4" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
			<div class="form-group">
				<p><label class="control-label-kh"><b>បណ្តឹង</b></label>
					<input type="checkbox" name="is_sued">
				</p>
				<p><label class="control-label-kh"><i>បរិយាយសង្ខេប</i></label>
				</p>
				<p><textarea name="complaint_des" id="complaint_des" rows="4" cols="500" type="text"></textarea></p>
				<p>
					<label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន</label>	
					<input type="checkbox" name="end_compliant_by_president">
				</p>
				<div class="form-inline">
					<div class="form-group">
						<label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច</label>
						<input type="checkbox" name="to_be_inspected">
					</div>
					<div class="form-group">
						<label class="control-label-kh">របាយការណ៍អធិការកិច្ច</label> 
					</div>
					<div class="form-group">
						<input type="file" id="complaints_file" name="complaints_file"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<table>				 							  
				 <tr>
					<td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖&emsp;</label></td>
					<td colspan=3>
					<?php
					foreach($council_decision as $decision){
						echo "<input type='radio' name='council_decision' value='".$decision->id."'>";	
						echo "<label class='control-label-kh'><i>".$decision->decision;
						echo "</i>&nbsp;&nbsp;</label>";	
					}
					?>
					</td>
				 </tr>										  
				</table>
	   	</div>
		</div> <!-- end content tab4-->
		<button type="button" id="go" data-dismiss="modal" class="btn btn-success btn-lg pull-right"><label>Submit</label></button>
	 </div>
	</form>	
</div>