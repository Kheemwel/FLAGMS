<div class="pl-3 pr-3">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12 pl-3 pt-2">
                <label class="text-xl font-weight-bold">Individual Inventory Report</label>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="row">
        <div class="col-8 ml-4 mr-4 mt-4">
            <label class="text-xl" style="color: #0A0863">Student Information</label>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Name: </label>
            <p class="text-lg">{{ $inventory->first_name }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">MiddleName: </label>
            <p class="text-lg">{{ $inventory->middle_name }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">LastName: </label>
            <p class="text-lg">{{ $inventory->last_name }}</p>
        </div>
        <div class="col-1 ml-4 mr-4">
            <label class="text-lg">Suffix: </label>
            <p class="text-lg">{{ $inventory->suffix_name }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">LRN: </label>
            <p class="text-lg">{{ $inventory->lrn }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Gender: </label>
            <p class="text-lg">{{ $inventory->gender }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Status: </label>
            <p class="text-lg">{{ $inventory->status }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Citizenship</label>
            <p class="text-lg">{{ $inventory->citizenship }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Date of Birth</label>
            <p class="text-lg">{{ $inventory->birthday }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Birthplace</label>
            <p class="text-lg">{{ $inventory->birth_place }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Religion</label>
            <p class="text-lg">{{ $inventory->religion }}</p>
        </div>
    </div>

    <div class="mb-5">
        <div class="row">
            <div class="col-12 ml-4 mr-4">
                <label class="text-xl" style="color: #0A0863">Parents Information</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-sm-6 ml-4 mr-4">
                <label class="text-lg">Father Name</label>
                <p class="text-lg">{{ $inventory->father_name }}</p>
            </div>
            <div class="col-md-3 col-sm-6 ml-4 mr-4">
                <label class="text-lg">Contact No.</label>
                <p class="text-lg">{{ $inventory->father_contact }}</p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-sm-6 ml-4 mr-4">
                <label class="text-lg">Mother Name</label>
                <p class="text-lg">{{ $inventory->mother_name }}</p>
            </div>
            <div class="col-md-3 col-sm-6 ml-4 mr-4">
                <label class="text-lg">Contact No.</label>
                <p class="text-lg">{{ $inventory->mother_contact }}</p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-sm-6 ml-4 mr-4">
                <label class="text-lg">Guardian Name</label>
                <p class="text-lg">{{ $inventory->guardian_name }}</p>
            </div>
            <div class="col-md-3 col-sm-6 ml-4 mr-4s">
                <label class="text-lg">Contact No.</label>
                <p class="text-lg">{{ $inventory->guardian_contact }}</p>
            </div>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8 ml-4 mr-4">
            <label class="text-xl" style="font-size: 22px; color: #0A0863">Address</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Street No. / Unit No.</label>
            <p class="text-lg">{{ $inventory->street_no }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Street</label>
            <p class="text-lg">{{ $inventory->street }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Subdivision / Village / Bldg.</label>
            <p class="text-lg">{{ $inventory->subdivision }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Barangay</label>
            <p class="text-lg">{{ $inventory->barangay }}</p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">City / Municipality</label>
            <p class="text-lg">{{ $inventory->city }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Province</label>
            <p class="text-lg">{{ $inventory->province }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Zip Code</label>
            <p class="text-lg">{{ $inventory->zipcode }}</p>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8 ml-4 mr-4">
            <label class="text-xl" style="color: #0A0863">Contact Details</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Telephone No.</label>
            <p class="text-lg">{{ $inventory->tel_no }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label>Mobile No.</label>
            <p class="text-lg">{{ $inventory->mobile_no }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Email Address</label>
            <p class="text-lg">{{ $inventory->email }}</p>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8 ml-4 mr-4">
            <label class="text-xl" style="color: #0A0863">Educational History</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-8 ml-4 mr-4">
            <label class="text-lg" class="text-lg">Primary School</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Name of School</label>
            <p class="text-lg">{{ $inventory->primary_school }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">School Year Start</label>
            <p class="text-lg">{{ $inventory->primary_start }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">School Year Ends</label>
            <p class="text-lg">{{ $inventory->primary_end }}</p>
        </div>
    </div>

    <div class="row mb-2 mt-4">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Junior High School</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Name of School</label>
            <p class="text-lg">{{ $inventory->junior_school }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">School Year Start</label>
            <p class="text-lg">{{ $inventory->junior_start }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">School Year Ends</label>
            <p class="text-lg">{{ $inventory->junior_end }}</p>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8 ml-4 mr-4">
            <label class="text-xl" style="color: #0A0863">Basic Medical Information</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-8 ml-4 mr-4">
            <label class="text-lg">Medical Conditions</label>
        </div>
    </div>

    <div class="row mb-2 ml-3">
        <p class="text-lg">{{ $inventory->medical_conditions }}</p>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8 ml-4 mr-4">
            <label class="text-lg">Allergies (Food, medication and/or environmental)</label>
        </div>
    </div>

    <div class="row mb-2 ml-3">
        <p class="text-lg">{{ $inventory->allergies }}</p>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8 ml-4 mr-4">
            <label class="text-xl">Emergency Contact Details</label>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">First Name</label>
            <p class="text-lg">{{ $inventory->emergency_first_name }}</p>
        </div>
        <div class="col-3 ml-4 mr-4">
            <label class="text-lg">Last Name</label>
            <p class="text-lg">{{ $inventory->emergency_last_name }}</p>
        </div>
        <div class="col-2 ml-4 mr-4">
            <label class="text-lg">Contact No.</label>
            <p class="text-lg">{{ $inventory->emergency_contact }}</p>
        </div>
        <div class="col-2 ml-4 mr-4">
            <label class="text-lg">Relationship</label>
            <p class="text-lg">{{ $inventory->emergency_relationship }}</p>
        </div>
    </div>
</div>
