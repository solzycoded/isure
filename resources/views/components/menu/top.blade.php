<nav class="navbar navbar-expand-lg navbar-light text-white app-background-color">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler bg-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 only-small-screen">
                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/dashboard/home-insurance">
                        Home Insurance
                    </a>
                </li>

                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/dashboard/car-insurance">
                        Car Insurance
                    </a>
                </li> 

                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/dashboard/life-insurance">
                        Life Insurance
                    </a>
                </li>

                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/dashboard/settings">
                        Settings
                    </a>
                </li>

                <li class="nav-item text-white">
                    <form action="/log-out" method="POST">
                        @csrf
        
                        <button class="nav-link text-white btn btn-transparent p-0 pt-1" aria-current="page">
                            <span>
                                <i class="bi bi-power me-1" style="font-size: 20px;"></i> Logout
                            </span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>