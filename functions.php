 add_filter('woocommerce_get_price_html', 'taktheme_dom_price_html', 10, 2);
function taktheme_dom_price_html($price, $product) {
    $currency_symbol = get_woocommerce_currency_symbol();
    $price = str_replace(['<bdi>', '</bdi>'], '', $price);
    $price = preg_replace('/<span class="woocommerce-Price-currencySymbol">.*?<\/span>/', $currency_symbol, $price);
    $price = preg_replace('/<span class="screen-reader-text">.*?<\/span>/', '', $price);
    return $price;
}