<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e8f5e9;">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-success fs-4 me-4" href="{{ url('/') }}">Admin Sena</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('training_center.list') }}">TrainingCenter</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('area.index') }}">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('computer.list') }}">Computer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('teacher.list') }}">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('course.list') }}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('aprendice.list') }}">Apprendice</a>
                </li>
            </ul>
        </div>
    </div>
</nav>