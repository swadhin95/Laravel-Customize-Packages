<?php

namespace BAF\ACR\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P58modc extends ACR
{
    use HasFactory;
    protected $table   =   'p58modcs';
    protected $guarded =   [];

    public function setBaseUnitAttribute($value)
    {
        $this->attributes['base_unit'] = json_encode($value);
    }
    public function getBaseUnitAttribute($value)
    {
        return $this->attributes['base_unit'] = json_decode($value, true);
    }
    public function setDesDutiesAttribute($value)
    {
        $this->attributes['des_duties'] = json_encode($value);
    }
    public function getDesDutiesAttribute($value)
    {
        return $this->attributes['des_duties'] = json_decode($value, true);
    }
    public function setDutiesFromAttribute($value)
    {
        $this->attributes['duties_from'] = json_encode($value);
    }
    public function getDutiesFromAttribute($value)
    {
        return $this->attributes['duties_from'] = json_decode($value, true);
    }

    public function setDutiesToAttribute($value)
    {
        $this->attributes['duties_to'] = json_encode($value);
    }
    public function getDutiesToAttribute($value)
    {
        return $this->attributes['duties_to'] = json_decode($value, true);
    }

    
}
