<?php

namespace DCASDomain\Transformers;

use App\User;

class UserTransformer extends \League\Fractal\TransformerAbstract {

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
    public function transform(User $user) {
        return [
            'username' => (string) $user->username,
            'email' => (string) $user->email,
            'register_ip' => (string) $user->register_ip,
            'links' => [
                [
                    'rel' => 'self',
                    'uri' => '/supportdesk/user/' . $user->id,
                ]
            ],
        ];
    }

}
