<div class="pr-3 pl-3">
    <!-- Content Header (Page header) -->
    <section class="content-header p-0">
        <div class="container-fluid">
            <div class="col-sm-12 pl-md-3 pt-2">
                <p class="text-xl text-center font-weight-bold">Individual Inventory Report</p>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <form wire:submit.prevent='submitInventory()'>
        <div class="mb-5">
            <div class="row">
                <div class="col-12">
                    <label class="text-lg" style="color: #0A0863">Student Information</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">First Name</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.first_name">
                    <x-error field="input.first_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Middle Name</label>
                    <input class="form-control text-sm" maxlength="255" style="border: 1px solid black" type="text" wire:model="input.middle_name">
                    <x-error field="input.middle_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm"> Last Name</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.last_name">
                    <x-error field="input.last_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Suffix Name</label>
                    <input class="form-control text-sm" maxlength="255" placeholder="(e.g, Jr.)" style="border: 1px solid black" type="text" wire:model="input.suffix_name">
                    <x-error field="input.suffix_name" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">LRN</label>
                    <input class="form-control text-sm" maxlength="12" minlength="12" required style="border: 1px solid black" type="number" wire:model="input.lrn">
                    <x-error field="input.lrn" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Gender</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.gender">
                    <x-error field="input.gender" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Status</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.status">
                    <x-error field="input.status" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Citizenship</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.citizenship">
                    <x-error field="input.citizenship" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Date of Birth</label>
                    <input class="form-control text-sm" required style="border: 1px solid black" type="date" wire:model="input.birthday">
                    <x-error field="input.birthday" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Birthplace</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.birth_place">
                    <x-error field="input.birth_place" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Religion</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.religion">
                    <x-error field="input.religion" />
                </div>
            </div>
        </div>

        <div class="mb-5">
            <div class="row">
                <div class="col-12">
                    <label class="text-lg" style="color: #0A0863">Parents Information</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Father Name</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.father_name">
                    <x-error field="input.father_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Contact No.</label>
                    <input class="form-control text-sm" required style="border: 1px solid black" type="tel" wire:model="input.father_contact">
                    <x-error field="input.father_contact" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Mother Name</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.mother_name">
                    <x-error field="input.mother_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Contact No.</label>
                    <input class="form-control text-sm" required style="border: 1px solid black" type="tel" wire:model="input.mother_contact">
                    <x-error field="input.mother_contact" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Guardian Name</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.guardian_name">
                    <x-error field="input.guardian_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Contact No.</label>
                    <input class="form-control text-sm" required style="border: 1px solid black" type="tel" wire:model="input.guardian_contact">
                    <x-error field="input.guardian_contact" />
                </div>
            </div>
        </div>

        <!---------------------------->
        <div class="mb-5">
            <div class="row mb-2 mt-4">
                <div class="col-12">
                    <label class="text-lg" style="font-size: 22px; color: #0A0863">Address</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Street No. / Unit No.</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.street_no">
                    <x-error field="input.street_no" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Street</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.street">
                    <x-error field="input.street" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Subd. / Village / Bldg.</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.subdivision">
                    <x-error field="input.subdivision" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Barangay</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.barangay">
                    <x-error field="input.barangay" />
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">City / Municipality</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.city">
                    <x-error field="input.city" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Province</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.province">
                    <x-error field="input.province" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Zip Code</label>
                    <input class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="number" wire:model="input.zipcode">
                    <x-error field="input.zipcode" />
                </div>
            </div>
        </div>

        <!---------------------------->
        <div class="mb-5">
            <div class="row mb-2 mt-4">
                <div class="col-12">
                    <label class="text-lg" style="color: #0A0863">Contact Details</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Telephone No.</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="number" wire:model="input.tel_no">
                    <x-error field="input.tel_no" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Mobile No.</label>
                    <input class="form-control text-sm" required style="border: 1px solid black" type="number" wire:model="input.mobile_no">
                    <x-error field="input.mobile_no" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Email Address</label>
                    <input class="form-control text-sm" required style="border: 1px solid black" type="email" wire:model="input.email">
                    <x-error field="input.email" />
                </div>
            </div>
        </div>

        <!---------------------------->
        <div class="mb-5">
            <div class="row mb-2 mt-4">
                <div class="col-md-10">
                    <label class="text-lg" style="color: #0A0863">Educational History</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <label class="text-lg" class="text-lg">Primary School</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Name of School</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.primary_school">
                    <x-error field="input.primary_school" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Start</label>
                    <input class="form-control text-sm" max="2023" maxlength="4" min="1900" minlength="4" required style="border: 1px solid black" type="number" wire:model="input.primary_start">
                    <x-error field="input.primary_start" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Ends</label>
                    <input class="form-control text-sm" max="2023" maxlength="4" min="1900" minlength="4" required style="border: 1px solid black" type="number" wire:model="input.primary_end">
                    <x-error field="input.primary_end" />
                </div>
            </div>

            <div class="row mb-2 mt-4">
                <div class="col-12">
                    <label class="text-lg">Junior High School</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Name of School</label>
                    <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.junior_school">
                    <x-error field="input.junior_school" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Start</label>
                    <input class="form-control text-sm" max="2023" maxlength="4" min="1900" minlength="4" required style="border: 1px solid black" type="number" wire:model="input.junior_start">
                    <x-error field="input.junior_start" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Ends</label>
                    <input class="form-control text-sm" max="2023" maxlength="4" min="1900" minlength="4" required style="border: 1px solid black" type="number" wire:model="input.junior_end">
                    <x-error field="input.junior_end" />
                </div>
            </div>
        </div>

        <!---------------------------->
        <div class="mb-5">
            <div class="row mb-2 mt-4">
                <div class="col-12">
                    <label class="text-lg" style="color: #0A0863">Basic Medical Information</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <label class="text-md">Medical Conditions</label>
                </div>
            </div>

            <div class="row mb-4 ml-3 text-sm">
                @foreach ($medical_conditions as $med)
                    <div class="col-8">
                        <input class="form-check-input" id="cbPass" type="checkbox" value="{{ $med }}" wire:model="my_medical_conditions">{{ $med }}
                    </div>
                @endforeach
                <div class="col-12">
                    <input class="form-check-input" id="cbPass" type="checkbox"> Others (please specify)
                </div>
            </div>

            <div class="row mb-2 ml-3">
                <textarea class="form-control text-sm" style="border: 1px solid black; background-color: rgb(214, 211, 211); height: 100px;" wire:model="other_conditions"></textarea>
                <x-error field="input.medical_conditions" />
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-12">
                    <label class="text-sm">Allergies (Food, medication and/or environmental)</label>
                </div>
            </div>

            <div class="row mb-2 ml-3">
                <textarea class="form-control text-sm" style="border: 1px solid black; background-color: white; height: 100px;" wire:model="input.allergies"></textarea>
                <x-error field="input.allergies" />
            </div>
        </div>

        <!---------------------------->
        <div class="row mb-2 mt-4">
            <div class="col-12">
                <label class="text-lg">Emergency Contact Details</label>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">First Name</label>
                <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.emergency_first_name">
                <x-error field="input.emergency_first_name" />
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Last Name</label>
                <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.emergency_last_name">
                <x-error field="input.emergency_last_name" />
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Contact No.</label>
                <input class="form-control text-sm" required style="border: 1px solid black" type="tel" wire:model="input.emergency_contact">
                <x-error field="input.emergency_contact" />
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Relationship</label>
                <input class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text" wire:model="input.emergency_relationship">
                <x-error field="input.emergency_relationship" />
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12">
                <button class="btn btn-block btn-primary text-sm border-0" style="background-color: #0A0863;" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
