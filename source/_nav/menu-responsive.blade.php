<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Performances"
                href="/performance"
                class="nav-menu__item hover:text-purple {{ $page->isActive('/performance') ? 'active text-purple' : '' }}"
            >Performances</a>
        </li>
        {{-- <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-purple {{ $page->isActive('/about') ? 'active text-purple' : '' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Code of Conduct"
                href="/coc"
                class="nav-menu__item hover:text-purple {{ $page->isActive('/coc') ? 'active text-purple' : '' }}"
            >Code of Conduct</a>
        </li> --}}
    </ul>
</nav>
