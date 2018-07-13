<?php
/**
 * Getting started section.
 *
 * @package soledad
 */

?>
<h2 class="nav-tab-wrapper">
	<a href="<?php echo admin_url( 'admin.php?page=soledad_dashboard_welcome' ) ?>" class="nav-tab"><?php esc_html_e( 'Getting started', 'soledad' ); ?></a>
	<a href="<?php echo admin_url( 'customize.php' ) ?>" class="nav-tab"><?php esc_html_e( 'Customize Style', 'soledad' ); ?></a>
	<a href="<?php echo admin_url( 'admin.php?page=soledad_custom_fonts' ) ?>" class="nav-tab nav-tab-active"><?php esc_html_e( 'Custom Fonts', 'soledad' ); ?></a>
	<?php if( ! penci_soledad_is_activated() ): ?>
	<a href="<?php echo admin_url( 'admin.php?page=soledad_active_theme' ) ?>" class="nav-tab"><?php esc_html_e( 'Active theme', 'soledad' ); ?></a>
	<?php endif; ?>
</h2>

<div id="penci-custom-fonts" class="gt-tab-pane gt-is-active penci-dashboard-wapper">

	<form method="post" action="options.php">
		<table class="widefat penci-table-options" cellspacing="0">
			<thead>
			<tr><th colspan="4">
					<h4 style="margin: 6px 0 15px 0; font-weight: bold; font-size: 20px;"><?php esc_html_e( 'Custom font files','soledad' ); ?></h4>
					<p class="description">
						<?php esc_html_e( 'You can generate your font file and format into .woff using','soledad' ); ?>
						<a rel="nofollow" href="<?php echo esc_url( 'http://www.fontsquirrel.com/tools/webfont-generator' ); ?>"><?php esc_html_e( 'fontsquirrel','soledad' ); ?></a>
						<?php esc_html_e( '(free tool)','soledad' ); ?>
						<br>
						<?php esc_html_e( 'You will need to refresh your customizer to see your font on the font list.','soledad' ); ?>
					</p>
				</th></tr>
			</thead>
			<tbody>
			<tr>
				<td class="custom-fonts-name">
					<strong><?php esc_html_e( 'Custom font file 1','soledad' ); ?></strong>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_1 = 'soledad-cf1';
						?>
						<input id="<?php echo esc_attr( $unique_id_1 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font1" value="<?php echo esc_attr( penci_get_option('soledad_custom_font1') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_1 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_1 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font3') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 1','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_1 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily1" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily1') ); ?>" />

				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 2','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_2 = 'soledad-cf2';
						?>
						<input id="<?php echo esc_attr( $unique_id_2 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font2" value="<?php echo esc_attr( penci_get_option('soledad_custom_font2') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_2 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_2 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font3') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 2','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_2 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily2" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily2') ); ?>" />

				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 3','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_3 = 'soledad-cf3';
						?>
						<input id="<?php echo esc_attr( $unique_id_3 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font3" value="<?php echo esc_attr( penci_get_option('soledad_custom_font3') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_3 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_3 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font3') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 3','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_3 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily3" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily3') ); ?>" />

				</td>
			</tr>
			<!-- 4 -->
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 4','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_4 = 'soledad-cf4';
						?>
						<input id="<?php echo esc_attr( $unique_id_4 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font4" value="<?php echo esc_attr( penci_get_option('soledad_custom_font4') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_4 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_4 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font4') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 4','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_4 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily4" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily4') ); ?>" />

				</td>
			</tr>
			<!-- 5 -->
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 5','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_5 = 'soledad-cf5';
						?>
						<input id="<?php echo esc_attr( $unique_id_5 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font5" value="<?php echo esc_attr( penci_get_option('soledad_custom_font5') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_5 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_5 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font5') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 5','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_5 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily5" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily5') ); ?>" />

				</td>
			</tr>
			<!-- 6 -->
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 6','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_6 = 'soledad-cf6';
						?>
						<input id="<?php echo esc_attr( $unique_id_6 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font6" value="<?php echo esc_attr( penci_get_option('soledad_custom_font6') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_6 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_6 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font6') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 6','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_6 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily6" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily6') ); ?>" />

				</td>
			</tr>
			<!-- 7 -->
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 7','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_7 = 'soledad-cf7';
						?>
						<input id="<?php echo esc_attr( $unique_id_7 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font7" value="<?php echo esc_attr( penci_get_option('soledad_custom_font7') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_7 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_7 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font7') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 7','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_7 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily7" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily7') ); ?>" />

				</td>
			</tr>
			<!-- 8 -->
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 8','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_8 = 'soledad-cf8';
						?>
						<input id="<?php echo esc_attr( $unique_id_8 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font8" value="<?php echo esc_attr( penci_get_option('soledad_custom_font8') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_8 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_8 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font8') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 8','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_8 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily8" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily8') ); ?>" />

				</td>
			</tr>
			<!-- 9 -->
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 9','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_9 = 'soledad-cf9';
						?>
						<input id="<?php echo esc_attr( $unique_id_9 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font9" value="<?php echo esc_attr( penci_get_option('soledad_custom_font9') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_9 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_9 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font9') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 9','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_9 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily9" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily9') ); ?>" />

				</td>
			</tr>
			<!-- 10 -->
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font file 10','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'Upload the link to the file ( .woff format )','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<div class="penci-upload-font-controls">
						<?php
						$unique_id_10 = 'soledad-cf10';
						?>
						<input id="<?php echo esc_attr( $unique_id_10 ); ?>" style="width: 100%" type="text" class="penci-upload-link-font" name="soledad_custom_font10" value="<?php echo esc_attr( penci_get_option('soledad_custom_font10') ); ?>" />
						<div class="penci-upload-font-actions">
							<a id="<?php echo esc_attr( $unique_id_10 ); ?>-button-upload" class="button button-upload"><?php esc_html_e( 'Upload','soledad' ); ?></a>
							<a id="<?php echo esc_attr( $unique_id_10 ); ?>-button-delete" class="button button-remove <?php echo ( ! penci_get_option('soledad_custom_font10') ? 'button-hide' : '' ); ?>"><?php esc_html_e( 'Remove','soledad' ); ?></a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<td class="custom-fonts-name">
					<?php esc_html_e( 'Custom font family 10','soledad' ); ?>
					<span class="status-small-text"><?php esc_html_e( 'The font name you can find','soledad' ); ?></span>
				</td>
				<td class="custom-fonts-value">
					<input id="<?php echo esc_attr( $unique_id_10 ); ?>family" style="width: 50%" type="text" class="penci-upload-link-font" name="soledad_custom_fontfamily10" value="<?php echo esc_attr( penci_get_option('soledad_custom_fontfamily10') ); ?>" />

				</td>
			</tr>
			</tbody>
		</table>
		<input type="hidden" name="_page" value="soledad_custom_fonts">

		<?php submit_button(); ?>

	</form>

</div>
