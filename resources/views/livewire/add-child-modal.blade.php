<div>

    <div>
        {{-- The best athlete wants his opponent at his best. --}}
        <div class="mt-4 pb-4 w-full" >
            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen" class="ml-auto mr-auto mb-3 relative top-3 flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-primary-500 rounded-md dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:bg-primary-700 hover:bg-primary-600 focus:outline-none focus:bg-primary-500 focus:ring focus:ring-primary-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
            
                    <span>Adicionar Bloco</span>
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
                        <div class="w-full md:w-1/2 lg:w-1/2 px-4 py-4 md:mb-0 mr-auto ml-auto">
                            <label for="file-upload-modal" class="text-base inline-block flex items-center justify-center w-full px-5 py-2 mt-1 text-center align-bottom font-medium text-white bg-primary-600 border border-transparent rounded-md cursor-pointer hover:bg-primary-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                <span class="mr-2"><i class="far fa-image"></i></span>
                                <span>Image</span>
                                <input id="file-upload-modal" wire:model="image" wire:change="$emit('fileChosen', this)" name="file-upload-modal" type="file" class="sr-only">
                            </label>
                            <div >

                                <span>{{ $fileName ?? 'Image' }}</span>
                                
                                @if ($image)
                                    <span id="preview-image-modal" src="{{ $image->getClientOriginalName() }}" wire:loading.attr="src" ></span>
                                    {{-- <img id="preview-image-modal" src="{{ $image->temporaryUrl() }}" wire:loading.attr="src" alt="Imagem temporária"> --}}
                                @else
                                    <img id="preview-image-modal" style="display:none;">
                                @endif
                            </div>
                        </div>

                        
                            <div class="flex flex-col md:flex-row justify-between items-start">
                             
                                <div class="w-full  px-4  mb-4 md:mb-0">
                                    <label for="title">Titulo</label>
                                    <input  wire:model.debounce.900ms="title" type="text" type="text" class="w-full border border-gray-500 shadow rounded border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
                                </div>
                            </div>
                            <div class="flex flex-col md:flex-row justify-between items-start">
                                <div class="w-full  px-4  mb-4 md:mb-0">
                                    <label for="Texto">Texto</label>
                                    <textarea wire:model.debounce.900ms="text"  style="resize: none" class="h-60 w-full border border-gray-500 shadow rounded border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                                </div>
                            </div>
            
                            <div class="container mx-auto my-4">
                                <div class="py-3 flex flex-col md:flex-row justify-center items-center">
                                    <div class="w-full  flex justify-end space-x-2">
                                
                                    <button @click=" modelOpen = false " wire:click="saveBanner" type="button" class="flex items-center px-4 py-2 text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-opacity-50 transition ease-in-out duration-300">
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
    </div>
    
</div>

{{-- image preview --}}
<script>
    document.getElementById('file-upload-modal').addEventListener('change', function() {
        var reader = new FileReader();
        reader.onload = function(event) {
            document.getElementById('preview-image-modal').style.display = 'block';
            document.getElementById('preview-image-modal').src = event.target.result;
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>

{{-- script do recruta --}}
<script>
    document.getElementById('file-upload-modal').addEventListener('change', function() {
        var reader = new FileReader();
        reader.onload = function(event) {
            var fileName = this.files[0].name;
            Livewire.emit('fileChosen', event.target.result, fileName);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>

{{-- name preview --}}
<script>
document.addEventListener("livewire:load", () => {
    const fileInput = document.getElementById('file-upload-modal');
    const fileNamePreview = document.querySelector('.w-full span:last-child');

    fileInput.addEventListener('change', () => {
      const fileName = fileInput.files[0].name;
      fileNamePreview.textContent = fileName;
    });
  });
</script>