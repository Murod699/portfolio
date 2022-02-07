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
                            <a class="btn btn-primary" href="{{route('feedbacks.show', $item->id)}}"><i class="fa fa-eye"></i> ko`rish</a>
                            <form method="POST" action="#">
                                @csrf
                                @method('Delete')
                                <button class="btn btn-danger"><i class="fa fa-trash"></i> O`chirish</button>
                            </form>
                        </td>
                        
                    </tr>
                   @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
    
@endsection