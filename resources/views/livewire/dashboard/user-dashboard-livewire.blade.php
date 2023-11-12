<div>
    @if ($role == 'Admin' || $role == 'Guidance' || $role == 'SuperAdmin')
        @include('admin.admin-dashboard')
    @elseif ($role == 'Student')
        @include('student.student-dashboard')
    @elseif ($role == 'Parent')
        @include('parent.parent-dashboard')
    @elseif ($role == 'Teacher')
        @include('teacher.teacher-dashboard')
    @elseif ($role == 'Principal')
        @include('principal.principal-dashboard')
    @endif
</div>
