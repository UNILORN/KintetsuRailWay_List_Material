
$(function(){

  // 画面更新時

  $("body").fadeIn(2000);

  $.sublime_slideshow({
            src:[
            {url:"./30000.jpg"},
            {url:"./1020.jpg"},
            {url:"./21.jpg"}
            ],
            duration:   7,
            fade:       1,
            scaling:    1.2,
            rotating:   2,
            overlay:    "./pattern.png"
        });
  $(".sm-slider").css("height","120%");
    //
    //  車両カード
    //

    // マウスを乗せた時
    $(".mdl-card__title").hover(function(){
      $(this).find(".mdl-card__title-text").fadeOut();
    },function(){
      $(this).find(".mdl-card__title-text").fadeIn();
    });

    // メニューボタンをクリック時
    $(".homebutton").click(function(){
      var widthsize = $(".mdl-layout__drawer").css("left");
      $(".Vehicle").css("opacity","1");
      $(".Route").css("opacity","0.5");
      $('html,body').animate({ scrollTop: 0 });
      if (widthsize == "250px" ){
        $(".mdl-layout__drawer").animate({
          left:"0px"
        },300);
      }
      else {
        $(".mdl-layout__drawer").animate({
          left:"250px"
        },300);
      }
    });

    // メニューを閉じる
    $(".clearmenu").click(function(){
      $(".mdl-layout__drawer").animate({
        left:"0px"
      },300);
    });

    // Vehicleボタンクリック時
    $(".Vehicle").click(function(){
      $(".Vehicle").css("opacity","1");
      $(".Route").css("opacity","0.5");
      $('html,body').animate({ scrollTop: 0 });
     });

    //  Routeボタンクリック時
     $(".Route").click(function(){
       $(".Vehicle").css("opacity","0.5");
       $(".Route").css("opacity","1");
       $(".mdl-layout__drawer").animate({
          left:"0px"
        },300);
        var p = $(".routeimage").offset().top;
        $('html,body').animate({ scrollTop: (p-80) });
        return false;
     });

    //  路線図をクリック時
     $(".routeimage").click(function(){
       var temp = $(this).find("img").width();
       var wid = $(window).width();

      //  3段階の拡大が出来る
       if (temp+100 > wid/6 && (temp - wid/6) < wid/12){
         $(this).find("img").animate({
           "width":"30%"
         });
        }
        else if(temp > wid/6 && (temp - wid/6) < wid/4){
          $(this).find("img").animate({
            "width":"50%"
          });
        }
        else if((temp - wid/6) < wid/2){
          $(this).find("img").animate({
            "width":"15%"
          });
        }
        else{}
     });

    //  スクロール時
     $(window).scroll(function(){
       var height_vv = $(".routeimage").height();
       if ( height_vv - 100 <= $(this).scrollTop()){
         $(".Vehicle").css("opacity","0.5");
         $(".Route").css("opacity","1");
       }
       else{
         $(".Vehicle").css("opacity","1");
         $(".Route").css("opacity","0.5");
       }
     });

    //
    //モーダルウインドウ
    //

    $(function(){
    $(".mdl-card__title").click( function(){
    	$( this ).blur() ;
    	if( $( ".modal-overlay" )[0] ) return false ;
    	$( "body" ).append( '<div class="modal-overlay"></div>' ) ;
    	$( ".modal-overlay" ).fadeIn( "slow" ) ;
    	centeringModalSyncer() ;
    	$( "#modal-content" ).fadeIn( "slow" ) ;
      var image = $(this).css("background");
      var imagelink = image.split('\"');
      console.log(imagelink[1]);
      $("#modal-content").html('<img style="width:100%;" src="'+imagelink[1]+'" >');
      var img_h = $("#modal-content").find("img").height();
      $("#modal-content").css("height",(img_h+20)+"px");

      $("#modal-content").fadeIn();
    	$( ".modal-overlay,#modal-close" ).unbind().click( function(){
    		$( "#modal-content,.modal-overlay" ).fadeOut( "slow" , function(){
    			$('.modal-overlay').remove() ;
    		} ) ;
    	} ) ;
    } ) ;
    $( window ).resize( centeringModalSyncer ) ;
    	function centeringModalSyncer() {
    		var w = $( window ).width() ;
    		var h = $( window ).height() ;
    		var cw = $( "#modal-content" ).outerWidth();
    		var ch = $( "#modal-content" ).outerHeight();
        $( "#modal-content" ).css( {"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"} ) ;
      }

    });
});
