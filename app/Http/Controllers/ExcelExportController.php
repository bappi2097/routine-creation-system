<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\Slot;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelExportController extends Controller
{
    public function exportRoutineExcel(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $routines = Routine::all();
        $slots = Slot::all();
        $slot_cell=65;
        // dd(chr($c+1).'1');
        foreach($slots as $slot){
            $sheet->setCellValue(chr($slot_cell).'1', date("g:i a", strtotime($slot->start))  .'-'. date("g:i a", strtotime($slot->end)));
            $sheet->setCellValue(chr($slot_cell).'2', 'Class');
            $sheet->setCellValue(chr($slot_cell+1).'2', 'Course');
            $sheet->setCellValue(chr($slot_cell+2).'2', 'Teacher');
            $slot_cell=$slot_cell+3;
        }
        
        $datas = [];
        foreach ($routines as $routine) {
            foreach ($routine->data as $index_slot => $slot) {
                foreach ($slot as $index_room => $room) {
                    $datas[$routine->day][$index_room][$index_slot] = $room;
                }
            }
        }

        $routines = $datas;
        $class_course_teacher_cell = 65;
        $day_cell=74;
        $class_course_teacher_cell_index = 4;
        $day_cell_index=3;

        foreach ($routines as $index_day=>$day){   
            $sheet->setCellValue(chr($day_cell).$day_cell_index, $index_day);
            foreach ($day as $index_room=>$room){
                foreach ($room as $index_slot=>$slot){
                    $sheet->setCellValue(chr($class_course_teacher_cell).$class_course_teacher_cell_index, $index_room);
                    $sheet->setCellValue(chr($class_course_teacher_cell+1).$class_course_teacher_cell_index, $slot['course_code'] . $slot['section'] ."-". $slot['semester']);
                    $sheet->setCellValue(chr($class_course_teacher_cell+2).$class_course_teacher_cell_index, $slot['teacher']);
                    $class_course_teacher_cell =$class_course_teacher_cell+3;
                }
                $class_course_teacher_cell=65;
                $class_course_teacher_cell_index++;
            }
            $class_course_teacher_cell_index = $class_course_teacher_cell_index+1;
            $day_cell_index= $class_course_teacher_cell_index-1;
        }

        $writer = new Xlsx($spreadsheet);
        $writer->save('Routine.xlsx');
        return redirect()->back();
    }
}
