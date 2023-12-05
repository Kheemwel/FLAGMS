<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuidancePrograms extends Model
{
    use HasFactory;
    protected $table = 'guidance_programs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'program_start', 'program_end', 'description', 'schedule_tag_id', 'is_public'
    ];

    public function GuidanceScheduleTag()
    {
        return $this->belongsTo(GuidanceScheduleTags::class, 'schedule_tag_id');
    }

    public function PrivateSchedules()
    {
        return $this->hasMany(GuidancePrivateSchedules::class, 'guidance_program_id');
    }

    public function tag_name()
    {
        return $this->GuidanceScheduleTag->tag_name;
    }

    public function color()
    {
        return $this->GuidanceScheduleTag->color;
    }
}
