@extends('master')
@section('title')
    index customer
@endsection
@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">
          Action
        </th>
      </tr>
    </thead>
    @php
        $id=1
    @endphp
    <tbody>
      @foreach ($data as $item)
        <tr>
          <th scope="row">{{$id++}}</th>
          <td>{{$item->name}}</td>
          <td><img src="{{ asset($item->image) }}" style="height: 80px; wigdth: 70px;" ></td>
          <td>{{$item->email}}</td>
          <td>{{$item->phone}}</td>
          <th>{{$item->gender}}</th>
          <td>{{$item->active}}</td>
          
          <td>
            <a href="{{route('edit.customer',$item->id)}}" class="btn btn-sm btn-success">Edit</a>
            <a href="" class="btn btn-sm btn-info">View</a>
            <a href="{{route('delete.customer',$item->id)}}" class="btn btn-sm btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
    
@endsection