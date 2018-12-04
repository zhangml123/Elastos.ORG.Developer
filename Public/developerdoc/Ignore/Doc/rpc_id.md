<article class="markdown-body entry-content" itemprop="text"><h2><a id="user-content-getidentificationtxbyidandpath" class="anchor" aria-hidden="true" href="#getidentificationtxbyidandpath"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>getidentificationtxbyidandpath</h2>
<p>description: get registered id transaction by id and path
parameters:</p>
<table>
<thead>
<tr>
<th>name</th>
<th>type</th>
<th>description</th>
</tr>
</thead>
<tbody>
<tr>
<td>id</td>
<td>string</td>
<td>id of identification</td>
</tr>
<tr>
<td>path</td>
<td>string</td>
<td>path of identification</td>
</tr>
</tbody>
</table>
<p>results: registered id transaction information
argument sample:</p>
<div class="highlight highlight-source-json"><pre>{
	<span class="pl-s"><span class="pl-pds">"</span>method<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>getidentificationtxbyidandpath<span class="pl-pds">"</span></span>,
	<span class="pl-s"><span class="pl-pds">"</span>params<span class="pl-pds">"</span></span>:{
		<span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>igRn4VtAUB7hPkMrYMHt5f3xiQUMQJUFD2<span class="pl-pds">"</span></span>,
		<span class="pl-s"><span class="pl-pds">"</span>path<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>kyc/person/identityCard<span class="pl-pds">"</span></span>
	}
}</pre></div>
<p>result sample:</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>result<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>277f428f0be9f60bf3ba996540f3a4b467ac75f1296d41b5543edcc3190d944e<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>hash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>277f428f0be9f60bf3ba996540f3a4b467ac75f1296d41b5543edcc3190d944e<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>size<span class="pl-pds">"</span></span>:<span class="pl-c1">733</span>,
    <span class="pl-s"><span class="pl-pds">"</span>vsize<span class="pl-pds">"</span></span>:<span class="pl-c1">733</span>,
    <span class="pl-s"><span class="pl-pds">"</span>version<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>locktime<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>vin<span class="pl-pds">"</span></span>:[
        {
            <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>860b98c591d88c2eeaea521c32d35f191e1d039378c58bf47bbaf7752ecaa9ca<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>vout<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
            <span class="pl-s"><span class="pl-pds">"</span>sequence<span class="pl-pds">"</span></span>:<span class="pl-c1">4294967295</span>
        }
    ],
    <span class="pl-s"><span class="pl-pds">"</span>vout<span class="pl-pds">"</span></span>:[
        {
            <span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>0<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>n<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
            <span class="pl-s"><span class="pl-pds">"</span>address<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>igRn4VtAUB7hPkMrYMHt5f3xiQUMQJUFD2<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>assetid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>a3d0eaa466df74983b5d7c543de6904f4c9418ead5ffd6d25814234a96db37b0<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>outputlock<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>
        },
        {
            <span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>98.99990000<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>n<span class="pl-pds">"</span></span>:<span class="pl-c1">1</span>,
            <span class="pl-s"><span class="pl-pds">"</span>address<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EfdVME9U6u1e774R4YeXpPQN3vLVsmmkee<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>assetid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>a3d0eaa466df74983b5d7c543de6904f4c9418ead5ffd6d25814234a96db37b0<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>outputlock<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>
        }
    ],
    <span class="pl-s"><span class="pl-pds">"</span>blockhash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>5ac927a80e58e4337ee791c4c3e7c0d40f54ab6b63efb11ece9630259a57dbc3<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>confirmations<span class="pl-pds">"</span></span>:<span class="pl-c1">10</span>,
    <span class="pl-s"><span class="pl-pds">"</span>time<span class="pl-pds">"</span></span>:<span class="pl-c1">1539155763</span>,
    <span class="pl-s"><span class="pl-pds">"</span>blocktime<span class="pl-pds">"</span></span>:<span class="pl-c1">1539155763</span>,
    <span class="pl-s"><span class="pl-pds">"</span>type<span class="pl-pds">"</span></span>:<span class="pl-c1">9</span>,
    <span class="pl-s"><span class="pl-pds">"</span>payloadversion<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>payload<span class="pl-pds">"</span></span>:{
        <span class="pl-s"><span class="pl-pds">"</span>Id<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>igRn4VtAUB7hPkMrYMHt5f3xiQUMQJUFD2<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>Sign<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>40bc9424152e20c20909909d87036a4f54e8e30e7ecce65b235e41dac2cf0ea8954c93453e6b275963baf77ea71470123f70a83053327d071ead86315e685e564b<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>Contents<span class="pl-pds">"</span></span>:[
            {
                <span class="pl-s"><span class="pl-pds">"</span>Path<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>kyc/person/identityCard<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>Values<span class="pl-pds">"</span></span>:[
                    {                      <span class="pl-s"><span class="pl-pds">"</span>DataHash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>bd117820c4cf30b0ad9ce68fe92b0117ca41ac2b6a49235fabd793fc3a9413c0<span class="pl-pds">"</span></span>,
                     <span class="pl-s"><span class="pl-pds">"</span>Proof<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span><span class="pl-ii">signature</span><span class="pl-s"><span class="pl-pds">"</span>:<span class="pl-pds">"</span></span><span class="pl-c1">30450220499</span><span class="pl-ii">a</span><span class="pl-c1">5</span><span class="pl-ii">de</span><span class="pl-c1">3</span><span class="pl-ii">f</span><span class="pl-c1">84e7</span><span class="pl-ii">e</span><span class="pl-c1">919</span><span class="pl-ii">c</span><span class="pl-c1">26</span><span class="pl-ii">b</span><span class="pl-c1">6</span><span class="pl-ii">a</span><span class="pl-c1">8543</span><span class="pl-ii">fd</span><span class="pl-c1">24129634</span><span class="pl-ii">c</span><span class="pl-c1">65</span><span class="pl-ii">ee</span><span class="pl-c1">4</span><span class="pl-ii">d</span><span class="pl-c1">38</span><span class="pl-ii">fe</span><span class="pl-c1">2e3386</span><span class="pl-ii">ec</span>
<span class="pl-c1">8</span><span class="pl-ii">a</span><span class="pl-c1">5</span><span class="pl-ii">dae</span><span class="pl-c1">57022100</span><span class="pl-ii">b</span><span class="pl-c1">7679</span><span class="pl-ii">de</span><span class="pl-c1">8</span><span class="pl-ii">d</span><span class="pl-c1">181</span><span class="pl-ii">a</span><span class="pl-c1">454e2</span><span class="pl-ii">def</span><span class="pl-c1">8</span><span class="pl-ii">f</span><span class="pl-c1">55</span><span class="pl-ii">de</span><span class="pl-c1">423e9</span><span class="pl-ii">e</span><span class="pl-c1">15</span><span class="pl-ii">bebcde</span><span class="pl-c1">5</span><span class="pl-ii">c</span><span class="pl-c1">58e871</span><span class="pl-ii">d</span><span class="pl-c1">20</span><span class="pl-ii">aa</span><span class="pl-c1">0</span><span class="pl-ii">d</span><span class="pl-c1">91162</span><span class="pl-ii">ff</span><span class="pl-c1">6</span><span class="pl-s"><span class="pl-pds">"</span>,<span class="pl-pds">"</span></span><span class="pl-ii">notary</span>
<span class="pl-s"><span class="pl-pds">"</span>:<span class="pl-pds">"</span></span><span class="pl-ii">COOIX</span><span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>
                    }
                ]
            }
        ]
    },
    <span class="pl-s"><span class="pl-pds">"</span>attributes<span class="pl-pds">"</span></span>:[
        {
            <span class="pl-s"><span class="pl-pds">"</span>usage<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
            <span class="pl-s"><span class="pl-pds">"</span>data<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>31353831333330393234<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-s"><span class="pl-pds">"</span>usage<span class="pl-pds">"</span></span>:<span class="pl-c1">145</span>,
            <span class="pl-s"><span class="pl-pds">"</span>data<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>6d656d6f<span class="pl-pds">"</span></span>
        }
    ],
    <span class="pl-s"><span class="pl-pds">"</span>programs<span class="pl-pds">"</span></span>:[
        {
            <span class="pl-s"><span class="pl-pds">"</span>code<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>2103e1963a35418da50a0b2749c901fd246b08522e5fa192cb1f3a2de8a9785eeeefad<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>parameter<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>400f0ecff1d11fae00dbad8ab70966bb3e6e2879978dadc322a73d5e5236cf5818adacf059777a904eec8e6dd15f97bc1422d861af9e9c837a32b70d0f623970f6<span class="pl-pds">"</span></span>
        },
        {
            <span class="pl-s"><span class="pl-pds">"</span>code<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>21027035769801eee0fd34b76a11a251dfcde5f0e763a626e93af905c4c0d382334fac<span class="pl-pds">"</span></span>,
            <span class="pl-s"><span class="pl-pds">"</span>parameter<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>40e024b0d2465ec851fc56db1118f05e2c083320c30610c4850aa632d0187f5ccb0d70840044f2e1daab9e677baa4fd86e569d91a1438fe0fb8c7f2974d567f4fe<span class="pl-pds">"</span></span>
        }
    ]
  }
}</pre></div>
</article>