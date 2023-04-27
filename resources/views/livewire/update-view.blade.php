<div>
    <form wire:submit.prevent="submit">
        <div class="flex flex-col md:flex-row justify-between items-start">
            <div class="w-full  px-4  mb-4 md:mb-0">
                <label for="title">Titulo</label>
                <input wire:model.debounce.900ms="title" type="text" name="title" class="w-full border-1 border-gray-300 rounded shadow-2 px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between items-start">
            <div class="w-full  px-4  mb-4 md:mb-0">
                <label for="Texto">Texto</label>
                <textarea wire:model.debounce.900ms="editorText" name="editorText" id="editor"  style="resize: none" class="h-2/5 w-full border-2 border-transparent rounded  px-3 transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
            </div>
        </div>

        <div class="container mx-auto my-4">
        
            <div class="py-3 flex flex-col md:flex-row justify-center items-center">
                <div class="w-full  flex justify-end space-x-2">
                    <button wire:click="delete" type="button" class="flex items-center px-4 py-2 text-white bg-red-600 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                        <i class="fas fas fa-trash mr-2"></i>
                        <span>Delete</span>
                    </button>
                    <button type="submit" class="flex items-center px-4 py-2 text-white bg-primary-500 hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300 focus:ring-opacity-50 transition ease-in-out duration-300">
                        <i class="fas fa-pencil-alt mr-2"></i>
                        <span>update</span>
                    </button>

                </div>
            </div>
        </div>
        
    </form>
</div>

