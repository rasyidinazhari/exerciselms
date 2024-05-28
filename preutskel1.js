$(document).ready(function(){
    $(".contentkel1").load("content/homekel1.php");
    $("#homekel1").addClass("activemenu");
    $("#homekel1").click(function(){
        $(".contentkel1").load("content/homekel1.php");
        $("#academykel1").removeClass("activemenu");
        $("#pathkel1").removeClass("activemenu");
        $("#loginkel1").removeClass("activemenu");
        $("#signupkel1").removeClass("activemenu");
        $("#programkel1").removeClass("activemenu");
        $("#btn-startkel1").removeClass("activemenu");
        $("#pengumumankel1").removeClass("activemenu");
        $("#homekel1").addClass("activemenu");
    });
    $("#pathkel1").click(function(){
        $(".contentkel1").load("content/pathkel1.php", function(){
            $(".fillteringpathkel1").keyup(function(){
                var category = $(".fillteringpathkel1").val().toLowerCase()
                $(".indextablekel1").filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(category) > -1)
                });
            });
        });
        $("#homekel1").removeClass("activemenu");
        $("#academykel1").removeClass("activemenu");
        $("#loginkel1").removeClass("activemenu");
        $("#signupkel1").removeClass("activemenu");
        $("#programkel1").removeClass("activemenu");
        $("#btn-startkel1").removeClass("activemenu");
        $("#pengumumankel1").removeClass("activemenu");
        $("#pathkel1").addClass("activemenu");
    });
    $("#academykel1").click(function(){
        $(".contentkel1").load("content/academykel1.php");
        
        // $(".gallery-contentkel1").addClass("row-cols-3")
        
        $("#homekel1").removeClass("activemenu");
        $("#pathkel1").removeClass("activemenu");
        $("#loginkel1").removeClass("activemenu");
        $("#signupkel1").removeClass("activemenu");
        $("#programkel1").removeClass("activemenu");
        $("#btn-startkel1").removeClass("activemenu");
        $("#pengumumankel1").removeClass("activemenu");
        $("#academykel1").addClass("activemenu");
    });
    $("#temalogokel1").change(function(){
        var temalogo = $("#temalogokel1").val();
        if (temalogo == "square"){
            $("#brand-logo").removeClass("circlekel1")
            $("#brand-logo").addClass("squarekel1");
        } else if (temalogo == "circle"){
            $("#brand-logo").removeClass("squarekel1")
            $("#brand-logo").addClass("circlekel1");
        }
    });
    $(".loginkel1").click(function(){
        // $(".contentkel1").load("content/maintenancekel1.php");
        $("#homekel1").removeClass("activemenu");
        $("#pathkel1").removeClass("activemenu");
        $("#academykel1").removeClass("activemenu");
        $("#signupkel1").removeClass("activemenu");
        $("#programkel1").removeClass("activemenu");
        $("#btn-startkel1").removeClass("activemenu");
        $("#pengumumankel1").removeClass("activemenu");
        $("#loginkel1").addClass("activemenu");
    });
    $(".signupkel1").click(function(){
        // $(".contentkel1").load("content/maintenancekel1.php");
        $("#homekel1").removeClass("activemenu");
        $("#pathkel1").removeClass("activemenu");
        $("#academykel1").removeClass("activemenu");
        $("#loginkel1").removeClass("activemenu");
        $("#programkel1").removeClass("activemenu");
        $("#btn-startkel1").removeClass("activemenu");
        $("#pengumumankel1").removeClass("activemenu");
        $("#signupkel1").addClass("activemenu");
        
        
    });
    $("#programkel1").click(function(){
        $(".contentkel1").load("content/zeusacademy446.php");
        $("#homekel1").removeClass("activemenu");
        $("#pathkel1").removeClass("activemenu");
        $("#academykel1").removeClass("activemenu");
        $("#loginkel1").removeClass("activemenu");
        $("#signupkel1").removeClass("activemenu");
        $("#btn-startkel1").removeClass("activemenu");
        $("#pengumumankel1").removeClass("activemenu");
        $("#programkel1").addClass("activemenu");
        
    });
    $("#btn-startkel1").click(function(){
        $(".contentkel1").load("content/zeusacademy446.php");
        $("#homekel1").removeClass("activemenu");
        $("#pathkel1").removeClass("activemenu");
        $("#academykel1").removeClass("activemenu");
        $("#loginkel1").removeClass("activemenu");
        $("#signupkel1").removeClass("activemenu");
        $("#programkel1").removeClass("activemenu");
        $("#pengumumankel1").removeClass("activemenu");
        $("#btn-startkel1").addClass("activemenu");
        
    });
    $("#pengumumankel1").click(function(){
        $(".contentkel1").load("content/form460.php");
        $("#homekel1").removeClass("activemenu");
        $("#pathkel1").removeClass("activemenu");
        $("#academykel1").removeClass("activemenu");
        $("#loginkel1").removeClass("activemenu");
        $("#signupkel1").removeClass("activemenu");
        $("#programkel1").removeClass("activemenu");
        $("#btn-startkel1").removeClass("activemenu");
        $("#pengumumankel1").addClass("activemenu");
        
    });
    
    $(".btn-aca").click(function(){
        $(".contentkel1").load("content/maintenance.php");
    });
})