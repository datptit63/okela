$(window).resize(function(){
    //menu fix
    setTimeout(setPaddingTopBody,1000);
    //set height 2 slide
    setHeightSlide();
});
$(window).scroll(function(event) {
    if($(window).scrollTop()>30){
        $(".navbar-fixed-top").addClass("scroll-active");
    }else{
        $(".navbar-fixed-top").removeClass("scroll-active");
    }
});
$(function() {
    //set height 2 slide
    setHeightSlide();
    //menu fix
    setTimeout(setPaddingTopBody,1000);
    setTimeout(setPaddingTopBody,2000);
    setTimeout(setPaddingTopBody,4000);
    $("#uudai").owlCarousel({
        items : 3,
        itemsDesktop : [1199, 3],
        itemsDesktopSmall : [979, 3],
        itemsTablet : [768, 2],
        itemsTabletSmall : false,
        itemsMobile : [479, 1],
        pagination: true,
        navigation: true
    });
    $("#quatang").owlCarousel({
        items : 3,
        itemsDesktop : [1199, 3],
        itemsDesktopSmall : [979, 3],
        itemsTablet : [768, 2],
        itemsTabletSmall : false,
        itemsMobile : [479, 1],
        pagination: true,
        navigation: true
    });
   
    $("#ykien").owlCarousel({
        items : 4,
        itemsDesktop : [1199, 4],
        itemsDesktopSmall : [979, 3],
        itemsTablet : [768, 2],
        itemsTabletSmall : false,
        itemsMobile : [479, 1],
        pagination: true,
        navigation: true
    });
    var owlDV = $('#dichvu');
    owlDV.owlCarousel({
        items : 7,
        itemsDesktop : [1199, 7],
        itemsDesktopSmall : [979, 5],
        itemsTablet : [768, 3],
        itemsTabletSmall : false,
        itemsMobile : [479, 2],
        pagination: false,
        navigation: true,
        afterInit: checkItemDV(owlDV)
    });
    $(window).resize(function(){
        //menu fix
        checkItemDV(owlDV)
    });
});
function checkItemDV(ob) {
    var lengItem = ob.find('.item').size(),
        wWindow = $(window).width();
    ob.removeClass('dv-center')
    if(wWindow > 768 && lengItem<3)
        ob.addClass('dv-center');
    if(wWindow > 979 && lengItem<5)
        ob.addClass('dv-center');
    if(wWindow > 1199 && lengItem<7)
        ob.addClass('dv-center');
}
function setPaddingTopBody(){
    var heightHeader = $("#header").outerHeight();
    $("body").css('padding-top', heightHeader + "px");
}
function setHeightSlide() {
    var heightSlider = $(".slide").height();
    if(heightSlider>0){
        $(".slide1").height(heightSlider);
    }else {
        setTimeout(setHeightSlide,1000);
    }
}