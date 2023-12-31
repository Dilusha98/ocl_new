<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div class="grid gap-6 mb-8 mt-4 md:grid-cols-4">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap" style="font-size: 14px;">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Group Name</th>
                                    <th class="px-4 py-3">Message</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach($groupList as $group)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">{{$group->name}}</td>
                                        <td class="px-4 py-3">{{$group->message}}</td>
                                        <td class="px-4 py-3">
                                            @if($group->status == 1)
                                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"> Active </span>
                                            @elseif($group->status == 0)
                                                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"> Inactive </span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3">
                                            <a href="{{ url('/view-group', ['id' => $group->id]) }}" class="border border-blue-500 px-2 py-1 rounded">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination mt-2">
                    {{ $groupList->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
