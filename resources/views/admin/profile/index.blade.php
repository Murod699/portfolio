@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Profilni tahrirlash
                    </h6>
                </div>
                <div class="card-body">
                    @include('admin.alerts.main')
                    <form method="POST" action="{{route('profile.update')}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Ism <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="name" name="name" value="{{old('name', $user->name)}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="email" name="email" value="{{old('email', $user->email)}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Parolni tahrirlash
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('profile.password')}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="password">Yangi parol<span class="text-danger">*</span></label>
                            <input class="form-control" type="password" id="password" name="password"  required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Yangi parolni tasdiqlash <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation"  required>
                        </div>
                        <button type="submit" class="btn btn-danger btn-block">O`zgartirish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection