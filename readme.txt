
=== AddFunc Head & Footer Code ===

Contributors: addfunc,average.technology,joerhoney
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7AF7P3TFKQ2C2
Tags: head code, footer code, head, footer, head footer code, header footer code, header footer, header code, header, custom head, custom footer, custom header, Google Analytics code, Google Analytics head code, Google Analytics footer code, Google Analytics tracking code, Google Analytics conversion code, Google Analytics remarketing code
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily add code to your head and/or footer, site-wide and/or on any individual page/post.

== Description ==

Allows admins to add code to the `<head>` and/or footer of an individual post and/or site-wide. Ideal for scripts such as Google Analytics conversion tracking code and any other general or page-specific JavaScript.

**Custom support tickets are available**

See [Other Notes][1] tab for details.

[1]: http://wordpress.org/plugins/addfunc-head-footer-code/other_notes/

== Installation ==

1. Upload the entire `/addfunc-head-footer-code` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the *Plugins* menu in WordPress
3. Add code site-wide in *Settings>Head & Footer Code* or on individual pages/posts using the Head & Footer Code meta box when in edit mode in a page (or any post type)

== Frequently Asked Questions ==

= Where does the head code output? =

Wherever `wp_head()` is located in your theme.

= Where does the footer code output? =

Wherever `wp_footer()` is located in your theme.

= Does it really require WordPress 3.0.1 or later? =

I have not tested it on earlier versions. In fact, I could use help with testing. Feel free to try it out in an earlier version and let me know if it works! :)

= Does AddFunc have a website? =

The cobbler has no shoes. ...we're working on it.

== Screenshots ==

1. Simply paste your code into one of these two fields and it will be included on every page of your website.

2. Add your code to these fields respectively and it will output specifically to this page, post or custom post type.

== Changelog ==

= 1.1 =
28-Nov-2014

*   Fixes meta box nounce
*   Changes all references to Average (including but not limited to "avrg", "average", etc.) to relate to AddFunc (changing project name)
*   Changes a few other function and variable names for namespacing purposes
*   Submitted to WordPress under the name AddFunc

= 1.0 =
7-Aug-2014

*   Includes readme.txt
*   Submitted to WordPress

= 0.4.1 =
6-Aug-2014

*   Code cleaned up (mostly comments removed)
*   Excludes unnecessary file: style.css

= 0.4 =
8-Jul-2014

*   Bug fix: replaced "my-meta-box-id" with "avrghdftrcdMetaBox" (duh)

= 0.3 =
27-Oct-2013

*   Hid Head & Footer Code meta box from non-admin users

= 0.2 =
15-Oct-2013

*   Adds a Head & Footer Code settings page for site-wide code (for admins only)

= 0.1 =
14-Aug-2013

*   Adds Head & Footer Code meta box to all pages, posts and cusom post types
*   Saves Head & Footer Code entry to the database as custom fields
*   Outputs code to the website in `wp_head()` and `wp_footer()`

== Custom Support ==

If you have a custom support need, [please purchase your support ticket here](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7AF7P3TFKQ2C2). Support tickets are responded to within 24 hours, but we answer them as soon as possible.

**How it works**

1.   [Purchase a support ticket via PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7AF7P3TFKQ2C2)
2.   You get a chance to provide the best way to contact you and a description of your need
3.   I contact you as soon as I can (no less than 24 hours) and help resolve your issue

**Note:** This is for custom needs for help, not problems with the plugin, or instructions that should already be explain in the description. If you feel there are important details omitted from the description, installation steps, etc. of the plugin, please report them in the Support forum. Thanks!

== Upgrade Notice ==
