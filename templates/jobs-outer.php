<?php
/*****************************************************************************
*
*	copyright(c) - aonetheme.com - Service Finder Team
*	More Info: http://aonetheme.com/
*	Coder: Service Finder Team
*	Email: contact@aonetheme.com
*
******************************************************************************/

?>
<?php
$html = '<section class="section-full latest-blog">
            <div class="container">
            
            
            	<div class="section-head text-center">
                    <h2 style="color:'.$a['title-color'].'">'.esc_html($a['title']).'</h2>
					'.service_finder_title_separator($a['divider-color']).'
                    <p style="color:'.$a['tagline-color'].'">'.esc_html($a['tagline']).'</p>
                </div>
                    
                <div class="section-content">
                	'.do_shortcode( $content ).'
                </div>
                
            </div>
        </section>';
?>

