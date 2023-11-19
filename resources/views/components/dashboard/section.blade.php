@props(['header'])

<x-layout>

    <!-- header -->
    <div class="mb-20">
        <p class="page-link page-title text-dark fw-bold p-1 ps-2 rounded-2" style="background-color: #DFE3EA; font-size: 16px">{!! $header !!}</p>
    </div>

    <!-- body -->   
    <div class="main-body-content container-fluid">
        <!-- main body -->
        {{ $slot }}
    </div>

</x-layout>