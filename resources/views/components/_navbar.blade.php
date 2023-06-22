<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="/clicko/resources/views/clicko.png" alt="Logo" height="30">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">Courses</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.index') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('documents.index') }}">Documents</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
