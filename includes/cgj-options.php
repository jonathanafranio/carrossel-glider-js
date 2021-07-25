<?php
$gfw_options = array(
    'arrows_colors' => '',
    'mouse_arrows' => '',
    'arrows_disable' => '',
    'bullets_colors' => '',
    'mouse_bullets' => '',
    'bg_text' => '',
    'text_color' => '',
    'only_color' => '',
    'bg-link' => '',
    'color-link' => '',
    'mouse-bg-link' => '',
    'mouse-color-link' => '',
);
function gfw_register_settings() {
    // Register settings and call sanitation functions
    register_setting( 'gfw_theme_options', 'gfw_options', 'gfw_validate_options' );
}    
add_action('admin_init', 'gfw_register_settings');

function gfw_theme_options() {
    // Add theme options page to the addmin menu
    add_menu_page( 'Carousel options', __('Carousel Config', 'carrossel-glider-js'), 'edit_theme_options', 'carousel_options', 'gfw_theme_options_page' );
}    
add_action('admin_menu', 'gfw_theme_options');


function gfw_theme_options_page(){
    global $gfw_options, $posts, $pages;
    if ( ! isset( $_REQUEST['updated'] ) ) $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. 
    ?>
    <div class="wrap">
        <h2><?php echo __('Carousel Options', 'carrossel-glider-js'); ?></h2>

        <form method="post" action="options.php" id="form-upgrade-glider">
            <?php $settings = get_option( 'gfw_options', $gfw_options ); ?>

            <?php settings_fields( 'gfw_theme_options' );
			/* This function outputs some hidden fields required by the form,
			including a nonce, a unique number used to ensure the form has been submitted from the admin page
			and not somewhere else, very important for security */ ?>
            <div class="tabs-container">
				<div class="tab-contents">
                    <div class="tab-content">
						<div class="content-options">
							<table class="form-table">
                                <tr valign="top">
									<th scope="row"><label for="arrows_colors"><?php echo __('Arrow colors', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="arrows_colors" name="gfw_options[arrows_colors]" type="color" value="<?php  esc_attr_e($settings['arrows_colors']); ?>"  style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse_arrows"><?php echo __('Arrow colors with mouse over', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="mouse_arrows" name="gfw_options[mouse_arrows]" type="color" value="<?php  esc_attr_e($settings['mouse_arrows']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="arrows_disable"><?php echo __('Arrow colors disabled', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="arrows_disable" name="gfw_options[arrows_disable]" type="color" value="<?php  esc_attr_e($settings['arrows_disable']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="bullets_colors"><?php echo __('Bullets Colors', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="bullets_colors" name="gfw_options[bullets_colors]" type="color" value="<?php  esc_attr_e($settings['bullets_colors']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse_bullets"><?php echo __('Bullets Colors with mouse over', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="mouse_bullets" name="gfw_options[mouse_bullets]" type="color" value="<?php  esc_attr_e($settings['mouse_bullets']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
                                    <th colspan="2"><h3><?php echo __('Colors for', 'carrossel-glider-js'); ?> "text-full-image" <?php echo __('and', 'carrossel-glider-js'); ?> "text-half-image":</h3></th>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="bg_text"><?php echo __('Background text', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="bg_text" name="gfw_options[bg_text]" type="color" value="<?php  esc_attr_e($settings['bg_text']); ?>" style="width: 250px" />
									</td>
								</tr>
                                
                                <tr valign="top">
									<th scope="row"><label for="text_color"><?php echo __('Text color', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="text_color" name="gfw_options[text_color]" type="color" value="<?php  esc_attr_e($settings['text_color']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
                                    <th colspan="2"><h3><?php echo __('Colors for', 'carrossel-glider-js'); ?> "only_text" <?php echo __('and', 'carrossel-glider-js'); ?> "small-thumb":</h3></th>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="only_color"><?php echo __('Text color', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="only_color" name="gfw_options[only_color]" type="color" value="<?php  esc_attr_e($settings['only_color']); ?>" style="width: 250px" />
									</td>
								</tr>

                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="bg-link"><?php echo __('Background Link', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="bg-link" name="gfw_options[bg-link]" type="color" value="<?php  esc_attr_e($settings['bg-link']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="color-link"><?php echo __('Link text color', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="color-link" name="gfw_options[color-link]" type="color" value="<?php  esc_attr_e($settings['color-link']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse-bg-link"><?php echo __('Background Link with mouse over', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="mouse-bg-link" name="gfw_options[mouse-bg-link]" type="color" value="<?php  esc_attr_e($settings['mouse-bg-link']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse-color-link"><?php echo __('Link text color with mouse over', 'carrossel-glider-js'); ?>:</label></th>
									<td>
										<input id="mouse-color-link" name="gfw_options[mouse-color-link]" type="color" value="<?php  esc_attr_e($settings['mouse-color-link']); ?>" style="width: 250px" />
									</td>
								</tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-options">
				<p class="submit"><input type="submit" class="button-primary" value="<?php echo __('Save', 'carrossel-glider-js'); ?>" /> &nbsp; &nbsp; <input type="reset" class="button-secondary" value="<?php echo __('Reset', 'carrossel-glider-js'); ?>" id="resert-btn" /></p>
			</div>
        </form>

        <script type="text/javascript">
            //document.getElementById("text_color").setAttribute('type','text');
            document.getElementById('resert-btn').addEventListener('click', function(){  
                document.getElementById('arrows_colors').addEventListener('change', changeColor('arrows_colors', '#666666'));
                document.getElementById('mouse_arrows').addEventListener('change', changeColor('mouse_arrows', '#000000'));
                document.getElementById('arrows_disable').addEventListener('change', changeColor('arrows_disable', '#cccccc'));

                document.getElementById('bullets_colors').addEventListener('change', changeColor('bullets_colors', '#cccccc'));
                document.getElementById('mouse_bullets').addEventListener('change', changeColor('mouse_bullets', '#000000'));

                document.getElementById('bg_text').addEventListener('change', changeColor('bg_text', '#000000'));
                document.getElementById('text_color').addEventListener('change', changeColor('text_color', '#ffffff'));

                document.getElementById('only_color').addEventListener('change', changeColor('only_color', '#444444'));

                document.getElementById('bg-link').addEventListener('change', changeColor('bg-link', '#000000'));
                document.getElementById('color-link').addEventListener('change', changeColor('color-link', '#ffffff'));

                document.getElementById('mouse-bg-link').addEventListener('change', changeColor('mouse-bg-link', '#ffffff'));
                document.getElementById('mouse-color-link').addEventListener('change', changeColor('mouse-color-link', '#000000'));

                document.getElementById('form-upgrade-glider').submit();
            });

            function changeColor(id, val) {
                document.getElementById(id).setAttribute('type','text');
                document.getElementById(id).value = val;
            }
        </script>
    </div>
    <?php
}

/************************************************************************
*
* We strip all tags from the text field, to avoid vulnerablilties like XSS
*
************************************************************************/
function gfw_validate_options( $input ) {
    global $gfw_options, $posts, $pages;

    $settings = get_option( 'gfw_options', $gfw_options );
    
    //GENERAL
	$input['arrows_colors'] = wp_filter_nohtml_kses( $input['arrows_colors'] );
	$input['mouse_arrows'] = wp_filter_nohtml_kses( $input['mouse_arrows'] );
	$input['arrows_disable'] = wp_filter_nohtml_kses( $input['arrows_disable'] );
    $input['bullets_colors'] = wp_filter_nohtml_kses( $input['bullets_colors'] );
    $input['mouse_bullets'] = wp_filter_nohtml_kses( $input['mouse_bullets'] );

    $input['bg_text'] = wp_filter_nohtml_kses( $input['bg_text'] );
    $input['text_color'] = wp_filter_nohtml_kses( $input['text_color'] );
    $input['only_color'] = wp_filter_nohtml_kses( $input['only_color'] );


    $input['bg-link'] = wp_filter_nohtml_kses( $input['bg-link'] );
    $input['color-link'] = wp_filter_nohtml_kses( $input['color-link'] );
    $input['mouse-bg-link'] = wp_filter_nohtml_kses( $input['mouse-bg-link'] );
    $input['mouse-color-link'] = wp_filter_nohtml_kses( $input['mouse-color-link'] );
    return $input;
}
?>