<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>DeFiChain API</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.11.1.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>


</head>

<body data-languages="[&quot;bash&quot;,&quot;php&quot;,&quot;python&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="php">php</a>
                            <a href="#" data-language-name="python">python</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: November 4 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This API provides information for the DeFiChain Blockchain.</p>
<p>This documentation aims to provide all the information you need to work with the DeFiChain-API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">https://defichain-api.io/</code></pre>

        <h1>Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="api-v1">API v1</h1>



            <h2 id="api-v1-GETv1-ping">Check health of the API</h2>

<p>
</p>

<p>returns 'pong' - as always 🤙</p>

<span id="example-requests-GETv1-ping">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/ping" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/ping',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/ping'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/ping"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-ping">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    &quot;pong&quot;
]</code>
 </pre>
    </span>
<span id="execution-results-GETv1-ping" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-ping"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-ping"></code></pre>
</span>
<span id="execution-error-GETv1-ping" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-ping"></code></pre>
</span>
<form id="form-GETv1-ping" data-method="GET"
      data-path="v1/ping"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-ping', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/ping</code></b>
        </p>
                    </form>

        <h1 id="fixed-price-intervals">Fixed Price Intervals</h1>



            <h2 id="fixed-price-intervals-GETv1-fixed_price_intervals">list Fixed Price Intervals</h2>

<p>
</p>

<p>Get a list of all Fixed Price Intervals.</p>

