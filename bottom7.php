<script>
  $( function() {

    $( ".accordion" ).accordion();

 $( "div.img" ).draggable({ cursor: "move" }).resizable();

    function initProto() {
$( "div.browser, div.fillblock, div.fillblock2, div.fillblock3, div.fillblock4, div.fillborder, div.fillborder2, div.fillborder3, div.fillborder4, div.fillcircle, div.fillcircle2, div.fillcircle3, div.fillcircle4, div.fillball, div.fillball2, div.fillball3, div.fillball4, div.browser" ).draggable({ cursor: "move" }).resizable();

$( "div.filltext, div.filltext2, div.filltext3, div.filltext4, div.addtext" ).draggable({ cursor: "move" });

$( "div.text, div.textmid, div.textbig, div.text2, div.text2mid, div.text2big, div.text3, div.text3mid, div.text3big, div.text4, div.text4mid, div.text4big" ).resizable();
}

initProto();

$('body').delegate('li#modal','click',function(){
$("div.modal").css('display', 'block');
});

$('body').delegate('button#close','click',function(){
$("div.modal").css('display', 'none');
});

$('body').delegate('div.btn-group','click',function(){
$("div.btn-group").toggleClass("open");
});

<?php

$nextText = new textSearch;
$nextText->search($idProject);

?>

nextTextarea = <?php echo $nextText->searchID(0);  ?>;

<?php
if ($block->row() > 0) {
for ($f=0; $f<=$block->row()-1; $f++) {
?>

$('body').delegate('div.browser, div.accordion','click',function(){
$("div#bolder<?php echo $block->searchID($f); ?>, div#italer<?php echo $block->searchID($f); ?>, div#underer<?php echo $block->searchID($f); ?>, div#brokener<?php echo $block->searchID($f); ?>, div#delstyle<?php echo $block->searchID($f); ?>, div#alignleft<?php echo $block->searchID($f); ?>, div#aligncenter<?php echo $block->searchID($f); ?>, div#alignright<?php echo $block->searchID($f); ?>, div#overer<?php echo $block->searchID($f); ?>, div#set-font<?php echo $block->searchID($f); ?>, input#font<?php echo $block->searchID($f); ?>, input#color<?php echo $block->searchID($f); ?>, input#backgr<?php echo $block->searchID($f); ?>, div#copy<?php echo $block->searchID($f); ?>, div#delete<?php echo $block->searchID($f); ?>, input#zindex<?php echo $block->searchID($f); ?>").css("display","none");
});

$('body').delegate('textarea#id<?php echo $block->searchID($f); ?>','keyup',function(){
textFill<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').attr('value');
$('textarea#id<?php echo $block->searchID($f); ?>').html(textFill<?php echo $block->searchID($f); ?>);
});

$('body').delegate('div#addtext<?php echo $block->searchID($f); ?>','focus',function(){

layer<?php echo $block->searchID($f); ?> = $("div#addtext<?php echo $block->searchID($f); ?>").css("z-index");
$("input#zindex<?php echo $block->searchID($f); ?>").attr("value", layer<?php echo $block->searchID($f); ?>);

$("div#bolder<?php echo $block->searchID($f); ?>, div#italer<?php echo $block->searchID($f); ?>, div#underer<?php echo $block->searchID($f); ?>, div#brokener<?php echo $block->searchID($f); ?>, div#delstyle<?php echo $block->searchID($f); ?>, div#alignleft<?php echo $block->searchID($f); ?>, div#aligncenter<?php echo $block->searchID($f); ?>, div#alignright<?php echo $block->searchID($f); ?>, div#overer<?php echo $block->searchID($f); ?>, div#set-font<?php echo $block->searchID($f); ?>, input#font<?php echo $block->searchID($f); ?>, input#color<?php echo $block->searchID($f); ?>, input#backgr<?php echo $block->searchID($f); ?>, input#zindex<?php echo $block->searchID($f); ?>, div#copy<?php echo $block->searchID($f); ?>, div#delete<?php echo $block->searchID($f); ?>").css("display","inline-block");
});

$('body').delegate('div#set-font<?php echo $block->searchID($f); ?>','click',function(){
textFont<?php echo $block->searchID($f); ?> = $('input#font<?php echo $block->searchID($f); ?>').attr('value');
colorFont<?php echo $block->searchID($f); ?> = $('input#color<?php echo $block->searchID($f); ?>').attr('value');
colorBackgr<?php echo $block->searchID($f); ?> = $('input#backgr<?php echo $block->searchID($f); ?>').attr('value');
layerIndex<?php echo $block->searchID($f); ?> = $('input#zindex<?php echo $block->searchID($f); ?>').attr('value');
$('textarea#id<?php echo $block->searchID($f); ?>').css('font-size', textFont<?php echo $block->searchID($f); ?>).css('color', colorFont<?php echo $block->searchID($f); ?>).css('background-color', colorBackgr<?php echo $block->searchID($f); ?>);
$('div#addtext<?php echo $block->searchID($f); ?>').css('z-index', layerIndex<?php echo $block->searchID($f); ?>);
});

$('body').delegate('div#bolder<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("bold");
});

$('body').delegate('div#italer<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("ital");
});

$('body').delegate('div#underer<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("under");
});


$('body').delegate('div#brokener<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("broke");
});

