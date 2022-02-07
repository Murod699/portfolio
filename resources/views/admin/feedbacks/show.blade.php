@extends('layouts/admin', ['title' => "Xabarlar"])
@section('content')

  <!-- Meassages Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Xabarni o'qish</h6>
    </div>
    <div class="card-body">
        @include('admin.alerts.main')
        <table class="table table-striped">
            <tr>
                <td class="font-weight-bold">To'liq ismi:</td>
                <td>{{$item->name}}</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Telefon raqami:</td>
                <td>{{$item->phone}}</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Xabar matni:</td>
                <td>{{$item->message}}</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Kelgan vaqti:</td>
                <td>{{$item->created_at->format('H:i, d.m.Y')}}</td>
            </tr>
        </table>
    </div>
</div>
    
@endsection