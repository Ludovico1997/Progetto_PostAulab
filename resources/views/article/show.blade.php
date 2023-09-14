<x-layout>
    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <h2 class="p-2  text-center text-white">{{$article->title}}</h2>
        </div>
    </div> 


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                <div class="card-body">
                <h2 class="card-text">{{$article->subtitle}}</h2>    
                    <p class="small text-muted fst-italic text-capatalize ">{{$article->category->name}}</p>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                    <p>redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                </div>
            <hr>
           <p>{{$article->body}}</p>
           <div class= "text-center">
                <a href="{{route('article.index')}}" class= "btn btn-info text-white my-5"> torna indietro</a>
                </div>    
            </div>
        </div>
        
    </div>
</div>

</x-layout>
