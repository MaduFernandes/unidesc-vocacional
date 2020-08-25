@extends('layouts.template_teste')

@section('admin_conteudo')

    <header class="alinhar-bg-questoes">
        <img src="{{asset("/assets/template/img/elemento-capa-2019.png")}}" style="width: 800px">
    </header>

    <nav class="navbar navbar-expand-lg bg-info mb-1">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><b><i class="fas fa-question"></i> Teste Vocacional</b></a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}"><b><i class="fas fa-home"></i> Dashboard</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="bt_relatorio"><b><i class="fas fa-table"></i> Relatório</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="bt_grafico"><b><i class="fas fa-chart-line"></i>
                                Gráfico</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('universidades')}}" id="bt_grafico"><b><i class="fas fa-university"></i>
                                Universidades</b></a>
                    </li>
                </ul>
                <div class="form-inline ml-auto" data-background-color>
                    <div class="form-group has-white">
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-round dropdown-toggle m-0" type="button"
                                    data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> Olá, <b>{{Auth::user()->name}}</b>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                    <span class="text-dark"> Meu Perfil <i class="fas fa-user-alt"></i></span>
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    <span class="text-dark">Sair <i class="fas fa-door-open"></i></span>
                                </a>

                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="ml-5 mr-5 ">
        <div class="d-flex justify-content-center pt-0">
            <h3 class="title p-2 mb-2"><i class="fas fa-university"></i> Universidades</h3>
        </div>
        <form action="{{ route('admin.universidades')}}" method="POST">
            @csrf
            <div class="d-flex justify-content-center pt-0">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-center align-content-center">
                            <div class="col-4">
                                <h5>Nova Universidade</h5>
                                <input class="form-control" type="text" name="nm_universidade" id="nm_universidade" required>
                            </div>
                            <div class="col-1">
                                <button type="submit" class="btn btn-round btn-success mt-4"><b>Salvar!</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


<div class="ml-5 mr-5">
    {{ $universidades->links() }}
    <div class="card">
        <div class="table table-hover" id="table">
            <table class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col" id="col">ID</th>
                        <th scope="col" id="col">Universidade</th>
                        <th scope="col" id="col"></th>
                        <th scope="col" id="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($universidades as $universidade)
                        <tr>
                            <td>{{$universidade->id}}</td>
                            <td>{{$universidade->nm_universidade}}</td>
                            <td><a href="" class="btn btn-info" style="font-weight: bold">EDITAR</a></td>

                            <td>
                                <form method="POST" action="{{ route('universidades.destroy', $universidade->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter" style="font-weight: bold">
                                    EXCLUIR
                                </button>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Deseja excluir uma universidade ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body" style="height: 100px;"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                    <button type="submit" class="btn btn-primary">Excluir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    @include('components.footer_simple')
@endsection

