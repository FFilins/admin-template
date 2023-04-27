<div>
    <div>
        
            <div class="flex flex-col md:flex-row justify-between items-start">
                <div class="w-full h-2/5  px-4  mb-4 md:mb-0">
                    <label for="Texto">Texto</label>
                    <div x-data @trix-change="$dispatch('input', event.target.value)" x-ref="trixEditor">
                        <trix-editor
                            wire:model.debounce.500ms="value"
                            class="h-full w-full border-1 border-gray-300 rounded bg-white transition duration-300 ease-in-out hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-600"
                            x-ref="trixInput"
                            x-ontrix-blur="trixEditor.setAttribute('value', @this.get('value'))"
                            wire:ignore
                        ></trix-editor>
                    </div>
                </div>
            </div> 
        
        <script>
            var trixEditor = document.getElementById("{{ $trixId }}")
        
            addEventListener("trix-blur", function(event) {
                @this.set('value', trixEditor.getAttribute('value')),
                trixEditor.setAttribute('value', @this.get('value'));
            })
        </script>
    
    </div>
</div>
