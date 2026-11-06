<?php

namespace App\Controllers;

use App\Models\Ride;
use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class RideController extends BaseController
{
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    public function index(Request $request): Response
    {
        $rides = Ride::getAll();

        return $this->html([
            'rides' => $rides
        ]);
    }

    public function add(Request $request): Response
    {
        return $this->html([
            'ride' => null
        ], 'form');
    }

    public function store(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('ride.index'));
        }

        $ride = new Ride();

        $ride->setDeparture($request->post('departure'));
        $ride->setDestination($request->post('destination'));
        $ride->setDepartureTime($request->post('departure_time'));
        $ride->setPrice((float) $request->post('price'));
        $ride->setAvailableSeats((int) $request->post('available_seats'));

        $ride->save();

        return $this->redirect($this->url('ride.index'));
    }

    public function edit(Request $request): Response
    {
        $id = (int) $request->get('id');
        $ride = Ride::getOne($id);

        if ($ride === null) {
            return $this->redirect($this->url('ride.index'));
        }

        return $this->html([
            'ride' => $ride
        ], 'form');
    }

    public function update(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('ride.index'));
        }

        $id = (int) $request->post('id');
        $ride = Ride::getOne($id);

        if ($ride === null) {
            return $this->redirect($this->url('ride.index'));
        }

        $ride->setDeparture($request->post('departure'));
        $ride->setDestination($request->post('destination'));
        $ride->setDepartureTime($request->post('departure_time'));
        $ride->setPrice((float) $request->post('price'));
        $ride->setAvailableSeats((int) $request->post('available_seats'));

        $ride->save();

        return $this->redirect($this->url('ride.index'));
    }

    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('ride.index'));
        }

        $id = (int) $request->post('id');
        $ride = Ride::getOne($id);

        if ($ride !== null) {
            $ride->delete();
        }

        return $this->redirect($this->url('ride.index'));
    }
}
