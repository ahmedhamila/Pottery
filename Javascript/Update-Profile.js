
$("#phone").on("input", function(){
    if($(this).val().length==8)
    {
        $(this).css("border-color","green")
        $(".valid1").removeClass("cross")
        $(".valid1").addClass("checkmark")
    }
    else
    {
        $(this).css("border-color","red")
        $(".valid1").removeClass("checkmark")
        $(".valid1").addClass("cross")
    }
});

$("#phone").blur( function(){
    if($(this).val().length==0)
    {
        $(this).css("border-color","#D2D0D5")
        $(".valid1").removeClass("cross")
        $(".valid1").removeClass("checkmark")
    }
});

$("#adresse").on("input", function(){
    if($(this).val().length>4)
    {
        $(this).css("border-color","green")
        $(".valid2").removeClass("cross")
        $(".valid2").addClass("checkmark")
    }
    else
    {
        $(this).css("border-color","red")
        $(".valid2").removeClass("checkmark")
        $(".valid2").addClass("cross")
    }
});

$("#adresse").blur( function(){
    if($(this).val().length==0)
    {
        $(this).css("border-color","#D2D0D5")
        $(".valid2").removeClass("cross")
        $(".valid2").removeClass("checkmark")
    }
});

$("#email").on("input", function(){

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if($(this).val().match(mailformat))
    {
        $(this).css("border-color","green")
        $(".valid3").removeClass("cross")
        $(".valid3").addClass("checkmark")
    }
    else
    {
        $(this).css("border-color","red")
        $(".valid3").removeClass("checkmark")
        $(".valid3").addClass("cross")
    }
});

$("#email").blur( function(){
    if($(this).val().length==0)
    {
        $(this).css("border-color","#D2D0D5")
        $(".valid3").removeClass("cross")
        $(".valid3").removeClass("checkmark")
    }
});

$("#formProfile").bind('submit', function () {
    $.ajax({
      type: 'post',
      url: '../PHP/Update-Profile.php',
      data: $('#formProfile').serialize(),
      success: function() { 
        window.location.href = '../PHP/GlobalAdminProfile.php?status=success1';
     }
    });
    return false;
  });