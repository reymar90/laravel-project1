<?php

namespace App\Http\Controllers;
use App\User as User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;

class UsersController extends Controller
{
    public function __construct(User $user) {
        $this->user =  $user;
        
    }
    
    public function index()
    {
        $user_result = $this->user->getAll();
        return response()->json(['success' => true,'data'=>$user_result], 200);
    }

    public function create()
    {

    }
    
    public function store(Request $request)
    {
        {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'age' => 'required|numeric',
                'email' => 'required|unique:users,email',
                'contact_number'  => 'required|regex:/(09)[0-9]{9}/',
                'address' => 'required'
            ]);
            
    
            if ($validator->fails()) { 
                $errors = $validator->errors()->toArray();
              
                foreach($errors as $key => $value) {
                    $errors[$key] = $value[0];
                }
                return response()->json(['error'=>$errors], 200);            
            }
            
            $input = Input::only("first_name","last_name","age","email","contact_number","address");
        
            $data_added = $this->user->insertData($input);
            return response()->json(['success' => true,'data'=>$data_added], 200);
            
        }
    }

   
    public function show($id)
    {
        $data = $this->user->getDataById($id);

        if(empty($data)) {
            return response()->json(['success' => false,'error_message'=>"data not found"], 200);
        }

        return response()->json(['success' => true,'data'=>$data], 200);
    }

    public function edit($id)
    {
        
    }

 
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'age' =>'required',
            'email' =>'required',
            'contact_number' =>'required|regex:/(09)[0-9]{9}/',
            'address' =>'required'
        ]);

        if ($validator->fails()) { 
            $errors = $validator->errors()->toArray();
          
            foreach($errors as $key => $value) {
                $errors[$key] = $value[0];
            }
            return response()->json(['error'=>$errors], 200);            
        }

        $input = Input::only("first_name","last_name","age","email","contact_number","address");
        $update = $this->user->updateData($id,$input);
        $updated_data = $this->user->getDataById($id);

        return response()->json(['success' => true,'data'=>$updated_data], 200);
    }

    public function destroy($id)
    {
        $data = $this->user->getDataById($id);

        if(empty($data)) {
            return response()->json(['success' => false,'error_message'=>"data not found"], 200);
        }

        $deleted = ($this->user->deleteData($id) == 1 ? true : false);
        
        return response()->json(['success' =>true], 200);
    }
}
