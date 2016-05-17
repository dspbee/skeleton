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
     * CustomRoute constructor.
     *
     * @param string $packageRoot
     * @param Request $request
     */
    public function __construct($packageRoot, Request $request)
    {
        $this->response = null;

        if (0 === strpos($request->route(), 'news') && preg_match('#^news/(.*?)$#s', $request->route(), $matches)) {
            $this->response = (new News($packageRoot, $request))->process($matches[1]);
        }
    }

    /**
     * @return \Dspbee\Core\Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    private $response;
}