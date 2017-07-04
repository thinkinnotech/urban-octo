
<div class="footer-area">
    <div class="container">

        <div class="row footer" style="padding-bottom: 0px">
            <div class="col-md-4">
                <h4>Jobs By Role</h4>
                <ul class="list-unstyled">
                    <?php $role = \App\Jobrole::all(); ?>

                    @foreach($role as $r)
                        <li>{{$r->name}}</li>
                        @endforeach

                </ul>
            </div>
            <div class="col-md-4">
                <h4>Jobs By Type</h4>
                <ul class="list-unstyled">
                    <li><a href=""> Full Time</a></li>
                    <li><a href=""> Part Time</a></li>
                    <li><a href=""> Work From Home</a></li>
                </ul>

            </div>
            <div class="col-md-4">
                <h4>Jobs By City</h4>
                <ul class="list-unstyled">
                    <?php $city = \App\City::all(); ?>

                    @foreach($city as $r)
                        <li><a href=""> {{$r->city}} </a></li>
                    @endforeach

                </ul>

            </div>
        </div>
        <hr style="border-color: #1b8af3">
        <div class="row footer">
            <div class="col-md-4">
                <div class="single-footer">
                    <img src="{{asset('img/cropped-logo2-1.png')}}" height="70px" alt="" class="wow pulse" data-wow-delay="1s">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati architecto quaerat facere
                        blanditiis tempora sequi nulla accusamus, possimus cum necessitatibus suscipit quia autem
                        mollitia, similique quisquam molestias. Vel unde, blanditiis.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-footer">
                    <h4>Twitter update</h4>
                    <div class="twitter-updates">
                        <div class="single-tweets">
                            <h5>ABOUT 9 HOURS</h5>
                            <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less
                                coupling and greater dev speed <a
                                        href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                        </div>
                        <div class="single-tweets">
                            <h5>ABOUT 9 HOURS</h5>
                            <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less
                                coupling and greater dev speed <a
                                        href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-footer">
                    <h4>Useful lnks</h4>
                    <div class="footer-links">
                        <ul class="list-unstyled">
                            <li><a href="">About Us</a></li>
                            <li><a href="" class="active">Services</a></li>
                            <li><a href="">Work</a></li>
                            <li><a href="">Our Blog</a></li>
                            <li><a href="">Customers Testimonials</a></li>
                            <li><a href="">Affliate</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-copy">
            <p><span>(C) Citijobs.in, All rights reserved</span> | <span>Developed by <a target="_blank"
                            href="https://thinkinnotech.com">Thinkinnotech</a></span> |{{-- <span> Web Designed by <a
                            href=""></a></span>--}}</p>
        </div>
    </div>
</div>