@extends('website.master')

@section('title')
    Training Category
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0">
                        <h3 class="">All Training Information</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-4.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP With Larevel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-10-2023</p>
                            <hr/>
                            <a href="{{route('training.detail')}}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-4.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP With Larevel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-10-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('/')}}website/img/team-4.jpg" alt="">
                        <div class="card-body">
                            <h4>PHP With Larevel Framework</h4>
                            <p class="mb-0">TK. 25000</p>
                            <p>Starting Date: 10-10-2023</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

