@extends('layouts.app')
@section('contant')
<div class="container">
    <div class="row mt-3">
        <div class="col-lg-4">
            <form action="{{ route('register1') }}" method="post">


                @csrf
                <div class="card mt-2">
                    <div class="card-header">
                        Register Here
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Full Name</label>
                            <input type="text"  class="form-control" name="fname" />
                            @error('fname')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text"  class="form-control" name="email" />
                            @error('email')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"  class="form-control" name="password" />
                            @error('password')
                            <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
