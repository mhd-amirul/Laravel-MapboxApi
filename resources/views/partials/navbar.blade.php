<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><h3><b>MAPPO</b></h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://github.com/mhd-amirul">Github</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://muhammad-amirul.vercel.app/">Dev profile</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
                <li class="navbar-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name." " }}</a>
                    <ul class="dropdown-menu" aria-labelledby="navDrop">
                        <li>
                            <a href="/profil" class="dropdown-item"><i class="bi bi-layout-text-sidebar-reverse"></i> Profil</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('signout.store') }}" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="bi bi-box-arrow-right"></i> Sign Out
                            </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('signin.view') }}"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
            </li>
            @endauth
        </ul>
        </div>
    </div>
</nav>
