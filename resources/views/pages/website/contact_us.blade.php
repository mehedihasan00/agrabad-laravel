@extends('layouts.master_home')
@section('title', 'Contact Us')
@section('web_content')
<section id="contact-map" class="contact-map section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <h3 class="title-forme">Contact Form</h3>
                            <form role="form" method="post" id="contactForm" action="{{ route('store.message') }}" data-toggle="validator">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <label for="name">Your name</label>
                                            <input type="text" class="form-control" id="name" name="name" required
                                                data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email" required
                                                data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" id="msg_subject" name="subject"
                                                required data-error="Please enter your message subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message"> Message</label>
                                            <textarea class="form-control" rows="4" id="message" name="description" required
                                                data-error="Write your message"></textarea>
                                        </div>
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common" id="form-submit"><i
                                                    class="fa fa-paper-plane" aria-hidden="true"></i> Send
                                                Message</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="container-map wow fadeInRight" data-wow-delay="0.2s">
                        <div class="ifram-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1551.7378941826544!2d91.81117080813044!3d22.328109395144736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8ca6b937279%3A0x481751884fe1837d!2sAgrabad%20Convention%20Hall!5e0!3m2!1sen!2sbd!4v1653713332238!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection