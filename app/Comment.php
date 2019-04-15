<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
    //
    protected $fillable = [
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id',

    ];

    public function commentable()
    {
        return $this->morphTo();
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    

        /**
     * Return the user associated with this comment.
     *
     * @return array
     */
     public function user()
     {
         return $this->hasOne('\App\User', 'id', 'user_id');
     }
}
