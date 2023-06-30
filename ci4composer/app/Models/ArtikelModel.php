<?php
namespace App\Models;
use CodeIgniter\Model;
class ArtikelModel extends Model
{
protected $table = 'artikel';
protected $primaryKey = 'id';
protected $useAutoIncrement = true;
protected $allowedFields = ['judul', 'isi', 'status', 'slug',
'gambar'];


public function updateArtikel($id, $data)
{
    $this->where('id', $id)->set($data)->update();
}
}