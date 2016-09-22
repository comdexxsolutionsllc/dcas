<?php

namespace DCASDomain\Transformers;

use DCASDomain\Models\Machine;

class MachineTransformer extends \League\Fractal\TransformerAbstract {

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
    public function transform(Machine $machine) {
        return [
            'machine_id' => (int) $machine->id,
            'machine_type_id' => (int) $machine->type_id,
            'machine_user_id' => (int) $machine->user_id,
            'machine_location_id' => (int) $machine->location_id,
            'machine_name' => (string) $machine->machine_name,
            'links' => [
                [
                    'rel' => 'self',
                    'uri' => '/supportdesk/machines/' . $machine->id,
                ]
            ],
        ];
    }

}
