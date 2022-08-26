<?php

namespace App\Repositories;

use DB;
use App\Models\Status;

class StatusRepository extends BaseRepository
{

    public function __construct(Status $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getStatuses()
    {
        return DB::connection('mysql2')->table('lesson_statuses')->select()->get();
    }
  
    public function createStatuses($params)
    {
        return DB::connection('mysql2')->table('lesson_statuses')->insert($params);
    }
    
    public function findIdStatuses($id)
    {
        return DB::connection('mysql2')->table('lesson_statuses')->select()->where('id',$id)->get();
    }

    public function updateStatuses($params, $id)
    {
        return DB::connection('mysql2')->table('lesson_statuses')->where('id',$id)->update($params);
    }

    public function deleteStatuses($id)
    {
        return DB::connection('mysql2')->table('lesson_statuses')->where('id',$id)->delete();
    }

    public function uploadImgStatuses($params, $id)
    {
        return DB::connection('mysql2')->table('lesson_statuses')->where('id',$id)->update($params);
    }

   
}
