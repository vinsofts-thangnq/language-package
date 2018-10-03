<?php

namespace Thangbeo\Languages;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Thangbeo\Languages\language;
use Storage;
use App;


class TranslateController extends Controller
{
    public function index(){
        $data = language::all();
        return view('translate::list',compact('data'));
    }

    public function create(){
        return view('translate::add');
    }

    public function edit($id){
         
        $data = language::find($id);
        return view('translate::edit',compact('data'));
        return redirect('index');
}

    // hàm xử lý trong add
    public function store(Request $request){ 
        $language = new language;
        $language->in_code = $request->txt1;
        $language->en = $request->txt2;
        $language->vn = $request->txt3;
        $language->pages = $request->txt4;
        $language->save();

        // add vao lang/vn or
        $data = language::all();
        $trans_en_string = '<?php return [';
        $trans_vn_string = '<?php return [';
        foreach($data as $dt)
        {
            $trans_en_string .= '"' . $dt->in_code . '"' . ' => ' . '"' . str_replace('"', '\"', $dt->en) .'"' .',';
            $trans_vn_string .= '"' . $dt->in_code . '"' . ' => ' . '"' . str_replace('"', '\"', $dt->vn) .'"' .',';
        }
        $trans_en_string .= '];';
        $trans_vn_string .= '];';
        Storage::disk('lang')->put('en/message.php', $trans_en_string);
    	Storage::disk('lang')->put('vn/message.php', $trans_vn_string);
        
        return redirect('index');

    }


     // hàm xử lý trong update
     public function update(Request $request,$id){
        $language = language::find($id);
        $language->in_code = $request->txt1;
        $language->en = $request->txt2;
        $language->vn = $request->txt3;
        $language->pages = $request->txt4;
        $language->save();
        return redirect('index');
    }


     // hàm xử lý trong delete
     public function delete($id){
        $language = language::destroy($id);
        return redirect('index');

    }   
}
