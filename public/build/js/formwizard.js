$(document).ready(function () {

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
    //$( "#target" ).submit();

////////////
//$.post('http://localhost/BAKCLAW/application/views/html/admin/action.php',  
var namekh = $('input[name=namekh]').val();
var nameeng = $('input[name=nameeng]').val();
var dob = $('input[name=dob]').val();
var id = $('input[name=id]').val();

var end_cert = $('input[name=end_cert]').val();
var date_of_completion = $('input[name=date_of_completion]').val();

var compliant_des = [];
//alert(namekh+nameeng);
$("input[name='compliant_des']").each(function(){
    compliant_des.push(this.value);
});
//alert("Posted");
// process the form
$.ajax({
    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
    url         : 'http://localhost/BAKCLAW/application/views/html/admin/action.php', // the url where we want to POST
    data        : {
                    namekh:namekh,nameeng:nameeng,compliant_des:compliant_des,
                    dob:dob,id:id,end_cert:end_cert,date_of_completion:date_of_completion 
                }, // our data object
    dataType    : 'json', // what type of data do we expect back from the server
    encode          : true
})
    // using the done promise callback
    .done(function(data) {

        // log data to the console so we can see
        //console.log(data); 
        alert(data.nameeng + ", " + data.namekh + ',' +data.compliant_des);
        // here we will handle errors and validation messages
    });

// stop the form from submitting the normal way and refreshing the page
event.preventDefault();


///////////


  });
//ddddd


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