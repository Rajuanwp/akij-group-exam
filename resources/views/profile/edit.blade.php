@extends('admin.layouts.master')
@section('content')
@section('title', 'My Account').


<style>
    .card-header {
        background-color: #19a7ae;
        color: white;
    }
</style>

<!--start content-->
<div class="profile-cover bg-dark"></div>
<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form method="post" action="{{ route('profile.update') }}">
                    @csrf
                    @method('patch')
                    <h5 class="mb-0">@lang('My Account')</h5>
                    <hr>
                    <div class="card shadow-none border">
                        <div class="card-header">
                            <h6 class="mb-0">@lang('USER INFORMATION')</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label class="form-label">@lang('Name')</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ __($user->name) }}" placeholder="Your Name">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">@lang('Email address')</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ __($user->email) }}" placeholder="Email Address">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">@lang('address')</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{ __($user->address) }}" placeholder=" Address">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">@lang('Designation')</label>
                                        <input type="text" name="designation" class="form-control"
                                            value="{{ __($user->designation) }}" placeholder="Designation">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label">@lang('About Me')</label>
                                        <input type="text" name="about" class="form-control"
                                            value="{{ __($user->about) }}" placeholder="About">
                                    </div>
                                
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="text-end">
                        <button type="submit" class="btn bg-info px-4 w-100 ">@lang('Profile Update')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card shadow-sm border-0">
            <div class="card-body">
              <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')
                <h5 class="mb-0">@lang('Password Change')</h5>
                <hr>
                <div class="card shadow-none border">
                    <div class="card-header">
                        <h6 class="mb-0">@lang('Password Change')</h6>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <div class="form-group mb-3">
                                    <label class="form-label">@lang('Old Password')</label>
                                    <input type="password" name="current_password" class="form-control">
                                    @error('current_password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">@lang('New Password')</label>
                                    <input type="password" name="password" class="form-control">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">@lang('Confirm Password')</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-end">
                    <button type="submit" class="btn bg-info px-4 w-100">@lang('Change Password')</button>
                </div>
            </form>
            
            </div>
        </div>
    </div>

</div>
<!--end page main-->

@endsection
