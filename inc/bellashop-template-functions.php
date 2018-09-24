<?php

if (!function_exists('bellashop_header_container')) {
    /**
     * The header container.
     */
    function bellashop_header_container()
    {
        echo '<div class="col-full">';
    }
}

if (!function_exists('bellashop_header_container_close')) {
    /**
     * The header container close.
     */
    function bellashop_header_container_close()
    {
        echo '</div>';
    }
}
