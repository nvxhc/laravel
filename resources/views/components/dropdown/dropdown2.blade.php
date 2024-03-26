@props(['href'=>'#','name'])

<li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
    <a 
        href="{{ $href }}"
        class="flex items-center"
    >
        <span class="mr-2 text-sm">&bull;</span>
        <span class="overflow-ellipsis">{{ $name }}</span>
    </a>
</li>