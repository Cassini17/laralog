<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

use App\Tag;

class Post extends Model
{
    //
    protected $fillable = ['title','body'];
    
    public function comments()
    {
    	return($this->hasMany(Comment::class));
    }
    
    // return the user which this post is belonged to
    public function user()
    {
       	return($this->belongsTo(User::class));
    }
    
    public function tags()
    {
    	return($this->belongsToMany(Tag::class));
    }
    
    public function addComment($body)
    {
    	Comment::create([
    		'post_id' => $this->id,
    		'user_id' => '1',
    		'body' => $body
    	]);
    	//$this->comments()->create(compact($body));
    }
    
    public function scopeFilter($query,$filter)
    {
    	if($year = $filter['year'])
    	{
    		$query->whereYear('created_at',$year);
    	}
    	
    	if($month = $filter['month'])
    	{
    		$query->whereMonth('created_at',Carbon::parse($month)->month);
    	}
    }
    
    public static function archives()
    {
    	return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*)')
    	->groupBy('year','month')
    	->orderByRaw('min(created_at) desc')
    	->get()
    	->toArray();
    }
}
