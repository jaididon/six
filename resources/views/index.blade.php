@extends('layouts.app')
@section('contant')
<div class="container">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="row">

        <div class="card-body">
            <table class="table table-bordered">

                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                @foreach ( $users as $users )
                    <tr>
                        <th>{{$users->id}}</th>
                        <th>{{$users->fname}}</th>
                        <th>{{$users->email}}</th>
                      <th>
                        <a href="{{route('edit',$users->id)}}">
                            <button class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </a>

                        </th>
                        <th>
                            <a href="{{ route('delete',$users->id) }}">
                                <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </a>

                        </th>

                    </tr>

                @endforeach

@endsection
