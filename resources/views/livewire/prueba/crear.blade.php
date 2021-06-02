<div>
    <x-jet-banner/>
    <dl>

                <div class="bg-gradient-to-r from-purple-300 via-pink-300 to-red-300 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                <x-forms.label for="nomL">
                                    <h1>Nombre del Libro:</h1>
                                </x-forms.label>
                            </dt>
                    
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-forms.input type="text" id="nomL" wire:model="book.nomLi"/> 
                        <x-jet-input-error for="book.nomLi" />
                    </dd>  
                </div>  

                
                 
                
                
                
           
                <div class="bg-gradient-to-r from-purple-300 via-pink-300 to-red-300 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                <x-forms.label for="cantidad">
                                    Cantidad Existente:
                                </x-forms.label>
                            </dt>
                    
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-forms.input type="number" id="cantidad" min="0" step="0.01" wire:model.number="book.canEx"/> 
                        <x-jet-input-error for="book.canEx" />       
                    </dd>  
                </div> 

           
            
                <div class="bg-gradient-to-r from-purple-300 via-pink-300 to-red-300 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                <x-forms.label for="precio">
                                    Precio:
                                </x-forms.label>
                            </dt>
                    
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-forms.adon-input> 
                            <x-slot name="adon">
                                <i class="fas fa-dollar-sign"></i>
                            </x-slot>
                            <x-forms.input class="rounded-l-none" type="number" id="precio" min="0" step="0.01" wire:model.number="book.price"/>
                        </x-forms.adon-input>
                        <x-jet-input-error for="book.price" /> 

                                
                    </dd>  
                </div> 

            <div class="bg-gradient-to-r from-purple-300 via-pink-300 to-red-300 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                                <x-forms.label for="descripcion">
                                    Sinopxis:
                                </x-forms.label>
                            </dt>
                    
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-forms.textarea rows="3" id="descripcion" wire:model="book.description"/> 
                        <x-jet-input-error for="book.description" />        
                    </dd>  
            </div>
            
            
    </dl> 

    <div class="flex justify-end p-3">
        <x-forms.button-success wire:click="save_libro()"> 
            <i class="far fa-save mr-3"></i>
                Guardar
        </x-forms.button-success>
    </div>

    

</div>