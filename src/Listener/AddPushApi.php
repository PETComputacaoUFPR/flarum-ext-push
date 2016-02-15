<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-14 03:25:51
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-15 02:01:59
 */

namespace Petcomputacaoufpr\Push\Listener;

use Flarum\Event\ConfigureApiController;
use Flarum\Event\ConfigureApiRoutes;
use Flarum\Event\ConfigureForumRoutes;
use Petcomputacaoufpr\Push\Api\Controller\AddDeviceController;
use Flarum\Settings\SettingsRepositoryInterface;
use Illuminate\Contracts\Events\Dispatcher;

class AddPushApi
{
    /**
     * @var SettingsRepositoryInterface
     */
    protected $settings;
    /**
     * @param SettingsRepositoryInterface $settings
     */
    public function __construct(SettingsRepositoryInterface $settings)
    {
        $this->settings = $settings;
    }
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {

        $events->listen(ConfigureApiRoutes::class, [$this, 'addRoutes']);
    }

   /**
     * @param ConfigureApiRoutes $event
     */
    public function addRoutes(ConfigureApiRoutes $event)
    {
        $event->post('/push/add','push.add',AddDeviceController::class);
    }
}