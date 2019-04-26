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
    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $student = OutlayModel::getByPK($id);
        if ($student === false)
        {
            $this->redirect('/outlay');
        }

        if ($student->delete())
        {

            $this->redirect('/outlay');
        }
    }
}