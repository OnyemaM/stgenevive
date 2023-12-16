function createTransition(appendTargetID,callback,parameter){
    
    // Create a new swiperMan
    var swipeElement = document.createElement('div');
    
    // Set the background color to white
    swipeElement.style.backgroundColor = 'var(--stghcs-blue-pale)';
    swipeElement.style.position = 'absolute';
    swipeElement.style.width = '100%';
    swipeElement.style.height = '0';
    swipeElement.style.top = '0';
    swipeElement.style.left = '0';
    swipeElement.style.padding = '0 20px';
    swipeElement.id = "swiper";
    swipeElement.style.color="var(--stghcs-blue-one)";
    
    // Find the highest z-index value
    var elements = document.getElementsByTagName('*');
    var highestZIndex = 0;
    
    for (var i = 0; i < elements.length; i++) {
      var zIndex = parseInt(window.getComputedStyle(elements[i]).getPropertyValue('z-index'));
      if (zIndex && zIndex > highestZIndex) {
        highestZIndex = zIndex;
      }
    }
    
    // Increment the highest z-index value by 1
    var nextZIndex = highestZIndex + 1;
    swipeElement.style.zIndex = nextZIndex;
    
    // Append the div element to the document body
    document.getElementById(appendTargetID).appendChild(swipeElement);
    
    //animate swipe up
    var swiperMan = document.getElementById('swiper');
    gsap.to(swiperMan, { duration: 0.5, ease: Expo. easeOutIn, height: "100%", background:"#d6e3ff",onComplete: function(){
        
        //make the callback param a function and call it
        var hook = callback;
        if(typeof hook === 'function'){
        
        //callback with set params
        hook(parameter);
        
        }
        
    }}).delay(0.5);
    }