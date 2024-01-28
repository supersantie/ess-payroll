@extends('layouts.master')
@section('content')
@component('components.breadcrumb')
@slot('title') Editors @endslot
@slot('subtitle') Code @endslot
@endcomponent

<!-- Content area -->
<div class="content">

    <!-- Ace code editor -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Ace code editor</h5>
        </div>

        <div class="card-body">
            <p class="mb-3">Ace is an embeddable code editor written in JavaScript. It matches the features and performance of native editors such as Sublime, Vim and TextMate. It can be easily embedded in any web page and JavaScript application. Ace is maintained as the primary editor for Cloud9 IDE and is the successor of the Mozilla Skywriter (Bespin) project.</p>

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <p><span class="fw-bold">Javascript</span> mode</p>
                        <pre class="rounded border" id="javascript_editor">
/**
 * In fact, you're looking at ACE right now. Go ahead and play with it!
 *
 * We are currently showing off the JavaScript mode. ACE has support for 45
 * language modes and 24 color themes!
 */

function add(x, y) {
    var resultString = "Hello, ACE! The result of your math is: ";
    var result = x + y;
    return resultString + result;
}

var addResult = add(3, 2);
console.log(addResult);
</pre>
                    </div>

                    <div class="mb-3">
                        <p><span class="fw-bold">CSS</span> mode</p>
                        <pre class="rounded border" id="css_editor">
.text-layer {
    font-family: Monaco, "Courier New", monospace;
    font-size: 12pX;
    cursor: text;
}

.blinker {
    animation-duration: 1s;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: linear;
}

@keyframes blink {
    0% {
        opacity: 0;
    }
    40% {
        opacity: 0;
    }
    40.5% {
        opacity: 1
    }
    100% {
        opacity: 1
    }
}
</pre>
                    </div>

                    <div class="mb-3">
                        <p><span class="fw-bold">LESS</span> mode</p>
                        <pre class="rounded border" id="less_editor">
/* styles.less */

@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
    box-shadow:         @style @c;
    -webkit-box-shadow: @style @c;
    -moz-box-shadow:    @style @c;
}
.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
    .box-shadow(@style, rgba(0, 0, 0, @alpha));
}

// Box styles
.box { 
    color: saturate(@base, 5%);
    border-color: lighten(@base, 30%);
    
    div { .box-shadow(0 0 5px, 30%) }
  
    a {
        color: @base;
        
        &amp;:hover {
            color: lighten(@base, 50%);
        }
    }
}
</pre>
                    </div>

                    <div class="mb-3">
                        <p><span class="fw-bold">Ruby</span> mode</p>
                        <pre class="rounded border" id="ruby_editor">
#!/usr/bin/ruby

# Program to find the factorial of a number
def fact(n)
    if n == 0
        1
    else
        n * fact(n-1)
    end
end

puts fact(ARGV[0].to_i)

class Range
  def to_json(*a)
    {
      'json_class'   => self.class.name, # = 'Range'
      'data'         => [ first, last, exclude_end? ]
    }.to_json(*a)
  end
end

{:id => 34, :key => "value"}


    herDocs = [&lt;&lt;'FOO', &lt;&lt;BAR, &lt;&lt;-BAZ, &lt;&lt;-`EXEC`] #comment
  FOO #{literal}
FOO
  BAR #{fact(10)}
BAR
  BAZ indented
    BAZ
        echo hi
    EXEC
puts herDocs
</pre>
                    </div>


                    <div class="mb-3">
                        <p><span class="fw-bold">Coffee</span> mode</p>
                        <pre class="rounded border" id="coffee_editor">
#!/usr/bin/env coffee

try
    throw URIError decodeURI(0xC0ffee * 123456.7e-8 / .9)
catch e
    console.log 'qstring' + "qqstring" + '''
        qdoc
    ''' + """
        qqdoc
    """

do ->
    ###
    herecommend
    ###
    re = /regex/imgy.test ///
        heregex  # comment
    ///imgy
    this isnt: `just JavaScript`
    undefined
    
sentence = "#{ 22 / 7 } is a decent approximation of π"
</pre>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <p><span class="fw-bold">HTML</span> mode</p>
                        <pre class="rounded border" id="html_editor">
