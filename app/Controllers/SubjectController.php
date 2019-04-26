<?php
namespace App\Controllers;


use App\Lib\InputFilter;
use App\Lib\Helper;
use App\Models\DoctorModel;
use App\Models\SubjectModel;
class SubjectController extends AbstractController
{
    use InputFilter;
    use Helper;
    public function defaultAction()
    {
//        to select join
        $this->_data['result'] = SubjectModel::getAllJoin('subjects','doctors','doctor_id');

        $this->_view();
    }
    public function addAction()
    {
        $this->_data['doctors'] = DoctorModel::getAll();
        $this->_view();
        if (isset($_POST['submit']))
        {
            $subject = new SubjectModel();
            $subject->sub_name = $this->filterString($_POST['name']);
            $subject->doctor_id = $_POST['doctor_id'];

            if ($subject->save())
            {
                var_dump("hello");
//                $_SESSION['message'] = "employees is saved to database";
                $this->redirect('/subject');
            }
        }
    }
    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $student = SubjectModel::getByPK($id);
        if ($student === false)
        {
            $this->redirect('/subject');
        }

        if ($student->delete())
        {

            $this->redirect('/subject');
        }
    }
}