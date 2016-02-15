<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-13 02:31:26
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-14 03:37:20
 */
	   
   namespace Petcomputacaoufpr\Push;
    
    use Petcomputacaoufpr\Push\Listener\NotificationListener;
    use Petcomputacaoufpr\Push\Listener\AddPushApi;
    use Illuminate\Contracts\Events\Dispatcher;	    
    

    return function(Dispatcher $events){

        $events->subscribe(NotificationListener::class);
        $events->subscribe(AddPushApi::class);
    };
