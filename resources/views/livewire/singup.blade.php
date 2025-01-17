<div class="bg-white rounded-xl shadow p-8 flex flex-col gap-6 min-w-[35rem]">
    <div>
        <h2 class="text-3xl font-bold mb-1">Let's start your journey!</h2>
        <span class="text-lg pb-2 text-slate-600">Sign up for a new account</span>
    </div>

    <hr class="w-[75%]">

    <label class="flex flex-col gap-2">
        Email
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <label class="flex flex-col gap-2">
        Password
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <label class="flex flex-col gap-2">
        Confirm password
        <input type="password" class="px-3 py-2 border border-slate-300 rounded-lg">
    </label>

    <div class="flex justify-between items-center pt-4">
        <div class="flex justify-start items-center gap-2 text-sm">
            <input type="checkbox" class="border">

            <span>I agree to the</span>
            <x-modal>terms of service</x-modal>

        </div>

        <button class="w-1/2 text-center rounded-xl bg-blue-500 text-white px-3 py-2 font-medium">Register</button>
    </div>

    <div x-data="{open: true}" class="flex justify-center">

        <!-- Trigger -->
        <span x-on:click="open = true">
            <button type="button" class="bg-white px-5 py-2.5 rounded-md shadow">
                Open dialog
            </button>
        </span>

        <!-- Modal -->
        <div
            x-dialog
            x-model="open"
            style="display: none"
            class="fixed insert-0 overflow-y-auto z-10"
        >
            <!-- Overlay  -->
            <div x-dialog:overlay x-transition.opacity class="fixed inset-0 bg-black/25"></div>

            <!-- Panel -->
            <div class="relative min-h-screen flex items-center justify-center p-4">
                <div
                    x-dialog:panel
                    x-transition.in x-transition.out.opacity
                    class="relative max-w-2xl w-full bg-white rounded-xl shadow-xl overflow-y-auto"
                >

                <!-- Close Button -->
                <div class="absolute top-0 right-0 pt-4 pr-4">
                    <button type="button" @click="dialog.close()" class="bg-gray rounded-lg p-2 text-gray-600">
                        <span class="sr-only">Close modal</span>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="10px" width="10px" version="1.1" id="Capa_1" viewBox="0 0 26 26" xml:space="preserve">
                            <g>
                                <path style="fill:#030104;" d="M21.125,0H4.875C2.182,0,0,2.182,0,4.875v16.25C0,23.818,2.182,26,4.875,26h16.25   C23.818,26,26,23.818,26,21.125V4.875C26,2.182,23.818,0,21.125,0z M18.78,17.394l-1.388,1.387c-0.254,0.255-0.67,0.255-0.924,0   L13,15.313L9.533,18.78c-0.255,0.255-0.67,0.255-0.925-0.002L7.22,17.394c-0.253-0.256-0.253-0.669,0-0.926l3.468-3.467   L7.221,9.534c-0.254-0.256-0.254-0.672,0-0.925l1.388-1.388c0.255-0.257,0.671-0.257,0.925,0L13,10.689l3.468-3.468   c0.255-0.257,0.671-0.257,0.924,0l1.388,1.386c0.254,0.255,0.254,0.671,0.001,0.927l-3.468,3.467l3.468,3.467   C19.033,16.725,19.033,17.138,18.78,17.394z"/>
                            </g>
                            </svg>
                    </button>
                </div>

                <!-- Panel --> 
                <div class="p-8">
                    <p>Panel content</p>
                </div>



                </div>
            </div>

        </div>
    </div>
 


</div>



