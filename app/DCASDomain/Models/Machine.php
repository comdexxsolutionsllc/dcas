<?php

namespace DCASDomain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Machine extends Model {

    protected $table = 'machines';

    public $timestamps = true;

    use SoftDeletes;

    protected $dates = [ 'created_at', 'deleted_at', 'updated_at' ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'type_id', 'user_id', 'location_id', 'machine_name' ];


    /**
     * @param $date
     *
     * @return string
     */
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->diffForHumans();
    }


    /**
     * @param $date
     *
     * @return string
     */
    public function getDeletedAtAttribute($date)
    {
        if (is_null($date))
        {
            return null;
        } else
        {
            return Carbon::parse($date)->diffForHumans();
        }
    }


    /**
     * @param $date
     *
     * @return string
     */
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->diffForHumans();
    }


    public function machine_log()
    {
        return $this->hasMany('\DCASDomain\Models\MachineLog', 'machine_id');
    }


    public function software()
    {
        return $this->hasMany('\DCASDomain\Models\SoftwareInstalled', 'machine_id');
    }


    public function machine_notes()
    {
        return $this->hasMany('\DCASDomain\Models\MachineNotes', 'machine_id');
    }


    public function location()
    {
        return $this->hasOne('\DCASDomain\Models\Location', 'id', 'location_id');
    }

}