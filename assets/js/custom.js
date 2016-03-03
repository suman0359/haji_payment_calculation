


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

    $(".main-content").on('change', '#loan_module', function(){
        var x = document.getElementById("loan_type").value;
        var x = parseInt(x);

        if (x==1) {
            $("#percantage_section").removeClass("display_none");
        }else if(x==2){
            $("#percantage_section").removeClass("display_block");
            $("#percantage_section").addClass("display_none");
        }else if(isNaN(x)==true){
            $("#percantage_section").removeClass("display_block");
            $("#percantage_section").addClass("display_none");
        }
    });


    /* SideBar Active Class and Open Class and Display block */

    $('.sub-menu > li > a').each(function(e){
      var path= window.location;
      var link2 = $(this).attr('href');
        if(path==link2){
        $(this).parents().addClass('open active');
        }
       });

    /* ----------------------------------------------------- */


 
    // Table Data Print Script  #sample_1



    // -----------------------------------------------------------------------

    $("#username_validation").keyup('#username_validation', function(){
        var username = document.getElementById("username").value;
        var username = username.replace(/\s/g,''); 
  
        //alert(username);

        // Get Length of Username Variable
        var user = username.length;
        if(user<4){
            $("#validation_error").addClass("display_block");
        }else{
            $("#validation_error").addClass("display_none");
            $("#validation_error").removeClass("display_block");
        }
        if(user>3){
            

            $.ajax({
            url: base_url+"user/check_username/" + username,

            })

            .done(function (data) {
                data = JSON.parse(data);
                $.each(data, function (key, val) {
           
                        if(data.value==1){
                            console.log('Hello');
                            $("#validation").removeClass("display_block");
                            $("#validation_exist").removeClass("display_none");
                            $("#validation_exist").addClass("display_block");
                        }else if(data.value=2){
                            console.log("Fuck");
                            $("#validation_exist").removeClass("display_block");
                            $("#validation_exist").addClass("display_none");
                            $("#validation").addClass("display_block");
                        }else{
                            console.log("Not Find Any Data");
                        }
                        
                });


            });

        }else if(user>=4){
            $("#validation_error").removeClass("display_block");
            $("#validation_error").addClass("display_none");
        }
        

        


    });
});

