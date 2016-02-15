<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-12 23:07:11
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-13 05:23:47
 */


namespace Petcomputacaoufpr\Push\Listener;

use Illuminate\Contracts\Events\Dispatcher;	  
use Flarum\Event\NotificationWillBeSent;
use Petcomputacaoufpr\Push\GCMPushMessage;


class NotificationListener{

	/**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(NotificationWillBeSent::class, [$this, 'notifyDevices']);
    }
    public function notifyDevices(){

        $apiKey = "AIzaSyD7lXrE49XjzqmWefdKFW_W4D3_pfIqnTQ";
        $devices = array("epQU45s77fk:APA91bHHUJO4kVd2AF5ypX6XsIsbKsekBAO0FqbLkTT8KWASulEHvJ--AhXqQv5BNrTRuryAMj1qZntadYLlYXK7YTDUdd9cMkXOhyrWVCh7xQpva-8BZlDa6TAufulIcBS-Zg28e9_t");
        $message = "The message to send";


        $an = new GCMPushMessage($apiKey);
        $an->setDevices($devices);
        $response = $an->send($message);

 
    }


}