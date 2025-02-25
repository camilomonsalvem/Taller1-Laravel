<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'description', 'difficulty', 'type', 'zone', 'imageMap', 'coordinateStart', 'coordinateEnd'
    ];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function setId(int $id): void
    {
        $this->attributes['id'] = $id;
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getDifficulty(): int
    {
        return $this->attributes['difficulty'];
    }

    public function setDifficulty(int $difficulty): void
    {
        $this->attributes['difficulty'] = $difficulty;
    }

    public function getType(): string
    {
        return $this->attributes['type'];
    }

    public function setType(string $type): void
    {
        $this->attributes['type'] = $type;
    }

    public function getZone(): string
    {
        return $this->attributes['zone'];
    }

    public function setZone(string $zone): void
    {
        $this->attributes['zone'] = $zone;
    }

    public function getImageMap(): string
    {
        return $this->attributes['imageMap'];
    }

    public function setImageMap(string $imageMap): void
    {
        $this->attributes['imageMap'] = $imageMap;
    }

    public function getCoordinateStart(): array
    {
        return $this->attributes['coordinateStart'];
    }

    public function setCoordinateStart(array $coordinateStart): void
    {
        $this->attributes['coordinateStart'] = $coordinateStart;
    }

    public function getCoordinateEnd(): array
    {
        return $this->attributes['coordinateEnd'];
    }

    public function setCoordinateEnd(array $coordinateEnd): void
    {
        $this->attributes['coordinateEnd'] = $coordinateEnd;
    }
}
