$(document).ready(function () {
    
    // $(".subm div").click(function() {
    //     $(".mess_border").fadeOut(800);

    // });

    function resp(response) {
        if(response.includes("success")) {
            var responses = response.split("/");

            $(".mess").css("color", "green");

            $(".mess h3").html(responses[0] + "<br>Your have purchased this voucher");
            $(".mess h4").html("Your voucher code is : " + "<b>" + responses[1] + "</b>");

            $(".mess_border").fadeIn(800);

            $("input[name='tim']").css("display", "block");


            $("input[name='name']").attr("disabled", "true");
            $("input[name='phone']").attr("disabled", "true");
            $("input[name='method']").attr("disabled", "true");
            $("select[name='level']").attr("disabled", "hidden");
            $("input[name='momoID']").attr("disabled", "true");
            $("input[name='sub']").attr("disabled", "true");

        }else if(response == "Voucher already used"){
            $(".mess").css("color", "red");

            $(".mess h3").html("Error");
            $(".mess h4").html(response);
            $("input[name='tim']").css("display", "none");

            $(".mess_border").fadeIn(500);

            setTimeout(function() {$(".mess_border").fadeOut(800);}, 5000);
            setTimeout(function() {window.location="home.php"}, 2000);
            

        }else{

            $(".mess").css("color", "red");

            $(".mess h3").html("Error");
            $(".mess h4").html(response);
            $("input[name='tim']").css("display", "none");

            $(".mess_border").fadeIn(500);

            setTimeout(function() {$(".mess_border").fadeOut(800);}, 2500);

        }
    }

    setInterval(function() {
        $("#gtv").load("getv.php");
    }, 1000);

    $(".sel").change(function() {
        if($(".sel").val() == "momo") {
            $(".ref").toggleClass("disp", false);
        };
        if($(".sel").val() == "cash") {
            $(".ref").toggleClass("disp", true);
        };
    });

    $(".subm").submit(function (e) {
       e.preventDefault();
       
       var options = {
           url: 'perf.php',
           type: 'post',
           data: new FormData(this),
           cache: false,
           processData: false,
           contentType: false,
        //    beforeSend: prog,
           success: resp,
        }

       $.ajax(options);

    });

    $(".submit").click(function (e) {
       e.preventDefault();
       window.location="home.php"; 
    });


});

