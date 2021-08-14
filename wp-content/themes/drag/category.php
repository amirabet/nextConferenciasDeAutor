<?php
/**
 * Category Template
 *
 * Displays an archive index of posts assigned to a Category. 
 *
 * @package Thematic
 * @subpackage Templates
 *
 * @link http://codex.wordpress.org/Category_Templates Codex: Category Templates
 */

	// calling the header.php
	get_header('nomain');

	// action hook for placing content above #container
	thematic_abovecontainer();
?>
<!-- Dentro del #wrapper -->
	<!-- Incluimos el carrusel Flexslider a 100% width-->
	<?php include_once(get_stylesheet_directory() . '/snippet-flexslider.php');?>
    <!-- Costura Superior -->
    <span class="breaker brkr_top"><span class="brkr_top_costura"></span></span>
    <!-- Main Full + contenidos -->
    <div id="main_wrap">
        <div id="main_full">
            <div class="blue_textil">
                <div class="wrap_width container_wrap">
                    <div id="container">
            
                        <?php
                            // action hook for placing content above #content
                            thematic_abovecontent();
            
                            // filter for manipulating the element that wraps the content 
                            echo apply_filters( 'thematic_open_id_content', '<article id="content" class="gray_leather">' . "\n\n" );
            
                            // displays the page title
                            thematic_page_title();
            
                            // create the navigation above the content
                            thematic_navigation_above();
            
                            // action hook for placing content above the category loop
                            thematic_above_categoryloop();			
            
                            // action hook creating the category loop
                            thematic_categoryloop();
            
                            // action hook for placing content below the category loop
                            thematic_below_categoryloop();	?>
            			 
                            <footer class="foot_paged">
                            <?php
                            // create the navigation below the content
                            
                            thematic_navigation_below();
                            ?>
                            </footer>
            
                        </article><!-- #content -->
            
                        <?php
                            // action hook for placing content below #content
                            thematic_belowcontent();
                        ?>
                    </div><!-- #container -->
					<?php  // calling the standard sidebar 
						thematic_sidebar();
					?>
                    <div class="clearboth">&nbsp;</div>
                </div>
                <div class="wrap_width">
                    <?php include_once(get_stylesheet_directory() . '/snippet-banners.php');?>
                </div>
            </div>           
        </div>
    </div>
    <span class="breaker brkr_bottom"><span class="brkr_bottom_costura"></span></span>
    <!-- /#mainwrap -->	
<?php
	// calling footer.php
	get_footer();
?>