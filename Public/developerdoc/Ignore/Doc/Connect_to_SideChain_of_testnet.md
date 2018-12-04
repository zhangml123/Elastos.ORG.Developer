<article class="markdown-body entry-content" itemprop="text"><ol>
<li>
<p>Download or compile ELastos.ELA.SideChain</p>
</li>
<li>
<p>Save the configuration information as a config.json file and place it in the same directory as the side file</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>Configuration<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">20180011</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMagic<span class="pl-pds">"</span></span>: <span class="pl-c1">2018001</span>,
    <span class="pl-s"><span class="pl-pds">"</span>Version<span class="pl-pds">"</span></span>: <span class="pl-c1">23</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>did-testnet-001.elastos.org:21608<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-testnet-002.elastos.org:21608<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-testnet-003.elastos.org:21608<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-testnet-004.elastos.org:21608<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>did-testnet-005.elastos.org:21608<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>SpvSeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:21338<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>node-testnet-002.elastos.org:21866<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>node-testnet-003.elastos.org:21866<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>node-testnet-004.elastos.org:21866<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>MainChainFoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8ZNizBf4KhhPjeJRGpox6rPcHE5Np6tFx3<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>FoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8NRxtbMKScEWzW8gmPDGUZ8LSzm688nkZZ<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMinOutbound<span class="pl-pds">"</span></span>: <span class="pl-c1">3</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMaxConnections<span class="pl-pds">"</span></span>: <span class="pl-c1">10</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvPrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>ExchangeRate<span class="pl-pds">"</span></span>: <span class="pl-c1">1.0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinCrossChainTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">10000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoPort<span class="pl-pds">"</span></span>: <span class="pl-c1">21603</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoStart<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpRestPort<span class="pl-pds">"</span></span>: <span class="pl-c1">21604</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpWsPort<span class="pl-pds">"</span></span>: <span class="pl-c1">21605</span>,
    <span class="pl-s"><span class="pl-pds">"</span>WsHeartbeatInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">60</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">21606</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NoticeServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>OauthServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodePort<span class="pl-pds">"</span></span>: <span class="pl-c1">21608</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodeOpenPort<span class="pl-pds">"</span></span>: <span class="pl-c1">21607</span>,
    <span class="pl-s"><span class="pl-pds">"</span>OpenService<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
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
    <span class="pl-s"><span class="pl-pds">"</span>ConsensusType<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>pow<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>PowConfiguration<span class="pl-pds">"</span></span>: {
      <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>ESHtMtd4v4247fBn3KcDG4pfoCtz51Q6nZ<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>AutoMining<span class="pl-pds">"</span></span>: <span class="pl-c1">false</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinerInfo<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>DID-testnet<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">100</span>,
      <span class="pl-s"><span class="pl-pds">"</span>ActiveNet<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>MainNet<span class="pl-pds">"</span></span>
    }
  }
}</pre></div>
</li>
<li>
<p>Start the node program ./side or nohup</p>
<div class="highlight highlight-source-shell"><pre>./side <span class="pl-k">2&gt;</span>output <span class="pl-k">1&gt;</span>/dev/null <span class="pl-k">&amp;</span></pre></div>
</li>
</ol>
</article>