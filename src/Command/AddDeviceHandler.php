<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-14 02:12:17
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-15 02:00:01
 */



namespace Petcomputacaoufpr\Push\Command;

use Petcomputacaoufpr\Push\Device;

use Flarum\Core\Access\AssertPermissionTrait;
use Flarum\Core\Repository\UserRepository;
use Flarum\Core\Support\DispatchEventsTrait;
use Flarum\Foundation\Application;
use Illuminate\Events\Dispatcher;


class AddDeviceHandler
{

	//TODO:add events
    use DispatchEventsTrait;
    use AssertPermissionTrait;

    
    public function __construct(Dispatcher $events) {
        $this->events = $events;
    }
    public function handle(AddDevice $command)
    {
    	//TODO: handle if token already exists
    	//TODO: handle if user doesn't exist
       	$device = new Device();
        $device->user_id = $command->actor->id;
        $device->token = array_get($command->data, 'attributes.token');
       
        $device->save();

        return $device;
    }
}