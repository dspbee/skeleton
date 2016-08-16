<?php
namespace Original\Route_index;

use Dspbee\Core\BaseController;

class GET extends BaseController
{
    public function index()
    {
        $this->setTemplate('page/index.html.php');
    }
}