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
        
//hide desktop menu dropdown on click outside
document.addEventListener('DOMContentLoaded', function() {
    // Get the dropdown element and the button that triggers it
    var dropdown = document.getElementById('collapseTwo');
    var button = document.querySelector('[data-bs-target="#collapseTwo"]');

    // Close the dropdown when clicking outside of it
    document.addEventListener('click', function(event) {
        var isClickInsideDropdown = dropdown.contains(event.target);
        var isClickOnButton = button.contains(event.target);

        if (!isClickInsideDropdown && !isClickOnButton) {
            // Clicked outside the dropdown and the button, hide the dropdown
            dropdown.classList.remove('show');
        }
    });
});

