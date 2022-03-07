<?php

namespace App\Controllers;

use App\Models\HistoryModel;

class History extends BaseController
{
    public function index()
    {
        $history = new HistoryModel();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $history = $history->search($keyword);
        } else {
            $history = $history;
        }
        $data = [
            'title' => 'Data History',
            'pembayaran' => $history->getAllHistory()
        ];
        return view('admin/history', $data);
    }
}
