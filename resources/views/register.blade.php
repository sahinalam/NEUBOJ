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
                    <h3>SIGN UP</h3>
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label>Language</label>
                            <select class="form-control" required>
                                <option value="English">English</option>
                                <option value="Bangle">Bangla</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Graduation Year</label>
                            <select name="graduation_year" id="graduation-year" class="form-control" required>
                                <option value="">-</option><option value="0">2000</option><option value="1">2001</option><option value="2">2002</option><option value="3">2003</option><option value="4">2004</option><option value="5">2005</option><option value="6">2006</option><option value="7">2007</option><option value="8">2008</option><option value="9">2009</option><option value="10">2010</option><option value="11">2011</option><option value="12">2012</option><option value="13">2013</option><option value="14">2014</option><option value="15">2015</option><option value="16">2016</option><option value="17">2017</option><option value="18">2018</option><option value="19">2019</option><option value="20">2020</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-12 form-group">
                                <input type="checkbox" class="form-group"> I AGREE WITH THE TERMS & CONDITIONS
                            </div>
                            <div class="col-sm-12 text-right">
                                <input type="submit" class="btn btn-success" value="SIGN UP ">
                            </div>
                        </div>
                    </form>

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