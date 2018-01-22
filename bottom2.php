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

$('body').delegate('textarea.capter','keyup',function(){
textFill = $('textarea.capter').attr('value');
$('textarea.capter').html(textFill);
});

$('body').delegate('div.browser, div.accordion','click',function(){
$("div.bolder, div.italer, div.underer, div.brokener, div.delstyle, div.alignleft, div.aligncenter, div.alignright, div.overer, div.set-font, input.font, input.color, input.backgr").css("display","none");
});

$('body').delegate('textarea.capter','focus',function(){
$("div.bolder, div.italer, div.underer, div.brokener, div.delstyle, div.alignleft, div.aligncenter, div.alignright, div.overer, div.set-font, input.font, input.color, input.backgr").css("display","inline-block");
});

$('body').delegate('div.set-font','click',function(){
textFont = $('input.font').attr('value');
colorFont = $('input.color').attr('value');
colorBackgr = $('input.backgr').attr('value');
$('textarea.capter').css('font-size', textFont).css('color', colorFont).css('background-color', colorBackgr);
});

$('body').delegate('div.bolder','click',function(){
$("textarea.capter").toggleClass("bold");
});

$('body').delegate('div.italer','click',function(){
$("textarea.capter").toggleClass("ital");
});

$('body').delegate('div.underer','click',function(){
$("textarea.capter").toggleClass("under");
});


$('body').delegate('div.brokener','click',function(){
$("textarea.capter").toggleClass("broke");
});

$('body').delegate('div.alignleft','click',function(){
$("textarea.capter").toggleClass("aleft");
});

$('body').delegate('div.aligncenter','click',function(){
$("textarea.capter").toggleClass("acenter");
});

$('body').delegate('div.alignright','click',function(){
$("textarea.capter").toggleClass("aright");
});

$('body').delegate('div.overer','click',function(){
$("textarea.capter").toggleClass("over");
});

$('body').delegate('div.delstyle','click',function(){
$("textarea.capter").removeClass("bold");
$("textarea.capter").removeClass("ital");
$("textarea.capter").removeClass("under");
$("textarea.capter").removeClass("broke");
$("textarea.capter").removeClass("acenter");
$("textarea.capter").removeClass("aright");
$("textarea.capter").removeClass("over");
$("textarea.capter").removeClass("aleft");
});






$("h2#clicktext").click(function(){

$("div.content").append("<div class='addtext'><div class='alignleft' data-toggle='tooltip' title='По левому краю' data-placement='top'><img src='img/align_left.png' height='14px'/></div><div class='aligncenter' data-toggle='tooltip' title='По цетру' data-placement='top'><img src='img/align_center.png' height='14px'/></div><div class='alignright' data-toggle='tooltip' title='По правому краю' data-placement='top'><img src='img/align_right.png' height='14px'/></div><div class='bolder' data-toggle='tooltip' title='жирный' data-placement='top'>B</div><div class='italer' data-toggle='tooltip' title='курсив' data-placement='top'>I</div><div class='underer' data-toggle='tooltip' title='подчёркнутый' data-placement='top'>U</div><div class='brokener' data-toggle='tooltip' title='зачёркнутый' data-placement='top'>C</div><div class='overer' data-toggle='tooltip' title='черта вверху' data-placement='top'>K</div><div class='delstyle' data-toggle='tooltip' title='сброс стилей' data-placement='top'>A<span>x</span></div><input type='text' name='font' class='font' placeholder='Шрифт' data-toggle='tooltip' title='Размер шрифта' data-placement='top' /><input type='text' name='color' class='color' placeholder='Цвет' data-toggle='tooltip' title='Цвет текта' data-placement='top' /><input type='text' name='backgr' class='backgr' placeholder='Background' data-toggle='tooltip' title='Заливка' data-placement='top' /><div class='set-font' data-toggle='tooltip' title='Сохранить' data-placement='top'>OK</div><div class='capter'><textarea class='capter'>Текст</textarea></div></div>");
$( "div.img" ).draggable({ cursor: "move" });
$( "img.img" ).resizable();

initProto();

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

randomAjax1 = Math.round(Math.random()*1000);
function updateContent(){	
	
var newContent = $("div.content").html();
var newProject = "<?php echo $selectProject; ?>";

$.post('http://vobber.ru/ajax-elem.php', { url: newContent, project: newProject, zop: randomAjax1 });
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