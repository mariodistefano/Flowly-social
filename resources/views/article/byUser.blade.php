<x-layout>
    <x-header/> 
        {{-- title="{{$user->name}}" --}}
        
    @foreach ($articles as $article)
      <x-article-card
          :article="$article"
      />
    @endforeach
</x-layout>