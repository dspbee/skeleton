<?php
namespace Control\Route_login;

use Dspbee\Control\Bundle\User\UserMin;
use Dspbee\Core\BaseController;

class GET extends BaseController
{
    public function index()
    {
        $user = new UserMin();

        $this->setTemplate(
            'base.html.php',
            [
                'id' => $user->id()
            ]
        );
    }
}