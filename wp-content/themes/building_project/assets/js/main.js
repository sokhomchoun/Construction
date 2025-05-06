// $("#item_search").click(function(){
//     $('#displaySearch').toggle();
// })
$("#aboutMenu").click(function() {
    var menu = $('#showMenu');
    var downFill = $('#downFill');
    var upFill = $('#upFill');
    menu.toggleClass('show');
    if(menu.hasClass('show')) {
        downFill.hide();
        upFill.show();
    }else{
        downFill.show();
        upFill.hide();
    }
});

