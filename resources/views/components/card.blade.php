<div class="card" style="width: 18rem;">
    <img src="{{$corso['image']}}" class="card-img-top" alt="..." width="300px" height="200px">
    <div class="card-body">
      <h5 class="card-title text-center">{{$corso['name']}}</h5>
      
    <a href="{{route('dettagli',['id' => $corso['id']])}}" class="btn btn-primary">dettagli</a>
    </div>
  </div>


  