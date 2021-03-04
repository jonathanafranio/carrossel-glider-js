<?php 
function cgj_hex2rgba($color, $opacity = false) {
    $default = 'rgba(0,0,0,.5)';
    
	//Return default if no color provided
	if(empty($color)) return $default; 
 
	//Sanitize $color if "#" is provided 
    if ($color[0] == '#' ) {
    	$color = substr( $color, 1 );
    }
 
    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
        $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
        return $default;
    }
 
    $rgb =  array_map('hexdec', $hex);
 
    if($opacity){
    	if(abs($opacity) > 1) $opacity = 1.0;
    	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
    } else {
    	$output = 'rgb('.implode(",",$rgb).')';
    }

    return $output;
}
 

function cgj_styleCustom() {
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
        .glider-arrows { color: <?php echo $gfw_options['arrows_colors']; ?>; }
    <?php endif;
    if($gfw_options['mouse_arrows'] != ''): ?>
        .glider-arrows:focus, 
        .glider-arrows:hover, 
        .glider-arrows.active { color: <?php echo $gfw_options['mouse_arrows']; ?>; }
    <?php endif;
    if($gfw_options['arrows_disable'] != ''): ?>
        .glider-arrows.disabled { color: <?php echo $gfw_options['arrows_disable']; ?>; }
    <?php endif;
    if($gfw_options['bg_text'] != ''): 
    $bgText = cgj_hex2rgba($gfw_options['bg_text'], .5); ?>
        .glider__text { background: <?php echo $bgText; ?>; }
    <?php endif;
    if($gfw_options['text_color'] != ''): ?>
        .glider__text-inner { color: <?php echo $gfw_options['text_color']; ?>; }
    <?php endif;
    if($gfw_options['only_color'] != ''): ?>
        .only-text .glider__text-inner,
        .glider__small-text .glider__text-inner { color: <?php echo $gfw_options['only_color']; ?>; }
    <?php endif;
    if($gfw_options['bg-link'] != ''): ?>
        .glider__text a { background: <?php echo $gfw_options['bg-link']; ?>; }
        .glider__read-more { border-color: <?php echo $gfw_options['bg-link']; ?>; }
    <?php endif;
    if($gfw_options['color-link'] != ''): ?>
        .glider__text a { color:  <?php echo $gfw_options['color-link']; ?>; }
    <?php endif;
    if($gfw_options['mouse-bg-link'] != ''): ?>
        .glider__text a:hover {  background: <?php echo $gfw_options['mouse-bg-link']; ?>; }
        .glider__read-more { border-color: <?php echo $gfw_options['mouse-bg-link']; ?>; }
    <?php endif;
    if($gfw_options['mouse-color-link'] != ''): ?>
        .glider__text a:hover { color: <?php echo $gfw_options['mouse-color-link']; ?>; }
    <?php endif; ?>
</style>
<?php
} ?>