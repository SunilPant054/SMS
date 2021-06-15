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
                    <div class="x_content">



                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">S.No</th>
                                    <th style="width: 20%">Branch Name</th>
                                    <th style="width: 20%">Acronym</th>
                                    <th style="width: 20%">Total Course</th>
                                    <th style="width: 20%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($branches as $branch)
                                    <tr>
                                        <td>
                                            <a>{{ $loop->iteration }}</a>
                                        </td>
                                        <td>
                                            <a>{{ $branch->branch_name }}</a>
                                        </td>
                                        <td>
                                            <a>{{ $branch->short_branch_name }}</a>
                                        </td>
                                        <td>
                                            <a>{{ $branch->total_course }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('branch.show', $branch->id) }}"
                                                class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View
                                            </a>
                                            <a href="{{ route('branch.edit', $branch->id) }}"
                                                class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit
                                            </a>
                                            <form action="{{ route('branch.destroy', $branch->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure?');" style="display: inline-flex;">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-xs>
                                                                                <i class=" fa fa-trash-o"></i>Delete
                                                </button>
                                            </form>
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
