<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageVote extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function eventimage()
    {
        return $this->belongsTo(EventImage::class);
    }
}
