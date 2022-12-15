<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Course extends Model
{
    use HasFactory;

    public static $image,$imageName,$imageDirectory,$imageExtension,$course, $imageUrl, $message;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$imageExtension;
        self::$imageDirectory='admin/assets/images/course-images/';
        self::$image->move(self::$imageDirectory,self::$imageName);

        return self::$imageDirectory.self::$imageName;

    }

    public static function newCourse($request)
    {
        self::$course                     = new Course();
        self::$course->category_id        = $request->category_id ;
        self::$course->teacher_id         = Session::get('teacher_id');
        self::$course->title              = $request->title ;
        self::$course->objective          = $request->objective ;
        self::$course->description        = $request->description;
        self::$course->starting_date      = $request->startingDate;
        self::$course->fee                = $request->fee;
        self::$course->image              = self::getImageUrl($request);
        self::$course->save();
    }

    public static function updateCourse($request,$id)
    {
        self::$course =Course::find($id);
        if($request->file('image')){
            if(file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$course->image;
        }

        self::$course->category_id             = $request->category_id ;
        self::$course->title                   = $request->title ;
        self::$course->objective               = $request->objective ;
        self::$course->description             = $request->descripion;
        self::$course->starting_date           = $request->starting_date;
        self::$course->fee                     = $request->fee;
        self::$course->image                   = self::$imageUrl;
        self::$course->save();
    }

    public static function deleteCourse($id)
    {
        self::$course = Course::find($id);
        if(file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }
        self::$course->delete();
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function updateCourseStatus($id)
    {
        self::$course = Course::find($id);
        if (self::$course->status == 1)
        {
            self::$course->status = 0;
            self::$message = 'Course status info unpublished successfully';
        }
        else
        {
            self::$course->status = 1;
            self::$message = 'Course status info publishes successfully';
        }
        self::$course->save();
        return self::$message;
    }

    public static function updateCourseOffer($request, $id)
    {
        self::$course = Course::find($id);
        if (file_exists(self::$course->offer_image))
        {
            unlink(self::$course->offer_image);
        }
        self::$course->offer_status = 1;
        self::$course->offer_fee = $request->offer_fee;
        self::$course->offer_date = $request->offer_date;
        self::$course->offer_image = self::getImageUrl($request);
        self::$course->save();
    }

    public static function updateHitCount($id)
    {
        self::$course = Course::find($id);
        self::$course->hit_count = self::$course->hiot_count + 1;
        self::$course->save();
        return self::$course;
    }
}
