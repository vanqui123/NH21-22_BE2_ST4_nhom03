<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Protype extends Model
{
    protected $table = 'protypes';
    public function products()
    {
        return $this->hasMany(Product::class, 'type_id', 'id');
    }
    public function getAll()
    {
        $protypes = DB::table($this->table)
            ->get();
        return $protypes;
    }
    public function addProtype($data)
    {
        DB::insert('INSERT INTO ' . $this->table . ' (type_name)
        values(?)', $data);
    }
    public function detail($id)
    {
        return DB::select('SELECT * FROM ' . $this->table . ' WHERE type_id=?', [$id]);
    }
    public function updateProtype($data, $id)
    {
        $data[] = $id;
        return DB::update('UPDATE ' . $this->table . ' SET type_name=?  WHERE type_id=?', $data);
    }
    public function deleteProtype(Request $request)
    {   

       $id = $request->id;
        return DB::delete('DELETE FROM ' . $this->table . ' WHERE type_id=?', [$id]);
    }
}
