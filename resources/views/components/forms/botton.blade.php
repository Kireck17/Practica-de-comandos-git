<div x-data="{on:@entangle($attributes->wire('model'))}" :class="{
    'flex-row-reverse' :on,
    'flex-row':!on
}"
    class="w-16 h-8 bg-gray-300 rounded-full flex"
    @click="on =!on"
>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
  
    <div  :class="{
        'bg-green-500 border-green-500' :on,
        'bg-red-500 border-red-500' :!on
    }"
    class=" w-8 h-full  border rounded-full"
    ></div>
</div>