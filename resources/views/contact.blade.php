@extends('admin')
@section('page')
<div class="row">
    <div class="col-md-6 offset-3">
        <h3>Contact Form</h3>
    </div> 
<div class="col-md-6 offset-3">
<form method="post" action="{{route('store-contact')}}">
     @csrf
    <input class="form-control" type="text" name="nom" placeholder="Nom" value="{{old('nom')}}" id=""><br>
    @error('nom')
    <div class="text-danger">{{$message}}</div>
    @enderror
    <input  class="form-control" type="email" name="email" placeholder="Email"  value="{{old('email')}}" id=""><br>
    @error('email')
    <div class="text-danger">{{$message}}</div>
    @enderror
    <textarea  class="form-control" name="message" placeholder="message" id="" value="{{old('message')}}" cols="30" rows="10"></textarea>
    <br>
    @error('message')
    <div class="text-danger">{{$message}}</div>
    @enderror
    <button  class="btn btn-primary" type="submit">Envoyer</button>
</form>
</div>
</div>
@endsection