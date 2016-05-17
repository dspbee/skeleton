<?php
/**
 * Report all PHP errors.
 */
error_reporting(-1);
ini_set('display_errors', 0);
ob_implicit_flush(false);

/**
 * This check prevents access to debug front controllers that are deployed by accident to production servers.
 */
if (
    isset($_SERVER['HTTP_CLIENT_IP']) ||
    isset($_SERVER['HTTP_X_FORWARDED_FOR']) ||
    !(
        in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', 'fe80::1', '::1']) ||
        'cli-server' === php_sapi_name()
    )
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check "' . basename(__FILE__) . '" for more information.');
}

require dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Enable debug mode.
 */
\Dspbee\Bundle\Debug\Wrap::$debugEnabled = true;
\Dspbee\Bundle\Debug\Wrap::register();

try {
    /**
     * Process request and send response.
     */
    $app = new Dspbee\Core\Application(
        dirname(__DIR__) . '/app/',
        ['ru'],
        ['Control', 'Custom']
    );
    $app->run(
        [
            'Custom' => 'CustomRoute'
        ]
    )->send();
} catch (Throwable $e) {
    \Dspbee\Bundle\Debug\Wrap::handleException($e);
}