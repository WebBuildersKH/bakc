<form id="image_upload_form" method="post" enctype="multipart/form-data" action='http://localhost/BAKCLAW/upload/upload_files' autocomplete="off">
<div class="alert alert-danger hide"></div>
 <div class="alert alert-success hide"></div>
 <div class="col-md-6">
 <div class="form-group">
 <label>Upload Image</label>

 <div class="form-group">
    <input type="text" class="form-control" id="mytext" name="mytext">
 </div>
 <div class="input-group">
    
    <span class="input-group-btn">
    <span class="btn btn-success btn-file">
        Browse… <input type="file" id="photoimg" name="photoimg"/>
    </span>
    <span class="btn btn-success btn-file">
        Browse… <input type="file" id="photoimg1" name="photoimg1"/>
    </span>
    <span class="btn btn-success btn-file">
        Browse… <input type="file" id="photoimg2" name="photoimg2"/>
    </span>
    <button type="submit" class="btn btn-warning">
 
 <i class="glyphicon glyphicon-upload"></i> upload
 </button>
 </span>
 </div>
 </div>
 </div>
</form>

<script>

 
 var frm = $('#image_upload_form');
 
    frm.submit(function (e) {
     e.preventDefault();
     var formData = new FormData();
 formData.append('photoimg', $('#photoimg')[0].files[0]);
 formData.append('photoimg1', $('#photoimg1')[0].files[0]);
 formData.append('photoimg2', $('#photoimg2')[0].files[0]);
        
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: formData,
            dataType: "json",
            processData: false,  // tell jQuery not to process the data
       contentType: false,  // tell jQuery not to set contentType
 
            success: function (data) {
                console.log(data['error']);
                alert(JSON.stringify(data));
                
            },
            error: function (data) {
                console.log(data);
                $('.alert-danger').removeClass('hide').addClass('show').html(data);
            },
        });
 
 });
</script>