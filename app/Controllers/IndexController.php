<?php

namespace App\Controllers;
use App\Models\DoctorModel;
use App\Models\StudentModel;
class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->_data['result'] = count(StudentModel::getAll());
        $this->_data['doctor'] = count(DoctorModel::getAll());
        $this->_view();
    }
}