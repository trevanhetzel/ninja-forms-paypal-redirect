=== Plugin Name ===
Contributors: hetzelcreative
Donate link: http://trevan.co
Tags: ninja, forms, paypal
Requires at least: 4.3
Tested up to: 4.3
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds ability to redirect to PayPal with user submitted form values as prices.

== Description ==

This small plugin takes the values of certain fields in a Ninja Form and adds them to a total that is then passed to PayPal upon form submission. All you need is a standard PayPal account!

== Usage ==

After creating a new form, simply create a new Action (from the Emails & Actions tab) and select "PayPal Redirect" as the type. Give it whatever name you want ("PayPal Redirection" works fine) and enter the email address of the PayPal account you want to use.

Then, enter the IDs (comma separated) of the fields you wish to be used to calculate the total upon being sent to PayPal. You can get the ID of a field after expanding one on the "Build Your Form" tab. The very first line should say "Field ID:" just copy that number.

As long as the value of a field is a number (i.e. 20, 20.00, 21.56), the plugin will add it to the total amount that's sent to PayPal.

== Installation ==

1. Upload [`ninja-forms-paypal-redirect`](https://github.com/trevanhetzel/ninja-forms-paypal-redirect/archive/master.zip) to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Install version 2.9.31 or later of the [Ninja Forms](https://wordpress.org/plugins/ninja-forms/) plugin (Ninja Forms - PayPal Redirect depends upon the Ninja Forms plugin)
4. Create a new Action with the "PayPal Redirect" Type on a Ninja Form (don't forget to enter your PayPal email address)

== Screenshots ==

1. Admin view

== Changelog ==

= v1.0 =
* Initial release
