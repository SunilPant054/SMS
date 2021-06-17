@extends('layouts.master')

@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Course Detail</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="font-size: 16px">

                        <dl class="row">
                            <dt class="col-sm-3">Branch Name :</dt>
                            <dd class="col-sm-9">{{ $course->course_name }}</dd>

                            <dt class="col-sm-3">Acronym :</dt>
                            <dd class="col-sm-9">
                                {{ $course->short_course_name }}
                            </dd>

                            <dt class="col-sm-3">Total Subject :</dt>
                            <dd class="col-sm-9">{{ $course->total_subject }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
