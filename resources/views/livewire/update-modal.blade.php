<div>
    <div>
        {{-- The best athlete wants his opponent at his best. --}}
        <div class="w-full" >
            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen" class="ml-auto mr-auto flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-warning-500 rounded-md dark:bg-warning-600 dark:hover:bg-warning-700 dark:focus:bg-warning-700 hover:bg-warning-600 focus:outline-none focus:bg-warning-500 focus:ring focus:ring-warning-300 focus:ring-opacity-50">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg> --}}
                    <i class="fas fa-pencil-alt"></i>
                    <span>Update</span>
                </button>
            
                <div style="border: 2px solid blue;" x-show="modelOpen" class="fixed flex justify-center content-center items-center  flex-align-center flex-items-center inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div class="flex items-end w-3/4 justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" 
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100" 
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                        ></div>
            
                        <div x-cloak x-show="modelOpen" 
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                        >
                        <div class="w-full md:w-1/2 lg:w-1/2 px-4 py-4 md:mb-0">
                            <label for="file-upload-modal" class="text-base relative flex items-center justify-center w-full px-5 py-2 mt-1 text-center align-bottom font-medium text-white bg-primary-600 border border-transparent rounded-md cursor-pointer hover:bg-primary-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                <span class="mr-2"><i class="far fa-image"></i></span>
                                <span>Image</span>
                                <input id="file-upload-modal" name="file-upload-modal" type="file" class="sr-only">
                            </label>
                        </div>
                            <div class="flex flex-col md:flex-row justify-between items-start">
                             
                                <div class="w-full  px-4  mb-4 md:mb-0">
                                    <label for="title">Titulo</label>
                                    <input  wire:model.debounce.900ms="title" type="text" class="w-full border border-gray-500 shadow rounded border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                </div>
                            </div>
                            
                            <livewire:trix :text="$text">
    
            
                            <div class="container mx-auto my-4">
                                <div class="py-3 flex flex-col md:flex-row justify-center items-center">
                                    <div class="w-full  flex justify-end space-x-2">
                                        
                                    <button @click =" modelOpen = false " wire:click="update" type="button" class="flex items-center px-4 py-2 text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                                        <i class="fas fa-pencil-alt mr-2"></i>
                                        <span>update</span>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
