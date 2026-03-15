<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModuleRoute extends Model
{
    protected $table = 'mst_module_routes';

    protected $primaryKey = 'msr_id';

    protected $fillable = [
        'msr_module_id',
        'msr_name',
        'msr_uri',
        'msr_action',
        'msr_controller',
        'msr_type',
        'msr_status'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class, 'msr_module_id', 'msm_id');
    }
}
