

/*---------------count san pham order----------*/
function updateSpinner(obj)
{
    var contentObj = document.getElementById("text-content");
    var value = parseInt(contentObj.value);
    if(obj.id == "down-click") {
        value--;
    } else {
        value++;
    }
    contentObj.value = value;
}

 function verticalAlign(){
      var heightSM = $('.dress-small').css('height');
      var heightLG = $('.dress-large').css('height');

      var height = ((parseInt(heightLG)- parseInt(heightSM)) / 2) - 2;
      $('.dress-small').css('margin', height+'px 0px');
   }

$(window).resize(function() {
    verticalAlign();
});


/*---------------------slide show--------------------------*/

var pos = new Object();
pos.top = 0;

function changeUp(){
    var heightpx = $('.small').css('height');
    var height = parseInt(heightpx) + 20;
     pos.top -= height;
     $('.dress-box-slide').css('top', pos.top+'px');

    if(pos.top < 0 && pos.top > - height * 2){
        $('.slide-up').css('visibility', 'visible');
        $('.slide-down').css('visibility', 'visible');
    }
    if(pos.top <= - height * 2){
        $('.slide-up').css('visibility', 'hidden');
        $('.slide-down').css('visibility', 'visible');
    }
    if(pos.top >= 0){
       $('.slide-down').css('visibility', 'hidden');
    }
    return pos.top;
}

function changeDown(){
    var heightpx = $('.small').css('height');
    var height = parseInt(heightpx) + 20;

    pos.top += height;
    $('.dress-box-slide').css('top', pos.top+'px');

    
    if(pos.top < 0 && pos.top > - height * 2){
        $('.slide-up').css('visibility', 'visible');
        $('.slide-down').css('visibility', 'visible');
    }
    if(pos.top <= - height * 2){
        $('.slide-up').css('visibility', 'hidden');
        $('.slide-down').css('visibility', 'visible');
    }
    if(pos.top >= 0){
       $('.slide-down').css('visibility', 'hidden');
    }
    return pos.top;
}

$(window).resize(function() {
      var heightpx = $('.small').css('height');
      var height = (parseInt(heightpx) + 20) * 4;
      pos.top = 0;
      $('.dress-box-slide').css('top', pos.top+'px');

          $('.slide-up').css('visibility', 'visible');
          $('.slide-down').css('visibility', 'hidden');
      $('.dress-box').css('height', height+'px');
    
});

function changeHeight(){
  var heightpx = $('.small').css('width');// width = height => width
  var height = (parseInt(heightpx) + 20) * 4;
  
  $('.dress-box').css('height', height+'px');
}


/*-----------------Magnific Popup lightbox holder-----------------------*/
function magnificPopup(){
    $('.magnific-gallery').each(function(index , value){
      var gallery = $(this);
      var galleryImages = $(this).data('links').split(',');
        var items = [];
        for(var i=0;i<galleryImages.length; i++){
          items.push({
            src:galleryImages[i],
            title:''
          });
        }
        gallery.magnificPopup({
          mainClass: 'mfp-fade',
          items:items,
          gallery:{
            enabled:true,
            tPrev: $(this).data('prev-text'),
            tNext: $(this).data('next-text')
          },
          type: 'image'
        });
    });
}
/*------------------end lightbox--------------------------*/

$(document).ready(function(e){

      // alert('hello');
    $('#zoom-dress').zoom();// zoom hinh

    $('.small').click(function(e) {
       $('.large').attr('src', $(this).attr('src'));
       $('#zoom-dress').zoom();
    });

    verticalAlign();
    magnificPopup();// lightbox holder
});
