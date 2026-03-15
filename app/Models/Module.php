<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'mst_modules';

    protected $primaryKey = 'msm_id';

    protected $fillable = [
        'msm_name',
        'msm_prefix',
        'msm_middleware',
        'msm_status'
    ];

    public function routes()
    {
        return $this->hasMany(ModuleRoute::class, 'msr_module_id', 'msm_id');
    }
}
