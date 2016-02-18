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

// $("ul.main-navigation-menu > li").hover(function(){
//   //alert("Hello");

//   $('.sub-menu').css('display', 'block');
//   var index = $("ul.main-navigation-menu > li").index( this );
//   $('ul.main-navigation-menu > li:nth-child(4)').css('background', '#fff !important');
//   //$("ul.main-navigation-menu > li").eq($(this).index()).addClass('open').siblings().removeClass('open');
//   //alert(index);
//   //$("main-navigation-menu>li").addClass("test");
// });

// $("ul.main-navigation-menu > li").hover(function(){
  
//   var index = $("ul.main-navigation-menu > li").index( this );
//   index = parseInt(index+1);
  
//   $('ul.main-navigation-menu > li:nth-child(' + index + ') > ul.sub-menu').css('display', 'block');
//   $('ul.main-navigation-menu > li:nth-child(' + index + ')').addClass('active open');
//   //$("ul.main-navigation-menu > li").eq($(this).index()).addClass('open').siblings().removeClass('open');
  
//   //$("main-navigation-menu>li").addClass("test");
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

    // $(".main-content").on('change', '#bank_name', function(){
    //     var x = document.getElementById("bank_name").value;
    //     var x = parseInt(x);
    //     document.getElementById('account_number').value=x;


    // });
    
    // $(".main-content").on('change', '#bank_name', function(){
    //     var x = document.getElementById("bank_name").value;
    //     var x = parseInt(x);
    //     // document.getElementById('account_number').value=x;

    //     // var div_id = $(this).val();
    //     $.ajax({
    //         url: "http://localhost/haji_payment_calculation/index.php/bank/get_account_number/" + x,
    //         beforeSend: function (xhr) {
    //             xhr.overrideMimeType("text/plain; charset=x-user-defined");
    //             $("#account_number").html("<option>Loading .... </option>");
    //         }
    //     })
    //     .done(function (data) {
    //         $("#account_number").html("<option value=''>Select Account Number </option>");
    //         data = JSON.parse(data);
    //         $.each(data, function (key, val) {
    //             $("#account_number").append("<option value='" + val.id + "'>" + val.account_number + "</option>");

    //         });
    //         // alert(x);

    //     });
    // });

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

