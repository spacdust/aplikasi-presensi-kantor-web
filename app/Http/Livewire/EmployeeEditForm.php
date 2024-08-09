<?php

namespace App\Http\Livewire;

use App\Http\Traits\useUniqueValidation;
use App\Models\Partof;
use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EmployeeEditForm extends Component
{
    use useUniqueValidation;

    public $employees;
    public Collection $positions;
    public Collection $partofs;
    public $selectedPartofId;

    public function mount(Collection $employees)
    {

        $this->partofs = Partof::all();

        $this->employees = []; // reset, karena ada data employees sebelumnya
        $this->selectedPartofId = $this->partofs->first()->id;
        $this->loadPositions();

        foreach ($employees as $employee) {
            $this->employees[] = [
                'id' => $employee->id,
                'name' => $employee->name,
                'email' => $employee->email,
                'original_email' => $employee->email, // untuk cek validasi unique
                'phone' => $employee->phone,
                'original_phone' => $employee->phone,
                'password' => $employee->password,
                'position_id' => $employee->position_id,
                'partof_id' => $this->selectedPartofId,
            ];
        }

        $this->positions = Position::all();
    }

    public function updatedSelectedPartofId()
    {
        $this->loadPositions();
    }

    private function loadPositions()
    {
        $this->positions = Position::where('partof_id', $this->selectedPartofId)->get();
    }

    public function saveEmployees()
    {

        $positionIdRuleIn = join(',', $this->positions->pluck('id')->toArray());

        $this->validate([
            'employees.*.name' => 'required',
            'employees.*.email' => 'required|email',
            'employees.*.phone' => 'required',
            // 'employees.*.password' => 'required',
            'employees.*.position_id' => 'required|in:' . $positionIdRuleIn,
        ]);

        if (!$this->isUniqueOnLocal('phone', $this->employees)) {
            $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
            return session()->flash('failed', 'Pastikan input No. Telp tidak mangandung nilai yang sama dengan input lainnya.');
        }

        if (!$this->isUniqueOnLocal('email', $this->employees)) {
            $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
            return session()->flash('failed', 'Pastikan input Email tidak mangandung nilai yang sama dengan input lainnya.');
        }

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        $affected = 0;
        foreach ($this->employees as $employee) {
            // cek unique validasi
            $employeeBeforeUpdated = User::find($employee['id']);

            if (!$this->isUniqueOnDatabase($employeeBeforeUpdated, $employee, 'phone', User::class)) {
                $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
                return session()->flash('failed', "No. Telp dari data pegawai {$employee['id']} sudah terdaftar. Silahkan masukan email yang berbeda!");
            }

            if (!$this->isUniqueOnDatabase($employeeBeforeUpdated, $employee, 'email', User::class)) {
                $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
                return session()->flash('failed', "Email dari data pegawai {$employee['id']} sudah terdaftar. Silahkan masukan email yang berbeda!");
            }

            $affected += $employeeBeforeUpdated->update([
                'name' => $employee['name'],
                'email' => $employee['email'],
                'phone' => $employee['phone'],
                // 'password' => $employee['password'],
                'position_id' => $employee['position_id'],
            ]);
        }

        $message = $affected === 0 ?
            "Tidak ada data pegawai yang diubah." :
            "Ada $affected data pegawai yang berhasil diedit.";

        return redirect()->route('employees.index')->with('success', $message);
    }


    public function render()
    {
        return view('livewire.employee-edit-form');
    }
}
