<style>
    .core_segment_one{
        position:relative;
        width:100%;
        min-height:350px;
        background:var(--stghcs-blue-one);
        background-size:cover;
        background-repeat:no-repeat;
        background-blend-mode: overlay, screen;
        background-position:bottom center;
        padding: 0 7vw 0 7vw;
    }
    .core_segment_one_inner{
        display:inline;
        width:50%;
        min-height:600px;
        float:left;
    }
    .index_image{
       width:200px;
       padding-bottom:20px;
    }
     @media (max-width:991px){
        .core_segment_one{
            padding-top:3vw;
            padding-bottom:3vw;
            min-height: 50px;
            height: auto;
            padding:7% 7% 3% 3%;
        }
        .core_segment_one_inner, .core_segment_two_inner{
            width:100%;
            float:none;
        }
     }
     
     @media (max-width:767px){
    .core_segment_one{
             min-height:50px;
             padding:0;
             background-blend-mode: screen;
             background-position: right 20% bottom 90%;
         }
    .core_segment_one_inner{
             bottom:0;
             padding:0;
             margin:0;
             position:relative;
         }
    .index_image{
       width:160px;
       padding-bottom:20px;
    }
    .core_title_one{
     font-size: 32px;
    }
    .core_sub_title_one{
        font-size: 14px;
        max-width:350px;
    }
    .cta_area{
        background-image:linear-gradient(#0000, var(--stghcs-blue-one));
        padding:30% 7% 7% 7%;
    }
     }
     
     @media (max-width:576px){
         .core_segment_one{
             min-height:50px;
         }
          .core_title_one{
     font-size: 28px;
    }
    .core_sub_title_one{
        font-size: 14px;
    }
    .cta_area{
        background-image:linear-gradient(#0000, var(--stghcs-blue-one));
        padding:70% 7% 7% 7%;
    }
     }
</style>

<div class="core_segment_one" style="background-image:url('https://lavenduct.com/stghs/assets/home_hero_two.jpg')">
    
    <div class="segment_container d-lg-flex align-items-center justify-content-center">
        <div class="core_segment_one_inner d-md-flex align-items-center justify-content-center">
        <div class="row">
        <div class="col-md-12 cta_area">
            <img class="index_image" src="https://lavenduct.com/stghs/assets/index_image_1a.png">
            <div class="core_title_one">Providing the care your loved ones always deserve.</div>
            <div class="core_sub_title_one mt-3">We uphold the Full Circle of Care, supporting dedicated care staff and the individuals they compassionately serve.</div>
            <button class="learn_more_inverted_btn mt-3">Learn More&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>
    </div>
    <div class="core_segment_one_inner"></div>
    </div>
    
    
    </div>