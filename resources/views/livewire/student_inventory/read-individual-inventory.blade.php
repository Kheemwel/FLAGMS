<div class="pl-3 pr-3">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12 pl-3 pt-2">
                <h1 class="font-weight-bold">Individual Inventory Report</h1>
            </div>
        </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <div class="row">
        <div class="col-8">
            <label class="text-lg" style="color: #0A0863">Student Information</label>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">
            <label class="text-sm">Name: </label>
            <p class="text-sm">{{ $inventory->first_name }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">MiddleName: </label>
            <p class="text-sm">{{ $inventory->middle_name }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">LastName: </label>
            <p class="text-sm">{{ $inventory->last_name }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Suffix: </label>
            <p class="text-sm">{{ $inventory->suffix_name }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">
            <label class="text-sm">LRN: </label>
            <p class="text-sm">{{ $inventory->lrn }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Gender: </label>
            <p class="text-sm">{{ $inventory->gender }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Status: </label>
            <p class="text-sm">{{ $inventory->status }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Citizenship</label>
            <p class="text-sm">{{ $inventory->citizenship }}</p>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-3">
            <label class="text-sm">Date of Birth</label>
            <p class="text-sm">{{ $inventory->birthday }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Birthplace</label>
            <p class="text-sm">{{ $inventory->birth_place }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Religion</label>
            <p class="text-sm">{{ $inventory->religion }}</p>
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
                <p class="text-sm">{{ $inventory->father_name }}</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Contact No.</label>
                <p class="text-sm">{{ $inventory->father_contact }}</p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Mother Name</label>
                <p class="text-sm">{{ $inventory->mother_name }}</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Contact No.</label>
                <p class="text-sm">{{ $inventory->mother_contact }}</p>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Guardian Name</label>
                <p class="text-sm">{{ $inventory->guardian_name }}</p>
            </div>
            <div class="col-md-3 col-sm-6">
                <label class="text-sm">Contact No.</label>
                <p class="text-sm">{{ $inventory->guardian_contact }}</p>
            </div>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-lg" style="font-size: 22px; color: #0A0863">Address</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label class="text-sm">Street No. / Unit No.</label>
            <p class="text-sm">{{ $inventory->street_no }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Street</label>
            <p class="text-sm">{{ $inventory->street }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Subdivision / Village / Bldg.</label>
            <p class="text-sm">{{ $inventory->subdivision }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Barangay</label>
            <p class="text-sm">{{ $inventory->barangay }}</p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label class="text-sm">City / Municipality</label>
            <p class="text-sm">{{ $inventory->city }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Province</label>
            <p class="text-sm">{{ $inventory->province }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Zip Code</label>
            <p class="text-sm">{{ $inventory->zipcode }}</p>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-lg" style="color: #0A0863">Contact Details</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-3">
            <label class="text-sm">Telephone No.</label>
            <p class="text-sm">{{ $inventory->tel_no }}</p>
        </div>
        <div class="col-3">
            <label>Mobile No.</label>
            <p class="text-sm">{{ $inventory->mobile_no }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Email Address</label>
            <p class="text-sm">{{ $inventory->email }}</p>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-lg" style="color: #0A0863">Educational History</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-8">
            <label class="text-lg" class="text-lg">Primary School</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-8">
            <label class="text-sm">Name of School</label>
            <p class="text-sm">{{ $inventory->primary_school }}</p>
        </div>
        <div class="col-2">
            <label class="text-sm">School Year Start</label>
            <p class="text-sm">{{ $inventory->primary_start }}</p>
        </div>
        <div class="col-2">
            <label class="text-sm">School Year Ends</label>
            <p class="text-sm">{{ $inventory->primary_end }}</p>
        </div>
    </div>

    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-lg">Junior High School</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-8">
            <label class="text-sm">Name of School</label>
            <p class="text-sm">{{ $inventory->junior_school }}</p>
        </div>
        <div class="col-2">
            <label class="text-sm">School Year Start</label>
            <p class="text-sm">{{ $inventory->junior_start }}</p>
        </div>
        <div class="col-2">
            <label class="text-sm">School Year Ends</label>
            <p class="text-sm">{{ $inventory->junior_end }}</p>
        </div>
    </div>

    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-lg">Senior High School</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-8">
            <label class="text-sm">Name of School</label>
            <p class="text-sm">{{ $inventory->senior_school }}</p>
        </div>
        <div class="col-2">
            <label class="text-sm">School Year Start</label>
            <p class="text-sm">{{ $inventory->senior_start }}</p>
        </div>
        <div class="col-2">
            <label class="text-sm">School Year Ends</label>
            <p class="text-sm">{{ $inventory->senior_end }}</p>
        </div>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-lg" style="color: #0A0863">Basic Medical Information</label>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-8">
            <label class="text-md">Medical Conditions</label>
        </div>
    </div>

    <div class="row mb-2 ml-3">
        <p class="text-sm">{{ $inventory->medical_conditions }}</p>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-md">Allergies (Food, medication and/or environmental)</label>
        </div>
    </div>

    <div class="row mb-2 ml-3">
        <p class="text-sm">{{ $inventory->allergies }}</p>
    </div>

    <!---------------------------->
    <div class="row mb-2 mt-4">
        <div class="col-8">
            <label class="text-lg">Emergency Contact Details</label>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-3">
            <label class="text-sm">First Name</label>
            <p class="text-sm">{{ $inventory->emergency_first_name }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Last Name</label>
            <p class="text-sm">{{ $inventory->emergency_last_name }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Contact No.</label>
            <p class="text-sm">{{ $inventory->emergency_contact }}</p>
        </div>
        <div class="col-3">
            <label class="text-sm">Relationship</label>
            <p class="text-sm">{{ $inventory->emergency_relationship }}</p>
        </div>
    </div>
</div>