$('body').delegate('div#alignleft<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("aleft");
});

$('body').delegate('div#aligncenter<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("acenter");
});

$('body').delegate('div#alignright<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("aright");
});

$('body').delegate('div#overer<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").toggleClass("over");
});

$('body').delegate('div#delstyle<?php echo $block->searchID($f); ?>','click',function(){
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("bold");
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("ital");
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("under");
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("broke");
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("acenter");
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("aright");
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("over");
$("textarea#id<?php echo $block->searchID($f); ?>").removeClass("aleft");
});

$('body').delegate('div#copy<?php echo $block->searchID($f); ?>','click',function(){

nextTextarea++;

$("div.content").append("<div class='addtext' id='addtext"+nextTextarea+"'><div class='alignleft' id='alignleft"+nextTextarea+"' data-toggle='tooltip' title='По левому краю' data-placement='top'><img src='img/align_left.png' height='14px'/></div><div class='aligncenter' id='aligncenter"+nextTextarea+"' data-toggle='tooltip' title='По цетру' data-placement='top'><img src='img/align_center.png' height='14px'/></div><div class='alignright' id='alignright"+nextTextarea+"' data-toggle='tooltip' title='По правому краю' data-placement='top'><img src='img/align_right.png' height='14px'/></div><div class='bolder' id='bolder"+nextTextarea+"' data-toggle='tooltip' title='жирный' data-placement='top'>B</div><div class='italer' id='italer"+nextTextarea+"' data-toggle='tooltip' title='курсив' data-placement='top'>I</div><div class='underer' id='underer"+nextTextarea+"' data-toggle='tooltip' title='подчёркнутый' data-placement='top'>U</div><div class='brokener' id='brokener"+nextTextarea+"' data-toggle='tooltip' title='зачёркнутый' data-placement='top'>C</div><div class='overer' id='overer"+nextTextarea+"' data-toggle='tooltip' title='черта вверху' data-placement='top'>K</div><div class='delstyle' id='delstyle"+nextTextarea+"' data-toggle='tooltip' title='сброс стилей' data-placement='top'>A<span>x</span></div><input type='text' name='font' class='font' id='font"+nextTextarea+"' placeholder='Шрифт' data-toggle='tooltip' title='Размер шрифта' data-placement='top' /><input type='text' name='color' class='color' id='color"+nextTextarea+"' placeholder='Цвет' data-toggle='tooltip' title='Цвет текта' data-placement='top' /><input type='text' name='backgr' id='backgr"+nextTextarea+"' class='backgr' placeholder='Background' data-toggle='tooltip' title='Заливка' data-placement='top' /><input type='text' name='zindex' class='zindex' id='zindex"+nextTextarea+"' placeholder='Слой' data-toggle='tooltip' title='Слой' data-placement='top' style='display: none;'><div class='set-font' id='set-font"+nextTextarea+"' data-toggle='tooltip' title='Сохранить' data-placement='top'>OK</div><div class='copy' id='copy"+nextTextarea+"' data-toggle='tooltip' title='Копировать' data-placement='top' style='display: none;'><i class='fa fa-clone' aria-hidden='true'></i></div><div class='delete' id='delete"+nextTextarea+"' data-toggle='tooltip' title='Удалить' data-placement='top' style='display: none;'>X</div><div class='capter' id='capter"+nextTextarea+"'><textarea class='capter' id='id"+nextTextarea+"'>Текст</textarea></div></div>");

oldHtml<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').attr('value');
mySelector<?php echo $block->searchID($f); ?> = 'textarea#id';
oldBolder<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('font-weight');
oldDecor<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('text-decoration');
oldColor<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('color');
oldBackgr<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('background-color');
oldSize<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('font-size');
oldStyle<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('font-style');
oldAlign<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('text-align');
oldTop<?php echo $block->searchID($f); ?> = $('textarea#id<?php echo $block->searchID($f); ?>').css('top');
nextSelector<?php echo $block->searchID($f); ?> = mySelector<?php echo $block->searchID($f); ?> + nextTextarea;

$(nextSelector<?php echo $block->searchID($f); ?>).css('font-weight', oldBolder<?php echo $block->searchID($f); ?>).css('text-decoration', oldDecor<?php echo $block->searchID($f); ?>).css('color', oldColor<?php echo $block->searchID($f); ?>).css('background-color', oldBackgr<?php echo $block->searchID($f); ?>).css('font-size', oldSize<?php echo $block->searchID($f); ?>).css('font-style', oldStyle<?php echo $block->searchID($f); ?>).css('font-weight', oldBolder<?php echo $block->searchID($f); ?>).css('text-align', oldAlign<?php echo $block->searchID($f); ?>).css('top', oldTop<?php echo $block->searchID($f); ?>).html(oldHtml<?php echo $block->searchID($f); ?>);



$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

$.getScript("http://vobber.ru/js/js.php?text="+nextTextarea);

randomAjax3 = Math.round(Math.random()*1000);	

$.post('http://vobber.ru/ajax-elem.php', { zap: randomAjax3, block: nextTextarea, projectID: <?php echo $idProject; ?> });

 $('button#savenow').click();

 setTimeout('location.reload()',300);


});

