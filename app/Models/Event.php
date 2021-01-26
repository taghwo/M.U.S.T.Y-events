<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        "date" => "start_date",
        "date" => "end_date"
    ];

    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }

    public function votes()
    {
        return $this->hasMany(ImageVote::class);
    }

    public function voters()
    {
        return $this->belongsToMany(User::class, 'image_votes');
    }
}
