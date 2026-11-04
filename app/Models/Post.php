<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RuntimeException;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ["title","description","content","category_id","thumbnail"];
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

        /**
    * Return the sluggable configuration array for this model.
    * @return array
    */

    public function sluggable(): array
    {
        return [
            'slug' => [
            'source' => 'title'
            ]
        ];
    }

    public static function uploadImage(Request $request, $image=null){

        if(!$request->hasFile("thumbnail")){
            return $image;
        }

        $folder=date('Y-m-d');
        $newImage = $request->file("thumbnail")->store("images/{$folder}", "public");

        if($newImage === false){
            throw new RuntimeException("Unable to store the uploaded image on the public disk.");
        }

        if($image){
            Storage::disk("public")->delete($image);
            Storage::disk("local")->delete($image);
        }

        return $newImage;

    }

    public function getImage(){
        if(!$this->thumbnail){
            return asset("no-image-available-icon-vector.jpg");
        }
        return asset("uploads/{$this->thumbnail}");
    }

}