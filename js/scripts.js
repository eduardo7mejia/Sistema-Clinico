current_step = 0
function activeSteps(){
	// busco el div que contiene los step
	$steps = $('a[data-step]')
	$steps.each((index,element)=>{
		is_solved = $(element).attr('data-step') <= current_step
		$(element).toggleClass('step-link btn-primary', is_solved)
		$(element).toggleClass('disabled', !is_solved)
	})
}
function goNext(element, parentQuestion, nexQuestion, nexStep){
	/**sendAnswer($(element).data("respuesta"));*/
	//alert($(element).data("respuesta"))
	$('[data-question='+parentQuestion+']').css('display','none')
	 $('[data-question='+nexQuestion+']').css('display','block')
	 current_step = nexStep ? nexStep : current_step+1;
	 activeSteps()
}
activeSteps();