// SCROLL TO TOP ===============================================================================
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},500);
	});	
	
});

$("button.forward, button.backword").click(function() {
	$("html, body").animate({ scrollTop: 0}, "fast");
	return false;
});

// WIZARD  ===============================================================================






// WIZARD with branch ===============================================================================
jQuery(function($) {
	// Example 1: Basic wizard with validation
	$("#survey_container").wizard({
		stepsWrapper: "#wrapped",
		submit: ".submit",
		beforeSelect: function( event, state ) {
			if (!state.isMovingForward)
				return true;
			var inputs = $(this).wizard('state').step.find(':input');
			return !inputs.length || !!inputs.valid();
		}


	}).validate({
		errorPlacement: function(error, element) {
			if ( element.is(':radio') || element.is(':checkbox') ) {
				error.insertBefore( element.next() );

			} else {
				error.insertAfter( element );
			}
		}
	})

	//  progress bar
	$("#progressbar").progressbar();

	$("#survey_container").wizard({
		afterSelect: function( event, state ) {
			$("#progressbar").progressbar("value", state.percentComplete);
			$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
		}
	});

});

$("#survey_container").wizard({
	transitions: {
		imm: function( $step, action ) {
			var branch = $step.find("[name=imm]:checked").val();

			if (!branch) {
				alert("Please select a value to continue.");
			}

			return branch;
		}
	}

});


// OHTER ===============================================================================
$(document).ready(function(){

	//Menu mobile
	$(".btn-responsive-menu").click(function() {
		$("#top-nav").slideToggle(400);
	});

	//Radio and check buttons
	$('input.check_radio').iCheck({
		checkboxClass: 'icheckbox_square-aero',
		radioClass: 'iradio_square-aero'
	});


	//Pace holder
	$('input, textarea').placeholder();



});












    

