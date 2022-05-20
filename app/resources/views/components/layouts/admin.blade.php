@push('metas')
    <title>{{ config('app.name', 'Laravel') }} - {{ __('admin.layout.title') }}</title>
@endpush

<x-layouts.base>
    <body class="font-sans antialiased">
        <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
            <x-admin.nav.nav />

            <!-- Page Content -->
            <main class="m-2 p-8 w-full">
                <x-admin.common.flash-messages/>
                {{ $slot }}
            </main>
        </div>
    </body>
</x-layouts.base>