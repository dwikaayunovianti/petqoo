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

        
          <div class="table-responsive">
          <a class="btn btn-primary" href="/bookings/create">Add New Schedule</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                 
                  <th>Name</th>
                  <th>Summary</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($bookings as $booking)
                <tr>
                
                  <td>{{ $booking->name }}</td>
                  <td>{{ $booking->summary }}</td>
                  <td>{{ $booking->description }}</td>
                  <td>{{ $booking->status }}</td>
                  <td>
                  <a href="/bookings/{{ $booking->id }}" class="btn btn-primary">Update</a>
                  <a href="/bookings/delete/{{ $booking->id }}" class="btn btn-danger">Delete</a>


                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
@endsection