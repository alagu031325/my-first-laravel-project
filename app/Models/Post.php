<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    //fillable - mention the column names which should be mass assignable - basically eloquent models are protected against mass assignment so any field that is not specified here cant be mass assigned
    protected $fillable = [
        'title',
        'description',
        'status',
        'publish_date',
        'category_id',
        'views'
    ];
    //guarded - means fields mentioned here are guarded against mass assignment so we cant mass assign - but rest of the columns open for mass assignment - empty array []means all fields mass assignable
    /* protected $guarded = [
        'title'
    ]; */

    //one to one inverse relationship - name is singular since it grabs only category record for each post
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        //pivot table name will be post_tag - name of table will be in alphabetical order and name will be singular and _ between two table names
        return $this->belongsToMany(Tag::class);
    }
    
}
