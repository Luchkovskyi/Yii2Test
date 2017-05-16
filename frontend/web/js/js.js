
$( document ).ready(function() {


    $('.del').click(function () {
        var data=this.id;
        var requestData = JSON.stringify(data);
        $.ajax({
            url: "/site/delete",
            type: 'GET',
            data: {data:requestData},
            success: function (data) {
            if(data=="replay") {
                window.location.reload();
                }
            }
        });

    });

    $('.rotate').click(function () {
       var data='#'+this.id;
        $(data).rotate({
            angle: 0,
            animateTo:180,
            duration:6000
        });


    });



});
