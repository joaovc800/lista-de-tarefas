@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar tarefa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('tarefa.store') }} ">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tarefa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tarefa">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data limite conclusão</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="data_limite_conclusao">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Cadastrar tarefa</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
