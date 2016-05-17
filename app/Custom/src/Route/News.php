<?php
namespace Dspbee\Custom\Route;

use Dspbee\Core\BaseController;

/**
 * Class News
 *
 * @package Dspbee\Custom\Route
 */
class News extends BaseController
{
    /**
     * @param string $url
     *
     * @return \Dspbee\Core\Response|null
     */
    public function process($url)
    {
        $this->setTemplate(
            'news.item.html.php',
            [
                'url' => $url
            ]
        );

        return $this->getResponse();
    }
}