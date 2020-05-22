<?php

namespace App\Http\Controllers;

use App\Matter;
use App\Period;
use App\Section;
use App\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RegistrationStudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $hoy = "1975/01/16";
        // $f = Carbon::createFromDate($hoy)->age;dd($f);
        //dd($request->name);
        $students  = Student::Ahora('2019/2020 2')->paginate(5);
        //dd($students);
        $sections  = Section::paginate(5);
        $materias  = Matter::all();
        $periods   = Period::where('name', 'like', '2019/2020 2')->paginate(5);
        /*
        foreach($students as $student)
        {
            echo "Estudiante:<br>";
            echo $student->name;
            echo "<br>";
            foreach($student->sections as $section)
            {
                echo $section->id;
                echo "<br>";
                echo $section->name;
                echo "<br>";
                echo $section->capacidad;
                echo "<br>"; 
            }
        }*/
        //dd($sections->teacher());
        return view('inscripcion.index', ['sections' => $sections, 'periods' =>  $periods, 'materias' => $materias]);//enviado todoa los registro de estudiantes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscripcion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('inscripcion.show', ['Stunent' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        //dd($student);
        return view('inscripcion.edit', ['student' =>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('inscripcion')->with('status', 'El Registro fue Borrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        $name = $request->name;
        $students =  Student::where('name', 'like', '%'.$name.'%')->paginate(25);        
        return view('components.lista-students', ['students' => $students, 'name' => $name]);
        //return response()->json($request, 200);
    }

}
