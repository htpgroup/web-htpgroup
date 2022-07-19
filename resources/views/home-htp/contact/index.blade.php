@extends('home-htp.layouts.main')
@section('style')


    <style>
        .stackedit-button-wrapper img {
            width: 1.6em;
            height: 1.6em;
            vertical-align: bottom;
            margin-right: 0.33em;
        }

        .swal2-icon {
            height: 3rem !important;
            width: 3rem !important;
            border: none !important;
            margin: 0 !important;
        }

        .iconAlarm {
            height: 2rem !important;
        }

        .is-valid~.valid-feedback, .is-valid~.valid-tooltip, .was-validated :valid~.valid-feedback, .was-validated :valid~.valid-tooltip {
            display: block;
        }
        .valid-feedback{
            display: block;
        }
    </style>
@endsection
@section('content')

    <!-- main -->
    <section class="contactmain">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="titlecontact">LIÊN HỆ VỚI CHÚNG TÔI</h2>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="wapper-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7448.631100903321!2d105.79395503084372!3d21.02005642588646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1184824547%3A0x5f83de120497ec5e!2zS2h1IMSQw7QgdGjhu4sgbeG7m2kgWcOqbiBIw7Jh!5e0!3m2!1svi!2s!4v1658196548017!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="inforcontact">
                        <p>
                            <i class="fas fa-address-card"></i> Số A7 Lô A, Khu 5.2 ha - dự án nhà ở cho cán bộ cao cấp và cán bộ của Ban Đảng Trung Ương, P.Yên Hoà - Q.Cầu Giấy - Hà Nội - Việt Nam
                        </p>
                        <p>
                            <i class="fas fa-envelope"></i> support@htpgroup.com.vn
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i> 1900 0128
                        </p>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <form method="post" action="{{route('HomeHTP.contact-form.store')}}" id="contactform">
                        @method('POST')
                        @csrf


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $key => $error)
                                        <li datakey="{{$key}}">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br/>
                        @endif

                        <div class="mb-2 field-name">
                            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="Họ và tên">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="mb-2 field-company">
                            <input type="text" class="form-control" value="{{old('company')}}" name="company" id="company" placeholder="Công ty...">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="mb-2 field-email">
                            <input type="email" name="email" class="form-control"   value="{{old('email')}}"  id="email" placeholder="Email...">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="mb-2 field-phone">
                            <input type="text" name="phone" class="form-control"  value="{{old('phone')}}"  id="phone" placeholder="Số điện thoại...">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="mb-2 field-subject">
                            <input type="text" name="subject" class="form-control"  value="{{old('subject')}}"  id="subject" placeholder="Tiêu đề...">
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="mb-2 field-content">
                            <textarea class="form-control" name="content" id="content" rows="3">{{old('content') }}</textarea>
                            <div class="valid-feedback">
                            </div>
                        </div>
                        <div class="mb-2 mt-8">
                            <div class="g-recaptcha"  data-sitekey="{{config('captcha.sitekey')}}"></div>
                            <div class="valid-feedback"></div>
                        </div>
                        <div class="sendform">
                            <button type="submit" class="btn btn-primary btn-lg">Gửi đi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end main -->
@endsection
@section('script2')

    <script src="{{asset('assets/yii2-assets/yii.js')}}"></script>
    <script src="{{asset('assets/yii2-assets/yii.activeForm.js')}}"></script>
    <script src="{{asset('assets/yii2-assets/yii.validation.js')}}"></script>
    <!-- Google recaptcha API library -->
    <script src="https://www.google.com/recaptcha/api.js?render={{config('captcha.sitekey')}}&hl=vi"></script>
    <script>
        window.onload = function() {
            var $recaptcha = document.querySelector('#g-recaptcha-response');

            if($recaptcha) {
                $recaptcha.setAttribute("required", "required");
            }
        };
    </script>
    <script>
        jQuery(function ($) {

            jQuery('#contactform').yiiActiveForm([
                {
                    "id": "name",
                    "name": "name",
                    "container": ".field-name",
                    "input": "#name",
                    "error": ".valid-feedback",
                    "validate": function (attribute, value, messages, deferred, $form) {
                        yii.validation.required(value, messages, {"message": "Chưa nhập tên liên hệ."});
                    }
                },
                {
                    "id": "company",
                    "name": "company",
                    "container": ".field-company",
                    "input": "#company",
                    "error": ".valid-feedback",
                    "validate": function (attribute, value, messages, deferred, $form) {
                        yii.validation.required(value, messages, {"message": "Chưa nhập tên công ty."});
                    }
                },

                {
                    "id": "email",
                    "name": "email",
                    "container": ".field-email",
                    "input": "#email",
                    "error": ".valid-feedback",
                    "validate": function (attribute, value, messages, deferred, $form) {
                        yii.validation.required(value, messages, {"message": "Chưa nhập địa chỉ email."});
                        yii.validation.email(value, messages, {
                            "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,
                            "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,
                            "allowName": false,
                            "message": "Email không phải là địa chỉ email hợp lệ.",
                            "enableIDN": false,
                            "skipOnEmpty": 1
                        });
                    }
                },


                {
                    "id": "phone",
                    "name": "phone",
                    "container": ".field-phone",
                    "input": "#phone",
                    "error": ".valid-feedback",
                    "validate": function (attribute, value, messages, deferred, $form) {
                        yii.validation.required(value, messages, {"message": "Chưa nhập số điện thoại."});

                        yii.validation.string(value, messages, {
                            "message": "Số điện thoại phải là chuỗi.",
                            "min": 10,
                            "tooShort": "Số điện thoại phải chứa ít nhất 10 số.",
                            "max": 12,
                            "tooLong": "Số điện thoại phải chứa nhiều nhất 12 số.",
                            "skipOnEmpty": 1
                        });
                    }
                },

                {
                    "id": "subject",
                    "name": "subject",
                    "container": ".field-subject",
                    "input": "#subject",
                    "error": ".valid-feedback",
                    "validate": function (attribute, value, messages, deferred, $form) {
                        yii.validation.required(value, messages, {"message": "Chưa nhập tiêu đề."});

                    }
                },
                {
                    "id": "content",
                    "name": "content",
                    "container": ".field-content",
                    "input": "#content",
                    "error": ".valid-feedback",
                    "validate": function (attribute, value, messages, deferred, $form) {
                        yii.validation.required(value, messages, {"message": "Chưa nhập nội dung liên hệ."});
                    }
                },
            ], []);
        });
    </script>
@endsection
