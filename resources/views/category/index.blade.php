@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div> 
                @endif
            <div class="card">
                <div class="card-header">Category</div>
                
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                       @if (count($categories)>0)
                       @foreach ($categories as $key=>$category)
                       <tr>
                           <th scope="row">{{$key + 1}}</th>
                           <td>{{$category->name}}</td>
                           <td>
                               <a href="{{route('category.edit',[$category->id])}}">
                                <button class="btn btn-outline-primary" >Edit</button>
                            </a></td>
                           <td>
                               
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalLong">
                                    Delete
                                  </button>
                                  
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Delete Category</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Are Sure About Deleting?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <a href="">
                                            <form action="{{route('category.destroy',[$category->id])}}" method="post">@csrf
                                             {{method_field('DELETE')}}
                                             <button class="btn btn-outline-danger" >Delete</button>
                                         </form>
                                     </a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>



                            
                        </td>
                         </tr>
                         
                       @endforeach
                       @else
                           <p>No Categories to Display</p>
                       @endif
                         
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection