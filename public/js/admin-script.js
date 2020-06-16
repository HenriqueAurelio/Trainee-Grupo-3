$(document).ready(function() {
    var w = window.innerWidth;
    if (w < 576) {
        $("#admin-navbar-logo").removeClass('ml-0');
    }
    else if (w > 576 && w <= 768) {
        $("#admin-navbar-logo").addClass('ml-4');
    }
    else if (w > 768 && w < 1024) {
        $("#admin-navbar-logo").addClass('ml-3');
    } 
    else if (w >= 1024) {
        $("#admin-navbar-logo").addClass('ml-5');
    }
});

$('#exampleFormControlInput2').maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
