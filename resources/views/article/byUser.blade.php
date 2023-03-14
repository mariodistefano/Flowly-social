<x-layout>

    <x-waves/>

    <x-header
      title="{{$user->name}}"
    /> 
        
        
    @foreach ($articles as $article)
      <x-article-card
          :article="$article"
      />
    @endforeach
    
  <x-footer/>

</x-layout>