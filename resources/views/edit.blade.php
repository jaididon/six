@extends('layouts.app')
@section('contant')
<div class="container">
    <div class="row mt-3">
         <div class="col-lg-4">
             <form action="{{route('update', $user->id)}}" method="post">
                @csrf
                 <div class="card mt-2">

                     <div class="card-body">
                         <div class="form-group">
                             <label for=""> Full Name</label>
                             <input type="text" name="fname" required="required" value="{{$user->fname}}" class="form-control" name="fname" />
                            @error('fname')
                                 <font color="red"><b>{{ $message }}</b></font>
                            @enderror
                         </div>
                         <div class="form-group">
                             <label for="">Email</label>
                             <input type="text" name="email" required="required" value="{{$user->email}}" class="form-control" name="email" />
                             @error('email')
                                <font color="red"><b>{{ $message }}</b></font>
                             @enderror
                         </div>

                     </div>
                     <div class="card-footer">
                         <button type="submit" class="btn btn-danger">Update</button>
                     </div>
                 </div>
             </form>
         </div>
    </div>
 </div>
@endsection

