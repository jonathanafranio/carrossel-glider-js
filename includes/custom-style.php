<?php

function styleCustom() {
    global $gfw_options;
    $gfw_options = get_option( 'gfw_options', $gfw_options );
?>
<style type="text/css">
    <?php if($gfw_options['bullets_colors'] != ''): ?>
        .glider-dot { background: <?php echo $gfw_options['bullets_colors']; ?>; }
    <?php endif;
    if($gfw_options['mouse_bullets'] != ''): ?>
        .glider-dot { border-color: <?php echo $gfw_options['mouse_bullets']; ?>; }
        .glider-dot:hover { background: <?php echo $gfw_options['mouse_bullets']; ?>; }
        .glider-dot.active { background: <?php echo $gfw_options['mouse_bullets']; ?>; }

    <?php endif;
    if($gfw_options['arrows_colors'] != ''): ?>
        .glider-arrows { color: <?php echo $$gfw_options['arrows_colors']; ?>; }
    <?php endif;
    if($gfw_options['mouse_arrows'] != ''): ?>
        .glider-arrows:focus, 
        .glider-arrows:hover, 
        .glider-arrows.active { color: <?php echo $gfw_options['mouse_arrows']; ?>; }
    <?php endif;
    if($gfw_options['arrows_disable'] != ''): ?>
        .glider-arrows.disabled { color: <?php echo $gfw_options['arrows_disable']; ?>; }
    <?php endif;
    if($gfw_options['text_color'] != ''): ?>
        .glider__text-inner { color: <?php echo $gfw_options['text_color']; ?>; }
    <?php endif;
    if($gfw_options['bg-link'] != ''): ?>
        .glider__text a { background: <?php echo $gfw_options['bg-link']; ?>; }
    <?php endif;
    if($gfw_options['color-link'] != ''): ?>
        .glider__text a { color:  <?php echo $gfw_options['color-link']; ?>; }
    <?php endif;
    if($gfw_options['mouse-bg-link'] != ''): ?>
        .glider__text a:hover {  background: <?php echo $gfw_options['mouse-bg-link']; ?>; }
    <?php endif;
    if($gfw_options['mouse-color-link'] != ''): ?>
        .glider__text a:hover { color: <?php echo $gfw_options['mouse-color-link']; ?>; }
    <?php endif; ?>
</style>
<?php
} ?>