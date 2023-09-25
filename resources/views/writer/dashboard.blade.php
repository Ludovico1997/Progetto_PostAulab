<x-layout>

    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="col-12">
                Bentornato, Redattore
            </h1>
        </div>
    </div>
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    
    <div class="container my-5 text-white">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli in fase di revisione</h2>
                <h5><x-writer-articles-table :articles="$unrevisionedArticles" /></h5>
            </div>
        </div>
    </div>
    <div class="container my-5 text-white">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli pubblicati</h2>
                <h5><x-writer-articles-table  :articles="$acceptedArticles" /></h5>
            </div>
        </div>
    </div>
    <div class="container my-5 text-white">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <h5><x-writer-articles-table  :articles="$rejectedArticles" /></h5>
            </div>
        </div>
    </div>
</x-layout>