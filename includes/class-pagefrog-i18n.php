<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://simplemediacode.com/
 * @since      1.0.0
 *
 * @package    pagefrog
 * @subpackage pagefrog/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    pagefrog
 * @subpackage pagefrog/includes
 * @author     PageFrog Team <team@pagefrog.com>
 */
class PageFrog_i18n
{

    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
                'pagefrog', false, dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }

}
