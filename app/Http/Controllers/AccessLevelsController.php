<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AccessLevel;
use DB;

class AccessLevelsController extends Controller {

    //
    public function __construct() {
        //$this->middleware('auth');
    }

    public function getIndex(Request $request) {
        return view('accesslevels.index', []);
    }

    public function getAdd(Request $request) {
        return view('accesslevels.add', [
            []
        ]);
    }

    public function getUpdate(Request $request, $id) {
        $accesslevel = AccessLevel::findOrFail($id);
        return view('accesslevels.add', [
            'model' => $accesslevel]);
    }

    public function getShow(Request $request, $id) {
        $accesslevel = AccessLevel::findOrFail($id);
        return view('accesslevels.show', [
            'model' => $accesslevel]);
    }

    public function getGrid(Request $request) {
        $len = $_GET['length'];
        $start = $_GET['start'];

        $select = "SELECT *,1,2 ";
        $presql = " FROM access_levels a ";
        if ($_GET['search']['value']) {
            $presql .= " WHERE name LIKE '%" . $_GET['search']['value'] . "%' ";
        }

        $presql .= "  ";

        $sql = $select . $presql . " LIMIT " . $start . "," . $len;


        $qcount = DB::select("SELECT COUNT(a.id) c" . $presql);
        //print_r($qcount);
        $count = $qcount[0]->c;

        $results = DB::select($sql);
        $ret = [];
        foreach ($results as $row) {
            $r = [];
            foreach ($row as $value) {
                $r[] = $value;
            }
            $ret[] = $r;
        }

        $ret['data'] = $ret;
        $ret['recordsTotal'] = $count;
        $ret['iTotalDisplayRecords'] = $count;

        $ret['recordsFiltered'] = count($ret);
        $ret['draw'] = $_GET['draw'];

        echo json_encode($ret);
    }

    public function postSave(Request $request) {
        //
        /* $this->validate($request, [
          'name' => 'required|max:255',
          ]); */
        $accesslevel = null;
        if ($request->id > 0) {
            $accesslevel = AccessLevel::findOrFail($request->id);
        } else {
            $accesslevel = new AccessLevel;
        }


        $accesslevel->id = $request->id;
        $accesslevel->name = $request->name;
        $accesslevel->access_level = $request->access_level;
        $accesslevel->created_at = $request->created_at;
        $accesslevel->updated_at = $request->updated_at;
        //$accesslevel->user_id = $request->user()->id;
        $accesslevel->save();

        return redirect('/accesslevels/index');
    }

    public function getDelete(Request $request, $id) {

        $accesslevel = AccessLevel::findOrFail($id);

        $accesslevel->delete();
        return redirect('/accesslevels/index');
    }

}
