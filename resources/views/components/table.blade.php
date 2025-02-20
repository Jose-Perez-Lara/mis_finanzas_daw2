<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                @foreach ($tableData['heading'] as $heading)
                <th scope="col" class="px-6 py-3">
                    {{$heading}}
                </th>
                @endforeach
                <th scope="col" class="px-6 py-3">  
                    Options
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData['data'] as $row)
            @if($loop->even)
            <tr class="bg-white border-b dark:bg-white-800 dark:border-gray-700">
                @foreach ($row as $key => $cell)
                @if($key!='id')
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray">
                        {{$cell}}
                    </th>
                @endif
                
                @endforeach
                @if($name == 'categories')
                <th scope="row" class="flex items-center px-6 py-3">  
                    <x-button href="{{route($name.'.show', ['id'=> $row['id']])}}">
                        Show 
                    </x-button>
                </th>
                @else   
                <th scope="row" class="flex items-center px-6 py-3">  
                    <x-button href="{{route($name.'.edit', ['id'=> $row['id']])}}">
                        Edit 
                    </x-button>
                    <form action="{{ route($name.'.delete', ['id'=> $row['id']]) }}" method="post">
                    @csrf
                    @method('DELETE')
                        <x-button type="submit" name="eliminar" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Borrar
                        </x-button>
                    </form>
                </th>
                @endif
            </tr>
            @else
            <tr class="bg-grey border-b dark:bg-gray-800 dark:border-gray-700">
                @foreach ($row as $key => $cell)
                @if($key!='id')
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$cell}}
                    </th>
                @endif
                @endforeach
                @if($name == 'categories')
                <th scope="row" class="flex items-center px-6 py-3">  
                    <x-button href="{{route($name.'.show', ['id'=> $row['id']])}}">
                        Show 
                    </x-button>
                </th>
                @else   
                <th scope="row" class="flex items-center px-6 py-3">  
                    <x-button href="{{route($name.'.edit', ['id'=> $row['id']])}}">
                        Edit 
                    </x-button>
                    <form action="{{ route($name.'.delete', ['id'=> $row['id']]) }}" method="post">
                    @csrf
                    @method('DELETE')
                        <x-button type="submit" name="eliminar" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Borrar
                        </x-button>
                    </form>
                </th>
                @endif
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>