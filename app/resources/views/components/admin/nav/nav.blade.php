<div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-900 bg-gray-200 md:w-64 dark:text-gray-200 dark:bg-gray-800" x-data="{ open: false }">
    <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
        <span class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark:text-white focus:outline-none focus:shadow-outline">
            {{ config('app.name', 'Laravel') }}
        </span>
        <x-common.toggle-dark-mode/>
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
        <x-admin.nav.link
            :href="route('admin.dashboard')"
            :active="request()->routeIs('admin.dashboard')"
            :enable="Auth::user()->can('view_admin')"
        >
            <i class="fa-solid fa-gauge w-5 text-center"></i> {{ __('admin.nav.dashboard') }}
        </x-admin.nav.link>

        <x-admin.nav.link
            :href="route('admin.categories.index')"
            :active="request()->routeIs('admin.categories.index')"
            :enable="Auth::user()->can('view_categories')"
        >
            <i class="fa-solid fa-tags w-5 text-center"></i> {{ __('admin.nav.category') }}
        </x-admin.nav.link>

        <x-admin.nav.link
            :href="route('admin.menus.index')"
            :active="request()->routeIs('admin.menus.index')"
            :enable="Auth::user()->can('view_menus')"
        >
            <i class="fa-solid fa-utensils w-5 text-center"> </i></i> {{ __('admin.nav.menu') }}
        </x-admin.nav.link>

        <x-admin.nav.link
            :href="route('admin.tables.index')"
            :active="request()->routeIs('admin.tables.index')"
            :enable="Auth::user()->can('view_tables')"
        >
            <i class="fa-solid fa-square w-5 text-center"></i> {{ __('admin.nav.table') }}
        </x-admin.nav.link>

        <x-admin.nav.link
            :href="route('admin.reservations.index')"
            :active="request()->routeIs('admin.reservations.index')"
            :enable="Auth::user()->can('view_reservations')"
        >
            <i class="fa-solid fa-calendar-days w-5 text-center"></i> {{ __('admin.nav.reservation') }}
        </x-admin.nav.link>

        <x-admin.nav.link
            :href="route('admin.users.index')"
            :active="request()->routeIs('admin.users.index')"
            :enable="Auth::user()->can('view_users')"
        >
            <i class="fa-solid fa-users w-5 text-center"></i> {{ __('admin.nav.user') }}
        </x-admin.nav.link>

        <x-admin.nav.link
            :href="route('admin.roles.index')"
            :active="request()->routeIs('admin.roles.index')"
            :enable="Auth::user()->can('view_roles')"
        >
            <i class="fa-solid fa-key w-5 text-center"></i> {{ __('admin.nav.role') }}
        </x-admin.nav.link>

        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:bg-transparent dark:focus:text-white dark:hover:text-white dark:focus:bg-gray-600 dark:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline">
                <span><i class="fa-solid fa-user w-5 text-center"></i> {{ Auth::user()->name }}</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-2 bg-gray-200 rounded-md shadow dark:bg-gray-700">
                    <x-admin.nav.logout />
                </div>
            </div>
        </div>
    </nav>
</div>
