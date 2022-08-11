<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        A Líder
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        Cursos
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contato
    </a>
		<a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        O Site
    </a>

		{{--  --}}
		<button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">A Líder <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>

    <!-- Dropdown menu -->
    <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
        <div class="px-4 py-3">
        	<span class="block text-sm">Bonnie Green</span>
        	<span class="block text-sm font-medium text-gray-900 truncate">name@flowbite.com</span>
        </div>
        <ul class="py-1" aria-labelledby="dropdown">
        <li>
            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Missão</a>
        </li>
        <li>
            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Visão</a>
        </li>
        <li>
            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Valores</a>
        </li>
        </ul>
    </div>
		{{--  --}}
</nav>
