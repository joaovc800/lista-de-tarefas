@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora! Precisamos apenas que você valide seu e-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um e-mail para você com o link de validação
                        </div>
                    @endif

                    <p>Antes de ultilizar os recursos da aplicação por favor valide seu e-mail por meio do link de verificação que encaminhamos para o seu e-mail<p>
                    
                    <p>Caso você não tenha recebido o link de verificação, clique no link abaixo para receber o e-mail<p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection