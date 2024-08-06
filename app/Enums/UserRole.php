<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'Admin';
    case Doctor = 'Doctor';
    case Paciente = 'Paciente';
    case Hospital = 'Hospital';
}
