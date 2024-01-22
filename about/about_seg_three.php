<style>
    
    /*Segment Two*/
    .services_ccw_segment_two{
        width:100%;
        min-height:350px;
        background:white;
        padding:var(--stghcs-site-padding);
    }
    .segment_images{
	width: 100%;
	min-height:450px;
	 object-fit: cover;
    }
    .about_sub_segment{
     padding:var(--stghcs-sub-segment-padding);   
    }
    /*btns*/
    .learn_more_inverted_btn{
        padding:7px 0; background:none; border:none; color:white; font-weight:700;
    }
    .learn_more_btn{
        padding:7px 0; border:none;  background:none; color:var(--stghcs-blue-one); font-weight:700;
    }
    
    /*Titles*/
    .services_title_one{
        color: #172441;
        font-size: 42px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-transform: capitalize; 
    }
    .services_sub_title_one{
        color: #172441;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .services_sub_title_two{
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .services_title_two{
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
        
    /*Break Point 991*/
    @media (max-width:991px){
        .show_on_991{
            display:block;
        }
        .services_title_one{
           font-size: 6vw;
        }
        .services_sub_title_one{
            font-size: 3vw;
            padding:0 3vw;
        }
        .about_sub_segment{
     padding:50px 0 50px 0;   
    }
    }
    
     @media (max-width:767px){
    .about_sub_segment{
     padding:40px 0 40px 0;   
    }
         
     }   
    
</style>
<div class="segment_container d-lg-flex align-items-center justify-content-center">
<div class="services_ccw_segment_two d-lg-flex align-items-center justify-content-center">
    <div class="row d-flex align-items-center justify-content-center ">
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <img class="segment_images" src="https://lavenduct.com/stghs/assets/dsws.jpg">
    </div>
    <div class="col-lg-6">
        <div class="row about_sub_segment">
            <div class="col-12 services_sub_title_two">Nurturing Care Champions</div>
            <div class="col-12 mb-2">
                <h2>Uplifting care workers in their careers</h2></div>
            <div class="col-12">
                With over 20 years of experience, we value our support workers' hard work. We provide continuous training for confidence and career growth. Emphasizing freedom and flexibility, we offer a gig-style working arrangement with better pay, understanding the importance of your personal life and family.
            </div>
            <div class="col-12 mt-3 center_on_mobile">
            <button class="learn_more_btn">Learn More <i class="fa-solid fa-angle-right"></i></button>
        </div>
        </div>
    </div>
    </div> 
    
</div>
</div>