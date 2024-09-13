@extends('Components.layout') 

@section('content')
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="contact_taital">Get In Touch</h1>
                <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}" alt="Bullet Icon"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-12">
                    <form id="contactForm" action="javascript:void(0);">
                        <div class="mail_section_1">
                            <input type="text" id="input-name" class="mail_text" placeholder="Your Name" name="Your Name">
                            <input type="text" id="input-email" class="mail_text" placeholder="Your Email" name="Your Email">
                            <input type="text" id="input-phone" class="mail_text" placeholder="Your Phone" name="Your Phone">
                            <textarea id="input-message" class="massage-bt" placeholder="Message" rows="5" name="Message"></textarea>
                            <div class="send_bt">
                                <a href="#" id="sendButton">SEND</a>
                                <!-- Hidden submit button -->
                                <input type="submit" id="hiddenSubmit" style="display: none;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section end -->

<script>
    document.getElementById('sendButton').addEventListener('click', function (event) {
        event.preventDefault();
        document.getElementById('hiddenSubmit').click();
    });

    document.getElementById('contactForm').addEventListener('submit', function (event) {
        event.preventDefault();

        var name = document.getElementById('input-name').value;
        var email = document.getElementById('input-email').value;
        var phone = document.getElementById('input-phone').value;
        var message = document.getElementById('input-message').value;

        var mailtoLink = `mailto:itwebdev10@gmail.com?subject=Contact%20Form%20Submission&body=${encodeURIComponent(
            `Name: ${name}\nEmail: ${email}\nPhone: ${phone}\n\nMessage:\n${message}`
        )}`;

        window.location.href = mailtoLink;
    });
</script>
@endsection
