<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhouse extends Model
{
    use HasFactory;
    protected $table = 'exhouse';
    protected $primaryKey = 'ExHouseID';
    protected $fillable = [
        'ExHouseName','ExParentID','Address','CountryID','CurrencyID','TnxDate','PrevDate','RespExID',
        'ShortName', 'isactive','CreatedBy',
        'created_at','UpdatedBy','updated_at',
    ];
    protected $hidden = [
        'remember_token',
    ];
    public $incrementing = false;
}
