@extends('layouts/admin', ['title' => 'O`zgartirish'])
@section('content')
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            {{$port->name}} - tahrirlash
        </h6>
    </div>
    <div class="card-body">
        @include('admin.alerts.main')
        <form method="POST" enctype="multipart/form-data" action="{{ route('ports.update', $port->id) }}">
            @csrf
            @method('PUT')

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="form-group">
                        <label for="">Dastur nomi</label>
                        <input value="{{$port->name}}" class="form-control" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Ssilka</label>
                        <input value="{{$port->ssilka}}" class="form-control" name="ssilka" type="text">
                    </div>
                   
                </div>

            <div class="form-group">
                <label for="">Rasm</label>
                <input class="form-control" name="img" type="file">
            </div>
            <div class="form-group">
                <img src="/storage/{{$port->thumb}}" width="200px" class="img img-thumbnail" alt="">
            </div>
            <button type="submit" class="btn btn-success">Saqlash</button>
        </form>
    </div>
</div>
@endsection