<span id="example-requests-GETv1-fixed_price_intervals">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/fixed_price_intervals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/fixed_price_intervals',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/fixed_price_intervals'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/fixed_price_intervals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-fixed_price_intervals">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;priceFeedId&quot;: &quot;BTC/USD&quot;,
            &quot;activePrice&quot;: 60000,
            &quot;nextPrice&quot;: 60000,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;DFI/USD&quot;,
            &quot;activePrice&quot;: 3,
            &quot;nextPrice&quot;: 3,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;DUSD/USD&quot;,
            &quot;activePrice&quot;: 1,
            &quot;nextPrice&quot;: 1,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;ETH/USD&quot;,
            &quot;activePrice&quot;: 4000,
            &quot;nextPrice&quot;: 4000,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;FB/USD&quot;,
            &quot;activePrice&quot;: 314.22,
            &quot;nextPrice&quot;: 312.22,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;GOOGL/USD&quot;,
            &quot;activePrice&quot;: 2924.35,
            &quot;nextPrice&quot;: 2924.35,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;MSFT/USD&quot;,
            &quot;activePrice&quot;: 323.17,
            &quot;nextPrice&quot;: 323.17,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;TSLA/USD&quot;,
            &quot;activePrice&quot;: 1037.86,
            &quot;nextPrice&quot;: 1037.86,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        },
        {
            &quot;priceFeedId&quot;: &quot;TWTR/USD&quot;,
            &quot;activePrice&quot;: 54.81,
            &quot;nextPrice&quot;: 54.81,
            &quot;timestamp&quot;: 1635422996,
            &quot;valid_from&quot;: &quot;2021-10-28 12:09:56&quot;,
            &quot;isLive&quot;: true
        }
    ],
    &quot;stats&quot;: {
        &quot;count_prices&quot;: 9
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/fixed_price_intervals?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/fixed_price_intervals?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/fixed_price_intervals&quot;,
        &quot;per_page&quot;: 100,
        &quot;to&quot;: 9,
        &quot;total&quot;: 9
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-fixed_price_intervals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-fixed_price_intervals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-fixed_price_intervals"></code></pre>
</span>
<span id="execution-error-GETv1-fixed_price_intervals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-fixed_price_intervals"></code></pre>
</span>
<form id="form-GETv1-fixed_price_intervals" data-method="GET"
      data-path="v1/fixed_price_intervals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-fixed_price_intervals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/fixed_price_intervals</code></b>
        </p>
                    </form>

        <h1 id="loan-scheme">Loan Scheme</h1>



            <h2 id="loan-scheme-GETv1-loan_schemes">list Loan Schemes</h2>

<p>
</p>

<p>Get a list of all current loan scheme.</p>

<span id="example-requests-GETv1-loan_schemes">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/loan_schemes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/loan_schemes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/loan_schemes'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/loan_schemes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-loan_schemes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;C150&quot;,
            &quot;minCollaterationRatio&quot;: 150,
            &quot;interestRate&quot;: 5,
            &quot;countVaultsUsingScheme&quot;: 99
        },
        {
            &quot;name&quot;: &quot;C175&quot;,
            &quot;minCollaterationRatio&quot;: 175,
            &quot;interestRate&quot;: 3,
            &quot;countVaultsUsingScheme&quot;: 12
        },
        {
            &quot;name&quot;: &quot;C200&quot;,
            &quot;minCollaterationRatio&quot;: 200,
            &quot;interestRate&quot;: 2,
            &quot;countVaultsUsingScheme&quot;: 0
        },
        {
            &quot;name&quot;: &quot;C350&quot;,
            &quot;minCollaterationRatio&quot;: 350,
            &quot;interestRate&quot;: 1.5,
            &quot;countVaultsUsingScheme&quot;: 0
        },
        {
            &quot;name&quot;: &quot;C500&quot;,
            &quot;minCollaterationRatio&quot;: 500,
            &quot;interestRate&quot;: 1,
            &quot;countVaultsUsingScheme&quot;: 0
        },
        {
            &quot;name&quot;: &quot;C1000&quot;,
            &quot;minCollaterationRatio&quot;: 1000,
            &quot;interestRate&quot;: 0.5,
            &quot;countVaultsUsingScheme&quot;: 0
        }
    ],
    &quot;meta&quot;: {
        &quot;count_schemes&quot;: 6
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-loan_schemes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-loan_schemes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-loan_schemes"></code></pre>
</span>
<span id="execution-error-GETv1-loan_schemes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-loan_schemes"></code></pre>
</span>
<form id="form-GETv1-loan_schemes" data-method="GET"
      data-path="v1/loan_schemes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-loan_schemes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/loan_schemes</code></b>
        </p>
                    </form>

        <h1 id="masternodes">Masternodes</h1>



            <h2 id="masternodes-GETv1-masternodes">active Masternodes (paginated)</h2>

<p>
</p>

<p>Get all active masternodes, including the states ENABLED and PRE_ENABLED, 1000 elements max on each page.</p>

<span id="example-requests-GETv1-masternodes">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternodes?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternodes',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/masternodes'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/masternodes"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-masternodes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;000cfd30703095554cbe369a60f5089b62bbee9442e11c8b5d769881bf535c1d&quot;,
            &quot;ownerAddress&quot;: &quot;8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3&quot;,
            &quot;operatorAddress&quot;: &quot;8e5qNykXzVqmSpTypDZynMQrkj5U3N59XD&quot;,
            &quot;state&quot;: &quot;ENABLED&quot;,
            &quot;mintedBlocks&quot;: 68,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [
                10,
                8
            ],
            &quot;creationHeight&quot;: 684270,
            &quot;resignHeight&quot;: -1,
            &quot;resignTx&quot;: null,
            &quot;banTx&quot;: null
        }
    ],
    &quot;stats&quot;: {
        &quot;masternode_count&quot;: 19121,
        &quot;enabled_count&quot;: 9224,
        &quot;pre_enabled_count&quot;: 1,
        &quot;resigned_count&quot;: 9896,
        &quot;pre_resigned_count&quot;: 0,
        &quot;freezer&quot;: {
            &quot;unfrozen&quot;: 17366,
            &quot;5_year&quot;: 132,
            &quot;10_year&quot;: 1623
        }
    },
    &quot;wtf&quot;: {
        &quot;masternodeId&quot;: &quot;The DeFiChain's internal unique identifier for this masternode. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;ownerAddress&quot;: &quot;A legacy address holding the masternode's collateral of 20,000 DFI. It consists of 35 latin and numeric characters(0..9, a..z, A..Z)&quot;,
        &quot;operatorAddress&quot;: &quot;A legacy address, used for the masternode's operator. Typically living in the wallet of the DeFiChain node, running the minting activity of this masternode.&quot;,
        &quot;state&quot;: &quot;Contains the masternode's states. Possible values: ENABLED, PRE-ENABLED, RESIGNED, PRE-RESIGNED, BANNED&quot;,
        &quot;mintedBlocks&quot;: &quot;Integer value of the amount of blocks this Masternode has minted so far.&quot;,
        &quot;timelock&quot;: &quot;A string telling this masternode's freezing time. Possible values: \&quot;\&quot;, \&quot;5-year\&quot;, \&quot;10-year\&quot;&quot;,
        &quot;targetMultiplier&quot;: &quot;An array of integer values. Contains 2, 3 or 4 values, depending on this masternode's timelock&quot;,
        &quot;creationHeight&quot;: &quot;The block height when this masternode has been created. Integer value.&quot;,
        &quot;resignHeight&quot;: &quot;The block height when this masternode has been resigned. Integer value.&quot;,
        &quot;resignTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has finally been resigned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;banTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has been banned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode?page=9225&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://defichain-api.test/v1/masternode?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 9225,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 9225
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternodes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternodes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternodes"></code></pre>
</span>
<span id="execution-error-GETv1-masternodes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternodes"></code></pre>
</span>
<form id="form-GETv1-masternodes" data-method="GET"
      data-path="v1/masternodes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternodes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternodes</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternodes"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternodes"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: true</p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternodes"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternodes"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternodes-GETv1-masternodes--state-">Masternodes with requested state (paginated)</h2>

<p>
</p>

<p>Get all masternodes with the requested state, 1000 elements max on each page.</p>
<aside class="notice">possible states are <code>ENABLED, PRE_ENABLED, RESIGNED,
PRE_RESIGNED and BANNED</code>.</aside>

<span id="example-requests-GETv1-masternodes--state-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternodes/resigned?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternodes/resigned',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/masternodes/resigned'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/masternodes/resigned"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-masternodes--state-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;b70f5273b64b1e48066a4a50d0e51de3cc883ddf96cbb1bb1999c073ed0af331&quot;,
            &quot;ownerAddress&quot;: &quot;8RvqxbyS9yu2nEX6x28VexySd2WRNp22dn&quot;,
            &quot;operatorAddress&quot;: &quot;8MU9MhdMBNmY4rWi2krWFjBLwRnDdTFfMt&quot;,
            &quot;state&quot;: &quot;PRE_ENABLED&quot;,
            &quot;mintedBlocks&quot;: 0,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [],
            &quot;creationHeight&quot;: 1272000,
            &quot;resignHeight&quot;: -1,
            &quot;resignTx&quot;: null,
            &quot;banTx&quot;: null
        }
    ],
    &quot;stats&quot;: {
        &quot;masternode_count&quot;: 19121,
        &quot;enabled_count&quot;: 9224,
        &quot;pre_enabled_count&quot;: 1,
        &quot;resigned_count&quot;: 9896,
        &quot;pre_resigned_count&quot;: 0,
        &quot;freezer&quot;: {
            &quot;unfrozen&quot;: 7470,
            &quot;5_year&quot;: 132,
            &quot;10_year&quot;: 1623
        }
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode/pre_enabled?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode/pre_enabled?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode/pre_enabled&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternodes--state-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternodes--state-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternodes--state-"></code></pre>
</span>
<span id="execution-error-GETv1-masternodes--state-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternodes--state-"></code></pre>
</span>
<form id="form-GETv1-masternodes--state-" data-method="GET"
      data-path="v1/masternodes/{state}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternodes--state-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternodes/{state}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state"
               data-endpoint="GETv1-masternodes--state-"
               data-component="url" required  hidden>
    <br>
<p>Select all masternodes with the given state.</p>            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes--state-" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternodes--state-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes--state-" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternodes--state-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: <code>true</code></p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes--state-" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternodes--state-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes--state-" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternodes--state-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternodes-GETv1-masternodes-with_inactive">active Masternodes (paginated)</h2>

<p>
</p>

<p>Get all active masternodes, including the states ENABLED, PRE_ENABLED, RESIGNED, PRE_RESIGNED and BANNED</p>

<span id="example-requests-GETv1-masternodes-with_inactive">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternodes/with_inactive?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternodes/with_inactive',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/masternodes/with_inactive'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/masternodes/with_inactive"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-masternodes-with_inactive">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;000cfd30703095554cbe369a60f5089b62bbee9442e11c8b5d769881bf535c1d&quot;,
            &quot;ownerAddress&quot;: &quot;8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3&quot;,
            &quot;operatorAddress&quot;: &quot;8e5qNykXzVqmSpTypDZynMQrkj5U3N59XD&quot;,
            &quot;state&quot;: &quot;ENABLED&quot;,
            &quot;mintedBlocks&quot;: 68,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [
                10,
                8
            ],
            &quot;creationHeight&quot;: 684270,
            &quot;resignHeight&quot;: -1,
            &quot;resignTx&quot;: null,
            &quot;banTx&quot;: null
        }
    ],
    &quot;stats&quot;: {
        &quot;masternode_count&quot;: 19121,
        &quot;enabled_count&quot;: 9224,
        &quot;pre_enabled_count&quot;: 1,
        &quot;resigned_count&quot;: 9896,
        &quot;pre_resigned_count&quot;: 0,
        &quot;freezer&quot;: {
            &quot;unfrozen&quot;: 17366,
            &quot;5_year&quot;: 132,
            &quot;10_year&quot;: 1623
        }
    },
    &quot;wtf&quot;: {
        &quot;masternodeId&quot;: &quot;The DeFiChain's internal unique identifier for this masternode. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;ownerAddress&quot;: &quot;A legacy address holding the masternode's collateral of 20,000 DFI. It consists of 35 latin and numeric characters(0..9, a..z, A..Z)&quot;,
        &quot;operatorAddress&quot;: &quot;A legacy address, used for the masternode's operator. Typically living in the wallet of the DeFiChain node, running the minting activity of this masternode.&quot;,
        &quot;state&quot;: &quot;Contains the masternode's states. Possible values: ENABLED, PRE-ENABLED, RESIGNED, PRE-RESIGNED, BANNED&quot;,
        &quot;mintedBlocks&quot;: &quot;Integer value of the amount of blocks this Masternode has minted so far.&quot;,
        &quot;timelock&quot;: &quot;A string telling this masternode's freezing time. Possible values: \&quot;\&quot;, \&quot;5-year\&quot;, \&quot;10-year\&quot;&quot;,
        &quot;targetMultiplier&quot;: &quot;An array of integer values. Contains 2, 3 or 4 values, depending on this masternode's timelock&quot;,
        &quot;creationHeight&quot;: &quot;The block height when this masternode has been created. Integer value.&quot;,
        &quot;resignHeight&quot;: &quot;The block height when this masternode has been resigned. Integer value.&quot;,
        &quot;resignTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has finally been resigned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;banTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has been banned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode?page=9225&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://defichain-api.test/v1/masternode?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 9225,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 9225
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternodes-with_inactive" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternodes-with_inactive"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternodes-with_inactive"></code></pre>
</span>
<span id="execution-error-GETv1-masternodes-with_inactive" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternodes-with_inactive"></code></pre>
</span>
<form id="form-GETv1-masternodes-with_inactive" data-method="GET"
      data-path="v1/masternodes/with_inactive"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternodes-with_inactive', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternodes/with_inactive</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-with_inactive" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternodes-with_inactive"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-with_inactive" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternodes-with_inactive"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: <code>true</code></p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-with_inactive" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternodes-with_inactive"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-with_inactive" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternodes-with_inactive"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternodes-GETv1-masternodes-address--address-">Masternode by address</h2>

<p>
</p>

<p>Get a masternode by a either the owner address, operator address or the masternode id.</p>

<span id="example-requests-GETv1-masternodes-address--address-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternodes/address/8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternodes/address/8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/masternodes/address/8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/masternodes/address/8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-masternodes-address--address-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;000cfd30703095554cbe369a60f5089b62bbee9442e11c8b5d769881bf535c1d&quot;,
            &quot;ownerAddress&quot;: &quot;8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3&quot;,
            &quot;operatorAddress&quot;: &quot;8e5qNykXzVqmSpTypDZynMQrkj5U3N59XD&quot;,
            &quot;state&quot;: &quot;ENABLED&quot;,
            &quot;mintedBlocks&quot;: 68,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [
                10,
                8
            ],
            &quot;creationHeight&quot;: 684270,
            &quot;resignHeight&quot;: -1,
            &quot;resignTx&quot;: null,
            &quot;banTx&quot;: null
        }
    ],
    &quot;stats&quot;: {
        &quot;masternode_count&quot;: 19121,
        &quot;enabled_count&quot;: 9224,
        &quot;pre_enabled_count&quot;: 1,
        &quot;resigned_count&quot;: 9896,
        &quot;pre_resigned_count&quot;: 0,
        &quot;freezer&quot;: {
            &quot;unfrozen&quot;: 17366,
            &quot;5_year&quot;: 132,
            &quot;10_year&quot;: 1623
        }
    },
    &quot;wtf&quot;: {
        &quot;masternodeId&quot;: &quot;The DeFiChain's internal unique identifier for this masternode. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;ownerAddress&quot;: &quot;A legacy address holding the masternode's collateral of 20,000 DFI. It consists of 35 latin and numeric characters(0..9, a..z, A..Z)&quot;,
        &quot;operatorAddress&quot;: &quot;A legacy address, used for the masternode's operator. Typically living in the wallet of the DeFiChain node, running the minting activity of this masternode.&quot;,
        &quot;state&quot;: &quot;Contains the masternode's states. Possible values: ENABLED, PRE-ENABLED, RESIGNED, PRE-RESIGNED, BANNED&quot;,
        &quot;mintedBlocks&quot;: &quot;Integer value of the amount of blocks this Masternode has minted so far.&quot;,
        &quot;timelock&quot;: &quot;A string telling this masternode's freezing time. Possible values: \&quot;\&quot;, \&quot;5-year\&quot;, \&quot;10-year\&quot;&quot;,
        &quot;targetMultiplier&quot;: &quot;An array of integer values. Contains 2, 3 or 4 values, depending on this masternode's timelock&quot;,
        &quot;creationHeight&quot;: &quot;The block height when this masternode has been created. Integer value.&quot;,
        &quot;resignHeight&quot;: &quot;The block height when this masternode has been resigned. Integer value.&quot;,
        &quot;resignTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has finally been resigned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;banTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has been banned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode?page=9225&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://defichain-api.test/v1/masternode?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 9225,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 9225
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternodes-address--address-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternodes-address--address-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternodes-address--address-"></code></pre>
</span>
<span id="execution-error-GETv1-masternodes-address--address-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternodes-address--address-"></code></pre>
</span>
<form id="form-GETv1-masternodes-address--address-" data-method="GET"
      data-path="v1/masternodes/address/{address}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternodes-address--address-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternodes/address/{address}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>address</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="address"
               data-endpoint="GETv1-masternodes-address--address-"
               data-component="url" required  hidden>
    <br>
<p>either the owner address, operator address or the masternode id.</p>            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-address--address-" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternodes-address--address-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-address--address-" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternodes-address--address-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: <code>true</code></p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-address--address-" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternodes-address--address-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-address--address-" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternodes-address--address-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternodes-GETv1-masternodes-all">all active Masternodes</h2>

<p>
</p>

<p>Get all active masternodes, including the states ENABLED and PRE_ENABLED.</p>
<aside class="warning">This request receives a big payload!</aside>

<span id="example-requests-GETv1-masternodes-all">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternodes/all?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternodes/all',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/masternodes/all'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/masternodes/all"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-masternodes-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;000cfd30703095554cbe369a60f5089b62bbee9442e11c8b5d769881bf535c1d&quot;,
            &quot;ownerAddress&quot;: &quot;8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3&quot;,
            &quot;operatorAddress&quot;: &quot;8e5qNykXzVqmSpTypDZynMQrkj5U3N59XD&quot;,
            &quot;state&quot;: &quot;ENABLED&quot;,
            &quot;mintedBlocks&quot;: 68,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [
                10,
                8
            ],
            &quot;creationHeight&quot;: 684270,
            &quot;resignHeight&quot;: -1,
            &quot;resignTx&quot;: null,
            &quot;banTx&quot;: null
        }
    ],
    &quot;stats&quot;: {
        &quot;masternode_count&quot;: 19121,
        &quot;enabled_count&quot;: 9224,
        &quot;pre_enabled_count&quot;: 1,
        &quot;resigned_count&quot;: 9896,
        &quot;pre_resigned_count&quot;: 0,
        &quot;freezer&quot;: {
            &quot;unfrozen&quot;: 17366,
            &quot;5_year&quot;: 132,
            &quot;10_year&quot;: 1623
        }
    },
    &quot;wtf&quot;: {
        &quot;masternodeId&quot;: &quot;The DeFiChain's internal unique identifier for this masternode. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;ownerAddress&quot;: &quot;A legacy address holding the masternode's collateral of 20,000 DFI. It consists of 35 latin and numeric characters(0..9, a..z, A..Z)&quot;,
        &quot;operatorAddress&quot;: &quot;A legacy address, used for the masternode's operator. Typically living in the wallet of the DeFiChain node, running the minting activity of this masternode.&quot;,
        &quot;state&quot;: &quot;Contains the masternode's states. Possible values: ENABLED, PRE-ENABLED, RESIGNED, PRE-RESIGNED, BANNED&quot;,
        &quot;mintedBlocks&quot;: &quot;Integer value of the amount of blocks this Masternode has minted so far.&quot;,
        &quot;timelock&quot;: &quot;A string telling this masternode's freezing time. Possible values: \&quot;\&quot;, \&quot;5-year\&quot;, \&quot;10-year\&quot;&quot;,
        &quot;targetMultiplier&quot;: &quot;An array of integer values. Contains 2, 3 or 4 values, depending on this masternode's timelock&quot;,
        &quot;creationHeight&quot;: &quot;The block height when this masternode has been created. Integer value.&quot;,
        &quot;resignHeight&quot;: &quot;The block height when this masternode has been resigned. Integer value.&quot;,
        &quot;resignTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has finally been resigned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;banTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has been banned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode?page=9225&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://defichain-api.test/v1/masternode?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 9225,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 9225
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternodes-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternodes-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternodes-all"></code></pre>
</span>
<span id="execution-error-GETv1-masternodes-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternodes-all"></code></pre>
</span>
<form id="form-GETv1-masternodes-all" data-method="GET"
      data-path="v1/masternodes/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternodes-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternodes/all</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-all" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternodes-all"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-all" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternodes-all"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: true</p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-all" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternodes-all"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-all" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternodes-all"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternodes-GETv1-masternodes--state--all">Masternodes with requested state</h2>

<p>
</p>

<p>Get all masternodes with the requested state</p>
<aside class="notice">possible states are <code>ENABLED, PRE_ENABLED, RESIGNED,
PRE_RESIGNED and BANNED</code>.</aside>
<aside class="warning">This request receives a big payload!</aside>

<span id="example-requests-GETv1-masternodes--state--all">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternodes/resigned/all?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternodes/resigned/all',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/masternodes/resigned/all'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/masternodes/resigned/all"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-masternodes--state--all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;b70f5273b64b1e48066a4a50d0e51de3cc883ddf96cbb1bb1999c073ed0af331&quot;,
            &quot;ownerAddress&quot;: &quot;8RvqxbyS9yu2nEX6x28VexySd2WRNp22dn&quot;,
            &quot;operatorAddress&quot;: &quot;8MU9MhdMBNmY4rWi2krWFjBLwRnDdTFfMt&quot;,
            &quot;state&quot;: &quot;PRE_ENABLED&quot;,
            &quot;mintedBlocks&quot;: 0,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [],
            &quot;creationHeight&quot;: 1272000,
            &quot;resignHeight&quot;: -1,
            &quot;resignTx&quot;: null,
            &quot;banTx&quot;: null
        }
    ],
    &quot;stats&quot;: {
        &quot;masternode_count&quot;: 19121,
        &quot;enabled_count&quot;: 9224,
        &quot;pre_enabled_count&quot;: 1,
        &quot;resigned_count&quot;: 9896,
        &quot;pre_resigned_count&quot;: 0,
        &quot;freezer&quot;: {
            &quot;unfrozen&quot;: 7470,
            &quot;5_year&quot;: 132,
            &quot;10_year&quot;: 1623
        }
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode/pre_enabled?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode/pre_enabled?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode/pre_enabled&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternodes--state--all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternodes--state--all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternodes--state--all"></code></pre>
</span>
<span id="execution-error-GETv1-masternodes--state--all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternodes--state--all"></code></pre>
</span>
<form id="form-GETv1-masternodes--state--all" data-method="GET"
      data-path="v1/masternodes/{state}/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternodes--state--all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternodes/{state}/all</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state"
               data-endpoint="GETv1-masternodes--state--all"
               data-component="url" required  hidden>
    <br>
<p>Select all masternodes with the given state.</p>            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes--state--all" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternodes--state--all"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes--state--all" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternodes--state--all"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: <code>true</code></p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes--state--all" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternodes--state--all"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes--state--all" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternodes--state--all"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternodes-GETv1-masternodes-with_inactive-all">active Masternodes</h2>

<p>
</p>

<p>Get all active masternodes, including the states ENABLED, PRE_ENABLED, RESIGNED, PRE_RESIGNED and BANNED</p>
<aside class="warning">This request receives a big payload!</aside>

<span id="example-requests-GETv1-masternodes-with_inactive-all">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternodes/with_inactive/all?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternodes/with_inactive/all',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/masternodes/with_inactive/all'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/masternodes/with_inactive/all"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-masternodes-with_inactive-all">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;000cfd30703095554cbe369a60f5089b62bbee9442e11c8b5d769881bf535c1d&quot;,
            &quot;ownerAddress&quot;: &quot;8MPzdvvBrZ4SLjy5Ymq37wKxYftECKjWa3&quot;,
            &quot;operatorAddress&quot;: &quot;8e5qNykXzVqmSpTypDZynMQrkj5U3N59XD&quot;,
            &quot;state&quot;: &quot;ENABLED&quot;,
            &quot;mintedBlocks&quot;: 68,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [
                10,
                8
            ],
            &quot;creationHeight&quot;: 684270,
            &quot;resignHeight&quot;: -1,
            &quot;resignTx&quot;: null,
            &quot;banTx&quot;: null
        }
    ],
    &quot;stats&quot;: {
        &quot;masternode_count&quot;: 19121,
        &quot;enabled_count&quot;: 9224,
        &quot;pre_enabled_count&quot;: 1,
        &quot;resigned_count&quot;: 9896,
        &quot;pre_resigned_count&quot;: 0,
        &quot;freezer&quot;: {
            &quot;unfrozen&quot;: 17366,
            &quot;5_year&quot;: 132,
            &quot;10_year&quot;: 1623
        }
    },
    &quot;wtf&quot;: {
        &quot;masternodeId&quot;: &quot;The DeFiChain's internal unique identifier for this masternode. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;ownerAddress&quot;: &quot;A legacy address holding the masternode's collateral of 20,000 DFI. It consists of 35 latin and numeric characters(0..9, a..z, A..Z)&quot;,
        &quot;operatorAddress&quot;: &quot;A legacy address, used for the masternode's operator. Typically living in the wallet of the DeFiChain node, running the minting activity of this masternode.&quot;,
        &quot;state&quot;: &quot;Contains the masternode's states. Possible values: ENABLED, PRE-ENABLED, RESIGNED, PRE-RESIGNED, BANNED&quot;,
        &quot;mintedBlocks&quot;: &quot;Integer value of the amount of blocks this Masternode has minted so far.&quot;,
        &quot;timelock&quot;: &quot;A string telling this masternode's freezing time. Possible values: \&quot;\&quot;, \&quot;5-year\&quot;, \&quot;10-year\&quot;&quot;,
        &quot;targetMultiplier&quot;: &quot;An array of integer values. Contains 2, 3 or 4 values, depending on this masternode's timelock&quot;,
        &quot;creationHeight&quot;: &quot;The block height when this masternode has been created. Integer value.&quot;,
        &quot;resignHeight&quot;: &quot;The block height when this masternode has been resigned. Integer value.&quot;,
        &quot;resignTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has finally been resigned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;,
        &quot;banTx&quot;: &quot;Transaction ID of the masternode's collateral payout after it has been banned. It consists of 65 hexadecimal characters (0..8, a..f)&quot;
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode?page=9225&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://defichain-api.test/v1/masternode?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 9225,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 9225
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternodes-with_inactive-all" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternodes-with_inactive-all"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternodes-with_inactive-all"></code></pre>
</span>
<span id="execution-error-GETv1-masternodes-with_inactive-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternodes-with_inactive-all"></code></pre>
</span>
<form id="form-GETv1-masternodes-with_inactive-all" data-method="GET"
      data-path="v1/masternodes/with_inactive/all"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternodes-with_inactive-all', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternodes/with_inactive/all</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-with_inactive-all" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternodes-with_inactive-all"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-with_inactive-all" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternodes-with_inactive-all"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: <code>true</code></p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternodes-with_inactive-all" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternodes-with_inactive-all"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternodes-with_inactive-all" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternodes-with_inactive-all"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

        <h1 id="vaults">Vaults</h1>



            <h2 id="vaults-GETv1-vaults">list all vaults</h2>

<p>
</p>

<p>Get a list of all vaults. Paginated with max 1000 elements per page.</p>

<span id="example-requests-GETv1-vaults">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/vaults?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/vaults',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'stats'=&gt; '1',
            'wtf'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/vaults'
params = {
  'stats': '1',
  'wtf': '1',
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers, params=params)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/vaults"
);

