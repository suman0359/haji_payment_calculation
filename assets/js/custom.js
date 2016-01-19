// $(document).ready(function(){
//     $("#payment_mode").change(function(){
//     	var x = document.getElementById("payment_mode").value;

//     	if (x==1) {
//     		$("#payment_mode").toggleClass("main");
//     		//alert("You are Select Cash");
//     	}else if(x == 2){
//     		$("#payment_mode").toggleClass("option.main2");
//     	}else if(x == 3){
//     		$("#payment_mode").toggleClass("main3");
//     	}
    	
//         //$("div").toggleClass("main");
//     });
// });


$(document).ready(function(){
	$(".main-content").on('change', '#payment_mode', function(){
		var x = document.getElementById("payment_mode").value;
		var x = parseInt(x);

    	if (x==1) {
    		//preventDefault();
    		$("#bank_section").removeClass("display_block");
    		$("#bkash_section").removeClass("display_block");

    		$("#bank_section").addClass("display_none");
    		$("#bkash_section").addClass("display_none");

    		//$("#bank_section").removeClass("main3");
    		//alert("You are Select Cash");
    	}else if(x == 2){
    		$("#bank_section").addClass("display_block");
    		$("#bank_section").removeClass("display_none");
    		$("#bkash_section").removeClass("display_block");
    	}else if(x == 3){
    		//event.preventDefault();
    		$("#bkash_section").addClass("display_block");
    		$("#bank_section").removeClass("display_block");
    		$("#bank_section").addClass("display_none");
    		//$("#bank_section").removeClass("display_block");
    	}
	});
});

