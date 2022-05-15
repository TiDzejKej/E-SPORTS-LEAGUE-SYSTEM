@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('LEAGUES') }}</div>

                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">League name</th>
                            <th scope="col">Descripition</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($leagues as $league)
                            <tr>
                                <th scope="row">{{$league->id}}</th>
                                <td> {{$league->name}}</td>
                                <td>{{$league->description}}</td>
                                <td><a href="{{ route('deleteleague', ['id' => $league->id]) }}" value="{{ $league->id }}" class="btn btn-danger">X</a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
