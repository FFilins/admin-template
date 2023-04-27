<div>


    <div>
        <div x-data="{ open: false }">
            <button  type="button" class="mt-4 inline-flex items-center  w-full px-4 py-2 text-sm font-medium text-white-700 bg-white-100   hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="dropdown-toggle-2" @click="open = !open" x-bind:aria-expanded="open">
                <span>Módulo - Cards</span>
                <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6.29289 7.29289C6.68342 6.90237 7.31658 6.90237 7.70711 7.29289L10 9.58579L12.2929 7.29289C12.6834 6.90237 13.3166 6.90237 13.7071 7.29289C14.0976 7.68342 14.0976 8.31658 13.7071 8.70711L10.7071 11.7071C10.3166 12.0976 9.68342 12.0976 9.29289 11.7071L6.29289 8.70711C5.90237 8.31658 5.90237 7.68342 6.29289 7.29289Z" clip-rule="evenodd" />
                </svg>
            </button>
    
            <div class="px-4 w-full mt-2 bg-gray-100 subTitle rounded-md shadow-lg" id="dropdown-content-3" x-show="open"  x-bind:aria-hidden="!open" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
            <!-- Dropdown 3 content here -->
    

            @foreach ($cards as $card)
                
            <livewire:child :card="$card" :key="$card->id">
            @endforeach
            
            </div>

            <livewire:add-child-modal wire:key="add-block-modal" >
    
    
            {{-- fim do conteudo do dropdown 2 --}}
            {{-- fim do modal --}}
            
    </div>

</div>
