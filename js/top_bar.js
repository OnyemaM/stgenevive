    //vars: Menu Control Elements
    var mobileMenu = document.getElementById("stghcs_mobile_menu");
    var toggleCloseMenu = document.getElementById("close_stghcs_mobile_menu");
    var toggleOpenMenu = document.getElementById("open_stghcs_mobile_menu");
    var stghcsLogo = document.getElementById("stghcs_logo");
    
    //onclick: Menu Controls
    toggleCloseMenu.addEventListener("click", function(){
        manageMobileMenu("close");
    });
    toggleOpenMenu.addEventListener("click", function(){
        manageMobileMenu("open");
    });
    
    //function: Menu Controls
    function manageMobileMenu(state){
        
        if(state == 'open'){
        //display menu & animate into screen screen
        mobileMenu.style.display="block";
        gsap.set(".stghcs_mobile_menu", { x: mobileMenu.offsetWidth});
        gsap.to(".stghcs_mobile_menu", { x: 0, duration: 0.5});
        zIndexMenuToHighest();
        }
        if(state == 'close'){
        //animate menu off screen & hide    
        gsap.to(".stghcs_mobile_menu", { x: mobileMenu.offsetWidth, duration: 0.5,  onComplete: function(){mobileMenu.style.display="none"} });
        }
    }
    
    //hide menu on target width
    window.addEventListener("resize", function(){
        if(window.innerWidth > 450){
           gsap.to(".stghcs_mobile_menu", { x: mobileMenu.offsetWidth, duration: 0.5,  onComplete: function(){mobileMenu.style.display="none"} }); 
        }
    });
    
    
    //redirect to (target:Home)
    stghcsLogo.addEventListener("click", function(){
        window.location.replace("https://stgenevive.com");
    });
    
    
    //set mobile menu to highest 
    function zIndexMenuToHighest(){
        var highestZIndex = 0;
        var allElements = document.getElementsByTagName("*");

        for (var i = 0; i < allElements.length; i++) {
        var zIndex = window.getComputedStyle(allElements[i]).zIndex;
    
        // Parse the zIndex value as an integer (ignoring 'auto')
        var parsedZIndex = parseInt(zIndex, 10);
    
        if (!isNaN(parsedZIndex) && parsedZIndex > highestZIndex) {
        highestZIndex = parsedZIndex;
        
        mobileMenu.style.zIndex = highestZIndex + 1;
        }
    }
        }
