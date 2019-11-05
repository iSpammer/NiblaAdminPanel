<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    public function agents()
    {
        return $this->morphedByMany(Agent::class, 'project_manager');
    }
    public function users()
    {
        return $this->morphedByMany(Agent::class, 'project_manager');
    }

    public function contracts()
    {
        return $this->hasOne(Contract::class);
    }
}
