<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Property extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
