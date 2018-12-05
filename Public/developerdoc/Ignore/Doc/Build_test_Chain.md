<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-developers-build-their-own-test-chains" class="anchor" aria-hidden="true" href="#developers-build-their-own-test-chains"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Developers build their own test chains</h1>
<p>This part contains nodes such as ela, ID, and SideChain.</p>
<h2><a id="user-content-1-building-the-main-chain" class="anchor" aria-hidden="true" href="#1-building-the-main-chain"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 Building the Main Chain</h2>
<h3><a id="user-content-11-prepare-the-ela-node-program" class="anchor" aria-hidden="true" href="#11-prepare-the-ela-node-program"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1 Prepare the ela node program</h3>
<h4><a id="user-content-111-compile-ela-node-program" class="anchor" aria-hidden="true" href="#111-compile-ela-node-program"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1.1 Compile ela node program</h4>
<ol>
<li>
<p>Download code <a href="https://github.com/elastos/Elastos.ELA">https://github.com/elastos/Elastos.ELA</a></p>
</li>
<li>
<p>Prepare the compilation environment and compile the ela node program</p>
<p>Set the build environment and compile the node program according to <a href="https://github.com/elastos/Elastos.ELA/blob/master/README.md">README</a>.</p>
</li>
</ol>
<h4><a id="user-content-112-download-release-version" class="anchor" aria-hidden="true" href="#112-download-release-version"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1.2 Download release version</h4>
<p>You can get the ubuntu version of the ela program from <a href="https://github.com/elastos/Elastos.ELA/releases">Release</a>.</p>
<h3><a id="user-content-12-modify-configjson" class="anchor" aria-hidden="true" href="#12-modify-configjson"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2 Modify config.json</h3>
<ol>
<li>
<p>config.json as a template</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>Configuration<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">201801</span>,
    <span class="pl-s"><span class="pl-pds">"</span>Version<span class="pl-pds">"</span></span>: <span class="pl-c1">23</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:10338<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:11338<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10333</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoStart<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpRestPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10334</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpWsPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10335</span>,
    <span class="pl-s"><span class="pl-pds">"</span>WsHeartbeatInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">60</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10336</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodePort<span class="pl-pds">"</span></span>: <span class="pl-c1">10338</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodeOpenPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10866</span>,
    <span class="pl-s"><span class="pl-pds">"</span>OpenService<span class="pl-pds">"</span></span>: <span class="pl-c1">false</span>,
    <span class="pl-s"><span class="pl-pds">"</span>PrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxLogsSize<span class="pl-pds">"</span></span>: <span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxPerLogSize<span class="pl-pds">"</span></span>: <span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>IsTLS<span class="pl-pds">"</span></span>: <span class="pl-c1">false</span>,
    <span class="pl-s"><span class="pl-pds">"</span>CertPath<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>./sample-cert.pem<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>KeyPath<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>./sample-cert-key.pem<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>CAPath<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>./sample-ca.pem<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>MultiCoreNum<span class="pl-pds">"</span></span>: <span class="pl-c1">4</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxTransactionInBlock<span class="pl-pds">"</span></span>: <span class="pl-c1">10000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxBlockSize<span class="pl-pds">"</span></span>: <span class="pl-c1">8000000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinCrossChainTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">10000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>FoundationAddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>8ZNizBf4KhhPjeJRGpox6rPcHE5Np6tFx3<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>PowConfiguration<span class="pl-pds">"</span></span>: {
      <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>EeEkSiRMZqg5rd9a2yPaWnvdPcikFtsrjE<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>AutoMining<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinerInfo<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>ELA<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">100</span>,
      <span class="pl-s"><span class="pl-pds">"</span>ActiveNet<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>MainNet<span class="pl-pds">"</span></span>
    },
    <span class="pl-s"><span class="pl-pds">"</span>Arbiters<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>03e333657c788a20577c0288559bd489ee65514748d18cb1dc7560ae4ce3d45613<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>02dd22722c3b3a284929e4859b07e6a706595066ddd2a0b38e5837403718fb047c<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>03e4473b918b499e4112d281d805fc8d8ae7ac0a71ff938cba78006bf12dd90a85<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>03dd66833d28bac530ca80af0efbfc2ec43b4b87504a41ab4946702254e7f48961<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>02c8a87c076112a1b344633184673cfb0bb6bce1aca28c78986a7b1047d257a448<span class="pl-pds">"</span></span>
    ]
  }
}</pre></div>
</li>
<li>
<p>According to the operating environment, modify Magic, SeedList, Port, FoundationAddress, etc.</p>
</li>
<li>
<p>To run the sidechain, after creating the keystore.dat file for the Arbiter node, modify the Arbiters in config.json to the public key corresponding to the Arbiter node and restart the node.</p>
</li>
</ol>
<h3><a id="user-content-13-run-ela-node" class="anchor" aria-hidden="true" href="#13-run-ela-node"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3 Run ela node</h3>
<ol>
<li>
<p>Background start command</p>
<div class="highlight highlight-source-shell"><pre>nohup ./ela <span class="pl-k">2&gt;</span>output <span class="pl-k">1&gt;</span>/dev/null <span class="pl-k">&amp;</span></pre></div>
</li>
<li>
<p>Front-end start command</p>
<div class="highlight highlight-source-shell"><pre>./ela</pre></div>
</li>
</ol>
<h3><a id="user-content-14-normal-operation-checkpoint" class="anchor" aria-hidden="true" href="#14-normal-operation-checkpoint"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.4 Normal operation checkpoint</h3>
<ol>
<li>
<p>The node height grows automatically, which can be judged by periodically checking the node height.</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10334/api/v1/api/v1/block/height</pre></div>
</li>
<li>
<p>If you run more than 2 ela nodes, you can view the number of node connections.</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10334/api/v1/node/connectioncount</pre></div>
</li>
<li>
<p>View node status.</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10334/api/v1/node/state</pre></div>
</li>
</ol>
<h3><a id="user-content-15-ela-node-interface-document" class="anchor" aria-hidden="true" href="#15-ela-node-interface-document"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.5 Ela node interface document</h3>
<ol>
<li>
<p>RESTFUL API</p>
<p><a href="https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/Elastos_Wallet_Node_API_CN.md">https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/Elastos_Wallet_Node_API_CN.md</a></p>
</li>
<li>
<p>RPC API</p>
<p><a href="https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/jsonrpc_apis.md">https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/jsonrpc_apis.md</a></p>
</li>
</ol>
<h2><a id="user-content-2-build-a-id-chain" class="anchor" aria-hidden="true" href="#2-build-a-id-chain"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 Build a ID Chain</h2>
<h3><a id="user-content-21-prepare-the-idchain-node-program" class="anchor" aria-hidden="true" href="#21-prepare-the-idchain-node-program"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1 Prepare the IDChain node program</h3>
<h4><a id="user-content-211-compile-the-idchain-node-program-did" class="anchor" aria-hidden="true" href="#211-compile-the-idchain-node-program-did"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1.1 Compile the IDChain node program DID</h4>
<ol>
<li>
<p>Download code <a href="https://github.com/elastos/Elastos.ELA.SideChain">https://github.com/elastos/Elastos.ELA.SideChain</a></p>
</li>
<li>
<p>Prepare the compilation environment and compile the IDChain node program DID</p>
<p>If the go build environment is not set locally, you can set the build environment by <a href="https://github.com/elastos/Elastos.ELA/blob/master/README.md">README@ELA</a> and then compile the DID node program according to <a href="https://github.com/elastos/Elastos.ELA.SideChain/blob/master/README.md">README@DID</a>.</p>
<p>Set the build environment and compile the node program according to <a href="https://github.com/elastos/Elastos.ELA/blob/master/README.md">README</a>.</p>
</li>
</ol>
<h3><a id="user-content-22-prepare-configjson" class="anchor" aria-hidden="true" href="#22-prepare-configjson"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2 Prepare config.json</h3>
<ol>
<li>
<p>SideChain profile template</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>Configuration<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">201802</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMagic<span class="pl-pds">"</span></span>: <span class="pl-c1">201801</span>,
    <span class="pl-s"><span class="pl-pds">"</span>Version<span class="pl-pds">"</span></span>: <span class="pl-c1">23</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:10608<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:11608<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>SpvSeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:10866<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:11866<span class="pl-pds">"</span></span>,
    ],
    <span class="pl-s"><span class="pl-pds">"</span>MainChainFoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8ZNizBf4KhhPjeJRGpox6rPcHE5Np6tFx3<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>FoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>EHCGDgxxRTj4rTSmZESmVqDHfYPZZWPpFQ<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMinOutbound<span class="pl-pds">"</span></span>: <span class="pl-c1">3</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMaxConnections<span class="pl-pds">"</span></span>: <span class="pl-c1">10</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvPrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>ExchangeRate<span class="pl-pds">"</span></span>: <span class="pl-c1">1.0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinCrossChainTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">10000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10603</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoStart<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpRestPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10604</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpWsPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10605</span>,
    <span class="pl-s"><span class="pl-pds">"</span>WsHeartbeatInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">60</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10606</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NoticeServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>OauthServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodePort<span class="pl-pds">"</span></span>: <span class="pl-c1">10608</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodeOpenPort<span class="pl-pds">"</span></span>: <span class="pl-c1">10607</span>,
    <span class="pl-s"><span class="pl-pds">"</span>OpenService<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
    <span class="pl-s"><span class="pl-pds">"</span>PrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxLogsSize<span class="pl-pds">"</span></span>: <span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxPerLogSize<span class="pl-pds">"</span></span>: <span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>IsTLS<span class="pl-pds">"</span></span>: <span class="pl-c1">false</span>,
    <span class="pl-s"><span class="pl-pds">"</span>CertPath<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>./sample-cert.pem<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>KeyPath<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>./sample-cert-key.pem<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>CAPath<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>./sample-ca.pem<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>MultiCoreNum<span class="pl-pds">"</span></span>: <span class="pl-c1">4</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxTransactionInBlock<span class="pl-pds">"</span></span>: <span class="pl-c1">10000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxBlockSize<span class="pl-pds">"</span></span>: <span class="pl-c1">8000000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>ConsensusType<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>pow<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>PowConfiguration<span class="pl-pds">"</span></span>: {
      <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>EHka9ktoHWBjjCp1uqwrJ8vWgdRPcTt4im<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>AutoMining<span class="pl-pds">"</span></span>: <span class="pl-c1">false</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinerInfo<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>did<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">100</span>,
      <span class="pl-s"><span class="pl-pds">"</span>ActiveNet<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>MainNet<span class="pl-pds">"</span></span>
    }
  }
}</pre></div>
</li>
<li>
<p>According to the environment, modify Magic, SpvMagic, Port, SeedList, MainChainFoundationAddress, FoundationAddress, etc.</p>
</li>
</ol>
<h3><a id="user-content-23-node-operation" class="anchor" aria-hidden="true" href="#23-node-operation"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.3 Node operation</h3>
<ol>
<li>
<p>Background start command</p>
<div class="highlight highlight-source-shell"><pre>nohup ./did <span class="pl-k">2&gt;</span>output <span class="pl-k">1&gt;</span>/dev/null <span class="pl-k">&amp;</span></pre></div>
</li>
<li>
<p>Front-end start command</p>
<div class="highlight highlight-source-shell"><pre>./did</pre></div>
</li>
</ol>
<h3><a id="user-content-24-view-node-running-status" class="anchor" aria-hidden="true" href="#24-view-node-running-status"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.4 View node running status</h3>
<ol>
<li>
<p>View node height</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10604/api/v1/api/v1/block/height</pre></div>
</li>
<li>
<p>View Creation Zone Block Hash</p>
<div class="highlight highlight-source-shell"><pre>curl http://127.0.0.1:10604/api/v1/block/hash/0</pre></div>
</li>
<li>
<p>View the number of neighbor nodes</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10604/api/v1/node/connectioncount</pre></div>
</li>
</ol>
<h2><a id="user-content-3-build-other-side-chains" class="anchor" aria-hidden="true" href="#3-build-other-side-chains"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3 Build other side chains</h2>
<h3><a id="user-content-31-prepare-the-side-chain-node-program" class="anchor" aria-hidden="true" href="#31-prepare-the-side-chain-node-program"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1 Prepare the side chain node program</h3>
<h4><a id="user-content-311-prepare-the-node-program-according-to-the-side-chain-requirements" class="anchor" aria-hidden="true" href="#311-prepare-the-node-program-according-to-the-side-chain-requirements"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1.1 Prepare the node program according to the side chain requirements</h4>
<h3><a id="user-content-32-prepare-the-side-chain-configjson" class="anchor" aria-hidden="true" href="#32-prepare-the-side-chain-configjson"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.2 Prepare the side chain config.json</h3>
<p>Refer to 2.2</p>
<h3><a id="user-content-33-start-side-chain-node" class="anchor" aria-hidden="true" href="#33-start-side-chain-node"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.3 Start side chain node</h3>
<ol>
<li>Get GenesisBlock Hash</li>
</ol>
<h3><a id="user-content-34-modify-the-arbiter-configuration" class="anchor" aria-hidden="true" href="#34-modify-the-arbiter-configuration"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.4 Modify the arbiter configuration</h3>
<ol>
<li>
<p>Add a keystore file for each arbiter, the password is the same as the other arbiter keystore files.</p>
</li>
<li>
<p>Add a second sidechain information to arbiter's config.json. The content refers to the first information of the SideNodeList. The following is the configuration information of the two sidechains.</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>Configuration<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">201806272</span>,
    <span class="pl-s"><span class="pl-pds">"</span>Version<span class="pl-pds">"</span></span>: <span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>did-regtest-001.elastos.org:22538<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-regtest-002.elastos.org:22538<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-regtest-003.elastos.org:22538<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-regtest-004.elastos.org:22538<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-regtest-005.elastos.org:22538<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>NodePort<span class="pl-pds">"</span></span>: <span class="pl-c1">22538</span>,
    <span class="pl-s"><span class="pl-pds">"</span>PrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvPrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">22536</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MainNode<span class="pl-pds">"</span></span>: {
      <span class="pl-s"><span class="pl-pds">"</span>Rpc<span class="pl-pds">"</span></span>: {
        <span class="pl-s"><span class="pl-pds">"</span>IpAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">22336</span>
      },
      <span class="pl-s"><span class="pl-pds">"</span>SpvSeedList<span class="pl-pds">"</span></span>: [
        <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:22866<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>node-regtest-002.elastos.org:22866<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>node-regtest-003.elastos.org:22866<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>node-regtest-004.elastos.org:22866<span class="pl-pds">"</span></span>
      ],
      <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">20180627</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinOutbound<span class="pl-pds">"</span></span>: <span class="pl-c1">4</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MaxConnections<span class="pl-pds">"</span></span>: <span class="pl-c1">100</span>,
      <span class="pl-s"><span class="pl-pds">"</span>FoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8ZNizBf4KhhPjeJRGpox6rPcHE5Np6tFx3<span class="pl-pds">"</span></span>
    },
    <span class="pl-s"><span class="pl-pds">"</span>SideNodeList<span class="pl-pds">"</span></span>: [
      {
        <span class="pl-s"><span class="pl-pds">"</span>Rpc<span class="pl-pds">"</span></span>: {
          <span class="pl-s"><span class="pl-pds">"</span>IpAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">22606</span>
        },
        <span class="pl-s"><span class="pl-pds">"</span>ExchangeRate<span class="pl-pds">"</span></span>: <span class="pl-c1">1.0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>GenesisBlock<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>56be936978c261b2e649d58dbfaf3f23d4a868274f5522cd2adb4308a955c4a3<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>KeystoreFile<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>keystore1.dat<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>ESHtMtd4v4247fBn3KcDG4pfoCtz51Q6nZ<span class="pl-pds">"</span></span>
      },
      {
        <span class="pl-s"><span class="pl-pds">"</span>Rpc<span class="pl-pds">"</span></span>: {
          <span class="pl-s"><span class="pl-pds">"</span>IpAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">22616</span>
        },
        <span class="pl-s"><span class="pl-pds">"</span>ExchangeRate<span class="pl-pds">"</span></span>: <span class="pl-c1">19.0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>GenesisBlock<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>38f8cc21e25161350de4f3e44260b386a8be5239c83c9f8a908d8b46b5f328100<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>KeystoreFile<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>keystore2.dat<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>2<span class="pl-pds">"</span></span>
      }
    ],
    <span class="pl-s"><span class="pl-pds">"</span>MinThreshold<span class="pl-pds">"</span></span>: <span class="pl-c1">1000000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>DepositAmount<span class="pl-pds">"</span></span>: <span class="pl-c1">1000000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SyncInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">1000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SideChainMonitorScanInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">1000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>ClearTransactionInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">60000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinReceivedUsedUtxoMsgNumber<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinOutbound<span class="pl-pds">"</span></span>: <span class="pl-c1">3</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxConnections<span class="pl-pds">"</span></span>: <span class="pl-c1">8</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SideAuxPowFee<span class="pl-pds">"</span></span>: <span class="pl-c1">50000</span>
  }
}</pre></div>
</li>
<li>
<p>Restart arbiter</p>
</li>
</ol>
</article>