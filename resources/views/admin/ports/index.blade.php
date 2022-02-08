@extends('layouts/admin')
@section('content')

                    
                    
                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Dasturlar ro`yhati
                                <a class="btn btn-sm btn-primary float-right" href="{{route('ports.create')}}">Yaratish</a>
                            </h6>
                        </div>
                        <div class="card-body">
                            @include('admin.alerts.main')
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="100px">Rasmi</th>
                                            <th>Nomi</th>
                                            <th>e-manzil</th>
                                            <th width="200px">Amallar</th>
                                            
                                        </tr>
                                    </thead>                                
                                    <tbody>
                                        @foreach($ports as $port)
                                        <tr>
                                            <td>
                                                <img class="img img-thubnail" width="50px" src="{{'/storage/'.$port->thumb}}" alt="{{$port->name}}"></td>
                                            <td>{{$port->name}}</td>
                                            <td>{{$port->ssilka}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                    <a href="{{route('ports.edit',  $port->id)}}" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>O'zgartirish</a>
                                                   <div class="btn-group" role="group">
                                                       <button id="btnGroupDrop1" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                       </button>
                                                       <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                           <form method="POST" action="{{route('ports.destroy', $port->id)}}">
                                                               @csrf
                                                               @method('Delete')
                                                               <button class="dropdown-item" type="submit"><i class="fa fa-trash"></i>O`chirish</button>
                                                           </form>
                                                       </div>
                                                   </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



@endsection