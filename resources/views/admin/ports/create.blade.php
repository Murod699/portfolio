@extends('layouts/admin')

@section('content')

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Dastur qo'shish</h6>
                        </div>
                        <div class="card-body">
                           @include('admin.alerts.main')
                            <form method="POST" action="{{route('ports.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Dastur nomi</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Dastur rasmi</label>
                                    <input type="file" name="img" value="{{old('img')}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Dastur ssilkasi</label>
                                    <input type="text" name="ssilka" value="{{old('ssilka')}}" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-success">Saqlash</button>
                               
                            </form>
                        </div>
                    </div>

@endsection