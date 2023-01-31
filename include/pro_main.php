<?php

function pro_shortcode_main_func(){

    $icon_url = plugins_url( 'img/plugin-icon.png', __FILE__ );
?>
    <div class='center'>
    <img src="<?php echo $icon_url ?>" alt="No image">
    <h1>Welcome to  Professional Short Code</h1>
    <p>The most powerful shortcode plugin for WordPress</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/gWmsbUpvyZI" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <?php

}