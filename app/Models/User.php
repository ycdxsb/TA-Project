<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Course;
use App\Models\Task;
use App\Notifications\ResetPassword;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','realname','ta_course','student_id','phonenumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::creating(function ($user) {
            $user->activation_token = str_random(30);
        });
    }

    public function assistant_course(){
        $course=Course::where('course_id','=',$this->ta_course)->first();
        return $course;
    }

    public function courses()
    {
        return $this->belongsToMany(Course::Class,'course_user','user_id','course_id');
    }//用户和课程多对多

    public function tasks()
    {
        return $this->belongsToMany(Task::Class,'task_user','user_id','task_id');
    }//用户和任务多对多


    public function hasCourse($course_id)
    {
        return $this->courses->contains($course_id);
    }//利用动态属性加contains方法判断是否已选课程

    public function addcourse($course_ids)
    {
        if(!is_array($course_ids)){
            $course_ids=compact('course_ids');
        }
        $this->courses()->sync($course_ids,false);
    }

    public function bindtask($task_ids)
    {
        if(!is_array($task_ids)){
            $task_ids=compact('task_ids');
        }
        $this->tasks()->sync($task_ids,false);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function grade($task_id)
    {
        $data=DB::table('task_user')->where([['task_id', '=',$task_id],
            ['user_id','=',$this->id]])->first();
        if($data){
            return $data->grade;
        }
        else{
            return '还没有成绩哦';
        }
    }
}
