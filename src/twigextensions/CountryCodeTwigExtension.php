<?php
/**
 * CountryCode plugin for Craft CMS 3.x
 *
 * Get country code per IP
 *
 * @link      https://github.com/cacique-coder
 * @copyright Copyright (c) 2018 Daniel Zambrano
 */

namespace netengine\countrycode\twigextensions;

use netengine\countrycode\CountryCode;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Daniel Zambrano
 * @package   CountryCode
 * @since     0.0.1
 */
class CountryCodeTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'CountryCode';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [];
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('getCountryCode') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('get', [$this, 'getCountryCode']),
        ];
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @param null $text
     *
     * @return string
     */
    public function getCountryCode($text = null)
    {
        $result = $text . " in the way";

        return $result;
    }
}
