@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADMIN PANEL') }}</div>

                <div class="card-body">
                    <a href="{{ route('addleague') }}" class="btn btn-dark">Add League</a>
                    <a href="{{route('addteam')}}" class="btn btn-dark">Add Team</a>
                    <a href="{{ route('addplayer') }}" class="btn btn-dark">Add Player</a> <br></br>
                    <a href="{{route('showleagues')}}" class="btn btn-dark">Show Leagues</a>
                    <a href="{{route('showteams')}}" class="btn btn-dark">Show Teams</a>
                    <a href="{{ route('showplayers') }}" class="btn btn-dark">Show Players</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
