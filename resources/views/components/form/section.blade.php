@props(['action', 'method' => 'GET'])

<div class="mt-2">
    <form action="{{ $action }}" method="{{ $method }}">
        @csrf

        {{-- display the validation errors --}}
        <x-form.errors /> 

        {{-- input fields (e.g. input, textarea, etc.) --}}
        <div>
            {{ $slot }}
        </div>
    </form>
</div>
