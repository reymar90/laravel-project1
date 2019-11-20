<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Player as Player;
use Validator;
use Illuminate\Support\Facades\Input;

class ExampleAPIController extends Controller
{   
    public function __construct(Player $player) {
        $this->player =  $player;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->player->getAll();
        return response()->json(['success' => true,'data'=>$result], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'player_name' => 'required',
            'player_number' => 'required|numeric'
        ]);

        if ($validator->fails()) { 
            $errors = $validator->errors()->toArray();
          
            foreach($errors as $key => $value) {
                $errors[$key] = $value[0];
            }
            return response()->json(['error'=>$errors], 200);            
        }

        $input = Input::only("player_name","player_number");

        $data_added = $this->player->insertData($input);
        return response()->json(['success' => true,'data'=>$data_added], 200);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $data = $this->player->getDataById($id);

        if(empty($data)) {
            return response()->json(['success' => false,'error_message'=>"data not found"], 200);
        }

        return response()->json(['success' => true,'data'=>$data], 200);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'player_name' => 'required',
            'player_number' => 'required|numeric'
        ]);

        if ($validator->fails()) { 
            $errors = $validator->errors()->toArray();
          
            foreach($errors as $key => $value) {
                $errors[$key] = $value[0];
            }
            return response()->json(['error'=>$errors], 200);            
        }

        $input = Input::only("player_name","player_number");
        $update = $this->player->updateData($id,$input);
        $updated_data = $this->player->getDataById($id);

        return response()->json(['success' => true,'data'=>$updated_data], 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->player->getDataById($id);

        if(empty($data)) {
            return response()->json(['success' => false,'error_message'=>"data not found"], 200);
        }

        $deleted = ($this->player->deleteData($id) == 1 ? true : false);
        
        return response()->json(['success' =>true], 200);
    }
}
