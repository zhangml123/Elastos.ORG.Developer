<article class="markdown-body entry-content" itemprop="text"><ol>
<li>Prepare <code>SideChain</code> and <code>Arbiter</code> binaries and configuration files</li>
</ol>
<p><code>https://github.com/elastos/Elastos.ELA.SideChain</code>
<code>https://github.com/elastos/Elastos.ELA.Arbiter</code></p>
<p>Compile the executable with the code for the <code>release_v0.0.1</code> branch, copy the configuration file template and the <code>ela-cli</code> executable</p>
<blockquote>
<p>The test environment can use at least two nodes, each of which deploys the <code>Arbiter</code> and <code>Side</code> applications. It is recommended to use a minimum of 5 <code>Arbiter</code> nodes and more <code>Side</code> nodes in the production application environment.</p>
</blockquote>
<p>Configuration file example:</p>
<p><strong><code>MainChain Node Configuration</code></strong></p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>Configuration<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">20180920</span>,
    <span class="pl-s"><span class="pl-pds">"</span>Version<span class="pl-pds">"</span></span>: <span class="pl-c1">23</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>192.168.31.183:20338<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20333</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoStart<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpRestPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20334</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpWsPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20335</span>,
    <span class="pl-s"><span class="pl-pds">"</span>WsHeartbeatInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">60</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20336</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NoticeServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>OauthServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodePort<span class="pl-pds">"</span></span>: <span class="pl-c1">20338</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodeOpenPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20866</span>,
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
    <span class="pl-s"><span class="pl-pds">"</span>PowConfiguration<span class="pl-pds">"</span></span>: {
      <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>Ef9Um6zQg4QiUagDZU7DVW1cJUuyfmQvhn<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>AutoMining<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinerInfo<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>ELA<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">100</span>,
      <span class="pl-s"><span class="pl-pds">"</span>ActiveNet<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>MainNet<span class="pl-pds">"</span></span>
    },
    <span class="pl-s"><span class="pl-pds">"</span>Arbiters<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>0272baeeae8a3cdfcc78cff17a8fd9838fcb94a621035cf6bfb93b119d49a1c618<span class="pl-pds">"</span></span>
    ]
  }
}</pre></div>
<blockquote>
<p>More than the main chain of the no-chain environment, the configuration of the <code>Arbiters</code> project, which is the <code>Public Key</code> of the main account in all <code>Arbiter</code> nodes.</p>
</blockquote>
<blockquote>
<p>Usually the production environment uses the <code>20xxx</code> port; the test environment uses the <code>21xxx</code> port; other test environments use the <code>23xxx</code> port.</p>
</blockquote>
<p><strong><code>SideChain Node Configuration</code></strong></p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>Configuration<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">20180921</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMagic<span class="pl-pds">"</span></span>: <span class="pl-c1">20180920</span>,
    <span class="pl-s"><span class="pl-pds">"</span>Version<span class="pl-pds">"</span></span>: <span class="pl-c1">23</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>192.168.31.186:20608<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>192.168.31.185:20608<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>SpvSeedList<span class="pl-pds">"</span></span>: [
      <span class="pl-s"><span class="pl-pds">"</span>192.168.31.183:20866<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>192.168.31.182:20866<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>MainChainFoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8VYXVxKKSAxkmRrfmGpQR2Kc66XhG6m3ta<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>FoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8VYXVxKKSAxkmRrfmGpQR2Kc66XhG6m3ta<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMinOutbound<span class="pl-pds">"</span></span>: <span class="pl-c1">3</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvMaxConnections<span class="pl-pds">"</span></span>: <span class="pl-c1">24</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvPrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>ExchangeRate<span class="pl-pds">"</span></span>: <span class="pl-c1">1.0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinCrossChainTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">10000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20603</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpInfoStart<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpRestPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20604</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpWsPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20605</span>,
    <span class="pl-s"><span class="pl-pds">"</span>WsHeartbeatInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">60</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20606</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NoticeServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>OauthServerUrl<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span><span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodePort<span class="pl-pds">"</span></span>: <span class="pl-c1">20608</span>,
    <span class="pl-s"><span class="pl-pds">"</span>NodeOpenPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20607</span>,
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
      <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8VYXVxKKSAxkmRrfmGpQR2Kc66XhG6m3ta<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>AutoMining<span class="pl-pds">"</span></span>: <span class="pl-c1">false</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinerInfo<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>ELA<span class="pl-pds">"</span></span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinTxFee<span class="pl-pds">"</span></span>: <span class="pl-c1">100</span>,
      <span class="pl-s"><span class="pl-pds">"</span>ActiveNet<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>MainNet<span class="pl-pds">"</span></span>
    }
  }
}</pre></div>
<blockquote>
<p>Here the <code>MainChainFoundationAddress</code> <code>FoundationAddress</code> address must be set to this fixed base address (or change the source code)</p>
</blockquote>
<blockquote>
<p>All nodes of the SideChain should be set to not automatically mine</p>
</blockquote>
<p><strong><code>Arbiter Node Configuration</code></strong></p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>Configuration<span class="pl-pds">"</span></span>: {
    <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">20180922</span>,
    <span class="pl-s"><span class="pl-pds">"</span>Version<span class="pl-pds">"</span></span>: <span class="pl-c1">23</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SeedList<span class="pl-pds">"</span></span>: [
       <span class="pl-s"><span class="pl-pds">"</span>192.168.31.185:20538<span class="pl-pds">"</span></span>,
       <span class="pl-s"><span class="pl-pds">"</span>192.168.31.186:20538<span class="pl-pds">"</span></span>
    ],
    <span class="pl-s"><span class="pl-pds">"</span>NodePort<span class="pl-pds">"</span></span>: <span class="pl-c1">20538</span>,
    <span class="pl-s"><span class="pl-pds">"</span>PrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SpvPrintLevel<span class="pl-pds">"</span></span>: <span class="pl-c1">4</span>,
    <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20536</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MainNode<span class="pl-pds">"</span></span>: {
      <span class="pl-s"><span class="pl-pds">"</span>Rpc<span class="pl-pds">"</span></span>: {
        <span class="pl-s"><span class="pl-pds">"</span>IpAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>192.168.31.181<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20336</span>
      },
      <span class="pl-s"><span class="pl-pds">"</span>SpvSeedList<span class="pl-pds">"</span></span>: [
        <span class="pl-s"><span class="pl-pds">"</span>192.168.31.182:20866<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>192.168.31.183:20866<span class="pl-pds">"</span></span>
      ],
      <span class="pl-s"><span class="pl-pds">"</span>Magic<span class="pl-pds">"</span></span>: <span class="pl-c1">20180920</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MinOutbound<span class="pl-pds">"</span></span>: <span class="pl-c1">3</span>,
      <span class="pl-s"><span class="pl-pds">"</span>MaxConnections<span class="pl-pds">"</span></span>: <span class="pl-c1">24</span>,
      <span class="pl-s"><span class="pl-pds">"</span>FoundationAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8VYXVxKKSAxkmRrfmGpQR2Kc66XhG6m3ta<span class="pl-pds">"</span></span>
    },
    <span class="pl-s"><span class="pl-pds">"</span>SideNodeList<span class="pl-pds">"</span></span>: [
      {
        <span class="pl-s"><span class="pl-pds">"</span>Rpc<span class="pl-pds">"</span></span>: {
          <span class="pl-s"><span class="pl-pds">"</span>IpAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">20606</span>
        },
        <span class="pl-s"><span class="pl-pds">"</span>ExchangeRate<span class="pl-pds">"</span></span>: <span class="pl-c1">1.0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>GenesisBlock<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>56be936978c261b2e649d58dbfaf3f23d4a868274f5522cd2adb4308a955c4a3<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>KeystoreFile<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>keystore-did.dat<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8VYXVxKKSAxkmRrfmGpQR2Kc66XhG6m3ta<span class="pl-pds">"</span></span>
      }
    ],
    <span class="pl-s"><span class="pl-pds">"</span>MinThreshold<span class="pl-pds">"</span></span>: <span class="pl-c1">100000000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>DepositAmount<span class="pl-pds">"</span></span>: <span class="pl-c1">100000000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SyncInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">1000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SideChainMonitorScanInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">1000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>ClearTransactionInterval<span class="pl-pds">"</span></span>: <span class="pl-c1">60000</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinReceivedUsedUtxoMsgNumber<span class="pl-pds">"</span></span>: <span class="pl-c1">1</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MinOutbound<span class="pl-pds">"</span></span>: <span class="pl-c1">3</span>,
    <span class="pl-s"><span class="pl-pds">"</span>MaxConnections<span class="pl-pds">"</span></span>: <span class="pl-c1">5</span>,
    <span class="pl-s"><span class="pl-pds">"</span>SideAuxPowFee<span class="pl-pds">"</span></span>: <span class="pl-c1">50000</span>
  }
}</pre></div>
<blockquote>
<p>Here the <code>FoundationAddress</code> address must be set to this fixed base address (or change the source code)</p>
</blockquote>
<blockquote>
<p><code>GenesisBlock</code> To configure the <code>SideChain</code> creation block (block height is 0) <code>Hash</code>; the acquisition method is described later.</p>
</blockquote>
<blockquote>
<p><code>KeystoreFile</code> is to be configured as the <code>keystore.dat</code> file of the sub-account generated by the <code>Arbiter</code> node; the generation method is described later.</p>
</blockquote>
<ol start="2">
<li>Start SideChain to obtain SideChain creation block Hash</li>
</ol>
<div class="highlight highlight-source-shell"><pre>./did <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span>                                 //The SideChain default file name is side here renamed to did

