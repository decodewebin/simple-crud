@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2>Add a state</h2>
                    <form action="{{route('create.state')}}" method="post">
                        <select class="form-control" name="country_id">
                            <option>Select A Country</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach
                        </select>
                        <input type="text" name="state">
                        @csrf
                        <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
