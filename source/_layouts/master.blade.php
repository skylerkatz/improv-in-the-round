<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/performance/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
            <div class="container flex items-center max-w-4xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center text-purple-darkest hover:text-purple-dark">
                        <svg class="h-8 md:h-10 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480">
                            <path fill="currentColor" d="M0 0v472a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8V0zm296 16c-1.063 17.465-26.258 32-56 32s-54.902-14.535-56-32zm-127.922 0c.875 27 32.113 48 71.922 48s71.047-21 71.922-48h15.91c.113 1.18.168 2.324.168 3.434C328 52.8 288.52 80 240 80s-88-27.2-88-60.566c0-1.118.055-2.262.168-3.434zm-31.863 0c-.07 1.145-.215 2.313-.215 3.434C136 61.656 182.656 96 240 96s104-34.344 104-76.566c0-1.122-.145-2.29-.215-3.434h15.64c.38 2.648.571 5.324.575 8 0 48.52-53.832 88-120 88S120 72.52 120 24c.004-2.676.195-5.352.574-8zM440.84 243.574l14.32-7.148a226.36 226.36 0 0 1-26.297-106.73A214.05 214.05 0 0 0 464 135.608V272h-20.297c-46.101-54.047-51.703-126.664-51.96-155.2a212.02 212.02 0 0 0 21.288 8.29 239.522 239.522 0 0 0 27.809 118.484zM439.07 424a147.552 147.552 0 0 1 16.13-76.426l-14.321-7.148A163.52 163.52 0 0 0 423.023 424h-14.855c2.398-57.754 29.191-119.398 36.887-136H464v136zm-8.558-142.734c-8.367 17.933-35.992 81.414-38.29 142.734H288v-8c0-13.254-10.746-24-24-24h-16v-72h16v-16h-16v-42.734l12-8.594A23.686 23.686 0 0 0 272 256c13.254 0 24-10.746 24-24s-10.746-24-24-24-24 10.746-24 24a23.77 23.77 0 0 0 1.602 8.45l-46.266 33.038 9.297 13.024L232 272.688V304h-16v16h16v72h-16c-13.254 0-24 10.746-24 24v8H87.777c-2.297-61.32-29.93-124.8-38.297-142.734 54.13-64.457 55.36-150.746 54.727-172.625a187.259 187.259 0 0 0 29.297-20.153A153.972 153.972 0 0 0 240 128a153.972 153.972 0 0 0 106.496-39.512 186.252 186.252 0 0 0 29.29 20.145c-.724 23.222.679 108.367 54.726 172.633zM264 408a8 8 0 0 1 8 8v8h-64v-8a8 8 0 0 1 8-8zm0-176a8 8 0 1 1 16 0 8 8 0 0 1-16 0zM40.586 424H16V288h18.945c7.696 16.586 34.528 78.184 36.887 136h-15.2a163.454 163.454 0 0 0-17.8-83.574l-14.312 7.148A148.585 148.585 0 0 1 40.586 424zm10.23-294.23c.141 37.167-8.89 73.8-26.296 106.644l14.312 7.203a238.99 238.99 0 0 0 27.816-118.449 212.116 212.116 0 0 0 21.672-8.45c-.129 28.403-5.449 100.708-52 155.282H16V135.61a214.852 214.852 0 0 0 34.816-5.84zM104.488 16a72.086 72.086 0 0 0-.488 8 85.75 85.75 0 0 0 18.848 52.559 170.89 170.89 0 0 1-30.602 20.449 194.958 194.958 0 0 1-36.293 14.77A204.277 204.277 0 0 1 16 119.534v-16c18.938-1.703 66.23-10.144 87.2-52l-14.321-7.152C72.137 77.832 32.879 85.602 16 87.426V16zM464 464H16v-24h448zm0-376.574c-16.879-1.817-56.137-9.602-72.8-43l-14.321 7.148c20.93 41.84 68.226 50.281 87.2 52v16a204.448 204.448 0 0 1-40.286-7.847 192.819 192.819 0 0 1-36-14.704 171.856 171.856 0 0 1-30.555-20.421A85.756 85.756 0 0 0 376 24a72.086 72.086 0 0 0-.488-8H464zm0 0"/>
                        </svg>

                        <h1 class="text-lg md:text-2xl text-purple-darkest font-semibold hover:text-purple-dark my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <search></search>

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-reset">
                <li class="md:mr-2">
                    &copy; <a href="https://www.improvintheround.com" title="Improv in the Round">Improv in the Round</a> {{ date('Y') }}.
                </li>

                <li class="md:mr-2">
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>

                <li>
                    Icons made by <a href="https://www.flaticon.com/authors/smalllikeart" title="smalllikeart">smalllikeart</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
