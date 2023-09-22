@extends('admin.layouts.master')
@section('content')
@section('title', 'Student Regestration')
<div class="br-section-wrapper">
    <h6 class="br-section-label">Add Student Infromation </h6>


    <div class="form-layout form-layout-1">
        <form action="{{ route('student.store') }}" method="post">
            @csrf 
            <div class="row mg-b-25">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('First Name'): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="firstname" placeholder="@lang('Enter First Name')"
                            >
                            @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('Last Name'): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="lastname" placeholder="@lang('Enter Last Name')"
                            >
                       
                            @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang("Father's Name"): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="father_name"
                            placeholder="@lang('Enter Father\'s Name')" >
                           
                            @error('father_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang("Mother's Name"): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="mother_name"
                            placeholder="@lang('Enter Mother\'s Name')" >
                          
                            @error('mother_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('Mobile Number'): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="mobile_number"
                            placeholder="@lang('Enter Mobile Number')" >
                            
                            @error('mobile_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('Select Status'): <span class="tx-danger">*</span></label>
                        <select class="form-control" name="status" >
                            <option value="1">@lang('Active')</option>
                            <option value="2">@lang('Inactive')</option>
                        </select>
                    </div>
                </div>
            </div><!-- row -->
            <div class="form-layout-footer">
                <button class="btn btn-info" type="submit">@lang('Add Student')</button>
            </div>
        </form>
        
    </div><!-- form-layout -->


</div>

@endsection
