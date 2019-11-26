var flag=0;
$('#rightArrow').click(function(){
	if(flag==1){
		$("#floatDivBoxs").animate({right: '0px'},300);
		$(this).animate({right: '170px'},300);
		$(this).css('background-position','0px 0');
		flag=0;
	}else{
		$("#floatDivBoxs").animate({right: '-175px'},300);
		$(this).animate({right: '0px'},300);
		$(this).css('background-position','-50px 0');
		flag=1;
	}
});

$(function(){
    $("#floatDivBoxs").each(function(){
        $(this).find(".floatDtxt").mouseenter(function(){
            $(this).find(".izl_rmenu_pic").stop().fadeIn("fast");
			$(this).find(".izl_rmenu_kf").stop().fadeIn("fast");
        });
        $(this).find(".floatDtxt").mouseleave(function(){
            $(this).find(".izl_rmenu_pic").stop().fadeOut("fast");
			$(this).find(".izl_rmenu_kf").stop().fadeOut("fast");
        });
    })

});