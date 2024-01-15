<div class="stghcs_slide_show"> 
<!--HELLO Dennis-->
<!--Core Attribute Are:
1. data-title
2. data-sub (subtitle)
3. data-message 
4. data-link
-->
    
    <div class="stghcs_slide_show_image_area sss_height">
        <img id="" src="https://ichef.bbci.co.uk/news/976/cpsprodpb/D8B9/production/_121018455_gettyimages-577003673.jpg" class="stghcs_slide_show_image sss_height" data-title="Our Story So Good " data-sub="In every hour of the day" data-message="Energize your day with a mix of cardio and strength exercises. A brisk walk or jog combined with body weight exercises can do wonders for your overall health." data-link="https://cnn.com">
        
        <img id="" src="https://t4.ftcdn.net/jpg/00/66/01/29/360_F_66012928_ztFfdS8dnLgghWKWxrDOH8FfhrzAkI2Z.jpg" class="stghcs_slide_show_image sss_height" data-title="Our Journey So Far " data-sub="In every part of the Way" data-message="Join us as we take a thrilling ride through the legacy of the Dodge Challenger, celebrating its indomitable spirit and the timeless allure that continues to make the Dodge Challenger remains an icon of American automotive excellence." data-link="https://lavenduct.com">
        
        <img id="" src="https://media.istockphoto.com/id/1198224204/photo/portrait-of-female-nurse-using-tablet-at-hospital.jpg?s=612x612&w=0&k=20&c=JoEUaKmCE6N6E5ew4nno_7qBcdl0O8sm6pf5sythyjY=" class="stghcs_slide_show_image sss_height" data-title="A Fresh Start" data-sub="My First Day at STGHCS" data-message="Hear me out. We take a thrilling ride through the legacy of the Dodge Challenger, celebrating its indomitable spirit and the timeless allure that continues to make the Dodge Challenger remains an icon of American automotive excellence." data-link="https://lavenduct.com">
       
    <div class="stghcs_slide_show_control">
        <button class="stghcs_slide_show_control_btns" id="slide_prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="stghcs_slide_show_control_btns" id="slide_next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
    </div>
    <div class="stghcs_slide_show_text_area d-md-flex align-items-center justify-content-start">
    <div class="row">
        <div class="col-12 stghcs_slide_show_text_title" id="slide_title">Our Journey So Far </div>
        <div class="col-12 stghcs_slide_show_text_sub_title" id="slide_sub">In every part of the Way</div>
        <div class="col-12 stghcs_slide_show_text_message" id="slide_message">Energize your day with a mix  of cardio and strength exercises. A brisk walk or jog combined with body weight exercises can do wonders for your overall health.</div>
        <div class="col-12 stghcs_slide_show_cta" >
            <button class="learn_more_btn" id="stghcs_slide_btn">Learn More <i class="fa-solid fa-angle-right"></i></button>
            </div>
        
    </div>
    </div>

