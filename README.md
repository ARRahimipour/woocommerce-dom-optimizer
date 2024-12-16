# WooCommerce DOM Optimizer

This project provides a script that optimizes the structure of WooCommerce product price codes and reduces unnecessary nested HTML elements, improving the performance of WordPress WooCommerce sites. The optimization reduces DOM size, which directly addresses the "Avoid Excessive DOM Size" warning in Google Search Console, leading to faster page load times and better SEO performance.

## Features

- Optimizes WooCommerce product price structures.
- Removes redundant and nested HTML elements from product cards.
- Reduces DOM size by 100-200 elements.
- Improves page load times and user experience.
- Fixes the "Avoid Excessive DOM Size" issue in Google Search Console.
- Enhances SEO performance by improving Core Web Vitals (especially LCP).

## Why DOM Size Matters?

Excessive DOM size occurs when a page contains too many nested or redundant elements, leading to slower page rendering times. This is a common issue for WooCommerce stores that display numerous product cards, which can increase DOM size and negatively affect both performance and SEO.

Google Search Console may flag this as the **"Avoid Excessive DOM Size"** issue, which can affect your site's rankings and user experience.

## Installation

### 1. Clone or Download the Repository

Clone or download the repository to your local machine or project directory.

```bash
git clone https://github.com/ARRahimipour/woocommerce-dom-optimizer.git
```

### 2. Add the Script to `functions.php`

To use the script, copy the code from the repository and add it to your WordPress theme’s `functions.php` file.

For example:

```php
function optimize_woocommerce_price_structure() {
    ?>
    <script type="text/javascript">
        // Your optimization script here
    </script>
    <?php
}
add_action('wp_footer', 'optimize_woocommerce_price_structure');
```

This will automatically inject the optimization script into the footer of your site, ensuring it runs on WooCommerce product pages.

### 3. Save Changes

After adding the script to `functions.php`, save the changes and reload your website. The DOM size should now be reduced, improving performance.

## Usage

Once the script is added to `functions.php`, it will automatically optimize the DOM structure on product listing pages. Specifically, it will:

- Clean up redundant HTML in the product cards.
- Simplify the structure of product price elements.
- Reduce DOM elements by up to 200, improving performance and SEO.

No further configuration is required.

## Contributing

If you have suggestions for improvements or want to contribute to this project, feel free to fork the repository and submit a pull request.

Please ensure that your contributions align with the following:

- Follow best practices for WordPress and WooCommerce compatibility.
- Ensure the code is optimized for performance.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
