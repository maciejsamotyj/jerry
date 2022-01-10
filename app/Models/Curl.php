<?php

namespace App\Models;

class Curl
{
    const TOKEN = 'b3844b4ca15006f42101b296ad49f1ab3f5a5cdd';

    const URL = 'https://api.todoist.com/rest/v1/';

    /**
     * @return mixed
     */
    public function getTasks()
    {
        return $this->getResponse(self::URL . "tasks");
    }

    /**
     * @return mixed
     */
//    public function getTasks()
//    {
//        $post = ['project_id' => 2276561731];
//        return $this->getResponse("https://api.todoist.com/sync/v8/projects/get_data", $post);
//
//
////        return $this->getResponse('https://api.todoist.com/sync/v8/items/get', $post);
////        --data '{"content":;
//    }

    /**
     * @param int $id
     * @return void\
     */
    public function getTask(int $id)
    {
        $task = $this->getResponse(self::URL . "tasks/$id");
        if($task !== null) {
            $task->created = $this->getDateTimeHuman($task->created);
        }
//        $post = ['item_id'=>$id];
//        return $this->getResponse('https://api.todoist.com/sync/v8/items/get', $post);
        return $task;
    }

    private function getDateTimeHuman($datetime)
    {
        return date('Y-m-d H:i:s', strtotime($datetime));
    }

    /**
     * @param $url
     * @return mixed
     */
    private function getResponse($url, $post = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if (!empty($post)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }

        $headers = [
            'Authorization: Bearer ' . self::TOKEN
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response);
    }

}