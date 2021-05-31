@extends('master')
@section('title')
    edit customer
@endsection
@section('content')
    <form method="POST" action="{{route('update.customer',$data->id)}}" class="mt-4 p-2" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Customer Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Numder</label>
            <input type="text" class="form-control" name="phone" value="{{$data->phone}}" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{$data->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" @if ($data->gender=='male') checked @endif id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female" @if ($data->gender=='female') checked @endif>
                        <label class="form-check-label" for="flexRadioDefault1">
                        female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="others" @if($data->gender=='others') checked @endif>
                        <label class="form-check-label" for="flexRadioDefault1">
                        other
                        </label>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Status</label>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="active" value="on" @if($data->active=='on') checked @endif class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Active</label>
                </div>
            </div>

        </div>
        <div class="mb-3 form-group">
            <div>
                <label class="d-block" for="exampleInputEmail1">Image</label>
                <img src="{{ asset($data->image) }}" style="height: 200px; wigdth: 300px;" >
                <input type="file" name="image" class="form-control" id="" placeholder="">
                <input type="hidden" name="old_image" value="{{ $data->image  }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection


