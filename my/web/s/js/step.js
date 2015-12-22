$( document ).ready(function() {
    $("#nxt_bnt").click(function(){
        if( 2==$("#stepIndex").val() )
        {
            $("#nxt_bnt").attr("disabled", true);
            $("#nxt_submit").attr("disabled", true);
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
            //'Users-purse': $("#users-purse").val(),
            'Users-facebook': $("#users-facebook").val(),
            'Users-vkontakte': $("#users-vkontakte").val(),
            'Users-linkedin': $("#users-linkedin").val(),
            'Users-googleplus': $("#users-googleplus").val(),
            'Users-yandex': $("#users-yandex").val(),
            'Users-mailru': $("#users-mailru").val(),
            'Users-twitter': $("#users-twitter").val(),
            'Users-instagram': $("#users-instagram").val()
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
/*********************************************************************/
    $("#nxt_submit").click(function(){
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
                    //'Users-purse': $("#users-purse").val(),
                    'Users-facebook': $("#users-facebook").val(),
                    'Users-vkontakte': $("#users-vkontakte").val(),
                    'Users-linkedin': $("#users-linkedin").val(),
                    'Users-googleplus': $("#users-googleplus").val(),
                    'Users-yandex': $("#users-yandex").val(),
                    'Users-mailru': $("#users-mailru").val(),
                    'Users-twitter': $("#users-twitter").val(),
                    'Users-instagram': $("#users-instagram").val()
                },
                success: function(dt){
                    if(1==dt)
                    {
                        $("#nxt_bnt").attr("disabled", true);
                        $("#nxt_submit").attr("disabled", true);

                        $("#stepIndex").val("4");
                        $("#msg").html("Данные сохранены");
                        window.location = "index.php?r=site/landing";
                    }
                }
            });
    });
/***********************************************************************/
   $("#users-email").blur(function()
   {
       if( validateEmail( $("#users-email").val() ) )
       {
           if (2 == $("#stepIndex").val())
           {
               $("#nxt_bnt").attr("disabled", false);
               $("#nxt_submit").attr("disabled", false);

               $("#stepIndex").val("3");
           }
       }
   });

    function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(email);
    }

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