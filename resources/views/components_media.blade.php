@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Components @endslot
@slot('subtitle') Media Objects @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Media lists -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">List layouts</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">In previous versions of Bootstrap we had a useful component called Media Objects. From v5 onwards it has been removed in favour of containers with flex utility classes. This page contains examples of media objects designed with list group component. Media lists also can be based on our flex utility classes, whatever you prefer. All examples have been taken from previous version of Limitless to keep them all in a new version.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">List with left images</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Walking away fallaciously</div>
                                        Wise that some and before yellow thus yikes mandrill one luxuriantly other fashionably much
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Recklessly won</div>
                                        Awkwardly thus when much according forwardly far grizzly adversely guilty hey below and did
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Fired or unlocked</div>
                                        Much contemptible squid crud the dear less hazy naturally hey a much twitched yet hey slovenly
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">List with right images</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <div class="flex-fill">
                                        <div class="fw-semibold">Wickedly and groundhog</div>
                                        Willing monkey horse until after some one less mature wantonly agonizing yikes and cumulative
                                    </div>

                                    <a href="#" class="d-block ms-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>
                                </div>

                                <div class="list-group-item d-flex">
                                    <div class="flex-fill">
                                        <div class="fw-semibold">And rampantly thoroughly</div>
                                        Irresolutely left manta invaluably until some ape much komodo hello marvelously endlessly
                                    </div>

                                    <a href="#" class="d-block ms-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>
                                </div>

                                <div class="list-group-item d-flex">
                                    <div class="flex-fill">
                                        <div class="fw-semibold">Less the gibbered</div>
                                        Ouch sexual fitted gosh more during alas less overpaid hello a one a far hello beat due that ouch
                                    </div>

                                    <a href="#" class="d-block ms-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Bordered list with left images</p>

                        <div class="border rounded">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <a href="#" class="d-block me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Suddenly resignedly</div>
                                            Ponderously across reproachfully austerely nonchalant one and dear under off enthusiastically
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <a href="#" class="d-block me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Yet lied cursed</div>
                                            Outdid then away amidst and around waved considering on this less less by guinea apart more
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <a href="#" class="d-block me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Far a lubberly fraternal</div>
                                            Gosh wherever up clapped tapir winced wombat nice this hen hectic effective well patted darn onto
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Bordered list with right images</p>

                        <div class="border rounded">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <div class="flex-fill">
                                            <div class="fw-semibold">Tortoise goodness</div>
                                            Reproachfully austerely nonchalant one and dear under off enthusiastically ludicrous crud
                                        </div>

                                        <a href="#" class="d-block ms-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <div class="flex-fill">
                                            <div class="fw-semibold">Overlay that far</div>
                                            On yikes awful much this irrespective vicariously a yet well vengefully dear manatee and until
                                        </div>

                                        <a href="#" class="d-block ms-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <div class="flex-fill">
                                            <div class="fw-semibold">Ponderously across</div>
                                            Wow strived rang powerlessly piranha this crud mandrill and far and armadillo spoke dishonest
                                        </div>

                                        <a href="#" class="d-block ms-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Headers in regular list</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item fw-semibold">First header</div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Ouch trout that</div>
                                        Crane jeepers avoidable around after a shined soundly the well ouch less subtly much trout then
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">And thus when</div>
                                        Less cuffed a that yikes precisely so taped past pangolin mammoth balked cute monogamously
                                    </div>
                                </div>

                                <div class="list-group-item fw-semibold">Second header</div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Far pushed much</div>
                                        Penguin sniffed as a jeepers wow cow some far less alert hence python much the barked during
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">But much lingeringly</div>
                                        Morally gosh shrank outside fraudulently hedgehog less and jeepers much overlay crab octopus
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Headers in bordered list</p>

                        <div class="border rounded">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item fw-semibold">First header</div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <a href="#" class="d-block me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">And hello spluttered</div>
                                            And egregiously much obsessive mammoth redid rankly because as along much then yikes behind
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <a href="#" class="d-block me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">One bland far</div>
                                            Foolishly yikes more far saw hey astride differently therefore clever leopard ouch underneath
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item fw-semibold">Second header</div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <a href="#" class="d-block me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Foretold remade</div>
                                            Admirably some gurgled much this jeepers made moaned stoic concentric following let brilliant
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item">
                                    <div class="d-flex my-1">
                                        <a href="#" class="d-block me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face25.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </a>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">But much lingeringly</div>
                                            Morally gosh shrank outside fraudulently hedgehog less and jeepers much overlay crab octopus
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4 mb-lg-0">
                        <p class="fw-bold mb-2">Left stackable list (on mobile)</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex flex-column flex-lg-row">
                                    <a href="#" class="d-inline-block me-lg-3 mb-2 mb-lg-0">
                                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Walking away fallaciously</div>
                                        Wise that some and before yellow thus yikes mandrill one luxuriantly other fashionably much
                                    </div>
                                </div>

                                <div class="list-group-item d-flex flex-column flex-lg-row">
                                    <a href="#" class="d-inline-block me-lg-3 mb-2 mb-lg-0">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Recklessly won</div>
                                        Awkwardly thus when much according forwardly far grizzly adversely guilty hey below and did
                                    </div>
                                </div>

                                <div class="list-group-item d-flex flex-column flex-lg-row">
                                    <a href="#" class="d-inline-block me-lg-3 mb-2 mb-lg-0">
                                        <img src="{{URL::asset('assets/images/demo/users/face24.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Fired or unlocked</div>
                                        Much contemptible squid crud the dear less hazy naturally hey a much twitched yet hey slovenly
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <p class="fw-bold mb-2">Right stackable list (on mobile)</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex flex-column flex-lg-row">
                                    <div class="flex-fill order-2 order-lg-1">
                                        <div class="fw-semibold">Wickedly and groundhog</div>
                                        Willing monkey horse until after some one less mature wantonly agonizing yikes and cumulative
                                    </div>

                                    <a href="#" class="d-inline-block ms-lg-3 mb-2 mb-lg-0 order-1 order-lg-2">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </a>
                                </div>

                                <div class="list-group-item d-flex flex-column flex-lg-row">
                                    <div class="flex-fill order-2 order-lg-1">
                                        <div class="fw-semibold">And rampantly thoroughly</div>
                                        Irresolutely left manta invaluably until some ape much komodo hello marvelously endlessly
                                    </div>

                                    <a href="#" class="d-inline-block ms-lg-3 mb-2 mb-lg-0 order-1 order-lg-2">
                                        <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </a>
                                </div>

                                <div class="list-group-item d-flex flex-column flex-lg-row">
                                    <div class="flex-fill order-2 order-lg-1">
                                        <div class="fw-semibold">Less the gibbered</div>
                                        Ouch sexual fitted gosh more during alas less overpaid hello a one a far hello beat due that ouch
                                    </div>

                                    <a href="#" class="d-inline-block ms-lg-3 mb-2 mb-lg-0 order-1 order-lg-2">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /media lists -->


    <!-- Linked media lists -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Linked media lists</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Linked media list is also based on list group component as it has all styling for link states. Use <code>list-group-borderless</code> for a simple list without vertical and horizontal borders and <code>.list-group-flush</code> for a list with horizontal borders. Add vertical padding to the list with our padding utility classes if necessary.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Linked list with left image</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Rolled out online</div>
                                        Returned toucan yikes slavishly plankton emu immaculately some a jeez labrador the boyish contrary
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Elephant gosh</div>
                                        Slung far vulture this this considerable much crud indecisive hey hello as somberly special sternly
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Before regardless</div>
                                        Conservatively disconsolate goodness more lazy less exclusively more unlike far sensational jeez some
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Linked list with right image</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="flex-fill">
                                        <div class="fw-semibold">Rolled out online</div>
                                        Returned toucan yikes slavishly plankton emu immaculately some a jeez labrador the boyish contrary
                                    </div>

                                    <div class="ms-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="flex-fill">
                                        <div class="fw-semibold">Elephant gosh</div>
                                        Slung far vulture this this considerable much crud indecisive hey hello as somberly special sternly
                                    </div>

                                    <div class="ms-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="flex-fill">
                                        <div class="fw-semibold">Before regardless</div>
                                        Conservatively disconsolate goodness more lazy less exclusively more unlike far sensational jeez some
                                    </div>

                                    <div class="ms-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Bordered linked list with left image</p>

                        <div class="border rounded">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Apart far much</div>
                                            Hey goodness much rethought oh lubber goodness beseeching so goodness floated and yet dear inside me
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Alas goodness nutria</div>
                                            Less according rude impassive the yikes onto sheared congenially steadfast lizard and deceiving some
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">As across mallard</div>
                                            Outside gosh tactful thus incongruous anteater less accidentally tiger this hey much rhinoceros minute
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Bordered linked list with right image</p>

                        <div class="border rounded">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="flex-fill">
                                            <div class="fw-semibold">Apart far much</div>
                                            Hey goodness much rethought oh lubber goodness beseeching so goodness floated and yet dear inside me
                                        </div>

                                        <div class="ms-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="flex-fill">
                                            <div class="fw-semibold">Alas goodness nutria</div>
                                            Less according rude impassive the yikes onto sheared congenially steadfast lizard and deceiving some
                                        </div>

                                        <div class="ms-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="flex-fill">
                                            <div class="fw-semibold">As across mallard</div>
                                            Outside gosh tactful thus incongruous anteater less accidentally tiger this hey much rhinoceros minute
                                        </div>

                                        <div class="ms-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4 mb-lg-0">
                        <p class="fw-bold mb-2">Linked list headers</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item fw-semibold">First header</div>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">And jeepers otter</div>
                                        One trite goodness after goodness preparatory where save despite luscious did weird far frisky
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Rabbit less out</div>
                                        Shyly and boa much jeez alas as cumulatively far and less confessedly well because before then hey
                                    </div>
                                </a>

                                <div class="list-group-item fw-semibold">Second header</div>

                                <a href="#" class="list-group-item list-group-item-action d-flex">
                                    <div class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Less caribou</div>
                                        Spoke superb relentless this jeepers because and far horse that shaky goldfish much knew this gosh
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <p class="fw-bold mb-2">Bordered linked list headers</p>

                        <div class="border rounded">
                            <div class="list-group list-group-flush">
                                <div class="list-group-item fw-semibold">First header</div>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">And jeepers otter</div>
                                            One trite goodness after goodness preparatory where save despite luscious did weird far frisky
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Rabbit less out</div>
                                            Shyly and boa much jeez alas as cumulatively far and less confessedly well because before then hey
                                        </div>
                                    </div>
                                </a>

                                <div class="list-group-item fw-semibold">Second header</div>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex my-1">
                                        <div class="me-3">
                                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
                                        </div>

                                        <div class="flex-fill">
                                            <div class="fw-semibold">Less caribou</div>
                                            Spoke superb relentless this jeepers because and far horse that shaky goldfish much knew this gosh
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /linked media lists -->


    <!-- Title and text options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Title and text options</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Typically media list consists of title, body text and image, and everything can be customized with our utility classes according to your needs. The following examples demonstrate title text options (such as colors, links and font sizes), annotations and helper text. You can use any time of text content in as many lines as you want. And this can be customized in all media list layouts.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Simple title</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Dutifully because</div>
                                        Badger hey apart and burst flung unimaginative and this goodness and however meek about near
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Casual felt more</div>
                                        Steadfastly therefore flimsy this far impudently where one sheep that let some threw that pouted
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Linked title</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <a href="#" class="d-block fw-semibold">Hound and echidna</a>
                                        That a that hence dutifully beheld hey bashful contemplated wherever as the yikes far undertook
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face12.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <a href="#" class="d-block fw-semibold">Dealt the far therefore</a>
                                        That put kneeled more surprisingly arose since inimical augustly far thus on after however ahead
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Using headings</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold text-warning">Unequivocal thanks</div>
                                        Impotently much wedded within truly amidst therefore toward as as insect pre-set where foolhardily
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">
                                            <a href="#" class="text-teal">Snuffed the reproachful</a>
                                        </div>
                                        Near one brightly some remade aside a concretely some or this and onto arch dear far gerbil so great
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Linked heading title</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face13.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <h6 class="fw-semibold mb-0"><a href="#">Set heroically amid</a></h6>
                                        Away one gosh gracefully tenably hid amid far overlay ouch oh until oyster crud much in far far
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face14.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <h6 class="fw-semibold mb-0"><a href="#">Kneeled indirect</a></h6>
                                        Strangely mounted the and as however repaid wow goodness oh falcon unproductive and some bred
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Title color</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold text-warning">Unequivocal thanks</div>
                                        Impotently much wedded within truly amidst therefore toward as as insect pre-set where foolhardily
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">
                                            <a href="#" class="text-teal">Snuffed the reproachful</a>
                                        </div>
                                        Near one brightly some remade aside a concretely some or this and onto arch dear far gerbil so great
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Muted subtitle text</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face15.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Before evidently</div>
                                        <span class="text-muted">Far jauntily manta laughed pugnacious hey hey ouch globefish far yikes crud overheard far off</span>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face16.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Luridly seagull</div>
                                        <span class="text-muted">Bled wept across mindful constructively suggestive hello fuzzily this jocosely capybara well to</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Left title annotation</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <h6 class="mb-0">Eccentrically greedily</h6>
                                            <div class="text-muted ms-3">added by Eugene</div>
                                        </div>

                                        Far coarsely or tuneful kangaroo much lantern this however oyster yikes cute unbound obscurely
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <h6 class="mb-0">Exquisitely jeepers</h6>
                                            <div class="text-muted ms-3">News and articles</div>
                                        </div>

                                        Yikes bent lopsidedly some courageous as far sobbed guffawed piously squinted iguana crane
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Right title annotation</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face17.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">However accordingly</h6>
                                            <span class="text-muted">1 hour ago</span>
                                        </div>

                                        Hello some plentiful a beneath much glanced that savage pending dashingly and hare insane dull
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face18.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h6 class="mb-0">More some met despite</h6>
                                            <span class="text-muted">Yesterday, 12:16</span>
                                        </div>

                                        Dragonfly oversold forgot ouch less darn firefly one while honey until cockatoo more as the rat
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4 mb-lg-0">
                        <p class="fw-bold mb-2">Block text annotation</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">So alas some intriguing</div>
                                        But darn discarded stubbornly far a after aboard well unimaginative ruthless and flamingo cow

                                        <div class="text-muted mt-1">
                                            <i class="ph-check me-1"></i>
                                            Just now
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">A blissful caterpillar</div>
                                        Man-of-war so where far up as less yikes thus at more yet so hardheadedly some hey darn dry now

                                        <div class="text-muted mt-1">
                                            <i class="ph-map-pin me-1"></i>
                                            4 hours ago from Thailand
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <p class="fw-bold mb-2">Inline list</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face19.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">This crud hypocritically</div>
                                        Ferret on bowed engagingly kangaroo and split contagious far one dear seagull fidgeted some

                                        <ul class="list-inline mt-1 mb-0">
                                            <li class="list-inline-item">
                                                <span class="me-1">89</span>
                                                <a href="#">
                                                    <i class="ph-caret-up text-success"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="ph-caret-down text-danger"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face20.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Dismounted pungent</div>
                                        Sexily far excited less jeepers and due hit at greyhound tryingly one adjusted cuckoo hamster

                                        <ul class="list-inline mt-1 mb-0">
                                            <li class="list-inline-item">
                                                <span class="me-1">153</span>
                                                <a href="#">
                                                    <i class="ph-caret-up text-success"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="ph-caret-down text-danger"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Reply</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">Edit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /title and text options -->


    <!-- Supported elements -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Supported elements</h5>
        </div>

        <div class="card-body">
            <p class="mb-4">Media list supports various components and elements: form controls, input fields, badges, icons, indicators, buttons, text links and many others. You can use all elements in both linked and non-linked lists. Image size can be controlled either in <code>&lt;img></code> tag with <code>width</code> and <code>height</code> attributes or via CSS. You can also use our utility classes to adjust vertical/horizontal alignment of all elements and/or change the overall look and feel.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Icon, icon list or dropdown menu</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face1.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Rhinoceros rebellious</div>
                                        One preparatory festive outran blatantly indecisively interminable bid popular much and less
                                    </div>

                                    <div class="dropdown ms-3">
                                        <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chat-text me-2"></i>
                                                Start chat
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-phone me-2"></i>
                                                Make a call
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-envelope me-2"></i>
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                Statistics
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face2.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Onto much less</div>
                                        As ouch lizard hurried less ingenuously malicious yikes belched agilely shrank more diabolically
                                    </div>

                                    <div class="dropdown ms-3">
                                        <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="ph-list"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chat-text me-2"></i>
                                                Start chat
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-phone me-2"></i>
                                                Make a call
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-envelope me-2"></i>
                                                Send mail
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                Statistics
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold mb-2">Badges</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face3.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Busted that rethought</div>
                                        Some adversely infallibly parrot far yet amazing jay much much black in oh idiotically globefish
                                    </div>

                                    <div class="ms-3">
                                        <span class="badge bg-primary">Colleague</span>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face4.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Goodness understood</div>
                                        On thus oh insolently before obsessive therefore this including made alas more dauntless snooty
                                    </div>

                                    <div class="ms-3">
                                        <span class="badge bg-danger">Partner</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold mb-2">Bordered icon</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <div class="me-3">
                                        <a href="#" class="btn bg-transparent border-success text-success rounded-pill btn-icon">
                                            <i class="ph-check"></i>
                                        </a>
                                    </div>

                                    <div class="flex-fill">
                                        Less thus overhung during rabbit goose while amid ludicrously after terribly that opposite the amicable

                                        <div class="text-muted">19 minutes ago</div>
                                    </div>

                                    <div class="dropdown ms-3">
                                        <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="ph-gear"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-clock-counter-clockwise me-2"></i>
                                                Toggle auto update
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                View statistics
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-calendar me-2"></i>
                                                Set schedule
                                            </a>
                                            <div class="divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-gear me-2"></i>
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <div class="me-3">
                                        <a href="#" class="btn bg-transparent border-danger text-danger rounded-pill btn-icon">
                                            <i class="ph-x"></i>
                                        </a>
                                    </div>

                                    <div class="flex-fill">
                                        Gosh however salmon far astride gerbil convincing kissed zealous assisted outgrew rolled until quail

                                        <div class="text-muted">7 hours ago</div>
                                    </div>

                                    <div class="dropdown ms-3">
                                        <a href="#" class="text-body d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
                                            <i class="ph-gear"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-clock-counter-clockwise me-2"></i>
                                                Toggle auto update
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-chart-line me-2"></i>
                                                View statistics
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-calendar me-2"></i>
                                                Set schedule
                                            </a>
                                            <div class="divider"></div>
                                            <a href="#" class="dropdown-item">
                                                <i class="ph-gear me-2"></i>
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 mb-lg-0">
                        <p class="fw-bold mb-2">Checkboxes</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <div class="me-3">
                                        <input type="checkbox" class="form-check-input" id="checkbox1" checked>
                                    </div>

                                    <div class="flex-fill">
                                        <label class="d-block fw-bold" for="checkbox1">Resplendent much during</label>
                                        Urchin that understood yikes special ladybug that hilariously inflexible following simply walking
                                    </div>

                                    <div class="ms-3">
                                        <a href="#" class="text-body">
                                            <i class="ph-chat-text"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <div class="me-3">
                                        <input type="checkbox" class="form-check-input" id="checkbox2" checked>
                                    </div>

                                    <div class="flex-fill">
                                        <label class="d-block fw-bold" for="checkbox2">Insect far hound</label>
                                        Hey where more that much meanly shivered salamander oh spent regarding gosh among much
                                    </div>

                                    <div class="ms-3">
                                        <a href="#" class="text-body">
                                            <i class="ph-chat-text"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4">
                        <p class="fw-bold mb-2">Status badges</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face5.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Marcus Maison</div>
                                        Kiwi that dear because wow barring dear temperate narrowly securely indecently this persistently
                                    </div>

                                    <div class="ms-3">
                                        <div class="bg-danger border-danger rounded-pill p-1"></div>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face6.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Benjamin Wallace</div>
                                        Yikes jeez bid and on after man-of-war insect owing far far dalmatian vicariously crud goodness
                                    </div>

                                    <div class="ms-3">
                                        <div class="border border-success rounded-pill p-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold mb-2">Pill badges</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face7.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">This exclusive past</div>
                                        Forward the some goodness suddenly squirrel therefore sadly notwithstanding onto alas the save
                                    </div>

                                    <div class="ms-3">
                                        <span class="badge bg-warning rounded-pill">83</span>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <a href="#" class="d-block me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face8.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Oh shoddy about</div>
                                        Much untiringly darn learned a and goodness off until much excepting where jeez one in softly
                                    </div>

                                    <div class="ms-3">
                                        <span class="badge bg-teal rounded-pill">39</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="fw-bold mb-2">Object badges</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <div class="me-3 position-relative">
                                        <a href="#">
                                            <img src="{{URL::asset('assets/images/demo/users/face9.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                        </a>
                                        <span class="badge bg-teal position-absolute top-0 start-100 translate-middle rounded-pill">9</span>
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">This conjointly some</div>
                                        Thus boa much thus innocent thus some in amidst irrespective oriole cost absently rat against
                                    </div>

                                    <div class="ms-3">
                                        <label class="form-switch">
                                            <input type="checkbox" class="form-check-input" checked>
                                        </label>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <div class="me-3 position-relative">
                                        <a href="#">
                                            <img src="{{URL::asset('assets/images/demo/users/face10.jpg')}}" class="rounded-circle" width="40" height="40" alt="">
                                        </a>
                                        <span class="badge bg-warning position-absolute top-0 start-100 translate-middle rounded-pill">6</span>
                                    </div>

                                    <div class="flex-fill">
                                        <div class="fw-semibold">Crud relentlessly bid</div>
                                        Creative a far crud jeepers snickered well winced goodness the decently jeepers smelled outran
                                    </div>

                                    <div class="ms-3">
                                        <label class="form-switch">
                                            <input type="checkbox" class="form-check-input">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="fw-bold mb-2">Radios</p>

                        <div class="border rounded">
                            <div class="list-group list-group-borderless py-2">
                                <div class="list-group-item d-flex">
                                    <div class="me-3">
                                        <input type="radio" class="form-check-input" name="radio-inputs" id="radio1" checked>
                                    </div>

                                    <div class="flex-fill">
                                        <label class="d-block fw-bold" for="radio1">Hello underneath</label>
                                        Jeepers magically enthusiastically hummingbird that jeez and more a grumbled a shark sorely about
                                    </div>

                                    <div class="ms-3">
                                        <a class="text-body">
                                            <i class="ph-chat-text"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="list-group-item d-flex">
                                    <div class="me-3">
                                        <input type="radio" class="form-check-input" name="radio-inputs" id="radio2">
                                    </div>

                                    <div class="flex-fill">
                                        <label class="d-block fw-bold" for="radio2">Unnecessary invoked less</label>
                                        Amid less manifest soggily diversely but far tentative away however this rhinoceros far droll far
                                    </div>

                                    <div class="ms-3">
                                        <a class="text-body">
                                            <i class="ph-chat-text"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /supported elements -->

</div>
<!-- /content area -->

@endsection
