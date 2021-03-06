@push('metas')
    <title>{{ config('app.name', 'Laravel') }} - {{ __('admin.layout.title') }}</title>
@endpush

<x-layouts.base>
    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <x-admin.nav.nav />

        <!-- Page Content -->
        <main class="p-4 w-full dark:bg-gray-900">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-admin.common.flash-messages/>
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layouts.base>