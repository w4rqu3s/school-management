<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{ url('/') }}">
            Sistema Escolar
        </a>

        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alunos.index') }}">
                        Alunos
                    </a>
                </li>

                {{-- Você adiciona mais depois (cursos, professores, etc) --}}
                
            </ul>

        </div>

    </div>
</nav>
