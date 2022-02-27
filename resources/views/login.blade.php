
@extends('layouts.app')


@section('content')

<div class="main_login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-block d-flex">
                    <div class="card-header"><div id="titleRegister"> Acesse sua conta / Cadastre-se</div></div>

                    <div class="card-body align-items-center d-flex justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <form class="form-signin" method="post" action="{{ url('login') }}">
                                    {{ csrf_field() }}
                                    <h4><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp; Tenho cadastro </h4><br>
                                    <div class="messages">
                                        @if (session('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <span>Email</span>
                                            <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email" tabindex="1" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <span>Senha</span>
                                            <input id="password" name="password" type="password" class="form-control" value="" tabindex="2">
                                        </div>
                                    </div>
                                    @if(session('message-error'))
                                        <div class="form-group row">
                                            <div class="col-md-10">
                                                <div class="alert alert-danger">
                                                    {{ session('message-error') }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <input type="checkbox"> Mantenha-me conectado
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-10">
                                            <input type="submit" class="btn btn-primary w-100" value="Continuar" tabindex="3" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div id="buttonRegister" class="col-md-10">
                                            <button type="submit" class="btn btn-success w-100">
                                                Cadastre-se
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-1"><div class="vertical_line"></div><div class="horizontal_line"></div></div>

                            <div id="userRegister" class="col-md-6">
                                <h4><i class="fa fa-user-plus" aria-hidden="true"></i> &nbsp; Quero me cadastrar</h4><br>
                                <form class="form-signin" method="post" action="{{ url('create') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <span>Nome</span>
                                            <input id="nome" type="text" class="form-control" name="nome" value="" required autocomplete="nome">
                                        </div>
                                        <div class="col-md-6">
                                            <span>Sobrenome</span>
                                            <input id="sobrenome" type="text" class="form-control" name="sobrenome" value="" required autocomplete="sobrenome" autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-12">
                                            <span>Email</span>
                                            <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <span>CPF</span>
                                            <input id="cpf" type="cpf" class="form-control" name="cpf" value="" required autocomplete="cpf">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <span>Senha</span>
                                            <input id="password" type="password" class="form-control" name="password" value="" autofocus>
                                        </div>
                                        <div class="col-md-6">
                                            <span>Confirme a senha</span>
                                            <input id="confirm-senha" type="password" class="form-control" name="confirm-senha" value="" autofocus>
                                        </div>
                                    </div>
                                    @if(session('message-success'))
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success">
                                                {{ session('message-success') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-primary w-100" value="Cadastrar" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
