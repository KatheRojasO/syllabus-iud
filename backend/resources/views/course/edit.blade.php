@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit Course') }}</div>

                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('course.edit', [$course->id]) }}">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Course Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name_course" 
                                                type="text" 
                                                class="form-control{{ $errors->has('name_course') ? ' is-invalid' : '' }}" 
                                                name="name_course" value="{{ $course->name_course }}" 
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
                                                value="{{ $course->credits }}" 
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
                                                name="name_proffesor" value="{{ $course->name_proffesor }}" 
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
                                                name="course_prerequisite" value="{{ $course->course_prerequisite }}" 
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
                                                value="{{ $course->self_work_hours }}" 
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
                                                value="{{ $course->class_work_hours }}" 
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
                                            {{ __('Edit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
