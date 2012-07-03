/* Author: 
Sidxiao
*/

//Get avatar url by email & size
function get_gravatar(email, size) {

    // MD5 (Message-Digest Algorithm) by WebToolkit
    // http://www.webtoolkit.info/javascript-md5.html

    var MD5=function(s){function L(k,d){return(k<<d)|(k>>>(32-d))}function K(G,k){var I,d,F,H,x;F=(G&2147483648);H=(k&2147483648);I=(G&1073741824);d=(k&1073741824);x=(G&1073741823)+(k&1073741823);if(I&d){return(x^2147483648^F^H)}if(I|d){if(x&1073741824){return(x^3221225472^F^H)}else{return(x^1073741824^F^H)}}else{return(x^F^H)}}function r(d,F,k){return(d&F)|((~d)&k)}function q(d,F,k){return(d&k)|(F&(~k))}function p(d,F,k){return(d^F^k)}function n(d,F,k){return(F^(d|(~k)))}function u(G,F,aa,Z,k,H,I){G=K(G,K(K(r(F,aa,Z),k),I));return K(L(G,H),F)}function f(G,F,aa,Z,k,H,I){G=K(G,K(K(q(F,aa,Z),k),I));return K(L(G,H),F)}function D(G,F,aa,Z,k,H,I){G=K(G,K(K(p(F,aa,Z),k),I));return K(L(G,H),F)}function t(G,F,aa,Z,k,H,I){G=K(G,K(K(n(F,aa,Z),k),I));return K(L(G,H),F)}function e(G){var Z;var F=G.length;var x=F+8;var k=(x-(x%64))/64;var I=(k+1)*16;var aa=Array(I-1);var d=0;var H=0;while(H<F){Z=(H-(H%4))/4;d=(H%4)*8;aa[Z]=(aa[Z]|(G.charCodeAt(H)<<d));H++}Z=(H-(H%4))/4;d=(H%4)*8;aa[Z]=aa[Z]|(128<<d);aa[I-2]=F<<3;aa[I-1]=F>>>29;return aa}function B(x){var k="",F="",G,d;for(d=0;d<=3;d++){G=(x>>>(d*8))&255;F="0"+G.toString(16);k=k+F.substr(F.length-2,2)}return k}function J(k){k=k.replace(/rn/g,"n");var d="";for(var F=0;F<k.length;F++){var x=k.charCodeAt(F);if(x<128){d+=String.fromCharCode(x)}else{if((x>127)&&(x<2048)){d+=String.fromCharCode((x>>6)|192);d+=String.fromCharCode((x&63)|128)}else{d+=String.fromCharCode((x>>12)|224);d+=String.fromCharCode(((x>>6)&63)|128);d+=String.fromCharCode((x&63)|128)}}}return d}var C=Array();var P,h,E,v,g,Y,X,W,V;var S=7,Q=12,N=17,M=22;var A=5,z=9,y=14,w=20;var o=4,m=11,l=16,j=23;var U=6,T=10,R=15,O=21;s=J(s);C=e(s);Y=1732584193;X=4023233417;W=2562383102;V=271733878;for(P=0;P<C.length;P+=16){h=Y;E=X;v=W;g=V;Y=u(Y,X,W,V,C[P+0],S,3614090360);V=u(V,Y,X,W,C[P+1],Q,3905402710);W=u(W,V,Y,X,C[P+2],N,606105819);X=u(X,W,V,Y,C[P+3],M,3250441966);Y=u(Y,X,W,V,C[P+4],S,4118548399);V=u(V,Y,X,W,C[P+5],Q,1200080426);W=u(W,V,Y,X,C[P+6],N,2821735955);X=u(X,W,V,Y,C[P+7],M,4249261313);Y=u(Y,X,W,V,C[P+8],S,1770035416);V=u(V,Y,X,W,C[P+9],Q,2336552879);W=u(W,V,Y,X,C[P+10],N,4294925233);X=u(X,W,V,Y,C[P+11],M,2304563134);Y=u(Y,X,W,V,C[P+12],S,1804603682);V=u(V,Y,X,W,C[P+13],Q,4254626195);W=u(W,V,Y,X,C[P+14],N,2792965006);X=u(X,W,V,Y,C[P+15],M,1236535329);Y=f(Y,X,W,V,C[P+1],A,4129170786);V=f(V,Y,X,W,C[P+6],z,3225465664);W=f(W,V,Y,X,C[P+11],y,643717713);X=f(X,W,V,Y,C[P+0],w,3921069994);Y=f(Y,X,W,V,C[P+5],A,3593408605);V=f(V,Y,X,W,C[P+10],z,38016083);W=f(W,V,Y,X,C[P+15],y,3634488961);X=f(X,W,V,Y,C[P+4],w,3889429448);Y=f(Y,X,W,V,C[P+9],A,568446438);V=f(V,Y,X,W,C[P+14],z,3275163606);W=f(W,V,Y,X,C[P+3],y,4107603335);X=f(X,W,V,Y,C[P+8],w,1163531501);Y=f(Y,X,W,V,C[P+13],A,2850285829);V=f(V,Y,X,W,C[P+2],z,4243563512);W=f(W,V,Y,X,C[P+7],y,1735328473);X=f(X,W,V,Y,C[P+12],w,2368359562);Y=D(Y,X,W,V,C[P+5],o,4294588738);V=D(V,Y,X,W,C[P+8],m,2272392833);W=D(W,V,Y,X,C[P+11],l,1839030562);X=D(X,W,V,Y,C[P+14],j,4259657740);Y=D(Y,X,W,V,C[P+1],o,2763975236);V=D(V,Y,X,W,C[P+4],m,1272893353);W=D(W,V,Y,X,C[P+7],l,4139469664);X=D(X,W,V,Y,C[P+10],j,3200236656);Y=D(Y,X,W,V,C[P+13],o,681279174);V=D(V,Y,X,W,C[P+0],m,3936430074);W=D(W,V,Y,X,C[P+3],l,3572445317);X=D(X,W,V,Y,C[P+6],j,76029189);Y=D(Y,X,W,V,C[P+9],o,3654602809);V=D(V,Y,X,W,C[P+12],m,3873151461);W=D(W,V,Y,X,C[P+15],l,530742520);X=D(X,W,V,Y,C[P+2],j,3299628645);Y=t(Y,X,W,V,C[P+0],U,4096336452);V=t(V,Y,X,W,C[P+7],T,1126891415);W=t(W,V,Y,X,C[P+14],R,2878612391);X=t(X,W,V,Y,C[P+5],O,4237533241);Y=t(Y,X,W,V,C[P+12],U,1700485571);V=t(V,Y,X,W,C[P+3],T,2399980690);W=t(W,V,Y,X,C[P+10],R,4293915773);X=t(X,W,V,Y,C[P+1],O,2240044497);Y=t(Y,X,W,V,C[P+8],U,1873313359);V=t(V,Y,X,W,C[P+15],T,4264355552);W=t(W,V,Y,X,C[P+6],R,2734768916);X=t(X,W,V,Y,C[P+13],O,1309151649);Y=t(Y,X,W,V,C[P+4],U,4149444226);V=t(V,Y,X,W,C[P+11],T,3174756917);W=t(W,V,Y,X,C[P+2],R,718787259);X=t(X,W,V,Y,C[P+9],O,3951481745);Y=K(Y,h);X=K(X,E);W=K(W,v);V=K(V,g)}var i=B(Y)+B(X)+B(W)+B(V);return i.toLowerCase()};

    var size = size || 80;

    return 'http://www.gravatar.com/avatar/' + MD5(email) + '.jpg?s=' + size;
}


