<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function addService()
    {
        return view('admin.service.add_new_service');
    }

    public function saveService(Request $request)
    {
        Service::storeService($request);
        return redirect('/add-service')->with('message','Service add successfully');
    }

    public function manageService()
    {
        return view('admin.service.manage_Service',
            ['services'=>Service::orderBy('id','desc')->get()]);

    }

    public function editService($service_id)
    {
        return view('admin.service.edit_Service',
            ['service'=>Service::find($service_id)]);
    }

    public function updateService(Request $request)
    {
        Service::storeService($request);
        return redirect('/manage-service')->with('message','Service update successfully');
    }


    public function statusUpdate($service_id)
    {
        Service::updateStatus($service_id);
        return back()->with('message','Service status update successfully');
    }


    public function deleteService(Request $request)
    {
        Service::service_delete($request);
        return redirect('/manage-service')->with('message','Service delete successfully');
    }

    public function detail($service_id)
    {
        return view('website.service.detail_service',[
            'detail_service'=>Service::find($service_id)
        ]);
    }

}
