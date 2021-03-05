<?php
function cgj_textHalfImage($gfwLoop, $atts){
    $returnHtml = "";
    
    if ( $gfwLoop->have_posts() ) :    
        $startHtml = '<div class="glider-contain">
        <div class="glider half-container" 
            id="'.$atts['id'].'" 
            data-desktop-show="'.$atts['desktop-show'].'" 
            data-laptop-show="'.$atts['laptop-show'].'" 
            data-tablet-show="'.$atts['tablet-show'].'" 
            data-mobile-show="'.$atts['mobile-show'].'" 
            data-dots="'.$atts['dots'].'" 
            data-arrows="'.$atts['arrows'].'" 
            data-infinit="'.$atts['infinit'].'">';
        
        $htmlCarousel = '';
        while ( $gfwLoop->have_posts() ) : $gfwLoop->the_post();
            global $post;
            $linkCarousel = get_post_meta($post->ID, 'url_link', true);
            $target_link = get_post_meta($post->ID, 'target_link', true);
            $htmlCarousel .= '<div>';
            $htmlCarousel .= '<span  class="glider__item">'; 
                
                if ( has_post_thumbnail() ):
                    $htmlCarousel .= get_the_post_thumbnail( null, $atts['resolution'] );
                endif;

                $htmlCarousel .= '<article class="glider__text">';
                    $htmlCarousel .= '<div class="glider__text-inner">';
                    $htmlCarousel .= '<h3 class="glider__text-title">'.get_the_title().'</h3>';
                    $htmlCarousel .= '<span class="glider__text-txt">'.get_the_excerpt().'</span>';
                    if($linkCarousel != '') $htmlCarousel .= '<a href="'.$linkCarousel.'" target="'.$target_link.'" class="glider__read-more">Leia Mais</a>';

                    $htmlCarousel .= '</div>';
                $htmlCarousel .= '</article>';

            $htmlCarousel .= '</span>';
            $htmlCarousel .= '</div>';
        endwhile;

        $endHtml = '</div>';

        if($atts['arrows'] == 'true') {
            $prevSvg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>';

            $nextSvg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>';

            $endHtml .= '<button role="button" aria-label="Previous" class="glider-arrows prev" id="glider-prev-'.$atts['id'].'">'.$prevSvg.'</button>';
            $endHtml .= '<button role="button" aria-label="Next" class="glider-arrows next" id="glider-next-'.$atts['id'].'">'.$nextSvg.'</button>';

        }

        if($atts['dots'] == 'true') :
            $endHtml .= '<div id="dots-'.$atts['id'].'"></div>';
        endif;
        $endHtml .= '</div>';

    $returnHtml .= $startHtml.''.$htmlCarousel.''.$endHtml;
    endif;

    return $returnHtml;
}

?>