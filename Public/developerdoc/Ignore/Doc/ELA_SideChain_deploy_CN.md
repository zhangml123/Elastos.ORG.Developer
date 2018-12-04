<article class="markdown-body entry-content" itemprop="text"><ol>
<li>准备 <code>SideChain</code> 和 <code>Arbiter</code> 二进制文件以及配置文件</li>
</ol>
<p><code>https://github.com/elastos/Elastos.ELA.SideChain</code>
<code>https://github.com/elastos/Elastos.ELA.Arbiter</code></p>
<p>都使用 <code>release_v0.0.1</code> 分支的代码编译出可执行文件，拷贝配置文件模版和 <code>ela-cli</code> 可执行文件</p>
<blockquote>
<p>测试环境最少可以使用两个节点，每个节点上都部署 <code>Arbiter</code> 和 <code>Side</code> 应用程序， 在生产应用环境建议最少使用 5个 <code>Arbiter</code> 节点和更多的 <code>Side</code> 节点</p>
</blockquote>
<p>配置文件示例：</p>
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
<p>比无侧链环境的主链多了 <code>Arbiters</code> 项目的配置，这里面的内容是所有 <code>Arbiter</code> 节点中主账户的 <code>Public Key</code></p>
</blockquote>
<blockquote>
<p>通常生产环境使用 <code>20xxx</code> 端口；测试环境使用 <code>21xxx</code> 端口；其他测试环境使用 <code>23xxx</code> 端口</p>
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
<p>这里 <code>MainChainFoundationAddress</code> <code>FoundationAddress</code> 地址都要设置为这个固定的基金会地址（或者更改源码）</p>
</blockquote>
<blockquote>
<p>侧链的所有节点应该设置为不自动挖矿</p>
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
<p>这里 <code>FoundationAddress</code> 地址都要设置为这个固定的基金会地址（或者更改源码）</p>
</blockquote>
<blockquote>
<p><code>GenesisBlock</code> 要配置 <code>SideChain</code> 创世块（区块高度为0）的 <code>Hash</code> ；获取方法后面有介绍</p>
</blockquote>
<blockquote>
<p><code>KeystoreFile</code> 要配置为 <code>Arbiter</code> 节点生成的副账户的 <code>keystore.dat</code> 文件；生成方法后面有介绍</p>
</blockquote>
<ol start="2">
<li>启动侧链获取侧链创世块Hash</li>
</ol>
<div class="highlight highlight-source-shell"><pre>./did <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span>                                 //侧链默认文件名称是 side这里重命名为 did

curl http://localhost:20604/api/v1/block/hash/0

./ela-cli wallet -g <span class="pl-k">&lt;</span>hash<span class="pl-k">&gt;</span></pre></div>
<blockquote>
<p>将上面获取到的创世块 <code>hash</code> 填入 <code>Arbiter</code> 配置文件相应位置</p>
</blockquote>
<blockquote>
<p>使用 <code>ela-cli wallet -g &lt;Hash&gt;</code>命令来生成一个以 <code>X</code> 开始的跨链充值地址，这个地址在进行跨链充值时候需要作为 <code>Output</code> 地址</p>
</blockquote>
<ol start="3">
<li>生成 <code>Aribter</code> 主副账户并启动</li>
</ol>
<div class="highlight highlight-source-shell"><pre>./ela-cli wallet -c -p elastos --name keystore.dat          //主账户，需要将地址填入主链配置文件
./ela-cli wallet -c -p elastos --name keystore-did.dat      //副账户，文件名要配置到 Arbiter 配置文件

./ela-cli wallet --reset
./ela-cli wallet -l         //充值之后需要将账户金额同步到本地数据库

./arbiter -p elastos <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span></pre></div>
<blockquote>
<p>生成主副账户之后要给账户充值 1 ELA以上，<strong>另外</strong> 一定要使用 <code>ela-cli</code> 将账户余额同步到本地数据库文件</p>
</blockquote>
<ol start="4">
<li>基于本主链环境部署另外一条侧链</li>
</ol>
<ul>
<li>
<p>目前需要编辑<code>Elastos.ELA.SideChain</code>项目源码来让新的侧链可执行文件启动时生成不同的创始块<code>hash</code></p>
</li>
<li>
<p>更改<code>Elastos.ELA.SideChain/blockchain/blockchain.go</code> 文件中 <code>Timestamp:  uint32(time.Unix(time.Date(2018, time.June, 30, 12, 0, 0, 0, time.UTC).Unix(), 0).Unix()),</code> 这一行，更改任意时间参数即可</p>
</li>
<li>
<p>启动侧链获取创始块hash</p>
</li>
<li>
<p>在所有<code>arbiter</code>节点创建对应于本侧链的账户: <code>./ela-cli wallet -c --name keystore-another.dat</code>，并为所有账户充值1 ELA以上</p>
</li>
<li>
<p>在<code>arbiter</code>配置文件中 <code>"SideNodeList"</code> 配置项中添加如下配置：</p>
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
<p><code>IpAddress</code>表示某一个侧链节点的地址；<code>GenesisBlock</code> 表示侧链创始块<code>hash</code>；<code>PayToAddr</code>表示收取侧链提币交易手续费的地址，目前必须填写这个固定地址</p>
</blockquote>
<ul>
<li>然后重启 <code>Arbiter</code></li>
</ul>
</article>