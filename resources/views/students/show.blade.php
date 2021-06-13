@extends('layouts.master')

@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Student Detail</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="font-size: 16px">

                        <dl class="row">
                            <dt class="col-sm-3">Full Name :</dt>
                            <dd class="col-sm-9">{{ $student->full_name }}</dd>

                            <dt class="col-sm-3">Father's Name :</dt>
                            <dd class="col-sm-9">
                                {{ $student->father_name }}
                            </dd>

                            <dt class="col-sm-3">Mother's Name :</dt>
                            <dd class="col-sm-9">{{ $student->mother_name }}</dd>

                            <dt class="col-sm-3 text-truncate">Branch :</dt>
                            <dd class="col-sm-9">{{ $student->branch }}</dd>

                            <dt class="col-sm-3">Course</dt>
                            <dd class="col-sm-9">
                                {{ $student->course }}
                            </dd>

                            <dt class="col-sm-3">Address :</dt>
                            <dd class="col-sm-9">
                                {{ $student->address }}
                            </dd>

                            <dt class="col-sm-3">Phone Number :</dt>
                            <dd class="col-sm-9">
                                {{ $student->phone_no }}
                            </dd>

                            <dt class="col-sm-3">Email :</dt>
                            <dd class="col-sm-9">
                                {{ $student->email }}
                            </dd>

                            <dt class="col-sm-3">Date Of Birth :</dt>
                            <dd class="col-sm-9">
                                {{ $student->date_of_birth }}
                            </dd>

                            <dt class="col-sm-3">Gender :</dt>
                            <dd class="col-sm-9">
                                {{ $student->gender }}
                            </dd>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
