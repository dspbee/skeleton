<?php
/**
 * Path to the app directory.
 */
define('LC_APP_ROOT', dirname(__DIR__) . '/app/');

/**
 * Array of the language codes. First item is default language.
 */
define('LC_LANGUAGE_LIST', []);

/**
 * Array of the packages.
 */
define('LC_PACKAGE_LIST', ['Control', 'Custom']);

/**
 * Custom route class for the package.
 */
define('LC_ROUTE_CLASS_LIST', [
    'Custom' => 'CustomRoute'
]);