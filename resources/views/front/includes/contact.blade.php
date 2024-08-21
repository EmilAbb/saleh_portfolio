<div class="grax_tm_contact" id="contact">
    <div class="container">
        <div class="grax_tm_title_holder">
            @php
                $title = $touch->title;

                $parts = explode(' ', $title, 3);

                if (isset($parts[1])) {
                    $leftParts = $parts[0] . ' ' . $parts[1];
                    $right = isset($parts[2]) ? $parts[2] : '';
                } else {
                    $leftParts = $parts[0];
                    $right = '';
                }
            @endphp

            <h3>{{ $leftParts ?? '' }} <span>{{ $right ?? '' }}</span></h3>
        </div>
        <div class="contact_inner">
            <div class="left wow fadeInLeft" data-wow-duration="1s">
                <div class="text">
                    <p>{{$touch->text ?? ''}}</p>
                </div>
                <div class="info_list">
                    <ul>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{asset('assets/img/svg/location.svg')}}" alt="" />
                                <p><span class="first">Address:</span><span class="second">Brook 103, New York, USA</span></p>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{asset('assets/img/svg/email.svg')}}" alt="" />
                                <p><span class="first">Email:</span><span class="second"><a href="#">example@gmail.com</a></span></p>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <img class="svg" src="{{asset('assets/img/svg/phone.svg')}}" alt="" />
                                <p><span class="first">Phone:</span><span class="second"><a href="#">+77 033 442 55 57</a></span></p>
                            </div>
                        </li>


                        @foreach($socials as $social)
                            <li>
                                <div class="list_inner">
                                    <img class="svg" src="{{asset('storage/'.$social->social_image ?? '')}}" alt="" />
                                    <p><span class="first">{{$social->social_label ?? ''}}:</span><span class="second"><a target="_blank" href="{{$social->social ?? ''}}">{{$social->social ?? ''}}</a></span></p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="right wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="fields">
                    <form action="{{route('createMessage')}}" method="POST" class="contact_form" id="contact_form1">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                        <div class="first">
                            <ul>
                                <li>
                                    <input id="name" name="name" type="text" placeholder="Full name">
                                </li>
                                <li>
                                    <input id="email" name="email" type="text" placeholder="Email">
                                </li>
                            </ul>
                        </div>
                        <div class="last">
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="grax_tm_button">
                            <button  id="send_message1" type="submit">Send Message</button>
                        </div>

                        <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function grax_tm_contact_form(){

        "use strict";

        {{--jQuery(".contact_form #send_message").on('click', function(event){--}}
        {{--    event.preventDefault(); // Sayfanın yeniden yüklenmesini engeller--}}

        {{--    var name = jQuery(".contact_form #name").val();--}}
        {{--    var email = jQuery(".contact_form #email").val();--}}
        {{--    var message = jQuery(".contact_form #message").val();--}}
        {{--    var success = jQuery(".contact_form .returnmessage").data('success');--}}
        {{--    var csrfToken = jQuery('meta[name="csrf-token"]').attr('content');--}}

        {{--    jQuery(".contact_form .returnmessage").empty(); // Önceki hata/başarı mesajını temizleyin--}}

        {{--    // Boş alan kontrolü--}}
        {{--    if(name === '' || email === '' || message === ''){--}}
        {{--        jQuery('div.empty_notice').slideDown(500).delay(2000).slideUp(500);--}}
        {{--    } else {--}}
        {{--        // Verileri POST isteği ile gönder--}}
        {{--        jQuery.ajax({--}}
        {{--            url: "{{ route('createMessage') }}",--}}
        {{--            method: "POST",--}}
        {{--            data: {--}}
        {{--                _token: csrfToken, // CSRF token'ı burada ekleniyor--}}
        {{--                ajax_name: name,--}}
        {{--                ajax_email: email,--}}
        {{--                ajax_message: message--}}
        {{--            },--}}
        {{--            success: function(data) {--}}
        {{--                jQuery(".contact_form .returnmessage").append(data); // Dönen mesajı ekle--}}

        {{--                if(jQuery(".contact_form .returnmessage span.contact_error").length){--}}
        {{--                    jQuery(".contact_form .returnmessage").slideDown(500).delay(2000).slideUp(500);--}}
        {{--                } else {--}}
        {{--                    jQuery(".contact_form .returnmessage").append("<span class='contact_success'>"+ success +"</span>");--}}
        {{--                    jQuery(".contact_form .returnmessage").slideDown(500).delay(4000).slideUp(500);--}}
        {{--                }--}}

        {{--                if(data === ""){--}}
        {{--                    jQuery("#contact_form")[0].reset(); // Başarı durumunda form alanlarını sıfırla--}}
        {{--                }--}}
        {{--            },--}}
        {{--            error: function(xhr, status, error) {--}}
        {{--                console.error("Error: " + error);--}}
        {{--            }--}}
        {{--        });--}}
        {{--    }--}}
        {{--});--}}

    }
</script>
