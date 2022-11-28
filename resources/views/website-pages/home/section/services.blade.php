@php
$cards = [
    [
        'img' => 'assets/img/storage-service.jpg',
        'title' => 'Storage',
        'description' => 'Cumque eos in qui numquam. Aut aspernatur perferendis sed atque quia voluptas quisquam 
                        repellendus temporibus itaqueofficiis odit',
    ],
    [
        'img' => 'assets/img/logistics-service.jpg',
        'title' => 'Logistics',
        'description' => 'Asperiores provident dolor accusamus pariatur dolore nam id 
        audantium ut et iure incidunt molestiae dolor ipsam ducimus occaecati nisi',
    ],
    [
        'img' => 'assets/img/cargo-service.jpg',
        'title' => 'Cargo',
        'description' => 'Dicta quam similique quia architecto eos nisi aut ratione aut ipsum reiciendis 
        sit doloremque oluptatem aut et molestiae ut et nihil',
    ],
    [
        'img' => 'assets/img/trucking-service.jpg',
        'title' => 'Trucking',
        'description' => 'Dicta quam similique quia architecto eos nisi aut ratione aut ipsum 
        reiciendis sit doloremque oluptatem aut et molestiae ut et nihil',
    ],
    [
        'img' => 'assets/img/packaging-service.jpg',
        'title' => 'Packaging',
        'description' => 'Illo consequuntur quisquam delectus praesentium modi dignissimos facere 
        vel cum onsequuntur maiores beatae consequatur magni voluptates',
    ],
    [
        'img' => 'assets/img/warehousing-service.jpg',
        'title' => 'Warehousing',
        'description' => 'Quas assumenda non occaecati molestiae. In aut earum sed natus eatae in vero. 
        Ab modi quisquam aut nostrum unde et qui est non quo nulla',
    ],
];
@endphp
  
  
  <!-- ======= Services Section ======= -->
  <section id="service" class="services pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Our Services</span>
        <h2>Our Services</h2>

      </div>

      <div class="row gy-4">

              @foreach ( $cards as $card )
              @include('website-pages.home.section.card-serveces', [
                'img' => $card['img'],
                'title' => $card['title'],
                'description' => $card['description'],
            ])
              @endforeach
           
              
          </div>
        </div><!-- End Card Item -->



      </div>

    </div>
  </section><!-- End Services Section -->