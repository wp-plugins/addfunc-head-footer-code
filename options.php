<div class="wrap">
  <?php screen_icon(); ?>
  <h2>Head & Footer Code</h2>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <div id="post-body-content">
  <form action="options.php" method="post" id="<?php echo $plugin_id; ?>_options_form" name="<?php echo $plugin_id; ?>_options_form">
  <?php settings_fields($plugin_id.'_options'); ?>
    <label for="aFhfc_site_wide_head_code">
      <h2 class="title">Site-wide Head Code</h2>
      <p><textarea name="aFhfc_site_wide_head_code" rows="10" cols="50" id="aFhfc_site_wide_head_code" class="large-text code"><?php echo get_option('aFhfc_site_wide_head_code'); ?></textarea></p>
    </label>
    <label for="aFhfc_site_wide_footer_code">
      <h2 class="title">Site-wide Footer Code</h2>
      <p><textarea name="aFhfc_site_wide_footer_code" rows="10" cols="50" id="aFhfc_site_wide_footer_code" class="large-text code"><?php echo get_option('aFhfc_site_wide_footer_code'); ?></textarea></p>
    </label>
<?php submit_button(); ?>
  </form>
      </div> <!-- post-body-content -->
      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">
            <h2>Support Tickets</h2>
            <p>If you need custom support for this plugin (AddFunc Head & Footer Code) or any other AddFunc plugin, you can purchase help with a support ticket below. Support tickets are responded to within 24 hours, but we answer them as soon as possible.</p>
            <p><strong>How it works</strong></p>
            <ol>
              <li>Purchase a support ticket below</li>
              <li>I contact you as soon as I can (no less than 24 hours) and help resolve your issue</li>
              <li>That's it!</li>
            </ol>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="2ALABGHC83M4W">
              <table>
                <tr>
                  <td><input type="hidden" name="on0" value="Name your ticket">Name your ticket</td>
                </tr>
                <tr>
                  <td><input type="text" name="os0" maxlength="200"></td>
                </tr>
                <tr>
                  <td><input type="hidden" name="on1" value="Best way to contact you">Best way to contact you</td>
                </tr>
                <tr>
                  <td><input type="text" name="os1" maxlength="200"></td>
                </tr>
              </table>
              <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-small.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            <p><strong>Note</strong>: This is for&nbsp;<em>custom</em>&nbsp;needs for help, not problems with the plugin, or instructions that should already be explain in the description. If you feel there are important details omitted from the <a href="http://wordpress.org/plugins/addfunc-head-footer-code/" target="_blank">Description</a>, <a href="http://wordpress.org/plugins/addfunc-head-footer-code/installation/" target="_blank">Installation</a> steps, etc. of the plugin, please report them in the <a href="http://wordpress.org/support/plugin/addfunc-head-footer-code" target="_blank">Support forum</a>. Thanks!</p>
      </div> <!-- #postbox-container-1 .postbox-container -->
    </div> <!-- #post-body .metabox-holder .columns-2 -->
    <br class="clear">
  </div> <!-- #poststuff -->
</div>