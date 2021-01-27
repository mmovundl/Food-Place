
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="food.create" method="post">@csrf
            <div class="card">
                <div class="card-header">Add To Menu</div>

                <div class="card-body">
                   <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">    
                   </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
               <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control ">
                </div>
                   <div class="form-group">
                    <button class="btn btn-outline-primary">Submit</button>
                   </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection