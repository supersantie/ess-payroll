@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Job Search @endslot
@slot('subtitle') List @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- List layout -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Open positions</h5>
        </div>

        <div class="list-group list-group-flush">
            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/dell.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Interaction UX/UI Industrial Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Dell</a></li>
                        <li class="list-inline-item">Amsterdam, Netherlands</li>
                    </ul>

                    Extended kindness trifling remember he confined outlived if. Assistance sentiments yet unpleasing say. Open they an busy they my such high. An active dinner wishes at unable hardly no talked on. Immediate him her resolving his favourite. Wished denote abroad at branch at. Mind what no by kept.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="badge bg-primary">New</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/northface.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Front-End Designer / Developer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">The North Face</a></li>
                        <li class="list-inline-item">The Hague, Netherlands</li>
                    </ul>

                    Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten humoured greatest and yourself besides country.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="badge bg-primary">New</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/ibm.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">UX Lead Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">IBM</a></li>
                        <li class="list-inline-item">Lelystad, Netherlands</li>
                    </ul>

                    Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">3 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/cnn.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Designer, CRM</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">CNN</a></li>
                        <li class="list-inline-item">Rotterdam, Netherlands</li>
                    </ul>

                    At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design number winter see. Oh be me sure wise.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">4 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/transferwise.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Senior UX Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Transfer Wise</a></li>
                        <li class="list-inline-item">Nijmegen, Netherlands</li>
                    </ul>

                    By an outlived insisted procured improved am. Paid hill fine ten now love even leaf. Supplied feelings mr of dissuade recurred no it offering honoured. Am of of in collecting devonshire favourable excellence. Her sixteen end ashamed cottage yet reached get hearing invited. Resources ourselves.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">5 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/uber.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">UI Designer E-commerce</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Uber</a></li>
                        <li class="list-inline-item">Utrecht, Netherlands</li>
                    </ul>

                    Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">6 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/ing.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">FPGA Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">ING Bank</a></li>
                        <li class="list-inline-item">Eindhoven, Netherlands</li>
                    </ul>

                    By so delight of showing neither believe he present. Deal sigh up in shew away when. Pursuit express no or prepare replied. Wholly formed old latter future but way she. Day her likewise smallest expenses judgment building man carriage gay. Considered introduced themselves mr to discretion at.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">7 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/amazon.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Medior JAVA Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Amazon</a></li>
                        <li class="list-inline-item">Baarn, Netherlands</li>
                    </ul>

                    Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned behind polite piqued enough at. Forbade few through inquiry blushes you. Cousin no itself eldest it in dinner latter missed no.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">8 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/facebook.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Full-stack UX Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Facebook</a></li>
                        <li class="list-inline-item">Nijmegen, Netherlands</li>
                    </ul>

                    Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly answered.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">9 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/microsoft.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Front End Web Developer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Microsoft</a></li>
                        <li class="list-inline-item">Coevorden, Netherlands</li>
                    </ul>

                    Out believe has request not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued spring. Down has rose feel find man. Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">10 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/dell.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Interaction UX/UI Industrial Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Dell</a></li>
                        <li class="list-inline-item">Amsterdam, Netherlands</li>
                    </ul>

                    Extended kindness trifling remember he confined outlived if. Assistance sentiments yet unpleasing say. Open they an busy they my such high. An active dinner wishes at unable hardly no talked on. Immediate him her resolving his favourite. Wished denote abroad at branch at. Mind what no by kept.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">12 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/northface.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Front-End Designer / Developer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">The North Face</a></li>
                        <li class="list-inline-item">The Hague, Netherlands</li>
                    </ul>

                    Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten humoured greatest and yourself besides country.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">13 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/ibm.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">UX Lead Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">IBM</a></li>
                        <li class="list-inline-item">Lelystad, Netherlands</li>
                    </ul>

                    Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son musical adapted. Contrasted interested eat alteration pianoforte sympathize was.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">14 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/cnn.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Designer, CRM</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">CNN</a></li>
                        <li class="list-inline-item">Rotterdam, Netherlands</li>
                    </ul>

                    At as in understood an remarkably solicitude. Mean them very seen she she. Use totally written the observe pressed justice. Instantly cordially far intention recommend estimable yet her his. Ladies stairs enough esteem add fat all enable. Needed its design number winter see. Oh be me sure wise.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">15 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/transferwise.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">Senior UX Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Transfer Wise</a></li>
                        <li class="list-inline-item">Nijmegen, Netherlands</li>
                    </ul>

                    By an outlived insisted procured improved am. Paid hill fine ten now love even leaf. Supplied feelings mr of dissuade recurred no it offering honoured. Am of of in collecting devonshire favourable excellence. Her sixteen end ashamed cottage yet reached get hearing invited. Resources ourselves.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">16 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/uber.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">UI Designer E-commerce</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">Uber</a></li>
                        <li class="list-inline-item">Utrecht, Netherlands</li>
                    </ul>

                    Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">17 days ago</span>
                </div>
            </div>

            <div class="list-group-item d-flex flex-column flex-sm-row align-items-start py-3">
                <a href="#" class="d-block me-sm-3 mb-3 mb-sm-0">
                    <img src="{{URL::asset('assets/images/demo/brands/ing.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h6 class="mb-0">
                        <a href="#">FPGA Designer</a>
                    </h6>

                    <ul class="list-inline list-inline-bullet text-muted mb-2">
                        <li class="list-inline-item"><a href="#" class="text-body">ING Bank</a></li>
                        <li class="list-inline-item">Eindhoven, Netherlands</li>
                    </ul>

                    By so delight of showing neither believe he present. Deal sigh up in shew away when. Pursuit express no or prepare replied. Wholly formed old latter future but way she. Day her likewise smallest expenses judgment building man carriage gay. Considered introduced themselves mr to discretion at.
                </div>

                <div class="flex-shrink-0 ms-sm-3 mt-2 mt-sm-0">
                    <span class="text-muted">18 days ago</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /list layout -->


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
