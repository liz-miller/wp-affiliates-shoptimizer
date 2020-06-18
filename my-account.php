/*
 * Add affiliate panel to My Account
 */
add_filter ( 'woocommerce_account_menu_items', 'lr_affiliate_dashboard_link', 40 );
function lr_affiliate_dashboard_link( $menu_links ){

	$menu_links = array_slice( $menu_links, 0, 7, true )
	+ array( 'affiliate-dashboard' => 'Affiliates' )
	+ array_slice( $menu_links, 5, NULL, true );

	return $menu_links;
}

add_action( 'init', 'lr_add_endpoint' );
function lr_add_endpoint() {
	add_rewrite_endpoint( 'affiliate-dashboard', EP_PAGES );
}

add_action( 'woocommerce_account_affiliate-dashboard_endpoint', 'lr_my_account_endpoint_content' );
function lr_my_account_endpoint_content() {
  echo '<h3>Join our Affiliate Program!</h3><p>Welcome to the Affiliate Dashboard!</p>';
  echo do_shortcode( ' [AffiliatesLogin] ' );
  echo '<br>';
  echo '<a href="/affiliates/home">Click here</a> to open your affiliate dashboard.';
}
