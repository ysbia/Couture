<section id="projects" class="content-section">
    <div class="section-heading">
        <h1>Recent<br><em>Works</em></h1>
        <p>Praesent pellentesque efficitur magna, 
        <br>sed pellentesque neque malesuada vitae.</p>
    </div>
    <div class="section-content">
        <div class="masonry">
            <div class="row">
                @if ($lastProducts) 
                    @foreach ($lastProducts as $lastProduct)                           
                        <div class="item" data-aos="fade-up"
                        data-aos-duration="3000">
                            <div class="col-md-4">
                            <a href="/storage/{{collect((json_decode($lastProduct->pictures)))->first()}}" data-lightbox="image"><img src="/storage/{{collect((json_decode($lastProduct->pictures)))->first()}}" alt="image 1"></a>
                            </div>
                        </div>
                    @endforeach                  
                @endif
            </div>
        </div>
    </div>            
</section>