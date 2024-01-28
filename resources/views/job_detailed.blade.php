@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Job Search @endslot
@slot('subtitle') Detailed @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Details -->
    <div class="card">
        <div class="card-body">
            <div class="d-lg-flex align-items-lg-center mb-4">
                <a href="#" class="d-block me-lg-3 mb-3 mb-lg-0">
                    <img src="{{URL::asset('assets/images/demo/brands/microsoft.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h5 class="mb-0">Interaction UX/UI Industrial Designer</h5>
                    <ul class="list-inline list-inline-bullet text-muted mb-0">
                        <li class="list-inline-item">Utrecht, Netherlands</li>
                        <li class="list-inline-item">3 days ago</li>
                    </ul>
                </div>

                <div class="ms-lg-3 mt-2 mt-lg-0">
                    <a href="#" class="btn btn-primary"><i class="ph-envelope me-2"></i> Apply for this job</a>
                </div>
            </div>

            <div class="mb-4">
                <h6>Job Description</h6>

                <p>Named among Fortune’s 2016 World’s Most Admired Companies, Flex offers a world of innovation, learning opportunities, and a strong reputation as environmentally responsible citizens. We are a leading sketch-to-scale™ company that designs and builds intelligent products for a connected world. With more than 200,000 professionals across 30 countries, and a promise to help the world Live smarter™, Flex provides innovative design, engineering, manufacturing, real-time supply chain insight and logistics services to companies of all sizes in various industries and end-markets.</p>

                <p>With more than 100,000 team members globally, we promote an environment that is rooted in the entrepreneurial spirit in which the company was founded. Dell ’ s team members are committed to serving our communities, regularly volunteering for over 1,500 non-profit organizations. The company has also received many accolades from employer of choice to energy conservation. Our team members follow an open approach to technology innovation and believe that technology is essential for human success.</p>

                <p>We are looking for a <strong>Interaction UX/UI Industrial Designer</strong> for our <strong>Product Development</strong> team!</p>
            </div>

            <div class="mb-4">
                <h6>Responsibilities:</h6>

                <p class="mb-3">You will work closely with our product owners and the analytics team to help drive and ensure a best-in-class user experience on web, tablet and mobile platforms. With your knowledge and passion for keeping up-to-date with the latest advances in user interface design and web related technologies. You will be creating high quality designs with the goal of ensuring continual improvement of our sites. To realise this you will guide and set the standards and design principles for all of our brands to follow and work towards to enhance their online success.</p>

                <ul class="list">
                    <li>Gather, analyze, record and report on current market information with regard to the latest transportation methods.</li>
                    <li>Work with the team to determine company and customer needs and make recommendations on cost effective transportation methods and assist in price negotiations if appropriate.</li>
                    <li>Ensures lowest cost transportation by analyzing company and customer needs, researching transportation methods and auditing carrier costs and performances.</li>
                    <li>Ensure laws, rules and regulations regarding shipping/transportation methods are adhered to and prepares applications for appropriate certifications and licenses.</li>
                    <li>Prepare application for import / export control certifications and licenses (control documents).</li>
                    <li>Maintain logs and compile information on routes, rates and services on various vendors.</li>
                    <li>Arranges shipping details such as packing, shipping, and routing of product.</li>
                    <li>Analyzes and recommends transportation and freight costs as well as appropriate routing and carriers to be used.</li>
                    <li>Plans, schedules, and routes inbound and outbound domestic and international shipments of freight, using knowledge of applicable laws, tariffs, and Flextronics policies.</li>
                    <li>Be familiar with compliance required for corporate, and facility policies and procedures and assist the team in ensuring the highest standards are adhered to in the process.</li>
                    <li>Ensure Traffic Metrics are maintained and updated on a daily/weekly/monthly basis.</li>
                    <li>Establish and maintain good relationships with agents / suppliers in order to achieve quality of service and consistent cost reduction.</li>
                    <li>May schedule company vehicles for service and normal maintenance checks and is responsible for ensuring that all are registered and have the proper insurance.</li>
                    <li>Support the team in terms of knowledge and experience in dealing with daily operational and transportation issues.</li>
                </ul>
            </div>

            <div class="mb-4">
                <h6>Requirements:</h6>
                <ul class="list">
                    <li>Undergraduate Industrial Design/Graphic Design degree and 6-8 years relevant experience or Graduate degree in a related field, plus 4-6 years relevant experience</li>
                    <li>Strong skillset in digital design with an emphasis on Windows, mobile (iOS/Android), and web User Interfaces</li>
                    <li>Ability to distill complex problems into intuitive, clean, user friendly designs</li>
                    <li>Expert in User Experience concepts, Information Architecture, and software brand strategy</li>
                    <li>Experience with creating detailed workflow specifications and behaviors for development teams</li>
                    <li>Can process and integrate research studies, reports, trends, data, and information into plans, deliverables, and recommendations</li>
                </ul>
            </div>

            <div class="mb-4">
                <h6>Desired Skills and Experience:</h6>
                <ul class="list">
                    <li>
                        <strong class="d-block">Strategic Thinking.</strong>
                        You will not only solve design issues but will proactively offer ideas and insights to improve the customer's experience and visual challenges.
                    </li>
                    <li>
                        <strong class="d-block">Creative Suite.</strong>
                        Primarily Photoshop and Illustrator with some InDesign. Experience with Adobe Muse is also helpful.
                    </li>
                    <li>
                        <strong class="d-block">Typography.</strong>
                        We need a designer who knows typography visual hierarchy and styles and how to use them properly. Your work will be for the whole EMEA region and be translated into dozens of languages. Any experience with Asian and Middle Eastern languages and fonts will be useful.
                    </li>
                    <li>
                        <strong class="d-block">Experimentation.</strong>
                        Experience optimizing designs based on A/B testing is a plus.
                    </li>
                    <li>
                        <strong class="d-block">Communication.</strong>
                        We need someone who can own their time but also knows how to ask the right questions to ensure the right message is communicated in the right way.
                    </li>
                    <li>
                        <strong class="d-block">Marketing.</strong>
                        You are familiar with and have previously worked on a marketing team.
                    </li>
                    <li>
                        <strong class="d-block">Asset Management.</strong>
                        Assist with development and maintenance of a digital asset management system.
                    </li>
                </ul>
            </div>

            <div class="mb-4">
                <h6>What we offer:</h6>
                <ul class="list">
                    <li>A learning prone environment where employee development and satisfaction lies at the heart of the organisation</li>
                    <li>You choose and change your workplace besides our open office in our café area, or your home</li>
                    <li>Life at Dell means collaborating with dedicated professionals with a passion for technology</li>
                    <li>When we see something that could be improved, we get to work inventing the solution</li>
                    <li>Our people demonstrate our winning culture through positive and meaningful relationship</li>
                    <li>We invest in our people and offer a series of programs that enables them to pursue a career that fulfills their potential</li>
                    <li>Our team members ’ health and wellness is our priority as well as rewarding them for their hard work</li>
                </ul>
            </div>

            <div class="mb-4">
                <h6>Interested?</h6>
                <p>We look forward to hearing from you! Please apply directly using the apply button below or via our website. In case you have any further questions about the role, you are welcome to contact Elin Akerstrom, Recruitment Specialist on phone +3630 2984732.</p>
            </div>

            <div class="d-sm-flex">
                <a href="#" class="btn btn-primary">
                    <i class="ph-envelope me-2"></i>
                    Apply for this job
                </a>

                <div class="ms-sm-auto mt-2 mt-sm-0">
                    <a href="#" class="btn btn-light">
                        <i class="ph-check me-2"></i>
                        Save this job
                    </a>
                </div>

                <div class="ms-sm-3 mt-2 mt-sm-0">
                    <a href="#" class="btn btn-light">
                        <i class="ph-share me-2"></i>
                        Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /details -->


    <!-- Company profile -->
    <h6 class="pt-2 mb-2">Company profile</h6>
    <div class="card">
        <div class="card-body">
            <div class="d-lg-flex align-items-lg-center mb-3">
                <a href="#" class="d-block me-3">
                    <img src="{{URL::asset('assets/images/demo/brands/microsoft.png')}}" class="rounded" width="44" height="44" alt="">
                </a>

                <div class="flex-fill">
                    <h5 class="mb-0">Microsoft</h5>
                    <ul class="list-inline list-inline-bullet text-muted mb-0">
                        <li class="list-inline-item">IT Services</li>
                    </ul>
                </div>

                <div class="ms-3">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="btn btn-primary"><i class="ph-list me-2"></i> All positions</a></li>
                        <li class="list-inline-item"><a href="#" class="btn btn-light"><i class="ph-plus me-2"></i> Follow</a></li>
                    </ul>
                </div>
            </div>

            <p>Across a Global footprint, we believe we’re at our best when you’re at yours. From our diverse workforce, our flexible working policies to our creative work spaces, we embrace a culture of learning and sharing to develop our next stage growth. It’s in our hearts to push forward, to create a better future, to never rest and find new ways that help people communicate.</p>

            We are committed to developing the very best people by offering a flexible, motivating and inclusive workplace in which talent is truly recognised and rewarded. We respect, value and celebrate our people’s individual differences - we are not only multinational but multicultural too. That’s what we mean when we say Power to you.
        </div>
    </div>
    <!-- /company profile -->


    <!-- Similar jobs -->
    <h6 class="pt-2 mb-2">Similar jobs</h6>
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-body">
                <div class="d-sm-flex align-items-sm-start">
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
            </div>

            <div class="card card-body">
                <div class="d-sm-flex align-items-sm-start">
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
            </div>

            <div class="card card-body">
                <div class="d-sm-flex align-items-sm-start">
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
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card card-body">
                <div class="d-sm-flex align-items-sm-start">
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
            </div>

            <div class="card card-body">
                <div class="d-sm-flex align-items-sm-start">
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
            </div>

            <div class="card card-body">
                <div class="d-sm-flex align-items-sm-start">
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
            </div>
        </div>
    </div>
    <!-- /similar jobs -->

</div>
<!-- /content area -->

@endsection
