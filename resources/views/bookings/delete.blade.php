@extends('layouts.main')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Delete Jadwal Praktik Dokter Hewan</h1>
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
          <input type="text" id="name" name="name" class="form-control" value="{{ $booking-> name }}" disabled/>
        </div>

        <div class="form-group">
          <label for="summary">Summary</label>
          <input type="text" id="summary" name="summary" class="form-control" value="{{ $booking-> summary }}" disabled/>
        </div>

        <div class="form-group">
          <label for="summary">description</label>
          <input type="text" id="description" name="description" class="form-control" value="{{ $booking-> description }}" disabled/>
        </div>

        <div class="form-group">
          <label for="summary">Status</label>
          <input type="text" id="status" name="status" class="form-control" value="{{ $booking-> status }}" disabled/>
        </div>

        <button class="btn btn-danger" type="submit">Delete</button>
        <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>
        </form>

        </main>

@endsection