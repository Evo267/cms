@extends('manage.layouts.skeleton')

@section('content')

<div class="col-md-12 no-overflow-x no-padding">

    <div class="breadcrumbs">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ config('app.name') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>

    <div class="row panels">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-5 card-icon text-center">
                        <i class="icon-photo-pictures-streamline align-middle"></i>
                    </div>
                    <div class="col-sm-7 text-right">
                        Páginas
                        <h2>{{ $dashboard->nOfPages ? $dashboard->nOfPages : '-' }}</h2>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a>Ver Páginas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-5 card-icon text-center">
                        <i class="icon-photo-pictures-streamline align-middle"></i>
                    </div>
                    <div class="col-sm-7 text-right">
                        Páginas
                        <h2>123</h2>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a>Ver Páginas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-5 card-icon text-center">
                        <i class="icon-photo-pictures-streamline align-middle"></i>
                    </div>
                    <div class="col-sm-7 text-right">
                        Páginas
                        <h2>123</h2>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a>Ver Páginas</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card">
                <div class="row card-body">
                    <div class="col-sm-5 card-icon text-center">
                        <i class="icon-photo-pictures-streamline align-middle"></i>
                    </div>
                    <div class="col-sm-7 text-right">
                        Páginas
                        <h2>123</h2>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a>Ver Páginas</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection