<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'agent_id',
        'name',
        'provider_name',
        'image',
        'marker',
        'price',
        'min_price',
        'fixed',
        'description',
        'status',
        'type_price',
        'calculator',
        'capacity',
        'waiting_free_mins',
        'waiting_min_charge'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'created_at', 'updated_at'
    ];

    public function services()
    {
        return $this->hasMany(ServiceType::class, 'parent_id');
    }


    public function agent()
    {
        return $this->hasMany(Agent::class);
    }

    public function parent()
    {
        return $this->belongsTo(ServiceType::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ServiceType::class, 'parent_id');
    }

    public function childrenRecursive()
{
   return $this->children()->with('childrenRecursive');
}
public function childrenRecursive1()
{
   return $this->children()->with('childrenRecursive');
}
}
