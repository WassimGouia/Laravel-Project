
    @extends('admin')
    @section('page')
        
    <form method="post" action="{{route('create-info')}}">
        @csrf
            <label for="nom">Nom </label> 
            <input class="form-control" pattern="[a-zA-Z ]+" required type="text" name="nom" id="">
        
       <label for="nom">Prenom </label> 
       <input class="form-control" pattern="[a-zA-Z ]+" required type="text" name="prenom" id=""><br>
       <button class="btn btn-primary" type="submit">Envoyer</button>
    </form>

@endsection