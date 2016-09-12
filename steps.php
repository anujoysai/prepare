<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Step by step tab style form validation Wizard using Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
body {
	margin-top:40px;
}
.stepwizard-step p {
	margin-top: 10px;
}
.stepwizard-row {
	display: table-row;
}
.stepwizard {
	display: table;
	width: 100%;
	position: relative;
}
.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}

.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
	width:20%;
}
.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
}
.modal-header{
	padding:0px !important;
}
.custom-btn{
	border-radius:0px !important;
	line-height:4 !important;
	border:0px !important;
}
.next-btn-custom{
	background-color:#8bc34a;
	color:#fff !important;
}
.pl-10{
	padding-left:10px;
}
.input-bg{
	background-color:#f5fafe;
}
.label-color{
	color:#1976d2;
}
.back-btn{
	background-color:#b5defc;
	border-radius:3px !important;
	border:0px !important;
}
.back-btn:hover{
	background-color:#b5defc;
	border-radius:3px !important;
	border:0px !important;
}
.next-disable-btn{
	background-color:#737373;
	border-radius:3px !important;
}
.nextBtn{
	border-radius:3px !important;
}
.btn-custom-bg{
	background-color:#0090f7;
}
.btn-custom-bg-1{
	background-color:#0898f6 !important;
}
.btn-custom-bg-2{
	background-color:#29a3f5 !important;
}
.btn-custom-bg-3{
	background-color:#47adf4 !important;
}
.btn-custom-bg-4{
	background-color:#5fb7f4 !important;
}
.mt-50{
	margin-top:50px;
}
.mt-80{
	margin-top:80px;
}
.mt-200{
	margin-top:200px;
}
.mt-20{
	margin-top:20px;
}
.hg-38{
	height:38px;
}
.upload-btn{
	position:absolute;
	z-index:2;
	top:0;
	left:0;
	filter: alpha(opacity=0);
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	opacity:0;
	background-color:transparent;
	color:transparent;
	width:200px;
	height:40px;
	
}
.main-upload-btn{
	background-color:#0090f7;
	width:200px;
	border-radius:3px;
	text-align:left;
}
.package{
	border:1px solid #dbdbdb;
	border-radius:4px;
	height:400px;
	background-color:#f7f7f7;
	cursor:pointer;
}
.package-title{
	font-size:30px;
	color:#1976d2
}
.price{
	padding-bottom:10px;
	padding-top:10px;
	font-size:36px;
}
.mb-0{
	margin-bottom:0px;
}
.select-panel{
	padding-bottom:15px;
	padding-top:15px;
	color:#fff;
	background: #4e9ae1; 
  background: -webkit-linear-gradient(#4e9ae1, #4baff7); 
  background: -o-linear-gradient(#4e9ae1, #4baff7); 
  background: -moz-linear-gradient(#4e9ae1, #4baff7); 
  background: linear-gradient(#4e9ae1, #4baff7); 
  font-size:25px;
}
.select-panel-selected{
	padding-bottom:15px;
	padding-top:15px;
	color:#fff;
	background: ##1976d2; 
  background: -webkit-linear-gradient(#1976d2, #2196f3); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#1976d2, #2196f3); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#1976d2, #2196f3); /* For Firefox 3.6 to 15 */
  background: linear-gradient(#1976d2, #2196f3); /* Standard syntax */
  font-size:25px;
}
.pl-30{
	padding-left:30px;
}
.pr-30{
	padding-right:30px;
}
.mt-30{
	margin-top:30px;
}
.fs-18{
	font-size:18px;
	font-family:AvenirMedium
}
.mt-10{
	margin-top:10px;
}
.thank-title{
	font-size:40px;
	color:#1976d2;
}
.mt-100{
	margin-top:100px;
}
@media (min-width: 992px)
{
.modal-lg {
    width: 1250px !important;
}
}
</style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <div class="stepwizard">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-custom-bg custom-btn" style="width:100%;pointer-events: none;color:#fff;">Details</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default  custom-btn" data-step="2" style="width:100%;background-color:#7e7e7f;color:#fff;pointer-events: none;" disabled="disabled">Upload Resume</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default  custom-btn" data-step="3" style="width:100%;background-color:#8a8a8a;color:#fff;pointer-events: none;" disabled="disabled">Select Packages</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default   custom-btn" data-step="4" style="width:100%;background-color:#979797;color:#fff;pointer-events: none;" disabled="disabled">Payments</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-5" type="button" class="btn btn-default  custom-btn" data-step="5" style="width:100%; background-color:#a3a3a3;color:#fff;pointer-events: none;" disabled="disabled">Confirmation & Next Step</a>
        
      </div>
    </div>
  </div>
      </div>
      <div class="modal-body" style="min-height:650px;">
        
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-12">
        <div class="col-md-6 col-lg-offset-3">
          <div class="form-group mt-50">
            <label class="control-label pl-10 label-color">Name</label>
            <input maxlength="100" required="required" class="form-control input-bg hg-38" placeholder="Enter Name" type="text">
          </div>
          <div class="form-group mt-20">
            <label class="control-label pl-10 label-color">Email</label>
            <input maxlength="100" required="required" class="form-control input-bg hg-38" placeholder="Enter Email Address" type="email">
          </div>
          <div class="form-group mt-20">
            <label class="control-label pl-10 label-color">Industry</label>
            <select class="form-control input-bg hg-38" required>
            <option value="">Select Industry</option>
            <option value="IT">IT</option>
            </select>
          </div>
          <div class="form-group text-center mt-80">
          <button class="btn  nextBtn btn-lg next-btn-custom" type="button" style="width:100%">Next</button>
          </div>
        </div>
      </div>
    </div>
    <!--Upload Form-->
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          
          <div class="form-group mt-50">
            <label class="control-label pl-10 label-color">Upload your resume</label>
            <div style="position:relative;">
        <a class='btn btn-primary btn-lg main-upload-btn' href='javascript:;' >
            Upload
            <input type="file"  name="file_source" id="file_source"  size="40" class="upload-btn" >
        </a>
        &nbsp;
        <span  id="upload-file-info">.doc or .pdf</span>
</div>
          </div>
          <div class="form-group text-left mt-200">
          <button class="btn  nextBtn btn-lg next-btn-custom next-disable-btn upload-next" disabled="disabled" type="button" style="width:90%">Next</button> <a href="#" class="nextBtn">Skip</a>
          </div>
          <div class="form-group text-left">
          <button class="btn btn-primary prevBtn btn-lg back-btn" type="button" style="width:90%">Back</button>
          </div>
        </div>
      </div>
    </div>
    <!--End Upload From-->
    <!--Select Package-->
    <div class="row setup-content" id="step-3">
      <div class="col-xs-10 col-md-offset-1">
        	<div class="row">
            	<div class="col-md-4">
                	<p class="package-title text-center">Resume</p>
                	<div class="package" data-price="69">
                    <p class="price text-center mb-0">$69</p>
                    <p class="select-panel text-center">SELECT</p>
                    <p class="pl-30 pr-30 mt-30 fs-18">Resume edits by industry profesionals</p>
                    <p class="pl-30 pr-30 mt-20 fs-18">Satisfaction guarantee with unlimited revisions</p>
                    <p class="pl-30 pr-30 mt-20 fs-18">Get aces tohundreds of great companies hiring now</p>
                    </div>
                </div>
                <div class="col-md-4">
                <p class="package-title text-center">Resume & Linkedin</p>
                <div class="package" data-price="99">
                <p class="price text-center mb-0">$99</p>
                    <p class="select-panel text-center">SELECT</p>
                    <p class="pl-30 pr-30 mt-30 fs-18">Save28%!</p>
                    <p class="pl-30 pr-30 mt-20 fs-18">Includesal lfeatures from the “Resume” and “LinkedIn Profile” packages</p>
                    
                    </div>
                </div>
                <div class="col-md-4">
                <p class="package-title text-center">LinkedIn</p>
                <div class="package" data-price="69">
                <p class="price text-center mb-0">$69</p>
                    <p class="select-panel text-center">SELECT</p>
                    <p class="pl-30 pr-30 mt-30 fs-18">Creationandcompleteoverhaul ofyourLinkedInprofile</p>
                    <p class="pl-30 pr-30 mt-20 fs-18">Satisfactionguaranteewith unlimitedrevisions</p>
                    </div>
                </div>
            </div>
          <div class="form-group text-center mt-80">
          <button class="btn  nextBtn btn-lg next-btn-custom next-disable-btn" type="button" disabled="disabled" id="select-package-next" style="width:50%">Next</button>
          </div>
          <div class="form-group text-center">
          <button class="btn btn-primary prevBtn btn-lg back-btn" type="button" style="width:50%">Back</button>
          </div>
          <!--<button class="btn btn-primary prevBtn btn-lg" type="button">Previous</button>
          <button class="btn btn-success btn-lg" type="submit">Submit</button>-->
      </div>
    </div>
    
    <!--End Select Package-->
    <!--Start Payement Form-->
    <div class="row setup-content" id="step-4">
      <div class="col-xs-8 col-md-offset-2">
      <input type="hidden" name="price" id="price">
      <div class="row mt-50">
      <div class="col-xs-12">
      <h1>Total: $<span id="select-price"></span></h1>
      </div>
      </div>
      <div class="row">
      	<div class="col-xs-6">
                <h3 class="control-label pl-10 label-color">Credit card info</h3>
                <div class="form-group mt-30">
                <input maxlength="100" required="required" class="form-control input-bg hg-38" placeholder="Name" type="text">
              </div>
              <div class="form-group">
                <input maxlength="16" max="16" required="required" class="form-control input-bg hg-38" placeholder="Card number" type="text">
              </div>
              <div class="form-group">
              <div class="row">
              <div class="col-xs-4">
              <input maxlength="16" max="16" required="required" class="form-control input-bg hg-38" placeholder="MM" type="text">
              </div>
              <div class="col-xs-4">
              <input maxlength="16" max="16" required="required" class="form-control input-bg hg-38" placeholder="YY" type="text">
              </div>
              <div class="col-xs-1">
              <i class="fa fa-credit-card mt-10" aria-hidden="true"></i>
              </div>
              <div class="col-xs-3">
              
              <input maxlength="16" max="16" required="required" class="form-control input-bg hg-38" placeholder="CCV" type="text">
              </div>
              </div>
              </div>
        </div>
        <div class="col-xs-6">
        		<h3 class="control-label pl-10 label-color">BilingAddres</h3>
                <div class="form-group mt-30">
                <input  required="required" class="form-control input-bg hg-38" placeholder="Address" type="text">
              </div>
              <div class="form-group">
              <div class="row">
                  <div class="col-xs-4">
                  <input maxlength="16" max="16" required="required" class="form-control input-bg hg-38" placeholder="City" type="text">
                  </div>
                  <div class="col-xs-4">
                  <select class="form-control" name="state">
                  <option value="">State</option>
                  </select>
                  </div>
                  <div class="col-xs-4">
                  <input maxlength="16" max="16" required="required" class="form-control input-bg hg-38" placeholder="Zip" type="text">
                  </div>
              </div>
              </div>
              <div class="form-group">
                 <select class="form-control" name="country">
                  <option value="">Country</option>
                  </select>
              </div>
              
        </div>
      </div>
      <div class="form-group text-center mt-80">
          <button class="btn  nextBtn btn-lg next-btn-custom" type="button"   style="width:50%">Next</button>
          </div>
          <div class="form-group text-center">
          <button class="btn btn-primary prevBtn btn-lg back-btn" type="button" style="width:50%">Back</button>
          </div>
       </div>
    </div>
    <!--End Payment Form-->
    <!--Start Thank You Page-->
    <div class="row setup-content" id="step-5">
      <div class="col-xs-8 col-md-offset-2">
      <p class="thank-title mt-100 text-center">Thank You</p>
      <p class="mt-30 fs-18 text-center">You will receive an email shortly with next steps.Our average <br> turnaround time is with in 48 hours.If you have any questions <br>or concerns,please email team@prepareu.co.</p>
      <div class="form-group text-center mt-100">
          <a href="/" class="btn   btn-lg next-btn-custom" type="button"   style="width:50%;border-radius:3px">Finish</a>
          </div>
      </div>
     </div>
    <!--End Thank You Page--> 
  </form>
	<!-- form wizard content ends -->
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.package').click(function(){
			$('.package').css('height','400px');
			$('.package').children('.select-panel-selected').removeClass('select-panel-selected').addClass('select-panel');
			$('.package').css({'-webkit-box-shadow' : 'none', '-moz-box-shadow' : 'none', 'box-shadow' : 'none'});
			$(this).css('height','420px');
			$(this).css('box-shadow','0px 1px 20px #44a8f7');
			$(this).children('.select-panel').removeClass('select-panel').addClass('select-panel-selected');
			$('#price').val($(this).data('price'));
			$('#select-price').html($(this).data('price'));
			$('#select-package-next').removeAttr('disabled');
			$('#select-package-next').removeClass("next-disable-btn");
			})
		$('#file_source').on('change',function(){
			
			
			var ext = this.value.match(/\.(.+)$/)[1];
			switch (ext) {
				case 'doc':
				$("#upload-file-info").html($(this).val());
				$(".upload-next").removeAttr("disabled");
			$(".upload-next").removeClass("next-disable-btn");
				break;
				case 'pdf':
				$("#upload-file-info").html($(this).val());
				$(".upload-next").removeAttr("disabled");
			$(".upload-next").removeClass("next-disable-btn");
				break;
				default:
					$("#upload-file-info").html('file type not allowed.');
					this.value = '';
			}
		});
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn'),
  		  allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
		  if($item.data('step')==2)
		  {
			 $item.addClass('btn-custom-bg-1'); 
		  }
		  else if($item.data('step')==3)
		  {
			  $item.addClass('btn-custom-bg-2');
		  }
		  else if($item.data('step')==4)
		  {
			  $item.addClass('btn-custom-bg-3');
		  }
		  else if($item.data('step')==5)
		  {
			  $item.addClass('btn-custom-bg-4');
		  }
		  
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });
  
  allPrevBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
		  var y=$('div.setup-panel div a[href="#' + curStepBtn + '"]'),
		  x=$('div.setup-panel div a[href="#' + curStepBtn + '"]').data('step');
			if(y.data('step')==2)
		  {
			 y.removeClass('btn-custom-bg-1'); 
		  }
		  else if(y.data('step')==3)
		  {
			  y.removeClass('btn-custom-bg-2');
		  }
		  else if(y.data('step')==4)
		  {
			  y.removeClass('btn-custom-bg-3');
		  }
		  else if(y.data('step')==5)
		  {
			  y.removeClass('btn-custom-bg-4');
		  }
          prevStepWizard.removeAttr('disabled').trigger('click');
  });

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
</script>
</body>
</html>
