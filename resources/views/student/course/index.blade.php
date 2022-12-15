@extends('website.master')

@section('title')
    Student Dashboard
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="" >My Profile</a></li>
                            <li class="list-group-item"><a href="{{route('student.all-course')}}" >My Course</a></li>
                            <li class="list-group-item"><a href="" >Change Password</a></li>
                            <li class="list-group-item"><a href="" >My Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1 class="text-center">My All Courses</h1>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Course Title</th>
                                <th>Starting Date</th>
                                <th>Enroll Status</th>
                                <th>Payment Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolls as $enroll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><a href="{{route('training.detail',['id' => $enroll->course_id])}}" class="text-decoration-none text-dark" target="_blank">{{$enroll->course->title}}</a></td>
                                <td>{{$enroll->course->starting_date}}</td>
                                <td>{{$enroll->enroll_status}}</td>
                                <td>{{$enroll->payment_status}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


