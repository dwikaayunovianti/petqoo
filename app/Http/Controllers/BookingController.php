<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\BookingUpdateRequest; 

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::latest()->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    public function delete(Booking $booking)
    {
        return view('bookings.delete', compact('booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingUpdateRequest $request, Booking $booking)
    {
    
            $booking->name = request ('name');
            $booking->summary = request ('summary'); 
            $booking->description = request ('description'); 
            $booking->status = request ('status');
            $booking->save();
        
            return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(BookingUpdateRequest $request, Booking $booking)
    {
      
            $booking->name = request ('name');
            $booking->summary = request ('summary'); 
            $booking->description = request ('description'); 
            $booking->status = request ('status');
            $booking->save();
            return redirect()->route('bookings.index')->withSuccess('Schedule has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {

        $booking->delete();
        return redirect()->route('bookings.index');
    }
}
