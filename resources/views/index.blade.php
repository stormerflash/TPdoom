@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
    text-align: center;
  }
  .card {
    margin-left: 10rem;
  }

  .buttons {
    display: flex;
    justify-content: flex-end;
  }
</style>


@extends('layouts/logout')
<div class="uper">
    <div class="title_content mb-5">
        <h1>Liste des monstre/personnage</h1>
        <h4>Bienvenue sur la liste du bestiaire de DOOM. 
            Vous pouvez voir le nom du personnage, sa description et son surnom (digne des bisounours... si les bisounours etaient des grizzlys sanguinaires semant la destruction).
            Vous pouvez également modifier les éléments de la liste, les supprimer, ou
            même <a href="{{ route('doom.create')}}">créer votre propre démon</a> !
        </h4>
    </div>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
</div>

<div class="list">
  @foreach($doomentry as $entry)
  <div class="card mb-5" style="width: 50rem;">
    <div class="card-body">
      <h5 class="card-title">{{$entry->id}} | {{$entry->nom}}</h5>
      <p><b>{{$entry->surnom}}</b></p>
      <p>{{$entry->desc}}</p>
      <div class="buttons">
        <a href="{{ route('doom.edit', $entry->id)}}" class="btn btn-primary mr-2">Editer</a>
        <form action="{{ route('doom.destroy', $entry->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach
</div>  
@endsection