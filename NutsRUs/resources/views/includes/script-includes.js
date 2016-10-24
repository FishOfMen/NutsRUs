$(document).ready(function(){

	$(".mobileIcon").click(function(){
		var stat = $(".box").css('display');
		if (stat == 'block'){
			$('.box').css('display', 'none');
			$('.mobileIcon').css('border', '0px solid #3e4e72');
			$('.mobileIcon').css('padding', '4px');
			jQuery(".dropdown-menu-content").hide();
			return;
		}
		if (stat == "none"){
			$('.box').css('display', 'block');
			$('.mobileIcon').css('border', '4px solid #3e4e72');
			$('.mobileIcon').css('padding', '0');
			return;
		}
	});
	var size = 535;
	$(window).resize(function() {	
		if($(window).width() >= size){
		$('.box').css('display', 'block');
		}
	});
	
	if($(window).width() >= size){
		$('.box').css('display', 'block');
		}
	if($(window).width() < size){
		$('.box').css('display', 'none');
		}
		
	$(window).resize(function() {	
		if($(window).width() < size){
		jQuery(".dropdown-menu-content").hide();
		$('.box').css('display', 'none');		
		$('.mobileIcon').css('padding', '4px');
		$('.mobileIcon').css('border', '0px solid #3e4e72');
		}
	});



	//hide the all of the element with class hidContent
	jQuery(".hidContent").hide();
	
	//hide the all of the element with class dropdown-menu-content
	jQuery(".dropdown-menu-content").hide();
	
	//toggle the component with class optionBox
	jQuery(".optionBox").click(function(){
		jQuery(this).next(".hidContent").slideToggle(600);
	});
		
	//toggle the components with class and rel of element clicked
	jQuery(".menu-title").click(function(){
		var whichClicked = $(this).attr('rel');
		var statOfWhichClicked = $("." + whichClicked).css('display');
		
		
		if (statOfWhichClicked == 'block'){
			$("." + whichClicked).slideToggle(200);
		}else if (statOfWhichClicked == 'none'){
			var statOf1 = $(".About-Clara").css('display');
			var statOf2 = $(".References").css('display');
			var statOf3 = $(".Post-Clara").css('display');
			var statOf4 = $(".About-The-Site").css('display');
						
			if (statOf1 == 'block'){
				$(".About-Clara").slideToggle(200);
			} else if (statOf2 == 'block'){
				$(".References").slideToggle(200);
			} else if (statOf3 == 'block'){
				$(".Post-Clara").slideToggle(200);
			} else if (statOf4 == 'block'){
				$(".About-The-Site").slideToggle(200);
			}
		
			$("." + whichClicked).slideToggle(200);
		}
	});
	
	//iframe java
    //Examples of how to assign the ColorBox event to elements
    $(".group1").colorbox({rel:'group1'});
    $(".group2").colorbox({rel:'group2', transition:"fade"});
    $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
    $(".group4").colorbox({rel:'group4', slideshow:true});
    $(".ajax").colorbox();
	
	if( /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	} else {
    $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
    $(".iframe").colorbox({iframe:true,fixed: true, width:"80%", height:"80%"});
    $(".iframeprint").colorbox({iframe:true, width:"720", height:"700"});
    $(".iframepdf").colorbox({iframe:true, innerWidth:800, innerHeight:650});
    $(".iframepdfshort").colorbox({iframe:true, innerWidth:800, innerHeight:500});
    $(".iframeshort").colorbox({iframe:true, innerWidth:800, innerHeight:500});
    $(".iframeshow").colorbox({rel:'iframeshow'});
	}
	
    $(".inline").colorbox({inline:true, width:"50%"});
    $(".callbacks").colorbox({
     onOpen:function(){ alert('onOpen: colorbox is about to open'); },
     onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
     onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
     onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
     onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
    });
	
    $('.non-retina').colorbox({rel:'group5', transition:'none'})
    $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
    
    //Example of preserving a JavaScript event for inline calls.
    $("#click").click(function(){ 
     $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
     return false;
    });	
});