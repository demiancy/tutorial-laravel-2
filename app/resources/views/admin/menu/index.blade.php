<x-layouts.admin>
    <x-admin.common.title :title="__('admin.menu.index.title')"/>

    <div class="flex justify-end">
        <x-admin.index.new-link 
            :route="route('admin.menus.create', $params)"
            :text="__('admin.menu.action.create')"
        />
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <x-admin.menu.table
                        :menus="$menus"
                        :params="$params"
                    />
                </div>
            </div>

            <div class="inline-block my-6 min-w-full sm:px-6 lg:px-8">
                {{ $menus->links() }}
            </div>
        </div>
    </div>    
</x-layouts.admin>