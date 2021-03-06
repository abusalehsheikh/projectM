<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'company_id',
        'user_id',
        'days',

    ];


    public function users(){
		return $this->belongsToMany('App\User','name','user_id');
    }

    public function company(){
		return $this->belongsTo('App\Company');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    public function getCommentCountAttribute(){
        return $this->comments->count();
    }

}
