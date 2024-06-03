<?php
function enqueue_parent_theme_style()
{
  wp_enqueue_style("bellerobe-style", get_template_directory_uri() . "/style.css"); // Linking stylesheets
  wp_enqueue_style("adobe", "https://use.typekit.net/slb7mne.css"); // Linking Adobe fonts
}
add_action('wp_enqueue_scripts', 'enqueue_parent_theme_style');

// Linking to script

function enqueue_custom_scripts()
{
  // Enqueue your custom script
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Remove gutenberg editor in WP

function ad_remove_gutenberg()
{
  remove_post_type_support("page", "editor");
  remove_post_type_support("post", "editor");
}
add_action("init", "ad_remove_gutenberg");

// Removing WooCommerce CSS

add_filter("woocommerce_enqueue_styles", "__return_empty_array");

// Adding product title on product pages

function insert_product_title()
{
  ?>
  <h1 class="product-title">
    <?php the_title() ?>
  </h1>
  <?php
}

add_action('woocommerce_single_product_summary', 'insert_product_title', 3);

// Adding title to category pages
function add_category_title_with_description() {
  ?>
  <div class="category-description">
      <h1 class="category-title">
          <?php single_term_title() ?>
      </h1>
      <?php
      // Get the current category object
      $category = get_queried_object();

      // Display the category description if available
      if ($category && !empty($category->description)) {
          ?>
          <div class="category-description">
              <?php echo wpautop($category->description); ?>
          </div>
          <?php
      }
      ?>
  </div>
  <?php
}

add_action("woocommerce_before_shop_loop", "add_category_title_with_description");

// Creating new custom widget
function product_filter_widget()
{
  register_sidebar(
    array(
      "name" => "Produkt filter",
      "id" => "product_filter",
      "before_widget" => "",
      "after_widget" => ""
    )
  );
}

add_action("widgets_init", "product_filter_widget");

// Placing the custom widget

function print_product_filter_widget()
{
  echo '<button class="filter-button" onclick="toggleProductFilter()">Filter</button>';
  echo '<div class="product_filter" id="productFilter">';
  dynamic_sidebar("product_filter");
  echo '</div>';
}

add_action("woocommerce_before_shop_loop", "print_product_filter_widget");


// Adding item count to add-to-basket button

function count_item_in_cart()
{
  $count = 0;
  foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
    $count += $cart_item['quantity'];
  }

  if ($count === 0) {
    echo '<style>#cartCount { display: none; }</style>';
  }

  return $count;
}

// REMOVE ADD TO CART BUTTON FROM PRODUCTS IN CERTAIN CATEGORIES

function remove_add_to_cart_button() {
  // Check if we're on a single product page
  if ( is_product() ) {
      // Get the current product ID
      $product_id = get_the_ID();
      
      // Check if the product is in the "Only in physical store" or "Dresses only in physical store" category
      if ( has_term( array('kun-fysisk-brudekjoler', 'kun-fysisk-gallakjoler', 'kun-fysisk-konfirmationskjoler', 'kun-fysisk-sko-tilbehor'), 'product_cat', $product_id ) ) {
          // Remove the add to cart button
          remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
          // Optionally, you can add custom CSS to hide the button completely
          echo '<style>.single_add_to_cart_button { display: none; }</style>';
      }
  }
}
add_action( 'woocommerce_single_product_summary', 'remove_add_to_cart_button', 1 );