$('body').delegate('div#delete<?php echo $block->searchID($f); ?>','click',function(){

$('div#addtext<?php echo $block->searchID($f); ?>').remove();

randomAjax4 = Math.round(Math.random()*1000);

$.post('http://vobber.ru/ajax-elem.php', { del: randomAjax4, delete: <?php echo $block->searchID($f); ?> });

$('button#savenow').click();

 setTimeout('location.reload()',300);

});

<?php
}
}
?>



$("h2#clicktext").click(function(){

nextTextarea++;

$("div.content").append("<div class='addtext' id='addtext"+nextTextarea+"'><div class='alignleft' id='alignleft"+nextTextarea+"' data-toggle='tooltip' title='По левому краю' data-placement='top'><img src='img/align_left.png' height='14px'/></div><div class='aligncenter' id='aligncenter"+nextTextarea+"' data-toggle='tooltip' title='По цетру' data-placement='top'><img src='img/align_center.png' height='14px'/></div><div class='alignright' id='alignright"+nextTextarea+"' data-toggle='tooltip' title='По правому краю' data-placement='top'><img src='img/align_right.png' height='14px'/></div><div class='bolder' id='bolder"+nextTextarea+"' data-toggle='tooltip' title='жирный' data-placement='top'>B</div><div class='italer' id='italer"+nextTextarea+"' data-toggle='tooltip' title='курсив' data-placement='top'>I</div><div class='underer' id='underer"+nextTextarea+"' data-toggle='tooltip' title='подчёркнутый' data-placement='top'>U</div><div class='brokener' id='brokener"+nextTextarea+"' data-toggle='tooltip' title='зачёркнутый' data-placement='top'>C</div><div class='overer' id='overer"+nextTextarea+"' data-toggle='tooltip' title='черта вверху' data-placement='top'>K</div><div class='delstyle' id='delstyle"+nextTextarea+"' data-toggle='tooltip' title='сброс стилей' data-placement='top'>A<span>x</span></div><input type='text' name='font' class='font' id='font"+nextTextarea+"' placeholder='Шрифт' data-toggle='tooltip' title='Размер шрифта' data-placement='top' /><input type='text' name='color' class='color' id='color"+nextTextarea+"' placeholder='Цвет' data-toggle='tooltip' title='Цвет текта' data-placement='top' /><input type='text' name='backgr' id='backgr"+nextTextarea+"' class='backgr' placeholder='Background' data-toggle='tooltip' title='Заливка' data-placement='top' /><input type='text' name='zindex' class='zindex' id='zindex"+nextTextarea+"' placeholder='Слой' data-toggle='tooltip' title='Слой' data-placement='top' style='display: none;'><div class='set-font' id='set-font"+nextTextarea+"' data-toggle='tooltip' title='Сохранить' data-placement='top'>OK</div><div class='copy' id='copy"+nextTextarea+"' data-toggle='tooltip' title='Копировать' data-placement='top' style='display: none;'><i class='fa fa-clone' aria-hidden='true'></i></div><div class='delete' id='delete"+nextTextarea+"' data-toggle='tooltip' title='Удалить' data-placement='top' style='display: none;'>X</div><div class='capter' id='capter"+nextTextarea+"'><textarea class='capter' id='id"+nextTextarea+"'>Текст</textarea></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

$.getScript("http://vobber.ru/js/js.php?text="+nextTextarea);

randomAjax1 = Math.round(Math.random()*1000);	

$.post('http://vobber.ru/ajax-elem.php', { zap: randomAjax1, block: nextTextarea, projectID: <?php echo $idProject; ?> });

 $('button#savenow').click();

 setTimeout('location.reload()',300);

});

$("img#browser2").click(function(){

$("div.content").append("<div class='browser'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image1").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image1.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});




$("img#no-image2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#image").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/image.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#avatar").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/avatar.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#sertif").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/sertif.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#maps").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/maps.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#check").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/check.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#uncheck").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/uncheck.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#block").click(function(){

$("div.content").append("<div class='fillblock'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#block2").click(function(){

$("div.content").append("<div class='fillblock2'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#block3").click(function(){

$("div.content").append("<div class='fillblock3'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#block4").click(function(){

$("div.content").append("<div class='fillblock4'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#border").click(function(){

$("div.content").append("<div class='fillborder'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#border2").click(function(){

$("div.content").append("<div class='fillborder2'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#border3").click(function(){

$("div.content").append("<div class='fillborder3'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#border4").click(function(){

$("div.content").append("<div class='fillborder4'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#ball").click(function(){

$("div.content").append("<div class='fillball'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#ball2").click(function(){

$("div.content").append("<div class='fillball2'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#ball3").click(function(){

$("div.content").append("<div class='fillball3'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#ball4").click(function(){

$("div.content").append("<div class='fillball4'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#circle").click(function(){

$("div.content").append("<div class='fillcircle'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#circle2").click(function(){

$("div.content").append("<div class='fillcircle2'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#circle3").click(function(){

$("div.content").append("<div class='fillcircle3'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#circle4").click(function(){

$("div.content").append("<div class='fillcircle4'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext").click(function(){

$("div.content").append("<div class='filltext'><div class='text'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltexttext2").click(function(){

$("div.content").append("<div class='filltext'><div class='text2'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltexttext3").click(function(){

$("div.content").append("<div class='filltext'><div class='text3'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});


$("img#filltexttext4").click(function(){

$("div.content").append("<div class='filltext'><div class='text4'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();


initProto();

});


$("img#filltext2text").click(function(){

$("div.content").append("<div class='filltext2'><div class='text'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext2text3").click(function(){

$("div.content").append("<div class='filltext2'><div class='text3'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext2text4").click(function(){

$("div.content").append("<div class='filltext2'><div class='text4'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});






$("img#filltext3text").click(function(){

$("div.content").append("<div class='filltext3'><div class='text'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext3text2").click(function(){

$("div.content").append("<div class='filltext3'><div class='text2'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext3text4").click(function(){

$("div.content").append("<div class='filltext3'><div class='text4'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});




$("img#filltext4text").click(function(){

$("div.content").append("<div class='filltext4'><div class='text'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext4text2").click(function(){

$("div.content").append("<div class='filltext4'><div class='text2'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext4text3").click(function(){

$("div.content").append("<div class='filltext4'><div class='text3'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});








$("img#filltext2textmid").click(function(){

$("div.content").append("<div class='filltext2'><div class='textmid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext2text3mid").click(function(){

$("div.content").append("<div class='filltext2'><div class='text3mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext2text4mid").click(function(){

$("div.content").append("<div class='filltext2'><div class='text4mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});









$("img#filltext3textmid").click(function(){

$("div.content").append("<div class='filltext3'><div class='textmid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext3text2mid").click(function(){

$("div.content").append("<div class='filltext3'><div class='text2mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext3text4mid").click(function(){

$("div.content").append("<div class='filltext3'><div class='text4mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});







$("img#filltext4textmid").click(function(){

$("div.content").append("<div class='filltext4'><div class='textmid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext4text2mid").click(function(){

$("div.content").append("<div class='filltext4'><div class='text2mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltext4text3mid").click(function(){

$("div.content").append("<div class='filltext4'><div class='text3mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});








$("img#filltexttext2mid").click(function(){

$("div.content").append("<div class='filltext'><div class='text2mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltexttext3mid").click(function(){

$("div.content").append("<div class='filltext'><div class='text3mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#filltexttext4mid").click(function(){

$("div.content").append("<div class='filltext'><div class='text4mid'></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("body").delegate("button#savenow","click",function(){

randomAjax2 = Math.round(Math.random()*1000);
function updateContent(){	
	
var newContent = $("div.content").html();
var newProject = "<?php echo $selectProject; ?>";

$.post('http://vobber.ru/ajax-elem.php', { url: newContent, project: newProject, zop: randomAjax2 });
}

updateContent();

      });



  });
  </script>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
// после загрузки страницы
$(function () {
  // инициализировать все элементы на страницы, имеющих атрибут data-toggle="tooltip", как компоненты tooltip
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</body>

</html>