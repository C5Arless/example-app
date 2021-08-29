<?php

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class FavSong extends Model {
    public $fillable = ['id', 'id_s'];

    public function user() {
        return $this->belongsTo('User');
    }
}

?>