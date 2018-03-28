$(document).ready(function () {
/////intialisation
    $('input[name=ba_institution]').attr('disabled', '');
    $('input[name=date_of_ba]').attr('disabled', '');
    $('input[name=ba_file]').attr('disabled', '');
    $('input[name=ma_institution]').attr('disabled', '');
    $('input[name=date_of_ma]').attr('disabled', '');
    $('input[name=ma_file]').attr('disabled', '');
    $('input[name=phd_institution]').attr('disabled', '');
    $('input[name=date_of_phd]').attr('disabled', '');
    $('input[name=phd_file]').attr('disabled', '');

///////

$('#is_ba').click (function () {
    if($('input[name=is_ba]').is(":checked")) {
        //remove disabled
        $('input[name=ba_institution]').removeAttr('disabled');   
        $('input[name=date_of_ba]').removeAttr('disabled');
        $('input[name=ba_file]').removeAttr('disabled');       
    } else {
        //disable text       
        $('input[name=ba_institution]').attr('disabled', '');
        $('input[name=date_of_ba]').attr('disabled', '');
        $('input[name=ba_file]').attr('disabled', '');
    }
});
////
///////

$('#is_phd').click (function () {
    if($('input[name=is_phd]').is(":checked")) {
        //remove disabled
        $('input[name=phd_institution]').removeAttr('disabled');   
        $('input[name=date_of_phd]').removeAttr('disabled');
        $('input[name=phd_file]').removeAttr('disabled');       
    } else {
        //disable text       
        $('input[name=phd_institution]').attr('disabled', '');
        $('input[name=date_of_phd]').attr('disabled', '');
        $('input[name=phd_file]').attr('disabled', '');
    }
});
////
///////

$('#is_ma').click (function () {
    if($('input[name=is_ma]').is(":checked")) {
        //remove disabled
        $('input[name=ma_institution]').removeAttr('disabled');   
        $('input[name=date_of_ma]').removeAttr('disabled');
        $('input[name=ma_file]').removeAttr('disabled');       
    } else {
        //disable text       
        $('input[name=ma_institution]').attr('disabled', '');
        $('input[name=date_of_ma]').attr('disabled', '');
        $('input[name=ma_file]').attr('disabled', '');
    }
});
////
$('#insert_inspection').click (function () {

    var url = "http://localhost/BAKCLAW/administrator/inspection/save";
    var formData = new FormData();  
    
    formData.append('candidate_name_kh', $('input[name=candidate_name_kh]').val());
    formData.append('candidate_name_en', $('input[name=candidate_name_en]').val());
    formData.append('candidate_dob', $('input[name=candidate_dob]').val());

    
    formData.append('is_ba', ($('input[name=is_ba]').is(":checked"))? "1":"0");
    formData.append('ba_institution', $('input[name=ba_institution]').val());
    formData.append('date_of_ba', $('input[name=date_of_ba]').val());
    formData.append('ba_file', $('#ba_file')[0].files[0]);

    formData.append('is_ma', ($('input[name=is_ma]').is(":checked"))? "1":"0");
    formData.append('ma_institution', $('input[name=ma_institution]').val());
    formData.append('date_of_ma', $('input[name=date_of_ma]').val());
    formData.append('ma_file', $('#ma_file')[0].files[0]);

    formData.append('is_phd', ($('input[name=is_phd]').is(":checked"))? "1":"0");
    formData.append('phd_institution', $('input[name=phd_institution]').val());
    formData.append('date_of_phd', $('input[name=date_of_phd]').val());
    formData.append('phd_file', $('#phd_file')[0].files[0]);

    formData.append('institution', $('input[name=institution]').val());
    formData.append('exp_detail', $('input[name=exp_detail]').val());
    
    formData.append('applying_date', $('input[name=applying_date]').val());
    formData.append('is_inspection_assigned', $("input[name='is_inspection_assigned']:checked").val());

    formData.append('composition_name1', $('input[name=composition_name1]').val());
    formData.append('composition_name2', $('input[name=composition_name2]').val());
    formData.append('composition_name3', $('input[name=composition_name3]').val());

    formData.append('date_of_inspection_submission', $('input[name=date_of_inspection_submission]').val());
    formData.append('inspection_decision_no', $('input[name=inspection_decision_no]').val());
    formData.append('date_of_inspection_decision', $('input[name=date_of_inspection_decision]').val());

    formData.append('inspection_report_file', $('#inspection_report_file')[0].files[0]);
    formData.append('inspection_report_des', $('#inspection_report_des').val());

    formData.append('date_of_interview', $('input[name=date_of_interview]').val());
    formData.append('interview_file', $('#interview_file')[0].files[0]);
    formData.append('interview_report_des', $('#interview_report_des').val());

    formData.append('date_of_board_meeting', $('input[name=date_of_board_meeting]').val());
    formData.append('meeting_outcome_approval',  ($('input[name=meeting_outcome_approval]').is(":checked"))? "1":"0");
    formData.append('meeting_approval_no', $('input[name=meeting_approval_no]').val());
    formData.append('date_of_meeting_approval', $('input[name=date_of_meeting_approval]').val());
    

    $.ajax({
        type: "POST",
        url: url,
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
/////



});