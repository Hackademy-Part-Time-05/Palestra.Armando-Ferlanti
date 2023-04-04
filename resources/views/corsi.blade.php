<x-main>


  <div class="container-fluid my-5 text-center">
    <div class="row">
      @foreach ($corsi as $corso )
      <x-card :corso="$corso"/>   
    @endforeach
      
    </div>
  </div>



 

    
</x-main>