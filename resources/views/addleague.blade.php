@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ADD LEAGUE') }}</div>

                <div class="card-body">
                    <form action="{{ route('submitleague') }}" method="get">

                        <div class="mb-3">
                            <label for="name" class="form-label">League Name</label>
                            <input type="text" class="form-control" id="name"  name="name" required>

                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" maxlength="255" name="description" required>
                        </div>

                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
