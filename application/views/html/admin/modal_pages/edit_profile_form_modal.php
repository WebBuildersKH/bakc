<div class="" role="tabpanel" data-example-id="togglable-tabs">
    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class="active">
			<a href="#tab_content11" id="tab1" role="home-tab" data-toggle="tab" aria-expanded="true">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">អត្តសញ្ញាណមេធាវី
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content22" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការបំពេញលក្ខខណ្ឌប្រកបវិជ្ជាជីវៈ
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content33" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">ការអប់រំបន្ត
			</span></a>
        </li>
        <li role="presentation" class="">
			<a href="#tab_content44" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">
			<span style="font-family: Khmer OS Siemreap, Kh Battambang; font-size: 16px; font-weight: bold">វិធានការវិន័យ
			</span></a>
        </li>
    </ul>
	<form name="edit_form1" id="edit_form1" data-parsley-validate class="form-horizontal form-label-left">	
    <div id="myTabContent" class="tab-content">
<!-- Start of Tab11-->      
      <div id="tab_content11" role="tabpanel" class="tab-pane fade active in" aria-labelledby="home-tab">
            <br />
            <div class="form-group">
              <table>
                <tr>
					<input type="hidden" name="hidden_id" value="<?php echo $lawyer[0]->id; ?>">
                    <td><label class="control-label-kh">ឈ្មោះ (ជាខ្មែរ):&emsp;</label></td>
                    <td><input type="text" class="form-control" name="e_name_kh" id="e_name_kh" value="<?php echo $lawyer[0]->lawyer_name_kh; ?>"></td>
                </tr>
				<tr>
				<td>&emsp;</td>
				</tr>
                <tr>
                    <td><label class="control-label-kh">ជាឡាតាំង​:</label></td>
                    <td><input type="text" class="form-control" name="e_name_en" id="e_name_en" value="<?php echo $lawyer[0]->lawyer_name_en; ?>"></td>
                </tr>
				<tr>
				<td>&emsp;</td>
				</tr>
                <tr>
                    <td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំកំណើត:</label></td>
                    <td><input type="text" class="form-control" name="e_dob" id="e_dob" value="<?php echo $lawyer[0]->lawyer_dob; ?>"></td>
                </tr>
				<tr>
				<td>&emsp;</td>
				</tr>
                <tr>
                    <td><label class="control-label-kh">អត្តលេខ:</label></td>
                    <td><input type="text" class="form-control" name="e_lawyer_code" id="e_lawyer_code" value="<?php echo $lawyer[0]->lawyer_code; ?>"></td>
                </tr>
              </table>                								
            </div>
      </div>