var init_comment = function(){
	//Make comment box autoresize
	$('textarea#comment').autoResize({
		minHeight: 31,
		maxHeight: 600,
		extraSpace: 14,
		animate: false,
		onAfterResize: function(){
			$('textarea#comment').prev().height($('textarea#comment').height());
		}
	});

	//When comment box is in focus, fade in submit button, display visitor's avatar if there's comment history with email address auto filled in the <input>
	$('textarea#comment').focus(function() {
		$('#submit').fadeIn();
		if($('input#email').val() && $('input#author').val() && $(".comment-info").css('display')==='none'){
			$('#small-author-avatar').html('<img src="' + get_gravatar($('input#email').val(),31) + '" /><b class="user-border"></b>');
			$('textarea#comment').css('left','35px');
			$('textarea#comment').css('width','535px');
			$('#small-author-avatar').show();
		};
	});
	//Display more item to fill in the form when some comments is typed in, if it's a new visitor 
	$('textarea#comment').keyup(function() {
		if( $('#small-author-avatar').css('display')==='none' && $('textarea#comment').val()){
			$(".comment-info").show();
		}else{
			$(".comment-info").hide();
		};
	});
	//When comment box lose focus, fade out the submit
	$('textarea#comment').blur(function() {
		if(!$('textarea#comment').val()){
			$('#submit').fadeOut();
		}
	});
	//Form check before submit the comment, auto focus on the blank item
	$('input#submit').click(function(event) {
		if(!$('input#author').val()){
			$('input#author').focus();
			event.preventDefault();
		}else if(!$('input#email').val()){
			$('input#email').focus();
			event.preventDefault();
		};
	});
};

//Incompatible with smoothscroll.
//$('.action-comment').click(function(event) {
//	$('textarea#comment').focus();
//});

