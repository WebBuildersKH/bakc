$(document).ready(function () {
    $('input[name=date_of_completion]').attr('disabled', '');
    $('input[name=cert_completion_no]').attr('disabled', '');
    $('#date_of_prob').attr('disabled', '');
    $('input[name=fulltime_no]').attr('disabled', '');
    $('input[name=date_of_fulltime]').attr('disabled', '');
    $('input[name=fairness_date]').attr('disabled', '');
    $('input[name=fairness_date_end]').attr('disabled', '');
    $('input[name=cert_of_pro_accr_no]').attr('disabled', '');   
    $('input[name=cert_of_pro_accr_date]').attr('disabled', '');
    $('#probation_date').attr('disabled', '');
    $('input[name=probabtion_verdict]').attr('disabled', '');
    $('input[name=date_of_probabtion_verdict]').attr('disabled', '');
    $('input[name=fulltime_verdict]').attr('disabled', '');
    $('input[name=fulltime_verdict_date]').attr('disabled', '');
    $('#date_of_out_validity').attr('disabled', '');
    $('input[name=verdict_no]').attr('disabled', '');
    $('input[name=date_of_verdict]').attr('disabled', '');
    $('input[name=out_list_validity]').attr('disabled', '');
    $('#out_list_reason').attr('disabled', '');
    $('input[name=no_pro_no]').attr('disabled', '');
    $('input[name=date_of_no_pro]').attr('disabled', '');

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

//au

//eddd

$('#end_cert').click (function () {
    if($('input[name=end_cert]').is(":checked")) {
        //remove disabled
        $('input[name=date_of_completion]').removeAttr('disabled');  
        $('input[name=cert_completion_no]').removeAttr('disabled');      
    } else {
        //disable text       
        $('input[name=date_of_completion]').attr('disabled', '');
        $('input[name=cert_completion_no]').attr('disabled', '');
    }
});

$('#end_prob').click (function () {
    if($('input[name=end_prob]').is(":checked")) {
        //remove disabled
        $('#date_of_prob').removeAttr('disabled');       
    } else {
        //disable text       
        $('#date_of_prob').attr('disabled', '');
    }
});

$('#is_fulltime').click (function () {
    if($('input[name=is_fulltime]').is(":checked")) {
        //remove disabled
        $('input[name=fulltime_no]').removeAttr('disabled'); 
        $('input[name=date_of_fulltime]').removeAttr('disabled');       
    } else {
        //disable text       
        $('input[name=fulltime_no]').attr('disabled', '');
        $('input[name=date_of_fulltime]').attr('disabled', '');
    }
});

$('#fairness').click (function () {
    if($('input[name=fairness]').is(":checked")) {
        //remove disabled
        $('input[name=fairness_date]').removeAttr('disabled');    
        $('input[name=fairness_date_end]').removeAttr('disabled');    
    } else {
        //disable text       
        $('input[name=fairness_date]').attr('disabled', '');
        $('input[name=fairness_date_end]').attr('disabled', '');
    }
});

$('#is_cert_of_pro_accr').click (function () {
    if($('input[name=is_cert_of_pro_accr]').is(":checked")) {
        //remove disabled
        $('input[name=cert_of_pro_accr_no]').removeAttr('disabled');    
        $('input[name=cert_of_pro_accr_date]').removeAttr('disabled');    
    } else {
        //disable text       
        $('input[name=cert_of_pro_accr_no]').attr('disabled', '');
        $('input[name=cert_of_pro_accr_date]').attr('disabled', '');
    }
});

///////

///////

$('#is_no_pro').click (function () {
    if($('input[name=is_no_pro]').is(":checked")) {
        //remove disabled
        $('input[name=no_pro_no]').removeAttr('disabled');   
        $('input[name=date_of_no_pro]').removeAttr('disabled');       
    } else {
        //disable text       
        $('input[name=no_pro_no]').attr('disabled', '');
        $('input[name=date_of_no_pro]').attr('disabled', '');
    }
});
////
$('#probation').click (function () {
    if($('input[name=probation]').is(":checked")) {
        //remove disabled
        $('#probation_date').removeAttr('disabled');       
    } else {
        //disable text       
        $('#probation_date').attr('disabled', '');
    }
});
/////
$('#no_probabtion').click (function () {
    if($('input[name=no_probabtion]').is(":checked")) {
        //remove disabled
        $('input[name=probabtion_verdict]').removeAttr('disabled');   
        $('input[name=date_of_probabtion_verdict]').removeAttr('disabled'); 
        
    } else {
        //disable text       
        $('input[name=probabtion_verdict]').attr('disabled', '');
        $('input[name=date_of_probabtion_verdict]').attr('disabled', '');
    }
});
////
$('#allow_fulltime').click (function () {
    if($('input[name=allow_fulltime]').is(":checked")) {
        //remove disabled
        $('input[name=fulltime_verdict]').removeAttr('disabled');  
        $('input[name=fulltime_verdict_date]').removeAttr('disabled');       
    } else {
        //disable text       
        $('input[name=fulltime_verdict]').attr('disabled', '');
        $('input[name=fulltime_verdict_date]').attr('disabled', '');
    }
});
/////
$('#follow_proposal').click (function () {
    if($('input[name=follow_proposal]').is(":checked")) {
        //remove disabled
        $('#date_of_out_validity').removeAttr('disabled');       
    } else {
        //disable text       
        $('#date_of_out_validity').attr('disabled', '');
    }
});
//////
$('#is_out').click (function () {
    if($('input[name=is_out]').is(":checked")) {
        //remove disabled
        $('input[name=verdict_no]').removeAttr('disabled');   
        $('input[name=date_of_verdict]').removeAttr('disabled');   
        $('input[name=out_list_validity]').removeAttr('disabled');  
        $('#out_list_reason').removeAttr('disabled');  
        
    } else {
        //disable text       
        $('input[name=verdict_no]').attr('disabled', '');
        $('input[name=date_of_verdict]').attr('disabled', '');
        $('input[name=out_list_validity]').attr('disabled', '');
        $('#out_list_reason').attr('disabled', '');
    }
});

//ddddd
$(".add-more").click(function(){ 

    var html = $(".copy").html();

    $(".after-add-more").after(html);

});
//////
$(".add-edu-more").click(function(){ 

    var html = $(".copy-edu").html();

    $(".after-add-edu-more").after(html);

});

/////////////
$("body").on("click",".remove",function(){ 

    $(this).parents(".form-group").remove();

});


$( "#go" ).click(function() {

var class_hours = [];
var subjects = [];

    $("input[name='class_hours']").each(function(){
        class_hours.push(this.value);
    });
    $("input[name='subject']").each(function(){
        subjects.push(this.value);
    });
//alert($("#complaint_des").val());
var data_collection = { 
    'namekh' : $('input[name=namekh]').val(),
    'nameeng' : $('input[name=nameeng]').val(),
    'dob' : $('input[name=dob]').val(),
    'id' : $('input[name=id]').val(),
    //២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី
    'end_cert' : $('input[name=end_cert]').val(),
    'date_of_completion' : $('input[name=date_of_completion]').val(),
    'cert_completion_no' : $('input[name=cert_completion_no]').val(),
    //២.១.២	ចប់កម្មសិក្សា 
    'end_prob' : ($('input[name=end_prob]').is(":checked"))? "1":"0",
    'date_of_prob' : $('input[name=date_of_prob]').val(),
    //២.១.៣	កម្មសិក្សាត្រូវបន្ត
    'pursue_study' : ($('input[name=pursue_study]').is(":checked"))? "1":"0",
    //២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ 
    'is_fulltime' : ($('input[name=is_fulltime]').is(":checked"))? "1":"0",
    'date_of_fulltime' : $('input[name=date_of_fulltime]').val(),
    'fulltime_no' : $('input[name=fulltime_no]').val(),
    //2.2
    'fairness' : ($('input[name=fairness]').is(":checked"))? "1":"0",
    'fairness_date' : $('input[name=fairness_date]').val(),
    'fairness_date_end' : $('input[name=fairness_date_end]').val(),

    'is_cert_of_pro_accr' : ($('input[name=is_cert_of_pro_accr]').is(":checked"))? "1":"0",
    'cert_of_pro_accr_no' : $('input[name=cert_of_pro_accr_no]').val(),
    'cert_of_pro_accr_date' : $('input[name=cert_of_pro_accr_date]').val(),

    //២.២.២	លើកលែងបំពេញសុក្រិត្យការ 
    //2.2.3
    'probation' : ($('input[name=probation]').is(":checked"))? "1":"0",
    'probation_date' : $('input[name=probation_date]').val(),
    //២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា
    'no_probabtion' : ($('input[name=no_probabtion]').is(":checked"))? "1":"0",
    'probabtion_verdict' : $('input[name=probabtion_verdict]').val(),
    'date_of_probabtion_verdict' : $('input[name=date_of_probabtion_verdict]').val(),
    //2.2.6
    'allow_fulltime' : ($('input[name=allow_fulltime]').is(":checked"))? "1":"0",
    'fulltime_verdict' : $('input[name=fulltime_verdict]').val(),
    'fulltime_verdict_date' : $('input[name=fulltime_verdict_date]').val(),
    //២.៣	ការប្រកបវិជ្ជាជីវៈ
    'firm_name' : $('input[name=firm_name]').val(),
    'approval_id' : $('input[name=approval_id]').val(),
	//២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ
	'approval_number' : $('input[name=approval_number]').val(),
	'date_of_validity' : $('input[name=date_of_validity]').val(),
	//២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី
	'follow_proposal' : ($('input[name=follow_proposal]').is(":checked"))? "1":"0",
	'date_of_out_validity' : $('input[name=date_of_out_validity]').val(),
	//២.៤.២	តាមសេចក្តីសម្រេចដាក់ឲ្យនៅក្រៅបញ្ជី
    'is_out' : ($('input[name=is_out]').is(":checked"))? "1":"0",
    'verdict_no' : $('input[name=verdict_no]').val(),
    'date_of_verdict' : $('input[name=date_of_verdict]').val(),
    'out_list_validity' : $('input[name=out_list_validity]').val(),
    'out_list_reason' : $('#out_list_reason').val(),
    'no_pro_no' : $('input[name=no_pro_no]').val(),
    'date_of_no_pro' : $('input[name=date_of_no_pro]').val(),
	//២.៥.១	សេចក្តីសម្រេច
    'final_statement' : $('input[name=final_statement]').val(),
    'date_of_final_statement' : $('input[name=date_of_final_statement]').val(),
    'final_statement_reason' : $("#final_statement_reason").val(),
    //៣.១ លើកទី ១
    'subjects' : subjects,
	'class_hours' : class_hours, //$('input[name=class_hours]').val(),
	//៤.១ បណ្តឹង
    //'is_sued' : ($('input[name=is_sued]').is(":checked"))? "on":"",
    'is_sued' : ($('input[name=is_sued]').is(":checked"))? "1":"0",
	'complaint_des' : $("#complaint_des").val(),
	//៣.២ សរុបម៉ោងអប់រំបន្តមកទល់បច្ចុប្បន្ន
//	'end_compliant_by_president' : ($('input[name=end_compliant_by_president]').is(":checked"))? "on":"",
    'end_compliant_by_president' :  ($('input[name=end_compliant_by_president]').is(":checked"))? "1":"0",
	'to_be_inspected' : ($('input[name=to_be_inspected]').is(":checked"))? "1":"0",
	//សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ 
    'council_decision' : ($("input[name='council_decision']:checked").val())?$("input[name='council_decision']:checked").val():"0"
    };
    alert(JSON.stringify(data_collection));
//alert(data_collection.namekh);
// process the form
$.ajax({
    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
  //  url         : 'http://localhost/BAKCLAW/application/views/html/admin/action.php', // the url where we want to POST
    url         : 'http://localhost/BAKCLAW/administrator/lawyer/save',  
    data        : { 'data' : data_collection }, // our data object
    dataType    : 'json', // what type of data do we expect back from the server
    encode          : true
})
    // using the done promise callback
    .done(function(data) {
      //  alert(data.nameeng + ", " + data.namekh + ',' +data.compliant_des + ','+data.dob+","+data.id);
        // here we will handle errors and validation messages
        alert(JSON.stringify(data));
      //  $(".bs-example-modal-lg").html("");
        //$(this).removeData('bs-example-modal-lg');
        location.reload(true);
    });

// stop the form from submitting the normal way and refreshing the page
event.preventDefault();

  });
//

//////
$(document).on('click', '#edit-modal', function(){
    //$('#dataModal').modal();
    var id = $(this).attr("data-id");
    $.ajax({
     url:"http://localhost/BAKCLAW/administrator/edit_profile/"+id,
     method:"POST",
     data:{id:id},
     success:function(data){
      $('.modal-body').html(data);
      $('#bs-edit-modal-lg').modal('show');
     }
    });
   });

   //

   $('#bs-edit-modal-lg').on('hidden.bs.modal', function() {
    //  $(this).removeData('bs.modal');
     // $(this).removeData('bs-edit-modal-lg');
     //   location.reload(true);
   //  var modal = $(this);
    // $('#edit_form')[0].reset();
     //modal.modal('hide');
    // alert("Data Save");		
  
     // modal.affix('checkPosition');
     // modal.find('.modal-body').html('');
  //    $(this).find("input,textarea,select,label").val('').end();
      });
  ////
////
///
$("#create_disc").click(function(){ 

    //   alert("submitted");
       var data_collection = { 
           'lawyer_id' : $('select[name=name_disc]').val(),
           'complaints_desc' : $("#desc").val(),
           'is_presidential_reconciliation' :  ($('input[name=end_compliant_by_president]').is(":checked"))? "1":"0",
           'is_inspection' : ($('input[name=to_be_inspected]').is(":checked"))? "1":"0",
           //សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ 
           'cd_id' : ($("input[name='council_decision']:checked").val())?$("input[name='council_decision']:checked").val():"0"
       };
   //    alert(JSON.stringify(data_collection));
       $.ajax({
           type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
           url         : 'http://localhost/BAKCLAW/administrator/discipline/save',  
           data        : { 'data' : data_collection }, // our data object
           dataType    : 'json', // what type of data do we expect back from the server
           encode      : true
       })
           // using the done promise callback
           .done(function(data) {
               alert(JSON.stringify(data));
               location.reload(true);
           });  
   });
   
   ///

///
$("#update_disc").click(function(){ 

 //   alert("submitted");
    var data_collection = { 
        'id' : $('input[name=hidden_disc]').val(),
        'complaints_desc' : $("#e_desc").val(),
        'is_presidential_reconciliation' :  ($('input[name=end_compliant_by_president]').is(":checked"))? "1":"0",
        'is_inspection' : ($('input[name=to_be_inspected]').is(":checked"))? "1":"0",
        //សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ 
        'cd_id' : ($("input[name='council_decision']:checked").val())?$("input[name='council_decision']:checked").val():"0"

    };
    alert(JSON.stringify(data_collection));
    $.ajax({
        type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
        url         : 'http://localhost/BAKCLAW/administrator/discipline/update',  
        data        : { 'data' : data_collection }, // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode          : true
    })
        // using the done promise callback
        .done(function(data) {
            alert(JSON.stringify(data));
            location.reload(true);
        });  
});

///
$(".edit-lawyer").click(function(){ 

    $('#form1')[0].reset();
    var id = $(this).attr("data-id");

  //  alert("Lawyer Edit Pressed");
 //   alert(id);
    $.ajax({
        type: "GET",
        url: "http://localhost/BAKCLAW/administrator/view_edit_profile/"+id,
      //  dataType: "json",
        success: function (data) {
            console.log(data);    
          //  alert(JSON.stringify(data));       
         //    alert(data); 
            $('.bs-edit-modal-lg').modal('show');  
            $('.bs-edit-modal-lg').find('.modal-body').html(data);    
        },
        error: function(err) {
            console.log(err);
        }
    }); 
    
});
////

//ddddd
$(".edit-discipline").click(function(){ 

$('#demo-form2')[0].reset();
var id = $(this).attr("data-id");
$.ajax({
    type: "GET",
    url: "http://localhost/BAKCLAW/administrator/discipline/search/"+id,
  //  dataType: "json",
    success: function (data) {
        console.log(data);    
      //  alert(JSON.stringify(data));       
      //   alert(data); 
        $('.bs-edit-discipline-modal').modal('show');  
        $('.bs-edit-discipline-modal').find('.modal-body').html(data);  
    },
    error: function(err) {
        console.log(err);
    }
}); 

});
//////


////////////
    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});