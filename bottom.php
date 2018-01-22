<script>
  $( function() {

    $( ".accordion" ).accordion();

 $( "div.img" ).draggable({ cursor: "move" }).resizable();

    function initProto() {
$( "div.browser, div.fillblock, div.fillblock2, div.fillblock3, div.fillblock4, div.fillborder, div.fillborder2, div.fillborder3, div.fillborder4, div.fillcircle, div.fillcircle2, div.fillcircle3, div.fillcircle4, div.fillball, div.fillball2, div.fillball3, div.fillball4, div.browser, div#line" ).draggable({ cursor: "move" }).resizable();

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
if ($block->row() > 0) {

$nextText = new textSearch;
$nextText->search($idProject);
?>
nextTextarea = <?php echo $nextText->searchID(0);

for ($f=0; $f<=$block->row()-1; $f++) {
?>

$('body').delegate('div.browser, div.accordion','click',function(){
$("div#bolder<?php echo $block->searchID($f); ?>, div#italer<?php echo $block->searchID($f); ?>, div#underer<?php echo $block->searchID($f); ?>, div#brokener<?php echo $block->searchID($f); ?>, div#delstyle<?php echo $block->searchID($f); ?>, div#alignleft<?php echo $block->searchID($f); ?>, div#aligncenter<?php echo $block->searchID($f); ?>, div#alignright<?php echo $block->searchID($f); ?>, div#overer<?php echo $block->searchID($f); ?>, div#set-font<?php echo $block->searchID($f); ?>, input#font<?php echo $block->searchID($f); ?>, input#color<?php echo $block->searchID($f); ?>, input#backgr<?php echo $block->searchID($f); ?>, div#copy<?php echo $block->searchID($f); ?>, div#delete<?php echo $block->searchID($f); ?>, input#zindex<?php echo $block->searchID($f); ?>").css("display","none");
});

$('body').delegate('#id<?php echo $block->searchID($f); ?>','keyup',function(){
textFill<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').attr('value');
$('#id<?php echo $block->searchID($f); ?>').html(textFill<?php echo $block->searchID($f); ?>);
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
$('#id<?php echo $block->searchID($f); ?>').css('font-size', textFont<?php echo $block->searchID($f); ?>).css('color', colorFont<?php echo $block->searchID($f); ?>).css('background-color', colorBackgr<?php echo $block->searchID($f); ?>);
$('div#addtext<?php echo $block->searchID($f); ?>').css('z-index', layerIndex<?php echo $block->searchID($f); ?>);
});

$('body').delegate('div#bolder<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("bold");
});

$('body').delegate('div#italer<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("ital");
});

$('body').delegate('div#underer<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("under");
});


$('body').delegate('div#brokener<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("broke");
});

$('body').delegate('div#alignleft<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("aleft");
});

$('body').delegate('div#aligncenter<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("acenter");
});

$('body').delegate('div#alignright<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("aright");
});

$('body').delegate('div#overer<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").toggleClass("over");
});

$('body').delegate('div#delstyle<?php echo $block->searchID($f); ?>','click',function(){
$("#id<?php echo $block->searchID($f); ?>").removeClass("bold");
$("#id<?php echo $block->searchID($f); ?>").removeClass("ital");
$("#id<?php echo $block->searchID($f); ?>").removeClass("under");
$("#id<?php echo $block->searchID($f); ?>").removeClass("broke");
$("#id<?php echo $block->searchID($f); ?>").removeClass("acenter");
$("#id<?php echo $block->searchID($f); ?>").removeClass("aright");
$("#id<?php echo $block->searchID($f); ?>").removeClass("over");
$("#id<?php echo $block->searchID($f); ?>").removeClass("aleft");
});

