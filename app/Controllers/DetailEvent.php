<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\MyEventMod;
use App\Models\Peserta;
use App\Models\Juara;


class DetailEvent extends BaseController
{
    public function index($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $peserta = new Peserta();
        $jjura = new Juara();
        $namaPengguna = $session->get('id');
        $selectedevent = $MyEvent->where('id_event', $idevent)->findAll();
        $HH = $jjura->where('id_event', $idevent)->findAll();
        if (!empty($HH)) {
            $semi1 = $HH[0]['id_user-semi1'];
            $semi2 = $HH[0]['id_user-semi2'];
            $semi3 = $HH[0]['id_user-semi3'];
            $semi4 = $HH[0]['id_user-semi4'];
            $semi5 = $HH[0]['id_user-semi5'];
            $semi6 = $HH[0]['id_user-semi6'];
            $semi7 = $HH[0]['id_user-semi7'];
            $semi8 = $HH[0]['id_user-semi8'];
            $semi9 = $HH[0]['id_user-semi9'];
            $semi10 = $HH[0]['id_user-semi10'];
            $semi11 = $HH[0]['id_user-semi11'];
            $semi12 = $HH[0]['id_user-semi12'];
            $semi13 = $HH[0]['id_user-semi13'];
            $semi14 = $HH[0]['id_user-semi14'];
            $semi15 = $HH[0]['id_user-semi15'];
            $semi16 = $HH[0]['id_user-semi16'];
            $Q1 = $HH[0]['id81'];
            $Q2 = $HH[0]['id82'];
            $Q3 = $HH[0]['id83'];
            $Q4 = $HH[0]['id84'];
            $Q5 = $HH[0]['id85'];
            $Q6 = $HH[0]['id86'];
            $Q7 = $HH[0]['id87'];
            $Q8 = $HH[0]['id88'];
            $P1 = $HH[0]['idper1'];
            $P2 = $HH[0]['idper2'];
            $P3 = $HH[0]['idper3'];
            $P4 = $HH[0]['idper4'];
            $final5 = $HH[0]['id_user-final1'];
            $final6 = $HH[0]['id_user-final2'];
            $j2 = $HH[0]['j2'];
            $j1 = $HH[0]['j1'];
            $j3 = $HH[0]['j3'];
        } else {
            // Set default values or handle the case when $HH is empty
            $semi1 = $semi2 = $semi3 = $semi4 = $semi5 = $semi6 = $semi7 = $semi8 = $semi9 = $semi10 = $semi11 = $semi12 = $semi13 = $semi14 = $semi15 = $semi16 = $Q1 = $Q2 = $Q3 = $Q4 = $Q5 = $Q6 = $Q7 = $Q8 = $P1 = $P2 = $P3 = $P4 = $final5 = $final6 = $j2 = $j1 = $j3 = null;
        }
        if (!$session->has('id')) {
            $peserta1 = $peserta->where('id_event', $idevent)->findAll();
            $primaryKeys = array_column($peserta1, 'id_user');
            $countPeserta1 = count($peserta1);
            $showJoinButton = $countPeserta1 < 8;
            // Ambil data dari tabel_lain berdasarkan primary key yang terkait dengan peserta1
            $tabelLainData = [];
            if (!empty($primaryKeys)) {
                $tabelLainData = $userModel->whereIn('id_user', $primaryKeys)->findAll();
            }
            $semii1 = $userModel->getUserById($semi1);
            $semii2 = $userModel->getUserById($semi2);
            $semii3 = $userModel->getUserById($semi3);
            $semii4 = $userModel->getUserById($semi4);
            $semii5 = $userModel->getUserById($semi5);
            $semii6 = $userModel->getUserById($semi6);
            $semii7 = $userModel->getUserById($semi7);
            $semii8 = $userModel->getUserById($semi8);
            $semii9 = $userModel->getUserById($semi9);
            $semii10 = $userModel->getUserById($semi10);
            $semii11 = $userModel->getUserById($semi11);
            $semii12 = $userModel->getUserById($semi12);
            $semii13 = $userModel->getUserById($semi13);
            $semii14 = $userModel->getUserById($semi14);
            $semii15 = $userModel->getUserById($semi15);
            $semii16 = $userModel->getUserById($semi16);
            $Q1 = $userModel->getUserById($Q1);
            $Q2 = $userModel->getUserById($Q2);
            $Q3 = $userModel->getUserById($Q3);
            $Q4 = $userModel->getUserById($Q4);
            $Q5 = $userModel->getUserById($Q5);
            $Q6 = $userModel->getUserById($Q6);
            $Q7 = $userModel->getUserById($Q7);
            $Q8 = $userModel->getUserById($Q8);
            $P1 = $userModel->getUserById($P1);
            $P2 = $userModel->getUserById($P2);
            $P3 = $userModel->getUserById($P3);
            $P4 = $userModel->getUserById($P4);
            $jj2 = $userModel->getUserById($j2);
            $jj1 = $userModel->getUserById($j1);
            $jj3 = $userModel->getUserById($j3);
            $F1 = $userModel->getUserById($final5);
            $F2 = $userModel->getUserById($final6);
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'compe' => $tabelLainData,
                'HH1' => $semii1,
                'HH2' => $semii2,
                'HH3' => $semii3,
                'HH4' => $semii4,
                'HH5' => $Q1,
                'HH6' => $Q2,
                'HH81' => $Q3,
                'HH82' => $Q4,
                'HH7' => $semii9,
                'HH8' => $semii10,
                'HH9' => $semii11,
                'HH10' => $semii12,
                'HH11' => $semii5,
                'HH12' => $semii6,
                'HH13' => $semii7,
                'HH14' => $semii8,
                'HH15' => $semii13,
                'HH16' => $semii14,
                'HH17' => $semii15,
                'HH18' => $semii16,
                'HH19' => $Q7,
                'HH20' => $Q8,
                'HH90' => $Q5,
                'HH91' => $Q6,
                'HH21' => $P1,
                'HH22' => $P2,
                'HH23' => $P3,
                'HH24' => $P4,
                'F1' => $F1,
                'F2' => $F2,
                'JJ1' => $jj2,
                'JJ2' => $jj1,
                'JJ3' => $jj3,
                'bra' => $tabelLainData,
                'selectedevent' => $selectedevent,
                // 'nama' => $user['nama'],
                // 'id_user' => $user['id_user'],
                'isi' => $latestProducts,
                'title' => 'event',
                'show_join_button' => $showJoinButton
            ];
            echo view("detailTour", $data);
        } else {
            $peserta1 = $peserta->where('id_event', $idevent)->findAll();
            $primaryKeys = array_column($peserta1, 'id_user');
            $countPeserta1 = count($peserta1);
            $showJoinButton = $countPeserta1 < 8;
            // Ambil data dari tabel_lain berdasarkan primary key yang terkait dengan peserta1
            $tabelLainData = [];
            if (!empty($primaryKeys)) {
                $tabelLainData = $userModel->whereIn('id_user', $primaryKeys)->findAll();
            }
            $semii1 = $userModel->getUserById($semi1);
            $semii2 = $userModel->getUserById($semi2);
            $semii3 = $userModel->getUserById($semi3);
            $semii4 = $userModel->getUserById($semi4);
            $semii5 = $userModel->getUserById($semi5);
            $semii6 = $userModel->getUserById($semi6);
            $semii7 = $userModel->getUserById($semi7);
            $semii8 = $userModel->getUserById($semi8);
            $semii9 = $userModel->getUserById($semi9);
            $semii10 = $userModel->getUserById($semi10);
            $semii11 = $userModel->getUserById($semi11);
            $semii12 = $userModel->getUserById($semi12);
            $semii13 = $userModel->getUserById($semi13);
            $semii14 = $userModel->getUserById($semi14);
            $semii15 = $userModel->getUserById($semi15);
            $semii16 = $userModel->getUserById($semi16);
            $Q1 = $userModel->getUserById($Q1);
            $Q2 = $userModel->getUserById($Q2);
            $Q3 = $userModel->getUserById($Q3);
            $Q4 = $userModel->getUserById($Q4);
            $Q5 = $userModel->getUserById($Q5);
            $Q6 = $userModel->getUserById($Q6);
            $Q7 = $userModel->getUserById($Q7);
            $Q8 = $userModel->getUserById($Q8);
            $P1 = $userModel->getUserById($P1);
            $P2 = $userModel->getUserById($P2);
            $P3 = $userModel->getUserById($P3);
            $P4 = $userModel->getUserById($P4);
            $jj2 = $userModel->getUserById($j2);
            $jj1 = $userModel->getUserById($j1);
            $jj3 = $userModel->getUserById($j3);
            $F1 = $userModel->getUserById($final5);
            $F2 = $userModel->getUserById($final6);
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $data = [
                'compe' => $tabelLainData,
                'HH1' => $semii1,
                'HH2' => $semii2,
                'HH3' => $semii3,
                'HH4' => $semii4,
                'HH5' => $Q1,
                'HH6' => $Q2,
                'HH81' => $Q3,
                'HH82' => $Q4,
                'HH7' => $semii9,
                'HH8' => $semii10,
                'HH9' => $semii11,
                'HH10' => $semii12,
                'HH11' => $semii5,
                'HH12' => $semii6,
                'HH13' => $semii7,
                'HH14' => $semii8,
                'HH15' => $semii13,
                'HH16' => $semii14,
                'HH17' => $semii15,
                'HH18' => $semii16,
                'HH19' => $Q7,
                'HH20' => $Q8,
                'HH90' => $Q5,
                'HH91' => $Q6,
                'HH21' => $P1,
                'HH22' => $P2,
                'HH23' => $P3,
                'HH24' => $P4,
                'F1' => $F1,
                'F2' => $F2,
                'JJ1' => $jj2,
                'JJ2' => $jj1,
                'JJ3' => $jj3,
                'bra' => $tabelLainData,
                'selectedevent' => $selectedevent,
                'nama' => $user['nama'],
                'id_user' => $user['id_user'],
                'isi' => $latestProducts,
                'title' => 'event',
                'show_join_button' => $showJoinButton
            ];
            echo view("detailTour", $data);
        }
    }

    public function peserta($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $peserta = new Peserta();
        $jjura = new Juara();
        $namaPengguna = $session->get('id');
        $HH = $jjura->where('id_event', $idevent)->findAll();
        if (!empty($HH)) {
            $semi1 = $HH[0]['id_user-semi1'];
            $semi2 = $HH[0]['id_user-semi2'];
            $semi3 = $HH[0]['id_user-semi3'];
            $semi4 = $HH[0]['id_user-semi4'];
            $semi5 = $HH[0]['id_user-semi5'];
            $semi6 = $HH[0]['id_user-semi6'];
            $semi7 = $HH[0]['id_user-semi7'];
            $semi8 = $HH[0]['id_user-semi8'];
            $semi9 = $HH[0]['id_user-semi9'];
            $semi10 = $HH[0]['id_user-semi10'];
            $semi11 = $HH[0]['id_user-semi11'];
            $semi12 = $HH[0]['id_user-semi12'];
            $semi13 = $HH[0]['id_user-semi13'];
            $semi14 = $HH[0]['id_user-semi14'];
            $semi15 = $HH[0]['id_user-semi15'];
            $semi16 = $HH[0]['id_user-semi16'];
            $Q1 = $HH[0]['id81'];
            $Q2 = $HH[0]['id82'];
            $Q3 = $HH[0]['id83'];
            $Q4 = $HH[0]['id84'];
            $Q5 = $HH[0]['id85'];
            $Q6 = $HH[0]['id86'];
            $Q7 = $HH[0]['id87'];
            $Q8 = $HH[0]['id88'];
            $P1 = $HH[0]['idper1'];
            $P2 = $HH[0]['idper2'];
            $P3 = $HH[0]['idper3'];
            $P4 = $HH[0]['idper4'];
            $final5 = $HH[0]['id_user-final1'];
            $final6 = $HH[0]['id_user-final2'];
            $j2 = $HH[0]['j2'];
            $j1 = $HH[0]['j1'];
            $j3 = $HH[0]['j3'];
        } else {
            // Set default values or handle the case when $HH is empty
            $semi1 = $semi2 = $semi3 = $semi4 = $semi5 = $semi6 = $semi7 = $semi8 = $semi9 = $semi10 = $semi11 = $semi12 = $semi13 = $semi14 = $semi15 = $semi16 = $Q1 = $Q2 = $Q3 = $Q4 = $Q5 = $Q6 = $Q7 = $Q8 = $P1 = $P2 = $P3 = $P4 = $final5 = $final6 = $j2 = $j1 = $j3 = null;
        }
        $selectedevent = $MyEvent->where('id_event', $idevent)->findAll();
        if (!$session->has('id')) {
            return redirect()->to(base_url('/home'));
        } else {
            $peserta1 = $peserta->where('id_event', $idevent)->findAll();
            $primaryKeys = array_column($peserta1, 'id_user');
            $countPeserta1 = count($peserta1);
            $showJoinButton = $countPeserta1 < 8;
            // Ambil data dari tabel_lain berdasarkan primary key yang terkait dengan peserta1
            $tabelLainData = [];
            if (!empty($primaryKeys)) {
                $tabelLainData = $userModel->whereIn('id_user', $primaryKeys)->findAll();
            }
            $semii1 = $userModel->getUserById($semi1);
            $semii2 = $userModel->getUserById($semi2);
            $semii3 = $userModel->getUserById($semi3);
            $semii4 = $userModel->getUserById($semi4);
            $semii5 = $userModel->getUserById($semi5);
            $semii6 = $userModel->getUserById($semi6);
            $semii7 = $userModel->getUserById($semi7);
            $semii8 = $userModel->getUserById($semi8);
            $semii9 = $userModel->getUserById($semi9);
            $semii10 = $userModel->getUserById($semi10);
            $semii11 = $userModel->getUserById($semi11);
            $semii12 = $userModel->getUserById($semi12);
            $semii13 = $userModel->getUserById($semi13);
            $semii14 = $userModel->getUserById($semi14);
            $semii15 = $userModel->getUserById($semi15);
            $semii16 = $userModel->getUserById($semi16);
            $Q1 = $userModel->getUserById($Q1);
            $Q2 = $userModel->getUserById($Q2);
            $Q3 = $userModel->getUserById($Q3);
            $Q4 = $userModel->getUserById($Q4);
            $Q5 = $userModel->getUserById($Q5);
            $Q6 = $userModel->getUserById($Q6);
            $Q7 = $userModel->getUserById($Q7);
            $Q8 = $userModel->getUserById($Q8);
            $P1 = $userModel->getUserById($P1);
            $P2 = $userModel->getUserById($P2);
            $P3 = $userModel->getUserById($P3);
            $P4 = $userModel->getUserById($P4);
            $jj2 = $userModel->getUserById($j2);
            $jj1 = $userModel->getUserById($j1);
            $jj3 = $userModel->getUserById($j3);
            $F1 = $userModel->getUserById($final5);
            $F2 = $userModel->getUserById($final6);
            $user = $userModel->getUserById($namaPengguna);
            $MyEvent = new MyEventMod();
            $latestProducts = $MyEvent->getexpertslug('hh');
            $wew = [
                'id_event' => $idevent,
            ];
            $jjura->saveuser($wew);
            $data = [
                'HH1' => $semii1,
                'HH2' => $semii2,
                'HH3' => $semii3,
                'HH4' => $semii4,
                'HH5' => $Q1,
                'HH6' => $Q2,
                'HH81' => $Q3,
                'HH82' => $Q4,
                'HH7' => $semii9,
                'HH8' => $semii10,
                'HH9' => $semii11,
                'HH10' => $semii12,
                'HH11' => $semii5,
                'HH12' => $semii6,
                'HH13' => $semii7,
                'HH14' => $semii8,
                'HH15' => $semii13,
                'HH16' => $semii14,
                'HH17' => $semii15,
                'HH18' => $semii16,
                'HH19' => $Q7,
                'HH20' => $Q8,
                'HH90' => $Q5,
                'HH91' => $Q6,
                'HH21' => $P1,
                'HH22' => $P2,
                'HH23' => $P3,
                'HH24' => $P4,
                'F1' => $F1,
                'F2' => $F2,
                'JJ1' => $jj2,
                'JJ2' => $jj1,
                'JJ3' => $jj3,
                'compe' => $tabelLainData,
                'bra' => $tabelLainData,
                'selectedevent' => $selectedevent,
                'nama' => $user['nama'],
                'id_user' => $user['id_user'],
                'isi' => $latestProducts,
                'title' => 'event',
                'show_join_button' => $showJoinButton
            ];
            echo view("detaileventp", $data);
        }
    }

    public function list($idevent)
    {
        $session = session();
        $userModel = new user();
        $MyEvent = new MyEventMod();
        $namaPengguna = $session->get('id');

        $selectedevent = $MyEvent->where('type_sport', $idevent)->findAll();
        if (!$session->has('id')) {
            $data = [
                'title' => 'Login'
            ];
            return redirect()->to(base_url('/home'));
        } else {
            if (!empty($selectedevent)) {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'compe' => $selectedevent,
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'title' => 'event'
                ];
                echo view("allevent", $data);
            } else {
                $user = $userModel->getUserById($namaPengguna);
                $data = [
                    'nama' => $user['nama'],
                    'id' => $namaPengguna,
                    'compe' => "",
                ];
                echo view("allevent", $data);
            }
        }
    }
}
