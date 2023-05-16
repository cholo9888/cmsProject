@extends('layouts.app')
@section('content')
<br>
    <div class="col-md-12">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">

                <div class="card-body login-card-body">
                    <form method="POST" action="{{ url('userRegistration') }}">
                        @csrf

                        <!-- Name -->

                        <div class="input-group mb-3">
                            <input id="name" class="form-control" type="text" placeholder="Enter your name"
                                name="name" :value="old('name')" autofocus autocomplete="name" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('name')
                                <span class="form -control text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="email" placeholder="Enter Your Email" class="form-control" type="email"
                                name="email" :value="old('email')" required autocomplete="username" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <select name="role" id="parent_selection" class="form-control">
                                <option value="">-- Please Select --</option>
                                <option value="1">admin</option>
                                <option value="0">normal</option>

                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" placeholder="Enter Your Password" class="form-control" type="password"
                                name="password" required autocomplete="new-password" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input id="password_confirmation" class="form-control" placeholder="Re-Enter Your Password "
                                type="password" name="password_confirmation" required autocomplete="new-password" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    Already registered?
                </a> --}}

                <button class="btn btn-sm btn-success">
                    Register User
                </button>
            </div>
            </form>

        </div>

    </div>
@endsection
