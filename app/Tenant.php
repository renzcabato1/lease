<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Tenant extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    //
    // public function tenant()
    // {
    //     return $this->hasMany(tenant::class);
    // }
}
