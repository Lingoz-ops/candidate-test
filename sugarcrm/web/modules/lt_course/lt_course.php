<?php 

use App\Models\SugarBean;

class lt_course extends SugarBean {

    /**
    * The name of the table this module represents
    * @var string
    */
    protected $table = 'lt_course';

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
