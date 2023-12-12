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
                    <input wire:model="input.first_name" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.first_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Middle Name</label>
                    <input wire:model="input.middle_name" class="form-control text-sm" maxlength="255" style="border: 1px solid black" type="text">
                    <x-error field="input.middle_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm"> Last Name</label>
                    <input wire:model="input.last_name" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.last_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Suffix Name</label>
                    <input wire:model="input.suffix_name" class="form-control text-sm" maxlength="255" placeholder="(e.g, Jr.)" style="border: 1px solid black" type="text">
                    <x-error field="input.suffix_name" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">LRN</label>
                    <input wire:model="input.lrn" class="form-control text-sm" maxlength="12" minlength="12" required style="border: 1px solid black" type="text">
                    <x-error field="input.lrn" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Gender</label>
                    <input wire:model="input.gender" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.gender" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Status</label>
                    <input wire:model="input.status" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.status" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Citizenship</label>
                    <input wire:model="input.citizenship" class="form-control text-sm" maxlength="255" placeholder="(e.g, Jr.)" required style="border: 1px solid black" type="text">
                    <x-error field="input.citizenship" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Date of Birth</label>
                    <input wire:model="input.birthday" class="form-control text-sm" required style="border: 1px solid black" type="date">
                    <x-error field="input.birthday" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Birthplace</label>
                    <input wire:model="input.birth_place" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.birth_place" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Religion</label>
                    <input wire:model="input.religion" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
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
                    <input wire:model="input.father_name" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.father_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Contact No.</label>
                    <input wire:model="input.father_contact" class="form-control text-sm" required style="border: 1px solid black" type="tel">
                    <x-error field="input.father_contact" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Mother Name</label>
                    <input wire:model="input.mother_name" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.mother_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Contact No.</label>
                    <input wire:model="input.mother_contact" class="form-control text-sm" required style="border: 1px solid black" type="tel">
                    <x-error field="input.mother_contact" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Guardian Name</label>
                    <input wire:model="input.guardian_name" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.guardian_name" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Contact No.</label>
                    <input wire:model="input.guardian_contact" class="form-control text-sm" required style="border: 1px solid black" type="tel">
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
                    <input wire:model="input.street_no" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.street_no" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Street</label>
                    <input wire:model="input.street" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.street" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Subd. / Village / Bldg.</label>
                    <input wire:model="input.subdivision" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.subdivision" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Barangay</label>
                    <input wire:model="input.barangay" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.barangay" />
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">City / Municipality</label>
                    <input wire:model="input.city" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.city" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Province</label>
                    <input wire:model="input.province" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.province" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Zip Code</label>
                    <input wire:model="input.zipcode" class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="text">
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
                    <input wire:model="input.tel_no" class="form-control text-sm" style="border: 1px solid black" type="tel">
                    <x-error field="input.tel_no" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Mobile No.</label>
                    <input wire:model="input.mobile_no" class="form-control text-sm" required style="border: 1px solid black" type="tel">
                    <x-error field="input.mobile_no" />
                </div>
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Email Address</label>
                    <input wire:model="input.email" class="form-control text-sm" required style="border: 1px solid black" type="email">
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
                    <input wire:model="input.primary_school" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.primary_school" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Start</label>
                    <input wire:model="input.primary_start" class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="text">
                    <x-error field="input.primary_start" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Ends</label>
                    <input wire:model="input.primary_end" class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="text">
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
                    <input wire:model="input.junior_school" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.junior_school" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Start</label>
                    <input wire:model="input.junior_start" class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="text">
                    <x-error field="input.junior_start" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Ends</label>
                    <input wire:model="input.junior_end" class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="text">
                    <x-error field="input.junior_end" />
                </div>
            </div>

            <div class="row mb-2 mt-4">
                <div class="col-12">
                    <label class="text-lg">Senior High School</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-3 col-sm-6">
                    <label class="text-sm">Name of School</label>
                    <input wire:model="input.senior_school" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                    <x-error field="input.senior_school" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Start</label>
                    <input wire:model="input.senior_start" class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="text">
                    <x-error field="input.senior_start" />
                </div>
                <div class="col-md-3 col-sm-3">
                    <label class="text-sm">SY Ends</label>
                    <input wire:model="input.senior_end" class="form-control text-sm" maxlength="4" minlength="4" required style="border: 1px solid black" type="text">
                    <x-error field="input.senior_end" />
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
                    <input wire:model="my_medical_conditions" class="form-check-input" value="{{ $med }}" id="cbPass" type="checkbox">{{ $med }}
                </div>
                @endforeach
                <div class="col-12">
                    <input class="form-check-input" id="cbPass" type="checkbox"> Others (please specify)
                </div>
            </div>

            <div class="row mb-2 ml-3">
                <textarea wire:model="other_conditions" class="form-control text-sm" style="border: 1px solid black; background-color: rgb(214, 211, 211); height: 100px;"></textarea>
                <x-error field="input.medical_conditions" />
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-12">
                    <label class="text-sm">Allergies (Food, medication and/or environmental)</label>
                </div>
            </div>

            <div class="row mb-2 ml-3">
                <textarea wire:model="input.allergies" class="form-control text-sm" style="border: 1px solid black; background-color: white; height: 100px;"></textarea>
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
                <input wire:model="input.emergency_first_name" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                <x-error field="input.emergency_first_name"/>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Last Name</label>
                <input wire:model="input.emergency_last_name" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                <x-error field="input.emergency_last_name"/>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Contact No.</label>
                <input wire:model="input.emergency_contact" class="form-control text-sm" required style="border: 1px solid black" type="tel">
                <x-error field="input.emergency_contact"/>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Relationship</label>
                <input wire:model="input.emergency_relationship" class="form-control text-sm" maxlength="255" required style="border: 1px solid black" type="text">
                <x-error field="input.emergency_relationship"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12">
                <button class="btn btn-block btn-primary text-sm border-0" style="background-color: #0A0863;" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
