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
                        <h1 class="text-center">My Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

