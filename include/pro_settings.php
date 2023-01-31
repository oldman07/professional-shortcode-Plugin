<?php

function pro_shortcode_Settings(){

    $icon_url = plugins_url( 'img/plugin-icon.png', __FILE__ );
    function custom_css_shortcode( $atts, $content = null ) {
        $css = "<style>{$content}</style>";
        return $css;
    }
    add_shortcode( 'custom_css', 'custom_css_shortcode' );
?>
   
    <?php

}