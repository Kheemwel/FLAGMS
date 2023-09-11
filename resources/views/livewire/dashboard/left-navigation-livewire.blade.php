<div>
    @if($role == 'Admin')
        @include('admin.admin-leftnav')
    @elseif ($role == 'Student')
        @include('student.student-leftnav')
    @elseif ($role == 'Parent')
        @include('parent.parent-leftnav')
    @elseif ($role == 'Teacher')
        @include('teacher.teacher-leftnav')
    @elseif ($role == 'Principal')
        @include('principal.principal-leftnav')
    @endif
</div>