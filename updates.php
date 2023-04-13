<?php 
/**
 * Template Name: Updates
 */

?>

<?php get_header(); ?>

<section class="updates">
    <div class="container">
        <div class="updates__title">
            <h1><?php echo get_field('updates_title'); ?></h1>
            <p><?php echo get_field('updates_text'); ?></p>
        </div>
        <div class="updates__wrapper">
            <div class="updates__left">
            <?php 
                $args = array(
                'post_type' => 'LTrendsPost',
                'posts_per_page' => -1,
                );
                $newQuery = new WP_QUERY($args)
            ?>
            <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
                <div class="left__item">
                    <?php echo get_the_post_thumbnail(); ?>
                    <div class="updates__author">
                        <ul>
                            <li> <?php echo get_field('author_name') ?></li>
                            <li> <?php echo get_field('author_date')?> <?php echo get_the_time('F, j, Y') ?></li>
                            <li> <?php echo get_field('author_designation') ?></li>
                        </ul>

                    </div>
                    <div class="updates__text">
                        <h3><?php the_title(); ?></h3>
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
            <div class="updates__right">
                <div class="updates__categ bb-1">
                    <h3>CATEGORIES</h3>
                    <table>
                        <tr>
                            <td>Web Design</td>
                            <td>(2)</td>
                        </tr>
                        <tr>
                            <td>Web Development</td>
                            <td>(3)</td>
                        </tr>
                        <tr>
                            <td>Wire Frame</td>
                            <td>(1)</td>
                        </tr>
                        <tr>
                            <td>Vector & Logo</td>
                            <td>(5)</td>
                        </tr>
                        <tr>
                            <td>Social Media</td>
                            <td>(2)</td>
                        </tr>
                    </table>
                </div>
                <div class="updates__rp bb-1">
                        <h3>RECENT POST</h3>
                        <?php 
                        $args = array(
                          'post_type' => 'recentPost',
                          'posts_per_page' => -1,
                        );
                        $newQuery = new WP_QUERY($args)
          
                         ?>
                        <?php if($newQuery->have_posts()): while($newQuery->have_posts()) : $newQuery->the_post();   ?>
                        <div class="rp__item">
                            <?php echo get_the_post_thumbnail(); ?>
                            <div class="rp__item__text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo get_the_time('F,j,Y');?></p>
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
                <div class="updates__tags">
                    <h3>TAGS</h3>
                    <div class="tags__item">  
                    <?php if( have_rows('update_tags')): ?>
                        <?php while( have_rows('update_tags')): the_row(); ?>
                            <?php 
                                $sub_value = get_sub_field('tags'); 
                            ?>
                            <a href="" class="btn bg-light"><?php echo $sub_value ?></a>
                        <?php endwhile; ?>
                        <?php endif ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'contactUs.php'; ?>


<?php get_footer(); ?>