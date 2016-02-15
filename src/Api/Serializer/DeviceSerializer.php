<?php
/**
 * @Author: Davisson Paulino
 * @Email: dhpaulino@gamil.com
 * @Date:   2016-02-14 02:32:22
 * @Last Modified by:   Davisson Paulino
 * @Last Modified time: 2016-02-14 02:33:59
 */

namespace Petcomputacaoufpr\Push\Api\Serializer;

use Flarum\Api\Serializer\AbstractSerializer;

class DeviceSerializer extends AbstractSerializer
{
    protected function getDefaultAttributes($model)
    {
        return [
            'user_id' => $model->user_id,
            'token' => $model->token
        ];
    }
}