<link rel="stylesheet" href="{{ asset(config('site-specific.google-font')) }}">
<link rel="stylesheet" href="{{ asset(config('site-specific.tailwind-css')) }}">
<link rel="stylesheet" href="{{ asset(config('site-specific.groupView-css')) }}">
<link rel="stylesheet" href="{{ asset(config('site-specific.fontAwesome-cdn')) }}" integrity="sha384-GLhlTQ8i7uFsdZl/6U/mJ/MmOIkHCByP5Ssq6Z7uT2tC2vC4z5FbSSUnQlmh/jpV" crossorigin="anonymous">
<script src="{{ asset(config('site-specific.default-theme-js')) }}" defer></script>
<script src="{{ asset(config('site-specific.default-alpine-js')) }}" defer></script>



<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <div class="grid gap-6 mb-8 mt-4 md:grid-cols-4" style="">
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" style="background-color: #7B68F2;height:200px;">
            </div>
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800" style="margin-top: -150px; width: 550px; margin-left: 240px; justify-content: center;height:450px;">
                <div id="groupIcon">

                    <div style="display: flex; justify-content: center; align-items: center;">
                        <i class="fas fa-users mt-2 gicon" style="font-size: 46px; color: #7264c9;"></i>
                    </div>

                    <div>
                        <h1 class="mt-2 mb-4 font-semibold text-gray-600 dark:text-gray-300" style="text-transform: capitalize;">{{$groupDetails['0']->name}}</h1>
                    </div>

                    <div>
                        <h6 class="font-semibold text-black " style="text-align: left;">Group Status</h6>

                        <div style="margin-top:10px; display: flex; justify-content: space-between; align-items: center;font-size:12px">
                            <div style="display: flex; align-items: center;" class="font-semibold text-gray-600 dark:text-gray-300">
                                <i class="fas fa-user-plus" aria-hidden="true" style="margin-left: 30px;"></i>
                                <span style="margin-left: 10px;">Participants</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <span class="text-sm font-semibold text-gray-700 dark:text-gray-200" style="margin-right: 50px;font-size:12px">0 People</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h6 class="mt-2 font-semibold text-black" style="text-align: left;">Invitation Status</h6>

                        <div style="margin-top:10px; display: flex; justify-content: space-between; align-items: center;font-size:12px">
                            <div style="display: flex; align-items: center;" class="font-semibold text-gray-600 dark:text-gray-300">
                                <i class="fas fa-user-plus" aria-hidden="true" style="margin-left: 30px;"></i>
                                <span style="margin-left: 10px;">Emailed Participants</span>
                            </div>
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200" style="margin-right: 50px;font-size:12px">62 People</span>
                        </div>

                        <div style="margin-top:10px; display: flex; justify-content: space-between; align-items: center;font-size:12px">
                            <div style="display: flex; align-items: center;" class="font-semibold text-gray-600 dark:text-gray-300">
                                <i class="fas fa-user-plus" aria-hidden="true" style="margin-left: 30px;"></i>
                                <span style="margin-left: 10px;">Confirmed</span>
                            </div>
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-200" style="margin-right: 50px;font-size:12px">1 People</span>
                        </div>
                    </div>

                    <hr style="margin-top:15px;width:450px;margin-left:25px">

                    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4" style="margin-top:10px;">
                        <div style="text-align: center;">
                            <button id="preview" class="flex items-center justify-between px-4 py-2 text-sm text-white transition-colors duration-150 border border-transparent rounded-lg" style="display: inline-block;">
                                <i class="fas fa-envelope-open" style="margin-right: 10px;"></i>
                                <span>Preview Email</span>
                            </button>
                        </div>

                        <div style="text-align: center; margin-left: 120px;">
                            <button id="settings" class="flex items-center px-4 py-2 text-sm text-white transition-colors duration-150 border border-transparent rounded-lg" style="display: inline-block;">
                                <i class="fa fa-gear" style="margin-right: 10px;"></i>
                                <span>Email Settings</span>
                            </button>
                        </div>
                    </div>

                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4" style="margin-top:10px;margin-left:50px">
                        <div style="">
                            <button id="manual" class="flex items-center justify-between px-4 py-2 text-sm  text-white transition-colors duration-150 border border-transparent rounded-lg" style="background-color:#45A675">
                                <i class="fa fa-plus"></i> Add Manually
                            </button>
                        </div>
                        <div style="margin-left:15px">
                            <button id="fileUpload" class="flex items-center justify-between px-4 py-2 text-sm  text-gray transition-colors duration-150 border border-gray rounded-lg" style="background-color:#FFFFFF">
                                <i class="fas fa-file-import"></i> Import Files
                            </button>
                        </div>
                        <div style="display: flex; justify-content: center;margin-left:30px;width:130px">
                            <button id="send" class="flex items-center px-4 py-2 text-sm text-white transition-colors duration-150 border border-transparent rounded-lg" style="background-color:#7B68F2">
                                <i class="far fa-envelope" style="margin-right: 8px;margin-left:20px"></i> Send
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
