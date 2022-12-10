@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('user.edit', [$user->id]) }}">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" 
                                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                            name="name" 
                                            value="{{ $user->name }}" 
                                            required 
                                            autocomplete="name" 
                                            autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" 
                                        class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" 
                                        disabled
                                              type="email" 
                                              class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                              name="email" value="{{ $user->email }}" 
                                              required autocomplete="email">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                                    <div class="col-md-6">
                                        <select name="role_id"
                                                title="role"
                                                class="form-control{{ $errors->has('role_id') ? ' is-invalid' : '' }}"  >
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">
                                                    {{$role->name}}
                                                </option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('role_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('role_id') }}</strong>
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
