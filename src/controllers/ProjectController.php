<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Place.php';
require_once __DIR__.'/../repository/PlaceRepository.php';
class ProjectController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg', 'image/jpg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';
    private $message = [];
    private $placeRepository;

    public function __construct()
    {
        parent::__construct();
        $this->placeRepository = new PlaceRepository();
    }
    public function dashboard()
    {
        $projects = $this->placeRepository->getPlaces();
        $this->render('dashboard', ['places' => $projects]);
    }
    public function addPlace()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $place = new Place($_POST['name-of-place'], $_POST['address-of-place'], $_POST['dzielnica'], $_POST['description'], $_FILES['file']['name']);
            $this->placeRepository->addPlace($place);

            return $this->render('dashboard', ['places' => $this->placeRepository->getPlaces()]);
        }
        return $this->render('addPlace', ['messages' => $this->message]);
    }
    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }


}