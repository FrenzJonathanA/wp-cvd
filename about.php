<?php 
/**
 * Template Name: About
 */

?>

<?php get_header(); ?>

<section class="About-me">
    <div class="container">
        <div class="aboutme__wrapper">
            <div class="aboutme__TEXT">
                <div class="about--text">
                    <h3><?php echo get_field('about_h3');?></h3>
                    <h1><?php echo get_field('about_h1');?></h1>
                    <p><?php the_content();?></p>
                </div>
                <div class="about--icon">
                    <ul>
                        <li>
                        <?php if( have_rows('about_icons')): ?>
                            <?php while( have_rows('about_icons')): the_row(); ?>
                                <?php 
                                    $sub_value = get_sub_field('a_icons'); 
                                    $link = get_sub_field('a_links'); 
                                ?>
                
                                <a href="<?php echo $link ?>"><i class="<?php echo $sub_value ?>"></i></a>

                <?php endwhile; ?>
                <?php endif ?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php 
                $image = get_field('about_image');
                if(!empty($image)):
            ?>
            <img src="<?php echo esc_url($image['url']) ?>" alt="">

          <?php endif; ?>          
        </div>
    </div>
    <div class="down">
        <a href=""><i class="<?php echo get_field('about_chev');?>"></i></a>
    </div>
</section>

<section class="projects">
    <div class="container">
        <div class="project__text">
                <h2><?php echo get_field('aprojects_title');?></h2>
                <p><?php echo get_field('aprojects_descrip');?></p>
            </div>
        <div class="project__wrapper">
            <?php 
                $args = array(
                'post_type' => 'projectsPost',
                'posts_per_page' => -1,
                );
                $newQuery = new WP_QUERY($args)
            ?>
            <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
            <div class="project__card">               
                    <?php echo get_the_post_thumbnail(); ?>
                    <div class="cards__text">
                        <h4><?php the_title();?></h4>
                        <p><?php the_content();?></p>
                    </div>                
            </div>
            <?php
                endwhile;
                else:
                echo "no available content";
                endif;
                wp_reset_postdata();
            ?>              
                <img src="./img/about/unsplash_jukKJSr9FcA.png" alt="">
                <div class="cards__text">
                    <h4>Frontline Business Solution, Inc.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sunt repudiandae modi natus magnam tempora in porro illum explicabo quis.</p>
                </div>                
            </div>
        </div>
    </div>
</section>


<?php include 'contactUs.php'; ?>


<?php get_footer(); ?>