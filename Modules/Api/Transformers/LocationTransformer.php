<?php

namespace Modules\Api\Transformers;

use DCASDomain\Models\Location;

class LocationTransformer extends \League\Fractal\TransformerAbstract {

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
    public function transform(Location $location) {
        return [
            'group_id' => null,
            'location_name' => (string) $location->location_name,
            'location_description' => (string) $location->location_description,
            'links' => [
                [
                    'rel' => 'self',
                    'uri' => '/supportdesk/locations/' . $location->id,
                ]
            ],
        ];
    }

}