$('body').delegate('div#copy<?php echo $block->searchID($f); ?>','click',function(){

nextTextarea++;

$("div.content").append("<div class='addtext' id='addtext"+nextTextarea+"'><div class='alignleft' id='alignleft"+nextTextarea+"' data-toggle='tooltip' title='По левому краю' data-placement='top'><img src='img/align_left.png' height='14px'/></div><div class='aligncenter' id='aligncenter"+nextTextarea+"' data-toggle='tooltip' title='По цетру' data-placement='top'><img src='img/align_center.png' height='14px'/></div><div class='alignright' id='alignright"+nextTextarea+"' data-toggle='tooltip' title='По правому краю' data-placement='top'><img src='img/align_right.png' height='14px'/></div><div class='bolder' id='bolder"+nextTextarea+"' data-toggle='tooltip' title='жирный' data-placement='top'>B</div><div class='italer' id='italer"+nextTextarea+"' data-toggle='tooltip' title='курсив' data-placement='top'>I</div><div class='underer' id='underer"+nextTextarea+"' data-toggle='tooltip' title='подчёркнутый' data-placement='top'>U</div><div class='brokener' id='brokener"+nextTextarea+"' data-toggle='tooltip' title='зачёркнутый' data-placement='top'>C</div><div class='overer' id='overer"+nextTextarea+"' data-toggle='tooltip' title='черта вверху' data-placement='top'>K</div><div class='delstyle' id='delstyle"+nextTextarea+"' data-toggle='tooltip' title='сброс стилей' data-placement='top'>A<span>x</span></div><input type='text' name='font' class='font' id='font"+nextTextarea+"' placeholder='Шрифт' data-toggle='tooltip' title='Размер шрифта' data-placement='top' /><input type='text' name='color' class='color' id='color"+nextTextarea+"' placeholder='Цвет' data-toggle='tooltip' title='Цвет текта' data-placement='top' /><input type='text' name='backgr' id='backgr"+nextTextarea+"' class='backgr' placeholder='Background' data-toggle='tooltip' title='Заливка' data-placement='top' /><input type='text' name='zindex' class='zindex' id='zindex"+nextTextarea+"' placeholder='Слой' data-toggle='tooltip' title='Слой' data-placement='top' style='display: none;'><div class='set-font' id='set-font"+nextTextarea+"' data-toggle='tooltip' title='Сохранить' data-placement='top'>OK</div><div class='copy' id='copy"+nextTextarea+"' data-toggle='tooltip' title='Копировать' data-placement='top' style='display: none;'><i class='fa fa-clone' aria-hidden='true'></i></div><div class='delete' id='delete"+nextTextarea+"' data-toggle='tooltip' title='Удалить' data-placement='top' style='display: none;'>X</div><div class='capter' id='capter"+nextTextarea+"'><textarea class='capter' id='id"+nextTextarea+"'>Текст</textarea></div></div>");

oldHtml<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').attr('value');
mySelector<?php echo $block->searchID($f); ?> = '#id';
oldBolder<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('font-weight');
oldDecor<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('text-decoration');
oldColor<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('color');
oldBackgr<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('background-color');
oldSize<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('font-size');
oldStyle<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('font-style');
oldAlign<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('text-align');
oldTop<?php echo $block->searchID($f); ?> = $('#id<?php echo $block->searchID($f); ?>').css('top');
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

$.post('http://vobber.ru/ajax-elem.php', { del: randomAjax4, delete: <?php echo $block->searchID($f); ?>, projectID: <?php echo $idProject; ?> });

$('button#savenow').click();

 setTimeout('location.reload()',300);

});

