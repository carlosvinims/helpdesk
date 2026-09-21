<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Department;
use App\Http\Requests\TicketRequest;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         $search = $request->get('search');
         $departmentId = $request->get('department_id');
         $status = $request->get('status');

         $tickets = Ticket::with(['department'])
         -when($search, function ($query) use ($search) {
            $query->where('title', 'like', "%{$search}%")
             ->orWhere('requester_name', 'like', "%{$search}%");
         })
         ->when($departmentId, function ($query) use ($search) {
            $query->where('department_id', $departmentId);
         })
         ->when($status, function ($query) use ($search) {
            $query->where('status', $status);
         })
         ->latest()
         ->paginate(6)
         ->whitchQueryString();

         $departments = Department::all();

         return view('tickets.index', compact('tickets', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::orderBy('name', 'asc')->get();

        return view('tickets.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketRequest $request)
    {
        Ticket::create($request->validate());

        return redirect()
        ->route('tickets.index')
        ->with('success', 'Tickete cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        $departments = Department::orderBy('name', 'asc')->get();
        return view('tickets.edit', compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketRequest $request, Ticket $ticket)
    {
        $ticket->update($request->validate());

        return redirect()
        ->route('tickets.index')
        ->with('success', 'Tickete atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()
        ->route('tickets.index')
        ->with('success', 'Tickete deletado com sucesso!');
    }
}
