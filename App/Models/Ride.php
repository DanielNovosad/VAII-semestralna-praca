<?php

namespace App\Models;

use Framework\Core\Model;

class Ride extends Model
{
    protected ?int $id = null;
    protected ?string $departure = null;
    protected ?string $destination = null;
    protected ?string $departure_time = null;
    protected ?float $price = null;
    protected ?int $available_seats = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeparture(): ?string
    {
        return $this->departure;
    }

    public function setDeparture(string $departure): void
    {
        $this->departure = $departure;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    public function getDepartureTime(): ?string
    {
        return $this->departure_time;
    }

    public function setDepartureTime(string $departureTime): void
    {
        $this->departure_time = $departureTime;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getAvailableSeats(): ?int
    {
        return $this->available_seats;
    }

    public function setAvailableSeats(int $availableSeats): void
    {
        $this->available_seats = $availableSeats;
    }
}
