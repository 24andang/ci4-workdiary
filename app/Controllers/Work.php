<?php

namespace App\Controllers;

use App\Models\WorkModel;

class Work extends BaseController
{
    protected $workModel;

    public function __construct()
    {
        $this->workModel = new \App\Models\WorkModel();
    }

    //--------------------------------------------------------------------
    public function index()
    {
        $data = [
            'title' => 'Work Diary',
            'work'  => $this->workModel->getWork()
        ];

        return view('work/index', $data);
    }

    //--------------------------------------------------------------------
    public function add()
    {
        $data = [
            'title' => 'Tambah Daftar Kegiatan',
        ];

        return view('work/add', $data);
    }

    //--------------------------------------------------------------------
    public function insert()
    {
        $data = [
            'kegiatan'    => $this->request->getVar('kegiatan'),
            'tanggal'     => $this->request->getVar('tanggal'),
            'keterangan'  => $this->request->getVar('keterangan')
        ];

        $this->workModel->insert($data);

        return redirect()->to('/work/index');
    }

    //--------------------------------------------------------------------
    public function delete($id)
    {
        $this->workModel->delete($id);

        return redirect()->to('/work/index');
    }

    //--------------------------------------------------------------------
    public function update($id)
    {
        $data = [
            'title'     => 'Update Progress',
            'work'        => $this->workModel->getWork($id)
        ];

        return view('/work/update', $data);
    }

    //--------------------------------------------------------------------
    public function updatethis($id)
    {
        $data = [
            'id'         => $id,
            'kegiatan'   => $this->request->getVar('kegiatan'),
            'tanggal'    => $this->request->getVar('tanggal'),
            'Keterangan' => $this->request->getVar('keterangan')
        ];

        $this->workModel->save($data);

        return redirect()->to('/work/index');
    }

    //--------------------------------------------------------------------

}
