@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Content @endslot
@slot('subtitle') Syntax Highlighter @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Basic syntax highlighter -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Basic syntax highlighter</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Prism is a lightweight, extensible syntax highlighter, built with modern web standards in mind. To highlight code syntax, add <code>.language-*</code> class to the <code>&lt;code></code> element. By default, highlighter displays a small text block with current language on the top right corner. This functionality is an extra option, provided by "Show language" prism.js addon.</p>

            <p class="fw-semibold">Example</p>

            <pre class="language-markup mb-0">
				<code>
					&lt;!-- Navbar markup -->
					&lt;div class="navbar navbar-expand-lg navbar-dark">
						&lt;div class="navbar-brand">
							&lt;a href="index.html" class="d-inline-block">
								&lt;img src="assets/images/logo.png" alt="Limitless">
							&lt;/a>
						&lt;/div>

						&lt;div class="navbar-collapse collapse" id="navbar-mobile">
							&lt;ul class="navbar-nav mr-lg-auto">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>

							&lt;ul class="navbar-nav">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>
						&lt;/div>
					&lt;/div>
					&lt;!-- /navbar markup -->	
				</code>
			</pre>
        </div>
    </div>
    <!-- /basic syntax highlighter -->


    <!-- Line highlight -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Line highlight</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Highlights specific lines and/or line ranges with light green color and displays start and end line numbers. To highlight specific line, add <code>data-line="*"</code> attribute, to highlight line ranges add <code>data-line="*-*"</code> attribute. Multiple lines or ranges are also supported, to use just separate values with comma: <code>data-line="*, *-*"</code>. This prism addon is included to the current plugin build by default.</p>

            <p class="fw-semibold">Example</p>

            <pre class="language-markup mb-0" data-line="3-7, 11-12, 15-18">
				<code>
					&lt;!-- Navbar markup -->
					&lt;div class="navbar navbar-expand-lg navbar-dark">
						&lt;div class="navbar-brand">
							&lt;a href="index.html" class="d-inline-block">
								&lt;img src="assets/images/logo.png" alt="Limitless">
							&lt;/a>
						&lt;/div>

						&lt;div class="navbar-collapse collapse" id="navbar-mobile">
							&lt;ul class="navbar-nav mr-lg-auto">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>

							&lt;ul class="navbar-nav">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>
						&lt;/div>
					&lt;/div>
					&lt;!-- /navbar markup -->
				</code>
			</pre>
        </div>
    </div>
    <!-- /line highlight -->


    <!-- Line numbers -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Line numbers</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Line number at the beginning of code lines. Obviously, this is supposed to work only for code blocks - <code>&lt;pre>&lt;code></code> - and not for inline code. To use this feature, add <code>.line-numbers</code> class to your desired <code>&lt;pre></code> element and line-numbers plugin will take care. This prism addon is included to the current plugin build by default.</p>

            <p class="fw-semibold">Example</p>

            <pre class="language-markup line-numbers mb-0">
				<code>
					&lt;!-- Navbar markup -->
					&lt;div class="navbar navbar-expand-lg navbar-dark">
						&lt;div class="navbar-brand">
							&lt;a href="index.html" class="d-inline-block">
								&lt;img src="assets/images/logo.png" alt="Limitless">
							&lt;/a>
						&lt;/div>

						&lt;div class="navbar-collapse collapse" id="navbar-mobile">
							&lt;ul class="navbar-nav mr-lg-auto">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>

							&lt;ul class="navbar-nav">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>
						&lt;/div>
					&lt;/div>
					&lt;!-- /navbar markup -->
				</code>
			</pre>
        </div>
    </div>
    <!-- /line numbers -->


    <!-- Define starting line -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Define starting line</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Defines starting line number at the beginning of code lines. This feature works as an optional addition to the <code>line number</code> plugin. To set a custom starting line number, add <code>data-start="*"</code> attribute to the code block markup and it will shift the line counter. Negative values are also supported. This prism feature is also included by default.</p>

            <p class="fw-semibold">Example</p>

            <pre class="language-markup line-numbers mb-0" data-start="-5">
				<code>
					&lt;!-- Navbar markup -->
					&lt;div class="navbar navbar-expand-lg navbar-dark">
						&lt;div class="navbar-brand">
							&lt;a href="index.html" class="d-inline-block">
								&lt;img src="assets/images/logo.png" alt="Limitless">
							&lt;/a>
						&lt;/div>

						&lt;div class="navbar-collapse collapse" id="navbar-mobile">
							&lt;ul class="navbar-nav mr-lg-auto">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>

							&lt;ul class="navbar-nav">
								&lt;li class="navbar-nav-link">...&lt;/li>
								&lt;li class="navbar-nav-link dropdown">...&lt;/li>
							&lt;/ul>
						&lt;/div>
					&lt;/div>
					&lt;!-- /navbar markup -->
				</code>
			</pre>
        </div>
    </div>
    <!-- /define starting line -->


    <!-- Available languages -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Available languages</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">By default, a complete prism.js build allows you to add up to 126 languages. Current build includes 27: markup, css, css-extras, c-like, javascript, java, C, C#, C++, coffescript, diff, git, haml, handlebars, json, less, markdown, perl, php, php extras, python, ruby, sass, sql, stylus, swift, twig. Available addons: line-highlight, line-numbers, autolinker, file-highlight and show-language. For a custom build, please go to <a href="https://prismjs.com/download.html" target="_blank">this page</a>.</p>

            <div class="row">
                <div class="col-lg-6">
                    <p class="fw-semibold">CSS example</p>

                    <pre class="language-css mb-3">
						<code>
							/* CSS highlight */
							.line-highlight {
								position: absolute;
								left: 0;
								right: 0;
								margin-top: 12px;
								background: rgba(133, 238, 149, 0.12);  
								pointer-events: none;
								white-space: pre;
							}

							.line-highlight:before,
							.line-highlight[data-end]:after {
								content: attr(data-start);
								position: absolute;
								top: 0px;
								left: 10px;
								padding: 2px;
								text-align: center;
								font-size: 10px;
								color: #999;
							}
						</code>
					</pre>

                    <p class="fw-semibold">SASS example</p>

                    <pre class="language-scss mb-3">
						<code>
							/* SASS highlight */ 
							.input-group-addon {
								padding: $input-btn-padding-y $input-btn-padding-x;
								margin-bottom: 0;
								font-size: $fs-base;
								font-weight: $fw-normal;
								line-height: $input-btn-line-height;
								color: $input-color;
								text-align: center;
								background-color: $input-group-addon-bg;
								border: $input-btn-border-width solid $input-group-addon-border-color;
								@ include border-radius($input-border-radius);

								// Sizing
								&.form-control-sm {
									padding: $input-btn-padding-y-sm $input-btn-padding-x-sm;
									font-size: $fs-sm;
									@ include border-radius($input-border-radius-sm);
								}

								&.form-control-lg {
									padding: $input-btn-padding-y-lg $input-btn-padding-x-lg;
									font-size: $fs-lg;
									@ include border-radius($input-border-radius-lg);
								}
							}
						</code>
					</pre>

                </div>

                <div class="col-lg-6">
                    <p class="fw-semibold">JS example</p>

                    <pre class="language-javascript mb-3">
						<code>
							/* JS highlight */
							$('[data-action=reload]').on('click', function (e) {
								e.preventDefault();
								var block = $(this).parent();
								$(block).block({ 
									message: '&lt;i class="icon-spinner3 spinner">&lt;/i>',
									overlayCSS: {
										backgroundColor: '#fff',
										opacity: 0.8,
										cursor: 'wait',
										'box-shadow': '0 0 0 1px #ddd'
									},
									css: {
										border: 0,
										backgroundColor: 'none'
									}
								});

								window.setTimeout(function () {
									$(block).unblock();
								}, 2000); 
							});
						</code>
					</pre>

                    <p class="fw-semibold">LESS example</p>

                    <pre class="language-less mb-3">
						<code>
							/* LESS highlight */
							.input-group-addon {
								padding: @input-btn-padding-y @input-btn-padding-x;
								margin-bottom: 0;
								font-size: @fs-base;
								font-weight: @fw-normal;
								line-height: @input-btn-line-height;
								color: @input-color;
								text-align: center;
								background-color: @input-group-addon-bg;
								border: @input-btn-border-width solid @input-group-addon-border-color;
								.border-radius(@input-border-radius);

								// Sizing
								&.form-control-sm {
									padding: @input-btn-padding-y-sm @input-btn-padding-x-sm;
									font-size: @fs-sm;
									.border-radius(@input-border-radius-sm);
								}

								&.form-control-lg {
									padding: @input-btn-padding-y-lg @input-btn-padding-x-lg;
									font-size: @fs-lg;
									.border-radius(@input-border-radius-lg);
								}
							}
						</code>
					</pre>
                </div>
            </div>
        </div>
    </div>
    <!-- /available languages -->

</div>
<!-- /content area -->

@endsection
