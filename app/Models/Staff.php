<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'address',
        'phone',
        'email',
        'birthdate',
        'role',
        'salary',
        'emergency_number'
    ];
    public function getFullname() {
        $fullname = ucfirst($this->firstname) . " " . strtoupper($this->middlename[0]) . ", " . ucfirst($this->lastname);
        return $fullname;
    }
    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getBirthdate() {
        return $this->birthdate;
    }
    public function getRole() {
        return $this->role;
    }
    public function getSalary() {
        return $this->salary;
    }
    public function getEmergencyNumber() {
        return $this->emergency_number;
    }
}