// JavaScript Document

//Self Excuting Anonymous Function- use this. Prevents Global Variables

(function() {
	
	//console.log("Animate - It works");
	
	//variales
	
	var logoanimation = document.querySelector(".logo");
	//var mottoanimaiton = document.querySelector(".motto");
	
	//functions
	function init (){
		TweenMax.from (logoanimation, 3, {opacity:0});
		//TweenMax.from (mottoanimaiton, 3, {delay:2, opacity:0});
	}
	
	
	//Listeners
		window.addEventListener('load',init,false);
		
		
})();