<!-- End of Tab 11-->
      <div id="tab_content22" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
        <?php 
			$data_array = array();
			$data_array['id'] = '';
            $data_array['date_of_completion'] = '';
            $data_array['date_of_prob'] = '';
            $data_array['is_pursue_study'] = '';
            $data_array['date_of_fulltime'] = '';
            $data_array['date_of_righteousness'] = '';
			$data_array['date_of_without_righteousness'] = '';
			$data_array['cert_of_pro_accr_no'] = '';
			$data_array['cert_of_pro_accr_date'] = '';
			$data_array['date_of_prob_righteousness'] = '';
			$data_array['date_end_of_righteousness'] = '';
			$data_array['cert_completion_no'] = '';
			$data_array['fulltime_no'] = '';
			$data_array['no_prob_righteousness'] = '';
			$data_array['date_of_no_prob_righteousness'] = '';
			$data_array['fulltime_approval'] = '';
			$data_array['date_of_fulltime_approval'] = '';
            $data_array['firm_name'] = '';
            $data_array['authorisation_number'] = '';
            $data_array['permission_number'] = '';
            $data_array['firm_validity'] = '';
			$data_array['out_bar_validity'] = '';
			$data_array['out_bar_no'] = '';
			$data_array['out_bar_decision'] = '';
			$data_array['out_list_validity'] = '';
			$data_array['out_list_reason'] = '';
			$data_array['no_pro_no'] = '';
			$data_array['date_of_no_pro'] = '';
			$data_array['prohibition_statement'] = '';
			$data_array['date_of_prohibition'] = '';
			$data_array['prohibition_reason'] = '';

            foreach($conditions as $cond){
				$data_array['id'] = $cond->id;
                $data_array['date_of_completion'] = $cond->date_of_completion;
                $data_array['date_of_prob'] = $cond->date_of_prob;
                $data_array['is_pursue_study'] = $cond->is_pursue_study;
				$data_array['date_of_fulltime'] = $cond->date_of_fulltime;
				$data_array['fulltime_no'] = $cond->fulltime_no;			
                $data_array['date_of_righteousness'] = $cond->date_of_righteousness;
			 //   $data_array['date_of_without_righteousness'] = $cond->date_of_without_righteousness;
			 	$data_array['cert_of_pro_accr_no'] = $cond->cert_of_pro_accr_no;
				$data_array['cert_of_pro_accr_date'] = $cond->cert_of_pro_accr_date;
				$data_array['date_of_prob_righteousness'] = $cond->date_of_prob_righteousness; 
				$data_array['date_of_no_prob_righteousness'] = $cond->date_of_no_prob_righteousness; 
				$data_array['cert_completion_no'] = $cond->cert_completion_no; //added
				$data_array['date_end_of_righteousness'] = $cond->date_end_of_righteousness; //added
                $data_array['no_prob_righteousness'] = $cond->no_prob_righteousness;
				$data_array['fulltime_approval'] = $cond->fulltime_approval;
				$data_array['date_of_fulltime_approval'] = $cond->date_of_fulltime_approval;
                $data_array['firm_name'] = $cond->firm_name;
                $data_array['authorisation_number'] = $cond->authorisation_number; 
                $data_array['permission_number'] = $cond->permission_number; 
                $data_array['firm_validity'] = $cond->firm_validity; 
				$data_array['out_bar_validity'] = $cond->out_bar_validity; 
				$data_array['out_bar_no'] = $cond->out_bar_no; 
				$data_array['out_bar_decision'] = $cond->out_bar_decision; 
				$data_array['out_list_validity'] = $cond->out_list_validity; 
				$data_array['out_list_reason'] = $cond->out_list_reason; 
				$data_array['no_pro_no'] = $cond->no_pro_no; 
				$data_array['date_of_no_pro'] = $cond->date_of_no_pro; 
				$data_array['prohibition_statement'] = $cond->prohibition_statement;
				$data_array['date_of_prohibition'] = $cond->date_of_prohibition;
				$data_array['prohibition_reason'] = $cond->prohibition_reason;

            }
        ?>
				<div class="form-group">
					<label class="control-label-kh"><b>២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី</b></label>
				</div>

				<div class="form-group">
					<table>
						<tr>
							<input type="hidden" name="hidden_con_id" value="<?php echo $data_array['id']; ?>">
							<td><label class="control-label-kh">២.១.១ បញ្ចប់ &nbsp;&nbsp;</label>    </td>
							<td><input type="checkbox" name="is_completion" id="is_completion" <?php echo $data_array['date_of_completion']?"checked='checked'":""; ?>>&nbsp;</td>
							<td><label class="control-label-kh">ផ្តើមថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
							<td><input type="text" class="form-control" name="e_date_of_completion" id="e_date_of_completion" data-inputmask="'mask': '99/99/9999'" value="<?php echo $data_array['date_of_completion'];?>">&nbsp;</td>
							<td><label class="control-label-kh">&nbsp;យោងតាមសេចក្តីសំរេចលេខ&nbsp;</label></td>
							​<td class="col-xs-2"><input type="text" class="form-control" name="e_cert_completion_no" value="<?php echo $data_array['cert_completion_no'];?>">&nbsp;</td>
						</tr>	
					</table>
				</div>					

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.១.២	ចប់កម្មសិក្សា  &nbsp;&nbsp;</label>    </td>
						<td><input type="checkbox" name="end_prob" id="end_prob" <?php echo $data_array['date_of_prob']?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
						<td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
						<td><input type="text" name="e_date_of_prob" class="form-control" id="e_date_of_prob" data-inputmask="'mask': '99/99/9999'" value="<?php echo $data_array['date_of_prob']; ?>">&nbsp;&nbsp;</td>
					</tr>	
					</table>
				</div>						

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.១.៣	កម្មសិក្សាត្រូវបន្ត&nbsp;&nbsp;</label>    </td>
						<td><input type="checkbox" name="e_is_pursue_study" <?php echo $data_array['is_pursue_study']?"checked='checked'":""; ?>>&nbsp;</td>
					</tr>	
					</table>
				</div>		

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ &nbsp;&nbsp;</label>    </td>
						<td><input type="checkbox" name="is_fulltime" id="is_fulltime" <?php echo $data_array['date_of_fulltime']?"checked='checked'":"";?>>&nbsp;</td>
						<td><label class="control-label-kh">សេចក្តីសម្រេចលេខ&nbsp;</label></td>
						<td class="col-xs-2"><input type="text" class="form-control" name="e_fulltime_no" value="<?php echo $data_array['fulltime_no'];?>">&nbsp;</td>
						<td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
						<td><input type="text" class="form-control" name="e_date_of_fulltime" id="e_date_of_fulltime" data-inputmask="'mask': '99/99/9999'" value="<?php echo $data_array['date_of_fulltime'];?>">&nbsp;</td>
					</tr>	
					</table>
				</div>
			<hr />
				<div class="form-group">
					<label class="control-label-kh"><b>២.២	លក្ខខណ្ឌប្រកបតាមមាត្រា ៣២</b></label>
				</div>

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.២.១ ត្រូវបំពេញសុក្រិត្យការ &nbsp;&nbsp;</label>    </td>
						<td><input type="checkbox" name="righteousness" id="righteousness" <?php echo $data_array['date_of_righteousness']?"checked='checked'":""; ?>>&nbsp;</td>
						<td><label class="control-label-kh">ចាប់ផ្តើមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
						<td><input type="text" class="form-control" name="e_date_of_righteousness" id="e_date_of_righteousness" data-inputmask="'mask': '99/99/9999'" value="<?php echo $data_array['date_of_righteousness']; ?>">&nbsp;</td>
						<td><label class="control-label-kh">&nbsp;​​​បញ្ចប់ថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
					    <td><input type="text" class="form-control" name="e_date_end_of_righteousness" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY" value="<?php echo $data_array['date_end_of_righteousness']; ?>">&nbsp;</td>
					</tr>	
					</table>
				</div>			
	<!-- -->
				<div class="form-group row">
					<div class="col-xs-11">
						<table>
							<tr>
								<td><label class="control-label-kh">២.២.២ វិញ្ញាបនប័ត្រសុក្រិត្យការ វិជ្ជាជីវៈមេធាវី</label></td>
								<td><input type="checkbox" name="is_cert_of_pro_accr" id="is_cert_of_pro_accr" <?php echo $data_array['cert_of_pro_accr_no']?"checked='checked'":"";?>>&nbsp;</td>
								<td><label class="control-label-kh">ចេញលេខ</label></td>
								<td class="col-xs-2"><input type="text" class="form-control" name="e_cert_of_pro_accr_no" value="<?php echo $data_array['cert_of_pro_accr_no'];?>">&nbsp;</td>
								<td><label class="control-label-kh">&nbsp;​​​ថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
								<td><input type="text" class="form-control" name="e_cert_of_pro_accr_date" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY" value="<?php echo $data_array['cert_of_pro_accr_date'];?>">&nbsp;</td>
							</tr>	
						</table>
					</div>
				</div>	
	<!-- -->								

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.២.៣	កម្មសិក្សា&nbsp;&nbsp;</label>    </td>
						<td><input type="checkbox" name="prob_righteousness" id="prob_righteousness" <?php echo $data_array['date_of_prob_righteousness']?"checked='checked'":""; ?>>&nbsp;&nbsp;</td>
						<td><label class="control-label-kh">ថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label>    </td>
						<td><input type="text" class="form-control" name="e_date_of_prob_righteousness" data-inputmask="'mask': '99/99/9999'" value="<?php echo $data_array['date_of_prob_righteousness']; ?>">&nbsp;&nbsp;</td>
					</tr>	
					</table>
				</div>								

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.២.៥ លើកលែងធ្វើកម្មសិក្សា&nbsp;</label>    </td>
						<td><input type="checkbox" name="is_no_prob_righteousness" id="is_no_prob_righteousness" <?php echo $data_array['no_prob_righteousness']?"checked='checked'":"";?>>&nbsp;</td>
						<td><label class="control-label-kh">សេចក្តីសម្រេចលេខ&nbsp;&nbsp;</label>    </td>
						<td><input type="text" name="e_no_prob_righteousness" class="form-control" value="<?php echo $data_array['no_prob_righteousness'];?>" >&nbsp;</td>
						<td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;</label></td>
						<td><input type="text" name="e_date_of_no_prob_righteousness" value="<?php echo $data_array['date_of_no_prob_righteousness'];?>" class="form-control" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
						
					</tr>	
					</table>
				</div>	

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.២.៦	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ  &nbsp;&nbsp;</label></td>
						<td><input type="checkbox" name="is_fulltime_approval" id="is_fulltime_approval" <?php echo $data_array['fulltime_approval']?"checked='checked'":"" ?>>&nbsp;&nbsp;</td>
						<td><label class="control-label-kh">&nbsp;&nbsp;សេចក្តីសម្រេច លេខ&nbsp;&nbsp;</label></td>
						<td><input type="text" class="form-control" name="e_fulltime_approval" id="e_fulltime_approval" value="<?php echo $data_array['fulltime_approval'];?>" >&nbsp;&nbsp;</td>
						<td><label class="control-label-kh">ថ្ងៃទី ខែ ឆ្នាំ&nbsp;</label></td> 
						<td><input type="text" class="form-control" name="e_date_of_fulltime_approval" value="<?php echo $data_array['date_of_fulltime_approval'];?>" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>	
					</tr>	
					</table>
				</div>		

			<hr />
				<div class="form-group">
					<label class="control-label-kh"><b>២.៣	ការប្រកបវិជ្ជាជីវៈ</b></label>
				</div>								

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.៣.១	ការិយាល័យឈ្មោះ &nbsp;&nbsp;</label></td>
						<td><input type="text" class="form-control" name="e_firm_name" value="<?php echo $data_array['firm_name'];?>">&nbsp;&nbsp;
						</td>
						<td><label class="control-label-kh">&nbsp;&nbsp;លិខិតអនុញ្ញាតលេខ &nbsp;&nbsp;</label></td> 
						<td><input type="text" class="form-control" name="e_authorisation_number" value="<?php echo $data_array['authorisation_number'];?>">&nbsp;&nbsp;
						</td>
					</tr>	
					</table>
				</div>						

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ&nbsp;&nbsp;</label></td>
						<td><input type="text" class="form-control" name="e_permission_number" value="<?php echo $data_array['permission_number'];?>">&nbsp;&nbsp;
						</td>
						<td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
						<td><input type="text" class="form-control" name="e_firm_validity" data-inputmask="'mask': '99/99/9999'" value="<?php echo $data_array['firm_validity'];?>">&nbsp;&nbsp;
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
						<td><input type="checkbox" name="is_out_bar_validity" id="is_out_bar_validity" <?php echo $data_array['out_bar_validity']?"checked='checked'":""; ?>> &nbsp;&nbsp;
						</td>
						<td><label class="control-label-kh">&nbsp;&nbsp;អស់សុពលភាពត្រឹមថ្ងៃ ខែ ឆ្នាំ&nbsp;&nbsp;</label></td> 
						<td><input type="text" class="form-control" name="e_out_bar_validity" id="e_out_bar_validity" data-inputmask="'mask': '99/99/9999'" value="<?php echo $data_array['out_bar_validity']; ?>">&nbsp;&nbsp;
						</td>
					</tr>	
					</table>
				</div>					

			<div class="form-group row">
				<div class="col-xs-10">
					<table>
						<tr>
							<td><label class="control-label-kh">២.៤.២	តំរូវឲ្យនៅក្រៅបញ្ជី &nbsp;</label></td>
							<td><input type="checkbox" name="is_out" id="is_out" <?php echo $data_array['out_bar_no']?"checked='checked'":""; ?>>&nbsp;</td>
							​​<td><label class="control-label-kh">&nbsp;សេចក្តីសម្រេចលេខ&nbsp;</label></td> 
							<td class="col-xs-2"><input type="text" class="form-control" name="e_out_bar_no" value="<?php echo $data_array['out_bar_no']; ?>">&nbsp;</td> 
							<td><label class="control-label-kh">&nbsp;នៅថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td> 
							<td><input type="text" class="form-control" name="e_out_bar_decision" value="<?php echo $data_array['out_bar_decision']; ?>" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td> 
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
							<td><input type="text" class="form-control" name="e_out_list_validity" value="<?php echo $data_array['out_list_validity'];?>" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td> 
							<td><label class="control-label-kh">&nbsp;មូលហេតុ&nbsp;</label></td> 
							<td><textarea name="e_out_list_reason" id="e_out_list_reason" type="text"><?php echo $data_array['out_list_reason'];?></textarea></td> 
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
							<td><input type="checkbox" name="is_no_pro" id="is_no_pro" <?php echo $data_array['no_pro_no']?"checked='checked'":"";?>>&nbsp;</td>
							​​<td><label class="control-label-kh">&nbsp;សេចក្តីសម្រេចលេខ&nbsp;</label></td> 
							<td class="col-xs-2"><input type="text" class="form-control" name="e_no_pro_no" value="<?php echo $data_array['no_pro_no'];?>">&nbsp;</td> 
							<td><label class="control-label-kh">&nbsp;នៅថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td> 
							<td><input type="text" class="form-control" name="e_date_of_no_pro" value="<?php echo $data_array['date_of_no_pro'];?>" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td> 
						</tr>	
					</table>
			  	</div>
			</div>
				<hr />					

				<div class="form-group">
					<label class="control-label-kh"><b>២.៥ ការហាមឃាត់មិនឲ្យប្រកប</b></label>
				</div>								

				<div class="form-group">
					<table>
					<tr>
						<td><label class="control-label-kh">២.៥.១	សេចក្តីសម្រេចលេខ&nbsp;</label></td>
						<td><input type="text" class="form-control" name="e_prohibition_statement" value="<?php echo $data_array['prohibition_statement']; ?>">&nbsp;
						</td>
						<td><label class="control-label-kh">នៅថ្ងៃ ខែ ឆ្នាំ&nbsp;</label></td>
						<td><input type="text" class="form-control" name="e_date_of_prohibition" value="<?php echo $data_array['date_of_prohibition']; ?>" data-inputmask="'mask': '99/99/9999'" placeholder="DD/MM/YYYY">&nbsp;</td>
					</tr>	
					</table>
				</div>

				<div class="form-group row">
					<p>
						<label class="control-label-kh">&nbsp;&nbsp;មូលហេតុ&nbsp;</label>
						<textarea name="e_prohibition_reason" id="e_prohibition_reason" rows="4" cols="300" type="text"><?php echo $data_array['prohibition_reason']; ?></textarea>
					</p>
				</div>	

      </div>
