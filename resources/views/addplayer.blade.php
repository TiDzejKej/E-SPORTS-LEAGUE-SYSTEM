@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD PLAYER') }}</div>

                <div class="card-body">
                    <form action="{{ route('submitplayer') }}" method="get">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name"  name="name" required>

                        </div>
                        <div class="mb-3">
                            <label for="surname" class="form-label">Surname</label>
                            <input type="text" class="form-control" id="surname"  name="surname" required>
                        </div>

                        <div class="mb-3">
                            <label for="nickname" class="form-label">Nickname</label>
                            <input type="text" class="form-control" id="nickname"  name="nickname" required>
                        </div>


                        <label for="select" class="form-label">Team</label>
                        <select name="team_id" class="form-select">
                            <option selected>Choose team</option>
                            @foreach(App\Models\Team::all() as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                        <br>

                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
