@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('food.update',[$food->id])}}" method="post">@csrf
                    {{ method_field("PUT")}}
                    <div class="card">
                        <div class="card-header">Edit Food</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="{{$food->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descrition">Description</label>
                                <input type="text" value="{{$food->description}}"class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descrition">Price</label>
                                <input type="number" value="{{$food->price}}"class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                               <select name="category" class="form-control @error('category') is-invalid @enderror">
                                    @foreach (App\Models\Category::all() as $category)
                                        <option value="">Select</option>    
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                               </select>
                               @error('category')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{$message}}</strong>
                                   </span>
                               @enderror
                               
                            </div>
                            <div>
                                <img src="{{asset('images')}}/{{$food->image}}" alt="" style="width:80px;height:80px;">
                            </div>
                        </div>
                        
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection