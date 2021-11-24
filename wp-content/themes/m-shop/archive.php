<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package M Shop
 * @since 1.0.0
 */
get_header();
do_action('m_shop_asidebar');
?>
<main>
   <div id="content" class="page-content thunk-page  archive">
          <div class="content-wrap" >
            <div class="container">
              <div class="main-area">
                <div id="primary" class="primary-content-area">
                  <div class="primary-content-wrap">
                    <div class="page-head">
                   <?php m_shop_get_page_title();?>
                   <?php m_shop_breadcrumb();?>
                    </div>
                       <?php
            if( have_posts()):
                /* Start the Loop */
                while ( have_posts() ) : the_post();
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                get_template_part( 'template-parts/content', get_post_format() );
                endwhile;
                
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;

           
            ?>
                  </div>  <!-- end primary-content-wrap-->
                </div>  <!-- end primary primary-content-area-->
                
              </div> <!-- end main-area -->
            </div>
          </div> <!-- end content-wrap -->
        </div> <!-- end content page-content -->
      </main>
<?php get_footer();?>