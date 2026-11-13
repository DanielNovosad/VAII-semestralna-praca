<?php

namespace App\Models;

use Framework\Core\Model;

class Booking extends Model
{
    protected ?int $id = null;
    protected ?int $ride_id = null;
    protected ?string $passenger_name = null;
    protected ?int $seats = null;
    protected ?string $status = null;
    protected ?string $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRideId(): ?int
    {
        return $this->ride_id;
    }

    public function setRideId(int $rideId): void
    {
        $this->ride_id = $rideId;
    }

    public function getPassengerName(): ?string
    {
        return $this->passenger_name;
    }

    public function setPassengerName(string $passengerName): void
    {
        $this->passenger_name = $passengerName;
    }

    public function getSeats(): ?int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $createdAt): void
    {
        $this->created_at = $createdAt;
    }

    public function getRide(): ?Ride
    {
        return $this->getOneRelated(Ride::class, 'ride_id');
    }
}
