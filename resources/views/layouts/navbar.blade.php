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

                @can('viewAny', App\Models\Aluno::class)  
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alunos.index') }}">
                        Alunos
                    </a>
                </li>
                @endcan

                @can('viewAny', App\Models\Curso::class)  
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cursos.index') }}">
                        Cursos
                    </a>
                </li>
                @endcan

                @can('viewAny', App\Models\Disciplina::class)  
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('disciplinas.index') }}">
                        Disciplinas
                    </a>
                </li>
                @endcan

            </ul>

            {{-- Seção do Usuário --}}
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @auth
                        <span class="ps-1 text-white">
                            <i class="bi bi-person-circle me-1"></i>
                              {{
                                Auth::user()
                                ?
                                    explode(" ", Auth::user()->name)[0]
                                :   
                                    'Anônimo'
                              }}
                            </span>
                        @endauth
                    </a>

                    {{-- Opções --}}
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf   
                          <li>
                              <a 
                                class="dropdown-item" 
                                href="" 
                                onclick="event.preventDefault(); this.closest('form').submit();"
                              >
                                <span class="ps-1 text-secondary">Sair</span>
                              </a>
                          </li>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
