// Start of Animate js //

// JavaScript Document

//Self Excuting Anonymous Function- use this. Prevents Global Variables

(function() {
	
	//console.log("Animate - It works");
	
	//variales
	
	var logoanimation = document.querySelector(".logo");
	//var mottoanimaiton = document.querySelector(".motto");
	
	//functions
	function init (){
		TweenMax.logo (logoanimation, 3, {opacity:0});
		//TweenMax.from (mottoanimaiton, 3, {delay:2, opacity:0});
	}
	
	
	//Listeners
		window.addEventListener('load',init,false);
		
		
})();



// End of animate js //

// icons js //

(function() {
	"use strict";
		//console.log("Social Media Icons");
		
		var iconSet = document.querySelectorAll(".socialIcons");
		
	

		function logClicked (e) {
			//console.log("SVG clicked: "+e.currentTarget.id);
			//e.currentTarget.classList.toggle("clickTrigger");
			//window.location.href = "http://www.google.ca" //opens in same window
			//window.open('http://www.google.com',"_blank"); // this works 
			if (e.currentTarget.id === "facebook") {
				window.open('https://www.facebook.com/markedwardlanderyou',"_blank");
			}else if (e.currentTarget.id === "twitter") {
				window.open('https://twitter.com/samurai71',"_blank");
			}else if (e.currentTarget.id === "linkedin") {
				window.open('https://www.linkedin.com/in/marklanderyou',"_blank");
			}else if (e.currentTarget.id === "behance") {
				window.open('https://www.behance.net/marklanderyou',"_blank");
			}
		}

		function logLoaded(e) {
			//console.log("svg loaded");
			var targetSVG = e.currentTarget.contentDocument;
			//console.log(targetSVG);
			var socialIcon = targetSVG.querySelector(".mainIcon");
			//console.log(socialIcon.id);
			socialIcon.addEventListener("click", logClicked, false);
		}

		for(var i=0; i<iconSet.length; i++) {
			iconSet[i].addEventListener("load", logLoaded, false);
		}

		// Facebook.addEventListener("click",faceBook,false);
		// linkedin.addEventListener("click",linkedIn,false);
		// twitter.addEventListener("click",Twitter,false);
		// behance.addEventListener("click",Behance,false); Don't use 
	
})();

// End of Icons js //

// Start of Google js //

(function() {
	"use strict";
		//console.log("Google Analytics - It Works");
		
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83358975-1', 'auto');
  ga('send', 'pageview');

	
})();

// End of Google js //

// Start of Facebook js //


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '310277112705215',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));



(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=310277112705215";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



// End of Facebook js //

// Start of Weather js //

var _plm = _plm || [];
  _plm.push(['_btn', 46617]); 
  _plm.push(['_loc','caon0383']);
  _plm.push(['location', document.location.host ]);
   (function(d,e,i) {
  if (d.getElementById(i)) return;
  var px = d.createElement(e);
  px.type = 'text/javascript';
  px.async = true;
  px.id = i;
  px.src = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/js/btn/pelm.js?orig=en_ca';
  var s = d.getElementsByTagName('script')[0];

  var py = d.createElement('link');
  py.rel = 'stylesheet'
  py.href = ('https:' == d.location.protocol ? 'https:' : 'http:') + '//widget.twnmm.com/styles/btn/styles.css'

  s.parentNode.insertBefore(px, s);
  s.parentNode.insertBefore(py, s);
})(document, 'script', 'plmxbtn');

// End of Weather js //

