<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=[
        'department_id','name','doj','salary','status','designation'
    ];


    public function departments()
    {
        return $this->belongsTo(Department::class);
    }



}
