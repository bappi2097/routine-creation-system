<?php
namespace App\Http\Controllers;

use App\Models\Allocation;
use App\Models\DayRoomSlot;
use App\Models\Routine;
use App\Models\Teacher;
use App\Models\Slot;

// use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function index()
    {
        $routines = Routine::all();
        $slots = Slot::all();
        $datas = [];
        foreach ($routines as $routine) {
            foreach ($routine->data as $index_slot => $slot) {
                foreach ($slot as $index_room => $room) {
                    $datas[$routine->day][$index_room][$index_slot] = $room;
                }
            }
        }
        return view('_routine', [
            'routines' => $datas,
            'slots' => $slots,
        ]);
    }

    public function store()
    {
        /**
         * need to add: message for initial number mismatch
         */
        $this->generate();
        return redirect()->back();
    }

    public function generate()
    {
        $day_room_slot = DayRoomSlot::all();
        $cells = $this->make3DArray($day_room_slot);
        $courses = $this->makeCourseArray(Allocation::all());
        $courses = array_merge($courses, $courses);
        $datas = $this->makeCells($cells, $courses);
        foreach ($datas as $index => $data) {
            Routine::updateOrCreate(['day' => $index], ['data' => $data]);
        }
    }

    public function makeCells($cells, $courses)
    {
        foreach ($courses as $course) {
            foreach ($cells as $index_cell => $cell) {
                foreach ($cell as $index_slot => $slot) {
                    foreach ($slot as $index_room => $room) {
                        if ($this->condition($cells, $courses, $index_cell, $index_slot, $index_room, $course)) {
                            $cells[$index_cell][$index_slot][$index_room]['semester'] = $course['semester'];
                            $cells[$index_cell][$index_slot][$index_room]['section'] = $course['section'];
                            $cells[$index_cell][$index_slot][$index_room]['color'] = $course['color'];
                            $cells[$index_cell][$index_slot][$index_room]['course_code'] = $course['course_code'];
                            $cells[$index_cell][$index_slot][$index_room]['credit'] = $course['credit'];
                            $cells[$index_cell][$index_slot][$index_room]['course'] = $course['course'];
                            $cells[$index_cell][$index_slot][$index_room]['course_type'] = $course['course_type'];
                            $cells[$index_cell][$index_slot][$index_room]['teacher_off'] = $course['teacher_off'];
                            $cells[$index_cell][$index_slot][$index_room]['teacher'] = $course['teacher'];
                            break 3;
                        }
                    }
                }
            }
        }
        return $cells;
    }

    public function condition($cells, $courses, $index_day, $index_slot, $index_room, $course)
    {
        if (!empty($cells[$index_day][$index_slot][$index_room]['section'])) {
            return false;
        }
        if ($cells[$index_day][$index_slot][$index_room]['room_type'] != $course['course_type']) {
            return false;
        }
        if ($course['teacher_off'] == $index_day) {
            return false;
        }
        foreach ($cells[$index_day][$index_slot] as $room) {
            if ($room["semester"] == $course["semester"] && $room['section'] == $course['section']) {
                return false;
            }
            if ($room["teacher"] == $course["teacher"]) {
                return false;
            }
        }
        return true;
    }

    public function make3DArray($rows)
    {
        $datas = [];
        foreach ($rows as $object) {
            $datas[$object->day][$object->slot][$object->room] = [
                'room_type' => $object->room_type,
                'section' => '',
                'semester' => '',
                'color' => '',
                'course' => '',
                'course_type' => true,
                'course_code' => '',
                'teacher' => '',
                'teacher_off' => '',
                'credit' => 0,
            ];
        }
        return $datas;
    }

    public function makeCourseArray($allocations)
    {
        $datas = [];
        foreach ($allocations as $allocation) {
            foreach ($allocation->courses as $course) {
                foreach ($course['teachers'] as $teacher) {
                    $datas[] = [
                        "color" => $allocation->color->code,
                        "course" => $course['name'],
                        "semester" => $allocation->semester,
                        "course_code" => $course['code'],
                        "credit" => $course['credit'],
                        "course_type" => $course['credit'] == 1 ? false : true,
                        "teacher" => $teacher['initial'],
                        "teacher_off" => Teacher::where('initial', $teacher['initial'])->first()->off_day,
                        'section' => $teacher['section'],
                    ];
                }
            }
        }
        return $datas;
    }
}
