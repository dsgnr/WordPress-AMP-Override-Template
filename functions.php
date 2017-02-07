<?php add_filter( 'amp_post_template_file', 'speakwp_amp_set_custom_template', 10, 3 );
function speakwp_amp_set_custom_template( $file, $type, $post ) {
    if ( 'single' === $type ) {
        $file = dirname( __FILE__ ) . '/amp/speakwp-amp-template.php';
    }
    return $file;
}
?>
