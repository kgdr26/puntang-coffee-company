<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'mst_menus';
    protected $primaryKey = 'msmnu_id';

    public function children()
    {
        return $this->hasMany(Menu::class,'msmnu_parent','msmnu_id');
    }
}
