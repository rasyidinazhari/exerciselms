$(document).ready(function(){
    $("#sortkel1").change(function(){
        var sortkel1 = $("#sortkel1").val();
        if (sortkel1 == "default"){
            $(".gallery-contentkel1").removeClass("row-cols-4")
            $(".gallery-contentkel1").removeClass("row-cols-2")
            $(".gallery-contentkel1").addClass("row-cols-3");
        } else if (sortkel1 == "4"){
            $(".gallery-contentkel1").removeClass("row-cols-3")
            $(".gallery-contentkel1").removeClass("row-cols-2")
            $(".gallery-contentkel1").addClass("row-cols-4");
        } else if (sortkel1 == "2"){
            $(".gallery-contentkel1").removeClass("row-cols-3")
            $(".gallery-contentkel1").removeClass("row-cols-4")
            $(".gallery-contentkel1").addClass("row-cols-2");
        } else if (sortkel1 == "3"){
            $(".gallery-contentkel1").removeClass("row-cols-4")
            $(".gallery-contentkel1").removeClass("row-cols-2")
            $(".gallery-contentkel1").addClass("row-cols-3");
        }
    });
    
})