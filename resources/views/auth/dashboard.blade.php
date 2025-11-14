@extends('template_admin.index')

@section('conteudo')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('carros.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>
            Novo veículo
        </a>
    </div>

    <div class="mb-4">
        <div class="alert alert-warning mb-0"><strong>Bem-vindo(a) à área administrativa da SotnasCar!</strong><br>
            Use os atalhos abaixo para gerenciar marcas, modelos, cores e veículos.
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('marcas.index') }}" class="text-decoration-none">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Marcas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Gerenciar marcas</div>
                            </div>
                            <div class="col-auto"><i class="fas fa-industry fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('modelos.index') }}" class="text-decoration-none">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Modelos</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Gerenciar modelos</div>
                            </div>
                            <div class="col-auto"><i class="fas fa-car-side fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('colors.index') }}" class="text-decoration-none">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Cores</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Gerenciar cores</div>
                            </div>
                            <div class="col-auto"><i class="fas fa-palette fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route('carros.index') }}" class="text-decoration-none">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Veículos</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Carros cadastrados</div>
                            </div>
                            <div class="col-auto"><i class="fas fa-car fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

@endsection