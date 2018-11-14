
$(document).ready(function(){


	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();
	
	$('select').select2();
	
	// Form Validation


	
	$("#form_validate").validate({
		rules:{
			date:{
				required: true,
				minlength:6,
				maxlength:20
			},
            csr:{
				required:true,
				minlength:6,
				maxlength:20,

			},
            secondname:{
                required:true,
                minlength:6,
                maxlength:20,
            },
            clientname:{
                required:true,
                minlength:6,
                maxlength:20,
            },
            phsyicaladress:{
                required:true,
                minlength:6,
                maxlength:20,
            },
            mailaddress:{
                required:true,
                minlength:6,
                maxlength:20,
            },
            emailadress:{
                required:true,
                minlength:6,
                maxlength:20,
            },
            soruceofbusiness:{
                required:true,
                minlength:6,
                maxlength:20,
            }
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});










});
