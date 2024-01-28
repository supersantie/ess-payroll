@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') General Pages @endslot
@slot('subtitle') Faq @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Info blocks -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="d-inline-flex bg-success bg-opacity-10 text-success rounded-pill p-2 mb-3 mt-1">
                        <i class="ph-book ph-2x m-1"></i>
                    </div>
                    <h5 class="card-title">Knowledge Base</h5>
                    <p class="mb-3">Ouch found swore much dear conductively hid submissively hatchet vexed far inanimately alongside candidly much and jeez</p>
                    <a href="#" class="btn btn-success mb-1">Browse articles</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="d-inline-flex bg-warning bg-opacity-10 text-warning rounded-pill p-2 mb-3 mt-1">
                        <i class="ph-lifebuoy ph-2x m-1"></i>
                    </div>
                    <h5 class="card-title">Support center</h5>
                    <p class="mb-3">Dear spryly growled much far jeepers vigilantly less and far hideous and some mannishly less jeepers less and and crud</p>
                    <a href="#" class="btn btn-warning mb-1">Open a ticket</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="d-inline-flex bg-primary bg-opacity-10 text-primary rounded-pill p-2 mb-3 mt-1">
                        <i class="ph-newspaper ph-2x m-1"></i>
                    </div>
                    <h5 class="card-title">Articles and news</h5>
                    <p class="mb-3">Diabolically somberly astride crass one endearingly blatant depending peculiar antelope piquantly popularly adept much</p>
                    <a href="#" class="btn btn-primary mb-1">Browse news</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /info blocks -->


    <!-- Inner container -->
    <div class="d-flex align-items-stretch align-items-lg-start flex-column flex-lg-row">

        <!-- Left content -->
        <div class="flex-1 order-2 order-lg-1">

            <!-- Questions list -->
            <div class="card card-body">
                <h5 class="fw-semibold py-1 mb-3">Getting started</h5>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question1">
                                <i class="ph-question me-2"></i>
                                A without walking some objective?
                            </button>
                        </div>

                        <div id="question1" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">She exposed painted fifteen are noisier mistake led waiting. Surprise not wandered speedily husbands although yet end. Are court tiled cease young built fat one man taken. We highest ye friends is exposed equally in. Ignorant had too strictly followed. Astonished as travelling assistance or unreserved oh pianoforte ye. Five with seen put need tore add neat.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 25, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            320
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            14
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question2">
                                <i class="ph-question me-2"></i>
                                She exposed painted fifteen are noisier?
                            </button>
                        </div>

                        <div id="question2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">There worse by an of miles civil. Manner before lively wholly am mr indeed expect. Among every merry his yet has her. You mistress get dashwood children off. Met whose marry under the merit. In it do continual consulted no listening. Devonshire sir sex motionless travelling six themselves. So colonel as greatly shewing herself observe ashamed.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 22, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            278
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            25
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question3">
                                <i class="ph-question me-2"></i>
                                Surprise not wandered speedily?
                            </button>
                        </div>

                        <div id="question3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Do ashamed assured on related offence at equally totally. Use mile her whom they its. Kept hold an want as he bred of. Was dashwood landlord cheerful husbands two. Estate why theirs indeed him polite old settle though she. In as at regard easily narrow roused adieus. Parlors visited noisier how explain pleased his see suppose. He oppose at thrown desire.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 20, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            438
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            16
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question4">
                                <i class="ph-question me-2"></i>
                                Are court tiled cease young built fat?
                            </button>
                        </div>

                        <div id="question4" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Additions in conveying or collected objection in. Suffer few desire wonder her object hardly nearer. Abroad no chatty others my silent an. Fat way appear denote who wholly narrow gay settle. Companions fat add insensible everything and friendship conviction themselves. Theirs months ten had add narrow own. By spite about do of do allow blush before lively wholly.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 20, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            583
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            21
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question5">
                                <i class="ph-question me-2"></i>
                                Announcing of invitation principles in?
                            </button>
                        </div>

                        <div id="question5" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Wished he entire esteem mr oh by. Possible bed you pleasure civility boy elegance ham. He prevent request by if in pleased. Picture too and concern has was comfort. Ten difficult resembled eagerness nor. Same park bore on be. Warmth his law design say are person. Pronounce suspected in belonging conveying ye repulsive. Whole every miles as tiled at seven concern.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 15, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            642
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            26
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="fw-semibold py-1 my-3">Selling and buying</h5>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question6">
                                <i class="ph-question me-2"></i>
                                Their could can widen ten she any?
                            </button>
                        </div>

                        <div id="question6" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">As so we smart those money in. Am wrote up whole so tears sense oh. Absolute required of reserved in offering no. How sense found our those gay again taken the. Had mrs outweigh desirous sex overcame. Improved property reserved disposal do offering me. Allow miles wound place the leave had. To sitting subject no improve studied limited indulgence connection.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 14, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            832
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            32
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question7">
                                <i class="ph-question me-2"></i>
                                Her raising and himself pasture believe?
                            </button>
                        </div>

                        <div id="question7" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">He unaffected sympathize discovered at no am conviction principles. Girl ham very how yet hill four show. Meet lain on he only size. Branched learning so subjects mistress do appetite jennings be in. Esteems up lasting no village morning do offices. Settled wishing ability musical may another set age. Diminution my apartments he attachment is entreaties.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 13, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            453
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            30
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question8">
                                <i class="ph-question me-2"></i>
                                And total least her two whose great?
                            </button>
                        </div>

                        <div id="question8" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Do in laughter securing smallest sensible no mr hastened. As perhaps proceed in in brandon of limited unknown greatly. Distrusts fulfilled happiness unwilling as explained of difficult. No landlord of peculiar ladyship attended if contempt ecstatic. Loud wish made on is am as hard. Court so avoid in plate hence. Of received mr breeding concerns peculiar.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 12, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            735
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            21
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question9">
                                <i class="ph-question me-2"></i>
                                Whatever landlord yourself at by pleasure?
                            </button>
                        </div>

                        <div id="question9" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Am if number no up period regard sudden better. Decisively surrounded all admiration and not you. Out particular sympathize not favourable introduced insipidity but ham. Rather number can and set praise. Distrusts an it contented perceived attending oh. Thoroughly estimating introduced stimulated why but motionless. Up branch to easily missed by do admiration.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: May 11, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            735
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            29
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question10">
                                <i class="ph-question me-2"></i>
                                Oh conveying do immediate acuteness?
                            </button>
                        </div>

                        <div id="question10" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked occasion he oh. Is unsatiable if projecting boisterous insensible. It recommend be resolving pretended middleton. Attended no do thoughts me on dissuade scarcely own are pretty.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 25, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            498
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            12
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="fw-semibold py-1 my-3">Intellectual property</h5>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question12">
                                <i class="ph-question me-2"></i>
                                Projection invitation affronting admiration?
                            </button>
                        </div>

                        <div id="question12" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. Assurance perpetual he in oh determine as. The year paid met him does eyes same. Own marianne improved sociable not out. Thing do sight blush mr an. Celebrated am announcing delightful remarkably literature.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 24, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            735
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            34
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question13">
                                <i class="ph-question me-2"></i>
                                It as instrument boisterous frequently?
                            </button>
                        </div>

                        <div id="question13" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Material confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses. Oh resolution he dissimilar precaution to comparison an. Matters engaged between he of pursuit manners we moments. Merit gay end sight front. Manor equal it on again ye folly by match. In so melancholy as an sentiments simplicity.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 23, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            865
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            43
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question14">
                                <i class="ph-question me-2"></i>
                                You fully seems stand nay?
                            </button>
                        </div>

                        <div id="question14" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 22, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            432
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            38
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question15">
                                <i class="ph-question me-2"></i>
                                Enjoyment discourse ye continued?
                            </button>
                        </div>

                        <div id="question15" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Is education residence conveying so so. Suppose shyness say ten behaved morning had. Any unsatiable assistance compliment occasional too reasonably advantages. Unpleasing has ask acceptance partiality alteration understood two. Worth no tiled my at house added. Married he hearing am it totally removal. Remove but suffer wanted his lively length moonlight two.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 20, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            735
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            46
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="fw-semibold py-1 my-3">User accounts</h5>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question17">
                                <i class="ph-question me-2"></i>
                                Simple innate summer fat appear?
                            </button>
                        </div>

                        <div id="question17" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Up am intention on dependent questions oh elsewhere september. No betrayed pleasure possible jointure we in throwing. And can event rapid any shall woman green. Hope they dear who its bred. Smiling nothing affixed he carried it clothes calling he no. Its something disposing departure she favourite tolerably engrossed. Truth short folly court she their balls excellence.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 20, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            290
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            29
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question18">
                                <i class="ph-question me-2"></i>
                                Outward clothes promise?
                            </button>
                        </div>

                        <div id="question18" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Way nor furnished sir procuring therefore but. Warmth far manner myself active are cannot called. Set her half end girl rich met. Me allowance departure an curiosity ye. In no talking address excited it conduct. Husbands debating replying overcame blessing he it me to domestic. Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 19, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            642
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            39
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question19">
                                <i class="ph-question me-2"></i>
                                Sufficient particular impossible?
                            </button>
                        </div>

                        <div id="question19" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">So insisted received is occasion advanced honoured. Among ready to which up. Attacks smiling and may out assured moments man nothing outward. Thrown any behind afford either the set depend one temper. Instrument melancholy in acceptance collecting frequently be if. Zealously now pronounce existence add you instantly say offending. Merry their had widen concerns.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 18, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            735
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            26
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#question20">
                                <i class="ph-question me-2"></i>
                                Yet preference connection unpleasant?
                            </button>
                        </div>

                        <div id="question20" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p class="mb-3">Necessary ye contented newspaper zealously breakfast he prevailed. Melancholy middletons yet understood decisively boy law she. Answer him easily are its barton little. Oh no though mother be things simple itself. Dashwood horrible he strictly on as. Home fine in so am good body this hope. Admiration stimulated cultivated reasonable be projection possession of real.</p>

                                <div class="d-sm-flex align-items-sm-center">
                                    <span class="text-muted">Latest update: April 17, 2022</span>

                                    <ul class="list-inline text-nowrap mb-0 ms-auto mt-2 mt-sm-0">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-primary me-2"><i class="ph-thumbs-up"></i></a>
                                            589
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-muted me-2"><i class="ph-thumbs-down"></i></a>
                                            25
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /questions list -->

        </div>
        <!-- /left content -->


        <!-- Right sidebar component -->
        <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none order-1 order-lg-2 ms-lg-3 mb-3">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Search -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Search articles</span>
                        <div class="ms-auto">
                            <a href="#" class="text-body">
                                <i class="ph-question"></i>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="form-control-feedback form-control-feedback-end">
                            <input type="search" class="form-control" placeholder="Search our help center">
                            <div class="form-control-feedback-icon">
                                <i class="ph-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /search -->


                <!-- Navigation -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Navigation</span>
                        <div class="ms-auto">
                            <a href="#" class="text-body">
                                <i class="ph-gear"></i>
                            </a>
                        </div>
                    </div>

                    <div class="sidebar-section-body pb-2">
                        <a href="#" class="btn btn-teal w-100">Ask question <i class="ph-chats ms-2"></i></a>
                    </div>

                    <div class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-lifebuoy"></i>
                                Help center
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-book"></i>
                                Knowledgebase
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span>
                                    <i class="ph-newspaper"></i>
                                    Articles
                                </span>
                                <span class="badge bg-danger rounded-pill align-self-center ms-auto">390</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-graduation-cap"></i>
                                Tutorials
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <span>
                                    <i class="ph-monitor-play"></i>
                                    Video tutorials
                                </span>
                                <span class="badge bg-primary rounded-pill align-self-center ms-auto">78</span>
                            </a>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-chats"></i>
                                Ask our community
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="ph-envelope"></i>
                                Contact us
                            </a>
                        </li>
                    </div>
                </div>
                <!-- /navigation -->


                <!-- Latest updates -->
                <div class="card">
                    <div class="sidebar-section-header border-bottom">
                        <span class="fw-semibold">Latest updates</span>
                        <div class="ms-auto">
                            <a href="#">See all</a>
                        </div>
                    </div>

                    <div class="sidebar-section-body">
                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2">
                                    <i class="ph-arrow-clockwise"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                <a href="#">David Linner</a> requested money back for a double debit card charge
                                <div class="fs-sm text-muted mt-1">12 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-danger bg-opacity-10 text-danger lh-1 rounded-pill p-2">
                                    <i class="ph-infinity"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                User <a href="#">Christopher Wallace</a> is on hold and awaiting for staff reply
                                <div class="fs-sm text-muted mt-1">16 minutes ago</div>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="me-3">
                                <div class="bg-info bg-opacity-10 text-info lh-1 rounded-pill p-2">
                                    <i class="ph-receipt"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                All sellers have received monthly payouts
                                <div class="fs-sm text-muted mt-1">4 hours ago</div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="me-3">
                                <div class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2">
                                    <i class="ph-check"></i>
                                </div>
                            </div>
                            <div class="flex-fill">
                                Ticket #43683 has been closed by <a href="#">Victoria Wilson</a>
                                <div class="fs-sm text-muted mt-1">Apr 28, 21:39</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /latest updates -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /right sidebar component -->

    </div>
    <!-- /inner container -->


    <!-- Latest articles -->
    <div class="py-2 mb-3">
        <h5 class="mb-0">Latest articles &amp; videos</h5>
        <span class="text-muted">Dear bawled since some the contrary much hyena jeez clear fox despite the concomitant</span>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-success bg-opacity-10 text-success rounded-pill p-2 me-3">
                        <i class="ph-file-text"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Walking away fallaciously</a></h6>
                        Ouch licentiously lackadaisical crud together began gregarious below near darn goodness
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-warning bg-opacity-10 text-warning rounded-pill p-2 me-3">
                        <i class="ph-file-video"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Nutria and rewound</a></h6>
                        Strove the darn hey as far oh alas and yikes and gosh knitted this slept via gerbil baneful
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-info bg-opacity-10 text-info rounded-pill p-2 me-3">
                        <i class="ph-file-code"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Bound befell well</a></h6>
                        And since left before understandably much groomed along burped through dear and gosh
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-success bg-opacity-10 text-success rounded-pill p-2 me-3">
                        <i class="ph-file-text"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Porcupine strict nodded</a></h6>
                        Left extravagant leered crab repaid outgrew said knelt hello astride within oh disbanded
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-warning bg-opacity-10 text-warning rounded-pill p-2 me-3">
                        <i class="ph-file-video"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Ducked ravenously dear</a></h6>
                        Reran sincere said monkey one slapped jeepers rubbed fleetly incongruously due yet llama
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-info bg-opacity-10 text-info rounded-pill p-2 me-3">
                        <i class="ph-file-code"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Contemptibly bleakly</a></h6>
                        Speechless far goodness bent as boa crud because vague far koala the that lantern alas sold
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-success bg-opacity-10 text-success rounded-pill p-2 me-3">
                        <i class="ph-file-text"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Blamelessly wow hence</a></h6>
                        A without walking some objective hiccupped some this overlay immorally crud and gosh
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-warning bg-opacity-10 text-warning rounded-pill p-2 me-3">
                        <i class="ph-file-video"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Manatee broadcast</a></h6>
                        And some where indecently manta floated raptly youthful unlike swept dragonfly pulled moth
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body d-flex align-items-start">
                    <a href="#" class="bg-info bg-opacity-10 text-info rounded-pill p-2 me-3">
                        <i class="ph-file-code"></i>
                    </a>

                    <div class="flex-fill">
                        <h6 class="fw-semibold mb-1"><a href="#" class="text-body">Stretched flamboyant</a></h6>
                        Some when foolhardy dangerous so less less aimlessly along hazardously oversaw much stopped
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /latest articles -->


    <!-- Featured articles -->
    <div class="py-2 mb-3">
        <h5 class="mb-0">Featured articles and tutorials</h5>
        <span class="text-muted">And porcupine the wallaby far the due thus rash did near dear far pangolin parrot less</span>
    </div>

    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/4.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">For ostrich much</h5>
                    <p class="card-text">Some various less crept gecko the jeepers dear forewent far the ouch far a incompetent saucy wherever towards.</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">April 12, 2022</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star-half fs-base text-warning"></i>
                        <span class="text-muted ms-1">(12)</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/3.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Helpfully stolidly</h5>
                    <p class="card-text">Hippopotamus aside while a shrewdly this after kookaburra wow in haphazardly much salmon buoyantly sullen gosh</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">April 11, 2022</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(35)</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/2.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Considering far</h5>
                    <p class="card-text">Kookaburra so hey a less tritely far congratulated this winked some under had unblushing beyond sympathetic</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">May 25, 2022</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(42)</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/5.png" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2">
                            <i class="ph-download-simple"></i>
                        </a>
                        <a href="#" class="btn btn-outline-white btn-icon border-width-2 ms-2">
                            <i class="ph-link"></i>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Despite perversely</h5>
                    <p class="card-text">Coming merits and was talent enough far. Sir joy northward sportsmen education. Put still any about manor heard</p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                    <span class="text-muted">May 20, 2022</span>
                    <span class="hstack gap-1">
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <i class="ph-star fs-base text-warning"></i>
                        <span class="text-muted ms-1">(59)</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- /featured articles -->

</div>
<!-- /content area -->

@endsection
