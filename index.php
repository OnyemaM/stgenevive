<!DOCTYPE html>
<html lang="en">

<!-- HEAD TAG-->    
<? include "head.php" ?>


<body>
<!--TOP BAR (Contains JS)-->
<div class="main_wrapper_genevive bg_white">
<? include "top_bar.php" ?>

<style>
    /*titles*/
    .home_title_one{
        color:white;
        font-size: 42px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-transform: capitalize; 
    }
    .home_sub_title_one{
        color:white;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .home_sub_title_two{
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    .home_title_two{
        font-size: 32px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }
    
    
    a {
	color: #0d6efd;
	text-decoration: none !important;
    }
    .learn_more_inverted_btn{
        padding:7px 0; background:none; border:none; color:white; font-weight:700;
    }
    .learn_more_btn{
        padding:7px 0; background:white; border:none; color:var(--stghcs-blue-one); font-weight:700;
    }
    .home_header{
        width:100%; height:auto; padding: 5vw 5%; background:var(--stghcs-blue-one);
    }
    .home_header_image_area{
        width:20vw; height:100%
    }
    .home_header_text{
        display:block; font-size:3vw; color:white; font-weight:300;  margin-left:2vw; line-height:1.2;
    }
    .scrolling_item {
        position:relative;
        width: 230px;
        height: 350px;
        background: #dddddd;
        margin-right: 10px;    /* Add some space between items */
        background-size:cover;
        background-position: center;
    }

    .scrolling_area {
        position: relative;
        width: 100%;
        height: auto;
        background: white;
        padding: 100px 50px;
    }
    
    .slide_title{
        position:absolute; 
        background: linear-gradient(to top, var(--stghcs-blue-one), rgba(0, 0, 0, 0));
        width:100%; 
        height:60px; 
        bottom:0;
        font-size:16px;
        color:white;
        font-weight:600;
        padding:10px;
        line-height:1.2;
    }
    .splide__pagination {
        position:absolute;
        bottom:-30px;
    }
     .splide__pagination__page.is-active {
    background-color: var(--stghcs-blue-one);
}

     .stghcs_slide_show{
        position:relative; width:100%; height:auto; box-sizing:border-box; 
        margin-top:200px; margin-bottom:200px;
     }
     .stghcs_slide_show_text_area{
         position:absolute; width:45%; height:auto; min-height:460px; background:white; overflow:hidden;
         padding: 6vw 6vw; margin:0;
     }
        .stghcs_slide_show_image_area{
            position:absolute;  display:flex; width:55vw; min-height:460px;  height:auto; background:#eeeeee; top:0;
            right:0;
        }
        .stghcs_slide_show_image{
            position:absolute;
           width: 100%;
            min-width: 100%;
            object-fit: cover; width:100%;
        }
    .stghcs_slide_show_control{
        position:absolute; width:100%; height:40px; padding-left:20px; bottom:10px;
    }
    .stghcs_slide_show_control_btns{
        border:none;
        padding:7px 14px;
        background:white;
        color:var(--stghcs-blue-one);
        
    }
    
    .stghcs_slide_show_text_title{
        font-size:1.6rem;
        font-weight:700;
        line-height: 1.2;
    }
    .stghcs_slide_show_text_sub_title{
        font-size:1.3rem;
        font-weight:400;
        line-height:1.2;
    }
    .stghcs_slide_show_text_message{
        font-size:0.9rem;
        font-weight:400;
        line-height:30px;
        line-height:1.4;
        margin-top:2rem;
    }
    .stghcs_slide_show_cta{
        margin-top:2rem;
    }
    .blog_area{
        position:relative;
        display:block;
        width:100%; height:auto; 
        background:var(--stghcs-blue-one);
        background-image:url('https://lavenduct.com/stghs/assets/image_central_one.png');
        background-attachment: fixed;
        background-size:cover;
        background-position: center;
        background-blend-mode: overlay, screen;
        margin-top:120px;
        padding:100px;
    }
    .blog_item_one{
        position:relative; width:100%; height:auto; background:white; margin-bottom:50px; box-sizing:border-box; padding:4vw;
    }
    .blog_item_two{
       position:relative;  width:100%; height:auto; background:white; bottom:0;
       box-sizing:border-box; padding:4vw;
    }
    .blog_item_three{
        position:relative; width:calc(100% - 20px); height:100%; background:white; margin-left:20px; box-sizing:border-box; padding:5vw;
    }
    .video_area{
        position:relative;
        display:block;
        width:100%; height:auto; background:var(--stghcs-blue-one);
        margin-top:120px;
    }
    .segment_title{
        font-size:2rem;
        font-weight:700;
        line-height: 1.2;
    }
    .video_player_placeHolder {
    position: relative;
    width: 70vw;
    max-width: 800px; 
    background: black;
    border-radius: 5vw;
    margin: 0 auto;
    aspect-ratio: 16/9;
    background-size:cover;
    background-position: center; 
    overflow: hidden; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.video_player_placeHolder::before {
    content: '\25B6'; 
    font-size: 4rem;
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;
}


.video_player_placeHolder:hover::before {
    text-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
}

    /*.video_player_button{
        position:relative; width:10vw; height:10vw; background:#0000001e;  top:calc(50% - 5vw); margin:0 auto; color:white; font-size:7vw; text-align:center; line-height:10vw; border-radius:20%; cursor:pointer; 
    }*/
    .video_title_segment, .our_services_title_segment{
        width:100%; height:auto; background:white; text-align:center; padding-bottom:30px;
    }
    .video_bottom_area{
        width:100%; height:25vw; var(--stghcs-blue-one);
    }
    @media (max-width:1300px){
        .stghcs_slide_show_text_title{
            font-size:2rem;
        }
        .stghcs_slide_show_text_sub_title{
            font-size:1.4rem;
        }
        .stghcs_slide_show_text_message{
            font-size:.9rem;
        }
    }
    @media (max-width:1080px){
        .stghcs_slide_show_text_title{
            font-size:1.8rem;
        }
        .stghcs_slide_show_text_sub_title{
            font-size:1.2rem;
        }
        .stghcs_slide_show_text_message{
            font-size:.8rem;
        }
    }
    @media (max-width:1000px){
        .stghcs_slide_show_text_area{
            width:400px;
        }
        .stghcs_slide_show_image_area{
            width:calc(100% - 400px);
        }
    }
    @media(max-width:991px){
        .blog_area{
           padding:50px;
        }
        .blog_item_three {
            width:100%;
            height:auto;
            margin:0;
            margin-top:50px;
        }
    }
    @media (max-width:800px){
        
    /*titles*/
    .home_title_one{
        font-size: 32px;
    }
    .home_sub_title_one{
        font-size: 18px;
    }
    .home_sub_title_two{
        font-size: 16px;
    }
    .home_title_two{
        font-size: 28px;
        font-style: normal;
    }
    
    .scrolling_area {
        padding: 70px 0;
    }
    
    
        .stghcs_slide_show_text_area{
            position:relative;
            width:100%;
            /*text-align:center;*/
            padding: 30px; 
        }
        .stghcs_slide_show_image_area{
            position:relative;
            width:100%;
            
        }
        .stghcs_slide_show_text_message{
            margin-top:15px;
        }
        
        
        
       .blog_item_one, .blog_item_two, .blog_item_three{
           width:100%;
       }
       .video_player_placeHolder{
           width:90vw;
       }
    }
    
    @media (max-width:600px){
         /*titles*/
    .home_title_one{
        font-size: 28px;
    }
    .home_sub_title_one{
        font-size: 16px;
    }
    .home_sub_title_two{
        font-size: 16px;
    }
    .home_title_two{
        font-size: 22px;
        font-style: normal;
    }
    
    /*slide show*/
    .stghcs_slide_show_text_area{
            min-height:360px;
        }
    .stghcs_slide_show_image_area{
            min-height:360px;
            
        }
    
    /*segs*/
    .video_title_segment, .blog_area, .our_services_title_segment{
      padding-left:5%;
      padding-right:5%;  
    }
    }
    
    @media (max-width:440px){
        .stghcs_slide_show_text_title{
            font-size:1.5rem;
        }
        .stghcs_slide_show_text_sub_title{
            font-size:1.1rem;
        }
        .stghcs_slide_show_text_message{
            font-size:.8rem;
        }
        .video_bottom_area{
            height:40vw;
        }
         /*slide show*/
    .stghcs_slide_show_text_area{
            min-height:280px;
        }
    .stghcs_slide_show_image_area{
            min-height:280px;
            
        }
    }
    
</style>

<? include 'home/temporary_header.php'?>
<? include 'home/services_slider.php'?>
<? include 'home/sliding_blog_area_one.php'?>
<? include 'home/blog_area_two.php'?>
<? include 'home/video_seg.php'?>
<? include 'widget/footer.php'?>


</div>


</body>