@extends('layouts.main')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Jadwal Praktik Dokter Hewan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">

 
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

        <form action ="" method="post" >
        {{ csrf_field() }}
        <div class="form-group">
          <label for="summary">Name</label>
          <input type="text" id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"  value="{{ old('name', $booking->name) }}"/>
          @if($errors->has('name'))
            <span class="help-block">
            <strong>{{$errors->first('name')}}</strong>
            </span>
        @endif
        </div>

        <div class="form-group">
          <label for="summary">Summary</label>
          <input type="text" id="summary" name="summary" class="form-control {{ $errors->has('summary') ? 'is-invalid' : '' }}"  value="{{ old('summary', $booking->summary) }}"/>
          @if($errors->has('summary'))
          <span class="help-block">
            <strong>{{$errors->first('summary')}}</strong>
            </span>
        @endif
        </div>

        <div class="form-group">
          <label for="summary">description</label>
          <input type="text" id="description" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"  value="{{ old('description', $booking->description) }}"/>
          @if($errors->has('description'))
          <span class="help-block">
            <strong>{{$errors->first('description')}}</strong>
            </span>
        @endif
        </div>

        
          <div class="form-group">
          <label for="status">status</label>
    <select class="form-control" id="status" name="status" value="{{ $booking-> status }}">
      <option value="Aktif" {{  $booking->status == "Aktif" ? "selected" : ""}}>Aktif</option>
      <option value="Non Aktif" {{  $booking->status == "Non Aktif" ? "selected" : ""}}>Non Aktif</option>
     
    </select>
  </div>


        <button class="btn btn-primary" type="submit">Update</button>
        <a href="/bookings" class="btn btn-secondary">Back</a>
        
        </form>

        </main>

@endsection