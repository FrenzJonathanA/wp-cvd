<?php 
/**
 * Template Name: Contacts
 */

?>

<?php get_header(); ?>

<section class="contact-page">
    <div class="container">
        <div class="contact-page-wrapper">
            <h1><?php echo get_field('contacts_title') ?></h1>
            <div class="contact-main-banner">
                <div class="contact-left">
                    <p><?php echo get_field('contacts_descrip') ?></p>

                    <ul>
                        <li><?php echo get_field('contacts_number') ?></li>
                        <li><?php echo get_field('contacts_email') ?></li>
                        <li><?php echo get_field('contacts_add') ?></li>
                    </ul>
                </div>
                <div class="contact-right">
                    <!-- <input id="contact-name" type="text" placeholder="NAME">
                    <input id="contact-email" type="email" placeholder="EMAIL">
                    <textarea name="" id="contact-message" cols="30" rows="10"></textarea> -->
                    <?php echo do_shortcode('[contact-form-7 id="284" title="Contact form 1"]')?>

                </div>

            </div>
            <div class="contact-main-bottom">
                <ul>
                    <li>
                        <!-- <i>
                            <?php if( have_rows('contacts_social')): ?>
                                <?php while( have_rows('contacts_social')): the_row(); ?>
                                    <?php 
                                        $sub_value = get_sub_field('social'); 
                                        $link = get_sub_field('links'); 
                                    ?>
                                    <a href="<?php echo $link ?>"><i class="<?php echo $sub_value ?>"></i></a>
                                <?php endwhile; ?>
                            <?php endif ?>
                        </i> -->
                    </li>
                </ul>
                <!-- <p class="btn bg--yellow"><?php echo get_field('contacts_button') ?></p> -->
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>