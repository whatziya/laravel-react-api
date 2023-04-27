<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return StudentResource::collection(Student::query()->orderBy('id', 'desc')->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $data = $request->validated();

        $user = Student::create($data);

        return response(new StudentResource($user), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Student $user)
    {
        return new StudentResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $user)
    {
        $data = $request->validated();
        $user->update($data);
        return new StudentResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $user)
    {
        $user->delete();
        return response("", 204);
    }
}
