<?php

/**
 * Header.
 *
 * @see  storefront_skip_links()
 * @see  storefront_secondary_navigation()
 * @see  storefront_site_branding()
 * @see  storefront_primary_navigation()
 */
function replace_storefront_header_hooks()
{
    remove_action('storefront_header', 'storefront_header_container', 0);
    add_action('storefront_header', 'bellashop_header_container', 0);

    remove_action('storefront_header', 'storefront_site_branding', 20);
    add_action('storefront_header', 'bellashop_site_branding', 20);

    remove_action('storefront_header', 'storefront_header_container_close', 41);
    add_action('storefront_header', 'bellashop_header_container_close', 41);

    remove_action('storefront_header', 'storefront_primary_navigation', 50);
    add_action('storefront_header', 'bellashop_primary_navigation', 50);
}
