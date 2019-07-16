@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{route('view.add.country')}}">Add Country</a>
                    <a class="btn btn-primary" href="{{route('view.add.state')}}">Add State</a>
                    <br>
                    <br>
                    <a class="btn btn-success" href="">Show Countries</a>
                    <a class="btn btn-success" href="">Show States</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
