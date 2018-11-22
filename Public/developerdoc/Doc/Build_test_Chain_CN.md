<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-开发者自行搭建测试链" class="anchor" aria-hidden="true" href="#开发者自行搭建测试链"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>开发者自行搭建测试链</h1>
<p>该部分包含 ela、ID、SideChain 等节点。</p>
<h2><a id="user-content-1-搭建主链" class="anchor" aria-hidden="true" href="#1-搭建主链"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 搭建主链</h2>
<h3><a id="user-content-11-准备-ela-节点程序" class="anchor" aria-hidden="true" href="#11-准备-ela-节点程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1 准备 ela 节点程序</h3>
<h4><a id="user-content-111-编译-ela-节点程序" class="anchor" aria-hidden="true" href="#111-编译-ela-节点程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1.1 编译 ela 节点程序</h4>
<ol>
<li>
<p>下载代码 <a href="https://github.com/elastos/Elastos.ELA">https://github.com/elastos/Elastos.ELA</a></p>
</li>
<li>
<p>准备编译环境并编译 ela 节点程序</p>
<p>按照 <a href="https://github.com/elastos/Elastos.ELA/blob/master/README.md">README</a> 设置编译环境并编译节点程序。</p>
</li>
</ol>
<h4><a id="user-content-112-下载-release-版本" class="anchor" aria-hidden="true" href="#112-下载-release-版本"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1.2 下载 release 版本</h4>
<p>从 <a href="https://github.com/elastos/Elastos.ELA/releases">Release</a>可以获得ubuntu 版本的ela程序。</p>
<h3><a id="user-content-12-修改configjson" class="anchor" aria-hidden="true" href="#12-修改configjson"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2 修改config.json</h3>
<ol>
<li>
<p>config.json为模板</p>
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
<p>根据运行环境修改 Magic、SeedList、端口及 FoundationAddress 等</p>
</li>
<li>
<p>如需运行侧链，在为 Arbiter 节点创建 keystore.dat 文件后，并将 config.json 中 Arbiters 修改为对应 Arbiter 节点的公钥，并重启节点。</p>
</li>
</ol>
<h3><a id="user-content-13-运行ela节点" class="anchor" aria-hidden="true" href="#13-运行ela节点"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3 运行ela节点</h3>
<ol>
<li>
<p>后台启动命令</p>
<div class="highlight highlight-source-shell"><pre>nohup ./ela <span class="pl-k">2&gt;</span>output <span class="pl-k">1&gt;</span>/dev/null <span class="pl-k">&amp;</span></pre></div>
</li>
<li>
<p>前端启动命令</p>
<div class="highlight highlight-source-shell"><pre>./ela</pre></div>
</li>
</ol>
<h3><a id="user-content-14-正常运行检查点" class="anchor" aria-hidden="true" href="#14-正常运行检查点"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.4 正常运行检查点</h3>
<ol>
<li>
<p>节点高度自动增长，可通过定期查看节点高度判断</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10334/api/v1/block/height</pre></div>
</li>
<li>
<p>如运行2个以上 ela 节点，可查看节点连接数</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10334/api/v1/node/connectioncount</pre></div>
</li>
<li>
<p>查看节点状态</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10334/api/v1/node/state</pre></div>
</li>
</ol>
<h3><a id="user-content-15-ela节点接口文档" class="anchor" aria-hidden="true" href="#15-ela节点接口文档"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.5 ela节点接口文档</h3>
<ol>
<li>
<p>RESTFUL接口</p>
<p><a href="https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/Elastos_Wallet_Node_API_CN.md">https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/Elastos_Wallet_Node_API_CN.md</a></p>
</li>
<li>
<p>RPC接口</p>
<p><a href="https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/jsonrpc_apis.md">https://github.com/elastos/Elastos.ELA/blob/release_v0.2.1/docs/jsonrpc_apis.md</a></p>
</li>
</ol>
<h2><a id="user-content-2-搭建-id-链" class="anchor" aria-hidden="true" href="#2-搭建-id-链"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 搭建 ID 链</h2>
<h3><a id="user-content-21-准备-idchain-节点程序" class="anchor" aria-hidden="true" href="#21-准备-idchain-节点程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1 准备 IDChain 节点程序</h3>
<h4><a id="user-content-211-编译-idchain-节点程序-did" class="anchor" aria-hidden="true" href="#211-编译-idchain-节点程序-did"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1.1 编译 IDChain 节点程序 DID</h4>
<ol>
<li>
<p>下载代码 <a href="https://github.com/elastos/Elastos.ELA.SideChain">https://github.com/elastos/Elastos.ELA.SideChain</a></p>
</li>
<li>
<p>准备编译环境并编译 IDChain 节点程序 DID</p>
<p>如本地未设置 go 编译环境，可以按照 <a href="https://github.com/elastos/Elastos.ELA/blob/master/README.md">README@ELA</a> 设置编译环境，然后按照 <a href="https://github.com/elastos/Elastos.ELA.SideChain/blob/master/README.md">README@DID</a> 编译DID节点程序。</p>
<p>按照 <a href="https://github.com/elastos/Elastos.ELA/blob/master/README.md">README</a> 设置编译环境并编译节点程序。</p>
</li>
</ol>
<h3><a id="user-content-22-准备configjson" class="anchor" aria-hidden="true" href="#22-准备configjson"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2 准备config.json</h3>
<ol>
<li>
<p>sidechain配置文件模板</p>
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
<p>根据环境修改 Magic、SpvMagic、端口、SeedList、MainChainFoundationAddress、FoundationAddress 等</p>
</li>
</ol>
<h3><a id="user-content-23-节点运行" class="anchor" aria-hidden="true" href="#23-节点运行"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.3 节点运行</h3>
<ol>
<li>
<p>后台启动命令</p>
<div class="highlight highlight-source-shell"><pre>nohup ./did <span class="pl-k">2&gt;</span>output <span class="pl-k">1&gt;</span>/dev/null <span class="pl-k">&amp;</span></pre></div>
</li>
<li>
<p>前端启动命令</p>
<div class="highlight highlight-source-shell"><pre>./did</pre></div>
</li>
</ol>
<h3><a id="user-content-24-查看节点运行状态" class="anchor" aria-hidden="true" href="#24-查看节点运行状态"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.4 查看节点运行状态</h3>
<ol>
<li>
<p>查看节点高度</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10604/api/v1/api/v1/block/height</pre></div>
</li>
<li>
<p>查看创世区块Hash</p>
<div class="highlight highlight-source-shell"><pre>curl http://127.0.0.1:10604/api/v1/block/hash/0</pre></div>
</li>
<li>
<p>查看邻居节点数量</p>
<div class="highlight highlight-source-shell"><pre>curl http://localhost:10604/api/v1/node/connectioncount</pre></div>
</li>
</ol>
<h2><a id="user-content-3-搭建其他侧链" class="anchor" aria-hidden="true" href="#3-搭建其他侧链"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3 搭建其他侧链</h2>
<h3><a id="user-content-31-准备侧链节点程序" class="anchor" aria-hidden="true" href="#31-准备侧链节点程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1 准备侧链节点程序</h3>
<h4><a id="user-content-311-根据侧链需求准备节点程序" class="anchor" aria-hidden="true" href="#311-根据侧链需求准备节点程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1.1 根据侧链需求准备节点程序</h4>
<h3><a id="user-content-32-准备侧链configjson" class="anchor" aria-hidden="true" href="#32-准备侧链configjson"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.2 准备侧链config.json</h3>
<p>参照 2.2</p>
<h3><a id="user-content-33-启动侧链节点" class="anchor" aria-hidden="true" href="#33-启动侧链节点"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.3 启动侧链节点</h3>
<ol>
<li>获取GenesisBlock Hash</li>
</ol>
<h3><a id="user-content-34-修改arbiter配置" class="anchor" aria-hidden="true" href="#34-修改arbiter配置"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.4 修改arbiter配置</h3>
<ol>
<li>
<p>为每个arbiter添加一个keystore文件，密码是与该arbiter其他keystore文件一致</p>
</li>
<li>
<p>为arbiter的config.json添加第二条侧链信息，内容参照SideNodeList的第一条信息，下面为配置2条侧链的配置信息，可供参考</p>
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
<p>重启arbiter</p>
</li>
</ol>
</article>