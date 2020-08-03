/* 
 * js pour le tab de bord
 * 
 */


/*
$(document).ready(function(){
    $("#btn_refus").on("click",function(){
        $("#form_refus").slideToggle(250);
        $("#form_etat").hide();
    });
});

$(document).ready(function(){
    $("#btn_etat").on("click",function(){
        $("#form_etat").slideToggle(250);
        $("#form_refus").hide();
    });
});
*/

function fadeToggle(id){
    $("#"+id).fadeToggle(250);          
}

function toggle(id){
    $("#"+id).toggle(250);          
}

function fadeOut(id){
    $("#"+id).fadeOut(250);          
}

$(document).ready(function(){
    $("#menu_hamb").on("click",function(){
        $("#menu").fadeToggle(250);
    });
});

$(document).ready(function(){
    $("#btn_retard").on("click",function(){
        $("#menu").fadeToggle(250);
    });
});

$(document).ready(function(){
    $("#btn_cours").on("click",function(){
        $("#menu").fadeToggle(250);
    });
});

$(document).ready(function(){
    $("#btn_afaire").on("click",function(){
        $("#menu").fadeToggle(250);
    });
});

$(document).ready(function(){
    $("#btn_demande").on("click",function(){
        $("#menu").fadeToggle(250);
    });
});

$(document).ready(function(){
    $("#btn_refuser").on("click",function(){
        $("#menu").fadeToggle(250);
    });
});

$(document).ready(function(){
    $("#btn_tache").on("click",function(){
        $("#menu").fadeToggle(250);
    });
});

