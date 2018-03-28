<script>
function myFunction(){
    alert("test");

}
</script>


<form name="example1" id="example1">
			<div class="form-group">  
			  <button type="button" class="btn btn-success" onclick="myFunction1()">Update</button>
			  <button type="button" onclick="myFunction()" class="btn btn-success">Submit</button>
			
		  </div>
</form>
<script src="<?php echo base_url();?>public/build/js/formwizard.js"></script>