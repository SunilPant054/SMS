@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Update Student Detail</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate method="POST"
                        action="{{ route('student.update', $student->id) }}" class="form-horizontal form-label-left">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_name">Full Name <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="full_name" name="full_name" required="required"
                                    value="{{ $student->full_name }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="father_name">Father's Name <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="father_name" name="father_name" required="required"
                                    value="{{ $student->father_name }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mother_name">Mother's Name <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="mother_name" name="mother_name" required="required"
                                    value="{{ $student->mother_name }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch <span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="branch">
                                    <option value="">Choose Branch</option>
                                    <option>#</option>
                                    <option>#</option>
                                    <option>#</option>
                                    <option>#</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Course <span
                                    class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="course">
                                    <option value="">Choose Course</option>
                                    <option>#</option>
                                    <option>#</option>
                                    <option>#</option>
                                    <option>#</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="address" name="address" required="required"
                                    value="{{ $student->address }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no">Phone Number <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="phone_no" name="phone_no" required="required"
                                    value="{{ $student->phone_no }}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone_no">Email <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" class="form-control col-md-7 col-xs-12" name="email" required="required"
                                    value="{{ $student->email }}" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="date_of_birth" class="date-picker form-control col-md-7 col-xs-12"
                                    value="{{ $student->date_of_birth }}" name="date_of_birth" required="required"
                                    type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="gender" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary"
                                        data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                    </label>
                                    <label class="btn btn-primary" data-toggle-class="btn-primary"
                                        data-toggle-passive-class="btn-default">
                                        <input type="radio" name="gender" value="female"> Female
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
