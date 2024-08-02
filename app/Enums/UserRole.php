<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'Admin';
    case Doctor = 'Doctor';
    case Frondesk = 'Paciente';
    case Hospital = 'Hospital';
}
