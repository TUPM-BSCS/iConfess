<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Confession extends Model
{
    protected $fillable = ['con_title', 'con_tags', 'con_body', 'con_published'];


    public function scopePublished($query)
    {
    	$query->where('con_published', '<=', Carbon::now());
    }

    public function scopeUnpublished($query)
    {
    	$query->where('con_published', '=', Carbon::now());
    }

    public function setConPublishedAttribute($date)
    {
    	$this->attributes['con_published'] = Carbon::createFromFormat('Y-m-d H:i:s', $date .' '. date('H:i:s'));
    }
}
