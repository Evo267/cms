@extends('manage.layouts.skeleton')

@section('content')

<div class="col-md-12 no-overflow-x no-padding">

    @include('manage.partials.breadcrumbs')

    <div class="crup-wrapper">
        <div class="crud">
            <h1>Adicionar Página</h1>
            <hr>
            {!! Form::open(['route' => 'admin.pages.store']) !!}

            <div class="form-group">
                {{ Form::label('title', 'Título') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('content', 'Conteúdo') }}
                {{ Form::textarea('content', null, ['class' => 'form-control']) }}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection