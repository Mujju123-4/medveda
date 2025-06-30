@extends('master')
@section('main')
    <div class="side-app">
        <div class="card">
            <h1 class="details-header">Student Registration</h1>
            @if (session('success'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    style="padding: 6px;color: white;border: 1px solid white;margin-bottom: 20px;border-radius: 5px;">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    style="padding: 6px;color: white;border: 1px solid white;margin-bottom: 20px;border-radius: 5px;">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('admin.add.students') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4 p-4" style="margin: 15px;">
                    <div class="col-4 mt-4">
                        <label class="text-dark ">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Mother Name</label>
                        <input type="text" class="form-control" name="mother_name" placeholder="Mother Name" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Last Name</label>
                        <input type="text" class="form-control" name="surname_name" placeholder="Last Name" required />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Emial</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Contact</label>
                        <input type="text" class="form-control" name="contact" placeholder="Contact" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">University</label>
                        <select class="form-control" name="university" id="university" required>
                            <option>Select</option>
                            <option value="SEU">SEU</option>
                            <option value="East West">East West</option>
                            <option value="Avicenna university">Avicenna university</option>
                        </select>
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark">Agent</label>
                        <select class="form-control" name="agentvalue" id="agent-select" required>
                            <option value="">Select</option>
                            @foreach ($Agents as $agent)
                                <option value="{{ $agent->name }}">{{ $agent->name }}</option>
                            @endforeach

                            <option value="others">Others</option>
                        </select>

                        <input type="text" class="form-control mt-2 d-none" id="agent-input" name="agent"
                            placeholder="Agent Name" />

                        <!-- Hidden field to hold selected agent if not 'others' -->
                        <input type="hidden" id="agent-hidden" name="agent" />
                    </div>
                    <div class="col-4 mt-4">
                        <label class="text-dark ">Student Type</label>
                        <select class="form-control" name="type" id="type" required>
                            <option>Select</option>
                            <option value="Freshmen">Freshmen Student</option>
                            <option value="Transfer">Transfer Student</option>
                            <option value="Master">Master Student</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex p-2 col-12" style="justify-content: end;">
                    <button type="submit" class="submit-button">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('#agent-select').on('change', function() {
            const selectedAgent = $(this).val();
            console.log("selectedAgent:", selectedAgent);

            if (selectedAgent === "others") {
                $('#agent-input').removeClass('d-none').val('').prop('required', true);
                $('#agent-hidden').val('');
                // $("#agent-select").hide();
            } else {
                $('#agent-input').addClass('d-none').prop('required', false);
                $('#agent-hidden').val(selectedAgent);
            }
        });

        // Optional: update hidden input when user types custom agent name
        $('#agent-input').on('input', function() {
            $('#agent-hidden').val($(this).val());
        });
    </script>
@endsection
