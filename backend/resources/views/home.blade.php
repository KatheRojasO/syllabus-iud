@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(!empty($courses))
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Credits</th>
                                        <th scope="col">Proffesor</th>
                                        <th scope="col">Course prerequisite</th>
                                        <th scope="col">Self Work</th>
                                        <th scope="col">Class Work</th>
                                        @if (Auth::user()->role_id != 3)
                                            <th scope="col">Actions</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{ $course->name_course }}</td>
                                                <td>{{ $course->credits }}</td>
                                                <td>{{ $course->name_proffesor }}</td>
                                                <td>{{ $course->course_prerequisite }}</td>
                                                <td>{{ $course->self_work_hours }}</td>
                                                <td>{{ $course->class_work_hours }}</td>
                                                @if (Auth::user()->role_id != 3)
                                                    <td>
                                                        <a class="btn btn-success btn-sm"
                                                           href="{{ route('course.action.edit', [$course->id]) }}" 
                                                        >
                                                            Edit
                                                        </a>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
