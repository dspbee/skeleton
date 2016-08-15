<?php
namespace Custom;

use Dspbee\Core\IRoute;
use Dspbee\Core\Request;
use Dspbee\Custom\Route\News;

/**
 * Class CustomRoute
 *
 * @package Custom
 */
class CustomRoute implements IRoute
{

    /**
     * @param string $packageRoot
     * @param Request $request
     *
     * @return \Dspbee\Core\Response|null
     */
    public function getResponse($packageRoot, Request $request)
    {
        if (0 === strpos($request->route(), 'news') && preg_match('#^news/(.*?)$#s', $request->route(), $matches)) {
            return (new News($packageRoot, $request))->process($matches[1]);
        }

        return null;
    }


}