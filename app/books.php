<?php /** @noinspection ALL */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed user_id
 */
class books extends Model
{
    //
    //

    protected $fillable =['name','pages','ISBN','price'];

    public static function find($id)
    {
    }

//    public static function apple(){
//
//
//        return self::where('name','like','%m%')->get()->toArray();
//    }


    public function user(){

        return $this->belongsTo(user::class);
    }

    public function categories(){
        return $this->belongsToMany(category::class)->withTimestamps();
    }
}
