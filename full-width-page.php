<?php 
    /*
    * Template Name: Full Width
    */

    get_header()
?>

	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="container clearfix">

                    <?php
                        if(have_posts()):
                            while(have_posts()):
                                the_post();
                                ?>
                        <div class="single-post nobottommargin">
                                    <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix">

                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <h2><?php the_title() ?></h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                                <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><i class="icon-user"></i> <?php the_author() ?></a></li>
                                <li><i class="icon-folder-open"></i> <?php the_category(' ') ?> </li>
                                <li><a href="#"><i class="icon-comments"></i><?php comments_number(0) ?> Comments</a></li>
                            </ul><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            <?php
                                if(has_post_thumbnail()) :
                            ?>
                                <div class="entry-image">
                                    <a href="<?php the_permalink(); ?>" >
                                        <?php the_post_thumbnail('full') ?>
                                    </a>
                                </div>
                            <?php
                                endif;
                            ?>

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">

                                <?php
                                    the_content();

                                ?>
                                <!-- Post Single - Content End -->

                                <!-- Tag Cloud
                                ============================================= -->
                                <div class="tagcloud clearfix bottommargin">
                                    <?php the_tags('', ' ') ?>
                                </div><!-- .tagcloud end -->

                                <div class="clear"></div>

                            </div>
                            </div><!-- .entry end -->
                            
                        </div>
                                <?php
                            endwhile;
                        endif;
                    ?>

			</div>

		</div>

	</section><!-- #content end -->

<?php get_footer() ?>