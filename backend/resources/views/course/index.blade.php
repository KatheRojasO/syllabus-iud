@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Add Course') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('course.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Course Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name_course" 
                                                type="text" 
                                                class="form-control{{ $errors->has('name_course') ? ' is-invalid' : '' }}" 
                                                name="name_course" value="{{ old('name_course') }}" 
                                                required 
                                                autocomplete="name_course"
                                                autofocus>

                                        @if ($errors->has('name_course'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name_course') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" 
                                        class="col-md-4 col-form-label text-md-end">{{ __('Number of credits') }}</label>

                                    <div class="col-md-6">
                                        <input  type="number" 
                                                class="form-control{{ $errors->has('credits') ? ' is-invalid' : '' }}" 
                                                name="credits" 
                                                value="{{ old('credits') }}" 
                                                required 
                                                autocomplete="credits"
                                                autofocus>

                                        @if ($errors->has('credits'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('credits') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Proffesor') }}</label>

                                    <div class="col-md-6">
                                        <input id="name_proffesor" 
                                                type="text" 
                                                class="form-control{{ $errors->has('name_proffesor') ? ' is-invalid' : '' }}" 
                                                name="name_proffesor" value="{{ old('name_proffesor') }}" 
                                                required 
                                                autocomplete="name_proffesor"
                                                autofocus>

                                        @if ($errors->has('name_proffesor'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name_proffesor') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Course prerequisite') }}</label>

                                    <div class="col-md-6">
                                        <input id="course_prerequisite" 
                                                type="text" 
                                                class="form-control{{ $errors->has('course_prerequisite') ? ' is-invalid' : '' }}" 
                                                name="course_prerequisite" value="{{ old('course_prerequisite') }}" 
                                                required 
                                                autocomplete="course_prerequisite"
                                                autofocus>

                                        @if ($errors->has('name_proffesor'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('course_prerequisite') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" 
                                        class="col-md-4 col-form-label text-md-end">{{ __('Required self work hours') }}</label>

                                    <div class="col-md-6">
                                        <input  type="number" 
                                                class="form-control{{ $errors->has('self_work_hours') ? ' is-invalid' : '' }}" 
                                                name="self_work_hours" 
                                                value="{{ old('self_work_hours') }}" 
                                                required 
                                                autocomplete="self_work_hours"
                                                autofocus>

                                        @if ($errors->has('self_work_hours'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('self_work_hours') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="name" 
                                        class="col-md-4 col-form-label text-md-end">{{ __('Required class work hours') }}</label>

                                    <div class="col-md-6">
                                        <input  type="number" 
                                                class="form-control{{ $errors->has('class_work_hours') ? ' is-invalid' : '' }}" 
                                                name="class_work_hours" 
                                                value="{{ old('class_work_hours') }}" 
                                                required 
                                                autocomplete="class_work_hours"
                                                autofocus>

                                        @if ($errors->has('class_work_hours'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('class_work_hours') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3 mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Create') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if(!empty($courses))
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Number of credits</th>
                                        <th scope="col">Proffesor</th>
                                        <th scope="col">Course prerequisite</th>
                                        <th scope="col">Required self work hours</th>
                                        <th scope="col">Required class work hours</th>
                                        <th scope="col">Actions</th>
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
                                                <td>
                                                    <a class="btn btn-success btn-sm"
                                                       href="{{ route('course.action.edit', [$course->id]) }}"
                                                       >
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('course.delete', ['id' => $course->id]) }}"
                                                          method="POST">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger btn-sm" >
                                                            {{ __('Delete') }}
                                                        </button>
                                                    </form>
                                                </td>
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
