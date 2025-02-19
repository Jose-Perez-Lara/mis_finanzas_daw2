<div>
    @if($attributes->has('href'))
        <a {{$attributes->has('class')?$attributes:$attributes->merge(['class'=>'text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800'])}}>
            {{ $slot }}
        </a>
    @elseif($attributes->has('name'))
        <button type="submit"{{ $attributes->has('class')?$attributes:$attributes->merge(['class'=>'bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded'])}}>
            {{ $slot }}
        </button>
    @else
        <button type="button"  {{ $attributes->has('class')?$attributes:$attributes->merge(['class'=>'text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800'])}}>
            {{ $slot }}
        </button>
    @endif
</div>