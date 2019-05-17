@extends('welcome')
@section('content')
            <div class="row">
                <div class="col-sm-4">
                    <div class="row box">
                        <h5>THE URI ONLINE JUDGE</h5>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="images/" class="img-responsive">
                            </div>
                            <div class="col-sm-7">
                                <p>The URI Online Judge is a project that is being developed by the Computer Science Department of URI University.
                                    The main goal of the project is to provide programming practice and knowledge sharing.</p>
                                <a href="#">CREDIT</a>
                            </div>
                        </div>
                    </div>
                    <div class="row box">
                        <h5>PROBLEM REPOSITORY</h5>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="images/" class="img-responsive">
                            </div>
                            <div class="col-sm-7">
                                <p>The URI Online Judge contains more than 1000 problems divided in 8 big categories. This division help the users to focus on specific programming topics.
                                    All problems are available in Portuguese and English.</p>
                                <a href="{{route('categories')}}">REPOSITORY</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="logo text-center">
                        NEUB Online Judge
                    </a>
                    <h3 class="text-center">SIGN IN</h3>
                    <form>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-8">
                                <input type="checkbox"> REMEMBER ME (7 DAYS)
                            </div>
                            <div class="col-sm-4 text-right">
                                <input type="submit" class="btn btn-success" value="SIGN IN ">
                            </div>
                        </div>
                    </form>
                    <a href="">
                        <div class="box-sign-up">
                            <h6>FIRST TIME HERE?</h6>
                            <p>SIGN UP today to view materials, solve problems, ask questions and much more.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <div class="row box">
                        <h5>COMPETITION AND RANKING</h5>
                        <div class="row">
                            <div class="col-sm-7">
                                <p>Solve the available problems using 11 programming languages, and compete with other users.
                                    As a challengee, improve your ranking, solving as many problems as possible and tunning your source code to run faster.</p>
                                <a href="#">CHECK THE RANK</a>
                            </div>
                            <div class="col-sm-5">
                                <img src="images/" class="img-responsive">
                            </div>

                        </div>
                    </div>

                    <div class="row box">
                        <h5>URI ONLINE JUDGE CONTESTS</h5>
                        <div class="row">
                            <div class="col-sm-7">
                                <p>The URI Online Judge is a project that is being developed by the Computer Science Department of URI University.
                                    The main goal of the project is to provide programming practice and knowledge sharing.</p>
                                <a href="{{route('contest')}}">OPEN CONTEST</a>
                            </div>
                            <div class="col-sm-5">
                                <img src="images/" class="img-responsive">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
@endsection