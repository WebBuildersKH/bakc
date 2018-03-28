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
			<div class="form-group">
				<label class="control-label-kh">ឈ្មោះ (ជាខ្មែរ)</label>
				<input  maxlength="100" type="text" name="namekh" required="required" class="form-control" placeholder="ជាខ្មែរ"  />
			</div>
			<div class="form-group">
				<label class="control-label-kh">ជាឡាតាំង</label>
				<input maxlength="100" type="text" name="nameeng" required="required" class="form-control" placeholder="ឈ្មោះឡាតាំង" />
			</div>
			<div class="form-group">
				<label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំកំណើត</label>
				<input type="text" class="form-control" name="dob" required="required" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">
			</div>
			<div class="form-group">
				<label class="control-label-kh">អត្តលេខ</label>
				<input maxlength="100" type="text" name="id" required="required" class="form-control" placeholder="អត្តលេខ" />
			</div>
        </div>
        <div id="tab_content2" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
			<br />
			<div class="form-group">
				<label class="control-label-kh"><b>២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី</b></label>
			</div>
			<div class="form-group row">
				<div class="col-xs-10">
					<table>
						<tr>
							 <td><label class="control-label-kh">២.១.១ បញ្ចប់ &nbsp;</label></td>
							 <td><input type="checkbox" name="end_cert" id="end_cert">&nbsp;</td>
							 <td><label class="control-label-kh">&nbsp;ផ្តើមថ្ងៃទី ខែ ឆ្នាំ&nbsp;</label></td>
							 <td><input type="text" class="form-control" name="date_of_completion" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
							​​ <td><label class="control-label-kh">&nbsp;យោងតាមសេចក្តីសំរេចលេខ&nbsp;</label></td>
							​ <td class="col-xs-2"><input type="text" class="form-control" name="cert_completion_no">&nbsp;</td>
						</tr>	
					</table>
				</div>
			</div>							
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.២	ចប់កម្មសិក្សា  &nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="end_prob" id="end_prob">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" name="date_of_prob" class="form-control" id="date_of_prob" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>														
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.១.៣	កម្មសិក្សាត្រូវបន្ត&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="pursue_study">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>				
			<div class="form-group row">
			<div class="col-xs-12">
			  <table>
			   <tr>
						<td><label class="control-label-kh">២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ</label></td>
						<td><input type="checkbox" name="is_fulltime" id="is_fulltime">&nbsp;</td>
						<td><label class="control-label-kh">សេចក្តីសម្រេចលេខ&nbsp;</label></td>
						<td class="col-xs-2"><input type="text" class="form-control" name="fulltime_no">&nbsp;</td>
						<td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
						<td><input type="text" class="form-control" name="date_of_fulltime" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
			   </tr>	
			  </table>
				</div>
			</div>
			<hr />
			<div class="form-group">
				<label class="control-label-kh"><b>២.២	លក្ខខណ្ឌប្រកបតាមមាត្រា ៣២</b></label>
			</div>
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.១ ត្រូវបំពេញសុក្រិត្យការ &nbsp;</label></td>
				  <td><input type="checkbox" name="fairness" id="fairness">&nbsp;</td>
				  <td><label class="control-label-kh">ចាប់ផ្តើមថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="fairness_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
				​​  <td><label class="control-label-kh">&nbsp;​​​បញ្ចប់ថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="fairness_date_end" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
			   </tr>	
			  </table>
			</div>
<!-- -->
			<div class="form-group row">
				<div class="col-xs-11">
					<table>
					<tr>
						<td><label class="control-label-kh">២.២.២ វិញ្ញាបនប័ត្រសុក្រិត្យការ វិជ្ជាជីវៈមេធាវី</label></td>
						<td><input type="checkbox" name="is_cert_of_pro_accr" id="is_cert_of_pro_accr">&nbsp;</td>
						<td><label class="control-label-kh">ចេញលេខ</label></td>
						<td class="col-xs-2"><input type="text" class="form-control" name="cert_of_pro_accr_no">&nbsp;</td>
						<td><label class="control-label-kh">&nbsp;​​​ថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
						<td><input type="text" class="form-control" name="cert_of_pro_accr_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
					</tr>	
					</table>
				</div>
			</div>	
