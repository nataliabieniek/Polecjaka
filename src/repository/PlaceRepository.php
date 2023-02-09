<?php

require_once "Repository.php";
require_once  __DIR__."/../models/Place.php";
class PlaceRepository extends Repository
{
    public function getPlace(): ?Place
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.place
        ');
        $stmt->execute();

        $place = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($place == false) {
            return null;
        }

        return new Place(
            $place['title'],
            $place['address'],
            $place['district'],
            $place['description'],
            $place['image']
        );
    }

    public function addPlace(Place $place): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO place ( title, address, district, description, image)
            VALUES (?, ?, ?, ?, ?)
        ');


        $stmt->execute([
            $place->getTitle(),
            $place->getAddress(),
            $place->getDistrict(),
            $place->getDescription(),
            $place->getImage()
        ]);
    }

    public function getPlaces(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
        SELECT * FROM place
        ');
        $stmt->execute();
        $places = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($places as $place) {
            $result[] = new Place(
                $place['title'],
                $place['address'],
                $place['district'],
                $place['description'],
                $place['image']
            );
        }

        return $result;
    }


}