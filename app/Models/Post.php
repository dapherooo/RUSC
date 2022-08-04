<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory; 
    use Sluggable;

    //protected $fillable = ['category_id','title','excerpt','body','slug'];
    protected $guarded = ['id'];
    protected $with = ['category','author'];

    public function scopeCari($query, array $cari)
    {
        $query->when($cari['search'] ?? false, function($query, $nemu){
            return  $query->where('title', 'like', '%' . $nemu . '%')
                          ->orWhere('body', 'like', '%' . $nemu . '%');
        });

        $query->when($cari['category'] ?? false, function($query, $category){
              return $query->whereHas('category', function($query) use ($category) {
                  $query->where('slug',$category);
              });
        });

        // $query->when($cari['author'] ?? false, function($query, $author){
        //   return $query->whereHas('category', function($query) use ($author) {
        //       $query->where('username',$author);

        //   });
        $query->when($cari['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author', fn($query) => 
              $query->where('username',$author)
            )
        );

    }

    public function Category()
    { 
       return $this->belongsTo(Category::class);
    }


    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function getRouteKeyName()
    {
      return 'slug';   
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    

}    


