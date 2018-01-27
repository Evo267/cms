@extends('manage.layouts.skeleton')

@section('content')

<div class="col-md-12 no-overflow-x no-padding">

    @include('manage.partials.breadcrumbs')

    <div class="crup-wrapper">
        <div class="crud">
            <h1>Páginas <small><a href="{{ route('admin.pages.create') }}"><span class="pointer badge badge-primary">nova</span></a></small></h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection