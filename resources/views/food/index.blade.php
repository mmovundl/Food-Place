@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                   <table class="table">
                       <thead class="thead-dark">
                           <tr>
                            <th scope="col">Image</th>
                               <th scope="col">Name</th>
                               <th scope="col">Descritpion</th>
                               <th scope="col">Price</th>
                               <th scope="col">Category</th>
                               <th scope="col">Edit</th>
                               <th scope="col">Delete</th>
                           </tr>
                       </thead>
                       @if (count($foods)>0)
                       @foreach ($foods as $key=>$food)
                       <tr>
                        <td scope="col">
                            
                            <img src="{{asset('images')}}/{{$food->image}}" alt="" style="width:80px;height:80px;" >
                        </td>
                           <td scope="col">
                               {{$food->name}}
                           </td>
                           <td scope="col">
                               {{$food->description}}
                           </td>
                           <td scope="col">
                               R{{$food->price}}
                           </td>
                           
                        <td scope="col">
                            {{$food->category_id}}
                        </td>
                        <td>
                            <a href="{{route('food.edit',[$food->id])}}" class="btn btn-outline-primary">Edit</a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalLong">
                                Delete
                              </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLongTitle">Delete From Menu</h5>
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
                                            <form action="{{route('food.destroy',[$food->id])}}" method="post">@csrf
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
                           Sorry, No Food To Display
                       @endif
                      
                   </table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection