<?php
if (@$_GET['text']) {
?>
$('body').delegate('textarea#id<?php echo $_GET['text']; ?>','keyup',function(){
textFill<?php echo $_GET['text']; ?> = $('textarea#id<?php echo $_GET['text']; ?>').attr('value');
$('textarea#id<?php echo $_GET['text']; ?>').html(textFill<?php echo $_GET['text']; ?>);
});

$('body').delegate('textarea#id<?php echo $_GET['text']; ?>','focus',function(){
$("div.bolder, div.italer, div.underer, div.brokener, div.delstyle, div.alignleft, div.aligncenter, div.alignright, div.overer, div.set-font, input.font, input.color, input.backgr").css("display","inline-block");
});

$('body').delegate('div#set-font<?php echo $_GET['text']; ?>','click',function(){
textFont<?php echo $_GET['text']; ?> = $('input#font<?php echo $_GET['text']; ?>').attr('value');
colorFont<?php echo $_GET['text']; ?> = $('input#color<?php echo $_GET['text']; ?>').attr('value');
colorBackgr<?php echo $_GET['text']; ?> = $('input#backgr<?php echo $_GET['text']; ?>').attr('value');
$('textarea#id<?php echo $_GET['text']; ?>').css('font-size', textFont<?php echo $_GET['text']; ?>).css('color', colorFont<?php echo $_GET['text']; ?>).css('background-color', colorBackgr<?php echo $_GET['text']; ?>);
});

$('body').delegate('div#bolder<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("bold");
});

$('body').delegate('div#italer<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("ital");
});

$('body').delegate('div#underer<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("under");
});


$('body').delegate('div#brokener<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("broke");
});

$('body').delegate('div#alignleft<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("aleft");
});

$('body').delegate('div#aligncenter<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("acenter");
});

$('body').delegate('div#alignright<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("aright");
});

$('body').delegate('div#overer<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").toggleClass("over");
});

$('body').delegate('div#delstyle<?php echo $_GET['text']; ?>','click',function(){
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("bold");
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("ital");
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("under");
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("broke");
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("acenter");
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("aright");
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("over");
$("textarea#id<?php echo $_GET['text']; ?>").removeClass("aleft");
});
<?php
}
?>