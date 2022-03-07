<?php

namespace App\Controllers;

use App\Models\HistoryDuaModel;

class HistoryDua extends BaseController
{
    public function index()
    {
        $historydua = new HistoryDuaModel();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $historydua = $historydua->search($keyword);
        } else {
            $historydua = $historydua;
        }
        $data = [
            'title' => 'Data History',
            'pembayaran' => $historydua->getHistoryDua()
        ];
        return view('user/historydua', $data);
    }
}
