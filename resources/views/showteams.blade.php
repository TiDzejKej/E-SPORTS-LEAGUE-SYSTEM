@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TEAMS') }}</div>

                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Team Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">League</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                            <tr>
                                <th scope="row">{{$team->id}}</th>
                                <td>{{$team->name}}</td>
                                <td>{{$team->description}}</td>
                                <td>{{$team->league->name}}</td>
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
