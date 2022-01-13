<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    public function publicationState()
    {
        return $this->belongsTo(publicationState::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    static function publishedModifiedOnes($nbDays){
        return self::where('updated_at','>=',Carbon::now()->subDays((int)$nbDays)->toDateTimeString())
            ->whereHas('publicationState', function ($q){
                $q->where('slug','PUB');
            })->get();
    }
}
