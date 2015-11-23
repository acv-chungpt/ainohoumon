<?php
/*
Plugin Name: WP Snow Drops
Plugin URI: http://smkn.xsrv.jp/blog/2010/12/wordpress-plugin-wp_snowdrops/
Description: ページ上に雪を降らせます。Snow falls in your page(with JavaScript).
Version: 1.0
Author: smkn
Author URI: http://smkn.xsrv.jp/blog/

////////////////////////////////////////////////////////////////////
Copyright 2010 smkn (URL : http://smkn.xsrv.jp/blog/)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
////////////////////////////////////////////////////////////////////
*/

add_action('admin_menu', 'wp_snowdrops_options');
function wp_snowdrops_options(){
	add_options_page('WP SnowDrops', 'WP SnowDrops', 8, basename(__FILE__), 'wp_snowdrops_options_page');
}
function wp_snowdrops_options_page(){
?>
<div class="wrap">
	<h2>Settings for WP SnowDrops</h2>
	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row"><label for="sd_flakesMax">sd_flakesMax</label></th>
				<td>
					<input type="text" name="sd_flakesMax" value="<?php echo get_option('sd_flakesMax'); ?>" size="10" />
					<span class="description">降る雪 + 積もる雪の総数（少ないほどCPU消費が抑えられます）</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="sd_flakesMaxActive">sd_flakesMaxActive</label></th>
				<td>
					<input type="text" name="sd_flakesMaxActive" value="<?php echo get_option('sd_flakesMaxActive'); ?>" size="10" />
					<span class="description">降る雪の総数（少ないほどCPU消費が抑えられます）</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="sd_vMaxX">sd_vMaxX</label></th>
				<td>
					<input type="text" name="sd_vMaxX" value="<?php echo get_option('sd_vMaxX'); ?>" size="5" />
					<span class="description">横方向に降る雪の最高速度（遅 1 ～ 10 早）</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="sd_vMaxY">sd_vMaxY</label></th>
				<td>
					<input type="text" name="sd_vMaxY" value="<?php echo get_option('sd_vMaxY'); ?>" size="5" />
					<span class="description">縦方向に降る雪の最高速度（遅 1 ～ 10 早）</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="sd_snowStick">sd_snowStick</label></th>
				<td>
					<select name="sd_snowStick">
						<option <?php if (get_option('sd_snowStick') == '1') echo 'selected="selected"'; ?> value="1">Yes</option>
						<option <?php if (get_option('sd_snowStick') == '0') echo 'selected="selected"'; ?> value="0">No</option>
					</select>
					<span class="description">ページ最下部に雪を積もらせるかどうか</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="sd_followMouse">sd_followMouse</label></th>
				<td>
					<select name="sd_followMouse">
						<option <?php if (get_option('sd_followMouse') == '1') echo 'selected="selected"'; ?> value="1">Yes</option>
						<option <?php if (get_option('sd_followMouse') == '0') echo 'selected="selected"'; ?> value="0">No</option>
					</select>
					<span class="description">雪をマウスに追従させるかどうか</span>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><label for="sd_useMeltEffect">sd_useMeltEffect</label></th>
				<td>
					<select name="sd_useMeltEffect">
						<option <?php if (get_option('sd_useMeltEffect') == '1') echo 'selected="selected"'; ?> value="1">Yes</option>
						<option <?php if (get_option('sd_useMeltEffect') == '0') echo 'selected="selected"'; ?> value="0">No</option>
					</select>
					<span class="description">雪が溶け消えるエフェクトをかけるかどうか</span>
				</td>

			</tr>

			<tr valign="top">
				<th scope="row"><label for="sd_useTwinkleEffect">sd_useTwinkleEffect</label></th>
				<td>
					<select name="sd_useTwinkleEffect">
						<option <?php if (get_option('sd_useTwinkleEffect') == '1') echo 'selected="selected"'; ?> value="1">Yes</option>
						<option <?php if (get_option('sd_useTwinkleEffect') == '0') echo 'selected="selected"'; ?> value="0">No</option>
					</select>
					<span class="description">雪がまたたくエフェクトをかけるかどうか</span>
				</td>
			</tr>
		</table>

		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="sd_flakesMax,sd_flakesMaxActive,sd_vMaxX,sd_vMaxY,sd_snowStick,sd_followMouse,sd_useMeltEffect,sd_useTwinkleEffect" />
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" class="button-primary" /></p>

	</form>
</div>
<?php
}

add_action('admin_init', 'wp_snowdrops_snow_init');
function wp_snowdrops_init(){
	register_setting('wp_snowdrops_options', 'sd_flakesMax');
	register_setting('wp_snowdrops_options', 'sd_flakesMaxActive');
	register_setting('wp_snowdrops_options', 'sd_vMaxX');
	register_setting('wp_snowdrops_options', 'sd_vMaxY');
	register_setting('wp_snowdrops_options', 'sd_snowStick');
	register_setting('wp_snowdrops_options', 'sd_followMouse');
	register_setting('wp_snowdrops_options', 'sd_useMeltEffect');
	register_setting('wp_snowdrops_options', 'sd_useTwinkleEffect');
}

function wp_snowdrops_default(){
	add_option('sd_flakesMax', 64);
	add_option('sd_flakesMaxActive', 64);
	add_option('sd_vMaxX', 2);
	add_option('sd_vMaxY', 3);
	add_option('sd_snowStick', 1);
	add_option('sd_followMouse', 0);
	add_option('sd_useMeltEffect', 1);
	add_option('sd_useTwinkleEffect', 0);
}
register_activation_hook( __FILE__, 'wp_snowdrops_default' );

function wp_snowdrops() {
	$snowPath = get_option('siteurl').'/wp-content/plugins/wp_snowdrops/';
	$snowJS = '<script type="text/javascript" src="'.$snowPath.'js/snowstorm.js"></script>'."\n";
	$snowJS .= '
		<script type="text/javascript">
		snowStorm.flakesMax = '.get_option('sd_flakesMax').';
		snowStorm.flakesMaxActive = '.get_option('sd_flakesMaxActive').';
		snowStorm.vMaxX = '.get_option('sd_vMaxX').';
		snowStorm.vMaxY = '.get_option('sd_vMaxY').';
		snowStorm.snowStick = '.get_option('sd_snowStick').';
		snowStorm.followMouse = '.get_option('sd_followMouse').';
		snowStorm.useMeltEffect = '.get_option('sd_useMeltEffect').';
		snowStorm.useTwinkleEffect = '.get_option('sd_useTwinkleEffect').';
		</script>
	';
	echo $snowJS;
}

add_action('wp_head', 'wp_snowdrops');
?>