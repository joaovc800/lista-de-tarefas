@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$tarefa->tarefa}}</div>
                <div class="card-body">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label class="form-label">Data limite conclusão</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" value="{{$tarefa->data_limite_conclusao}}">
                            </div>
                        </div>
                    </fieldset>
                    <div class="mt-3">
                        <div class="col-sm-10">
                            <a href="{{url()->previous()}}" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
