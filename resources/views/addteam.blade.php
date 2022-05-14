@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD TEAM') }}</div>

                <div class="card-body">
                    <form action="{{ route('submitteam') }}" method="get">

                        <div class="mb-3">
                            <label for="name" class="form-label">Team Name</label>
                            <input type="text" class="form-control" id="name"  name="name" required>

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" maxlength="255" name="description" required>
                        </div>

                        <label for="select" class="form-label">League</label>
                        <select name="league_id" class="form-select">
                            <option selected>Choose league</option>
                            @foreach(App\Models\League::all() as $liga)
                                <option value="{{$liga->id}}">{{$liga->name}}</option>
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