const params = {
    "stats": "1",
    "wtf": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-vaults">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;vaultId&quot;: &quot;4f2c56761b7a1b68e20f83b82372e203088453a86cce1f365fd2dcc1fc385d0c&quot;,
            &quot;loadSchemeId&quot;: &quot;C350&quot;,
            &quot;ownerAddress&quot;: &quot;tn2cpmFQJdKmrfzzKxeDoZ5wAWWUo5maED&quot;,
            &quot;state&quot;: &quot;active&quot;,
            &quot;collateralAmounts&quot;: [
                &quot;10000.00000000@DFI&quot;
            ],
            &quot;loanAmounts&quot;: [
                &quot;5.00148096@TSLA&quot;,
                &quot;20003.25798370@DUSD&quot;
            ],
            &quot;interestAmounts&quot;: [
                &quot;0.00148096@TSLA&quot;,
                &quot;3.25798370@DUSD&quot;
            ],
            &quot;collateralValue&quot;: 40000,
            &quot;loanValue&quot;: 24553.00518339,
            &quot;interestValue&quot;: 4.60518339,
            &quot;informativeRatio&quot;: 149.44494195,
            &quot;collateralRatio&quot;: 123
        },
        {
            &quot;vaultId&quot;: &quot;4f2c56761b7a1b68e20f83b82372e203088453a86cce1f365fd2dcc1fc385d0d&quot;,
            &quot;loadSchemeId&quot;: &quot;C350&quot;,
            &quot;ownerAddress&quot;: &quot;tn2cpmFQJdKmrfzzKxeDoZ5wAWWUo5maED&quot;,
            &quot;state&quot;: &quot;active&quot;,
            &quot;collateralAmounts&quot;: [
                &quot;10000.00000000@DFI&quot;
            ],
            &quot;loanAmounts&quot;: [
                &quot;5.00148096@TSLA&quot;,
                &quot;20003.25798370@DUSD&quot;
            ],
            &quot;interestAmounts&quot;: [
                &quot;0.00148096@TSLA&quot;,
                &quot;3.25798370@DUSD&quot;
            ],
            &quot;collateralValue&quot;: 40000,
            &quot;loanValue&quot;: 24553.00518339,
            &quot;interestValue&quot;: 0,
            &quot;informativeRatio&quot;: 143.1234,
            &quot;collateralRatio&quot;: -1
        }
    ],
    &quot;stats&quot;: {
        &quot;count&quot;: 2,
        &quot;count_active&quot;: 2,
        &quot;schemes_used&quot;: {
            &quot;C150&quot;: 0,
            &quot;C175&quot;: 0,
            &quot;C200&quot;: 0,
            &quot;C350&quot;: 2,
            &quot;C500&quot;: 0,
            &quot;C1000&quot;: 0
        },
        &quot;sum_collateral_value&quot;: 80000,
        &quot;sum_loan_value&quot;: 49106.01036678
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/vaults?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/vaults?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/vaults&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-vaults" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-vaults"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-vaults"></code></pre>
</span>
<span id="execution-error-GETv1-vaults" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-vaults"></code></pre>
</span>
<form id="form-GETv1-vaults" data-method="GET"
      data-path="v1/vaults"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-vaults', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/vaults</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-vaults" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-vaults"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-vaults" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-vaults"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: true</p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-vaults" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-vaults"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-vaults" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-vaults"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="vaults-GETv1-vaults-id--vaultId-">get vault</h2>

<p>
</p>

<p>Get a vault by a given vault id or owner address.</p>

<span id="example-requests-GETv1-vaults-id--vaultId-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/vaults/id/ea" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/vaults/id/ea',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/vaults/id/ea'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/vaults/id/ea"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-vaults-id--vaultId-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;vaultId&quot;: &quot;4f2c56761b7a1b68e20f83b82372e203088453a86cce1f365fd2dcc1fc385d0c&quot;,
        &quot;loadSchemeId&quot;: &quot;C350&quot;,
        &quot;ownerAddress&quot;: &quot;tn2cpmFQJdKmrfzzKxeDoZ5wAWWUo5maED&quot;,
        &quot;state&quot;: &quot;active&quot;,
        &quot;collateralAmounts&quot;: [
            &quot;10000.00000000@DFI&quot;
        ],
        &quot;loanAmounts&quot;: [
            &quot;5.00148096@TSLA&quot;,
            &quot;20003.25798370@DUSD&quot;
        ],
        &quot;interestAmounts&quot;: [
            &quot;0.00148096@TSLA&quot;,
            &quot;3.25798370@DUSD&quot;
        ],
        &quot;collateralValue&quot;: 40000,
        &quot;loanValue&quot;: 24553.00518339,
        &quot;interestValue&quot;: 4.60518339,
        &quot;informativeRatio&quot;: 149.44494195,
        &quot;collateralRatio&quot;: 123
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;vault not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-vaults-id--vaultId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-vaults-id--vaultId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-vaults-id--vaultId-"></code></pre>
</span>
<span id="execution-error-GETv1-vaults-id--vaultId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-vaults-id--vaultId-"></code></pre>
</span>
<form id="form-GETv1-vaults-id--vaultId-" data-method="GET"
      data-path="v1/vaults/id/{vaultId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-vaults-id--vaultId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/vaults/id/{vaultId}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>vaultId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="vaultId"
               data-endpoint="GETv1-vaults-id--vaultId-"
               data-component="url" required  hidden>
    <br>
            </p>
                    </form>

            <h2 id="vaults-GETv1-vaults-address--ownerAddress-">get vault</h2>

<p>
</p>

<p>Get a vault by a given vault id or owner address.</p>

<span id="example-requests-GETv1-vaults-address--ownerAddress-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/vaults/address/deleniti" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/vaults/address/deleniti',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/vaults/address/deleniti'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/vaults/address/deleniti"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-vaults-address--ownerAddress-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;vaultId&quot;: &quot;4f2c56761b7a1b68e20f83b82372e203088453a86cce1f365fd2dcc1fc385d0c&quot;,
        &quot;loadSchemeId&quot;: &quot;C350&quot;,
        &quot;ownerAddress&quot;: &quot;tn2cpmFQJdKmrfzzKxeDoZ5wAWWUo5maED&quot;,
        &quot;state&quot;: &quot;active&quot;,
        &quot;collateralAmounts&quot;: [
            &quot;10000.00000000@DFI&quot;
        ],
        &quot;loanAmounts&quot;: [
            &quot;5.00148096@TSLA&quot;,
            &quot;20003.25798370@DUSD&quot;
        ],
        &quot;interestAmounts&quot;: [
            &quot;0.00148096@TSLA&quot;,
            &quot;3.25798370@DUSD&quot;
        ],
        &quot;collateralValue&quot;: 40000,
        &quot;loanValue&quot;: 24553.00518339,
        &quot;interestValue&quot;: 4.60518339,
        &quot;informativeRatio&quot;: 149.44494195,
        &quot;collateralRatio&quot;: 123
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;vault not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-vaults-address--ownerAddress-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-vaults-address--ownerAddress-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-vaults-address--ownerAddress-"></code></pre>
</span>
<span id="execution-error-GETv1-vaults-address--ownerAddress-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-vaults-address--ownerAddress-"></code></pre>
</span>
<form id="form-GETv1-vaults-address--ownerAddress-" data-method="GET"
      data-path="v1/vaults/address/{ownerAddress}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-vaults-address--ownerAddress-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/vaults/address/{ownerAddress}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>ownerAddress</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="ownerAddress"
               data-endpoint="GETv1-vaults-address--ownerAddress-"
               data-component="url" required  hidden>
    <br>
            </p>
                    </form>

            <h2 id="vaults-GETv1-vaults-state--state-">list vaults by state</h2>

<p>
</p>

<p>Get a list of vaults by the given state. Paginated with max 1000 elements per page.</p>

<span id="example-requests-GETv1-vaults-state--state-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/vaults/state/active" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/vaults/state/active',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/vaults/state/active'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/vaults/state/active"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETv1-vaults-state--state-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;vaultId&quot;: &quot;4f2c56761b7a1b68e20f83b82372e203088453a86cce1f365fd2dcc1fc385d0c&quot;,
            &quot;loadSchemeId&quot;: &quot;C350&quot;,
            &quot;ownerAddress&quot;: &quot;tn2cpmFQJdKmrfzzKxeDoZ5wAWWUo5maED&quot;,
            &quot;state&quot;: &quot;active&quot;,
            &quot;collateralAmounts&quot;: [
                &quot;10000.00000000@DFI&quot;
            ],
            &quot;loanAmounts&quot;: [
                &quot;5.00148096@TSLA&quot;,
                &quot;20003.25798370@DUSD&quot;
            ],
            &quot;interestAmounts&quot;: [
                &quot;0.00148096@TSLA&quot;,
                &quot;3.25798370@DUSD&quot;
            ],
            &quot;collateralValue&quot;: 40000,
            &quot;loanValue&quot;: 24553.00518339,
            &quot;interestValue&quot;: 4.60518339,
            &quot;informativeRatio&quot;: 149.44494195,
            &quot;collateralRatio&quot;: 123
        },
        {
            &quot;vaultId&quot;: &quot;4f2c56761b7a1b68e20f83b82372e203088453a86cce1f365fd2dcc1fc385d0d&quot;,
            &quot;loadSchemeId&quot;: &quot;C350&quot;,
            &quot;ownerAddress&quot;: &quot;tn2cpmFQJdKmrfzzKxeDoZ5wAWWUo5maED&quot;,
            &quot;state&quot;: &quot;active&quot;,
            &quot;collateralAmounts&quot;: [
                &quot;10000.00000000@DFI&quot;
            ],
            &quot;loanAmounts&quot;: [
                &quot;5.00148096@TSLA&quot;,
                &quot;20003.25798370@DUSD&quot;
            ],
            &quot;interestAmounts&quot;: [
                &quot;0.00148096@TSLA&quot;,
                &quot;3.25798370@DUSD&quot;
            ],
            &quot;collateralValue&quot;: 40000,
            &quot;loanValue&quot;: 24553.00518339,
            &quot;interestValue&quot;: 0,
            &quot;informativeRatio&quot;: 143.1234,
            &quot;collateralRatio&quot;: -1
        }
    ],
    &quot;stats&quot;: {
        &quot;count&quot;: 2,
        &quot;count_active&quot;: 2,
        &quot;schemes_used&quot;: {
            &quot;C150&quot;: 0,
            &quot;C175&quot;: 0,
            &quot;C200&quot;: 0,
            &quot;C350&quot;: 2,
            &quot;C500&quot;: 0,
            &quot;C1000&quot;: 0
        },
        &quot;sum_collateral_value&quot;: 80000,
        &quot;sum_loan_value&quot;: 49106.01036678
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://defichain-api.test/v1/vaults?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/vaults?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/vaults&quot;,
        &quot;per_page&quot;: 5,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-vaults-state--state-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-vaults-state--state-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-vaults-state--state-"></code></pre>
</span>
<span id="execution-error-GETv1-vaults-state--state-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-vaults-state--state-"></code></pre>
</span>
<form id="form-GETv1-vaults-state--state-" data-method="GET"
      data-path="v1/vaults/state/{state}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-vaults-state--state-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/vaults/state/{state}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state"
               data-endpoint="GETv1-vaults-state--state-"
               data-component="url" required  hidden>
    <br>
<p>active or inactive</p>            </p>
                    </form>

            <h2 id="vaults-POSTv1-vaults-addresses">get multiple vaults</h2>

<p>
</p>

<p>Get multiple vaults by vaults ids or the owner address.
Addresses and ids can be mixed.</p>

<span id="example-requests-POSTv1-vaults-addresses">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "https://defichain-api.io/v1/vaults/addresses" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"addresses\": [
        \"quos\"
    ]
}"
</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'https://defichain-api.io/v1/vaults/addresses',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'addresses' =&gt; [
                'quos',
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>

<pre><code class="language-python">import requests
import json

url = 'https://defichain-api.io/v1/vaults/addresses'
payload = {
    "addresses": [
        "quos"
    ]
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "https://defichain-api.io/v1/vaults/addresses"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "addresses": [
        "quos"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTv1-vaults-addresses">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: {
        &quot;vaultId&quot;: &quot;4f2c56761b7a1b68e20f83b82372e203088453a86cce1f365fd2dcc1fc385d0c&quot;,
        &quot;loadSchemeId&quot;: &quot;C350&quot;,
        &quot;ownerAddress&quot;: &quot;tn2cpmFQJdKmrfzzKxeDoZ5wAWWUo5maED&quot;,
        &quot;state&quot;: &quot;active&quot;,
        &quot;collateralAmounts&quot;: [
            &quot;10000.00000000@DFI&quot;
        ],
        &quot;loanAmounts&quot;: [
            &quot;5.00148096@TSLA&quot;,
            &quot;20003.25798370@DUSD&quot;
        ],
        &quot;interestAmounts&quot;: [
            &quot;0.00148096@TSLA&quot;,
            &quot;3.25798370@DUSD&quot;
        ],
        &quot;collateralValue&quot;: 40000,
        &quot;loanValue&quot;: 24553.00518339,
        &quot;interestValue&quot;: 4.60518339,
        &quot;informativeRatio&quot;: 149.44494195,
        &quot;collateralRatio&quot;: 123
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;vault not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-vaults-addresses" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-vaults-addresses"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-vaults-addresses"></code></pre>
</span>
<span id="execution-error-POSTv1-vaults-addresses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-vaults-addresses"></code></pre>
</span>
<form id="form-POSTv1-vaults-addresses" data-method="POST"
      data-path="v1/vaults/addresses"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-vaults-addresses', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/vaults/addresses</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>addresses</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="addresses.0"
               data-endpoint="POSTv1-vaults-addresses"
               data-component="body"  hidden>
        <input type="text"
               name="addresses.1"
               data-endpoint="POSTv1-vaults-addresses"
               data-component="body" hidden>
    <br>
<p>vault ids or owner addresses</p>        </p>

    </form>




    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash","php","python","javascript"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>
