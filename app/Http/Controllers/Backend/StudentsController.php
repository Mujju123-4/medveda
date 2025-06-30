<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Agents;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Students;
use App\Models\StudentsCourse;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StudentsController extends Controller
{
    public function index()
    {
        $Agents = Agents::select('id', 'name')->get();
        return view('backend.students.index', compact('Agents'));
    }

    public function getStudentsData(Request $request)
    {
        if ($request->ajax()) {
            $query = Students::select(
                'students.id',
                'students.first_name',
                'students.middle_name',
                'students.surname_name',
                'students.mother_name',
                'students.email',
                'students.contact',
            );

            if (!empty($request->start_date)) {
                $date = Carbon::parse($request->start_date);
                $query->whereDate('students.created_at', $date->format('Y-m-d'));
            }

            if (!empty($request->university)) {
                $query->where('students.university', $request->university);
            }
            if (!empty($request->studentType)) {
                $query->where('students.type', $request->studentType);
            }
            if (!empty($request->agent)) {
                $query->where('students.agent', $request->agent);
            }

            $query->orderBy('students.id', 'desc');

            return DataTables::of($query)
                ->addColumn('full_name', function ($row) {
                    return $row->first_name . ' ' . $row->middle_name . ' ' . $row->surname_name;
                })
                ->editColumn('created_at', function ($order) {
                    return Carbon::parse($order->created_at)->format('d-m-Y');
                })
                ->addColumn('action', function ($row) {
                    $viewUrl = route('admin.student.details', $row->id);
                    $viewBtn = '<a href="' . $viewUrl . '" class="btn btn-sm "                                         
                                        title="View" style="color:#fe8769">
                                        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                </a>';

                    $deleteBtn = '<a class="btn btn-sm delete-category" data-id="' . $row->id . '" style="color:#fe8769" title="Delete">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>';

                    return  $viewBtn;
                })
                ->rawColumns(['action', 'image']) // allow HTML
                ->make(true);
        }
    }

    public function addStudentsForm(Request $request)
    {
        $Agents = Agents::select('id', 'name')->get();
        return view('backend.students.add_students', compact('Agents'));
    }
    public function registerStudents(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name'   => 'required|string|max:255',
            // 'middle_name'  => 'nullable|string|max:255',
            'surname_name' => 'required|string|max:255',
            // 'mother_name'  => 'required|string|max:255',
            // 'email'        => 'required|email|unique:students,email',
            // 'contact'      => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with("error", $validator->errors());
        }

        if ($request->agentvalue === "others") {
            $agents = Agents::create(['name' => $request->agent]);
        }

        $student = Students::create([
            'first_name'   => $request->first_name,
            'middle_name'  => $request->middle_name,
            'surname_name' => $request->surname_name,
            'mother_name'  => $request->mother_name,
            'email'        => $request->email,
            'contact'      => $request->contact,
            'university'      => $request->university,
            'agent'      => $request->agent,
            'type'      => $request->type,
        ]);

        if ($student) {
            return redirect()->route('admin.students')->with("success", "Student Register Successfull!");
        } else {
            return redirect()->back()->with("error", "Student Register Failed!");
        }
    }

    public function studentsDetailsPage(Request $request, $id)
    {
        $student = Students::where('id', $id)
            ->select(
                'id',
                'first_name',
                'middle_name',
                'surname_name',
                'mother_name',
                'email',
                'contact',
                'university',
                'agent',
                'type',
            )
            ->first();

        $cources = Courses::select('id', 'course')->get();

        $studentCourse = StudentsCourse::where('student_id', $id)
            ->select(
                'neet',
                'course',
                'qualifyingtest',
                'qualifying_status',
                'qualification_document',
            )->first();

        return view("backend.students.students_details", compact('student', 'cources', 'studentCourse'));
    }

    public function UpdateStudents(Request $request)
    {
        $all = $request->all();

        $data = [];
        if ($all['firstname']) {
            $data['first_name'] = $all['firstname'];
        }
        if ($all['middlename']) {
            $data['middle_name'] = $all['middlename'];
        }
        if ($all['surnamename']) {
            $data['surname_name'] = $all['surnamename'];
        }
        if ($all['mothername']) {
            $data['mother_name'] = $all['mothername'];
        }
        if ($all['email']) {
            $data['email'] = $all['email'];
        }
        if ($all['contact']) {
            $data['contact'] = $all['contact'];
        }

        $Students = Students::where('id', $all['studentid'])->update($data);

        return response()->json(['status' => 200, 'message' => 'update success!']);
    }

    public function uploadCourseDetails(Request $request)
    {
        $all = $request->all();
        $student_id = $all['student_id'];

        $data = [
            'neet' => $all['neet_qualified'],
            'course' => $all['course'],
            'qualifyingtest' => $all['qualifyingtest'],
            'qualifying_status' => $all['qualifying_status'],
            // 'qualification_document' => $all['qualification_document'],
        ];

        if ($request->hasFile('qualification_document')) {
            $image = $request->file('qualification_document');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store in storage/app/public/images
            $image->storeAs('images', $imageName, 'public');

            // Optionally also move to public/CategoryImages
            $image->move(public_path('/assets/StudentDocument'), $imageName);

            $data['qualification_document'] = 'StudentDocument/' . $imageName;
        }



        $ExistCourse = StudentsCourse::where('student_id', $student_id)->first();

        if ($ExistCourse) {
            $ExistCourse = StudentsCourse::where('student_id', $student_id)->update($data);
            return response()->json(['status' => 200, 'message' => 'Update Success!']);
        } else {
            $data['student_id'] = $student_id;
            $ExistCourse = StudentsCourse::create($data);
            return response()->json(['status' => 200, 'message' => 'Create Success!']);
        }
    }
}
