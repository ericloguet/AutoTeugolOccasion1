$(document).ready(function (){

    //alert("coucou");
    $('#bordure').css('border','solid 1px #00F');

    $('#contenu2').html('<br>contenu inséré par jquery</br>');

    $('h2').click(function (){

        $(this).css({
            'font-size': '130%',
            'color' : '#961542',
        });

    });


    $('#para1').click(function (){
        $('#para2').fadeOut(2000);
        $('#para3').fadeOut(3000);
        //$('#para2').fadeIn(10000);
        //$('#para3').fadeIn(10000);
    });

    $('#para2').click(function (){
        $('#para3').fadeOut(3000);
        $('#para1').fadeOut(3000);

    });

    $('#para3').click(function (){
        $('#para1').fadeOut(3000);
        $('#para2').fadeOut(2000);
        //$('#para2').fadeIn(3000);
    });



});