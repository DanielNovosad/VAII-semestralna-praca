<?php

namespace App\Controllers;

use App\Models\Booking;
use App\Models\Ride;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class BookingController extends BaseController
{
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    public function index(Request $request): Response
    {
        $bookings = Booking::getAll();

        return $this->html([
            'bookings' => $bookings
        ]);
    }

    public function add(Request $request): Response
    {
        $rides = Ride::getAll();

        return $this->html([
            'booking' => null,
            'rides' => $rides
        ], 'form');
    }

    public function store(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('booking.index'));
        }

        $booking = new Booking();

        $booking->setRideId((int) $request->post('ride_id'));
        $booking->setPassengerName($request->post('passenger_name'));
        $booking->setSeats((int) $request->post('seats'));
        $booking->setStatus($request->post('status'));
        $booking->setCreatedAt(date('Y-m-d H:i:s'));

        $booking->save();

        return $this->redirect($this->url('booking.index'));
    }

    public function edit(Request $request): Response
    {
        $id = (int) $request->get('id');
        $booking = Booking::getOne($id);

        if ($booking === null) {
            return $this->redirect($this->url('booking.index'));
        }

        $rides = Ride::getAll();

        return $this->html([
            'booking' => $booking,
            'rides' => $rides
        ], 'form');
    }

    public function update(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('booking.index'));
        }

        $id = (int) $request->post('id');
        $booking = Booking::getOne($id);

        if ($booking === null) {
            return $this->redirect($this->url('booking.index'));
        }

        $booking->setRideId((int) $request->post('ride_id'));
        $booking->setPassengerName($request->post('passenger_name'));
        $booking->setSeats((int) $request->post('seats'));
        $booking->setStatus($request->post('status'));

        $booking->save();

        return $this->redirect($this->url('booking.index'));
    }

    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('booking.index'));
        }

        $id = (int) $request->post('id');
        $booking = Booking::getOne($id);

        if ($booking !== null) {
            $booking->delete();
        }

        return $this->redirect($this->url('booking.index'));
    }
}
