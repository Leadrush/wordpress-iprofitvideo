<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   IPV
 * @author    Leadrush Ltd. <support@reallysuccessful.com>
 * @license   GPL-2.0+
 * @link      http://leadrushsupport.com/
 * @copyright 2014 Leadrush Ltd.
 */
?>

<div class="wrap">
<form method="POST" action="options.php">
	
	<?php settings_fields( 'ipv-settings-group' ); ?>

	<h2 class="title">iProfitVideo Embed Code</h2>

	<p><label for="ipv_script">Please enter the embed code provided by your iProfitVideo Application here.</label></p>

	<textarea name="ipv_script" id="jscode" class="large-text code" style="width:676px;height:350px"><?= get_option( 'ipv_script' );?></textarea>
	
	<p>By Default, the widget is embedded on all pages.</p>
	
	<p><label><input type="radio" id="radio_on" name="pages_radio"<?= (($on_pages = get_option( 'ipv_on_pages' ))?' checked':null) ?>> To enable the widget on specific pages only, enter the page titles below, one per line:</label></p>
	<textarea id="on_pages" name="ipv_on_pages" style="height:150px;resize:none;" class="regular-text"<?= ($on_pages?null:' disabled') ?>><?= $on_pages ?></textarea>
	
	<p><label><input type="radio" id="radio_off" name="pages_radio"<?= (($off_pages = get_option( 'ipv_off_pages' ))?' checked':null) ?>> To exclude the widget from specific pages (but display on all others), enter the page titles below, one per line:</label></p>
	<textarea id="off_pages" name="ipv_off_pages" style="height:150px;resize:none;" class="regular-text"<?= ($off_pages?null:' disabled') ?>><?= $off_pages ?></textarea>
	
	<br><br><span class="description">
	Note: Do not include the file extension (like .php), quotation marks, or any other punctuation,<br>
	just the title of the page as it appears in the list of pages in the admin panel.
	<pre>Example:
  Sample Page
  Another Sample Page</pre></span>

	<?php submit_button(); ?>

</form>

</div>
