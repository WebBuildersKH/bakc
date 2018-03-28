<?php
foreach($discipline as $d)
{
    $id = $d->id;
    $lawyer_id = $d->lawyer_id; 
    $lawyer_name_kh = $d->lawyer_name_kh;
    $lawyer_code = $d->lawyer_code; 
    $is_inspection = $d->is_inspection;
    $desc = $d->complaints_desc;
    $end_compliant_by_president = $d->is_presidential_reconciliation;
    $cd = $d->cd_id;

}
?>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">ឈ្មោះមេធាវី</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="hidden" name="hidden_disc" value="<?php echo $id;?>">
    <input type="text" name="name_disc" value="<?php echo $lawyer_name_kh;?>">
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8" for="passwd">បរិយាយសង្ខេប</label>
	&emsp;<textarea name="e_desc" id="e_desc" rows="4" type="text"><?php echo $desc; ?></textarea>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<input type="checkbox" name="end_compliant_by_president"​ id="end_compliant_by_president" <?php echo $end_compliant_by_president?"checked='checked'":""; ?>>
  </div>
</div>

<div class="form-group">
  <label for="staff-id" class="control-label-kh col-md-5 col-sm-5 col-xs-8">ត្រូវធ្វើអធិការកិច្ច</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="checkbox" name="to_be_inspected" <?php echo $is_inspection?"checked='checked'":""; ?>>&emsp;
		<label class="control-label-kh">របាយការណ៍អធិការកិច្ច&emsp;</label>  	
		<input type="button" value="Upload">
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">សេចក្តីសម្រេចក្រុមប្រឹក្សា៖</label>
</div>

<div class="form-group">
	<table>				 							  
	 <tr>
		<td colspan=3>
		<?php
        
        
            foreach($council_decision as $decision){
              if($cd == $decision->id){
                echo "&emsp;<input type='radio' name='council_decision' value='".$decision->id."' checked='checked'>";	
                echo "<label class='control-label-kh'><i>".$decision->decision;
                echo "</i></label>";
              }else{
                echo "&emsp;<input type='radio' name='council_decision' value='".$decision->id."'>";	
                echo "<label class='control-label-kh'><i>".$decision->decision;
                echo "</i></label>";	
              }
            }
            
		?>
		</td>
   </tr>										  
	</table>
</div>

<div class="ln_solid"></div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-3">
    <button class="btn btn-primary" type="button">Cancel</button>
    <button class="btn btn-primary" type="reset">Reset</button>
    <button type="button" id="update_disc" class="btn btn-success">Submit</button>
  </div>
</div>

</form>

<script src="<?php echo base_url();?>public/build/js/formwizard.js"></script>