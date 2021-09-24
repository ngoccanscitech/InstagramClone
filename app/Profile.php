<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{
    protected $guarded = [];
    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'uploads/5ws1KEDMOzJA4VrWGkF4V0Qw88c0ocHqmJlTUCae.png';
        return '/storage/'.$imagePath;
     }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function follower(){
        return $this->belongsToMany(User::class);
    }
}
