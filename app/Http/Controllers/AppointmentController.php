<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AppointmentRequest;
use App\Repositories\AppointmentRepository;

class AppointmentController extends Controller
{
    private $appointmentRepository;

    public function __construct(AppointmentRepository $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }
    /**
     * Display a listing of appointments that user can see.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $filters = $request->query();

        return $this->appointmentRepository->getAppointmentsOfUser($user, $filters);
    }

    /**
     * Store a newly created appointment in storage.
     *
     * @param  App\Http\Requests\AppointmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppointmentRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = $request->user()->id;

        return $this->appointmentRepository->create($data);
    }

    /**
     * Display the specified appointment.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->appointmentRepository->findOrFail($id);
    }

    /**
     * Update the specified appointment in storage.
     *
     * @param  App\Http\Requests\AppointmentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AppointmentRequest $request, $id)
    {
        $data = $request->all();
        $data['user_id'] = $request->user()->id;

        return $this->appointmentRepository->update($data, $id);
    }

    /**
     * Remove the specified appointment from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->appointmentRepository->delete($id);
    }
}
