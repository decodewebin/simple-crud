@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2>Add a country</h2>
                    <form action="{{route('create.country')}}" method="post">
                        <input type="text" name="country">
                        @csrf
                        <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
