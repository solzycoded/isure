<nav class="navbar navbar-expand-lg navbar-light text-white app-background-color">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler bg-white mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 only-small-screen">
                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/insurance-policies/covers/home">
                        Home Insurance
                    </a>
                </li>

                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/insurance-policies/covers/car">
                        Car Insurance
                    </a>
                </li> 

                <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/insurance-policies/covers/life">
                        Life Insurance
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>