$(function(){
    $("#nom_error").hide();
    $("#prenom_error").hide();
    $("#email_error").hide();
    $("#liste_error").hide();

    var error_username=false;
    var error_usernamee=false;

    $(".nom").focusout(function(){
        check_name();

    });

    $(".prenom").focusout(function(){
        check_prenom();

    });


     $("#email").focusout(function(){
        check_email();

    });


    $("#listee").focusout(function(){
        check_listee();

    });




    function check_name()
    {
        var username_length = $('.nom').val().length;
        if( username_length < 5 || username_length > 20)
        {
            $("#nom_error").html('should be between 5-20 caracters');
            $("#nom_error").show();
            error_username=true;
        }
        else{
            $("#nom_error").hide();
        }
    }



    function check_prenom()
    {
        var usernamee_length = $('.prenom').val().length;
        if( usernamee_length < 5 || usernamee_length > 20)
        {
            $("#prenom_error").html('should be between 5-20 caracters');
            $("#prenom_error").show();
            error_username=true;
        }
        else{
            $("#prenom_error").hide();
        }
    }



    function check_email()
    {
        var pattern = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        if (pattern.test($('#email').val()))
        {
            $("#email_error").hide();
        }
        else{
            $("#email_error").html('Invalid Email Adress');
            $("#email_error").show();
        }

    }


    function check_listee()
    {
        var categorie=$("#listee");
        if (categorie.val() === "")
        {
            $("#liste_error").html('Choisir une catégorie');
            $("#liste_error").show();
        }

        else{
            $("#liste_error").hide();
        }
    }

});
