<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\Request;

class Users extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->UsersModel = new UsersModel();
    }

    public function data_users()
    {
        $data = [
            'title'         => 'Data Pengguna',
            'menu'         => 'Data Pengguna',
            'users'         => $this->UsersModel->get_users(),
            'isi'           => 'users/keuangan/v_data_users',
        ];
        echo view('layout/keuangan/va_wrapper', $data);
    }

    public function simpan_users()
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $data = [
            'kode_users'        => $this->request->getPost('kode_users'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'nama_users'        => $this->request->getPost('nama_users'),
            'jabatan'           => $this->request->getPost('jabatan'),
            'role'              => $this->request->getPost('role'),
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'users') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('users/data_users'));
        } else {
            $this->UsersModel->insert_data_users($data);
            session()->setFlashdata('success', 'Selamat! Data Pengguna sudah berhasil di simpan.');
            return redirect()->to(base_url('users/data_users'));
        }
    }

    public function update_users($id_users)
    {
        $validation = \Config\Services::validation();

        date_default_timezone_set('Asia/Jakarta');
        $tgl_update = date('m/d/Y h:i:s');
        $data = [

            'kode_users'        => $this->request->getPost('kode_users'),
            'username'          => $this->request->getPost('username'),
            'password'          => $this->request->getPost('password'),
            'nama_users'        => $this->request->getPost('nama_users'),
            'jabatan'           => $this->request->getPost('jabatan'),
            'tgl_update'        => $tgl_update,
        ];
        if ($validation->run($data, 'update') == false) {
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('users/data_users'));
        } else {
            $this->UsersModel->update_data_users($data, $id_users);
            session()->setFlashdata('success', 'Selamat! Data Pengguna sudah berhasil di perbarui.');
            return redirect()->to(base_url('users/data_users'));
        }
    }

    public function hapus($id_users = NULL)
    {
        $this->UsersModel->hapus_akun($id_users);
        session()->setFlashdata('success', 'Akun berhasil dihapus.');
        return redirect()->to(base_url('users/data_users'));
    }

    //--------------------------------------------------------------------

}
