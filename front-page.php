<?php 
/**
 * Template Name: Home
 */

?>

<?php get_header(); ?>

<section class="banner">
    <div class="container">
        <div class="banner__wrapper">
            <div class="banner__text">
                <h1><?php echo get_field('banner_title')?></h1>
                <p><?php echo get_field('banner_text')?></p>
                <a id="banner__btn"  href="<?php echo the_permalink();?>" class="btn bg--yellow"><?php echo get_field('banner_link')?></a>
            </div>
            <?php 
            $image = get_field('banner_image');
            if(!empty($image)):
          ?>
            <img src="<?php echo esc_url($image['url']) ?>" alt="">

          <?php endif; ?>
        </div>
    </div>
</section>

<section class="hm-services">
    <div class="container">
        <div class="hm-services__wrapper">
          <?php 
            $args = array(
              'post_type' => 'servicesPost',
              'posts_per_page' => -1,
            );
            $newQuery = new WP_QUERY($args)
          
          ?>
          <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
          <div class="hm-services__item">
              <i class="<?php echo get_field('services_icon')?>"></i>
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <a class="btn bg--yellow"href="<?php echo site_url('services'); ?>"><?php echo get_field('services_link')?></a>
          </div>
        
          <?php
              endwhile;
              else:
                echo "no available content";
              endif;
              wp_reset_postdata();
          ?>

        </div>
    </div>
</section>

<section class="about__me">
    <div class="container">
        <div class="banner__wrapper">
            <div class="img">
              <?php 
                $image = get_field('about_image_1');
                if(!empty($image)):
              ?>
                <img src="<?php echo esc_url($image['url']) ?>" alt="">
                
              <?php endif; ?>
        
            </div>          
            <div class="banner__text">   
                <h1><?php echo get_field('about_title');?></h1>
                <p><?php echo get_field('about_text_1');?></p>
                <p><?php echo get_field('about_text_2');?></p>
            </div>
    </div>
</section>

<section class="latest__trend">
    <div class="container">
        <div class="latest__title">
            <h2><?php echo get_field('trends_title'); ?></h2>
            <p><?php echo get_field('trends_descrip'); ?></p>
        </div>
        <div class="latest__wrapper">
          <?php 
            $args = array(
              'post_type' => 'LTrendsPost',
              'posts_per_page' => -1,
            );
            $newQuery = new WP_QUERY($args)
          
          ?>
          <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
          <div class="latest__card">
              <?php echo get_the_post_thumbnail(); ?>
              <div class="card__text">
              <h2><?php the_title(); ?></h2>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php echo the_permalink(); ?>">Read more...</a>
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
    </div>
</section>

<?php include 'contactUs.php'; ?>

<?php get_footer(); ?>

