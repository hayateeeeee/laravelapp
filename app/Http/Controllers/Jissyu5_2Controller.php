<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_2Controller extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('jissyu5_2.index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select(
            'select * from people where id = :id',
            $param
        );
        return view('jissyu5_2.show', ['item' => $item[0]]);
    }

    public function add(Request $request)
    {
        return view('jissyu5_2.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/jissyu11');
    }
    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('jissyu5_2.edit', ['item' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update people set name =:name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/jissyu11');
    }

    public function del(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        return view('jissyu5_2.del', ['item' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from people where id = :id', $param);
        return redirect('/jissyu11');
    }
}