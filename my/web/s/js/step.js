$( document ).ready(function() {
    $("#nxt_bnt").click(function(){
        if( 2==$("#stepIndex").val() )
        {
            $("#nxt_bnt").attr("disabled", true);
        }
       else if( 3==$("#stepIndex").val() )
         {
         $.ajax({
         url: "index.php?r=site/innsave",
         type: "POST",
         //dataType: "json",
         data:{
            'Users-fn': $("#users-fn").val(),
            'Users-ln': $("#users-ln").val(),
            'Users-email': $("#users-email").val(),
            'Users-mobile': $("#users-mobile").val(),
            'Users-skype': $("#users-skype").val(),
            'Users-city': $("#users-city").val(),
            'Users-country': $("#users-country").val(),
            'Users-purse': $("#users-purse").val(),
            'Users-facebook': $("#users-facebook").val(),
            'Users-vkontakte': $("#users-vkontakte").val(),
            'Users-linkedin': $("#users-linkedin").val(),
            'Users-googleplus': $("#users-googleplus").val(),
            'Users-yandex': $("#users-yandex").val(),
            'Users-mailru': $("#users-mailru").val()
         },
         success: function(dt){
            if(1==dt)
            {
                $("#nxt_bnt").attr("disabled", true);
                $("#stepIndex").val("4");
                $("#msg").html("Данные сохранены");
            }
         }
         });
        }
        else if( 5==$("#stepIndex").val() ) {
                window.location = "index.php?r=site/landing";
        }
    });

   $("#users-fn").blur(function(){
        if( 2==$("#stepIndex").val() ) {
            $("#nxt_bnt").attr("disabled", false);
            $("#stepIndex").val("3");
        }
       });


    $('#lp-id').on('change', function () {
        if( 4==$("#stepIndex").val() ) {
            $.ajax({
                url: "index.php?r=site/innsave",
                type: "POST",
                //dataType: "json",
                data:{
                    'Users-companyid': $("#lp-id").val()
                },
                success: function(dt){
                    if(1==dt)
                    {
                        $("#nxt_bnt").attr("disabled", false);
                        $("#stepIndex").val("5");
                        $("#msg").html("-Данные сохранены-");
                    }
                }
            });
        }
    });
















});