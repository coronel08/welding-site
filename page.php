<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- Default Template -->
<div class="body-bg">
    <div class="container pt-3 md:pt-5">
        <div class="text-center text-white pt-3">
            <h1 class="display-4 font-weight-bold">
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="row pb-4">
            <div class="col-md-10 offset-md-1 py-4 lg:py-5">
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;
                ?>
            </div>
        </div>
    </div>
</div>



<!-- Custom Stuff Created for Site -->



<!-- About Section -->
<section id="about" class="container">
    <!-- Font Awesome Cards -->
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="text-center px-2 py-4">
                <i class="icon-border text-white fas fa-truck fa-4x"></i>
                <h3 class="icon-h3 font-weight-bold pt-2">Reliable Mobile Servicing 24/7</h3>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="text-center px-2 py-4">
                <i class="icon-border text-white fas fa-hand-holding-usd fa-4x"></i>
                <h3 class="icon-h3 font-weight-bold pt-2">Affordable and Resonable Pricing</h3>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="text-center px-2 py-4">
                <i class="icon-border text-white fas fa-handshake fa-4x"></i>
                <h3 class="icon-h3 font-weight-bold pt-2">Family Owned and Operated</h3>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services">
    <div class="d-flex flex-column container-fluid container-lg bg-light min-vh-100 pt-5 md:pt-7">
        <div class="">
            <div class="text-center">
                <h2 class="text-dark display-3">Services</h2>
            </div class="align-middle">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="services-card body-bg m-4 p-4">
                        <div class="text-center text-white">
                            <h4>Mobile Welding</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                    </div>
                </div>
                <div class=" col-12 col-md-6">
                    <div class="services-card body-bg m-4 p-4">
                        <div class="text-center text-white">
                            <h4>Custom Fabrication</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                    </div>
                </div>
                <div class=" col-12 col-md-6">
                    <div class="services-card body-bg m-4 p-4">
                        <div class="text-center text-white">
                            <h4>IDK</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                    </div>
                </div>
                <div class=" col-12 col-md-6">
                    <div class="services-card body-bg m-4 p-4">
                        <div class="text-center text-white">
                            <h4>Other Services</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci culpa nam, mollitia nisi impedit delectus! Dicta labore nemo aliquid fuga aperiam esse nisi libero dolores maxime debitis! Maxime, doloremque veniam?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Testimonials Section -->
<section id="testimonials" class="body-bg pb-4">
    <div class="container-lg">
        <div class="text-center py-6">
            <h2 class="display-3">Testimonials</h2>
        </div>
        
        <!-- Carousel in Bootstrap -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner pb-4">
                <div class="carousel-item active">
                    <div class="d-block d-md-flex justify-content-center align-items-center gap-4">
                        <div class="">
                            <h4 class="text-decoration-underline">Company1</h4>
                            <p>Project Type: ------</p>
                        </div>
                        <p class="d-block w-75 mx-auto mx-md-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Maiores, harum hic. Consectetur molestias quod incidunt explicabo expedita odio possimus
                            doloremque sit culpa vero, quibusdam quisquam suscipit minus modi inventore aliquid.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block d-md-flex justify-content-center align-items-center gap-4">
                        <div>
                            <h4 class="text-decoration-underline">Company2</h4>
                            <p>Project Type: ------</p>
                        </div>
                        <p class="d-block w-75 mx-auto mx-md-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Maiores, harum hic. Consectetur molestias quod incidunt explicabo expedita odio possimus
                            doloremque sit culpa vero, quibusdam quisquam suscipit minus modi inventore aliquid.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block d-md-flex justify-content-center align-items-center gap-4">
                        <div>
                            <h4 class="text-decoration-underline">Company3</h4>
                            <p>Project Type: ------</p>
                        </div>
                        <p class="d-block w-75 mx-auto mx-md-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Maiores, harum hic. Consectetur molestias quod incidunt explicabo expedita odio possimus
                            doloremque sit culpa vero, quibusdam quisquam suscipit minus modi inventore aliquid.</p>
                    </div>
                </div>

            </div>
        </div>
</section>


<?php get_footer();
