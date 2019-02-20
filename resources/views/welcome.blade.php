<!DOCTYPE html>
<html lang="pt-br">

<head>
    @component('layouts.head', ['title' => $title])
    @endcomponent
</head>

<body class="index-page sidebar-collapse">

<div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image:url({{url('/templeteAssets/assets/img/header.jpg')}});">
        </div>
        <div class="container">
            <div class="content-center brand">
                <img src="{{url('templeteAssets/assets/img/teste-vocacional-logo.png')}}" alt="">
                <h3>O que você deve saber sobre o teste vocacional!</h3>
                <div class="content">
                    <p class="text-justify">
                        O teste vocacional não é exato, ele é um indicativo, uma sugestão realizada com base nas suas respostas aqui apresentadas.
                        As questões são desenvolvidas e testadas para montar um perfil que se aproxima do seu e assim sugerir algumas carreiras.
                        O objetivo é ajudá-lo a descobrir seu caminho e sugerir opções para você avaliar. Para aproveitar melhor o teste, responda com sinceridade.
                        Ainda que você se identifique com mais de uma das alternativas, assinale apenas uma opção para cada questão. Portanto reflita
                        sobre a que mais lhe diz respeito.
                    </p>
                </div>
                <div class="content mt-5">
                    <a href="#"><button type="button" class="btn btn-success font-weight-bold">REALIZAR TESTE!</button></a>
                </div>
            </div>
        </div>
    </div>

        <div class="section section-basic" id="basic-elements">
            <div class="container">
                <h3 class="title">Área da TI</h3><hr>
                <div class="row">
                    {{--ANALISTA CARD--}}
                    <div class="col">
                        <h5 class="title font-weight-bold">Analista de Sistemas</h5>
                        <div class="card mt-2 " style="width: auto;">
                            <img class="card-img-top" src="{{url('templeteAssets/assets/img/analista-card.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text font-weight-normal text-justify" style="font-size:14px">
                                    Analista de sistemas é o profissional encarregado
                                    <strong>de sistematizar informações</strong>, ou seja, é aquela pessoa que realiza estudos de processos computacionais
                                    e cujo objetivo é encontrar a melhor e mais racional forma de processar a informação.</p>
                                <p class="card-text font-weight-normal text-justify" style="font-size:14px">
                                    O analista de sistemas <strong>desenvolve soluções que serão aplicadas pelo computador</strong>,
                                    baseadas na conexão que existe entre o usuário, o programa e o equipamento. </p>
                            </div>
                        </div>
                    </div>
                    {{--ANALISTA CARD DIREITA--}}
                    <div class="col">
                        <div class="card ml-5 content-center mr-5" style="width: auto; margin-top: 6rem;">
                            <div class="card-body">
                                <blockquote class="blockquote blockquote-primary mb-0">
                                    <p class="font-italic font-weight-normal" style="font-size: 15px;">
                                        “Administrador de banco de dados; gerente de redes de médio e pequeno porte; projetista
                                        e engenheiro de programas; professor de informática,
                                        bem como o desenvolvimento de projetos pedagógicos; consultor de equipamentos...”</p>
                                    <footer class="blockquote-footer">Perfil mais <cite title="Source Title">Analitico</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{--PROGRAMADOR CARD--}}
                    <div class="col">
                        <h5 class="title font-weight-bold">Programador // Develop</h5>
                        <div class="card mt-2" style="width: auto;">
                            <img class="card-img-top" src="{{url('templeteAssets/assets/img/programador-card.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text font-weight-normal text-justify" style="font-size:14px">
                                    Para trabalhar como programador web não basta conhecer uma linguagem de programação,
                                    é preciso ter domínio de outras ferramentas também.
                                    As linguagens mais solicitadas nas empresas são <strong>ASP, .NET, JAVA, PHP e Python.</strong>
                                    Assim como tecnologias como <span class="font-italic font-weight-bold">HTML 5, CSS 3 e JS.</span></p>
                                <p class="card-text font-weight-normal text-justify" style="font-size:14px">
                                    <strong>Conhecimento em banco de dados</strong> também é fundamental para ingressar em uma empresa com foco em ambientes web.
                                    <strong>A linguagem SQL</strong> é um pré-requisito para a grande maioria das vagas disponíveis no mercado </p>
                            </div>
                        </div>
                    </div>
                    {{--PROGRAMADOR CARD DIREITA--}}
                    <div class="col">
                        <div class="card ml-5 content-center mr-5" style="width: auto; margin-top: 6rem;">
                            <div class="card-body">
                                <blockquote class="blockquote blockquote-primary mb-0">
                                    <p class="font-italic font-weight-normal" style="font-size: 15px;">
                                        “Um programador web não precisa ficar confinado em um escritório,
                                        defronte a um computador 24 horas por dia. Além de trabalhar em grandes corporações,
                                        um profissional desta área também tem seu espaço no meio acadêmico, para realizar
                                        pesquisas e desenvolver aplicações em prol da comunidade...”</p>
                                    <footer class="blockquote-footer">Perfil mais <cite title="Source Title">Tecnico</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="copyright" id="copyright">
            &copy;
            <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, UNIDESC |
            <a href="{{route('login')}}" target="_blank">Admin</a>. Coded by
            <a href="https://www.unidesc.edu.br/graduacao/sistemas-de-informacao" target="_blank">Alunos cursos de TI</a>.
        </div>
    </div>
</footer>

    @component('layouts.scripts')
    @endcomponent

</body>

</html>