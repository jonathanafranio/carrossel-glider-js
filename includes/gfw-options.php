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
add_action( 'admin_init', 'gfw_register_settings' );

function gfw_theme_options() {
    // Add theme options page to the addmin menu
    add_menu_page( 'Carousel options', 'Carousel Config', 'edit_theme_options', 'carousel_options', 'gfw_theme_options_page' );
}    
add_action( 'admin_menu', 'gfw_theme_options' );


function gfw_theme_options_page(){
    global $gfw_options, $posts, $pages;
    if ( ! isset( $_REQUEST['updated'] ) ) $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. 
    ?>
    <div class="wrap">
        <h2>Carousel Options</h2>

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
									<th scope="row"><label for="arrows_colors">Cores das setas:</label></th>
									<td>
										<input id="arrows_colors" name="gfw_options[arrows_colors]" type="color" value="<?php  esc_attr_e($settings['arrows_colors']); ?>"  style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse_arrows">Cores das setas com mouse acima:</label></th>
									<td>
										<input id="mouse_arrows" name="gfw_options[mouse_arrows]" type="color" value="<?php  esc_attr_e($settings['mouse_arrows']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="arrows_disable">Cores das setas desativadas:</label></th>
									<td>
										<input id="arrows_disable" name="gfw_options[arrows_disable]" type="color" value="<?php  esc_attr_e($settings['arrows_disable']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="bullets_colors">Bullets Cores:</label></th>
									<td>
										<input id="bullets_colors" name="gfw_options[bullets_colors]" type="color" value="<?php  esc_attr_e($settings['bullets_colors']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse_bullets">Bullets Cores com mouse acima:</label></th>
									<td>
										<input id="mouse_bullets" name="gfw_options[mouse_bullets]" type="color" value="<?php  esc_attr_e($settings['mouse_bullets']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
                                    <th colspan="2"><h3>Cores para text-full-image e text-half-image</h3></th>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="bg_text">Fundo do Texto:</label></th>
									<td>
										<input id="bg_text" name="gfw_options[bg_text]" type="color" value="<?php  esc_attr_e($settings['bg_text']); ?>" style="width: 250px" />
									</td>
								</tr>
                                
                                <tr valign="top">
									<th scope="row"><label for="text_color">Texto Cores:</label></th>
									<td>
										<input id="text_color" name="gfw_options[text_color]" type="color" value="<?php  esc_attr_e($settings['text_color']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
                                    <th colspan="2"><h3>Cores para only_text e small-thumb</h3></th>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="only_color">Texto Cores:</label></th>
									<td>
										<input id="only_color" name="gfw_options[only_color]" type="color" value="<?php  esc_attr_e($settings['only_color']); ?>" style="width: 250px" />
									</td>
								</tr>

                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="bg-link">Background Link:</label></th>
									<td>
										<input id="bg-link" name="gfw_options[bg-link]" type="color" value="<?php  esc_attr_e($settings['bg-link']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="color-link">Cor do texto Link:</label></th>
									<td>
										<input id="color-link" name="gfw_options[color-link]" type="color" value="<?php  esc_attr_e($settings['color-link']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr>
                                    <td colspan="2"><hr /></td>
                                </tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse-bg-link">Background Link com mouse acima:</label></th>
									<td>
										<input id="mouse-bg-link" name="gfw_options[mouse-bg-link]" type="color" value="<?php  esc_attr_e($settings['mouse-bg-link']); ?>" style="width: 250px" />
									</td>
								</tr>
                                <tr valign="top">
									<th scope="row"><label for="mouse-color-link">Cor do texto Link com mouse acima:</label></th>
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
				<p class="submit"><input type="submit" class="button-primary" value="Savar" /> &nbsp; &nbsp; <input type="reset" class="button-secondary" value="Limpar" id="resert-btn" /></p>
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
                //alert("vai tomar no cu!!!! _|_");


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
	$input['arrows_colors'] = $input['arrows_colors'];
	$input['mouse_arrows'] = $input['mouse_arrows'];
	$input['arrows_disable'] = $input['arrows_disable'];
    $input['bullets_colors'] = $input['bullets_colors'];
    $input['mouse_bullets'] = $input['mouse_bullets'];

    $input['bg_text'] = $input['bg_text'];
    $input['text_color'] = $input['text_color'];
    $input['only_color'] = $input['only_color'];


    $input['bg-link'] = $input['bg-link'];
    $input['color-link'] = $input['color-link'];
    $input['mouse-bg-link'] = $input['mouse-bg-link'];
    $input['mouse-color-link'] = $input['mouse-color-link'];
    return $input;
}
?>