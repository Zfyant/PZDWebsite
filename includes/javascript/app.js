var main = function() {

"use strict"; 
	
/*----------------------------MENU-------------------------------*/

	/* Menu Show */
	$('.menu-button').hover(function() {
			$('.menu').show();
	});
	
	/* Menu Hide */
	$('.wrapper').hover(function() {
			$('.menu').hide();
			$('.menu li ul').hide();
	});
	
	/* Menu Subitems -> CSS */
	$('ul.menu li').click(function() {
		$('.menu li ul').hide();
		$(this).children('ul').show();
	});
	
	/* Menu Hover Glow [WORKING?] */
	$('.object').click(function() {
		$(this).addClass('css').siblings().removeClass('css');
	});
	
/*------------------------Any Gallery---------------------------*/
	
	$('.selector').click(function(){
         $('.viewer').html('<img src="' + $(this).find('img:eq(0)').attr('src') + '" />');
    });
	
/*------------------------LOGIN PANELS -> CSS---------------------------*/
	
	/* Activate/Deactivate Login Panel */
	$('.user-button').click(function() {
		$(this).next('.user-panel').toggle();
	});
	
/*----------------------------BACKGROUND BUTTONS-------------------------------*/
	
	
	/* Background 0 - Main */
	$('.bg0').click(function() {
		$('body').addClass('bg0').removeClass('bg1').removeClass('bg2').removeClass('bg3').removeClass('bg4');
	});
	/* Background 1 */
	$('.bg1').click(function() {
		$('body').addClass('bg1').removeClass('bg0').removeClass('bg2').removeClass('bg3').removeClass('bg4');
	});
	/* Background 2 */
	$('.bg2').click(function() {
		$('body').addClass('bg2').removeClass('bg0').removeClass('bg1').removeClass('bg3').removeClass('bg4');
	});
	/* Background 3 */
	$('.bg3').click(function() {
		$('body').addClass('bg3').removeClass('bg0').removeClass('bg1').removeClass('bg2').removeClass('bg4');
	});
	/* Background 3 */
	$('.bg4').click(function() {
		$('body').addClass('bg4').removeClass('bg0').removeClass('bg1').removeClass('bg2').removeClass('bg3');
	});
	
/*---------------------------FOLDERS-------------------------------*/
	
	
	/* Open Folder */
	$('.open').click(function() {
    $(this).parent().siblings().children('div.open').show();
    $(this).parent().siblings('div.folder').removeClass('exp-folder');
    $(this).parent().siblings().children('div.contents').css('display', 'none');
    $(this).parent().siblings().children('div.close').hide();
    $(this).parent().siblings().children('div.tag').show(500);
    $(this).hide();
    $(this).parent('div.folder').addClass('exp-folder');
    $(this).siblings('div.contents').css('display', 'inline-block');
    $(this).siblings('div.close').show();
    $(this).siblings('div.tag').hide();
    $(this).siblings('download-table').removeClass('move-downloads');
	});
	
	/* Close Folder */
	$('.close').click(function() {
    $(this).hide();
    $(this).siblings('div.open').show();
    $(this).siblings('div.contents').hide();
    $(this).parent('div.folder').removeClass('exp-folder');
    $(this).siblings('div.tag').show(500);
    $(this).siblings('download-table').removeClass('move-downloads');
	});
	
	
	
	/* Wrapper Close All Folder [NOT WORKING] */
	$('.none').click(function() {
  	$('.none').not(this).each(function(){
         $(this).slideUp();
     });
     $(this).slideDown();
	});
	
/*--------------------------Comments Page--------------------------/
	 
		/* Submit Post - Ruins Database Message Recieval /
	$('.btn-post').click(function() {
		var post = $('.status-box').val();
		$('<li>').text(post).prependTo('.posts');
    $('.status-box').val(''); /* Clear StatusBox After Post /
		$('.comment-counter').text('240'); /* Reset CommentCounter After Post /
		$('.btn-post').addClass('disabled');  /* Reset PostButton After Post /
	});
	
	$('.status-box').keyup(function() {
		var postLength = $(this).val().length;
		var charactersLeft = 240 - postLength;
		$('.comment-counter').text(charactersLeft);
			 
		if(charactersLeft < 0) {
			$('.btn-post').addClass('disabled');
		}
		else if(charactersLeft === 240) {
			$('.btn-post').addClass('disabled');
		}
		else {
			$('.btn-post').removeClass('disabled');
		}
	});
    
	$('.btn-post').addClass('disabled');
	
	/*------------------------------Slideshow------------------------------*/
	
		$('.sl-next').click(function() {
      var currentSlide = $('.active-slide');
      var nextSlide = currentSlide.next();
    
      var currentDot = $('.sl-active');
      var nextDot = currentDot.next();
    
      if(nextSlide.length === 0) {
        nextSlide = $('.slide').first();
        nextDot = $('.sl-option').first();
      }
    
      currentSlide.fadeOut(600).removeClass('active-slide');
      nextSlide.fadeIn(600).addClass('active-slide');
    
      currentDot.removeClass('sl-active');
      nextDot.addClass('sl-active');
    });
		
		$('.sl-back').click(function() {
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev();

        var currentDot = $('.active-dot');
        var prevDot = currentDot.prev();
        
        if(prevSlide.length === 0) {
            prevSlide = $('.slide').last();
            prevDot = $('.dot').last();
        }
        
        currentSlide.fadeOut(600).removeClass('active-slide');
        prevSlide.fadeIn(600).addClass('active-slide');

        currentDot.removeClass('active-dot');
        prevDot.addClass('active-dot');
    });
		
		
		
		
		
/*----------------------------------Misc----------------------------------*/
		
	/* Background Changer */
	
	/*$('body').css({"background-image" : $.cookie('user-bg')});*/
	
	$('.user-bg').click(function() {
		$('body').css({"background-image" : $(this).attr('src')}); /* Temp */
		$.cookie('user-bg', 'url('+ $(this).attr('src') +')', { expires: 7});
	});
	
	
	
	$('.img img').click(function() {
		$('.iFrame').css({"background" : $(this).attr('src')});
	});
	
	
		
/*--------------------------End All Non Functions--------------------------*/

};

$(document).ready(main);
/*--------------------------------------------------------------------------*/
/*-------------------------------Copy Element-------------------------------*/

function copyToClipboard(element) {
	var $temp = $("<input>");
	$("body").append($temp);
	$temp.val($(element).text()).select();
	document.execCommand("copy");
	$temp.remove();
}
