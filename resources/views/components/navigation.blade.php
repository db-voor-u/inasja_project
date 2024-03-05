<!-- <header class="w-full fixed top-0 bg-primary-color h-20 flex flex-row justify-between border-b-2 border-accent-color">
    <a href="/" class="flex flex-col">
        <h1 class="ml-6 mt-4 font-bold text-xl flex flex-row">Inasja<span class="text-accent-color">.</span>com</h1>
        <p class="text-sm ml-[29px] font-bold flex flex-row">Spreker<span class="text-accent-color">|</span>Empowerment coach</p>
    </a>
    <nav>
        <button onclick="toggleMenu()" class="text-black justify-end mr-8 mt-4">
            <svg id="menu-close-icon" class="ml-1" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" style="display: none;">
                <path fill="currentColor" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z"/>
            </svg>
            <p id="menu-text" class="text-sm font-bold mr-1">Menu</p>
        </button>
        <div id="menu-content" class="hidden fixed inset-0 items-center justify-center bg-black bg-opacity-50">
            <div class="achtergrond relative w-96 bg-white border-2 border-accent-color rounded-lg shadow-lg justify-center items-center text-center">
                <h1 class="text-left ml-14 text-2xl font-bold mt-10">Ga naar</h1>
                <hr class="w-20 ml-14 border-b-2 border-accent-color">
                @php
                    $links = [
                        ['route' => 'home', 'name' => 'Begin'],
                        ['route' => 'wiebenik', 'name' => 'Inasja'],
                        ['route' => 'coaching', 'name' => 'Coaching'],
                        ['route' => 'aanbod', 'name' => 'Aanbod'],
                        ['route' => 'podcast', 'name' => 'Podcast'],
                        ['route' => 'werkzaamheden', 'name' => 'Werkzaamheden'],
                        ['route' => 'contact', 'name' => 'Contact'],
                    ];
                @endphp

                @foreach ($links as $link)
                    <a href="{{ route($link['route']) }}" class="ml-14 mt-20 text-lg flex flex-row {{ request()->routeIs($link['route']) ? 'font-bold border-b-2 border-accent-color pb-2' : '' }}">
                        {{ $link['name'] }}
                    </a><br><br>
                @endforeach
            </div>
        </div>
    </nav>
</header> -->
<header class="w-full fixed top-0 bg-primary-color h-20 flex flex-row justify-between items-center border-b-2 border-accent-color z-50">
    <a href="/" class="flex flex-col">
        <h1 class="ml-6 font-bold text-xl">Inasja<span class="text-accent-color">.</span>com</h1>
        <p class="text-sm ml-[29px] font-bold">Spreker<span class="text-accent-color">|</span>Empowerment coach</p>
    </a>
    <nav>
        <button id="menu-toggle" class="text-black justify-end mr-8">
            <svg id="menu-open-icon" xmlns="http://www.w3.org/2000/svg"  width="34" height="34" viewBox="0 0 24 24" class="block ml-1">
                <path fill="currentColor" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z"/>
            </svg>
            <svg id="menu-close-icon" xmlns="http://www.w3.org/2000/svg"  width="34" height="34" viewBox="0 0 24 24" class="hidden ml-3">
                <path fill="black" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
            </svg>
            <p id="menu-text" class="text-sm font-bold">Menu</p>
        </button>
    </nav>
</header>
<div id="menu-content" class="hidden fixed inset-0 flex  items-center justify-center bg-black bg-opacity-50 z-40">
    <div class="achtergrond relative w-96 bg-white  border-2 justify-between border-accent-color rounded-lg shadow-lg text-center p-5">
        <h1 class="text-center text-2xl font-bold mt-2 mb-5">Ga naar</h1>
        <hr class="border-b-2  border-accent-color mb-5">
        @php
            $routes = [
                ['route' => 'home', 'name' => 'Begin'],
                ['route' => 'wiebenik', 'name' => 'Inasja'],
                ['route' => 'coaching', 'name' => 'Coaching'],
                ['route' => 'aanbod', 'name' => 'Aanbod'],
                ['route' => 'podcast', 'name' => 'Podcast'],
                ['route' => 'werkzaamheden', 'name' => 'Werkzaamheden'],
                ['route' => 'contact', 'name' => 'Contact'],
            ];
        @endphp

        @foreach ($routes as $route)
            <a href="{{ route($route['route']) }}" class="block text-lg mb-3 m-10 {{ request()->routeIs($route['route']) ? 'active-link' : '' }}">
                {{ $route['name'] }}

            </a>
        @endforeach

        <!-- @foreach ($routes as $index => $route)
            <a href="{{ route($route['route']) }}" class="block text-lg mb-3 m-28 {{ request()->routeIs($route['route']) ? 'active-link' : '' }}" style="margin-bottom: {{ $index < count($routes) - 1 ? '30px' : '0' }}">
                {{ $route['name'] }}
            </a>
        @endforeach -->

@foreach ($routes as $route)
    <a href="{{ route($route['route']) }}" class="block text-lg mb-3 m-10 {{ request()->routeIs($route['route']) ? 'active-link' : '' }}">
        {{ $route['name'] }}

    </a>
@endforeach
        <!-- <button onclick="toggleMenu()" class="mt-5 bg-primary-color text-white py-2 px-4 rounded">Afsluiten</button> -->
    </div>
</div>

<script>
function toggleMenu() {
    const menuContent = document.getElementById("menu-content");
    const menuOpenIcon = document.getElementById("menu-open-icon");
    const menuCloseIcon = document.getElementById("menu-close-icon");
    const menuText = document.getElementById("menu-text");

    if (menuContent.classList.contains("hidden")) {
        menuContent.classList.remove("hidden");
        menuOpenIcon.style.display = "none";
        menuCloseIcon.style.display = "block";
        menuText.textContent = "Afsluiten";
    } else {
        menuContent.classList.add("hidden");
        menuOpenIcon.style.display = "block";
        menuCloseIcon.style.display = "none";
        menuText.textContent = "Menu";
    }
}

document.getElementById("menu-toggle").addEventListener("click", toggleMenu);


</script>

<style>
.achtergrond {
    background-image: url('/assets/images/navimg.webp');
    background-size: cover;
    height: 600px;
    margin: 20px;
}

.active-link {
    font-weight: bold;
    border-bottom: 2px solid #cba5a8; /* Vervang #yourAccentColor door de kleur die je wilt gebruiken */
    padding-bottom: 2px; /* Klein beetje padding voor een mooier effect */
}

</style>
