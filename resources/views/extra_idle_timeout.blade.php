@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Extra @endslot
@slot('subtitle') Idle Timeout @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Info alert -->
    <div class="alert alert-primary alert-icon-start alert-dismissible fade show">
        <span class="alert-icon bg-primary text-white">
            <i class="ph-info"></i>
        </span>
        Current settings allow you to track user inactivity and launch a warning dialog in a fixed amount of time after latest user activity. In this demo warning dialog appears <strong>after 5 seconds</strong> of latest user activity.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <!-- /info alert -->


    <!-- Idle timeout overview -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Idle Timeout</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h6>Plugin overview</h6>
                <p>After a set amount of idle time, a <span class="fw-semibold">Bootstrap warning dialog</span> is shown to the user with the option to either log out, or stay connected. If <span class="fw-semibold">"Logout"</span> button is selected, the page is redirected to a logout URL. If <span class="fw-semibold">"Stay Connected"</span> is selected, the dialog closes and the session is kept alive. If <span class="fw-semibold">no option</span> is selected after another set amount of idle time, the page is automatically redirected to a set timeout URL.</p>

                <p>Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.</p>

                <p>As long as the user is active, the (optional) keep-alive URL keeps getting pinged and the session stays alive. If you have no need to keep the server-side session alive via the keep-alive URL, you can also use this plugin as a simple lock mechanism that redirects to your lock-session or log-out URL after a set amount of idle time.</p>
            </div>

            <h6>Plugin usage</h6>
            <ol>
                <li>Include <code>jQuery</code> library</li>
                <li>Include <code>bootstrap.js</code> and <code>bootstrap.css</code> (to support the modal dialog, unless you plan on using your own callback)</li>
                <li>Include the minified <code>session_timeout.min.js</code> plugin file</li>
                <li>Call <code>$.sessionTimeout();</code> after document ready and set necessary options</li>
            </ol>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 20%">Option</th>
                        <th style="width: 20%">Default</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="fw-semibold">heading</span></td>
                        <td><code>'h6'</code></td>
                        <td>This is the HTML heading for <code>.modal-title</code> class shown in Bootstrap modal heading.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">title</span></td>
                        <td><code>'Session timeout notification'</code></td>
                        <td>If you need to specify custom Bootstrap warning dialog title, you can use this option.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">message</span></td>
                        <td><code>'Your session is about to expire.'</code></td>
                        <td>This is the text shown to user via Bootstrap warning dialog after warning period.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">keepAliveUrl</span></td>
                        <td><code>'/keep-alive'</code></td>
                        <td>URL to ping via AJAX POST to keep the session alive. This resource should do something innocuous that would keep the session alive, which will depend on your server-side platform.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">keepAlive</span></td>
                        <td><code>'true'</code></td>
                        <td>If <code>true</code>, the plugin keeps pinging the <code>keepAliveUrl</code> for as long as the user is active. The time between two pings is set by the <code>keepAliveInterval</code> option. If you have no server-side session timeout to worry about, feel free to set this one to <code>false</code> to prevent unnecessary network activity.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">keepAliveInterval</span></td>
                        <td><code>5000</code> (5 seconds)</td>
                        <td>Time in milliseconds between two keep-alive pings.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">ajaxData</span></td>
                        <td><code>''</code></td>
                        <td>If you need to send some data via AJAX POST to your <code>keepAliveUrl</code>, you can use this option.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">redirUrl</span></td>
                        <td><code>'/timed-out'</code></td>
                        <td>URL to take browser to if no action is take after the warning.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">logoutUrl</span></td>
                        <td><code>'/log-out'</code></td>
                        <td>URL to take browser to if user clicks "Logout" on the Bootstrap warning dialog.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">warnAfter</span></td>
                        <td><code>900000</code> (15 minutes)</td>
                        <td>Time in milliseconds after page is opened until warning dialog is opened.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">redirAfter</span></td>
                        <td><code>1200000</code> (20 minutes)</td>
                        <td>Time in milliseconds after page is opened until browser is redirected to <code>redirUrl</code>.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">keepBtnClass</span></td>
                        <td><code>'btn btn-primary'</code></td>
                        <td>This is the default <code>"Stay connected!"</code> button style, use this option if you need to change the button color by changing button classes.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">keepBtnText</span></td>
                        <td><code>'Stay connected'</code></td>
                        <td>If you need to change default <code>Stay connected</code>button text to the custom one or translate to different language, use this option</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">logoutBtnClass</span></td>
                        <td><code>'btn btn-danger'</code></td>
                        <td>This is the default <code>"Logout"</code> button style, use this option if you need to change the button color by changing button classes.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">logoutBtnText</span></td>
                        <td><code>'Logout'</code></td>
                        <td>If you need to change default <code>Logout</code>button text to the custom one or translate to different language, use this option</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">ignoreUserActivity</span></td>
                        <td><code>false</code></td>
                        <td>If <code>true</code>, this will launch the Bootstrap warning dialog / redirect (or callback functions) in a set amounts of time regardless of user activity.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">onWarn</span></td>
                        <td><code>false</code></td>
                        <td>Custom callback you can use instead of showing the Bootstrap warning dialog. Redirect action will still occur unless you also add the <code>onRedir</code> callback.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-semibold">onRedir</span></td>
                        <td><code>false</code></td>
                        <td>Custom callback you can use instead of redirectiong the user to <code>redirUrl</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /idle timeout overview -->


    <!-- Plugin examples -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Timeout examples</h5>
        </div>

        <div class="card-body">
            <div class="mb-4">
                <h6>Basic usage</h6>
                <p>Shows the warning dialog after one minute. The dialog is visible for another minute. If user takes no action (interacts with the page in any way), browser is redirected to <code>redirUrl</code>. On any user action (mouse, keyboard or touch) the timeout timer is reset. Of course, you will still need to close the dialog.</p>

                <pre class="language-javascript">
									<code>
										$.sessionTimeout({
											message: 'Your session will be locked in one minute.',
											keepAliveUrl: 'keep-alive.html',
											logoutUrl: 'login.html',
											redirUrl: 'locked.html',
											warnAfter: 60000,
											redirAfter: 120000
										});
									</code>
								</pre>
            </div>

            <div class="mb-4">
                <h6>With onWarn Callback</h6>
                <p>Shows the "Warning!" alert after one minute. If user takes no action (interacts with the page in any way), after one more minute the browser is redirected to <code>redirUrl</code>. On any user action (mouse, keyboard or touch) the timeout timer is reset.</p>

                <pre class="language-javascript">
									<code>
										$.sessionTimeout({
											redirUrl: 'locked.html',
											warnAfter: 60000,
											redirAfter: 120000,
											onWarn: function{
											    alert('Warning!');
											}
										});
									</code>
								</pre>
            </div>

            <div class="mb-4">
                <h6>With both onWarn and onRedir Callback</h6>
                <p>Console logs the "Your session will soon expire!" text after one minute. If user takes no action (interacts with the page in any way), after two more minutes the "Your session has expired!" alert gets shown. No redirection occurs. On any user action (mouse, keyboard or touch) the timeout timer is reset.</p>

                <pre class="language-javascript">
									<code>
										$.sessionTimeout({
											warnAfter: 60000,
											redirAfter: 180000,
											onWarn: function{
											    console.log('Your session will soon expire!');
											},
											onRedir: function{
											    alert('Your session has expired!');
											}
										});
									</code>
								</pre>
            </div>

            <div class="mb-3">
                <h6>Full featured example</h6>
                <p>Demonstrates advanced example with all possible options. The plugin can be used as a session timeout warning or as a user idle timeout, <code>ignoreUserActivity</code> options makes the difference. If option is set to <code>true</code>, as long as the user is doing something on the page, he will never get a timeout. Otherwise he'll get a warning message without user interaction dependency.</p>

                <pre class="language-javascript">
									<code>
										$.sessionTimeout({
											heading: 'h5',
											title: 'Session expiration',
											message: 'Your session is about to expire. Do you want to stay connected and extend your session?',
											keepAliveUrl: '/',
											keepAlive: true,
											keepAliveInterval: 5000,
											redirUrl: 'logoff.html',
											logoutUrl: 'login.html',
											warnAfter: 600000, //10 minutes
											redirAfter: 900000, //15 minutes
											keepBtnClass: 'btn btn-success',
											keepBtnText: 'Extend session',
											logoutBtnClass: 'btn btn-light',
											logoutBtnText: 'Log me out',
											ignoreUserActivity: false,
											onWarn: function{
											    console.log('Your session will soon expire!');
											},
											onRedir: function{
											    alert('Your session has expired!');
											}
										});
									</code>
								</pre>
            </div>
        </div>
    </div>
    <!-- /plugin examples -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/jquery/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/extensions/session_timeout.min.js')}}"></script>
<script src="{{URL::asset('assets/js/vendor/ui/prism.min.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/extra_idle_timeout.js')}}"></script>
@endsection
