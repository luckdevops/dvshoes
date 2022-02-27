
@extends('layouts.app')


@section('content')

<div class="main_validation_email">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('message-success-validation-email'))
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <i class="fa fa-check-circle-o fa-5x" aria-hidden="true" style="color: #04b477;"></i>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="message-validation-expire-email">
                                Validação realizada com sucesso. Por favor, realize o login para continuar.
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div style="padding-top: 20px;">
                                <a href="{{ route('login') }}"><button type="button" class="btn btn-primary w-25">
                                    Fazer Login
                                </button></a>
                            </div>
                        </div>
                    </div>
                @endif
                @if(session('message-expire-validation-email'))
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <i class="fa fa-minus-circle fa-5x" aria-hidden="true" style="color: #ca281d;"></i>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="message-validation-expire-email">
                                Desculpe, seu link de validação expirou. Você terá que pedir um novo link.
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div style="padding-top: 20px;">
                                <a href="{{ route('login') }}"><button type="button" class="btn btn-success w-25">
                                    Novo Link
                                </button></a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
