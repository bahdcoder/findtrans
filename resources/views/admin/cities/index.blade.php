@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cities</div>

                <div class="card-body">
                    <form action="" method="POST">
                      @csrf
                      <input type="text" class="form-control" placeholder="City name">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
