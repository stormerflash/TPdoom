@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Journal de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    Bienvenue en Enfer !
                    <br>
                    <a href="{{ route('doom.index') }}">Cliquez ici pour accéder à la liste </a>!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
