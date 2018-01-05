<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Requests\Wechat\CarPost;
use App\Models\Car;
use App\Repositories\CarRepository;

class CarController extends Controller
{
    protected $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        parent::__construct();

        $this->carRepository = $carRepository;
    }

    public function create()
    {
        $this->data['page_title'] = '高价收车，上门评估';

        $this->data['owner_sex'] = (new Car())->ownerSex;

        $this->data['wechat_user_type'] = $this->auth->wechat_user_type;

        return view('wechat.car.create', $this->data);
    }

    public function store(CarPost $request)
    {
        $input = $request->only([
            'owner_name',
            'sex',
            'phone',
            'brand',
            'price',
            'date',
            'address',
        ]);

        $input['wechat_user_id'] = $this->auth->id;

        $this->carRepository->store($input);

        return redirect('wechat/car/create');
    }
}