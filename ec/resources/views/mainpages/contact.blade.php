@extends('header')
@section('main')
    <section>
        <div>
            <h1 class="contactform-title">Contact Form</h1>
            <div class="contactform-wrapper bounceInLeft">
                <div class="contact">
                    <h3 class="contact-us">Contact Us</h3>
                    <div class="alert">Your message has been sent!</div>
                    <form id="contactForm" action="/contact" method="post" id="contact_form">
                        @csrf
                        <p class="name-field">
                            <label>Name <span>*</span></label>
                            <input type="text" name="contact_name" id="name" required />
                        </p>
                        <p class="company-field">
                            <label>Company</label>
                            <input type="text" name="contact_company" id="company" />
                        </p>
                        <p class="email-field">
                            <label>Email <span>*</span></label>
                            <input type="email" name="contact_email" id="email" required />
                        </p>
                        <p class="phone-field">
                            <label>Phone</label>
                            <input type="text" name="contact_phone" id="phone" />
                        </p>
                        <p class="form-group">
                            <label class="control-label">Service</label>
                            <select name="contact_service" class="form-control">
                                <option value=" ">Select You Required</option>
                                <option>Web Development</option>
                                <option>App Development</option>
                                <option>Ecommerce</option>
                                <option>Saas</option>
                                <option>AI Development</option>
                                <option>UI/UX Design</option>
                                <option>Logo Design</option>
                                <option>Maintanance & Support</option>
                            </select>
                        </p>
                        <p class="form-group">
                            <label class="control-label">Budget</label>
                            <input type="text" name="contact_budget" id="budget" />
                        </p>
                        <p class="message-field full">
                            <label>Project Description</label>
                            <textarea name="contact_Description" rows="5" id="message"></textarea>
                        </p>

                        <p class="required-field">Required field <span>*</span></p>
                        <p class="submit-button">
                            <button type="submit">
                                {{-- <span class="btn-getstarted"> </span> --}}
                                <span>Submit</span>
                            </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
