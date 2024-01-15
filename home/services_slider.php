<div class="scrolling_area">
    <div class="our_services_title_segment">
    <div class="home_title_two">
        Our Services
    </div>
    <div class="home_sub_title_two" style="padding:0 10%; ">
       Explore our range of companionship and personal home care services.
    </div>
    </div>
    <div class="splide" role="group">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide scrolling_item" style="background-image:url('https://static.independent.co.uk/s3fs-public/thumbnails/image/2019/11/20/09/children-0.jpg');">
			   <div class="slide_title">Children’s Choice Waiver</div> 
			</li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://lottie.org/_next/image/?url=https%3A%2F%2Fapi.prd.lottie.org%2Fimages%2FAn_old_couple_smiling_37fd0fe4e9.webp&w=2048&q=75');">
			    <div class="slide_title">Community Choices Waiver</div>
			</li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://www.ywcaworks.org/sites/default/files/styles/large/public/2023-01/medical%20racism%20%282%29.png?itok=pKdlgDj2');">
			    <div class="slide_title">Long-Term Personal Care</div>
			    </li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://readcommonground.com/wp-content/uploads/2018/02/iStock-846388970.jpg');">
			    <div class="slide_title">Residential Options Waiver</div>
			</li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://content.fortune.com/wp-content/uploads/2016/09/scripps-health1.jpg');">
			    <div class="slide_title">Long-Term Personal Care</div>
			</li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI5OLnnwtzWVV3w1xNja4PBMYyOTARDZ-LIVLtAGQXlpCdjKNiZddNYAz_j7cLITT-90c&usqp=CAU');">
			    <div class="slide_title">Community Choices Waiver</div>
			</li>
		</ul>
  </div>
</div>
</div>

<script>
//slide one
document.addEventListener('DOMContentLoaded', function () {
  new Splide( '.splide',  {
  rewind: true,
  type: 'loop',
  arrows: false,
    perPage: 1,
    focus: 'left',
    autoplay: true,
    interval: 8000,
    flickMaxPages: 2,
    updateOnMove: true,
    pagination: true,
    padding: '30%',
    throttle: 300,
     breakpoints: {
      1440: {
        perPage: 1,
        padding: '30%'
      },
      1180: {
        perPage: 1,
        padding: '30%'
      },
      650: {
        perPage: 2,
        padding: '0'
      }
      
    }
} ).mount();

});


</script>