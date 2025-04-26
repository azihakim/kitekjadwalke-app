<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'file',
        'date',
        'state',
    ];

    protected $casts = [
        'date' => 'date',
        'state' => 'boolean',
    ];

    public function getFileUrlAttribute()
    {
        return asset('storage/schedules/' . $this->file);
    }
    public function getFormattedDateAttribute()
    {
        return $this->date ? $this->date->locale('id')->translatedFormat('l, d F Y') : null;
    }
    public function getFormattedStateAttribute()
    {
        return $this->state ? 'Active' : 'Inactive';
    }
}
