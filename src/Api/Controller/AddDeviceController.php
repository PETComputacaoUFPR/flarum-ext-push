<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-14 01:13:02
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-15 02:02:59
 */

namespace Petcomputacaoufpr\Push\Api\Controller;


use Petcomputacaoufpr\Push\Api\Serializer\DeviceSerializer;
use Petcomputacaoufpr\Push\Command\AddDevice;
use Flarum\Api\Controller\AbstractCreateController;
use Illuminate\Contracts\Bus\Dispatcher;
use Petcomputacaoufpr\Push\Device;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class AddDeviceController extends AbstractCreateController
{
    /**
     * {@inheritdoc}
     */
    public $serializer = DeviceSerializer::class;


    /**
     * @var Dispatcher
     */
    protected $bus;

    /**
     * @param Dispatcher $bus
     */
    public function __construct(Dispatcher $bus)
    {
        $this->bus = $bus;
    }

    /**
     * {@inheritdoc}
     */
    protected function data(ServerRequestInterface $request, Document $document)
    {
        $actor = $request->getAttribute('actor');
       // var_dump(array_get($request->getParsedBody(), 'data'));
        $device = null;
       if ($actor->exists) {
            $device = $this->bus->dispatch(
                new AddDevice(array_get($request->getParsedBody(), 'data'),$actor)
            );
        }
        return $device;
    }
}