<!-- End of Tab 22-->
      <div id="tab_content33" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
        <br />
			<?php
			$i=1;
			$total_hours = 0;
			foreach($education as $edu){
			?>
			<div class="form-group">
				<p><label class="control-label-kh">លើកទី <?php echo $i;?>&emsp;</label></p>
				<table>
					<tr>
						<input type="hidden" name="hidden_edu_id" value="<?php echo $edu->id;?>">
						<td><label class="control-label-kh">មុខវិជ្ជា&emsp;</label></td>
						<td><input type="text" name="e_subject" class="form-control" value="<?php echo $edu->subject; ?>">
						<td><label class="control-label-kh">&emsp;ចំនួនម៉ោងសិក្សា៖&emsp;</label></td>
						<td><input type="text" name="e_number_of_hours" class="form-control" value="<?php echo $edu->number_of_hours; ?>">
						</td>
					</tr>	
				</table>
	   		</div>	
			<?php
				$i++;
				$total_hours += $edu->number_of_hours;
			}
			?>
			<div class="form-group more-edu">

			</div>
			<div class="form-group">
				<table>
					<tr>
						<td><label class='control-label-kh'>សរុបម៉ោងអប់រំបន្តមកទល់បច្ចុប្បន្ន:&emsp;</label></td>
						<td><label class='control-label-kh'><?php echo $total_hours; ?> ម៉ោង</label></td>
					</tr>
				
				</table>
			</div>
			<div class="form-group">
				<button type="button" class="btn btn-success add-class">បន្ថែមថ្នាក់ថ្មី</button>
				<button type="button" class="btn btn-success update-class">Check Class</button>
				
			</div>

		</div>