</div>

   <script>
        document.addEventListener('DOMContentLoaded', function () {
    var stghcs_slideNext = document.getElementById('slide_next');
    var stghcs_slidePrev = document.getElementById('slide_prev');
    var stghcs_slideImages = document.getElementsByClassName("stghcs_slide_show_image");
    var stghcs_slideTitle = document.getElementById('slide_title');
    var stghcs_slideSub = document.getElementById('slide_sub');
    var stghcs_slideMessage = document.getElementById('slide_message');
    var stghcs_btn = document.getElementById('stghcs_slide_btn');
    var stghcs_activeLink;
    var currentIndex = 1;
    var count = 0;
    

    // Hide all slide imgs & Generate IDs
    Array.from(stghcs_slideImages).forEach(function (image){
        count = count + 1;
        gsap.set(image, { duration: 1, x: "0", opacity: 0 , x:"100%"});
        image.setAttribute("id", "slider_" + count);
    });

    // Display the first slide img
    gsap.to("#slider_"+currentIndex, { duration: 1, opacity: 1, x:"0" }); 
   

    // On click next
    stghcs_slideNext.addEventListener('click', function () {
        
        var nextSlide = currentIndex + 1;//Next Slide
        
        //If next slide is not attainable, set index to 0
        if(nextSlide > stghcs_slideImages.length){
            currentIndex = 0;
        }
        
        // Loop back to the first slide
        if(currentIndex == 0){
            gsap.set("#slider_1", {  x:"100%" });
            gsap.to("#slider_1", { duration: 1, opacity: 1, x:"0"});
            gsap.to("#slider_" + stghcs_slideImages.length, { duration: 1, opacity: 1, x:"-100%"});
            gsap.to("#slider_" + stghcs_slideImages.length, { duration: 1, opacity: 0});
            stghcs_slideTitle.textContent = slideData(1).title;
            stghcs_slideSub.textContent = slideData(1).subTitle;
            stghcs_slideMessage.textContent = slideData(1).message;
            currentIndex = 1;
            return;
        }
        
        
        //fade out current slide
        gsap.to("#slider_"+currentIndex, { duration: 1, opacity: 0 , x:"-100%"});
        
        //fade in current slide
        gsap.set("#slider_"+nextSlide, {  x:"100%" });
        gsap.to("#slider_"+nextSlide, { duration: 1, opacity:1 , x:"0" });
        
        
        
        stghcs_slideTitle.textContent = slideData(nextSlide).title;
        stghcs_slideSub.textContent = slideData(nextSlide).subTitle;
        stghcs_slideMessage.textContent = slideData(nextSlide).message;
       


        //
        
        
        //
        currentIndex= currentIndex + 1;
    });
    
    
    
    
    //on click previous
    stghcs_slidePrev.addEventListener('click', function () {
        
        var prevSlide = currentIndex - 1;//Prev Slide
        
        // Loop back to the last slide
        if(prevSlide <= 0){
            currentIndex = stghcs_slideImages.length;
            gsap.to("#slider_1", { duration: 1, opacity: 0, x:"100%"});
            gsap.set("#slider_" + stghcs_slideImages.length, { duration: 1, opacity: 0, x:"-100%"});
            gsap.to("#slider_" + stghcs_slideImages.length, { duration: 1, opacity: 1, x:"0"});
            stghcs_slideTitle.textContent = slideData(stghcs_slideImages.length).title;
            stghcs_slideSub.textContent = slideData(stghcs_slideImages.length).subTitle;
            stghcs_slideMessage.textContent = slideData(stghcs_slideImages.length).message;
            currentIndex = stghcs_slideImages.length;
            return;
        }
        
        
        //fade out current slide
        gsap.to("#slider_"+currentIndex, { duration: 1, opacity: 0 , x:"100%"});
        
        //fade in current slide
        gsap.set("#slider_"+prevSlide, {  x:"-100%" });
        gsap.to("#slider_"+prevSlide, { duration: 1, opacity:1 , x:"0" });
        
        
        
        stghcs_slideTitle.textContent = slideData(prevSlide).title;
        stghcs_slideSub.textContent = slideData(prevSlide).subTitle;
        stghcs_slideMessage.textContent = slideData(prevSlide).message;
       


        //
        
        
        //
        currentIndex= currentIndex - 1;
    });
    
    
    
    //return text data
    function slideData(index){
        //index --> nextSlide
        
        // Update text
        var title = document.getElementById("slider_" + index).getAttribute("data-title");
        var sub = document.getElementById("slider_" + index).getAttribute("data-sub");
        var message = document.getElementById("slider_" + index).getAttribute("data-message");
        var link = document.getElementById("slider_" + index).getAttribute("data-link");
      
        gsap.set(stghcs_slideTitle, { opacity: 0, y:"100%"});
        gsap.set(stghcs_slideSub, {  opacity: 0, y:"100%" });
        gsap.set(stghcs_slideMessage, { opacity: 0, y:"50%" });
        gsap.set(stghcs_btn, {opacity:0, y:"100%"});
        gsap.to(stghcs_slideTitle, { duration: 0.5, opacity: 1, y:"0" }).delay(.2);
        gsap.to(stghcs_slideSub, { duration: 0.5, opacity: 1, y:"0" }).delay(.4);
        gsap.to(stghcs_slideMessage, { duration: 0.5, opacity: 1, y:"0" }).delay(.6);
        gsap.to(stghcs_btn, {duration: 0.5, opacity:1, y:"0" }).delay(.4);
        
        return { title: title, subTitle: sub, message: message, link: link}
    }
});


//stghcs slideshow setHeight function
function setSlideShowHeight() {
    // Get the height of the slide show text area
    var slideShowHeight = document.querySelector(".stghcs_slide_show_text_area").offsetHeight;
    
    // Get all elements to resize
    var elementsToResize = document.querySelectorAll(".sss_height");

    // Loop through each element and set its height
    elementsToResize.forEach(function(element) {
        element.style.height = slideShowHeight + "px";
    });
    
    //set parent slideshow height
    document.querySelector(".stghcs_slide_show").style.height = (slideShowHeight+ 150) + "px"
}

//call
setSlideShowHeight();

//on window resize
window.addEventListener('resize', function() {
    setSlideShowHeight(); 
});
    </script>