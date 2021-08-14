<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $table = 'step';
    protected $fillable = ['judul', 'deskripsi', 'todolist_id'];

    public function todolist()
    {
        return $this->belongsTo(Todolist::class);
    }
}
