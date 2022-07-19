@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefas
                    <a class="float-right" href="{{route('tarefa.create')}}">Novo</a>
                    <a target="_blank" class="float-right mr-3" href="{{route('tarefa.exportar')}}">PDF</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tarefa</th>
                                <th>Data limite conclusão</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tarefas as $key => $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->tarefa}}</td>
                                    <td>{{ date('d/m/Y', strtotime($value->data_limite_conclusao))}}</td>
                                    <td><a href="{{route('tarefa.edit', [$value->id])}}">Editar</a></td>
                                    <td>
                                        <form id="form_{{$value->id}}" action="{{route('tarefa.destroy', ['tarefa' => $value->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="document.getElementById('form_{{$value->id}}').submit()">Excluir</a>
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="{{$tarefas->previousPageUrl()}}" >Voltar</a></li>
                            
                            @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                                <li class="page-item {{$tarefas->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{$tarefas->url($i)}}">{{$i}}</a>
                                </li>
                            @endfor
                            

                            <li class="page-item"><a class="page-link" href="{{$tarefas->nextPageUrl()}}">Avançar</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
