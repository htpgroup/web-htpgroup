<?php

namespace App\Space;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Kreait\Firebase\Factory;

class FireBaseDatabase
{
    public function start()
    {

        $factory = (new Factory)
            ->withServiceAccount('/path/to/firebase_credentials.json')
            ->withDatabaseUri('https://my-project-default-rtdb.firebaseio.com');

        $auth = $factory->createAuth();
        $realtimeDatabase = $factory->createDatabase();
        $cloudMessaging = $factory->createMessaging();
        $remoteConfig = $factory->createRemoteConfig();
        $cloudStorage = $factory->createStorage();
        $firestore = $factory->createFirestore();
    }

    /*
     * Set data
     * */
    public static function setRealtimeData(string $path, array $data)
    {
        $dbUri = config('firebase.projects.app.database.url');
        $factory = (new Factory())->withDatabaseUri($dbUri);
        $database = $factory->createDatabase();
        //$path = 'send';
        //$path = 'notice/1';
        //$now = new Carbon();
        /*$data = [
            'id' => Str::random(2),
            'type' => 'msg',
            'msg' => 'New Post',
            'url' => route('admin.homeAdmin'),
            'date' => $now->toDateString(),
            'time' => $now->toTimeString(),
        ];*/

        $result = $database->getReference($path)
            //     ->remove();
            //->getValue();
            ->set($data);

        return $result;
    }

    /*
       * Update data
       * */
    public static function updateRealtimeData(string $path, array $data)
    {
        $uid = 'some-user-id';
        $postData = [
            'title' => 'My awesome post title',
            'body' => 'This text should be longer',
        ];

        $dbUri = config('firebase.projects.app.database.url');
        $factory = (new Factory())->withDatabaseUri($dbUri);
        $database = $factory->createDatabase();

        // Create a key for a new post

        $newPostKey = $database->getReference('posts')->push()->getKey();

        $updates = [
            'posts/' . $newPostKey => $postData,
            'user-posts/' . $uid . '/' . $newPostKey => $postData,
        ];

        $database->getReference() // this is the root reference
        ->update($updates);
    }

    /*
    * Set data
    * */
    public static function getRealtimeData(string $path, array $data)
    {
        $dbUri = config('firebase.projects.app.database.url');
        $factory = (new Factory())->withDatabaseUri($dbUri);
        $database = $factory->createDatabase();

        $result = $database->getReference($path)
            //     ->remove();
            ->getValue();

        return $result;
    }

    /*
   * Set data
   * */
    public static function removeRealtimeData(string $path, array $data)
    {
        $dbUri = config('firebase.projects.app.database.url');
        $factory = (new Factory())->withDatabaseUri($dbUri);
        $database = $factory->createDatabase();

        $result = $database->getReference($path)
            ->remove();

        return $result;
    }
}
