@extends('master')
<style>
    .student-table tbody tr td {
        text-align: start;
        vertical-align: middle;
    }

    #student-table td:last-child,
    #student-table th:last-child {
        text-align: center;
        vertical-align: middle;
    }

    td.dt-center {
        text-align: center;
    }
</style>
@section('main')
    <div class="side-app">
        <div class="card">
            <h1 class="details-header">Students</h1>
        </div>
        <div class="container p-4">
            <div class="row mb-3" style="justify-content: end;">
                <div class="col-md-2" style="margin-right: -15px;">
                    <select class="form-control" name="agent-filter" id="agent-select">
                        <option value="">Agent</option>
                        @foreach ($Agents as $agent)
                            <option value="{{ $agent->name }}">{{ $agent->name }}</option>
                        @endforeach


                    </select>
                </div>
                <div class="col-md-2" style="margin-right: -15px;">
                    <select class="form-control" name="university-filter" id="university-select">
                        <option value="">University</option>
                        <option value="SEU">SEU</option>
                        <option value="East West">East West</option>
                        <option value="Avicenna university">Avicenna university</option>
                    </select>
                </div>
                <div class="col-md-2" style="margin-right: -15px;">
                    <select class="form-control" name="student-filter" id="student-select">
                        <option value="">Student Type</option>
                        <option value="Freshmen">Freshmen Student</option>
                        <option value="Transfer">Transfer Student</option>
                        <option value="Master">Master Student</option>
                    </select>
                </div>
                <div class="col-md-2" style="margin-right: -15px;">
                    <input type="date" id="start_date" class="form-control" placeholder="Start Date">
                </div>
                <div class="col-md-2" style="margin-right: -30px;">
                    <button id="filter" class="btn btn-primary">Filter</button>
                    <button id="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
            <table id="student-table" class="student-table table table-striped w-100">
                <thead>
                    <tr>
                        <th style="width: 5%;">SR</th>
                        <th style="width: 10%;">Name</th>
                        <th style="width: 10%;">Father</th>
                        <th style="width: 10%;">Mother</th>
                        <th style="width: 10%;">Last</th>
                        <th style="width: 15%;">Email</th>
                        <th style="width: 10%;">Contact</th>
                        <th style="width: 10%;">Date</th>
                        <th style="width: 10%;">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script>
        $(function() {
            var assetBaseUrl = "{{ asset('') }}";
            let orderTable = $('#student-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('admin.students.data') }}',
                    data: function(d) {
                        d.start_date = $('#start_date').val();
                        d.university = $('#university-select').val();
                        d.studentType = $('#student-select').val();
                        d.agent = $('#agent-select').val();
                    }
                },
                columns: [{
                        data: null,
                        name: 'serial',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1 + ')';
                        }
                    },
                    {
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'middle_name',
                        name: 'middle_name',
                        render: function(data, type, row, meta) {
                            return data ? data : '-';
                        }
                    },
                    {
                        data: 'mother_name',
                        name: 'mother_name',
                        render: function(data, type, row, meta) {
                            return data ? data : '-';
                        }
                    },
                    {
                        data: 'surname_name',
                        name: 'surname_name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                        render: function(data, type, row, meta) {
                            return data ? data : '-';
                        }
                    },
                    {
                        data: 'contact',
                        name: 'contact',
                        render: function(data, type, row, meta) {
                            return data ? data : '-';
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Filter and Reset buttons
            $('#filter').click(function() {
                orderTable.draw();
            });

            $('#CloseDetails').click(function() {
                orderTable.draw();
            });

            $('#reset').click(function() {
                $('#start_date').val('');
                $('#university-select').val('');
                $('#student-select').val('');
                $('#agent-select').val('');
                orderTable.draw();
            });
        });
    </script>
@endsection
