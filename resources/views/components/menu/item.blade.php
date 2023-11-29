@props(['link', 'title', 'icon'])

<li class="nav-item">
    <a href="/insurance-policies/{{ $link }}" class="nav-link text-white d-flex" aria-current="page">
        <i class="bi bi-{{ $icon }}" style="width: 16px;height: 16px;margin-right: 10px;"></i>
        <span class="only-lg-screen">{{ $title }}</span>
    </a>
</li>