curl http://localhost:20604/api/v1/block/hash/0

./ela-cli wallet -g <span class="pl-k">&lt;</span>hash<span class="pl-k">&gt;</span></pre></div>
<blockquote>
<p>Fill the creation block <code>hash</code> obtained above into the corresponding position of the <code>Arbiter</code> configuration file.</p>
</blockquote>
<blockquote>
<p>Use the <code>ela-cli wallet -g &lt;Hash&gt;</code> command to generate a cross-chain recharge address starting with <code>X</code>, which needs to be used as the <code>Output</code> address for cross-chain recharge.</p>
</blockquote>
<ol start="3">
<li>Generate <code>Aribter</code> primary and secondary accounts and launch</li>
</ol>
<div class="highlight highlight-source-shell"><pre>./ela-cli wallet -c -p elastos --name keystore.dat          // Master account, you need to fill <span class="pl-k">in</span> the address <span class="pl-k">in</span> the main chain configuration file
./ela-cli wallet -c -p elastos --name keystore-did.dat      // Sub-account, file name to be configured to the Arbiter configuration file

./ela-cli wallet --reset
./ela-cli wallet -l         //After recharging, you need to synchronize the account amount to the <span class="pl-k">local</span> database.

./arbiter -p elastos <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span></pre></div>
<blockquote>
<p>To recharge the account after generating the primary and secondary accounts 1 ELA or more, <strong>Additional</strong> be sure to use <code>ela-cli</code> to synchronize the account balance to the local database file</p>
</blockquote>
<ol start="4">
<li>Deploy another SideChain based on this main chain environment</li>
</ol>
<ul>
<li>
<p>Currently you need to edit the <code>Elastos.ELA.SideChain</code> project source to generate a different starting block <code>hash</code> when the new SideChain executable starts.</p>
</li>
<li>
<p>Change the line <code>Timestamp: uint32(time.Unix(time.Date(2018, time.June, 30, 12, 0, 0, 0, time.UTC). Unix(), 0).Unix()),</code> in file <code>Estos.ELA.SideChain/blockchain/blockchain.go</code>, you can change any time parameter.</p>
</li>
<li>
<p>Start SideChain to get the starting block hash</p>
</li>
<li>
<p>Create an account corresponding to this SideChain on all <code>arbiter</code> nodes: <code>./ela-cli wallet -c --name keystore-another.dat</code> and recharge all accounts above 1 ELA.</p>
</li>
<li>
<p>Add the following configuration to the <code>"SideNodeList"</code> configuration item in the <code>arbiter</code> configuration file:</p>
</li>
</ul>
<div class="highlight highlight-source-json"><pre>{
        <span class="pl-s"><span class="pl-pds">"</span>Rpc<span class="pl-pds">"</span></span>: {
          <span class="pl-s"><span class="pl-pds">"</span>IpAddress<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>172.31.44.155<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>HttpJsonPort<span class="pl-pds">"</span></span>: <span class="pl-c1">23616</span>
        },
        <span class="pl-s"><span class="pl-pds">"</span>ExchangeRate<span class="pl-pds">"</span></span>: <span class="pl-c1">1.0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>GenesisBlock<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>282d8f4dd626870e3e2a3042d9eb832ba2a769c9272f16f1de11d5b0bcea2a8a<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>KeystoreFile<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>keystore3.dat<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>PayToAddr<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>8VYXVxKKSAxkmRrfmGpQR2Kc66XhG6m3ta<span class="pl-pds">"</span></span>
       }</pre></div>
<blockquote>
<p><code>IpAddress</code> indicates the address of a SideChain node; <code>GenesisBlock</code> indicates the SideChain creation block <code>hash</code>; <code>PayToAddr</code> indicates the address of the SideChain transaction fee, which must be filled in at this time.</p>
</blockquote>
<ul>
<li>Then restart <code>Arbiter</code></li>
</ul>
</article>