@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Enroll Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Course Title</th>
                            <th>Student Info</th>
                            <th>Enroll Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($enrolls as $enroll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$enroll->course->title}}</td>
{{--                                @if(isset($enroll->student->name))--}}
{{--                                    <td>{{$enroll->student->name.'('.$enroll->student->mobile.')'}}</td>--}}
{{--                                @else--}}
{{--                                    <td></td>--}}
{{--                                @endif--}}
                                <td>{{$enroll->student->name.'('.$enroll->student->mobile.')'}}</td>
                                <td>{{$enroll->enroll_status}}</td>
                                <td>
                                    <a href="{{route('admin.enroll-detail', ['id' => $enroll->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-book-open">detail</i>
                                    </a>
                                    <a href="{{route('admin.edit-enroll-status', ['id' => $enroll->id])}}" class="btn btn-outline-primary {{$enroll->enroll_status == 'Complete' ? 'disable' : ''}}">
                                        <i class="fa fa-arrow-up">edit</i>
                                    </a>
                                    <a href="{{route('admin.delete-enroll', ['id' => $enroll->id])}}" class="btn btn-outline-danger" >
                                        <i class="fa fa-trash">delete</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


