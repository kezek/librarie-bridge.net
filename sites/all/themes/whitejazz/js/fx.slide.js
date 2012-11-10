            window.addEvent('domready', function(){
	$('toggle_container').setStyle('height','auto');
	var mySlide = new Fx.Slide('toggle_container',{duration:400}).hide();  //starts the panel in closed state
 
    //Show-Hide login panel when you click the link "Login" on top of the page
    $('toggle_button').addEvent('click', function(e){
		e = new Event(e);
		mySlide.toggle(); //show-hide login panel
		e.stop();
	});