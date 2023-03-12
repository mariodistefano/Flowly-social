<x-layout>

    <x-waves/>

    <x-header
      title="{{$category->name}}"
    />
        
        
     @foreach ($articles as $article)
        <x-article-card
            :article="$article"
        />
    @endforeach
</x-layout>