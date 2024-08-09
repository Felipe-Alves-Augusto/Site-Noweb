<div class="carousel">
    <div class="wrapper-carousel flex">
        <div class="swiper relative swiper-main">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
                @include('components.cardsCarousel')
            
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="buttons-slide">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
     
          
            <!-- If we need scrollbar -->
            
        </div><!--swiper-->
        <div class="img-static relative">
            <p class="absolute">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker.</p>
            <img src="{{asset('img/img-static.png')}}" >
        
        </div>

    </div>
</div>