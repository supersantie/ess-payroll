@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Translation @endslot
@slot('subtitle') Fallback Language @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Fallback language -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Fallback language</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Example of defined <code>fallback</code> language. If user selects any language that is missed or detected user navigator language doesn't exist in your <code>/locales/</code> folder, defined fallback language will be loaded. In this example Spanish and Italian language files don't exist in <code>/locales/</code> folder. When one of these languages is selected, English language specified in <code>fallbackLng</code> option will be loaded.</p>

            <p class="fw-semibold">Change language directly:</p>
            <div class="navbar navbar-dark navbar-expand-lg rounded py-2 mb-4">
                <div class="container-fluid">
                    <div class="navbar-brand">
                        <a href="index" class="d-inline-flex align-items-center">
                            <img src="{{URL::asset('assets/images/logo_icon.svg')}}" alt="">
                            <h4 class="d-none d-sm-inline-block text-white lh-1 mb-0 ms-3">Limitless</h4>
                        </a>
                    </div>

                    <div class="d-lg-none ms-2">
                        <button class="navbar-toggler rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-i18-demo">
                            <i class="ph-squares-four"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-i18-demo">
                        <ul class="navbar-nav my-2 my-lg-0">
                            <li class="nav-item">
                                <a href="#" class="navbar-nav-link rounded-pill">
                                    <i class="ph-circles-three me-2"></i>
                                    Link
                                </a>
                            </li>

                            <li class="nav-item ms-lg-1">
                                <a href="#" class="navbar-nav-link rounded-pill">
                                    <i class="ph-squares-four me-2"></i>
                                    Another link
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul class="nav flex-row justify-content-end order-1 order-lg-2 ms-auto">
                        <li class="nav-item nav-item-dropdown-lg dropdown language-switch">
                            <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill" data-bs-toggle="dropdown">
                                <img src="{{URL::asset('assets/images/lang/gb.svg')}}" height="22" alt="">
                                <span class="d-none d-lg-inline-block ms-2 me-1">English</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="?lng=en" class="dropdown-item en">
                                    <img src="{{URL::asset('assets/images/lang/gb.svg')}}" height="22" alt="">
                                    <span class="ms-2">English</span>
                                </a>
                                <a href="?lng=es" class="dropdown-item es">
                                    <img src="{{URL::asset('assets/images/lang/es.svg')}}" height="22" alt="">
                                    <span class="ms-2">Spanish</span>
                                </a>
                                <a href="?lng=it" class="dropdown-item it">
                                    <img src="{{URL::asset('assets/images/lang/it.svg')}}" height="22" alt="">
                                    <span class="ms-2">Italian</span>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item nav-item-dropdown-lg dropdown ms-1">
                            <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                                <div class="status-indicator-container">
                                    <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill" alt="">
                                    <span class="status-indicator bg-success"></span>
                                </div>
                                <span class="d-none d-lg-inline-block mx-lg-2">Victoria</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">
                                    <i class="ph-user-circle me-2"></i>
                                    My profile
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-currency-circle-dollar me-2"></i>
                                    My subscription
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-shopping-cart me-2"></i>
                                    My orders
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-envelope-open me-2"></i>
                                    My inbox
                                    <span class="badge bg-primary rounded-pill ms-auto">26</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-gear me-2"></i>
                                    Account settings
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="ph-sign-out me-2"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Simple inline text:</p>
                    <div class="sidebar sidebar-expand w-100 border rounded mb-lg-4">
                        <div class="sidebar-content">

                            <!-- User menu -->
                            <div class="sidebar-section">
                                <div class="sidebar-section-body d-flex">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="38" height="38" class="rounded-pill" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold" data-i18n="nav_inline.user.name">Victoria Baker</div>
                                        <div class="fs-sm opacity-50">
                                            <span data-i18n="nav_inline.user.location">Santa Ana, CA</span>
                                        </div>
                                    </div>

                                    <div class="ms-3 align-self-center">
                                        <a href="#" class="text-body"><i class="ph-gear"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /user menu -->


                            <!-- Navigation -->
                            <div class="sidebar-section">
                                <ul class="nav nav-sidebar" data-nav-type="accordion">
                                    <li class="nav-item-header">
                                        <div class="text-uppercase fs-sm lh-sm opacity-50" data-i18n="nav_inline.nav.header">Sidebar header</div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-house"></i>
                                            <span data-i18n="nav_inline.nav.top_level">Top level link</span>
                                        </a>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-layout"></i>
                                            <span data-i18n="nav_inline.nav.with_children.main">With children</span>
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-i18n="nav_inline.nav.with_children.second_one">Second level link 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-i18n="nav_inline.nav.with_children.second_two">Second level link 2</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item nav-item-submenu">
                                        <a href="#" class="nav-link">
                                            <i class="ph-swatches"></i>
                                            <span data-i18n="nav_inline.nav.multiple_levels.main">Multiple levels</span>
                                        </a>

                                        <ul class="nav-group-sub collapse">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_one">Second level link 1</a>
                                            </li>

                                            <li class="nav-item nav-item-submenu">
                                                <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.main">Second level with child</a>

                                                <ul class="nav-group-sub collapse">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.third_one">Third level link 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_child.third_two">Third level link 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-i18n="nav_inline.nav.multiple_levels.second_three">Second level link 3</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">
                                            <i class="ph-squares-four"></i>
                                            <span data-i18n="nav_inline.nav.multiple_levels.disabled">Disabled link</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /navigation -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Including attributes, links, badges etc:</p>
                    <div class="sidebar sidebar-expand w-100 border rounded mb-lg-4">
                        <div class="sidebar-content">

                            <!-- User menu -->
                            <div class="sidebar-section">
                                <div class="sidebar-section-body d-flex">
                                    <a href="#" class="me-3">
                                        <img src="{{URL::asset('assets/images/demo/users/face11.jpg')}}" width="38" height="38" class="rounded-pill" alt="">
                                    </a>

                                    <div class="flex-fill">
                                        <div class="fw-semibold" data-i18n="nav_inline.user.name">Victoria Baker</div>
                                        <div class="fs-sm opacity-50">
                                            <span data-i18n="nav_inline.user.location">Santa Ana, CA</span>
                                        </div>
                                    </div>

                                    <div class="ms-3 align-self-center">
                                        <a href="#" class="text-body"><i class="ph-gear"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /user menu -->


                            <!-- Navigation -->
                            <div class="sidebar-section">
                                <ul class="nav nav-sidebar" data-nav-type="accordion">
                                    <li class="nav-item-header">
                                        <div class="text-uppercase fs-sm lh-sm opacity-50" data-i18n="nav_advanced.nav.header">Sidebar header</div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-house"></i>
                                            <span data-i18n="nav_advanced.nav.inline_element">Inline element</span>
                                            <span class="badge bg-pink ms-auto" data-i18n="nav_advanced.nav.badges.new">New</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-layout"></i>
                                            <span data-i18n="nav_advanced.nav.insert">Insert HTML from JSON</span>
                                            <span class="ms-auto" data-i18n="nav_advanced.nav.badges.done"></span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="ph-swatches"></i>
                                            <span data-i18n="nav_advanced.nav.inline_text">Plain text</span>
                                            <span class="text-muted fw-normal ms-auto" data-i18n="nav_advanced.nav.badges.text">Inline text</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link disabled">
                                            <i class="ph-squares-four"></i>
                                            <span data-i18n="nav_advanced.nav.multiple_levels.disabled">Disabled link</span>
                                            <span class="badge bg-primary ms-auto" data-i18n="nav_advanced.nav.badges.fixed">Fixed</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /navigation -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Example markup:</p>
                    <pre class="mb-3" data-line="3,8,13">
										<code class="language-markup">
											&lt;!-- Dropdown menu -->
											&lt;div class="dropdown-menu">
												&lt;a href="?lng=en" class="dropdown-item en">
													&lt;img src="[path to flag]/gb.svg" height="22" alt="">
													&lt;span class="ms-2">English&lt;/span>
												&lt;/a>

												&lt;a href="?lng=ua" class="dropdown-item es">
													&lt;img src="[path to flag]/es.svg" height="22" alt="">
													&lt;span class="ms-2">Spanish&lt;/span>
												&lt;/a>

												&lt;a href="?lng=it" class="dropdown-item it">
													&lt;img src="[path to flag]/it.svg" height="22" alt="">
													&lt;span class="ms-2">Italian&lt;/span>
												&lt;/a>
											&lt;/div>
											&lt;!-- /dropdown menu -->
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">JS code example:</p>
                    <pre class="mb-3">
										<code class="language-javascript">
											// Define elements
											const selector = document.querySelectorAll('[data-i18n]');

											// Set init options
											i18next
												.use(i18nextXHRBackend)
												.use(i18nextBrowserLanguageDetector)
												.init({
													backend: {
														loadPath: 'assets/demo/locales/${lng}.json'
													},
												    fallbackLng: 'en'
												},
												function (err, t) {
													selector.forEach(function(item) {
														item.innerHTML = i18next.t(item.getAttribute("data-i18n"));
													});
												});
										</code>
									</pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /fallback language -->


    <!-- i18next overview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">i18next library</h5>
        </div>

        <div class="card-body">
            <h6 class="fw-semibold">Overview</h6>
            <p class="mb-3"><code>Internationalization</code> and <code>localization</code> are means of adapting web applications to different languages, regional differences and technical requirements of a target market. <code>Internationalization</code> is the process of designing an application so that it can potentially be adapted to various languages and regions. <code>Localization</code> is the process of adapting internationalized application for a specific region or language by adding locale-specific components and translating text. Framework template uses <code>i18next</code> library for internationalization and localization.</p>

            <p>Main i18next benefits:</p>
            <div class="row mb-3">
                <div class="col-lg-4">
                    <ul class="list">
                        <li>Support of variables</li>
                        <li>Support of nesting</li>
                        <li>Support of context</li>
                        <li>Support of multiple plural forms</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <ul class="list">
                        <li>Gettext support</li>
                        <li>Sprintf support</li>
                        <li>Detect language</li>
                        <li>Graceful translation lookup</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <ul class="list">
                        <li>Custom post processing</li>
                        <li>Post missing resources to server</li>
                        <li>Resource caching in browser</li>
                        <li>Fetch resources from server</li>
                    </ul>
                </div>
            </div>


            <h6 class="fw-semibold">Basic usage</h6>
            <p class="mb-3"><strong>i18next</strong> is a full-featured i18n javascript library for translating your web application. By default, Limitless template supports language switching in 2 different ways: language detection according to the user navigator language and fallback languages. All plugin settings also support and use cookies/localStorage by default. For demonstration purposes, sidebar nav examples are translated to <span class="fw-semibold">ukrainian</span> and default <span class="fw-semibold">english</span> languages. You can change current language by choosing it in the dropdown menu located in top navbar.</p>

            <p class="fw-semibold">Page markup:</p>
            <pre class="mb-3 mb-lg-4">
								<code class="language-markup">
									&lt;!DOCTYPE html>
									&lt;html>
										&lt;head>
											&lt;script src="[PATH]/i18next.min.js">&lt;/script>
											&lt;script src="[PATH]/i18nextXHRBackend.min.js">&lt;/script>
											&lt;script src="[PATH]/i18nextBrowserLanguageDetector.min.js">&lt;/script>
										&lt;/head>
										&lt;body>
											&lt;ul class="navigation">
												&lt;li>&lt;a href="#" data-i18n="nav.dash.main">&lt;/a>&lt;/li>
												&lt;li>&lt;a href="#" data-i18n="nav.email.main">&lt;/a>&lt;/li>
												&lt;li>&lt;a href="#" data-i18n="nav.snippets.main">&lt;/a>&lt;/li>
											&lt;/ul>
										&lt;/body>
									&lt;/html>
								</code>
							</pre>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">Loaded resource file (assets/locales/*.json):</p>
                    <pre class="mb-3">
										<code class="language-javascript">
											{
												"app": {
													"name": "Limitless template"
												},
												"nav": {
													"home": "Home page",
												    "dash": {
												        "main": "Dashboards",
												        "templates": "Layout templates"
												    },
												    "email": {
												        "main": "Email templates",
												        "versions": "Versions"
												    },
												    "snippets": {
												        "main": "Snippets"
												    }
												}
											}
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">Javascript code:</p>
                    <pre class="mb-3 mb-lg-4">
										<code class="language-javascript">
											// Define main elements
											const elements = document.querySelectorAll('.language-switch .dropdown-item');

											// Initialize i18next
											i18next.init({
											    // Options
											},
											function (err, t) {
											    // Initialize
											});

											// Change language on button click
											elements.forEach(function(toggler) {
												toggler.addEventListener('click', function(e) {
													// Here goes navigation menu config
												});
											});
										</code>
									</pre>
                </div>
            </div>


            <h6 class="fw-semibold">Set language on init and after init</h6>
            <p class="mb-3">The plugin allows you to set specified language <code>on init</code> and <code>after init</code>. If language is set on init, resources will be resolved in this order: 1) try <span class="fw-semibold">languageCode</span> plus <span class="fw-semibold">countryCode</span>, eg. <code>'en-US'</code>; 2) alternative look it up in <span class="fw-semibold">languageCode</span> only, eg. <code>'en'</code>; 3) finally look it up in definded fallback language, default: <code>'dev'</code>. If language is not set explicitly, i18next tries to detect the user language by: 1) querystring parameter <code>?lng=en</code>; 2) localStorage; 3) cookie; 4) language set in navigator.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">On init example:</p>
                    <pre class="mb-3">
										<code class="language-javascript">
											// Elements
											const selector = document.querySelectorAll('[data-i18n]');

											// Initialize
											i18next
												.use(i18nextXHRBackend)
												.use(i18nextBrowserLanguageDetector)
												.init({
													lng: 'en',
												    backend: {
														loadPath: 'assets/demo/locales/${lng}.json'
												    },
												    debug: true,
												    fallbackLng: false
												},
												function (err, t) {
													selector.forEach(function(item) {
														item.innerHTML = i18next.t(item.getAttribute("data-i18n"));
													});
												});
										</code>
									</pre>
                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">After init example:</p>
                    <pre class="mb-3">
										<code class="language-javascript">
											// Elements
											const selector = document.querySelectorAll('[data-i18n]');

											// Initialize
											i18next
												.use(i18nextXHRBackend)
												.use(i18nextBrowserLanguageDetector)
												.init({
												    debug: true
												},
												function (err, t) {
													selector.forEach(function(item) {
														item.innerHTML = i18next.t(item.getAttribute("data-i18n"));
													});
												});

												// Extend existing translations
												i18next.addResourceBundle('en', 'translations', {
													key: 'value'
												}, true, true);
										</code>
									</pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /i18next overview -->


    <!-- i18next options -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Library options</h5>
        </div>

        <div class="card-body">
            The default export of the i18next module is an i18next instance ready to be initialized by calling <code>init</code>. You can create additional instances using the <code>createInstance</code> function. The library supports 30+ default options applicable for the default usage only, as well as various options for all integrations and plugins/extensions. Table below demonstrates the list of default i18Next options with default values and descriptions.
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Option</th>
                        <th>Default</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th colspan="3" class="table-active">Logging</th>
                    </tr>
                    <tr>
                        <td>debug</td>
                        <td><code>false</code></td>
                        <td>logs info level to console output. Helps finding issues with loading not working.</td>
                    </tr>
                    <tr>
                        <th colspan="3" class="table-active">Languages, namespaces, resources</th>
                    </tr>
                    <tr>
                        <td>resources</td>
                        <td><code>undefined</code></td>
                        <td>resources to initialize with (if not using loading or not appending using addResourceBundle)</td>
                    </tr>
                    <tr>
                        <td>lng</td>
                        <td><code>undefined</code></td>
                        <td>language to use (overrides language detection)</td>
                    </tr>
                    <tr>
                        <td>fallbackLng</td>
                        <td><code>'dev'</code></td>
                        <td>language to use if translations in user language are not available</td>
                    </tr>
                    <tr>
                        <td>supportedLngs</td>
                        <td><code>false</code></td>
                        <td>array of allowed languages</td>
                    </tr>
                    <tr>
                        <td>nonExplicitSupportedLngs</td>
                        <td><code>false</code></td>
                        <td>if true, will consider variants as supported when the main language is. E.g. <code>en-US</code> will be valid if <code>en</code> is in <code>supportedLngs</code></td>
                    </tr>
                    <tr>
                        <td>load</td>
                        <td><code>'all'</code></td>
                        <td>language codes to lookup, given set language is 'en-US': <code>'all' --&gt; ['en-US', 'en', 'dev']</code>, <code>'currentOnly' --&gt; 'en-US'</code>, <code>'languageOnly' --&gt; 'en'</code></td>
                    </tr>
                    <tr>
                        <td>preload</td>
                        <td><code>false</code></td>
                        <td>array of languages to preload. Important on serverside to assert translations are loaded before rendering views.</td>
                    </tr>
                    <tr>
                        <td>lowerCaseLng</td>
                        <td><code>false</code></td>
                        <td>language will be lowercased eg. <code>en-US</code> --&gt; <code>en-us</code></td>
                    </tr>
                    <tr>
                        <td>cleanCode</td>
                        <td><code>false</code></td>
                        <td>main language will be lowercased; e.g. <code>EN</code> ⇒ <code>en</code>, while leaving full locales like <code>en-US</code></td>
                    </tr>
                    <tr>
                        <td>ns</td>
                        <td><code>'translation'</code></td>
                        <td>string or array of namespaces to load</td>
                    </tr>
                    <tr>
                        <td>defaultNS</td>
                        <td><code>'translation'</code></td>
                        <td>default namespace used if not passed to translation function</td>
                    </tr>
                    <tr>
                        <td>fallbackNS</td>
                        <td><code>false</code></td>
                        <td>string or array of namespaces to lookup key if not found in given namespace</td>
                    </tr>
                    <tr>
                        <td>partialBundledLanguages</td>
                        <td><code>false</code></td>
                        <td>allows some resources to be set on initialization while others can be loaded using a backend connector</td>
                    </tr>

                    <tr>
                        <th colspan="3" class="table-active">Missing keys</th>
                    </tr>
                    <tr>
                        <td>saveMissing</td>
                        <td><code>false</code></td>
                        <td>calls save missing key function on backend if key not found</td>
                    </tr>
                    <tr>
                        <td>updateMissing</td>
                        <td><code>false</code></td>
                        <td>experimental: enable to update default values using the saveMissing (Works only if defaultValue different from translated value. Only useful on initial development or when keeping code as source of truth not changing values outside of code. Only supported if backend supports it already)</td>
                    </tr>
                    <tr>
                        <td>saveMissingTo</td>
                        <td><code>'fallback'</code></td>
                        <td>'current' or 'all'</td>
                    </tr>
                    <tr>
                        <td>saveMissingPlurals</td>
                        <td><code>true</code></td>
                        <td>will save all plural forms instead of only singular if t was called for plurals</td>
                    </tr>
                    <tr>
                        <td>missingKeyHandler</td>
                        <td><code>false</code></td>
                        <td><code>function(lng, ns, key, fallbackValue) { }</code> used for custom missing key handling (needs saveMissing set to true!)</td>
                    </tr>
                    <tr>
                        <td>parseMissingKeyHandler</td>
                        <td><code>noop</code></td>
                        <td>function(key) { // return value to display }</td>
                    </tr>
                    <tr>
                        <td>appendNamespaceToMissingKey</td>
                        <td><code>false</code></td>
                        <td>appends namespace to missing key</td>
                    </tr>
                    <tr>
                        <td>missingInterpolationHandler</td>
                        <td><code>noop</code></td>
                        <td><code>function(text, value) { return 'stringWithAlternativeValueOrUndefined' }</code> gets called in case a interpolation value is undefined. This method will not be called if the value is an empty string or null</td>
                    </tr>
                    <tr>
                        <td>missingKeyNoValueFallbackToKey</td>
                        <td><code>false</code></td>
                        <td>used to not fallback to the key as default value, when using saveMissing functionality. * i.e. when using with i18next-http-backend this will result in having a key with an empty string value</td>
                    </tr>
                    <tr>
                        <th colspan="3" class="table-active">Translation defaults</th>
                    </tr>
                    <tr>
                        <td>postProcess</td>
                        <td><code>false</code></td>
                        <td>string or array of postProcessors to apply per default</td>
                    </tr>
                    <tr>
                        <td>returnNull</td>
                        <td><code>true</code></td>
                        <td>allows null values as valid translation</td>
                    </tr>
                    <tr>
                        <td>returnEmptyString</td>
                        <td><code>true</code></td>
                        <td>allows empty string as valid translation</td>
                    </tr>
                    <tr>
                        <td>returnObjects</td>
                        <td><code>false</code></td>
                        <td>allows objects as valid translation result</td>
                    </tr>
                    <tr>
                        <td>returnDetails</td>
                        <td><code>false</code></td>
                        <td>returns an object that includes information about the used language, namespace, key and value</td>
                    </tr>
                    <tr>
                        <td>returnedObjectHandler</td>
                        <td><code>noop</code></td>
                        <td><code>function(key, value, options) {}</code> gets called if object was passed in as key but returnObjects was set to false</td>
                    </tr>
                    <tr>
                        <td>joinArrays</td>
                        <td><code>false</code></td>
                        <td>char, eg. '\n' that arrays will be joined by</td>
                    </tr>
                    <tr>
                        <td>overloadTranslationOptionHandler</td>
                        <td><code>function(args) { return { defaultValue: args[1] }; };</code></td>
                        <td>default: sets defaultValue</td>
                    </tr>
                    <tr>
                        <td>interpolation</td>
                        <td><code>{...}</code></td>
                        <td>see interpolation</td>
                    </tr>
                    <tr>
                        <td>skipInterpolation</td>
                        <td><code>false</code></td>
                        <td>allow translate function to skip interpolation and return raw values instead</td>
                    </tr>
                    <tr>
                        <th colspan="3" class="table-active">Plugin options</th>
                    </tr>
                    <tr>
                        <td>detection</td>
                        <td><code>undefined</code></td>
                        <td>options for language detection - check documentation of plugin</td>
                    </tr>
                    <tr>
                        <td>backend</td>
                        <td><code>undefined</code></td>
                        <td>options for backend - check documentation of plugin</td>
                    </tr>
                    <tr>
                        <td>cache</td>
                        <td><code>undefined</code></td>
                        <td>options for cache layer - check documentation of plugin</td>
                    </tr>
                    <tr>
                        <th colspan="3" class="table-active">Misc</th>
                    </tr>
                    <tr>
                        <td>initImmediate</td>
                        <td><code>true</code></td>
                        <td>triggers resource loading in init function inside a setTimeout (default async behaviour). Set it to false if your backend loads resources sync - that way calling i18next.t after init is possible without relaying on the init callback.</td>
                    </tr>
                    <tr>
                        <td>keySeparator</td>
                        <td><code>'.'</code></td>
                        <td>char to separate keys</td>
                    </tr>
                    <tr>
                        <td>nsSeparator</td>
                        <td><code>':'</code></td>
                        <td>char to split namespace from key</td>
                    </tr>
                    <tr>
                        <td>pluralSeparator</td>
                        <td><code>'_'</code></td>
                        <td>char to split plural from key</td>
                    </tr>
                    <tr>
                        <td>contextSeparator</td>
                        <td><code>'_'</code></td>
                        <td>char to split context from key</td>
                    </tr>
                    <tr>
                        <td>appendNamespaceToCIMode</td>
                        <td><code>false</code></td>
                        <td>prefixes the namespace to the returned key when using <code>cimode</code></td>
                    </tr>
                    <tr>
                        <td>ignoreJSONStructure</td>
                        <td><code>true</code></td>
                        <td>if a key is not found as nested key, it will try to lookup as flat key</td>
                    </tr>
                    <tr>
                        <td>maxParallelReads</td>
                        <td><code>10</code></td>
                        <td>limits parallel reads to the backend to prevent opening up to thousands of sockets or file descriptors at the same time</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /i18next options -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/internationalization/i18next.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/internationalization/i18nextHttpBackend.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/internationalization/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/notifications/noty.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/internationalization_fallback.js')}}"></script>
@endsection
