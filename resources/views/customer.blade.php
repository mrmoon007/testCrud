@extends('master')
@section('title')
    create customer
@endsection
@section('content')
<div class=" col-8 mt-4 p-2 justify-content-center">
    <form method="POST" action="{{route('store.customer')}}"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Customer Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Numder</label>
            <input type="text" class="form-control" name="phone" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="others" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          other
                        </label>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="mb-3 form-check">
                    <input type="checkbox" name="active" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Active</label>
                </div>
            </div>

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Profile Photo</label>
            <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">

          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
