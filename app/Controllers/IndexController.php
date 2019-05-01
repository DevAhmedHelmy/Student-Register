<?php

namespace App\Controllers;
use App\Models\DoctorModel;
use App\Models\LectureModel;
use App\Models\StudentModel;
use App\Models\SubjectModel;

class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->_data['result'] = count(StudentModel::getAll());
        $this->_data['doctor'] = count(DoctorModel::getAll());
        $this->_data['subject'] = count(SubjectModel::getAll());
        $this->_data['lecture'] = count(LectureModel::getAll());
        $this->_view();
    }
}