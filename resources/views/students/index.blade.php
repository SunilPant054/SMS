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
                    <div class="x_content">



                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">S.No</th>
                                    <th style="width: 20%">Full Name</th>

                                    <th style="width: 20%">Date Of Birth</th>

                                    <th style="width: 20%">Branch</th>
                                    <th style="width: 20%">Course</th>
                                    <th style="width: 20%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>
                                            <a>{{ $loop->iteration }}</a>
                                        </td>
                                        <td>
                                            <a>{{ $student->full_name }}</a>
                                        </td>
                                        <td>
                                            <a>{{ $student->date_of_birth }}</a>
                                        </td>
                                        <td>
                                            <a>{{ $student->branch }}</a>
                                        </td>
                                        <td>
                                            <a>{{ $student->course }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('student.show', $student->id) }}"
                                                class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View
                                            </a>
                                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
