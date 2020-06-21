<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Appointment;

class AppointmentRepository extends AbstractRepository
{
    public function __construct(Appointment $appointment)
    {
        $this->model = $appointment;
    }

    public function getAppointmentsOfUser(User $user, Array $filters)
    {
        $query = $this->model->with(['user', 'client', 'service']);

        if (!$user->admin) {
            $query->where('user_id', $user->id);
        }

        if (isset($filters['date'])) {
            $query->whereBetween('datetime', $filters['date']);
        }

        $query->orderBy('datetime', 'desc');

        return $query->get();
    }
}
