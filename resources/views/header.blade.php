
{{--<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8 col-xs-8">
                <div class="header-half header-call">
                    <p>
                        <span><i class="icon-cloud"></i>+019 4854 8817</span>
                        <span><i class="icon-mail"></i>thinkinnotech1@gmail.com</span>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vine"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{asset('img/cropped-logo2-1.png')}}" alt="" style="width: 150px;height: 48px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="button navbar-right">
                <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s"
                        data-toggle="modal" data-target="#loginModal"
                >Login / Sign Up</button>
                <a class="navbar-btn nav-button wow fadeInRight" href="/jobpost" data-wow-delay="0.6s">Post Jobs</a>
            </div>
            <div class="search-form wow pulse main-nav nav navbar-nav " data-wow-delay="0.8s">
                <form action="/job" method="get"  id="search_form">

                </form>
                <div class=" form-inline">


                    <div class="form-group">
                        <a href=""><i class="fa fa-map-marker fa-2x"></i> &nbsp;Mumbai&nbsp;</a>
                    </div>
                    <div class="form-group">
                        <select name="city" id="" class="form-control" style="width: 150px;margin-right: 0px;">
                            <option>Select Your City</option>
                            <option selected>New york, CA</option>
                            <option>New york, CA</option>
                            <option>New york, CA</option>
                            <option>New york, CA</option>
                        </select>
                    </div>
                    <div class="form-group">
                       <input type="text" name="query" id="query" class="form-control" style="margin-right: 0px;">
                    </div>
                    <button type="submit" class="btn searchBtn" onclick="submitSearch(this)" ><img class="search_logo" src="{{asset('img/magnifying-glass.svg')}}" ></button>

                </div>

            </div>

            {{--  <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="#">Home</a></li>
                 <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="#">Job Seekers</a></li>
                 <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Employeers</a></li>
                 <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#">About us</a></li>
                 <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="#">Blog</a></li>
                 <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="#">Contact</a></li>
            </ul>--}}
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>