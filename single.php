

<?php get_header(); ?>

<section class="theContent">
    <div class="container">
        <div class="lead">
            <h1><?php the_title();?></h1>
            <p><?php echo get_the_excerpt(); ?></p>
        </div>
        
        <div class="info">
            <div class="author">
                <?php echo get_the_post_thumbnail(); ?>
                <ul>
                    <li> <?php echo get_field('author_name') ?></li>
                    <li> <?php echo get_field('author_date')?> <?php echo get_the_time('M-d-Y') ?></li>
                    <li> <?php echo get_field('author_designation') ?></li>
                </ul>
            </div>
            <div class="details">
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <!-- <div class="content__sidebar">
            
            <?php 
              $args = array(
                'post_type' => 'LTrendsPost',
                'posts_per_page' => 2,
                'offset'     => 1,
              );
              $newQuery = new WP_QUERY($args)
            
            ?>
            <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
              <div class="content__info">
                <?php echo get_the_post_thumbnail(); ?>
                <div class="content__details">
                  <div class="content__name">
                      <h3><?php the_title(); ?></h3>
                      <small><?php echo get_the_date('M-d-Y');?></small>
                  </div>  
                  <?php echo get_the_excerpt(); ?>
                  <a href="<?php echo the_permalink(); ?>">Read More...</a>
                </div>
              </div>
              <?php
                endwhile;
                else:
                  echo "no available content";
                endif;
                wp_reset_postdata();
              ?>
          </div>
        </div> -->
    </div> 
</section>



<?php include 'contactUs.php'; ?>


<?php get_footer(); ?>