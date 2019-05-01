<?php
namespace App\Controllers;


use App\Lib\Helper;
use App\Lib\InputFilter;
use App\Models\StudentModel;

class StudentController extends AbstractController
{
    use InputFilter;
    use Helper;
    public function defaultAction()
    {
        $this->_data['result'] = StudentModel::getAll();
        $this->_view();
    }
    public function addAction()
    {
        if (isset($_POST['submit']))
        {
            $student = new StudentModel();
            $student->name = $this->filterString($_POST['name']);
            $student->email = $this->filterEmail($_POST['email']);
            $student->password = $_POST['password'];
            $student->address = $this->filterString($_POST['address']);
            $student->birthDate = $_POST['birth_date'];
            $student->phone = $_POST['phone'];



            if ($student->save())
            {
//                $_SESSION['message'] = "employees is saved to database";
                $this->redirect('/student');
            }
        }
        $this->_view();
    }
    //     edit data
//
    public function editAction()
    {
//         to get id
        $id = $this->filterInt($this->_params[0]);
        $student = StudentModel::getByPK($id);
        if ($student === false)
        {
            $this->redirect('/student');
        }
        $this->_data['student'] = $student;
        if (isset($_POST['submit']))
        {

            $student->name = $this->filterString($_POST['name']);
            $student->email = $this->filterEmail($_POST['email']);
//            $student->password = $_POST['password'];
            if ((isset($_POST['new_password']) && isset($_POST['confirm_password'])) && ($_POST['new_password'] === $_POST['confirm_password']))
            {
                $student->password = $_POST['new_password'];
            }
            $student->address = $this->filterString($_POST['address']);
            $student->birthDate = $_POST['birth_date'];
            $student->phone = $_POST['phone'];

            if ($student->save())
            {
//                $_SESSION['message'] = "employees is saved to database";
                $this->redirect('/student');
            }
        }
        $this->_view();
    }
    public function detailsAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $student = StudentModel::getByPK($id);
        $this->_data['student'] = $student;
        $this->_view();
    }
    //     delete data
    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $student = StudentModel::getByPK($id);
        if ($student === false)
        {
            $this->redirect('/student');
        }

        if ($student->delete())
        {

            $this->redirect('/student');
        }
    }
}