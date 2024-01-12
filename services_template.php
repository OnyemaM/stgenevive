<!DOCTYPE html>
<html lang="en">

<!-- HEAD TAG-->    
<? include "head.php" ?>
<style>
    .services_ccw_segment_one{
        width:100%;
        min-height:350px;
        background:var(--stghcs-blue-one);
        background-size:cover;
        background-repeat:no-repeat;
        background-blend-mode: overlay, screen;
        background-position:center;
    }
    .services_ccw_segment_one_inner{
        display:inline;
        width:50%;
        min-height:600px;
        padding:7vw;
        float:left;
    }
    
    
    
    /*Segment Two*/
    .services_ccw_segment_two{
        width:100%;
        min-height:350px;
        background:white;
        padding:0 10%;
    }
    .services_ccw_segment_two_inner{
        position:relative;
        display:block;
        width:50%;
        min-height:50px;
        float:left;
    }
    
     /*Segment Three*/
    .services_ccw_segment_three{
        width:100%;
        min-height:350px;
        padding:0 20vw;
    }
    .services_ccw_segment_three_items{
        position:relative; width:23vw; background:white; height:14vw; border-radius:1vw; margin-bottom:3vw;
    }
    .services_ccw_segment_three_items_text{
        width:60%; position:absolute; font-size:1.3vw; font-weight:600; top:1.2vw; left:1.2vw;
    }
    .services_ccw_segment_three_items_imgs{
        position:absolute; height:70%; right:1.2vw; bottom:1.2vw;
    }
    
    /*segment central*/
    .central_three_services_item {
        position:relative;
        width: 17vw;
        height: 21vw;
        background: var(--stghcs-blue-one);
        margin-right: 10px;    /* Add some space between items */
        margin-bottom:50px;
    }
    .central_three_services_item_title{
        position:absolute; 
        background: linear-gradient(to top, var(--stghcs-blue-one), rgba(0, 0, 0, 0));
        width:100%; 
        height:60px; 
        bottom:0;
        font-size:1.2vw;
        color:white;
        font-weight:600;
        padding:4vw 1.3vw;
        line-height:1.2;
    }
    .segment_padding{
        padding:10vw 20vw;
    }
    .segment_images{
        width:80%;
    }
    .site_spacer{
        width:100%;
        height:10vw;
    }
    
    /*universals*/
    .services_item{
       font-size:16px; 
    }
    .services_item_number{
        padding:10px 14.5px;
        border-radius: 100px;
        background: #28C224;
        color: #FFF;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-transform: capitalize; 
        margin:10px;
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
        color:white;
        font-size: 42px;
        font-style: normal;
        font-weight: 800;
        line-height: normal;
        text-transform: capitalize; 
    }
    .services_sub_title_one{
        color:white;
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
        .float_on_mobile{
            float:left;
        }
        .hide_on_mobile{
        display:none;
    }
    .center_on_mobile{
        text-align:center;
    }

        .services_ccw_segment_one{
            padding-top:3vw;
            padding-bottom:3vw;
            min-height: 50px;
            height: auto;
            padding: 30px 0;
        }
        .services_ccw_segment_one_inner, .services_ccw_segment_two_inner{
            width:100%;
            float:none;
        }
        .services_title_one{
           font-size: 6vw;
           text-align:center;
        }
        .services_sub_title_one{
            font-size: 3vw;
            padding:0 3vw;
            text-align:center;
        }
        .cta_area{
            text-align:center;
        }
        .segment_images{
            width:70%;
            padding-bottom:40px;
        }
        .site_spacer{
            height:120px;
        }
        .site_spacer_extra{
            height: 180px;
        }
    }
    
     @media (max-width:767px){
    .services_ccw_segment_one{
             min-height:50px;
         }
    .services_ccw_segment_three{
    padding: 0 5%;
    }
    .services_ccw_segment_three_items{
      width:100%; height:200px; border-radius:5%; margin-bottom:20px;
    }
    .services_ccw_segment_three_items_text{
    font-size:15px; top:5%; left:5%;
    }
    .services_ccw_segment_three_items_imgs{
    height:70%; right:15px; bottom:15px;
    }
    .central_three_services_item {
        width: 100%;
        height: 290px;
        border-radius:10px;
    }
    .central_three_services_item_title{
        font-size:18px;
        padding:60px 20px;
        border-radius:10px;
    }
    .services_title_two{
        font-size:22px;
    }
    .services_sub_title_two {
        font-size:16px;
    }
    .services_text{
        padding-top:18px;
        font-size:14px;
    }
    .services_item{
       font-size:15px; 
    }
    .services_item_number{
        padding:7px 10px;
        font-size: 14px;
    }

    .segment_padding{
        padding:10vw 12vw;
    }
    .services_ccw_segment_two{
        padding:0 10%;
        margin-bottom:100px;
    }
         
     }   
    
</style>

<body>
<div class="main_wrapper_genevive bg_white">
<? include "top_bar.php"?>
<? include "services/central_one.php" ?>

<div class="site_spacer"></div>
<? include "services/central_two.php" ?>
<div class="site_spacer"></div>

<? include "services/central_three.php" ?>
<div class="site_spacer"></div>

<? include "services/central_four.php"?>

<? include "services/central_five.php"?>

<? include "widgets/faqs.php"?>
</div>


</body>