@extends('layouts.app')
@section('content')
<br>
    <section class="content">
        <div class="row">
          <div class="col-md-6">
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Profile Information</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName"> Name</label>
                    <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        {{-- <@error class="form-control" :messages="$errors->get('name')" /> --}}
                        @error('name') <span class="text-red text-sm">{{ $message }}</span> @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputProjectLeader">Email</label>
                    <input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                        {{-- <x-input-error class="mt-2" :messages="$errors->get('email')" /> --}}
                            @error('email') <span class="text-red text-sm">{{ $message }}</span> @enderror

                  </div>
                  <div class="card-footer mt-4">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Update Information</button>
                  </div>
                </div>

                <!-- /.card-body -->
              </div>
            </form>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Update Password</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputEstimatedBudget">Current Password</label>
                  <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
                <div class="form-group">
                  <label for="inputSpentBudget">New Password</label>
                  <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                  <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
                <div class="form-group">
                    <label for="inputSpentBudget">Confirm Password</label>
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                  </div>
                  <div class="card-footer mt-4">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Credentials</button>
                  </div>
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
            </form>
        </div>
      </section>
@endsection

 {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
