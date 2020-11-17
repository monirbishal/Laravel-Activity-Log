<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Phone extends Model
{
    use LogsActivity;

    protected $fillable  = ['phone', 'country_code'];

    protected static $logAttributes = ['*'];
    
    protected static $logOnlyDirty = true;


    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return "This model has been {$eventName}";
    // }
}
