@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2>Add a state</h2>
                    <form action="" method="post">
                        <select class="form-control">
                            <option>Select A Country</option>
                        </select>
                        <input type="text" name="state">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
