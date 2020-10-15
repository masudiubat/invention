@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>Contact us</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>></li>
                        <li><a href="{{route('contact.index')}}"><span>Contact us</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<!--Contact area-->
<section class="contact-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="mail-to">
                    <h4>Send Us a Message</h4>
                    <form>
                        <ul>
                            <li> <input type="text" name="full-name" placeholder="Your Nmame" /></li>
                            <li><input type="email" name="email" placeholder="Your Email" /></li>
                            <li><input type="text" name="number" placeholder="Phone Number" /></li>
                        </ul>
                        <textarea rows="8" placeholder="Your Messages"></textarea>
                        <button type="submit" class="btn-b">Send Email</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="list-sidber">
                    <h4>Contact Me</h4>
                    <p>Lorem ipsum dolor sit amet consectur adipiscing elit. Proin viverra eget arcu cursus. Sed sit amet nibh.</p>
                    <ul>
                        <li>
                            <span class="ico-sp"><i class="fa fa-phone"></i></span>
                            <span class="txt-sp">+(000)88-123-4455-88</span>
                        </li>
                        <li>
                            <span class="ico-sp"><i class="fa fa-envelope"></i></span>
                            <span class="txt-sp">unname@gmail.com</span>
                        </li>
                        <li>
                            <span class="ico-sp"><i class="fa fa-clock-o"></i></span>
                            <span class="txt-sp">Sun-Fri09.00-12.00</span>
                        </li>
                        <li>
                            <span class="ico-sp"><i class="fa fa-map-marker"></i></span>
                            <span class="txt-sp">Elefent road 212, Australia. Inner cirlar section,</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Contact area-->
<!--Footer-->
@endsection