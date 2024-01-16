<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Juara;

class Jjuara extends BaseController
{
    public function saveData()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $model = new Juara();
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi1' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData1()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi2' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData2()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi3' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData3()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi4' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData4()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi5' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData5()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi6' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData6()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi7' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData7()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi8' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData8()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi9' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData9()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi10' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData10()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi11' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData11()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi12' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData12()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi13' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData13()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi14' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData14()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi15' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveData15()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-semi16' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ1()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id81' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ2()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id82' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ3()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id83' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ4()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id84' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ5()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id85' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ6()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id86' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ7()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id87' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataQ8()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id88' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataS1()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['idper1' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataS2()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['idper2' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataS4()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['idper3' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataS3()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['idper4' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataF1()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-final1' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataF2()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['id_user-final2' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataJ2()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['j2' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataJ1()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['j1' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
    public function saveDataJ3()
    {
        $db = \Config\Database::connect();
        $data = $this->request->getJSON();
        $player = $data->player;
        $matchupNumber = $data->matchup;
        $db->table('juara')->where('id_event', $player)->update(['j3' => $matchupNumber]);
        return $this->response->setJSON(['message' => "Data for player $player in matchup $matchupNumber has been saved to the database."]);
    }
}
