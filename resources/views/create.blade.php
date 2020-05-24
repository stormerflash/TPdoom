@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ajouter un monstre/personnage
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('doom.store') }}">
          <div class="form-group">
              @csrf
              <label for="nom">Nom :</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="desc">Description :</label>
              <textarea rows="5" columns="5" class="form-control" name="desc"></textarea>
          </div>
          <div class="form-group">
              <label for="surnom">Surnom(s) :</label>
              <input type="text" class="form-control" name="surnom"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection