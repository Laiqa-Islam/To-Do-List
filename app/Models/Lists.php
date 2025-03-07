<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;
    protected $fillable = ['title','user_id','status','priority'];

    // public function index(){
    //     $items = Lists::orderBy('rating', 'desc')->get();
    // }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
