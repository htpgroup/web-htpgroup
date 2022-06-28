<?php

namespace App\Services;

use App\Interfaces\FirebaseServiceInterface;
use App\Models\Posts;
use Kreait\Firebase\Factory;

class FirebaseService implements FirebaseServiceInterface
{
    public $database;

    public function __construct()
    {
        $dbUri = config('firebase.projects.app.database.url');
        $factory = (new Factory())->withDatabaseUri($dbUri);
        $this->database = $factory->createDatabase();
    }

    public function set(Posts $post)
    {
        dd('shared on LinkedIn!');
    }

    public function share(Posts $post)
    {
        dd('shared on LinkedIn!');
    }

    public function database()
    {
        return 'shared on LinkedIn!';
    }

    public function getA()
    {
        return 'shared on LinkedIn!';
    }
}
