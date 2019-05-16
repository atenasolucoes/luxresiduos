@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Painel de Administração</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container mt-3">
                        <h2>Páginas Site</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Institucional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu2">Nosso Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu3">Venda seu resíduo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu4">Contato</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane active"><br>
                                <h3>HOME</h3>
                                <form method="POST" action="{{route('index')}}">
                                    {{@csrf_field()}}
                                    <h4>Resumo serviços</h4>
                                    <div class="form-group">
                                        <Label> <img src="/imagens/meioambiente.png" alt="" width="25px;"> Engenharia Ambiental</Label>
                                        <textarea name="home_eng_ambiental" id="editor1" class="form-control">
                                            @isset($site)
                                            {{$site->home_eng_ambiental}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label> <img src="/imagens/seguranca.png" alt="" width="25px;"> Segurança do Trabalho</Label>
                                        <textarea name="home_seguranca" id="editor2" class="form-control">
                                            @isset($site)
                                            {{$site->home_seguranca}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label> <img src="/imagens/engenharia.png" alt="" width="25px;"> Engenharia</Label>
                                        <textarea name="home_engenharia" id="editor3" class="form-control">
                                            @isset($site)
                                            {{$site->home_engenharia}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label> <img src="/imagens/gerenciamento.png" alt="" width="25px;"> Gerenciamento de Residuos</Label>
                                        <textarea name="home_gerenciamento" id="editor4" class="form-control">
                                            @isset($site)
                                            {{$site->home_gerenciamento}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <button class="btn btn-success btn-block">Atualizar</button>
                                </form>
                            </div>
                            <div id="menu1" class="container tab-pane fade"><br>
                                <h3>Institucional</h3>
                                <form method="POST" action="{{route('institucional')}}">
                                    {{@csrf_field()}}

                                    <div class="form-group">
                                        <Label>Quem somos</Label>
                                        <textarea name="institucional_quem_somos" id="editor5" class="form-control">
                                              @isset($site)
                                            {{$site->institucional_quem_somos}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label>Resumo de quem somos</Label>
                                        <textarea name="institucional_resumo_quem_somos" id="editor6" class="form-control">
                                              @isset($site)
                                            {{$site->institucional_resumo_quem_somos}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label>Missão</Label>
                                        <textarea name="institucional_missao" id="editor7" class="form-control">
                                             @isset($site)
                                            {{$site->institucional_missao}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label>Visão</Label>
                                        <textarea name="institucional_visao" id="editor8" class="form-control">
                                              @isset($site)
                                            {{$site->institucional_visao}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label> Valores</Label>
                                        <textarea name="institucional_valores" id="editor9" class="form-control">
                                              @isset($site)
                                            {{$site->institucional_valores}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <button class="btn btn-success btn-block">Atualizar</button>
                                </form>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <h3>Serviços</h3>
                                <form method="POST" action="{{route('servicos')}}">
                                    {{@csrf_field()}}
                                    <div class="form-group">
                                        <Label> <img src="/imagens/meioambiente.png" alt="" width="25px;"> Engenharia Ambiental</Label>
                                        <textarea name="servicos_eng_ambiental" id="editor10" class="form-control">
                                            @isset($site)
                                            {{$site->servicos_eng_ambiental}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label> <img src="/imagens/seguranca.png" alt="" width="25px;"> Segurança do Trabalho</Label>
                                        <textarea name="servicos_seguranca" id="editor11" class="form-control">
                                            @isset($site)
                                            {{$site->servicos_seguranca}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label> <img src="/imagens/engenharia.png" alt="" width="25px;"> Engenharia</Label>
                                        <textarea name="servicos_engenharia" id="editor12" class="form-control">
                                            @isset($site)
                                            {{$site->servicos_engenharia}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <Label> <img src="/imagens/gerenciamento.png" alt="" width="25px;"> Gerenciamento de Residuos</Label>
                                        <textarea name="servicos_gerenciamento" id="editor13" class="form-control">
                                            @isset($site)
                                            {{$site->servicos_gerenciamento}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <button class="btn btn-success btn-block">Atualizar</button>
                                </form>
                            </div>
                            <div id="menu3" class="container tab-pane fade"><br>
                                <h3>Venda seu resíduo</h3>
                                <form method="POST" action="{{route('venda')}}">
                                    {{@csrf_field()}}
                                    <div class="form-group">
                                        <Label>Texto</Label>
                                        <textarea name="venda_texto" id="editor14" class="form-control">
                                            @isset($site)
                                            {{$site->venda_texto}}
                                            @endisset
                                        </textarea>
                                    </div>
                                    <button class="btn btn-success btn-block">Atualizar</button>
                                </form>
                            </div>
                            <div id="menu4" class="container tab-pane fade"><br>
                                <h3>Contato</h3>
                                <form method="POST" action="{{route('contato')}}">
                                    {{@csrf_field()}}
                                    <div class="form-group">
                                        <Label>Telefone</Label>
                                        <input type="text" name="contato_telefone" class="form-control" value=" @isset($site){{$site->contato_telefone}}@endisset">
                                        <Label>WhatsApp</Label>
                                        <input type="text" name="contato_whatsapp" class="form-control" value=" @isset($site){{$site->contato_whatsapp}}@endisset">
                                        <Label>Email</Label>
                                        <input type="text" name="contato_email" class="form-control" value=" @isset($site){{$site->contato_email}}@endisset">
                                        <Label>Endereço</Label>
                                        <input type="text" name="contato_endereco" class="form-control" value=" @isset($site){{$site->contato_endereco}}@endisset">

                                    </div>
                                    <button class="btn btn-success btn-block">Atualizar</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            var i;
            for (i = 1; i < 15; i++) {
                CKEDITOR.replace('editor' + i + '');
            }
        };
    </script>
    @endsection