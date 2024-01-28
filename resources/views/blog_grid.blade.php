@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Blog @endslot
@slot('subtitle') Grid @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Post grid -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/1.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Domestic confined any but son</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 20th, 2022</li>
                    </ul>

                    How proceed offered her offence shy forming. Returned peculiar pleasant but appetite differed she. Residence dejection agreement am as to abilities immediate suffering. Ye am depending propriety sweetness distrusts belonging collected. Smiling mention he
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 29</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/2.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Wisdom new and valley answer</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 19th, 2022</li>
                    </ul>

                    Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 64</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/3.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Announcing of invitation principles</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 18th, 2022</li>
                    </ul>

                    Cold in late or deal. Terminated resolution no am frequently collecting insensible he do appearance. Projection invitation affronting admiration if no on or. It as instrument boisterous frequently apartments an in. Mr excellence inquietude conviction is in
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 49</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/4.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Increasing travelling own</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 17th, 2022</li>
                    </ul>

                    Supplied directly pleasant we ignorant ecstatic of jointure so if. These spoke house of we. Ask put yet excuse person see change. Do inhabiting no stimulated unpleasing of admiration he. Enquire explain another he in brandon enjoyed be service. Given mrs she first china.
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 391</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/5.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">May musical arrival beloved</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 16th, 2022</li>
                    </ul>

                    Shyness mention married son she his started now. Rose if as past near were. To graceful he elegance oh moderate attended entrance pleasure. Vulgar saw fat sudden edward way played either. Thoughts smallest at or peculiar relation breeding produced an. At depart spirit
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 36</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/6.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Be mother itself vanity</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 15th, 2022</li>
                    </ul>

                    As collected deficient objection by it discovery sincerity curiosity. Quiet decay who round three world whole has mrs man. Built the china there tried jokes which gay why. Assure in adieus wicket it is. But spoke round point and one joy. Offending her moonlight men
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 41</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/7.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Often of it tears whole</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 14th, 2022</li>
                    </ul>

                    Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if he outlived disposal. How but sons mrs lady when. Her especially are unpleasant out alteration
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 63</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/8.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Hence hopes noisy</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 13th, 2022</li>
                    </ul>

                    Considered an invitation do introduced sufficient understood instrument it. Of decisively friendship in as collecting at. No affixed be husband ye females brother garrets proceed. Least child who seven happy yet balls young. Discovery sweetness principle discourse
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 8</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/9.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Me or produce besides</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 12th, 2022</li>
                    </ul>

                    Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 82</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/10.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Offended ten old consider</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 11th, 2022</li>
                    </ul>

                    Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked occasion he oh. Is unsatiable if projecting boisterous insensible
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 21</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/11.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">Its had resolving otherwise</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 10th, 2022</li>
                    </ul>

                    Afford relied warmth out sir hearts sister use garden. Men day warmth formed admire former simple. Humanity declared vicinity continue supplied no an. He hastened am no property exercise of. Dissimilar comparison no terminated devonshire no literature on
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 49</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions mb-3">
                        <img class="card-img img-fluid" src="{{URL::asset('assets/images/demo/blog/12.jpg')}}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                <i class="ph-link"></i>
                            </a>
                        </div>
                    </div>

                    <h5 class="card-title pt-1 mb-1">
                        <a href="#" class="text-body">He moonlight difficult</a>
                    </h5>

                    <ul class="list-inline list-inline-bullet text-muted mb-3">
                        <li class="list-inline-item">By <a href="#">Eugene</a></li>
                        <li class="list-inline-item">July 9th, 2022</li>
                    </ul>

                    Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to. Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor
                </div>

                <div class="card-footer d-flex">
                    <a href="#" class="d-inline-flex align-items-center"><i class="ph-heart text-pink me-2"></i> 93</a>
                    <a href="#" class="d-inline-flex align-items-center ms-auto">Read more <i class="ph-arrow-circle-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /post grid -->


    <!-- Pagination -->
    <div class="d-flex justify-content-center pt-3 mb-3">
        <ul class="pagination pagination-flat">
            <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link rounded-pill">1</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">2</a></li>
            <li class="page-item align-self-center"><span class="mx-2">...</span></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">58</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill">59</a></li>
            <li class="page-item"><a href="#" class="page-link rounded-pill"><i class="ph-arrow-right"></i></a></li>
        </ul>
    </div>
    <!-- /pagination -->

</div>
<!-- /content area -->

@endsection
