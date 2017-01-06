<?php

namespace Modules\Api\Transformers;

use DCASDomain\Models\MachineType;

class MachineTypeTransformer extends \League\Fractal\TransformerAbstract {

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [];

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(MachineType $machinetype) {
        return [
            'machine_type' => (string) $machinetype->type_name,
            'links' => [
                [
                    'rel' => 'self',
                    'uri' => '/supportdesk/machinetype/' . $machinetype->id,
                ]
            ],
        ];
    }

}
