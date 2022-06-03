<x-layouts.admin>
    <x-admin.common.title :title="__('admin.user.index.title')"/>

    <div class="flex justify-end">
        <x-admin.index.new-link 
            :route="route('admin.users.create', $params)"
            :text="__('admin.user.action.create')"
        />
    </div>

    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <x-admin.user.table
                        :users="$users"
                        :params="$params"
                    />
                </div>
            </div>

            <div class="inline-block my-6 min-w-full sm:px-6 lg:px-8">
                {{ $users->links() }}
            </div>
        </div>
    </div>    
</x-layouts.admin>