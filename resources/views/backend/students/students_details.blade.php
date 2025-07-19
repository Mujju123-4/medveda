@extends('master')

<style>
    .tab-button {
        height: 35px;
        width: 120px;
        background: rgb(255, 255, 255);
        justify-content: center;
        align-items: center;
        display: flex;
        cursor: pointer;
        margin-right: 5px;
        border-radius: 5px;
        border: 1px solid #9C9C9C;
    }

    .tab-button.active {
        background: #fdffff;
        font-weight: bold;
        border: 1px solid #297ABC;
        color: black;
    }

    .tab-content {
        display: none;
        margin-top: 20px;
    }

    .tab-content.active {
        display: block;
    }

    .tab-div {
        border-bottom: 1px solid #297ABC;
        margin-left: 2px !important;
        margin-right: 2px !important;
    }
</style>

@section('main')
    <div class="side-app">
        <div class="card p-4">
            <h1 class="details-header">Students Details</h1>
            <div class="row mb-3 pt-2 pb-2 tab-div flex-nowrap overflow-auto" style="white-space: nowrap;">
                <div class="tab-button active" data-tab="basic">Basic Details</div>
                <div class="tab-button" data-tab="courses">Courses</div>
                <div class="tab-button" data-tab="documents">Documents</div>
                <div class="tab-button" data-tab="translataion">Translataion</div>
                <div class="tab-button" data-tab="acceptence">Acceptence</div>
                <div class="tab-button" data-tab="eqe">EQE</div>
                <div class="tab-button" data-tab="ministerorder">Minister Order</div>
                <div class="tab-button" data-tab="other">Others</div>
            </div>



            {{-- Basic --}}
            <div id="basic" class="tab-content active container">
                <div class="row">
                    <div class="col-4 mt-4">
                        <label class="text-dark ">First Name</label>
                        <input type="text" class="form-control" value="{{ $student->first_name }}" name="first_name"
                            id="first_name" placeholder="First Name" required />
                        <input type="hidden" id="student-id" value="{{ $student->id }}" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Middle Name</label>
                        <input type="text" class="form-control" value="{{ $student->middle_name }}" name="middle_name"
                            id="middle_name" placeholder="Middle Name" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Mother Name</label>
                        <input type="text" class="form-control" value="{{ $student->mother_name }}" name="mother_name"
                            id="mother_name" placeholder="Mother Name" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Last Name</label>
                        <input type="text" class="form-control" value="{{ $student->surname_name }}" name="surname_name"
                            id="surname_name" placeholder="Last Name" required />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Emial</label>
                        <input type="text" class="form-control" value="{{ $student->email }}" name="email"
                            id="email" placeholder="Email" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Contact</label>
                        <input type="text" class="form-control" value="{{ $student->contact }}" name="contact"
                            id="contact" placeholder="Contact" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">University</label>
                        <input type="text" class="form-control" value="{{ $student->university }}" readonly />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Agent</label>
                        <input type="text" class="form-control" value="{{ $student->agent }}" readonly />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Student Type</label>
                        <input type="text" class="form-control" value="{{ $student->type }}" readonly />
                    </div>
                    <div class="d-flex p-2 col-12" style="justify-content: end;">
                        <button onclick="updateStudent()" class="submit-button">Submit</button>
                    </div>
                </div>
            </div>

            <?php $studentCourse; ?>

            {{-- Courses --}}
            <form id="course-upload-form" enctype="multipart/form-data">
                @csrf
                <div id="courses" class="tab-content container">
                    <div class="row">
                        <div class="col-4 mt-4">
                            <label class="text-dark">NEET Qualified?</label>
                            <select class="form-control" name="neet_qualified" id="neet-qualified-select">
                                <option value="Yes" {{ $studentCourse['neet'] === 'Yes' ? 'selected' : '' }}>Yes
                                </option>
                                <option value="No" {{ $studentCourse['neet'] === 'No' ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="col-4 mt-4">
                            <label class="text-dark">Select Courses</label>
                            <select class="form-control" id="course-select">
                                <option value="">Select</option>
                                @foreach ($cources as $course)
                                    <option value="{{ $course->course }} "
                                        {{ $studentCourse['course'] === $course->course ? 'selected' : '' }}>
                                        {{ $course->course }}</option>
                                @endforeach
                                <option value="other">Other</option>
                            </select>
                            <input type="hidden" id="course-hidden" name="course" />
                        </div>

                        <div class="col-4 mt-4">
                            <label id="hidden-title" class="text-dark d-none">Can't Find Your Course? Type Here</label>
                            <input type="text" class="form-control d-none" id="course-input"
                                placeholder="Course Name" />
                        </div>

                        <div class="col-4 mt-4">
                            <label class="text-dark">Qualifying Test</label>
                            <select class="form-control" name="qualifyingtest" id="qualifying-test">
                                <option value="">Select</option>
                                <option value="Interview"
                                    {{ $studentCourse['qualifyingtest'] === 'Interview' ? 'selected' : '' }}>Interview
                                </option>
                                <option value="English Written Exam"
                                    {{ $studentCourse['qualifyingtest'] === 'English Written Exam' ? 'selected' : '' }}>
                                    English Written Exam</option>
                            </select>
                        </div>

                        <div class="col-4 mt-4">
                            <label class="text-dark">Pass / Failed</label>
                            <select class="form-control" name="qualifying_status" id="qualifying-status">
                                <option value="">Select</option>
                                <option value="Pass"
                                    {{ $studentCourse['qualifying_status'] === 'Pass' ? 'selected' : '' }}>Pass</option>
                                <option value="Failed"
                                    {{ $studentCourse['qualifying_status'] === 'Failed' ? 'selected' : '' }}>Failed
                                </option>
                            </select>
                        </div>

                        <div id="qualifying-pass-div" class="col-4 mt-4 d-none">
                            <input type="file" name="qualification_document" id="document" style="display: none;">
                            <button id="upload-button" type="button" class="btn btn-primary d-none"
                                style="margin-top: 27px;width: 100px;" onclick="$('#document').click();">
                                <i class="fa fa-upload"></i> Upload
                            </button>

                            <button id="reschedule-button" type="button" class="btn btn-primary d-none"
                                style="margin-top: 27px;">
                                <i class="fa-solid fa-rotate-right"></i> Reschedule Test
                            </button>

                            <button id="view-button" type="button" class="btn btn-primary d-none"
                                data-doc="{{ asset($studentCourse['qualification_document'] ?? '') }}"
                                style="margin-top: 27px;width: 100px;">
                                <i class="fa-solid fa-eye"></i> View
                            </button>

                            <button id="delete-button" type="button" class="btn btn-primary d-none"
                                style="margin-top: 27px;width: 100px;">
                                <i class="fa-solid fa-trash-can-arrow-up"></i> Delete
                            </button>
                        </div>
                    </div>

                    <div class="d-flex p-2 col-12" style="justify-content: end;">
                        <button type="button" onclick="UploadCourses()" class="submit-button">Submit</button>
                    </div>
                </div>
            </form>

            {{-- Documents --}}
            <div id="documents" class="tab-content">
                <div class="row">
                    <div class="col-3 mt-4">
                        <label class="text-dark ">12th Marksheet </label>
                        <select class="form-control" name="hscmarksheet" id="12-marksheet">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="hsc-pass-div" class="col-3 mt-4 d-none">
                        <input type="file" name="qualification_document" id="document" style="display: none;">
                        <button id="upload-button" type="button" class="btn btn-primary"
                            style="margin-top: 27px;width: 100px;" onclick="$('#document').click();">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                        <button id="view-button" type="button" class="btn btn-primary"
                            data-doc="{{ asset($studentCourse['qualification_document'] ?? '') }}"
                            style="margin-top: 27px;width: 100px;">
                            <i class="fa-solid fa-eye"></i> View
                        </button>
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Passport</label>
                        <select class="form-control" name="passport" id="passport-select">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div id="passport-div" class="col-3 mt-4 d-none">
                        <input type="file" name="qualification_document" id="document" style="display: none;">
                        <button id="upload-button" type="button" class="btn btn-primary"
                            style="margin-top: 27px;width: 100px;" onclick="$('#document').click();">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                        <button id="view-button" type="button" class="btn btn-primary"
                            data-doc="{{ asset($studentCourse['qualification_document'] ?? '') }}"
                            style="margin-top: 27px;width: 100px;">
                            <i class="fa-solid fa-eye"></i> View
                        </button>
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Passport Number</label>
                        <input class="form-control" id="passport-number" placeholder="Enter Passport Number" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Surname (English)</label>
                        <input class="form-control" id="surname-english" placeholder="Enter Surname" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Surname (Georgia)</label>
                        <input class="form-control" id="surname-georgia" placeholder="Enter Surname" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Name (English)</label>
                        <input class="form-control" id="name-english" placeholder="Enter Name" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Name (Georgia)</label>
                        <input class="form-control" id="name-georgia" placeholder="Enter Name" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Nationality (English)</label>
                        <input class="form-control" id="nationality-english" placeholder="Enter Nationality" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Nationality (Georgia)</label>
                        <input class="form-control" id="nationality-georgia" placeholder="Enter Nationality" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Sex</label>
                        <input class="form-control" id="sex" placeholder="Enter Sex" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">DOB</label>
                        <input type="date" class="form-control" id="dob" placeholder="Enter DOB"
                            onchange="calculateAge()" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Place of Birth</label>
                        <input class="form-control" id="birth_place" placeholder="Enter" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Date of Issue</label>
                        <input type="date" class="form-control" id="issue_date" placeholder="Enter" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Expiry Date</label>
                        <input type="date" class="form-control" id="expiry_date" placeholder="Enter" />
                    </div>

                    <div class="col-3 mt-4">
                        <label class="text-dark ">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter" />
                    </div>
                    <div class="col-3 mt-4">
                        <label class="text-dark ">Spouse Name</label>
                        <input type="text" class="form-control" id="spouse_name" placeholder="Enter" />
                    </div>
                    <div class="col-3 mt-4">
                        <label class="text-dark ">Mother Name</label>
                        <input type="text" class="form-control" id="Mother_name" placeholder="Enter" />
                    </div>
                    <div class="col-12 mt-4">
                        <label class=""><strong>Parents Passport</strong></label>
                    </div>
                    <div class="col-3">
                        <label class="text-dark ">Passport</label>
                        <select class="form-control" id="parent-passport-select">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div id="parent-passport-div" class="col-3 d-none">
                        <input type="file" name="qualification_document" id="document" style="display: none;">
                        <button id="upload-button" type="button" class="btn btn-primary"
                            style="margin-top: 27px;width: 100px;" onclick="$('#document').click();">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>

                    <div class="col-3">
                        <label class="text-dark ">Student Birth Certificate</label>
                        <select class="form-control" id="birth-certificate-select">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div id="student-certificate-div" class="col-3 d-none">
                        <input type="file" name="qualification_document" id="document" style="display: none;">
                        <button id="upload-button" type="button" class="btn btn-primary"
                            style="margin-top: 27px;width: 100px;" onclick="$('#document').click();">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>


                    <div class="col-3">
                        <label class="text-dark ">Affidavit</label>
                        <select class="form-control" id="affidavit-select">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div id="affidavit-div" class="col-3 d-none">
                        <input type="file" id="document" style="display: none;">
                        <button id="upload-button" type="button" class="btn btn-primary"
                            style="margin-top: 27px;width: 100px;" onclick="$('#document').click();">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>

                    <div class="col-3">
                        <button type="button" class="btn btn-primary" style="margin-top: 27px;width: 162px;">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i> Proceed to Approve
                        </button>
                    </div>

                </div>
            </div>

            {{-- Translataion --}}
            <div id="translataion" class="tab-content">
                <div class="row">
                    <div class="col-3">
                        <label class="text-dark ">Translataion Requested</label>
                        <select class="form-control" id="translation-select">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="text-dark ">Number of Copies</label>
                        <input type="number" class="form-control" id="number-copies" placeholder="Enter" />
                    </div>

                    <div class="flex items-center space-x-6 col-3" style="text-align: center;top: 35px;">
                        <!-- Received -->
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="status" value="received"
                                class="appearance-none w-4 h-4 border border-gray-400 rounded-full checked:bg-emerald-500 checked:ring-2 checked:ring-emerald-500 checked:ring-offset-2 focus:outline-none">
                            <span class="ml-2">Received</span>
                        </label>

                        <!-- Not Received -->
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="status" value="not-received"
                                class="appearance-none w-4 h-4 border border-gray-400 rounded-full checked:bg-emerald-500 checked:ring-2 checked:ring-emerald-500 checked:ring-offset-2 focus:outline-none">
                            <span class="ml-2">Not Received</span>
                        </label>
                    </div>

                    <div id="translated-div" class="col-3 d-none">
                        <input type="file" name="" id="document" style="display: none;">
                        <button id="upload-button" type="button" class="btn btn-primary"
                            style="margin-top: 27px;width: 100px;" onclick="$('#document').click();">
                            <i class="fa fa-upload"></i> Upload
                        </button>
                    </div>

                    <div class="d-flex p-2 col-12" style="justify-content: end;">
                        <button onclick="" class="submit-button">Submit</button>
                    </div>

                </div>
            </div>

            {{-- Acceptence Letter  --}}
        </div>

    </div>
    </div>
    <script>
        // This For View Document
        $('#view-button').on('click', function() {
            const docUrl = $(this).data('doc');

            if (docUrl) {
                window.open(docUrl, '_blank');
            } else {
                toastr.warning("Document not available.");
            }
        });

        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', function() {
                const tab = this.getAttribute('data-tab');
                // Remove active class from all buttons
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                // Hide all content
                document.querySelectorAll('.tab-content').forEach(content => content.classList.remove(
                    'active'));
                document.getElementById(tab).classList.add('active');
            });
        });

        // Update Students Code 
        function updateStudent() {
            var studentid = $('#student-id').val();
            var firstname = $('#first_name').val();
            var middlename = $('#middle_name').val();
            var mothername = $('#mother_name').val();
            var surnamename = $('#surname_name').val();
            var email = $('#email').val();
            var contact = $('#contact').val();

            $.ajax({
                url: "{{ route('admin.update.student') }}",
                method: "POST",
                data: {
                    studentid: studentid,
                    firstname: firstname,
                    middlename: middlename,
                    mothername: mothername,
                    surnamename: surnamename,
                    email: email,
                    contact: contact,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response);
                    if (response.status === 200) {
                        toastr.success('Student updated successfully');
                    } else {
                        toastr.error('Something Wrong');
                    }
                },
                error: function(error) {
                    console.log(error);
                }

            })

        }

        // Students End

        // Courses Code 

        $('#course-select').on('change', function() {
            const selectedValue = $(this).val();
            if (selectedValue === "other") {
                $('#course-input').removeClass('d-none').val('').prop('required', true);
                $('#course-hidden').val('');
                $("#hidden-title").show();
            } else {
                $('#course-input').addClass('d-none').prop('required', false);
                $('#course-hidden').val(selectedValue);
                $("#hidden-title").hide();
            }
        });
        // Optional: update hidden input when user types custom agent name
        $('#course-input').on('input', function() {
            $('#course-hidden').val($(this).val());
        });

        $('#qualifying-status').on('change', function() {
            const selectedValue = $(this).val();
            const qualifyingtest = $("#qualifying-test").val();
            if (qualifyingtest === "Interview") {
                if (selectedValue === "Pass") {
                    $('#qualifying-pass-div').removeClass('d-none');
                    $('#upload-button').removeClass('d-none');
                    $('#view-button').removeClass('d-none');
                    $('#delete-button').removeClass('d-none');
                    $('#reschedule-button').addClass('d-none');
                } else if (selectedValue === "Failed") {
                    $('#qualifying-pass-div').removeClass('d-none');
                    $('#reschedule-button').removeClass('d-none');
                    $('#upload-button').addClass('d-none');
                    $('#view-button').addClass('d-none');
                    $('#delete-button').addClass('d-none');
                } else {
                    $('#qualifying-pass-div').addClass('d-none');
                }
            } else if (qualifyingtest === "English Written Exam") {
                if (selectedValue === "Pass") {
                    $('#qualifying-pass-div').removeClass('d-none');
                    $('#upload-button').removeClass('d-none');
                    $('#view-button').removeClass('d-none');
                    $('#delete-button').removeClass('d-none');
                    $('#reschedule-button').addClass('d-none');
                } else if (selectedValue === "Failed") {
                    $('#qualifying-pass-div').removeClass('d-none');
                    $('#reschedule-button').removeClass('d-none');
                    $('#upload-button').removeClass('d-none');
                    $('#view-button').addClass('d-none');
                    $('#delete-button').addClass('d-none');
                }
            } else {
                $('#qualifying-pass-div').addClass('d-none');
            }
        });

        function UploadCourses() {
            let formData = new FormData(document.getElementById('course-upload-form'));

            // Add hidden course field logic
            const courseSelect = $('#course-select').val();
            const courseInput = $('#course-input').val();
            var studentid = $('#student-id').val();

            if (courseSelect === 'other') {
                formData.set('course', courseInput);
            } else {
                formData.set('course', courseSelect);
            }

            formData.set('student_id', studentid);

            $.ajax({
                url: "{{ route('admin.update.student.course') }}", // Set your correct route here
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    // Optional: disable button or show spinner
                },
                success: function(response) {
                    // Success logic
                    if (response.status === 200) {
                        toastr.success(response.message);
                    } else {
                        toastr.error("Something went wrong!");
                    }
                },
                error: function(xhr) {
                    // Error logic
                    toastr.error("Something went wrong!");
                    console.error(xhr.responseText);
                }
            });
        }

        // Course End

        // Documents Code From Here
        $('#12-marksheet').on('change', function() {
            const selectedValue = $(this).val();
            if (selectedValue === "Yes") {
                $('#hsc-pass-div').removeClass('d-none');
            } else {
                $('#hsc-pass-div').addClass('d-none');
            }
        });

        // Passport 
        $('#passport-select').on('change', function() {
            const selectedValue = $(this).val();
            if (selectedValue === "Yes") {
                $('#passport-div').removeClass('d-none');
            } else {
                $('#passport-div').addClass('d-none');
            }
        });
    </script>

    {{-- Age Calculating Script --}}
    <script>
        function calculateAge() {
            const dob = document.getElementById('dob').value;
            if (dob) {
                const dobDate = new Date(dob);
                const today = new Date();
                let age = today.getFullYear() - dobDate.getFullYear();
                const m = today.getMonth() - dobDate.getMonth();
                if (m < 0 || (m === 0 && today.getDate() < dobDate.getDate())) {
                    age--;
                }
                document.getElementById('showAge').innerText = age + ' Years';
            } else {
                document.getElementById('showAge').innerText = '-';
            }
        }

        // Parent Passport Select
        $('#parent-passport-select').on('change', function() {
            const selectedValue = $(this).val();
            if (selectedValue === "Yes") {
                $('#parent-passport-div').removeClass('d-none');
            } else {
                $('#parent-passport-div').addClass('d-none');
            }
        });

        // Birth Certificate Select
        $('#birth-certificate-select').on('change', function() {
            const selectedValue = $(this).val();
            if (selectedValue === "Yes") {
                $('#student-certificate-div').removeClass('d-none');
            } else {
                $('#student-certificate-div').addClass('d-none');
            }
        });

        // Affidavit Select
        $('#affidavit-select').on('change', function() {
            const selectedValue = $(this).val();
            if (selectedValue === "Yes") {
                $('#affidavit-div').removeClass('d-none');
            } else {
                $('#affidavit-div').addClass('d-none');
            }
        });
    </script>

    {{-- Translated Script --}}
    <script>
        $('input[name="status"]').on('change', function() {
            const selectedValue = $('input[name="status"]:checked').val();
            console.log(selectedValue);

            if (selectedValue === "received") {
                $('#translated-div').removeClass('d-none');
            } else {
                $('#translated-div').addClass('d-none');
            }
        });
    </script>
@endsection
