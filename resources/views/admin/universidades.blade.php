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
                        <a class="nav-link" href="{{ route('universidades.index')}}" id="bt_grafico"><b><i class="fas fa-university"></i>
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

    {{--  FORMULÁRIO  --}}
    <div class="ml-5 mr-5 ">
        <div class="d-flex justify-content-center pt-0">
            <h3 class="title p-2 mb-2"><i class="fas fa-university"></i> Universidades</h3>
        </div>
        <form action="{{ route('universidades.store')}}" method="POST">
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
    {{--  PAGINAÇÃO  --}}
    {{ $universidades->links() }}

    {{--  TABELA DE UNIVERSIDADES  --}}
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
                    @foreach( $universidades as $universidade)
                        <tr>
                            <td>{{$universidade->id}}</td>
                            <td>{{$universidade->nm_universidade}}</td>
                            <td>
                                <a href="#" type="button" class="btn btn-info" style="border-radius: 20px">
                                    <span>
                                        <i class="fas fa-pencil-alt"></i>
                                     </span>
                                    EDITAR
                                </a>
                            </td>
                            <td>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#delete" style="border-radius: 20px">
                                    <span>
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    EXCLUIR
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{--  MODAL DE CONFIRMACAO  --}}
            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="font-weight-bold">Deseja excluir essa universidade ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alinhar-mid-teste">
                                <div class="m-1">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span
                                            class="font-weight-bold">Não</span></button>
                                </div>
                                <div class="m-1">
                                    <form method="POST" action="{{ route('universidades.destroy', $universidade->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-success"><span
                                                class="font-weight-bold">Sim</span></button>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

    @include('components.footer_simple')
@endsection