//Global Variable Defined Here
//currentPjaxPosition used to save where pjax come from
var currentPjaxPosition, currentPjaxTarget;
//page should scroll to this height before load the new part
var pjaxReadyScrollHeight = 0;

/* Page Load part */

//Do a lot things when page loaded, should be called when timeline or article changed
function prepareDOM(){
	//Refact
	if($('#main').hasClass('index')){
		//Refact $('.index .article-title a').pjax
		$('.index .article-title a').pjax('#main',{timeout: 3000});
		
		titlechange();
		$(window).scroll(function () {
			if (timer) {
  		      clearTimeout(timer);
 		       timer = 0;
 		   }
 		   timer = setTimeout(titlechange, delay);
		});
		currentPjaxPosition = "index";
	}else if($('#main').hasClass('single')){
		//Set page title
		changePageTitle($('#main').find('.moments_header .avatar').prop('src'),$('#main').find('.moments_header .article-title').html(),$('#main').find('.moment-timestamp').attr('time'));
		//Set circle for first post
		if(!$('.next_post_link').html()) {
			$('.next_post_link').html("<div class='timeline-point'></div>");
		};
		//Refact $('nav.moments_nav a').pjax
		$('nav.moments_nav a').pjax('#sub-main', { timeout: 3000});
		
		$('section.widget_recent_entries a').each(function(){
			$(this).click(function(e){
				e.preventDefault();
			});
			$(this).pjax('#sub-main',{timeout: 3000});
		});
		
		currentPjaxPosition = "single";
		
		init_comment();
		
		//initial audio.js
		audiojs.events.ready(function() {
  	 		var as = audiojs.createAll();
	 	});
	}
	
	//Append geo map to post if exist 
	$('a.geolocation-link').each(function(){
		$(this).after('<div class="place-map" style="background: url(https://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Csize:mid%7C'+$(this).attr('name')+'&amp;zoom=11&amp;size=600x100&amp;sensor=false)"></div>').hide();
		$(this).parentsUntil('.moment-block').find('span.moment-author').after(' '+$(this).html());
	});
	//Add lightbox support for video.js video
	$('.video-js').each(function(){
		$(this).css({left:'-9999px',top: '-9999px',position:'absolute'});
		var e_video_id = 'box_' + Math.floor(Math.random()*111);
		$(this).attr('id',e_video_id);
		console.log($(this));
		var e_controller_id = e_video_id +'_controller';
/* 		$(this).find('.vjs-poster').attr({'width':'','height':''}); */
		if($(this).find('img.vjs-poster').length == 1){
			var imagebox = $(this).find('img.vjs-poster').clone(true);
			$(imagebox).css('height','auto').removeAttr('tabindex');
			console.log(imagebox);
			$(this).before('<button class="video_controller" id="'+ e_controller_id +'"><span class="overlay"></span>'+$(imagebox).prop('outerHTML') +'</button>');
		}else{
			$(this).before('<button id="'+ e_controller_id +'">Play Video</button>');
		}
		$('#'+e_controller_id).click(function(e){
			$('#'+e_video_id).lightbox_me({centered:true});
			e.preventDefault();
		})
	});
}
//Fade in the pre-hidden text, should be called after new article loaded
function display_text(){
	$('.text-pre-opacity-zero').css({ opacity:1 });
	$('.first-load-opacity-zero').css({ opacity:1 });
}
//Fade in the pre-hidden image, should be called after new article loaded
function display_image(){
	$('.image-pre-opacity-zero').css({ opacity:1 });
	$('.image-pre-opacity-zero-holder *').css({ opacity:1 });
}

//display image when window finishes all resource loading
$(window).load(function() {
	display_image();
})

//Fade unnecessary item before horizontal slide animation, should be called when article pjax request dispatched
var hide_before_slide = function(){
	$('#timeline').addClass('loading');
	$('div.timeline-arrow').css({ opacity:0 });
	$('#main nav.moments_nav').css({ opacity:0 });
	$('h2.text-pre-opacity-zero').css({ opacity:0 });
	$('.image-pre-opacity-zero-holder *').css({ opacity:0 });
}
var display_after_slide = function(){
	$('#timeline').removeClass('loading');
	$('div.timeline-arrow').css({ opacity:1 });
	$('#main nav.moments_nav').css({ opacity:1 });
	display_text();
	$('h2.text-pre-opacity-zero').css({ opacity:1 });
	display_image();
}

