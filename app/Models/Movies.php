<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Movies extends Model
{
    use HasFactory;

    const NO_IMAGE = 'images/cinema-banner.jpg';


    protected $fillable = [
      'name',
      'year',
      'genre',
      'preview',
      'description',
      'thumbnail',
      'updated_at',
      'created_at',
    ];

    public function getThumbnailAttribute($value)
    {
        if($value != null){
            return $value ;
        }

        return self::NO_IMAGE;
    }

    public function setThumbnailAttribute($value)
    {

        if ($value instanceof UploadedFile) {

            if ($this->thumbnail !== self::NO_IMAGE && Storage::exists($this->thumbnail)) {
                Storage::delete($this->thumbnail);
            }

            $this->attributes['thumbnail'] = $value->store("uploads");
        }
    }
}
