<?php
/**
 * @license MIT
 * @author Igor Sorokin <dspbee@pivasic.com>
 */
namespace Dspbee\Control\Bundle\User;

use \Dspbee\Bundle\Data\TDataInit;

/**
 * Minimal information about user.
 *
 * Class UserMin
 * @package Dspbee\Cms\Bundle\User
 */
class UserMin
{
    use TDataInit;

    public function __construct()
    {
        $this->id = 0;
        $this->groupId = 0;
    }

    /**
     * User ID.
     *
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * ID of user group.
     *
     * @return int
     */
    public function groupId()
    {
        return $this->groupId;
    }

    private $id;
    private $groupId;
}