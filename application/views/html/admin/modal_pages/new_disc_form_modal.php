<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8" for="username">ឈ្មោះមេធាវី<span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <select name="name_disc" id="name_disc">
    <?php
    foreach($lawyers as $lawyer)
    {
        echo "<option value='".$lawyer->id."'>".$lawyer->lawyer_code."-".$lawyer->lawyer_name_kh."</option>";

    }
    ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8" for="passwd">បរិយាយសង្ខេប</label>
	&emsp;<textarea name="desc" id="desc" rows="4" type="text"></textarea>
</div>

<div class="form-group">
  <label class="control-label-kh col-md-5 col-sm-5 col-xs-8">ចប់ដោយការផ្សះផ្សារបស់ប្រធាន</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
	<input type="checkbox" name="end_compliant_by_president"​ id="end_compliant_by_president">
  </div>
</div>

<div class="form-group">
  <label for="staff-id" class="control-label-kh col-md-5 col-sm-5 col-xs-8">ត្រូវធ្វើអធិការកិច្ច</label>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="checkbox" name="to_be_inspected">&emsp;
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
				echo "&emsp;<input type='radio' name='council_decision' value='".$decision->id."'>";	
				echo "<label class='control-label-kh'><i>".$decision->decision;
				echo "</i></label>";	
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
	<button type="button" id="create_disc" class="btn btn-success">Submit</button>
  </div>
</div>

</form>