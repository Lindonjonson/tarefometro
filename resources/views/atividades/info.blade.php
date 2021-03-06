
@extends('layouts.principal')
@section('conteudo')


<div class="jumbotron">
    <span class="badge badge-pill badge-primary">ID: {{$atividades['id']}}</span>
    <span class="badge badge-pill badge-primary">status: {{$atividades['status']}}</span>
    @if($atividades['status']==0)   
    <span class="badge badge-pill badge-success">Concluida</span>
    
    @else
    <span class="badge badge-pill badge-danger">Não concluida</span>
    
    @endif
    
    <h1 class="display-4">{{$atividades['nome']}}</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{route('atividades.index')}}" role="button">Voltar</a>
    <br><br>
    <form action="{{route('atividade.destroy', $atividades['id']) }}" method="POST">
      @csrf
      @method('DELETE') 
      <button type="submit"  class="btn btn-danger  btn-lg">Excluir Atividade</button>
  </form>
  </div>


@endsection