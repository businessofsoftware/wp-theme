

$(function(){
	$('#menu').slicknav( {prependTo: "nav .container-inner", label: "Menu"} );
});


$(function() {
    var $allVideos = $("iframe[src^='http://player.vimeo.com'], iframe[src^='http://www.youtube.com'], iframe[src^='http://youtube.com'], iframe[src^='https://docs.google.com'], iframe[src^='http://www.slideshare.net'], iframe[src^='http://blip.tv'], object, embed");

	$allVideos.each(function() {
	  $(this)
	    .attr('data-aspectRatio', this.height / this.width)
	    .removeAttr('height')
	    .removeAttr('width');
	});
	
	$(window).resize(function() {

	  	$allVideos.each(function() {
		    var el = $(this);
		   	var fluidEl = $(this).closest(".content-main");
	  		var newWidth = fluidEl.width();
		    el.width(newWidth).height(newWidth * el.attr('data-aspectRatio'));
	  });
	
	}).resize();
});

