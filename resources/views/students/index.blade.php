<!-- resources/views/students/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Students List</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name of Student</th>
                <th>Parent Name</th>
                <th>Opted Courses</th>
                <th>Enable/Disable</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->parent->name }}</td>
                    <td>
                        <ul>
                            @foreach ($student->optedCourses as $optedCourse)
                                <li>{{ $optedCourse->course->course_name }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <label class="toggle">
                            <input type="checkbox" class="toggle-status"
                                   data-id="{{ $student->id }}"
                                   data-status="{{ $student->is_active ? 'active' : 'inactive' }}"
                                   {{ $student->is_active ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.toggle-status').change(function() {
                var id = $(this).data('id');
                var isChecked = $(this).prop('checked');
                var newStatus = isChecked ? 'active' : 'inactive';

                $.ajax({
                    url: '/toggle-status',
                    type: 'POST',
                    data: {
                        id: id,
                        is_active: isChecked ? 1 : 0,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            
                            $('.toggle-status[data-id="' + id + '"]').data('status', newStatus);
                        } else {
                            alert('Failed to toggle status: ' + response.message);
                          
                            $('.toggle-status[data-id="' + id + '"]').prop('checked', !isChecked);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error toggling status:', error);
                        
                        $('.toggle-status[data-id="' + id + '"]').prop('checked', !isChecked);
                    }
                });
            });
        });
    </script>
@endsection
