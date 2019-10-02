$(document).ready(function() {

    $("input").focus(function() {
        $(this).parent().children("span").text("");
        $(this).css("border-color","");
    })
        
    $("select").change(function() {
        $(this).css("border-color","");
        $(this).parent().children("span").text("");
    })

    function successFunc(response) {
        if(response['status'] == 'error') {
            for (var key in response['response']) {
                if(response['response'][key] != '') {
                    $("*[name='"+key+"']").css("border-color","red");
                    $("."+key).text(response['response'][key]);

                } else {
                    $("*[name='"+key+"']").css("border-color","");

                } 
            }
            $("#respo").text(response['statusGen']);
            $("#respo").css("color", 'red');

            $("#respo").slideDown(500);
            setTimeout(() => {
                $("#respo").slideUp(500);
            }, 3000);
            

        } else {
            $("#respo").text(response['statusGen']);
            $("#respo").css("color", 'green');
        
            $("#respo").slideDown(500);
            setTimeout(() => {
                $("#respo").slideUp(500);
            }, 3000);
            
             document.getElementsByClassName("subm_Vol")[0].reset();
        }
    }

    $(".subm_Vol").submit(function(e) {
        e.preventDefault();

        var options = {
            url: 'jt/act.php?add=volunter',
            type: 'post',
            data: new FormData(this),
            dataType: 'json', 
            cache: false,
            contentType: false,
            processData: false,
            success: successFunc
        }

        $.ajax(options);

    })

    $(".subm_Sub").submit(function(e) {
        e.preventDefault();

        var options = {
            url: 'jt/act.php?add=subadmin',
            type: 'post',
            data: new FormData(this),
            dataType: 'json', 
            cache: false,
            contentType: false,
            processData: false,
            success: successFunc
        }

        $.ajax(options);

    })
})