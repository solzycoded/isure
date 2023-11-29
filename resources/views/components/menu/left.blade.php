
<div class="d-flex flex-column flex-shrink-0 p-3 text-white profile-menu-bar m-0 app-background-color">
    <a href="/travelpackagebids" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none only-lg-screen">
        <span class="fs-4">{{ env('APP_NAME') }}</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <x-menu.item :link="''" :title="'Insurance Policies'" :icon="'list-check'" />

        <x-menu.item :link="'covers/home'" :title="'Home Insurance'" :icon="'house-fill'" />

        <x-menu.item :link="'covers/car'" :title="'Car Insurance'" :icon="'car-front-fill'" />

        <x-menu.item :link="'covers/life'" :title="'Life Insurance'" :icon="'person-arms-up'" />
    </ul>
</div>