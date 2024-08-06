<x-main>
    
    <div class="container-sm mt-28 h-screen">
        
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="text-gray-50">#</th>
                    <th class="text-gray-50">title</th>
                    <th class="text-gray-50">description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)    
                <tr class="my-8">
                    <td class="text-gray-50">#{{ $post->id }}</td>
                    <td class="text-gray-50">{{ $post->title }}</td>
                    <td class="text-gray-50">{{ $post->description }}</td>
                </tr>
                @endforeach
                <tr class="py-8">
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
        
    </div>
</x-main>