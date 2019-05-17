@extends('welcome')
@section('content')
            <div class="row"> 
                <div class="col-sm-3 left">
                    <div class="brand-logo">
                        <h4>NEUB ONLINE JUDGE</h4>
                    </div>

                    <div class="top20">
                        <div class="box text-center">
                            <h4>Top 20</h4>
                        </div>
                        <ul class="list-unstyled text-center">
                            <li><a href="#">Sahin</a></li>
                            <li><a href="#">Sahin</a></li>
                            <li><a href="#">Sahin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 right">
                    <div class="row"> 
                        <div class="col-sm-1"></div>
                        <div class="col-sm-11">
                            <div class="row">
                                <div class="border  mb-30">
                                    <h2>BEGINNER</h2>
                                    <br>
                                    <p class="border m-0">SELECT ONE OF THE FOLLOWING PROBLEMS TO SOLVE.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-30">
                        <div class="col-sm-1"></div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NAME</th>
                                        <th>TAG</th>
                                        <th>Submission</th>
                                        <th>Accepted</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1002</td>
                                        <td>Extremely Basic</td>
                                        <td>Basic</td>
                                        <td>24355</td>
                                        <td>1230</td>
                                    </tr>
                                    <tr>
                                        <td>1002</td>
                                        <td>Extremely Basic</td>
                                        <td>Basic</td>
                                        <td>24355</td>
                                        <td>1230</td>
                                    </tr>
                                    <tr>
                                        <td>1002</td>
                                        <td>Extremely Basic</td>
                                        <td>Basic</td>
                                        <td>24355</td>
                                        <td>1230</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
