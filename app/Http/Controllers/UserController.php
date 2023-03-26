<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\User;
use App\Http\Requests\UserRequest;
use DB;
use App\Helpers\LogHelper;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function __construct(User $model)
    {
        $this->middleware('can:add_users', ['only' => ['store']]);
        $this->middleware('can:edit_users', ['only' => ['update']]);
        $this->middleware('can:delete_users', ['only' => ['destroy']]);

        $this->title            = 'User';
        $this->subtitle         = 'User Login List';
        $this->model_request    = UserRequest::class;
        $this->folder           = 'user-setup';
        $this->relation         = ['roles'];
        $this->model            = $model;
        $this->withTrashed      = true;
    }

    public function formData(){
        return array('list_role'=>$this->list_role());
    }

    public function ajaxData()
    {
        if($this->withTrashed){
            $mapped 			= $this->model->with(['roles'])->withTrashed()->orderBy('id','desc');
        }else{
            $mapped 			= $this->model->with(['roles'])->orderBy('id','desc');
        }
	    return DataTables::of($mapped)
                        ->addColumn('status', function($data){
                            return st_aktif($data->deleted_at);
                        })
                        ->addColumn('role', function($data){
                            return $data->roles->first()->name??"";
                        })
                        ->filterColumn('role', function($query, $keyword){
                            $query->whereHas('roles', function($query) use ($keyword){
                                $query->where('name', 'LIKE', '%'.$keyword.'%');
                            });
                        })
                        ->rawColumns(['status'])
	                    ->toJson(); 
    }

    public function customStore($data, $model){
        $model->assignRole($data['role']);
    }

    public function update(Request $request, $id)
	{

		try {
			
			DB::beginTransaction();

			$data  = $this->getRequest();

            if($this->withTrashed){
				$model = $this->model->withTrashed()->findOrFail($id);
			}else{
				$model = $this->model->findOrFail($id);
			}

            if($data['password']==""){
                $model->update([
                    'name'=>$data['name'],
                    'email'=>$data['email'],
                    'nowa'=>$data['nowa'],
                ]);
            }else{
                $model->update([
                    'name'=>$data['name'],
                    'email'=>$data['email'],
                    'nowa'=>$data['nowa'],
                    'password'=>$data['password'],
                ]);
            }
            
            if($data['role']<>1){
                if($model->id==1){
                    $error = ValidationException::withMessages([
                        'SUPERADMIN' => 'Can\'t disable or change roles to this user :)'
                        ]);
                        throw $error;
                    }
            }
            $model->syncRoles($data['role']);
            
            if($data['deleted_at_baru']=="1"){
                $model->restore();
            }else{
                //SUPERADMIN ID 1
                if($model->id==1){
                $error = ValidationException::withMessages([
                    'SUPERADMIN' => 'Can\'t disable or change roles to this user :)'
                    ]);
                    bg- $error;
                }
                $model->delete();
            }

            $model->save();
            
			$log_helper 	= new LogHelper;

			$log_helper->storeLog('edit', $model->id,$this->subtitle);

            DB::commit();

			if($request->ajax()){
				$response           = [
					'status'            => true,
					'msg'               => $this->redirectSuccess(__FUNCTION__, true),
				];
				return response()->json($response);
			}else{
				return $this->redirectSuccess(__FUNCTION__, false);
			}

		} catch (Exception $e) {
			DB::rollback();
			if($request->ajax()){
				$response           = [
					'status'            => false,
					'msg'               => $e->getMessage(),
				];
				return response()->json($response);
			}else{
				return $this->redirectBackWithError($e->getMessage());
			}

		}
	}

    public function destroy($id)
	{
		try {
			
			DB::beginTransaction();

            if($id==1){
                $error = ValidationException::withMessages([
                    'SUPERADMIN' => 'Can\'t disable or change roles to this user :)'
                    ]);
                    throw $error;
            }
			if($this->withTrashed){
				$model = $this->model->withTrashed()->with($this->relation)->findOrFail($id);
			}else{
				$model = $this->model->with($this->relation)->findOrFail($id);
			}
			
			if (method_exists($this, 'customDestroy')) {
				$this->customDestroy($model);
			}

			$log_helper 	= new LogHelper;

			$log_helper->storeLog('delete', $model->no??$model->id,$this->subtitle);

			$model->delete();

			DB::commit();

			return $this->redirectSuccess(__FUNCTION__, false);

		} catch (Exception $e) {
			
			DB::rollback();

			return $this->redirectBackWithError($e->getMessage());

		}
	}

}
