<?php get_header(); ?>
    <div class="cover-img">
        <hgroup>
            <h1>Hi I'm Costas Nicou</h1>
            <h2>Computer enthusiastic and Front End Web Developer</h2>
        </hgroup>
        
    </div>

    <section id="profile">
        <!-- Profile -->
        <div class="profile-content">
            <!-- img -->
            <img src=" <?php echo get_template_directory_uri() . '/assets/imgs/profile.jpeg'; ?>" alt="" width="200" height="200">
            <p>As an enthusiastic researcher and hands on learner during the last years, I have gained valuable experiences through studies and professional encounters. With an immense drive for success I am determined to build a great track record that will benefit any collaboration career path and organization.</p>
        </div>
       
        <!-- text -->
    </section>

    <!-- Education & Experience -->
    <section id="eduexp">
        <div class="content">
            <!-- education -->
            <article>
                <h3>Experience</h3>
                
                <section class="exp-item">                  
                    <i class="fas fa-briefcase"></i>                    
                    <h4>IT Support Engineer</h4>
                    <p>Primetel, (Sep 2021 - Current)</p>
                </section>
                <section class="exp-item">
                    <i class="fas fa-briefcase"></i>   
                    <h4>Wordpress Web Developer</h4>
                    <p>Convertico Media, (Feb 2020 - Jul 2020)</p>
                </section>
                <section class="exp-item">
                    <i class="fas fa-briefcase"></i>
                    <h4>Linux Support Officer </h4>
                    <p>Tototheo Maritime, (Apr 2019 - Aug 2019) </p>
                </section>
                <section class="exp-item">
                    <i class="fas fa-briefcase"></i>
                    <h4>Ecommerce Web Developer</h4>
                    <p>Cellmacke, (2016 - 2017)</p>
                </section>
             
            </article>

            <!-- experience -->
            <article>
                <h3>Education</h3>
                <section class="exp-item">
                    <i class="fas fa-university"></i>
                    <h4>Diploma in Computer Technology</h4>
                    <p>Cyprus College, (2013 - 2015)</p>
                </section>
                <section class="exp-item">
                    <i class="fas fa-university"></i>
                    <h4>BEng Computer Systems and Networks</h4>
                    <p>Edinburgh Napier University, (2016 - 2018)</p>
                </section>
                
                <section class="exp-item">
                    <i class="fas fa-university"></i>
                    <h4>Front End Web Developer</h4>
                    <p>Linkedin Learning, (2019 - 2020)</p>
                </section>
             
            </article>
        </div>
    </section>

    <!-- Portfolio Web Work -->
    <section class="portfolio">
        <h2>Portfolio</h2>
        <div class="content">
            <article>
                <img src=" <?php echo get_template_directory_uri() . '/assets/imgs/blog.png';?>" alt="">
                <a href="https://nicoycostas.github.io/personalblog/" target="_blank" class="btn">View Project</a>
                

            </article>

            <article>
                <img src=" <?php echo get_template_directory_uri() . '/assets/imgs/google-search.png';?>" alt="">
                <a href="https://nicoycostas.github.io/google-search/" target="_blank" class="btn">View Project</a>
            </article>

            <article>
                <img src="<?php echo get_template_directory_uri() . '/assets/imgs/nasa.png';?>" alt="">
                <a href="https://nicoycostas.github.io/server-arex/" target="_blank" class="btn">View Project</a>
            </article>

            <article>
                <img src="<?php echo get_template_directory_uri() . '/assets/imgs/leviotech.png'; ?>" alt="">
                <a href="https://nicoycostas.github.io/leviotech/" target="_blank" class="btn">View Project</a>
            </article>

           
        </div>

    </section>

    <section class="contact">
        
    </section>
    <!-- Articles -->
    <section class="blog">
        <h2>Blog</h2>
        <div class="blog-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
              
                <!-- image -->
                <div class="img" style="background-image: url(<?php echo the_post_thumbnail_url();?>)">
                    
                </div>
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt() ?>

                <!-- butn -->
                <a href="" class="btn">Read More</a>
            </article>
            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        </div>
        

    </section>

<?php get_footer(); ?>