<?php


namespace App\models;


use App\core\Model;
use App\objects\Doctor;

class DoctorModel extends Model
{
    /**
     * @return Doctor
     */
    public function getDoctor(?string $speciality = null): Doctor
    {
        $doctor = new Doctor();

        if ($speciality == null) {
            return $doctor;
        }

        $stmt = $this->conn
            ->getPDO()
            ->prepare("SELECT * FROM `doctors`");
        $stmt->execute(['speciality' => $speciality]);
        $dbDoctor = $stmt->fetch();


        if ($stmt->rowCount() > 0) {
            return $doctor
                ->setFirstName($dbDoctor['first_name'])
                ->setLastName($dbDoctor['last_name'])
                ->setSpeciality($dbDoctor['speciality']);
        }
    }
}