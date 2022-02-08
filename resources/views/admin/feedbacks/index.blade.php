@extends('layouts/admin', ['title' => "Xabarlar"])
@section('content')

  <!-- Messages Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Xabarlar ro`yhati</h6>
    </div>
    <div class="card-body">
        @include('admin.alerts.main')
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomi</th>
                        <th>Telefon raqami</th>
                        <th>Vaqti</th>
                        <th>Holat</th>
                        <th width="180px">Amallar</th>
                        
                    </tr>
                </thead>                                
                <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->created_at->format('H:i, d/m/Y')}}</td>
                        <td><i class="fa fa-{{$item->status ? 'envelope-open' : 'envelope'}}"></i></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <a href="{{route('feedbacks.show', $item->id)}}" class="btn btn-primary">
                                <i class="fa fa-eye"></i>Ko'rish</a>
                               <div class="btn-group" role="group">
                                   <button id="btnGroupDrop1" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   </button>
                                   <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                       <form method="POST" action="{{route('feedbacks.destroy', $item->id)}}">
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