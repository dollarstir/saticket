$(document).ready(function() {

    // Filters for DataTables
    // 
    $(".rollSearch").on('keyup change clear', function() {
        dataCustom.column(0).search($(this).val()).draw();
    })

    $(".nameSearch").on('keyup change clear', function() {
        dataCustom.column(2).search($(this).val()).draw();
    })

    $(".classSearch").on('keyup change clear', function() {
        dataCustom.column(4).search($(this).val()).draw();
    })

    //////////////// Students Form Submition //////////////
    //
    // 
    // 
    function loadingFunc() {
        
    }

    function successFunc(response) {
        if(response['status'] == 'error') {
            var responses = response['response'];
            for (const key in responses) {

                $('#'+key).html(responses[key]);
                $('#'+key).css("visibility", 'visible');

                $("*[name='"+key+"']").css('border', 'solid 1px red')
            }
        }
    }

    $(".addstudform").submit(function (e) {
        e.preventDefault();

        var options = {
            url: 'serv/process.php?func=addstudent',
            type: 'post',
            data: new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: loadingFunc,
            success: successFunc
        }

        $.ajax(options);
    })
})