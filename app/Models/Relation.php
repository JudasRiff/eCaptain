<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Relation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'relation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Adds leading zeroes if the required length exceeds that of the current length.
     */
    static public function addLeadingZeroes($length) {
        DB::table('relation')
        ->update(['regnumber' => DB::raw('LPAD(regnumber, GREATEST(LENGTH(regnumber), ' . $length . '), 0)')]);
    }
}
