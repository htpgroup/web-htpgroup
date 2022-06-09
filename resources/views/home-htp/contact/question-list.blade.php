@extends('home-htp.layouts.page')

@section('content')
    <section class="position-relative py-20">
        <div class="container">
            <ul class="breadcrumb">
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-muted h4 ps-4" href="{{route('HomePay.homeWebPay')}}">Câu hỏi thường gặp</a></li>
                <li class="me-4 me-lg-0 mb-4 mb-md-10 mb-lg-16"><a class="text-decoration-none text-dark h4 ps-4 border-start border-info" href="{{route('HomePay.homeWebPay')}}">Dành cho chủ thẻ</a></li>
            </ul>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h3 class="mb-4">Dành cho Chủ thẻ</h3>
                    <ul class="list-unstyled">
                        <li class="py-5 border-bottom">
                            <button class="bg-transparent border-0 w-100 d-flex justify-content-between align-items-center text-start">
                                <span class="h4">Creating Content Wireframes For Responsive Design</span>
                                <svg class="flex-shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 10C0.75 15.108 4.891 19.25 10 19.25C15.108 19.25 19.25 15.108 19.25 10C19.25 4.892 15.108 0.75 10 0.75C4.891 0.75 0.75 4.892 0.75 10Z" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.52881 8.55774L9.99981 12.0437L13.4708 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <p class="d-none pe-4 mt-3 h5 fw-normal text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ultricies est. Duis nec hendrerit magna. Ut vel orci gravida, hendrerit enim non, gravida turpis. Praesent non lectus porttitor, scelerisque nulla nec, ornare neque. Integer massa libero, ornare ut leo nec, scelerisque rutrum elit. Morbi et massa id ipsum lobortis rhoncus. Aenean sit amet porta nulla, quis varius risus. Suspendisse ultrices ut lectus non laoreet. Etiam ornare laoreet tortor quis porttitor. Suspendisse tempus erat non dui volutpat eleifend.</p>
                        </li>
                        <li class="py-5 border-bottom">
                            <button class="bg-transparent border-0 w-100 d-flex justify-content-between align-items-center text-start">
                                <span class="h4">The Skeptic’s Guide To Low-Fidelity Prototyping</span>
                                <svg class="flex-shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.25 10C19.25 4.892 15.109 0.75 10 0.75C4.892 0.75 0.75 4.892 0.75 10C0.75 15.108 4.892 19.25 10 19.25C15.109 19.25 19.25 15.108 19.25 10Z" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M13.4712 11.4423L10.0002 7.95626L6.52919 11.4423" stroke="#45C1FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <p class="mt-3 pe-4 h5 fw-normal text-muted">Low-fidelity prototypes, in particular, are rough representations of concepts that help us to validate those concepts early on in the design process. Throughout this article, we will look at some of the features that make low-fidelity prototyping a unique tool to radically improve your work and to build an environment in which users’ needs can be truly realized.</p>
                        </li>
                        <li class="py-5 border-bottom">
                            <button class="bg-transparent border-0 w-100 d-flex justify-content-between align-items-center text-start">
                                <span class="h4">Beyond Wireframing: The Real-Life UX Design Process</span>
                                <svg class="flex-shrink-0" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 10C0.75 15.108 4.891 19.25 10 19.25C15.108 19.25 19.25 15.108 19.25 10C19.25 4.892 15.108 0.75 10 0.75C4.891 0.75 0.75 4.892 0.75 10Z" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.52881 8.55774L9.99981 12.0437L13.4708 8.55774" stroke="#838EA4" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <p class="d-none pe-4 mt-3 h5 fw-normal text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ultricies est. Duis nec hendrerit magna. Ut vel orci gravida, hendrerit enim non, gravida turpis. Praesent non lectus porttitor, scelerisque nulla nec, ornare neque. Integer massa libero, ornare ut leo nec, scelerisque rutrum elit. Morbi et massa id ipsum lobortis rhoncus. Aenean sit amet porta nulla, quis varius risus. Suspendisse ultrices ut lectus non laoreet. Etiam ornare laoreet tortor quis porttitor. Suspendisse tempus erat non dui volutpat eleifend.</p>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
