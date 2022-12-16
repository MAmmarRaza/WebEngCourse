$(function(){
    $("#alertF").hide();
    $("#alertL").hide();
    $("#alertU").hide();
    $("#alertU8").hide();
    $("#alertE").hide();
    let fname=  $("#FName");
    let lname=  $("#LName");
    let email=  $("#Email");
    let userword =  $("#user");
   
    fname.blur(function(){
        if($("#FName").val().length == 0){
            $("#FName").css("border", "red 2px solid");
            $("#alertF").show();
            
        }
        else{
            $("#FName").css("border", "#535353 2px solid");
            $("#alertF").hide();
            if($("#LName").val()==$("#FName").val()){
                alert("First Name and Last Name can not be same!");
                $("#FName").val("");
                $("#FName").css("border", "red 2px solid");
                $("#alertF").show();
            }
        }  
    });
    
    lname.blur(function(){
        if($("#LName").val().length == 0){
            $("#LName").css("border", "red 2px solid");
            $("#alertL").show();
        }
        else{
            $("#LName").css("border", "#535353 2px solid");
            $("#alertL").hide();
            if($("#LName").val()==$("#FName").val()){
                alert("First Name and Last Name can not be same!");
                $("#LName").val("");
                $("#LName").css("border", "red 2px solid");
                $("#alertL").show();
            }
            else{
                $("#alertL").hide();
            }
        }
        
    });

    email.blur(function(){
        if($("#Email").val().length == 0){
            $("#Email").css("border", "red 2px solid");
            $("#alertE").show();
        }
        else{
            $("#Email").css("border", "#535353 2px solid");
            $("#alertE").hide();
        }
    });

    userword.blur(function(){
        if($("#user").val().length == 0){
            $("#user").css("border", "red 2px solid");
            $("#alertU").show();
        }
        else{
            $("#user").css("border", "#535353 2px solid");
            $("#alertU").hide();
        }
        if($("#user").val().length < 8){
            $("#user").css("border", "red 2px solid");
            $("#alertU8").show();
        }
        else{
            $("#user").css("border", "#535353 2px solid");
            $("#alertU8").hide();
        }
        
    });

    

});
