<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-admin.common.flash-message
            message="danger"
            class="text-red-700 bg-red-100 dark:bg-red-200 dark:text-red-800"
        />
        <x-admin.common.flash-message
            message="success"
            class="text-green-700 bg-green-100 dark:bg-green-200 dark:text-green-800"
        />
        <x-admin.common.flash-message
            message="warning"
            class="text-yellow-700 bg-yellow-100 dark:bg-yellow-200 dark:text-yellow-800"
        />
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm rounded-lg text-red-700 bg-red-100 dark:bg-red-200 dark:text-red-800" role="alert">
                <span class="font-medium">{{ __('validation.alert') }}</span>
            </div>
        @endif
    </div>
</div>
