@extends('layouts.admin')

@section('content')
<form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Project Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="cient_name" class="form-label">Client Name</label>
        <input type="text" class="form-control" id="client_name" name="client_name">
      </div>
      <div class="mb-3">
        <label for="summary" class="form-label">Summmary</label>
        <textarea class="form-control" id="description" rows="15" name="summary"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection