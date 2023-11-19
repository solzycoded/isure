
<div class="d-flex flex-column flex-shrink-0 p-3 text-white profile-menu-bar m-0 app-background-color">
    <a href="/travelpackagebids" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none only-lg-screen">
        <span class="fs-4">{{ env('APP_NAME') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <x-menu.item :link="'home-insurance'" :title="'Home Insurance'" :icon="'house-fill'" />

        <x-menu.item :link="'car-insurance'" :title="'Car Insurance'" :icon="'car-front-fill'" />

        <x-menu.item :link="'life-insurance'" :title="'Life Insurance'" :icon="'person-arms-up'" />

        <x-menu.item :link="'settings'" :title="'Settings'" :icon="'gear-fill'" />

        <li class="nav-item">
            <form action="/log-out" method="POST">
                @csrf

                <button class="nav-link text-white btn btn-transparent" aria-current="page">
                    <span>
                        <i class="bi bi-power" style="font-size: 18px; margin-right: 5px;"></i> Log out
                    </span>
                </button>
            </form>
        </li>
    </ul>
</div>