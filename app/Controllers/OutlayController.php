<?php
namespace App\Controllers;

use App\Lib\Helper;
use App\Lib\InputFilter;
use App\Models\StudentModel;
use App\Models\OutlayModel;

class OutlayController extends AbstractController
{
    use Helper;
    use InputFilter;
    public function defaultAction()
    {
        $this->_data['result'] = OutlayModel::getAllJoin('outlay','students','student_id');
        $this->_view();
    }
    public function addAction()
    {
        $this->_data['students'] = StudentModel::getAll();
        if (isset($_POST['submit']))
        {
            $outlay = new OutlayModel();
            $outlay->outlay= $_POST['outlay'];
            $outlay->student_id = $_POST['student_id'];
            if ($outlay->save())
            {
                $this->redirect('/outlay');
            }
        }
        $this->_view();
    }
    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $outlay = OutlayModel::getByPK($id);
        $this->_data['outlay'] = $outlay;
        $this->_data['students'] = StudentModel::getAll();
        $this->_view();
        if (isset($_POST['submit']))
        {

            $outlay->outlay= $_POST['outlay'];
            $outlay->student_id = $_POST['student_id'];
            if ($outlay->save())
            {
                $this->redirect('/outlay');
            }
        }
    }
    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $outlay= OutlayModel::getByPK($id);
        if ($outlay === false)
        {
            $this->redirect('/outlay');
        }

        if ($outlay->delete())
        {

            $this->redirect('/outlay');
        }
    }
}