@extends('website.master')

@section('title')
    About Us
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 shadow">
                        <h3>Our Mission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem ea libero pariatur quisquam veritatis?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem ea libero pariatur quisquam veritatis?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body border-0 shadow">
                        <h3>Our Vission</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem ea libero pariatur quisquam veritatis?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem ea libero pariatur quisquam veritatis?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row bg-secondary">
                <div class="col">
                    <div class="card card-body border-0 text-center">
                        <h3>Our Instructor</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-3.jpg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-3.jpg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-3.jpg" alt="">
                        <div class="card-body">
                            <h4>Instructor Name</h4>
                            <p>Instructor Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

