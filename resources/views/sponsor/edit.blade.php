
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sponsors</div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        @if($sponsor->id)
                        <form action="{{route("sponsor.update", $sponsor)}}" method="POST">
                            @method('put')
                        @else
                        <form action="{{route("sponsor.store")}}" method="POST">
                        @endif
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" value="{{old('name', $sponsor->name)}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" value="{{old('address', $sponsor->address)}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="town">Town</label>
                                <input name="town" value="{{old('town', $sponsor->town)}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mail_address">Mail address</label>
                                <input name="mail_address" value="{{old('mail_address', $sponsor->mail_address)}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone number</label>
                                <input name="phone_number" value="{{old('phone_number', $sponsor->phone_number)}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Save" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
