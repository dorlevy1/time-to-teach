$(window).ready(() => {
    $('.procces-bar2').css('width', '8%');
})

$('#stageone').on('click', (e) => {
    e.preventDefault();
    $('.form').css('right', '260px');
    $('.procces-bar2').css('width', '20%');
})
$('#stagetwo').on('click', (e) => {
    e.preventDefault();
    $('.form').css('right', '540px');
    $('.procces-bar2').css('width', '30%');
})

$('#stagethree').on('click', (e) => {
    e.preventDefault();
    $('.procces-bar2').css('width', '43%');
    $('.form').css('right', '840px');
})