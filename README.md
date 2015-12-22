Ninja Forms - PayPal Redirect
==========

### Adds ability to redirect to PayPal with user submitted form values as prices.

This small plugin takes the values of certain fields in a Ninja Form and adds them to a total that is then passed to PayPal upon form submission. All you need is a standard PayPal account!

### Usage

After creating a new form, simply create a new Action (from the Emails & Actions tab) and select "PayPal Redirect" as the type. Give it whatever name you want ("PayPal Redirection" works fine) and enter the email address of the PayPal account you want to use.

This plugin only works with fields that have one of two labels: `Quantity` or `Amount`. `Quantity` should be a dropdown list, while `Amount` should be a hidden field with a custom default value of whatever the amount is. As long as you create a field with one of those labels, the plugin will pick it up.

### Installation

1. Upload [`ninja-forms-paypal-redirect`](https://github.com/trevanhetzel/ninja-forms-paypal-redirect/archive/master.zip) to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Install version 2.9.31 or later of the [Ninja Forms](https://wordpress.org/plugins/ninja-forms/) plugin (Ninja Forms - PayPal Redirect depends upon the Ninja Forms plugin)
4. Create a new Action with the "PayPal Redirect" Type on a Ninja Form (don't forget to enter your PayPal email address)

### Screenshots

![Desktop view](/assets/screenshot-1.png?raw=true "Admin view")
