<?php 

namespace App\Service;

use Illuminate\Http\Request;
use App\Repositories\StatusRepository;
use Carbon\Carbon;

class StatusService {

    protected $statusRepository;

    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }

    public function getStatuses()
    {
        return $this->statusRepository->getStatuses();
    }

    public function create($params)
    {
        $params['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        return $this->statusRepository->createStatuses($params);
    }

    public function update($params)
    {
        $id = $params['id'];
        $params['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        return $this->statusRepository->updateStatuses($params, $id);
    }
    
    public function delete($id)
    {
        return $this->statusRepository->deleteStatuses($id);
    }

    public function findID($id)
    {
        return $this->statusRepository->findIdStatuses($id);
    }
    
    public function uploadImg($params)
    {
        $id = $params['id'];
        $icon_url =$params['icon_url']->getClientOriginalName();
        $params['icon_url']->move('images/icon/',$icon_url);
        $params = ['icon_url'=>'icon/'.$icon_url];
        $params['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        return $this->statusRepository->uploadImgStatuses($params, $id);  
    }
}
