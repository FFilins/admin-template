<x-app-layout>
    <div>
        <div class="bg-gray-100 py-4">
            <div class="container mx-auto px-4">
    
                <div class="" x-data="{ open: false }">
                    <button  type="button" class="inline-flex items-center  w-full px-4 py-2 text-sm font-medium text-white-700 bg-white-100   hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="dropdown-toggle" @click="open = !open" x-bind:aria-expanded="open">
                    <span>Banner</span>
                    <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M6.29289 7.29289C6.68342 6.90237 7.31658 6.90237 7.70711 7.29289L10 9.58579L12.2929 7.29289C12.6834 6.90237 13.3166 6.90237 13.7071 7.29289C14.0976 7.68342 14.0976 8.31658 13.7071 8.70711L10.7071 11.7071C10.3166 12.0976 9.68342 12.0976 9.29289 11.7071L6.29289 8.70711C5.90237 8.31658 5.90237 7.68342 6.29289 7.29289Z" clip-rule="evenodd" />
                    </svg>
                    </button>
              
                    <div class="  w-full mt-2 bg-gray-100 subTitle rounded-md shadow-lg" id="dropdown-content" x-show="open"  x-bind:aria-hidden="!open" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                    
                        <div class="flex flex-col md:flex-row justify-between items-start">
                            <div class="w-full md:w-1/2 lg:w-1/2 px-4 py-4 md:mb-0">
                                <label for="file-upload" class="text-base relative flex items-center justify-center w-full px-5 py-2.5 mt-1 text-center align-bottom font-medium text-white bg-primary-600 border border-transparent rounded-md cursor-pointer hover:bg-primary-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                    <span class="mr-2"><i class="fas fa-file"></i></span>
                                    <span>Image</span>
                                    <input id="file-upload" wire:model="image" name="file-upload" type="file" class="sr-only">
                                </label>
                            </div>
        
                            <div class="w-full md:w-1/2 lg:w-1/2 px-4  mb-4 md:mb-0">
                                <label for="caption">Caption</label>
                                <input type="text" type="text" class="w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-between items-start">
                            <div class="w-full  px-4  mb-4 md:mb-0">
                                <label for="title">Titulo</label>
                                <input type="text" type="text" class="w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-between items-start">
                            <div class="w-full  px-4  mb-4 md:mb-0">
                                <label for="subTitle">Sub titulo</label>
                                <input type="text" class="w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                        </div>
        
                        <div class="flex flex-col md:flex-row justify-between items-start">
        
                            <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                
                                <label for="buttonText">ButtonText</label>
                                <input type="text" class="w-full border-2 border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                                <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                <label for="buttonLink">ButtonLink</label>
                                <input type="text" class="w-full border-2 border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                </div>
                            </div>
                
                            <div class="container mx-auto my-4">
                            <div class="py-3 flex flex-col md:flex-row justify-center items-center">
                                <div class="w-full  flex justify-end space-x-2">
                            
                                <button wire:click="saveBanner" type="button" class="flex items-center px-4 py-2 text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                                    <i class="fas fas fa-save mr-2"></i>
                                    <span>Save</span>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- inicio do dropdown 2 --}}
                <div x-data="{ open: false }">
                    <button  type="button" class="mt-4 inline-flex items-center  w-full px-4 py-2 text-sm font-medium text-white-700 bg-white-100   hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="dropdown-toggle-2" @click="open = !open" x-bind:aria-expanded="open">
                        <span>Bloco 2</span>
                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M6.29289 7.29289C6.68342 6.90237 7.31658 6.90237 7.70711 7.29289L10 9.58579L12.2929 7.29289C12.6834 6.90237 13.3166 6.90237 13.7071 7.29289C14.0976 7.68342 14.0976 8.31658 13.7071 8.70711L10.7071 11.7071C10.3166 12.0976 9.68342 12.0976 9.29289 11.7071L6.29289 8.70711C5.90237 8.31658 5.90237 7.68342 6.29289 7.29289Z" clip-rule="evenodd" />
                        </svg>
                    </button>
            
                    <div class="  w-full mt-2 bg-gray-100 subTitle rounded-md shadow-lg" id="dropdown-content-2" x-show="open"  x-bind:aria-hidden="!open" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                        <!-- Dropdown 2 content here -->
                        
                        <div class="flex flex-col md:flex-row justify-between items-start">
                            <div class="w-full  px-4  mb-4 md:mb-0">
                                <label for="title">Titulo</label>
                                <input type="text" type="text" class="w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                        </div>
                        <div class="flex flex-col md:flex-row justify-between items-start">
                            <div class="w-full  px-4  mb-4 md:mb-0">
                                <label for="Texto">Texto</label>
                                <textarea style="resize: none" class="h-60 w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                            </div>
                        </div>
    
                        <div class="flex flex-col md:flex-row justify-between items-start">
    
                            <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                
                                <label for="buttonText">ButtonText</label>
                                <input type="text" class="w-full border-2 border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                                <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                <label for="buttonLink">ButtonLink</label>
                                <input type="text" class="w-full border-2 border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                </div>
                            </div>
                
                            <div class="container mx-auto my-4">
                            <div class="py-3 flex flex-col md:flex-row justify-center items-center">
                                <div class="w-full  flex justify-end space-x-2">
                            
                                <button wire:click="saveBanner" type="button" class="flex items-center px-4 py-2 text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                                    <i class="fas fa-sync mr-2"></i>
                                    <span>Save</span>
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- inicio do dropdown 3 --}}
                <div x-data="{ open: false }">
                    <button  type="button" class="mt-4 inline-flex items-center  w-full px-4 py-2 text-sm font-medium text-white-700 bg-white-100   hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="dropdown-toggle-2" @click="open = !open" x-bind:aria-expanded="open">
                        <span>Dropdown Button 3</span>
                        <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M6.29289 7.29289C6.68342 6.90237 7.31658 6.90237 7.70711 7.29289L10 9.58579L12.2929 7.29289C12.6834 6.90237 13.3166 6.90237 13.7071 7.29289C14.0976 7.68342 14.0976 8.31658 13.7071 8.70711L10.7071 11.7071C10.3166 12.0976 9.68342 12.0976 9.29289 11.7071L6.29289 8.70711C5.90237 8.31658 5.90237 7.68342 6.29289 7.29289Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                
                    <div class="px-4 w-full mt-2 bg-gray-100 subTitle rounded-md shadow-lg" id="dropdown-content-3" x-show="open"  x-bind:aria-hidden="!open" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                    <!-- Dropdown 3 content here -->

                    {{-- conteudo do dropdown 2 --}}

                    @for($i = 1; $i <=5; $i++)
                    <div x-data="{ open: false }">
                        <button  type="button" class="mt-4 inline-flex items-center  w-full px-4 py-2 text-sm font-medium text-white-700 bg-white-100   hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="dropdown-toggle-2/2" @click="open = !open" x-bind:aria-expanded="open">
                            <span>Bloco 2</span>
                            <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6.29289 7.29289C6.68342 6.90237 7.31658 6.90237 7.70711 7.29289L10 9.58579L12.2929 7.29289C12.6834 6.90237 13.3166 6.90237 13.7071 7.29289C14.0976 7.68342 14.0976 8.31658 13.7071 8.70711L10.7071 11.7071C10.3166 12.0976 9.68342 12.0976 9.29289 11.7071L6.29289 8.70711C5.90237 8.31658 5.90237 7.68342 6.29289 7.29289Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    
                        <div class="  w-full mt-2 bg-gray-100 subTitle rounded-md shadow-lg" id="dropdown-content-2/2" x-show="open"  x-bind:aria-hidden="!open" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
                            <!-- Dropdown 2/2 content here -->
                            
                            <div class="flex flex-col md:flex-row justify-between items-start">
                                <div class="w-full  px-4  mb-4 md:mb-0">
                                    <label for="title">Titulo</label>
                                    <input type="text" type="text" class="w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row justify-between items-start">
                                <div class="w-full  px-4  mb-4 md:mb-0">
                                    <label for="Texto">Texto</label>
                                    <textarea style="resize: none" class="h-60 w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                                </div>
                            </div>
            
                        <div class="flex flex-col md:flex-row justify-between items-start">
                
                            <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                
                                <label for="buttonText">ButtonText</label>
                                <input type="text" class="w-full border-2 border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                            </div>
                                <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                <label for="buttonLink">ButtonLink</label>
                                <input type="text" class="w-full border-2 border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                </div>
                            </div>
                
                            <div class="container mx-auto my-4">
                            <div class="py-3 flex flex-col md:flex-row justify-center items-center">
                                <div class="w-full  flex justify-end space-x-2">
                            
                                    <button wire:click="saveBanner" type="button" class="flex items-center px-4 py-2 text-white bg-danger-500 hover:bg-danger-600 focus:outline-none focus:ring-2 focus:ring-danger-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                                        <i class="fas fas fa-trash mr-2"></i>
                                        <span>Delete</span>
                                    </button>
                                    <button wire:click="saveBanner" type="button" class="flex items-center px-4 py-2 text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                                        <i class="fas fas fa-save mr-2"></i>
                                        <span>Save</span>
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                    {{-- fim do conteudo do dropdown 2/2 --}}
                    <div class="mt-4 pb-4 w-full">
                        <div x-data="{ modelOpen: false }">
                            <button @click="modelOpen =!modelOpen" class="ml-auto mr-auto flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-primary-500 rounded-md dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:bg-primary-700 hover:bg-primary-600 focus:outline-none focus:bg-primary-500 focus:ring focus:ring-primary-300 focus:ring-opacity-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                        
                                <span>Adicionar Bloco</span>
                            </button>
                        
                            <div x-show="modelOpen" class=" flex justify-center top-5 fixed inset-0 z-50 overflow-y-auto " aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
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
                                        
                                        <div class="flex flex-col md:flex-row justify-between items-start">
                                            <div class="w-full  px-4  mb-4 md:mb-0">
                                                <label for="title">Titulo</label>
                                                <input type="text" type="text" class="w-full border border-gray-500 shadow rounded border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                            </div>
                                        </div>
                                        <div class="flex flex-col md:flex-row justify-between items-start">
                                            <div class="w-full  px-4  mb-4 md:mb-0">
                                                <label for="Texto">Texto</label>
                                                <textarea style="resize: none" class="h-60 w-full border border-gray-500 shadow rounded border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                                            </div>
                                        </div>
                        
                                        <div class="flex flex-col md:flex-row justify-between items-start">
                                
                                            <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                                
                                                <label for="buttonText">ButtonText</label>
                                                <input type="text" class="w-full border-2 border border-gray-500 shadow rounded border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                            </div>
                                                <div class="w-full md:w-1/2 lg:w-1/2 px-4 mb-4 md:mb-0">
                                                <label for="buttonLink">ButtonLink</label>
                                                <input type="text" class="w-full border-2 border border-gray-500 shadow border-transparent rounded py-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                                </div>
                                            </div>
                                
                                            <div class="container mx-auto my-4">
                                            <div class="py-3 flex flex-col md:flex-row justify-center items-center">
                                                <div class="w-full  flex justify-end space-x-2">
                                            
                                                <button wire:click="saveBanner" type="button" class="flex items-center px-4 py-2 text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                                                    <i class="fas fas fa-save mr-2"></i>
                                                    <span>Save</span>
                                                </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- fim do modal --}}
                </div>
            </div>
            {{-- fim do dropdown 3 --}}
            
        </div>
    </div>
        
         
      
</x-app-layout>
