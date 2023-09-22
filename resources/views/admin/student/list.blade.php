@extends('admin.layouts.master')
@section('content')
@section('title', 'Manage Student')

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <table class="table table-striped mg-b-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($allStudents->isEmpty())
                    <tr>
                        <td colspan="5">No data found</td>
                    </tr>
                @else
                    @foreach ($allStudents as $student)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ __($student->firstname) }}</td>
                            <td>{{ __($student->father_name )}}</td>
                            <td>
                                @if ($student->status == 1)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('student.edit', ['firstname' => $student->firstname]) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                              
                                <a href="{{ route('student.delete', ['firstname' => $student->firstname]) }}" class="btn btn-danger btn-sm" onclick="confirmDelete('{{ route('student.delete', ['firstname' => $student->firstname]) }}')">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                                
                            </td>
                            
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <script>
            function confirmDelete(deleteUrl) {
                if (confirm('Are you sure you want to delete this student?')) {
                    window.location.href = deleteUrl;
                }
            }
        </script>
        

    @endsection
