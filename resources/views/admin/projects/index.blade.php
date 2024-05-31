@extends('layouts.admin')

@section('content')
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Client Name</th>
            <th scope="col">Date of creation</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $singleProject)
            <tr>
                <td>{{$singleProject->id}}</td>
                <td>{{$singleProject->name}}</td>
                <td>{{$singleProject->slug}}</td>
                <td>{{$singleProject->client_name}}</td>
                <td>{{$singleProject->created_at}}</td>
                <td class="d-flex gap-4" >
                    <div><a href="{{ route('admin.projects.show', ['project' => $singleProject->id]) }}"><i class="fa-solid fa-ellipsis"></i></a></div>
                    <div><a href="{{ route('admin.projects.edit', ['project' => $singleProject->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a></div>
                    <div><a href="#" class="text-danger"><i class="fa-solid fa-trash-can"></i></a></div>
                </td>
            </tr>
          @endforeach
         
        </tbody>
      </table>
@endsection