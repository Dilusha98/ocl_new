<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div class="grid gap-6 mb-8 mt-4 md:grid-cols-4">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300"> Create A New Group</h4>
                <div class="card">
                        <div class="mb-3 form-group">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Group Name</span>
                                <input id="groupName" name="groupName" required class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Enter group name" />
                              </label>
                        </div>
                        <div class="mb-3 form-group">
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Message</span>
                                <textarea id="message" name="message" required class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Message"></textarea>
                            </label>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-2">
                            <div class="">
                                <div class=" form-group">
                                    <label class="block mt-4 text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Start Date</span>
                                        <input type="date" id="startDate" required name="startDate" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                    </label>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 form-group">
                                    <label class="block mt-4 text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">End Date</span>
                                        <input type="date" id="endDate" name="endDate"  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"  />
                                        <label class="flex items-center dark:text-gray-400 mt-2">
                                            <input type="checkbox" id="noDate" name="noDate" value="1" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"/>
                                            <span class="ml-2">No Date</span>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-2">
                            <div>
                                <div class="mb-3 form-group">
                                    <label class="block mt-4 text-sm">
                                        <span class="text-gray-700 dark:text-gray-400">Participants</span>
                                        <input type="number" min="0" id="participantsCount" name="participantsCount" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Participants count" />

                                        <label class="flex items-center dark:text-gray-400 mt-2">
                                            <input type="checkbox" id="noLimit" name="noLimit" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"/>
                                            <span class="ml-2">No Limit</span>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="mt-4 text-sm">
                                <div class="mb-3 form-group">
                                    <span class="text-gray-700 dark:text-gray-400">Make This Group</span>
                                    <div class="mt-2">
                                        <label class="toggle-switch-label">
                                            <span class="toggle-label">Private &nbsp;</span>
                                            <input type="checkbox" class="hidden" id="accountType" name="accountType" />
                                            <div class="toggle-switch">
                                                <div class="toggle-switch-handle"></div>
                                            </div>
                                            <span class="toggle-label">Public</span>
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button id="createBtn" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Create Group</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>

