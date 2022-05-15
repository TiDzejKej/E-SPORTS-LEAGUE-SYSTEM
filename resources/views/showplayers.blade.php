@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PLAYERS') }}</div>

                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Team</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($players as $player)
                            <tr>
                                <th scope="row">{{$player->id}}</th>
                                <td>{{$player->name}}</td>
                                <td>{{$player->surname}}</td>
                                <td>{{$player->nickname}}</td>
                                <td>{{$player->team->name}}</td>
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
