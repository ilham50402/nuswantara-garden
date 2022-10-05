<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function user()
    {
        return $this->belongsTo(User::class,'userid');
    } 

    public function project()
    {
        return $this->belongsTo(Project::class,'projectid');
    } 
}