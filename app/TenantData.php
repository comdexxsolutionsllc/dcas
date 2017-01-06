<?php

namespace DCASDomain;

use DCASDomain\Scoping\Traits\TenantScopedModelTrait;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TenantData
 * @package DCASDomain
 * @link https://jkwl.io/application-architecture/2015/02/16/multi-tenancy-in-laravel5.html
 */
class TenantData extends Model {

    use TenantScopedModelTrait;

    protected $table = 'tenant_data';

}