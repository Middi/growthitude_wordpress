<?php get_header(); ?>



  <div id="hero">

      <div class="hero-content">
          <h1>We've got your back</h1>



          <p><?php bloginfo( 'description' ); ?></p>

          <a href="#about" role="button" class="btn btn-success btn-lg">Read More</a>
      </div>
  </div>


  <div class="container-fluid">
      <div class="row">

          <div class="horizontal-mailchimp">
              <h3 class="sub-title">Subscribe to our newsletter</h3>
              <div id="mc_embed_signup text-center">
                  <form action="//growthitude.us12.list-manage.com/subscribe/post?u=7325f579d436346d635d003a4&amp;id=75cff09018" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                      <div id="mc_embed_signup_scroll">

                          <div class="mc-field-group input-group">
                              <label for="mce-NAME">Name
                          </label>
                              <input type="text" value="" name="NAME" class="required input-group NAME" id="mce-NAME" placeholder="Name">
                          </div>

                          <div class="mc-field-group input-group">
                              <label for="mce-EMAIL">Email Address </label>
                              <input type="email" value="" name="EMAIL" class="required email input-group EMAIL" id="mce-EMAIL" placeholder="E-Mail">
                          </div>

                          <div id="mce-responses" class="clear">
                              <div class="response" id="mce-error-response" style="display:none"></div>
                              <div class="response" id="mce-success-response" style="display:none"></div>
                          </div>


                          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7325f579d436346d635d003a4_75cff09018" tabindex="-1" value=""></div>

                          <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-md btn-success"></div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>




  <div class="container-fluid">
      <div id="products" class="container products">
          <h2 class="text-center">Products</h2>


          <div class="row prod-parent">

            <div class="col-lg-12 prod-hidden">
                <div class="prodnail-hidden">

                  <div class="title" id="target">
                      <a href="products.html"><span class="highlight">View Our Products</span></a>
                        <p>Crush this year with our workshops, webinars or books.</p>


                    </div>
                </div>
            </div>



              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-0 prod-visible">
                  <div class="prodnail1">
                    <div class="title" id="target">
                        <a href="advisor.html"><span class="highlight">Become a Trusted Advisor</span></a>
                          <p>Strengthen your skills and increase client sales.</p>


                      </div>
                  </div>
              </div>


              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-0 prod-visible">
                  <div class="prodnail2">
                    <div class="title" id="target">
                      <a href="business.html"><span class="highlight">Grow Your Business</span></a>
                        <p>Know your strengths and how to differentiate yourself.</p>

                  </div>
              </div>



</div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-0 prod-visible">
                  <div class="prodnail3">

                    <div class="title" id="target">
                      <a href="uncover.html"><span class="highlight">Uncover Hidden Sales Potential</span></a>
                        <p>How are your clients making buying decisions?</p>

                  </div>


                  </div>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-0 prod-visible">
                  <div class="prodnail4">

                    <div class="title" id="target">
                      <a href="culture.html"><span class="highlight">Create an Engaging Work Culture</span></a>
                        <p>Build lasting business success through your company culture.</p>

                  </div>
                  </div>
              </div>


          </div>
      </div>
  </div>



  <div  id="about"  class="container-fluid about-container">
          <div class="row">

              <div class="col-md-6 tonje-img">
              </div>

                <div class="col-md-6 about-caption">
                  <h2>About Growthitude</h2>
                  <p>Growthitude helps companies engage their employees successfully while going through digital transformation. We help you reduce costs, increase efficiency, improve quality and profitability through creating an engaging work culture. We are flexible and adapt to your needs. We help you uncover your pains and what you need to do to increase engagement and performance amongst employees, growing your company by maximizing talent and increasing returns.</p>
                  <p>
Did you know how much you can improve performance, increase productivity and save costs in absenteeism through having an engaging corporate culture, even when the business is going through change? And did you know that employee engagement is now a top priority in terms of growth and innovation in businesses? Companies with engaged workers have 6% higher net profit margins and five times higher shareholder returns over five years.</p>
              </div>
          </div></div>



<h4 class="featured text-center">As Featured On</h4>


  <div class="container-fluid cred">
      <div class="container">
          <div class="row credi">

              <div class="col-xs-3 text-center">
                  <img class="img cred-img" src="images/cred1.png" alt="">
              </div>
              <div class="col-xs-3 text-center">
                  <img class="img cred-img" src="images/cred2.png" alt="">
              </div>
              <div class="col-xs-3 text-center">
                  <img class="img cred-img" src="images/cred3.png" alt="">
              </div>
              <div class="col-xs-3 text-center">
                  <img class="img cred-img" src="images/cred4.png" alt="">
              </div>

          </div>
      </div>
  </div>


  <div class="container-fluid dark">
      <div id="blogs" class="container">
          <h2 class="text-center">Blog Posts</h2>


          <div class="row">

<?php global $query_string;
        query_posts ('posts_per_page=3');

        while(have_posts()) : the_post(); ?>

              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="blognail1" <?php

if ( $id = get_post_thumbnail_id() ) {
    if ( $src = wp_get_attachment_url( $id ) )
        printf( ' style="background:   -webkit-linear-gradient(rgba(33, 33, 33, 0.5), rgba(33, 33, 33, 0.5)), url(%s) center top no-repeat;
        background-size: cover;"', $src );
}

?>>
<div class="title" id="target">
                      <a href="<?php the_permalink(); ?>"><span class="highlight"><?php the_title(); ?></span></a>
                        <?php the_excerpt('Read More'); ?>


                    </div>
                </div>
              </div>

              <?php endwhile; ?>

          </div>




      </div>
  </div>


<?php get_footer(); ?>
