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
            <li>Last updated: October 13 2021</li>
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
x-ratelimit-remaining: 59
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

        <h1 id="masternode">Masternode</h1>

    

            <h2 id="masternode-GETv1-masternode">active Masternodes (paginated)</h2>

<p>
</p>

<p>Get all active masternodes, including the states ENABLED and PRE_ENABLED.</p>

<span id="example-requests-GETv1-masternode">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternode?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternode',
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

url = 'https://defichain-api.io/v1/masternode'
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
    "https://defichain-api.io/v1/masternode"
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

<span id="example-responses-GETv1-masternode">
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
<span id="execution-results-GETv1-masternode" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternode"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternode"></code></pre>
</span>
<span id="execution-error-GETv1-masternode" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternode"></code></pre>
</span>
<form id="form-GETv1-masternode" data-method="GET"
      data-path="v1/masternode"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternode', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternode</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternode" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternode"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternode" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternode"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: true</p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternode" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternode"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternode" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternode"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternode-GETv1-masternode--state-">Masternodes with requested state (paginated)</h2>

<p>
</p>

<p>Get all masternodes with the requested state</p>
<aside class="notice">possible states are <code>ENABLED, PRE_ENABLED, RESIGNED,
PRE_RESIGNED and BANNED</code>.</aside>

<span id="example-requests-GETv1-masternode--state-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternode/resigned?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternode/resigned',
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

url = 'https://defichain-api.io/v1/masternode/resigned'
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
    "https://defichain-api.io/v1/masternode/resigned"
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

<span id="example-responses-GETv1-masternode--state-">
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
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;0004d59008c8ba83c3e732f7716ef7f175a0a65e0ffae361366dbec02304fc0f&quot;,
            &quot;ownerAddress&quot;: &quot;8R9HDusU7AhCgFRCynmm15RpxJgyetDmSs&quot;,
            &quot;operatorAddress&quot;: &quot;8Ltg2WCwF4zqwymXkHyzgQsAt1Q4mDirMd&quot;,
            &quot;state&quot;: &quot;RESIGNED&quot;,
            &quot;mintedBlocks&quot;: 56,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [],
            &quot;creationHeight&quot;: 681764,
            &quot;resignHeight&quot;: 1175167,
            &quot;resignTx&quot;: &quot;04a09859de765710d450b97a7ff69560a3c85c0da1cba6e32b8d94b2cf659fd7&quot;,
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
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode/resigned?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode/resigned?page=9896&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://defichain-api.test/v1/masternode/resigned?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 9896,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode/resigned&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 9896
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternode--state-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternode--state-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternode--state-"></code></pre>
</span>
<span id="execution-error-GETv1-masternode--state-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternode--state-"></code></pre>
</span>
<form id="form-GETv1-masternode--state-" data-method="GET"
      data-path="v1/masternode/{state}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternode--state-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternode/{state}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="state"
               data-endpoint="GETv1-masternode--state-"
               data-component="url" required  hidden>
    <br>
<p>Select all masternodes with the given state.</p>            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternode--state-" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternode--state-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternode--state-" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternode--state-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: <code>true</code></p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternode--state-" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternode--state-"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternode--state-" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternode--state-"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
                </form>

            <h2 id="masternode-GETv1-masternode-with_inactive">active Masternodes (paginated)</h2>

<p>
</p>

<p>Get all active masternodes, including the states ENABLED, PRE_ENABLED, RESIGNED, PRE_RESIGNED and BANNED</p>

<span id="example-requests-GETv1-masternode-with_inactive">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "https://defichain-api.io/v1/masternode/with_inactive?stats=1&amp;wtf=1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'https://defichain-api.io/v1/masternode/with_inactive',
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

url = 'https://defichain-api.io/v1/masternode/with_inactive'
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
    "https://defichain-api.io/v1/masternode/with_inactive"
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

<span id="example-responses-GETv1-masternode-with_inactive">
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
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;masternodeId&quot;: &quot;0004d59008c8ba83c3e732f7716ef7f175a0a65e0ffae361366dbec02304fc0f&quot;,
            &quot;ownerAddress&quot;: &quot;8R9HDusU7AhCgFRCynmm15RpxJgyetDmSs&quot;,
            &quot;operatorAddress&quot;: &quot;8Ltg2WCwF4zqwymXkHyzgQsAt1Q4mDirMd&quot;,
            &quot;state&quot;: &quot;RESIGNED&quot;,
            &quot;mintedBlocks&quot;: 56,
            &quot;timelock&quot;: null,
            &quot;targetMultiplier&quot;: [],
            &quot;creationHeight&quot;: 681764,
            &quot;resignHeight&quot;: 1175167,
            &quot;resignTx&quot;: &quot;04a09859de765710d450b97a7ff69560a3c85c0da1cba6e32b8d94b2cf659fd7&quot;,
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
        &quot;first&quot;: &quot;http://defichain-api.test/v1/masternode/with_inactive?page=1&quot;,
        &quot;last&quot;: &quot;http://defichain-api.test/v1/masternode/with_inactive?page=19121&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://defichain-api.test/v1/masternode/with_inactive?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 19121,
        &quot;path&quot;: &quot;http://defichain-api.test/v1/masternode/with_inactive&quot;,
        &quot;per_page&quot;: 1,
        &quot;to&quot;: 1,
        &quot;total&quot;: 19121
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-masternode-with_inactive" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-masternode-with_inactive"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-masternode-with_inactive"></code></pre>
</span>
<span id="execution-error-GETv1-masternode-with_inactive" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-masternode-with_inactive"></code></pre>
</span>
<form id="form-GETv1-masternode-with_inactive" data-method="GET"
      data-path="v1/masternode/with_inactive"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-masternode-with_inactive', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/masternode/with_inactive</code></b>
        </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>stats</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternode-with_inactive" hidden>
            <input type="radio" name="stats"
                   value="1"
                   data-endpoint="GETv1-masternode-with_inactive"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternode-with_inactive" hidden>
            <input type="radio" name="stats"
                   value="0"
                   data-endpoint="GETv1-masternode-with_inactive"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get additional statistics. Default: <code>true</code></p>            </p>
                    <p>
                <b><code>wtf</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="GETv1-masternode-with_inactive" hidden>
            <input type="radio" name="wtf"
                   value="1"
                   data-endpoint="GETv1-masternode-with_inactive"
                   data-component="query"             >
            <code>true</code>
        </label>
        <label data-endpoint="GETv1-masternode-with_inactive" hidden>
            <input type="radio" name="wtf"
                   value="0"
                   data-endpoint="GETv1-masternode-with_inactive"
                   data-component="query"             >
            <code>false</code>
        </label>
    <br>
<p>Get explainations for all returned values. Default: <code>false</code></p>            </p>
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