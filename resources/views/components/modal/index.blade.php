<div 
    x-data="{open: false}" 
    class="flex justify-center" 
    {{$attributes}}
    x-modelable="open"
>
    {{$slot}}
</div>