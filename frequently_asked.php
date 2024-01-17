<!DOCTYPE html>
<html lang="en">

<!-- HEAD TAG-->    
<? include "head.php" ?>
<style>
    .faq_page_segment_one{
        width:100%;
        min-height:100px;
        background:#D8E7FF;
        padding:2vw 7vw;
        line-height:1.2;
    }
    .faq_page_text_one{
        font-size:3vw;
        font-weight:800;
    }
    .faq_page_text_two{
        font-size:1.3vw;
        font-weight:300;
    }
    .faq_page_segment_one_image{
        width:70%;
    }
    .faq_page_segment_one_image_mobile{
        display:none;
        width:70%;
    }
    .faq_page_segment_two{
        width:100%;
        min-height:100px;
        background:#eee;
    }
    .faq_page_switch_category_area{
        position:relative:
        width:100%;
        padding-top:50px;
    }
    .faq_page_switch_category{
        position:relative;
        width:auto;
        max-width:320px;
        background:#dddddd;
        margin:0 auto;
        border-radius:10px;
        padding:10px;
    }
    .faq_category_btn{
        background:white; 
        color:var(--stghcs-blue-one);
        border:none;
        padding: 7px 15px;
        font-size:1rem;
        font-weight:400;
        border-radius:7px;
        min-width:140px;
    }
    .faq_active_btn{
      color:white;
      background:var(--stghcs-blue-one);
      font-weight:600;
    }
    
    #faqs_careers, #faqs_health{
        display:none;
    }
    
    @media (max-width:767px){
    .faq_page_segment_one{
        padding:7vw 7vw;
        text-align:center;
    }
       
     .faq_page_text_one{
        font-size:7vw;
    }
    .faq_page_text_two{
        font-size:3.2vw;
    }   
    .faq_page_segment_one_image{
        display:none;
    }  
    .faq_page_segment_one_image_mobile{
        display:inline;
    }
    }
    
    @media (max-width:400px){
    .faq_page_segment_one{
        padding:5%;
    }
        
     .faq_page_text_one{
        font-size:8vw;
    }
    .faq_page_text_two{
        font-size:3vw;
    }
    .faq_page_switch_category{
        max-width:290px;
        padding:5px;
    }
    .faq_category_btn{
        padding: 7px 15px;
        font-size:0.8rem;
        min-width:130px;
    }
    
    }
    
    
    
</style>

<body>
<div class="main_wrapper_genevive bg_white">
    <? include "top_bar.php"?>
    
    <? include "faqs/faq_one.php"?>
    
    <div class="faq_page_segment_two">
     <? include "faqs/faq_two_switch.php"?>   
     <? include "payload/faq_careers.php"?>
     <? include "payload/faq_health.php"?>
     <? include "widget/footer.php"?>
    </div>

</div>

<script>
    var faqCareers = document.getElementById("faqs_careers");
    var faqHealth = document.getElementById("faqs_health");
    var allFAQS = document.getElementsByClassName("faq-group");
    var allFAQBTNs = document.getElementsByClassName("faq_category_btn");
    
    //on click --> show FAQ Healthcare
    document.getElementById("healthcare_faqs_btn").addEventListener("click", showHealthcare);
    
    //on click --> show FAQ Careers
     document.getElementById("career_faqs_btn").addEventListener("click", showCareers);
    
    function setActiveFaqBTN(btn){
        Array.from(allFAQBTNs).forEach(function (button){
        button.classList.remove("faq_active_btn");
        });
        
        if(btn){
           btn .classList.add("faq_active_btn");
        }
    }
    
    //show careers
    function showCareers(btn){
         setActiveFaqBTN();
         showFAQS(faqCareers, allFAQS);
         
         setStateByURL("careers");
      
        if(btn.id!==undefined){
        btn.classList.add("faq_active_btn"); 
        }else{
        this.classList.add("faq_active_btn");
        }
         }
         
      
      //show healthcare   
    function showHealthcare(btn){
        setActiveFaqBTN();
        showFAQS(faqHealth, allFAQS);
        
        setStateByURL("healthcare");
        
       if(btn.id!==undefined){
        btn.classList.add("faq_active_btn"); 
        }else{
        this.classList.add("faq_active_btn");
        }
    }
    
    //
    function showFAQS(element, allElements){
        //show element all elements
        if(element){
         Array.from(allElements).forEach(function (group){
        group.style.display = "none";
        });
        
        
        
        //show element
        element.style.display = "block";
        gsap.set(element, {opacity: 0 });
        gsap.to(element, { duration: 1, opacity: 1 });
        
        }
    }
    
   // set state
function setStateByURL(value) {
    var currentUrl = window.location.href;
    var url = new URL(currentUrl);
    url.searchParams.set('state', value);
    var newUrl = url.toString();
    window.history.pushState({ path: newUrl }, '', newUrl);
}

// set state
function setStateFromURL() {
    var currentUrl = window.location.href;
    var url = new URL(currentUrl);
    var stateValue = url.searchParams.get('state');

    if (stateValue === 'careers') {
        showCareers(document.getElementById("career_faqs_btn"));
    } else if (stateValue === 'healthcare') {
        showHealthcare(document.getElementById("healthcare_faqs_btn"));
    } else {
        // Handle unexpected state values or show a default state
        showHealthcare(document.getElementById("healthcare_faqs_btn"));
    }
}

// on load render page based on state
setStateFromURL();

// Listen for popstate
window.addEventListener('popstate', function(event) {
    if (event.state !== null) {
    var currentUrl = window.location.href;
    var url = new URL(currentUrl);   
    var stateValue = url.searchParams.get('state');

    if (stateValue === 'careers') {
        showFAQS(faqCareers, allFAQS);
        setActiveFaqBTN(document.getElementById("career_faqs_btn"));
    } else if (stateValue === 'healthcare') {
        showFAQS(faqHealth, allFAQS);
        setActiveFaqBTN(document.getElementById("healthcare_faqs_btn"));
        
    }
       
    }
});

    
    
</script>

</body>