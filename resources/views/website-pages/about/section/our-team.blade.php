@php
$team = array(
    ['img'=>'assets/img/team/team-1.jpg','twitter'=>'#','facebook'=>'#','instagram'=>'#','linkedin'=>'#','name'=>'Walter White','section'=>'Web Development','par'=>
'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut'],
    ['img'=>'assets/img/team/team-2.jpg','twitter'=>'#','facebook'=>'#','instagram'=>'#','linkedin'=>'#','name'=>'Sarah Jhonson','section'=>'Marketing','par'=>
' Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus'],
    ['img'=>'assets/img/team/team-3.jpg','twitter'=>'#','facebook'=>'#','instagram'=>'#','linkedin'=>'#','name'=>'William Anderson','section'=>'Content','par'=>
' Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara'],

)
@endphp
  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Our Team</span>
        <h2>Our Team</h2>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        @foreach ($team as $member)
      
            @include('website-pages.about.section.team-member',[
                        'img' => $member['img'],
                        'twitter' => $member['twitter'],
                        'facebook' => $member['facebook'],
                        'instagram' => $member['instagram'],
                        'linkedin' => $member['linkedin'],
                        'name' => $member['name'],
                        'section' => $member['section'],
                        'par' => $member['par'],
                    ])
        @endforeach
      </div>

    </div>
  </section><!-- End Our Team Section -->