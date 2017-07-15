<?php
/**
 * Interface SortInterface
 */

namespace Wasif\tripSorter\libs;

/**
 * Interface SortInterface
 *
 * @package Wasif\tripSorter\libs
 */
interface SortInterface {
    /**
     * Mandatory sort method.
     * @param array $items
     */
    public static function sort(array $items);
}
