@extends('admin.layouts.master')
@section('content')
@section('title', 'Student Update')
<div class="br-section-wrapper">
    <h6 class="br-section-label">Student Infromation Update</h6>


    <div class="form-layout form-layout-1">
        <form action="{{ route('student.update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $student->id }}">
            <div class="row mg-b-25">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('First Name'): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="firstname"
                            value="{{ __($student->firstname) }}" placeholder="@lang('Enter First Name')">
                        @error('firstname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('Last Name'): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="lastname" value="{{ __($student->lastname) }}"
                            placeholder="@lang('Enter Last Name')">

                        @error('lastname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang("Father's Name"): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="father_name"
                            value="{{ __($student->father_name) }}" placeholder="@lang('Enter Father\'s Name')">

                        @error('father_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang("Mother's Name"): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="mother_name"
                            value="{{ __($student->mother_name) }}" placeholder="@lang('Enter Mother\'s Name')">

                        @error('mother_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('Mobile Number'): <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="mobile_number"
                            value="{{ __($student->mobile_number) }}" placeholder="@lang('Enter Mobile Number')">

                        @error('mobile_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label">@lang('Select Status'): <span class="tx-danger">*</span></label>
                        <select class="form-control" name="status">
                            <option value="1" {{ $student->status == 1 ? 'selected' : '' }}>@lang('Active')
                            </option>
                            <option value="2" {{ $student->status == 2 ? 'selected' : '' }}>@lang('Inactive')
                            </option>
                        </select>
                    </div>
                </div>
            </div><!-- row -->
            <div class="form-layout-footer">
                <button class="btn btn-info" type="submit">@lang('Update Student')</button>
            </div>
        </form>

    </div><!-- form-layout -->


</div>

@endsection
