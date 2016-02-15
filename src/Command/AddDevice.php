<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-14 02:01:02
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-14 02:11:56
 */

namespace Petcomputacaoufpr\Push\Command;

use Flarum\Core\User;
use Petcomputacaoufpr\Device;

class AddDevice
{
   	public $data;

    public $actor;

    public function __construct($data, User $actor)
    {
        $this->data = $data;
        $this->actor = $actor;
    }
}