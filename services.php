<?php 
/**
 * Template Name: Services
 */

?>

<?php get_header(); ?>

<?php 
$args = array(
    'post_type' => 'servicesPost',
    'posts_per_page' => -1,
);
$newQuery = new WP_QUERY($args)

?>
<?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>

<section class="<?php echo get_field('class_name'); ?>">
    <div class="container">
        <div class="service__wrapper">
            <div class="web">
            
                <div class="service__text">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <div class="price">
                        <h4><?php echo get_field('s1_ptext')?></h4>
                        <h2><?php echo get_field('s1_price')?></h2>
                        <h5><i><?php echo get_field('s1_plimit')?></i></h5>
                    </div>
                </div>
                <?php echo get_the_post_thumbnail(); ?>

                
            </div>
            
        </div>
    </div>
    <div class="down">
        <a href=""><i class="<?php echo get_field('s1_chev')?>"></i></a>
    </div>
</section>

<?php
    endwhile;
    else:
    echo "no available content";
    endif;
    wp_reset_postdata();
?>

<!-- <section class="services2">
    <div class="container">
        <div class="service__wrapper">
            <div class="graphic">
            <?php 
                $args = array(
                  'post_type' => 'servicesPost',
                  'posts_per_page' => 1,
                  'offset' => 1,
                );
                $newQuery = new WP_QUERY($args)
            
            ?>
            <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
                <?php echo get_the_post_thumbnail(); ?>
                <div class="service__text">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <div class="price">
                        <h4><?php echo get_field('s1_ptext')?></h4>
                        <h2><?php echo get_field('s1_price')?></h2>
                        <h5><i><?php echo get_field('s1_plimit')?></i></h5>
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
    </div>
    <div class="down">
        <a href=""><i class="<?php echo get_field('s1_chev')?>"></i></a>
    </div>
</section>

<section class="services3">
    <div class="container">
        <div class="service__wrapper">
            <div class="social">
                <?php 
                    $args = array(
                      'post_type' => 'servicesPost',
                      'posts_per_page' => 1,
                      'offset' => 2,
                    );
                    $newQuery = new WP_QUERY($args)
                ?>
                <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
                
                <div class="service__text">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <div class="price">
                        <h4><?php echo get_field('s1_ptext')?></h4>
                        <h2><?php echo get_field('s1_price')?></h2>
                        <h5><i><?php echo get_field('s1_plimit')?></i></i></h5>
                    </div>
                </div>
                <?php echo get_the_post_thumbnail(); ?>
                <?php
                  endwhile;
                  else:
                    echo "no available content";
                  endif;
                  wp_reset_postdata();
                ?>
            </div>  
        </div>
    </div>
</section> -->


<?php include 'contactUs.php'; ?>


<?php get_footer(); ?>