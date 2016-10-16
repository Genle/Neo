$(document).ready(function(){
	$("#btn-p").click(function() {
		/* Act on the event */
		
		$("div.modal").addClass('is-active');

	});

	$("a.cancel").click(function() {
		/* Act on the event */
		$("div.modal").removeClass('is-active');
	});
    
    $("button.delete").click(function(){
        $("div.modal").removeClass('is-active');
    });
    
    $(".post-btn-1").click(function(){
       $(".post-1").css("display", "block"); 
    });
}
	
);