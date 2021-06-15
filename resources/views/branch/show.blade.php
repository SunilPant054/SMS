@extends('layouts.master')

@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Branch Detail</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="font-size: 16px">

                        <dl class="row">
                            <dt class="col-sm-3">Branch Name :</dt>
                            <dd class="col-sm-9">{{ $branch->branch_name }}</dd>

                            <dt class="col-sm-3">Acronym :</dt>
                            <dd class="col-sm-9">
                                {{ $branch->short_branch_name }}
                            </dd>

                            <dt class="col-sm-3">Total Course :</dt>
                            <dd class="col-sm-9">{{ $branch->total_course }}</dd>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
