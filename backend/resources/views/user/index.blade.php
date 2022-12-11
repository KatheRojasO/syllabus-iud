@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" 
                                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                            name="name" 
                                            value="{{ old('name') }}" 
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
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" 
                                              type="email" 
                                              class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                              name="email" value="{{ old('email') }}" 
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
                                            {{ __('Create') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    @if(!empty($users))
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ !empty($user->role) ? $user->role->name : '' }}</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm" 
                                                        href="{{ route('user.action.edit', [$user->id]) }}">
                                                        Edit
                                                    </a>
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
