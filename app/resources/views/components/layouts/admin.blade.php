@push('metas')
    <title>{{ config('app.name', 'Laravel') }} - {{ __('admin.layout.title') }}</title>
@endpush

<x-layouts.base>
    <body class="font-sans antialiased">
        <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
            <x-admin.nav.nav />

            <!-- Page Content -->
            <main class="m-2 p-8 w-full">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <x-admin.common.flash-messages/>
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </body>
</x-layouts.base>