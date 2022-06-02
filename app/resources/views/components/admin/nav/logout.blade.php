<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a 
        href="{{ route('logout') }}"
        onclick="event.preventDefault(); this.closest('form').submit();"
        class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark:bg-transparent dark:hover:bg-gray-600 dark:focus:bg-gray-600 dark:focus:text-white dark:hover:text-white dark:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-300 focus:bg-gray-300 focus:outline-none focus:shadow-outline"
    >
        <i class="fa-solid fa-right-from-bracket"></i> {{ __('admin.common.logout') }}
    </a>
</form>