<!-- End of Tab 33-->
      <div id="tab_content44" role="tabpanel" class="tab-pane fade" aria-labelledby="profile-tab">
			<?php
			if($discipline){
					foreach($discipline as $dis){
			?>

					<div class="form-group">
						<p><label class="control-label-kh"><b>បណ្តឹង</b>&emsp;</label>
							<input type="checkbox" name="e_is_sued" <?php echo $dis->lawyer_id?"checked='checked'":""; ?>>
						</p>
						<p><label class="control-label-kh"><i>បរិយាយសង្ខេប</i>&emsp;</label>
						</p>
						<p><textarea name="e_complaints_des" id="e_complaints_des" rows="4" cols="500" type="text"><?php echo $dis->complaints_desc; ?></textarea>
						</p>
						<p>
							<label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន&emsp;</label>	
							<input type="checkbox" name="e_is_presidential_reconciliation" <?php echo $dis->is_presidential_reconciliation?"checked='checked'":"";?>>
						</p>
						<p>
							<label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច&emsp;</label>
							<input type="checkbox" name="e_is_inspection" <?php echo $dis->is_inspection?"checked='checked'":""; ?>>&emsp;
							<label class="control-label-kh">របាយការណ៍អធិការកិច្ច&emsp;</label>  	
							<input type="button" value="UPLOAD របាយការណ៍">
						</p>
					</div>

					<div class="form-group">
						<table>				 							  
				 			<tr>
								<td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖11&emsp;</label></td>
								<td colspan=3>
							<?php
							foreach($council_decision as $decision){
								echo "<input type='radio' ".(($dis->cd_id==$decision->id)?"checked='checked'":"")." name='e_council_decision' value='".$decision->id."'>";	
								echo " &nbsp;&nbsp;";
								echo "<label class='control-label-kh'><i>".$decision->decision;
								echo "</i>&nbsp;&nbsp;</label>";	
							}
							?>
								</td>
							</tr>										  
						</table>
	   				</div>
			<?php
					}
				}else{
			?>
					<div class="form-group">
						<p><label class="control-label-kh"><b>បណ្តឹង</b>&emsp;</label>
							<input type="checkbox" name="e_is_sued">
						</p>
						<p><label class="control-label-kh"><i>បរិយាយសង្ខេប</i>&emsp;</label>
						</p>
						<p><textarea name="e_complaints_des" id="e_complaints_des" rows="4" cols="500" type="text"></textarea></p>
						<p>
							<label class="control-label-kh">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន&emsp;</label>	
							<input type="checkbox" name="e_is_presidential_reconciliation">
						</p>
						<p>
							<label class="control-label-kh">ត្រូវធ្វើអធិការកិច្ច&emsp;</label>
							<input type="checkbox" name="e_is_inspection">&emsp;
							<label class="control-label-kh">របាយការណ៍អធិការកិច្ច&emsp;</label>  	
							<input type="button" value="Download របាយការណ៍">
						</p>
					</div>
				
					<div class="form-group">
						<table>				 							  
				 			<tr>
								<td><label class="control-label-kh">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖11&emsp;</label></td>
								<td colspan=3>
							<?php
							foreach($council_decision as $decision){
								echo "<input type='radio' name='e_council_decision' value='".$decision->id."'>";	
								echo " &nbsp;&nbsp;";
								echo "<label class='control-label-kh'><i>".$decision->decision;
								echo "</i>&nbsp;&nbsp;</label>";	
							}
							?>
								</td>
							</tr>										  
						</table>
	   				</div>

			<?php
				}
			?>

		  </div> <!-- end content tab4-->
		  <div class="form-group">  
			  <button type="button" onclick="myFunction()" class="btn btn-success btn-lg pull-right">Update</button>
		  </div>		
	  </div>
