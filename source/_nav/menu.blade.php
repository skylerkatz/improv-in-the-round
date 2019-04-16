<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Performances" href="/performance"
        class="ml-6 text-grey-darker hover:text-purple-dark {{ $page->isActive('/performance') ? 'active text-purple-dark' : '' }}">
        Performances
    </a>

    {{-- <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-grey-darker hover:text-purple-dark {{ $page->isActive('/about') ? 'active text-purple-dark' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Code of Conduct" href="/coc"
        class="ml-6 text-grey-darker hover:text-purple-dark {{ $page->isActive('/contact') ? 'active text-purple-dark' : '' }}">
        Code of Conduct
    </a> --}}
</nav>