//Refact Slide Animation done without animate()
function slideTransition(){
	//left to right && right to left animation
	if( $('#main>article').attr('id')>$('#sub-main>article').attr('id') ){
		$('#main').css({ 'animation': 'article-center-left 1000ms forwards','-webkit-animation': 'article-center-left 1000ms forwards','-moz-animation': 'article-center-left 1000ms forwards','-ms-animation': 'article-center-left 1000ms forwards'});
		$('#sub-main').css({ 'animation': 'article-right-center 1000ms forwards','-webkit-animation': 'article-right-center 1000ms forwards','-moz-animation': 'article-right-center 1000ms forwards','-ms-animation': 'article-right-center 1000ms forwards'});
	}else{
		$('#main').css({ 'animation': 'article-center-right 1000ms forwards','-webkit-animation': 'article-center-right 1000ms forwards','-moz-animation': 'article-center-right 1000ms forwards','-ms-animation': 'article-center-right 1000ms forwards'});
		$('#sub-main').css({ 'animation': 'article-left-center 1000ms forwards','-webkit-animation': 'article-left-center 1000ms forwards','-moz-animation': 'article-left-center 1000ms forwards','-ms-animation': 'article-left-center 1000ms forwards'});
	}
}


//Refact bind all pjax event to document
$(document).on('pjax:beforeSend',function() { 
	//Single.php Navigation
	hide_before_slide();
	//Index.php to Single.php
	if($('#main').hasClass('index')){
		$('#timeline').removeClass('vertical').addClass('horizontal');
	}
}).on('pjax:start',     function() { 
	
}).on('pjax:end',       function() {  

}).on('pjax:error',     function() {  
	
}).on('pjax:timeout',   function() {  
	//Index.php to Single.php
	display_after_slide();
	$('#timeline').removeClass('loading');
	if($('#main').hasClass('index')){
  		$('#timeline').removeClass('horizontal').addClass('vertical');
  	}
}).on('pjax:complete',  function() {  

}).on('pjax:success',   function() {  
	if(currentPjaxPosition == 'single'){
		slideTransition();
	}else if(currentPjaxPosition == 'index'){ //Click the title and the page navigates from Index.php to Single.php
		//Mark that it's now a single page instead of an index page
		$('#main').removeClass('index').addClass('single').after('<div id="sub-main" role="main" class="single" style="opacity:0"></div>');
		prepareDOM();
		display_after_slide();
		init_comment();

	}
	
});

//change the title, avatar, time.
function changePageTitle(avatar,title,time) {
	console.log(time);
	if($('#page-title>h2').html() == title)return;
	$('#page-title>h2').addClass('opacity-zero');
	$('#page-title>img').addClass('opacity-zero');
	$('#clock').html(time);
	setTimeout(function(){
		$('#page-title>h2').html(title).removeClass('opacity-zero');
		$('#page-title>img').prop('src',avatar).removeClass('opacity-zero');
	},200)
}

/* Index.php: change the static title display as page scrolls */
var timer = 0,
    delay = 100; //you can tweak this value
var titlechange = function() {
    timer = 0;
    //all the stuff in your current scroll function
    var scrollPosition = $(window).scrollTop()+320;
	$('.index article').each(function(){
		if(scrollPosition > $(this).offset().top || scrollPosition == $(this).offset().top){
			if($(this).next().length){
				if(scrollPosition < $(this).next().offset().top){
					changePageTitle($(this).find('.moments_header .avatar').prop('src'),$(this).find('.moments_header .article-title').html(),$(this).find('.moment-timestamp').attr('time'));
				}
			}else{
				changePageTitle($(this).find('.moments_header .avatar').prop('src'),$(this).find('.moments_header .article-title').html(),$(this).find('.moment-timestamp').attr('time'));
			}
			
		}
	})
}


$(function() {
	prepareDOM();
	//Display the background after it's downloaded in the cache
	//TODO: set the background customizable
	$('<img/>').attr('src', 'http://xiaolife.com/wordpress/wp-content/themes/overpath/images/background.jpg').load(function() {
		$('.dimmer').css({opacity: 0.25});
	});
	$('div.timeline-arrow').css({ opacity:1 });
	display_text();

	//Listens to keyframe animation event so when pjax main animation finishes, do the trival things
	$('html').on('webkitAnimationEnd mozAnimationEnd oAnimationEnd MSAnimationEnd animationend', function(event){
		if(event.originalEvent.animationName == 'article-right-center' || event.originalEvent.animationName == 'article-left-center'){
			$('#main').attr("id","temp-sub-main");
			$('#sub-main').attr('id','main');
			$('#temp-sub-main').attr('id','sub-main');
			
			$('#sub-main').empty();
			$('#main').attr('style','');
			$('#sub-main').attr('style','');
			prepareDOM();
			//Set a very short time wait to avoid graphic blink in Safari
			setTimeout(display_after_slide,1);
		}
	})
	//Make the page smooth scroll, mainly for the comment button.
	$('html').smoothScroll();
});



var toggleSidebar = function(){
	$.pageslide({ direction: 'left' ,href: '#sidebar' });
}

//Animate and show timeline when browser load the script
$('#timeline').removeClass('pre_hide');


