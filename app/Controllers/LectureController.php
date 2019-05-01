<?php

namespace App\Controllers;
ob_start();
use App\Lib\Helper;
use App\Lib\InputFilter;
use App\Models\DoctorModel;
use App\Models\LectureModel;
use App\Models\SubjectModel;
class LectureController extends AbstractController
{
    use InputFilter;
    use Helper;
    public function defaultAction()
    {
//        to select join
        $this->_data['result'] = LectureModel::getMultiJoin('lectures','doctors','doctor_id','subjects','subject_id','sub_id');

        $this->_view();
    }
    public function addAction()
    {
        $this->_data['doctors'] = DoctorModel::getAll();
        $this->_data['subjects'] = SubjectModel::getAll();
        $this->_view();
        if (isset($_POST['submit']))
        {
            $lecture = new LectureModel();
            $lecture->lecture_time = $_POST['lecture_time'];
            $lecture->doctor_id = $_POST['doctor_id'];
            $lecture->subject_id = $_POST['subject_id'];
            if ($lecture->save())
            {
                $this->redirect('/lecture');
            }
        }
    }
    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $lecture = LectureModel::getByPK($id);
        $this->_data['lecture'] = $lecture;
        $this->_data['doctors'] = DoctorModel::getAll();
        $this->_data['subjects'] = SubjectModel::getAll();
        $this->_view();
        if (isset($_POST['submit']))
        {

            $lecture->lecture_time = $_POST['lecture_time'];
            $lecture->doctor_id = $_POST['doctor_id'];
            $lecture->subject_id = $_POST['subject_id'];
            if ($lecture->save())
            {
                $this->redirect('/lecture');
            }
        }
    }
    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $student = LectureModel::getByPK($id);
        if ($student === false)
        {
            $this->redirect('/lecture');
        }

        if ($student->delete())
        {

            $this->redirect('/lecture');
        }
    }
}
