<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Student <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('student.create') }}">Registration</a></li>
                    <li><a href="{{ route('student.index') }}">Student Detail</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Branch <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('branch.create') }}">Add Branch</a></li>
                    <li><a href="{{ route('branch.index') }}">Branch Details</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> Course <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ route('course.create') }}">Add Course</a></li>
                    <li><a href="{{ route('course.index') }}"> Course Detail</a></li>
                </ul>
            </li>
    </div>
</div>