<!-- -->								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.២.៣	កម្មសិក្សា&nbsp;&nbsp;</label>    </td>
				  <td><input type="checkbox" name="probation" id="probation">&nbsp;&nbsp;</td>
				  <td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
				  <td><input type="text" class="form-control" name="probation_date" id="probation_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;</td>
			   </tr>	
			  </table>
			</div>								
			<div class="form-group row">
				<div class="col-xs-10">
					<table>
						<tr>
								<td><label class="control-label-kh">២.២.៥	លើកលែងធ្វើកម្មសិក្សា&nbsp;</label></td>
								<td><input type="checkbox" name="no_probabtion" id="no_probabtion">&nbsp;</td>
								<td><label class="control-label-kh">&nbsp;សេចក្តីសម្រេចលេខ</label></td>
								<td class="col-xs-2"><input type="text" name="probabtion_verdict" class="form-control">&nbsp;</td>
								<td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;</label></td>
								<td><input type="text" name="date_of_probabtion_verdict" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
						
						</tr>
					</table>			
				</div>


			</div>	

			<div class="form-group row">
				<div class="col-xs-12">
					<table>
						<tr>
							<td><label class="control-label-kh">២.២.៦	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ</label></td>
							<td><input type="checkbox" name="allow_fulltime" id="allow_fulltime">&nbsp;</td>
							<td><label class="control-label-kh">&nbsp;សេចក្តីសម្រេច លេខ&nbsp;</label></td>
							<td class="col-xs-2"><input type="text" class="form-control" name="fulltime_verdict">&nbsp;</td>
							<td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;</label></td> 
							<td><input type="text" class="form-control" name="fulltime_verdict_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>			
						</tr>	
					</table>
				</div>
			</div>							
			<hr />
			<div class="form-group">
				<label class="control-label-kh"><b>២.៣	ការប្រកបវិជ្ជាជីវៈ</b></label>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៣.១	ការិយាល័យឈ្មោះ &nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="firm_name">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;លិខិតអនុញ្ញាតលេខ &nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="approval_id">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>									
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ&nbsp;&nbsp;</label></td>
				  <td><input type="text" class="form-control" name="approval_number">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="date_of_validity" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>				
			<hr />
			<div class="form-group">
				<label class="control-label-kh"><b>២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី</b></label>
			</div>								
			<div class="form-group">
			  <table>
			   <tr>
				  <td><label class="control-label-kh">២.៤.១	តាមសេចក្តីស្នើសុំ &nbsp;&nbsp;</label></td>
				  <td><input type="checkbox" name="follow_proposal" id="follow_proposal">&nbsp;&nbsp;
				   </td>
				   <td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
				  <td><input type="text" class="form-control" name="date_of_out_validity" id="date_of_out_validity" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;&nbsp;
				   </td>
			   </tr>	
			  </table>
			</div>									
			<div class="form-group row">
				<div class="col-xs-10">
					<table>
						<tr>
							<td><label class="control-label-kh">២.៤.២	តំរូវឲ្យនៅក្រៅបញ្ជី &nbsp;</label></td>
							<td><input type="checkbox" name="is_out" id="is_out">&nbsp;</td>
							​​<td><label class="control-label-kh">&nbsp;សេចក្តីសម្រេចលេខ&nbsp;</label></td> 
							<td class="col-xs-2"><input type="text" class="form-control" name="verdict_no">&nbsp;</td> 
							<td><label class="control-label-kh">&nbsp;នៅថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td> 
							<td><input type="text" class="form-control" name="date_of_verdict" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td> 
						</tr>	
					</table>
			  	</div>
			</div>
			<!-- -->
			<div class="form-group row">
				<div class="col-xs-12">
					<table>
						<tr>
							<td><label class="control-label-kh">អស់សុពលភាពត្រឹម&nbsp;</label></td>
							<td><input type="text" class="form-control" name="out_list_validity" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td> 
							<td><label class="control-label-kh">&nbsp;មូលហេតុ&nbsp;</label></td> 
							<td><textarea name="out_list_reason" id="out_list_reason" type="text"></textarea></td> 
						</tr>	
					</table>
			  	</div>
			</div>
			<!-- -->
			<div class="form-group row">
				<div class="col-xs-11">
					<table>
						<tr>
							<td><label class="control-label-kh">២.៤.៣​ សុំមិនប្រកបវិជ្ជាជីវៈមេធាវី&nbsp;</label></td>
							<td><input type="checkbox" name="is_no_pro" id="is_no_pro">&nbsp;</td>
							​​<td><label class="control-label-kh">&nbsp;សេចក្តីសម្រេចលេខ&nbsp;</label></td> 
							<td class="col-xs-2"><input type="text" class="form-control" name="no_pro_no">&nbsp;</td> 
							<td><label class="control-label-kh">&nbsp;នៅថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td> 
							<td><input type="text" class="form-control" name="date_of_no_pro" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td> 
						</tr>	
					</table>
			  	</div>
			</div>
			<hr />									
			<div class="form-group">
				<label class="control-label-kh"><b>២.៥ ការហាមឃាត់មិនឲ្យប្រកប</b></label>
			</div>														
			<div class="form-group row">
				<div class="col-xs-8">
					<table>
						<tr>
							<td><label class="control-label-kh">២.៥.១	សេចក្តីសម្រេចលេខ&nbsp;</label></td>
							<td class="col-xs-2"><input type="text" class="form-control" name="final_statement">&nbsp;</td>
							<td><label class="control-label-kh">នៅថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
							<td><input type="text" class="form-control" name="date_of_final_statement" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
						</tr>	
					</table>
			  	</div>
			</div>
			<div class="form-group row">
				<p>
					<label class="control-label-kh">&nbsp;&nbsp;មូលហេតុ&nbsp;</label>
					<textarea name="final_statement_reason" id="final_statement_reason" rows="4" cols="300" type="text"></textarea>
				</p>
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
				<p><label class="control-label-kh"><b>បណ្តឹង</b>&emsp;</label>
					<input type="checkbox" name="is_sued">
				</p>
				<p><label class="control-label-kh"><i>បរិយាយសង្ខេប</i>&emsp;</label>
				</p>
				<p><textarea name="complaint_des" id="complaint_des" rows="4" cols="500" type="text"></textarea></p>
				<p>
					<label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន&emsp;</label>	
					<input type="checkbox" name="end_compliant_by_president">
				</p>
				<p>
					<label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច&emsp;</label>
					<input type="checkbox" name="to_be_inspected">&emsp;
					<label class="control-label-kh">របាយការណ៍អធិការកិច្ច&emsp;</label>  	
					<input type="button" value="Download របាយការណ៍">
				</p>
			</div>
			<div class="form-group">
				<table>				 							  
				 <tr>
					<td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖&emsp;</label></td>
					<td colspan=3>
					<?php
					foreach($council_decision as $decision){
						echo "<input type='radio' name='council_decision' value='".$decision->id."'>";	
						echo " &nbsp;&nbsp;";
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