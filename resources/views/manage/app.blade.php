@extends('manage.layouts.skeleton')

@section('content')

<div class="col-md-12 no-padding">

    <div class="breadcrumbs">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ config('app.name') }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
    </div>

    <div class="row panels">
        <div class="col-md-3">
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
            </div>
        </div>
        <div class="col-md-3">
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
            </div>
        </div>
        <div class="col-md-3">
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
            </div>
        </div>
        <div class="col-md-3">
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
            </div>
        </div>

    </div>

    <button class="btn btn-primary" id="toggleSidebarBtn">toggle sidebar</button>

</div>

@endsection

@section('scripts')

<script>
    $('#toggleSidebarBtn').click(function(){
        $('#app-content').toggleClass('sidebar-toggled');
    });
</script>

@endsection