&lt;!-- Default panel -->
&lt;div class="panel panel-default">
	&lt;div class="panel-heading">
		&lt;h5 class="panel-title">
			Trumbowyg
			&lt;span class="fw-semibold">Default&lt;/span>
			&lt;small>Full featured toolbar&lt;/small>
		&lt;/h5>
		
		&lt;ul class="panel-heading-icons">
			&lt;li>&lt;a href="#" data-panel="collapse">&lt;i class="icon-arrow-down2">&lt;/i>&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#" data-panel="reload">&lt;i class="icon-reload">&lt;/i>&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#" data-panel="move">&lt;i class="icon-move">&lt;/i>&lt;/a>&lt;/li>
			&lt;li>&lt;a href="#" data-panel="close">&lt;i class="icon-close">&lt;/i>&lt;/a>&lt;/li>
		&lt;/ul>
	&lt;/div>

	&lt;div class="panel-body">
		Panel body
	&lt;/div>
&lt;/div>
&lt;!-- /default panel -->
</pre>
                    </div>

                    <div class="mb-3">
                        <p><span class="fw-bold">JSON</span> mode</p>
                        <pre class="rounded border" id="json_editor">
{
 "query": {
  "count": 10,
  "created": "2011-06-21T08:10:46Z",
  "lang": "en-US",
  "results": {
   "photo": [
    {
     "farm": "6",
     "id": "5855620975",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "f1f5e8515d",
     "server": "5110",
     "title": "7087 bandit cat"
    },
    {
     "farm": "4",
     "id": "5856170534",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "32021554@N04",
     "secret": "ff1efb2a6f",
     "server": "3217",
     "title": "6975 rusty cat"
    },
    {
     "farm": "6",
     "id": "5856172972",
     "isfamily": "0",
     "isfriend": "0",
     "ispublic": "1",
     "owner": "51249875@N03",
     "secret": "6c6887347c",
     "server": "5192",
     "title": "watermarked-cats"
    }
   ]
  }
 }
}
</pre>
                    </div>

                    <div class="mb-3">
                        <p><span class="fw-bold">PHP</span> mode</p>
                        <pre class="rounded border" id="php_editor">
&lt;?php

function nfact($n) {
    if ($n == 0) {
        return 1;
    }
    else {
        return $n * nfact($n - 1);
    }
}

echo "\n\nPlease enter a whole number ... ";
$num = trim(fgets(STDIN));

// ===== PROCESS - Determing the factorial of the input number =====
$output = "\n\nFactorial " . $num . " = " . nfact($num) . "\n\n";
echo $output;

?>
</pre>
                    </div>

                    <div class="mb-3">
                        <p><span class="fw-bold">SASS</span> mode</p>
                        <pre class="rounded border" id="sass_editor">
// sass ace mode;

@import url(https://fonts.googleapis.com/css?family=Ace:700)

html, body
  :background-color #ace
  text-align: center
  height: 100%
  /*;*********;
    ;comment  ;
    ;*********;

.toggle
  $size: 14px

  :background url(https://subtlepatterns.com/patterns/dark_stripes.png)
  border-radius: 8px
  height: $size

  &amp;:before
    $radius: $size * 0.845
    $glow: $size * 0.125

    box-shadow: 0 0 $glow $glow / 2 #fff
    border-radius: $radius
    
    &amp;:active
      ~ .button
        box-shadow: 0 15px 25px -4px rgba(0,0,0,0.4)      
      ~ .label
        font-size: 40px
        color: rgba(0,0,0,0.45)

    &amp;:checked      
      ~ .button
        box-shadow: 0 15px 25px -4px #ace
      ~ .label
        font-size: 40px
        color: #c9c9c9
</pre>
                    </div>


                    <div class="mb-3">
                        <p><span class="fw-bold">Handlebars</span> mode</p>
                        <pre class="rounded border" id="handlebars_editor">
                        {{!-- Ace + :-}} --}}

                        &lt;div id="comments">
                        {{#each comments}}
                            &lt;h2>&lt;a href="/posts/{{../permalink}}#{{id}}">{{title}}&lt;/a>&lt;/h2>
                            &lt;div>{{body}}&lt;/div>
                        {{/each}}
                        &lt;/div>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ace code editor -->

</div>
<!-- /content area -->

@endsection
@section('center-scripts')
<script src="{{URL::asset('assets/js/vendor/editors/ace/ace.js')}}"></script>
@endsection
@section('scripts')
<script src="{{URL::asset('assets/demo/pages/ecommerce_customers.js')}}"></script>
<script src="{{URL::asset('assets/demo/charts/pages/editor_code.js')}}"></script>
@endsection