<?php
}
}
else { 

$noBlock = new texts;
$noBlock->dataTexts();
?>
nextTextarea = <?php echo $noBlock->resID(0); ?>
<?php
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

$("img#rlogo3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rlogo3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#user3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/user3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#top3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/top3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#left3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/left3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#bottom3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/bottom3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#right3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/right3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rtop3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rtop3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});


$("img#rleft3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rleft3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rbottom3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rbottom3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rright3").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rright3.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rlogo4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rlogo4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#user4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/user4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#top4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/top4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#left4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/left4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#bottom4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/bottom4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#right4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/right4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rtop4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rtop4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rleft4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rleft4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rbottom4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rbottom4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rright4").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rright4.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rlogo2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rlogo2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#user2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/user2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#top2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/top2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#left2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/left2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#bottom2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/bottom2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#right2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/right2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rtop2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rtop2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rleft2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rleft2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rbottom2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rbottom2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rright2").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rright2.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rlogo").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rlogo.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#user").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/user.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#top").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/top.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#left").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/left.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#bottom").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/bottom.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#right").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/right.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rtop").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rtop.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rleft").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rleft.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rbottom").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rbottom.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rright").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rright.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image1dark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image1dark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image2dark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image2dark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#imagedark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/imagedark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#avatardark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/avatardark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#sertifdark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/sertifdark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#mapsdark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/mapsdark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#checkdark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/checkdark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#uncheckdark").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/uncheckdark.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image1grey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image1grey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image2grey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image2grey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#imagegrey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/imagegrey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#avatargrey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/avatargrey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#sertifgrey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/sertifgrey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#mapsgrey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/mapsgrey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#checkgrey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/checkgrey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#uncheckgrey").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/uncheckgrey.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image1black").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image1black.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image2black").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image2black.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#imageblack").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/imageblack.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#avatarblack").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/avatarblack.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#sertifblack").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/sertifblack.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#mapsblack").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/mapsblack.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#checkblack").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/checkblack.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#uncheckblack").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/uncheckblack.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rlogo5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rlogo5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#user5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/user5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#top5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/top5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#left5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/left5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#bottom5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/bottom5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#right5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/right5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rtop5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rtop5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rleft5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rleft5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rbottom5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rbottom5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#rright5").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/rright5.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image11").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image11.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#no-image21").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/no-image21.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#image1").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/image1.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#avatar1").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/avatar1.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#sertif1").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/sertif1.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#maps1").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/maps1.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#check1").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/check1.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("img#uncheck1").click(function(){

$("div.content").append("<div class='img'><img class='img' src='img/uncheck1.png' /></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});


$("div.linepixel-white").click(function(){

$("div.content").append("<div class='linepixel-white1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});


$("div.line2pixel").click(function(){

$("div.content").append("<div class='line2pixel1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});


$("div.line3pixel").click(function(){

$("div.content").append("<div class='line3pixel1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line4pixel").click(function(){

$("div.content").append("<div class='line4pixel1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line5pixel").click(function(){

$("div.content").append("<div class='line5pixel1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel3-white").click(function(){

$("div.content").append("<div class='linepixel3-white1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel3").click(function(){

$("div.content").append("<div class='linepixel31' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line2pixel3").click(function(){

$("div.content").append("<div class='line2pixel31' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line3pixel3").click(function(){

$("div.content").append("<div class='line3pixel31' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line4pixel3").click(function(){

$("div.content").append("<div class='line4pixel31' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line5pixel3").click(function(){

$("div.content").append("<div class='line5pixel31' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel5-white").click(function(){

$("div.content").append("<div class='linepixel5-white1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel5").click(function(){

$("div.content").append("<div class='linepixel51' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line2pixel5").click(function(){

$("div.content").append("<div class='line2pixel51' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line3pixel5").click(function(){

$("div.content").append("<div class='line3pixel51' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line4pixel5").click(function(){

$("div.content").append("<div class='line4pixel51' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line5pixel5").click(function(){

$("div.content").append("<div class='line5pixel51' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel-whitevert").click(function(){

$("div.content").append("<div class='linepixel-whitevert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixelvert").click(function(){

$("div.content").append("<div class='linepixelvert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line2pixelvert").click(function(){

$("div.content").append("<div class='line2pixelvert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line3pixelvert").click(function(){

$("div.content").append("<div class='line3pixelvert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line4pixelvert").click(function(){

$("div.content").append("<div class='line4pixelvert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line5pixelvert").click(function(){

$("div.content").append("<div class='line5pixelvert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel3-whitevert").click(function(){

$("div.content").append("<div class='linepixel3-whitevert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel3vert").click(function(){

$("div.content").append("<div class='linepixel3vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line2pixel3vert").click(function(){

$("div.content").append("<div class='line2pixel3vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line3pixel3vert").click(function(){

$("div.content").append("<div class='line3pixel3vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line4pixel3vert").click(function(){

$("div.content").append("<div class='line4pixel3vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line5pixel3vert").click(function(){

$("div.content").append("<div class='line5pixel3vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel5-whitevert").click(function(){

$("div.content").append("<div class='linepixel5-whitevert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.linepixel5vert").click(function(){

$("div.content").append("<div class='linepixel5vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line2pixel5vert").click(function(){

$("div.content").append("<div class='line2pixel5vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line3pixel5vert").click(function(){

$("div.content").append("<div class='line3pixel5vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line4pixel5vert").click(function(){

$("div.content").append("<div class='line4pixel5vert1' id='line'></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

});

$("div.line5pixel5vert").click(function(){

$("div.content").append("<div class='line5pixel5vert1' id='line'></div>");
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