<!-- End of Tab_Content-->
	</form>	
</div>
  <!-- jQuery -->
<script src="<?php echo base_url();?>public/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
<script src="<?php echo base_url();?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/build/js/custom.min.js"></script>
<script src="<?php echo base_url();?>public/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<script>
function myFunction(){
	
	
	var number_of_hours  = [];
	var subjects = [];
	var edu_ids = [];

	$("input[name='hidden_edu_id']").each(function(){
		edu_ids.push(this.value);
	});
	
	$("input[name='e_number_of_hours']").each(function(){
		number_of_hours.push(this.value);
	});

    $("input[name='e_subject']").each(function(){
        subjects.push(this.value);
	});
	alert(subjects);
//	alert(number_of_hours);
	var data_collection = { 
	'lawyer_id': $('input[name=hidden_id]').val(),	
	'name_kh' : $('input[name=e_name_kh]').val(),
	'name_en' : $('input[name=e_name_en]').val(),
	'dob' : $('input[name=e_dob]').val(),
	'lawyer_code' : $('input[name=e_lawyer_code]').val(),
	//២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី
	'condition_id' : $('input[name=hidden_con_id]').val(),
	'date_of_completion' : $('input[name=e_date_of_completion]').val(),
	'cert_completion_no' : $('input[name=e_cert_completion_no]').val(),
	//២.១.២	ចប់កម្មសិក្សា 
	'date_of_prob' : $('input[name=e_date_of_prob]').val(),
	//២.១.៣	កម្មសិក្សាត្រូវបន្ត
	'is_pursue_study' : ($('input[name=e_is_pursue_study]').is(":checked"))? "1":"0",
	//២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ 
	'date_of_fulltime' : $('input[name=e_date_of_fulltime]').val(),
	'fulltime_no' : $('input[name=e_fulltime_no]').val(),
	//2.2
	'date_of_righteousness' : $('input[name=e_date_of_righteousness]').val(),
	'date_end_of_righteousness' : $('input[name=e_date_end_of_righteousness]').val(),
	'cert_of_pro_accr_no' : $('input[name=e_cert_of_pro_accr_no]').val(),
	'cert_of_pro_accr_date' : $('input[name=e_cert_of_pro_accr_date]').val(),
	//2.2.3
	'date_of_prob_righteousness' : $('input[name=e_date_of_prob_righteousness]').val(),
	'date_of_no_prob_righteousness' : $('input[name=e_date_of_no_prob_righteousness]').val(),
	//២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា
	'no_prob_righteousness' : $('input[name=e_no_prob_righteousness]').val(),
	//2.2.6
	'fulltime_approval' : $('input[name=e_fulltime_approval]').val(),
	'date_of_fulltime_approval' : $('input[name=e_date_of_fulltime_approval]').val(),
	//២.៣	ការប្រកបវិជ្ជាជីវៈ
	'firm_name' : $('input[name=e_firm_name]').val(),
	'authorisation_number' : $('input[name=e_authorisation_number]').val(),
	//២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ
	'permission_number' : $('input[name=e_permission_number]').val(),
	'firm_validity' : $('input[name=e_firm_validity]').val(),
	//២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី
	'out_bar_validity' : $('input[name=e_out_bar_validity]').val(),
	'out_bar_no' : $('input[name=e_out_bar_no]').val(),
	//២.៤.២	តាមសេចក្តីសម្រេចដាក់ឲ្យនៅក្រៅបញ្ជី
	'out_bar_decision' : $('input[name=e_out_bar_decision]').val(),
	'out_list_validity' : $('input[name=e_out_list_validity]').val(),
	'out_list_reason' : $("#e_out_list_reason").val(),
	//2.4.3
	'no_pro_no' : $('input[name=e_no_pro_no]').val(),
	'date_of_no_pro' : $('input[name=e_date_of_no_pro]').val(),
	//២.៥.១	សេចក្តីសម្រេច
	'prohibition_statement' : $('input[name=e_prohibition_statement]').val(),
	'date_of_prohibition' : $('input[name=e_date_of_prohibition]').val(),
	'prohibition_reason' : $("#e_prohibition_reason").val(),
	//៣.១ លើកទី ១
	'edu_ids' : edu_ids,
	'subjects' : subjects,
	'number_of_hours' : number_of_hours, //$('input[name=class_hours]').val(),
	//៤.១ បណ្តឹង
	'is_sued' : ($('input[name=e_is_sued]').is(":checked"))? "1":"0",
	'complaints_des' : $("#e_complaints_des").val(),
	//៣.២ សរុបម៉ោងអប់រំបន្តមកទល់បច្ចុប្បន្ន
	'is_presidential_reconciliation' :  ($('input[name=e_is_presidential_reconciliation]').is(":checked"))? "1":"0",
	'is_inspection' : ($('input[name=e_is_inspection]').is(":checked"))? "1":"0",
	//សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ 
	'council_decision' : ($("input[name='e_council_decision']:checked").val())?$("input[name='e_council_decision']:checked").val():"0"
	};

	//var str = $("#edit_form1").serialize();
	//alert(str);
	//alert($('input[name=e_no_prob_righteousness]').val());

	$.ajax({
		type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
	  //  url         : 'http://localhost/BAKCLAW/application/views/html/admin/action.php', // the url where we want to POST
		url         : 'http://localhost/BAKCLAW/administrator/lawyer/update',  
		data        : { 'data' : data_collection }, // our data object
		dataType    : 'json', // what type of data do we expect back from the server
		encode          : true
	})
		// using the done promise callback
		.done(function(data) {
			alert(JSON.stringify(data));
			location.reload(true);
		});
	
}

$(".add-class").click(function(){ 

	$(".more-edu").append("<p><table><input type='hidden' name='hidden_edu_id'><tr><td><label class='control-label-kh'>មុខវិជ្ជា</label>&emsp;</td><td><input class='form-control' type='text' name='e_subject'></td><td><label class='control-label-kh'>&emsp;ចំនួនម៉ោងសិក្សា&emsp;</label></td><td><input class='form-control' type='text' name='e_number_of_hours'></td></tr></table></p><hr />");

});

$(".update-class").click(function(){ 
	var class_from = [];
	var class_to = [];

	$("input[name='class_from']").each(function(){
		class_from.push(this.value);
	});

	$("input[name='class_to']").each(function(){
		class_to.push(this.value);
	});

	alert("From:"+class_from+", To:"+class_to);

});

  ////
</script>
