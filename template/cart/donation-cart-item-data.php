<?php
/**
 * Cart item data (when outputting non-flat)
 * 
 * @author  Varun Sridharan
 * @package Quick Donation For WooCommerce/Templates/cart
 * @version 0.1
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<dl class="variation">
	<?php foreach ( $item_data as $data ) : ?>
		<dt class="variation-<?php echo sanitize_html_class( $data['key'] ); ?>"><?php echo wp_kses_post( $data['key'] ); ?>:</dt>
		<dd class="variation-<?php echo sanitize_html_class( $data['key'] ); ?>"><?php echo wp_kses_post( wpautop( $data['display'] ) ); ?></dd>
	<?php endforeach; ?>
</dl>
