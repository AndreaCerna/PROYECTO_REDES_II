@extends('layouts.plantilla')

@section('content')
    <div class="p-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

        @if(\Session::has('warning'))
            <div class="alert alert-warning">
                <ul>
                    <li>{!! \Session::get('warning') !!}</li>
                </ul>
            </div>
    @endif

    <div>
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h1>
                        <a href="#" > <img src="{{asset('imagenes/config.png')}}" width="100" height="100"></a>
                        Área de Configuración    </h1>
                </div>
            </div>
        </div>
        <br>
    </div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selector de color</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    </head>
    <body>

    <div class="container">
        <div class="row align-items-start">
            <div class="col-3">
                <a href="#" > <img src="{{asset('imagenes/pc.png')}}" width="130" height="100"></a>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#pc">
                    Computadora
                </button>
            </div>
            <div class="col-3">
                <a href="#" > <img src="{{asset('imagenes/swi.jpg')}}" width="120" height="100"></a>
                <br>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#swit">
                    Switch
                </button>
            </div>
            <div class="col-3">
                <a href="#" > <img src="{{asset('imagenes/rot.png')}}" width="100" height="100"></a>
                <br>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#router">
                    Router
                </button>
            </div>
            <div class="col-3">
                <a href="#" > <img src="{{asset('imagenes/server.png')}}" width="175" height="100"></a>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#server">
                    Servidor
                </button>
            </div>
        </div>
    </div>




    <!-- Modal1 -->
    <div class="modal fade" id="pc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"  id="exampleModalLabel"> Configuración de Computadora </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="dark" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h5>Configuración IPV4</h5>

                <form action="{{route('save')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="container">
                        <div class="row">
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">DHCP</label>
                            </div>
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Static</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="exampleInputEmail1">Dirección Ipv4</label>
                        <input type="text" name="ipv4" class="form-control" >

                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Mascara de Red</label>
                        <input type="text" name="masc" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Default Gateway</label>
                        <input type="text" name="gate" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">DNS Server</label>
                        <input ttype="text" name="server" class="form-control">
                    </div>

                        <h5>Configuración IPV6</h5>

                        <div class="container">
                            <div class="row">
                                <div class="form-group form-check col">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Automatic</label>
                                </div>
                                <div class="form-group form-check col">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Static</label>
                                </div>
                            </div>
                        </div>

                            <div class="container">
                                <h6>Ipv6 Address</h6>
                                <div class="row">
                                    <div class="form-group form-check col">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <h3>/</h3>
                                    <div class="form-group form-check col-3">
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputPassword1">Link Local Address</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputPassword1">Default Gateway</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group col">
                                <label for="exampleInputPassword1">DNS Server</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary">Conectar</button>

                </form>

            </div>
        </div>
    </div>
    <!-- Modal2 -->
    <div class="modal fade" id="swit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"  id="exampleModalLabel"> Configuración de Switch </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>



            </div>
        </div>
    </div>
    <!-- Modal3 -->
    <div class="modal fade" id="router" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"  id="exampleModalLabel"> Configuración de Router  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h5>Configuración IPV4</h5>
                <form>
                    <div class="container">
                        <div class="row">
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">DHCP</label>
                            </div>
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Static</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="exampleInputEmail1">Dirección Ipv4</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Mascara de Red</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Default Gateway</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">DNS Server</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>

                    <h5>Configuración IPV6</h5>

                    <div class="container">
                        <div class="row">
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Automatic</label>
                            </div>
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Static</label>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h6>Ipv6 Address</h6>
                        <div class="row">
                            <div class="form-group form-check col">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <h3>/</h3>
                            <div class="form-group form-check col-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Link Local Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Default Gateway</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">DNS Server</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Conectar</button>

                </form>

            </div>
        </div>
    </div>
    <!-- Modal4 -->
    <div class="modal fade" id="server" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"  id="exampleModalLabel"> Configuración Server </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h5>Configuración IPV4</h5>
                <form action="{{route('save')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="container">
                        <div class="row">
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">DHCP</label>
                            </div>
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Static</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col">
                        <label for="exampleInputEmail1">Dirección Ipv4</label>
                        <input type="text" name="ipv4" class="form-control" >

                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Mascara de Red</label>
                        <input type="text" name="masc" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Default Gateway</label>
                        <input type="text" name="gate" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">DNS Server</label>
                        <input ttype="text" name="server" class="form-control">
                    </div>

                    <h5>Configuración IPV6</h5>

                    <div class="container">
                        <div class="row">
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Automatic</label>
                            </div>
                            <div class="form-group form-check col">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Static</label>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <h6>Ipv6 Address</h6>
                        <div class="row">
                            <div class="form-group form-check col">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <h3>/</h3>
                            <div class="form-group form-check col-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>


                    <div class="form-group col">
                        <label for="exampleInputPassword1">Link Local Address</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">Default Gateway</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group col">
                        <label for="exampleInputPassword1">DNS Server</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Conectar</button>

                </form>
                </div>

            </div>
        </div>



    </body>


@endsection
