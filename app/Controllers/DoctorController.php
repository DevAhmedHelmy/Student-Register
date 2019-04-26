<?php

namespace App\Controllers;
use App\Lib\Helper;
use App\Lib\InputFilter;
use App\Models\DoctorModel;
class DoctorController extends AbstractController
{
    use InputFilter;
    use Helper;
	public function defaultAction()
    {
        $this->_data['result'] = DoctorModel::getAll();
		$this->_view();
	}
    public function addAction()
    {
        if (isset($_POST['submit']))
        {
            $doctor = new DoctorModel();
            $doctor->name = $this->filterString($_POST['name']);
            $doctor->email = $this->filterEmail($_POST['email']);
            $doctor->degree = $_POST['degree'];
            $doctor->password = $_POST['password'];
            $doctor->address = $this->filterString($_POST['address']);
            $doctor->birthDate = $_POST['birth_date'];
            $doctor->phone = $_POST['phone'];
            if ($doctor->save())
            {
//                $_SESSION['message'] = "employees is saved to database";
                $this->redirect('/doctor');
            }
        }
        $this->_view();
    }

    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $doctor = DoctorModel::getByPK($id);
        if ($doctor === false)
        {
            $this->redirect('/doctor');
        }
        $this->_data['doctor'] = $doctor;
        if (isset($_POST['submit']))
        {
            $doctor = new DoctorModel();
            $doctor->name = $this->filterString($_POST['name']);
            $doctor->email = $this->filterEmail($_POST['email']);
            $doctor->degree = $_POST['degree'];
//            $doctor->password = $_POST['password'];
            $doctor->address = $this->filterString($_POST['address']);
            $doctor->birthDate = $_POST['birth_date'];
            $doctor->phone = $_POST['phone'];
            if ($doctor->save())
            {
//                $_SESSION['message'] = "employees is saved to database";
                $this->redirect('/doctor');
            }
        }
        $this->_view();
    }
    public function detailsAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $doctor = DoctorModel::getByPK($id);
        $this->_data['doctor'] = $doctor;
        $this->_view();
    }
    //     delete data
    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $student = DoctorModel::getByPK($id);
        if ($student === false)
        {
            $this->redirect('/doctor');
        }

        if ($student->delete())
        {

            $this->redirect('/doctor');
        }
    }

}