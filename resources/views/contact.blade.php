@extends('layout')
@section('title', 'Mixify | Contact Us')

@section('pageContent')

<!-- Breadcrumb Begin -->
<br><br><br><br><br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact__address">
                    <div class="section-title">
                        <h2>Contact info</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <h5>Address</h5>
                            <p>Plot 21 sector 21 korangi industrial area karachi</p>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <h5>Phone</h5>
                            <span>0310-8727132</span>
                            <span>0310-8727132</span>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <h5>Email</h5>
                            <p>waqasjadoon111@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact__form">
                    <div class="section-title">
                        <h2>Get in touch</h2>
                    </div>
                    <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <form method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="input__list">
                            <input type="text" name="name" placeholder="Name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror

                            <input type="email" name="email" placeholder="Email">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                            <input type="tel" name="phone" placeholder="Phone 03xx-xxxxxxx" pattern="03[0-9]{9}" maxlength="11">
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                        </div>
                        <textarea placeholder="MESSAGE" name="message"></textarea>
                        @error('message')
                                <div class="text-danger">{{ $message }}</div>
                                 @enderror
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Begin -->
<div class="map">
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
            height="585" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div> <br>
<!-- Map End -->
<!-- Contact Section End -->
@endsection