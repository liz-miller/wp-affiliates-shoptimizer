# wp-affiliates-shoptimizer
Adds support for WP Affiliate Manager in the Shoptimizer Theme. 
Creates an Affiliates Tab in My Account.

# Requirements
You must have the WP Affiliate Manager plugin installed and activated.
Plugin: https://wpaffiliatemanager.com/

This plugin requires 3 pages, which I've created on the following links:
- Affiliate Home: /affiliates/home (Make sure this page has the [AffiliatesHome] shortcode)
- Affiliate Login: /affiliates/login (Make sure this page has the [AffiliatesLogin] shortcode)
- Affiliate Registration: /affiliates/register (Make sure this page has the [AffiliatesRegister] shortcode)

# Installation
1) Add the `my-account.php` code to your `functions.php` file. (This adds the Affiliates tab on /my-account page)
2) Go into the WP Admin > Settings > Permalinks > Save your permalinks again (don't change them)
3) Open Appearance > Customize > Additional CSS and paste in the `style.css` code (This adds the $ icon to the Affiliates tab.)

That's it for now. Let me know if you have optimization or ideas for improvement.
