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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29799.52199649257!2d105.7996267678059!3d20.995032105050207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac927ce95957%3A0xe230355f8983adb9!2zVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1654135480947!5m2!1svi!2s" width="100%" height="373" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="inforcontact">
                        <p>
                            <i class="fas fa-envelope"></i> support@htpgroup.com.vn
                        </p>
                        <p>
                            <i class="fas fa-phone-alt"></i> 1900 0128
                        </p>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <form action="" id="contactform">
                        <div class="mb-2">
                            <input type="text" class="form-control" id="inputName" placeholder="Họ tên">
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" id="FormControlInputEmail" placeholder="Email...">
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" id="FormControlInputEmail" placeholder="Số điện thoại...">
                        </div>
                        <div class="mb-2">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="sendform">
                            <button type="button" class="btn btn-lg">Gửi đi</button>
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

    <script>
        jQuery(function ($) {

            jQuery('#post_form').yiiActiveForm([
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
