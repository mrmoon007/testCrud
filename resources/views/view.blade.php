@extends('master')
@section('title')
    view customer
@endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th>{{$item->name}}</th>
            </tr>
            <tr>
                <th scope="col">Image</th>
                <td><img src="{{ asset($item->image) }}" style="height: 200px; wigdth: 300px;" ></td>
            </tr>
            <tr>
                <th scope="col">Email</th>
                <td>{{$item->email}}</td>
            </tr>
            <tr>
                <th scope="col">Phone Number</th>
                <td>{{$item->phone}}</td>
            </tr>

            <tr>
                <th scope="col">Gender</th>
                <th>{{$item->gender}}</th>
            </tr>
            <tr>
                <th scope="col">Status</th>
                <td>{{$item->active?"Active":'Inactive'}}</td>
            </tr>
        </thead>
    </table>
@endsection


