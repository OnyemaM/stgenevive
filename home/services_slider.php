<div class="segment_container">
    <div class="scrolling_area">
    <div class="our_services_title_segment">
    <h2 class="fw-bold">
        Our Services
    </h2>
    <p>
       Explore our range of companionship and personal home care services.
    <p>
    </div>
    <div class="splide" role="group">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide scrolling_item" style="background-image:url('https://lavenduct.com/stghs/assets/children.jpg');">
			   <div class="slide_title d-flex align-items-end justify-content-start p-4">Children’s Choice Waiver</div> 
			</li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://lavenduct.com/stghs/assets/community.jpg');">
			    <div class="slide_title d-flex align-items-end justify-content-start p-4">
			        Community Choices Waiver
			        </div>
			</li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://lavenduct.com/stghs/assets/long_term.jpg');">
			    <div class="slide_title d-flex align-items-end justify-content-start p-4">Long-Term Personal Care</div>
			    </li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://lavenduct.com/stghs/assets/residential.jpg');">
			    <div class="slide_title d-flex align-items-end justify-content-start p-4">Residential Options Waiver</div>
			</li>
			<li class="splide__slide scrolling_item" style="background-image:url('https://lavenduct.com/stghs/assets/new_oppourtunities.jpg');">
			    <div class="slide_title d-flex align-items-end justify-content-start p-4">New Opportunities Waiver</div>
			</li>
		</ul>
  </div>
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
    perPage: 4,
    perMove: 1,
    autoplay: true,
    interval: 8000,
    updateOnMove: true,
    pagination: true,
    throttle: 300,
    breakpoints: {
      1440: {
         height:'400px',
        gap    : '2rem',
        perPage: 4,
        perMove: 1
      },
      991: {
         perPage: 3,
  perMove: 1
      },
      767: {
        gap    : '0.5rem',
        perPage: 2
      },
      400: {
         height:'450px',
        perPage: 1
      }
      
    }
} ).mount();

});


</script>