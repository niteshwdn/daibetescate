
<?php get_header() 

//Template Name:Home Page

?>


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <?php the_post_thumbnail('full', ['alt' => get_the_title(), 'data-aos' => 'fade-in']); ?>


      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>WELCOME TO DAIBETESCARE</h2>
          <p>We spread diabetes awareness and guide people toward healthier lives.</p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Why Choose Diabetes?</h3>
              <p>
                Choosing awareness about diabetes means early detection, lifestyle changes, and timely treatment. Proper care, balanced diet, and regular checkups help prevent complications and ensure a healthier, active, and happy life.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Diabetes Awareness</h4>
                    <p>Proper care and lifestyle changes prevent risks, ensuring healthier life.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-gem"></i>
                    <h4>Prevent Diabetes Risks</h4>
                    <p>Healthy habits and care reduce complications, supporting lifelong wellness.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-inboxes"></i>
                    <h4>Managing Diabetes with Care</h4>
                    <p>Treatment, lifestyle, and awareness reduce diabetes risks, improving health.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/about.jpg" class="img-fluid" alt="" style="border-radius:20px">
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
            <p>
              At Medilab Diabetes Care, we are dedicated to helping people live healthier lives with proper diabetes awareness, treatment, and lifestyle support. Our expert doctors and care team focus on early detection, personalized treatment, and regular monitoring to reduce complications.
            </p>
            <p>We believe in education, prevention, and long-term care, guiding patients to manage diabetes with confidence. By combining modern medicine, healthy diet support, and lifestyle changes, we ensure every patient achieves better control and improved quality of life.</p>
            <ul>
              <li>
                <i class="fa-solid fa-vial-circle-check"></i>
                <div>
                  <h5>Diabetes Care Made Simple</h5>
                  <p>Proper guidance, treatment, and lifestyle support reduce diabetes risks, prevent complications, and improve overall health.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-pump-medical"></i>
                <div>
                  <h5>Complete Diabetes Support</h5>
                  <p>Trusted diabetes care with treatment, lifestyle guidance, and monitoring helps patients stay healthy and confident.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-heart-circle-xmark"></i>
                <div>
                  <h5>Caring for Diabetes Patients</h5>
                  <p>Diabetes can be managed with treatment, awareness, lifestyle support, monitoring, guidance, preventing complications, improving health.</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section>
        </div>
      </div>
    </section>


    <section id="services" class="services section bg-light">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Diabetes Care for Healthy Life</h2>
        <p>Diabetes can be managed with healthy food, regular exercise, and proper care. Early detection and lifestyle changes help prevent complications and support a happy, active life.</p>
      </div><!-- End Section Title -->
    <div class="container">
<?php
// Custom query - sirf 6 posts dikhane ke liye
$args = [
  'post_type'      => 'post',
  'posts_per_page' => 6
];
$query = new WP_Query($args);

if ($query->have_posts()) : ?>
  <div class="row row-cols-1 row-cols-md-3 g-4 p-2">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
      <div class="col">
        <div class="card h-100">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
          <?php endif; ?>

          <div class="card-body">
            <div class="d-flex align-items-center mb-2 small text-muted">
              <span class="fw-bold text-danger"><?php echo get_the_date(); ?></span>
              </span>
              <span class="fw-bold ms-auto"><?php the_author(); ?></span>
            </div>
            <h5 class="card-title"><?php the_title(); ?></h5>
            <div class="excerpt">
                  <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
          </div>

          <div class="form-submit pb-3 px-3 d-flex">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary submit ms-auto">Read more</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
<?php else : ?>
  <p><?php _e('No posts found.', 'textdomain'); ?></p>
<?php endif; ?>

    </div>

      </div>

    </section>

    <!-- Departments Section -->
    <section id="departments" class="departments section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Diabetes Department</h2>
        <p>Diabetes care requires proper treatment, diet, and awareness to manage health effectively and live a balanced life.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Diabetes Awareness</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Diabetes Prevention</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Diabetes Management</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Healthy Living</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h4>Understanding diabetes, its symptoms, causes, risks, and long-term effects clearly</h4>
                   <ul>
                      <li>Diabetes is a chronic disease affecting how the body regulates blood sugar effectively.</li>
                      <li>Common symptoms include frequent urination, extreme thirst, constant fatigue, and slow healing wounds in people.</li>
                      <li>Awareness helps people detect diabetes early, preventing complications and promoting a healthier, more balanced life.</li>
                    </ul>
                   
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h4>Preventing diabetes through daily lifestyle changes, exercise, healthy eating, and stress management</h4>
                    <ul>
                      <li>Balanced meals with fruits, vegetables, and whole grains reduce diabetes risk significantly over time.</li>
                      <li>Regular exercise improves insulin sensitivity, helping the body manage blood sugar levels much better.</li>
                      <li>Stress management and proper sleep play a big role in preventing diabetes-related health complications.</li>
                    </ul>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/departments-2.jpg" alt="" class="img-fluid" style="height: 16rem;
">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h4>Managing diabetes requires discipline with diet, exercise, medicine, and blood sugar monitoring</h4>
                    <ul>
                      <li>Monitoring blood sugar regularly helps track progress and prevent serious diabetes-related health issues.</li>
                      <li>Following prescribed medicines correctly ensures blood sugar remains balanced and reduces possible health risks.</li>
                      <li>Maintaining active habits with exercise and a healthy diet supports long-term diabetes control effectively.</li>
                    </ul>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/departments-3.jpg" alt="" class="img-fluid" style="height: 15rem;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h4>Healthy lifestyle choices support diabetes care and overall long-term physical wellness</h4>
                    <ul>
                      <li>Eating nutritious food every day provides energy and helps manage diabetes much more effectively.</li>
                      <li>Staying hydrated and avoiding processed or sugary foods improves health and prevents diabetes complications.</li>
                      <li>Good sleep, physical activity, and positive mindset together promote overall wellness and balanced life.</li>
                    </ul>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Effects of High Sugar on Eye Health:</h3>
                    <h5>1. Diabetic Retinopathy</h5>
                    <ul>
                      <li>High sugar damages the tiny blood vessels in the retina (the light-sensitive layer at the back of the eye).</li>
                      <li>This can cause bleeding, fluid leakage, and abnormal new vessel growth.</li>
                      <li>Leads to blurred vision, dark spots, and even permanent blindness if untreated.</li>
                    </ul>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/departments-5.jpg" alt="" class="img-fluid" style="height: 14rem;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Departments Section -->

  </main>

  <?php get_footer(); ?>