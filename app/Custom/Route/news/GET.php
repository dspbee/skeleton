<?php
namespace Custom\Route_news;

use Dspbee\Core\BaseController;

class GET extends BaseController
{
    public function index()
    {
        $this->setTemplate(
            'news.html.php'
        );
    }
}