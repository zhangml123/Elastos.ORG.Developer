<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-cli客户端转账-侧链交易" class="anchor" aria-hidden="true" href="#cli客户端转账-侧链交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>cli客户端转账-侧链交易</h1>
<h2><a id="user-content-1-主链-侧链转账" class="anchor" aria-hidden="true" href="#1-主链-侧链转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 主链-侧链转账</h2>
<h3><a id="user-content-11-编译cli客户端程序" class="anchor" aria-hidden="true" href="#11-编译cli客户端程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1 编译cli客户端程序</h3>
<ol>
<li>下载代码: <a href="https://github.com/elastos/Elastos.ELA.Client">https://github.com/elastos/Elastos.ELA.Client</a></li>
<li>make 编译cli节点程序</li>
</ol>
<h3><a id="user-content-12-cli-configjson准备" class="anchor" aria-hidden="true" href="#12-cli-configjson准备"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2 cli-config.json准备</h3>
<ol>
<li>Host:连接节点RPC,用来获取utxo和发送交易</li>
<li>DepositAddress:根据地址主链给侧链充值还是侧链给主链提币</li>
<li>充值: DepositAddress 配置侧链创世区块Hash生成的X开头地址，用来主链给某个侧链充值交易</li>
<li>提币: DepositAddress 配置"0000000000000000000000000000000000"给主链提币交易</li>
</ol>
<ul>
<li>cli-config文件的DepositAddress配置成侧链创世区块Hash生成的X开头地址</li>
</ul>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>Host<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:11336<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>DepositAddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>XEmfgnrDLQmFPBJiWvsyYGV2jzLQY58J6G<span class="pl-pds">"</span></span>
}</pre></div>
<h3><a id="user-content-13-创建钱包" class="anchor" aria-hidden="true" href="#13-创建钱包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3 创建钱包</h3>
<ol>
<li>生成keystore.dat文件和wallet.db文件</li>
<li>keystore.dat:加密私钥后的文件</li>
<li>wallet.db:存储地址的UTXO</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -c</pre></div>
<div class="highlight highlight-source-shell"><pre>ADDRESS                            PUBLIC KEY
---------------------------------- ------------------------------------------------------------------
ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 02fab9d047f59ecbc49309de83e4b3ef58bc0b53fa8b9eab5ff1ab09fbb28b4b65
---------------------------------- ------------------------------------------------------------------</pre></div>
<h3><a id="user-content-14-显示账户余额" class="anchor" aria-hidden="true" href="#14-显示账户余额"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.4 显示账户余额</h3>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -l</pre></div>
<div class="highlight highlight-source-shell"><pre>INDEX                            ADDRESS BALANCE                           (LOCKED)   TYPE
----- ---------------------------------- ------------------------------------------ ------
    1 ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 2.92998500                    (2.92998500) MASTER
----- ---------------------------------- ------------------------------------------ ------</pre></div>
<h3><a id="user-content-15-单签转账" class="anchor" aria-hidden="true" href="#15-单签转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.5 单签转账</h3>
<h4><a id="user-content-151-创建交易生成" class="anchor" aria-hidden="true" href="#151-创建交易生成"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.5.1 创建交易生成</h4>
<ol>
<li>from:花费地址</li>
<li>to:到账地址</li>
<li>amount:转账金额</li>
<li>fee:交易费</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t create --from ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 --to EXYPqZpQQk4muDrdXoRNJhCpoQtFBQetYg --amount 100 --fee 0.00001

生成:to_be_signed.txn 文件</pre></div>
<h4><a id="user-content-152-签名交易" class="anchor" aria-hidden="true" href="#152-签名交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.5.2 签名交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t sign --file  to_be_signed.txn

生成:ready_to_send.txn 文件</pre></div>
<h4><a id="user-content-153-发送交易" class="anchor" aria-hidden="true" href="#153-发送交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.5.3 发送交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t send --file  ready_to_send.txn

生成txid:94d4b62bc91532dc357ee411394540f301efb723d5356e4864abcc7e42a717ec</pre></div>
<h3><a id="user-content-16-多签转账" class="anchor" aria-hidden="true" href="#16-多签转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.6 多签转账</h3>
<h4><a id="user-content-161-创建多签地址" class="anchor" aria-hidden="true" href="#161-创建多签地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.6.1 创建多签地址</h4>
<ol>
<li>创建多签地址需要三个或三个以上地址对应的公钥，默认签名数量为：M=N/2+1,M为签名数，N为公钥数</li>
<li>创建的多签地址是8开头，多签地址转账需要M个私钥进行签名</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet --addaccount 03AFFC115E36CEFBC32081D57E1373781266989A40B7B70714DC118C7A5E6FD713,02F3A141103E46164263C7F4695F273F00E253388F5C56A3D61CAC995F7D556542,024E232C5201824526246336DF9CA6BC33ADF9726464FF4BF6164EC2F90116EEF6,02EE4469ED7948630F709E90F6B2519CA57FA0C2141EE8C9BA1F811171EEE20F52</pre></div>
<div class="highlight highlight-source-shell"><pre>INDEX                            ADDRESS BALANCE                           (LOCKED)   TYPE
----- ---------------------------------- ------------------------------------------ ------
    1 ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 0                             (5.85997000) MASTER
----- ---------------------------------- ------------------------------------------ ------
    2 8YaHDqipzMEqGyqCgPSBQxVdWwLyhWJrSp 0                                      (0)  MULTI
----- ---------------------------------- ------------------------------------------ ------</pre></div>
<h4><a id="user-content-162-创建交易生成" class="anchor" aria-hidden="true" href="#162-创建交易生成"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.6.2 创建交易生成</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t create --from 8YaHDqipzMEqGyqCgPSBQxVdWwLyhWJrSp --to EXYPqZpQQk4muDrdXoRNJhCpoQtFBQetYg --amount 100 --fee 0.00001

生成:to_be_signed.txn 文件</pre></div>
<h4><a id="user-content-163-签名交易" class="anchor" aria-hidden="true" href="#163-签名交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.6.3 签名交易</h4>
<div class="highlight highlight-source-shell"><pre>签名M次

$ ./ela-cli wallet -t sign --file  to_be_signed.txn

生成: to_be_signed_1_of_3.txn 文件


$ ./ela-cli wallet -t sign --file  to_be_signed_1_of_3.txn

生成: to_be_signed_2_of_3.txn 文件


$ ./ela-cli wallet -t sign --file  to_be_signed_2_of_3.txn

生成: ready_to_send.txn  文件</pre></div>
<h4><a id="user-content-164-发送交易" class="anchor" aria-hidden="true" href="#164-发送交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.6.4 发送交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t send --file  ready_to_send.txn

生成txid: 94d4b62bc91532dc357ee411394540f301efb723d5356e4864abcc7e42a717ec</pre></div>
<h2><a id="user-content-2-侧链-主链转账" class="anchor" aria-hidden="true" href="#2-侧链-主链转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 侧链-主链转账</h2>
<h3><a id="user-content-21-编译cli客户端程序" class="anchor" aria-hidden="true" href="#21-编译cli客户端程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1 编译cli客户端程序</h3>
<ol>
<li>下载代码: <a href="https://github.com/elastos/Elastos.ELA.Client">https://github.com/elastos/Elastos.ELA.Client</a></li>
<li>make 编译cli节点程序</li>
</ol>
<h3><a id="user-content-22-cli-configjson准备" class="anchor" aria-hidden="true" href="#22-cli-configjson准备"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2 cli-config.json准备</h3>
<ol>
<li>Host:连接节点RPC,用来获取utxo和发送交易</li>
<li>DepositAddress:根据地址主链给侧链充值还是侧链给主链提币</li>
<li>充值: DepositAddress 配置侧链创世区块Hash生成的X开头地址，用来主链给某个侧链充值交易</li>
<li>提币: DepositAddress 配置"0000000000000000000000000000000000"给主链提币交易</li>
</ol>
<ul>
<li>cli-config文件的 DepositAddress 配置"0000000000000000000000000000000000"给主链提币交易</li>
</ul>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>Host<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:13336<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>DepositAddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>0000000000000000000000000000000000<span class="pl-pds">"</span></span>
}</pre></div>
<h3><a id="user-content-23-创建钱包" class="anchor" aria-hidden="true" href="#23-创建钱包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.3 创建钱包</h3>
<ol>
<li>生成keystore.dat文件和wallet.db文件</li>
<li>keystore.dat:加密私钥后的文件</li>
<li>wallet.db:存储地址的UTXO</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -c</pre></div>
<div class="highlight highlight-source-shell"><pre>ADDRESS                            PUBLIC KEY
---------------------------------- ------------------------------------------------------------------
ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 02fab9d047f59ecbc49309de83e4b3ef58bc0b53fa8b9eab5ff1ab09fbb28b4b65
---------------------------------- ------------------------------------------------------------------</pre></div>
<h3><a id="user-content-24-显示账户余额" class="anchor" aria-hidden="true" href="#24-显示账户余额"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.4 显示账户余额</h3>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -l</pre></div>
<div class="highlight highlight-source-shell"><pre>INDEX                            ADDRESS BALANCE                           (LOCKED)   TYPE
----- ---------------------------------- ------------------------------------------ ------
    1 ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 2.92998500                    (2.92998500) MASTER
----- ---------------------------------- ------------------------------------------ ------</pre></div>
<h3><a id="user-content-25-单签转账" class="anchor" aria-hidden="true" href="#25-单签转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.5 单签转账</h3>
<h4><a id="user-content-251-创建交易生成" class="anchor" aria-hidden="true" href="#251-创建交易生成"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.5.1 创建交易生成</h4>
<ol>
<li>from:花费地址</li>
<li>to:到账地址</li>
<li>amount:转账金额</li>
<li>fee:交易费</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t create --from ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 --to EXYPqZpQQk4muDrdXoRNJhCpoQtFBQetYg --amount 100 --fee 0.00001

生成:to_be_signed.txn 文件</pre></div>
<h4><a id="user-content-252-签名交易" class="anchor" aria-hidden="true" href="#252-签名交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.5.2 签名交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t sign --file  to_be_signed.txn

生成:ready_to_send.txn 文件</pre></div>
<h4><a id="user-content-253-发送交易" class="anchor" aria-hidden="true" href="#253-发送交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.5.3 发送交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t send --file  ready_to_send.txn

生成txid:94d4b62bc91532dc357ee411394540f301efb723d5356e4864abcc7e42a717ec</pre></div>
<h3><a id="user-content-26-多签转账" class="anchor" aria-hidden="true" href="#26-多签转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.6 多签转账</h3>
<h4><a id="user-content-261-创建多签地址" class="anchor" aria-hidden="true" href="#261-创建多签地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.6.1 创建多签地址</h4>
<ol>
<li>创建多签地址需要三个或三个以上地址对应的公钥，默认签名数量为：M=N/2+1,M为签名数，N为公钥数</li>
<li>创建的多签地址是8开头，多签地址转账需要M个私钥进行签名</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet --addaccount 03AFFC115E36CEFBC32081D57E1373781266989A40B7B70714DC118C7A5E6FD713,02F3A141103E46164263C7F4695F273F00E253388F5C56A3D61CAC995F7D556542,024E232C5201824526246336DF9CA6BC33ADF9726464FF4BF6164EC2F90116EEF6,02EE4469ED7948630F709E90F6B2519CA57FA0C2141EE8C9BA1F811171EEE20F52</pre></div>
<div class="highlight highlight-source-shell"><pre>INDEX                            ADDRESS BALANCE                           (LOCKED)   TYPE
----- ---------------------------------- ------------------------------------------ ------
    1 ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 0                             (5.85997000) MASTER
----- ---------------------------------- ------------------------------------------ ------
    2 8YaHDqipzMEqGyqCgPSBQxVdWwLyhWJrSp 0                                      (0)  MULTI
----- ---------------------------------- ------------------------------------------ ------</pre></div>
<h4><a id="user-content-262-创建交易生成" class="anchor" aria-hidden="true" href="#262-创建交易生成"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.6.2 创建交易生成</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t create --from 8YaHDqipzMEqGyqCgPSBQxVdWwLyhWJrSp --to EXYPqZpQQk4muDrdXoRNJhCpoQtFBQetYg --amount 100 --fee 0.00001

生成:to_be_signed.txn 文件</pre></div>
<h4><a id="user-content-263-签名交易" class="anchor" aria-hidden="true" href="#263-签名交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.6.3 签名交易</h4>
<div class="highlight highlight-source-shell"><pre>签名M次

$ ./ela-cli wallet -t sign --file  to_be_signed.txn

生成: to_be_signed_1_of_3.txn 文件


$ ./ela-cli wallet -t sign --file  to_be_signed_1_of_3.txn

生成: to_be_signed_2_of_3.txn 文件


$ ./ela-cli wallet -t sign --file  to_be_signed_2_of_3.txn

生成: ready_to_send.txn  文件</pre></div>
<h4><a id="user-content-264-发送交易" class="anchor" aria-hidden="true" href="#264-发送交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.6.4 发送交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t send --file  ready_to_send.txn

生成txid: 94d4b62bc91532dc357ee411394540f301efb723d5356e4864abcc7e42a717ec</pre></div>
<h2><a id="user-content-3-侧链-侧链转账" class="anchor" aria-hidden="true" href="#3-侧链-侧链转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3 侧链-侧链转账</h2>
<h3><a id="user-content-31-编译cli客户端程序" class="anchor" aria-hidden="true" href="#31-编译cli客户端程序"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1 编译cli客户端程序</h3>
<ol>
<li>下载代码: <a href="https://github.com/elastos/Elastos.ELA.Client">https://github.com/elastos/Elastos.ELA.Client</a></li>
<li>make 编译cli节点程序</li>
</ol>
<h3><a id="user-content-32-cli-configjson准备" class="anchor" aria-hidden="true" href="#32-cli-configjson准备"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.2 cli-config.json准备</h3>
<ol>
<li>Host:连接节点RPC,用来获取utxo和发送交易</li>
<li>DepositAddress:根据地址主链给侧链充值还是侧链给主链提币</li>
<li>充值: DepositAddress 配置侧链创世区块Hash生成的X开头地址，用来主链给某个侧链充值交易</li>
<li>提币: DepositAddress 配置"0000000000000000000000000000000000"给主链提币交易</li>
</ol>
<ul>
<li>侧链转账需要主链给侧链充值交易，参考【主链-侧链转账】</li>
</ul>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>Host<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:11336<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>DepositAddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>XEmfgnrDLQmFPBJiWvsyYGV2jzLQY58J6G<span class="pl-pds">"</span></span>
}</pre></div>
<h3><a id="user-content-33-创建钱包" class="anchor" aria-hidden="true" href="#33-创建钱包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.3 创建钱包</h3>
<ol>
<li>生成keystore.dat文件和wallet.db文件</li>
<li>keystore.dat:加密私钥后的文件</li>
<li>wallet.db:存储地址的UTXO</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -c</pre></div>
<div class="highlight highlight-source-shell"><pre>ADDRESS                            PUBLIC KEY
---------------------------------- ------------------------------------------------------------------
ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 02fab9d047f59ecbc49309de83e4b3ef58bc0b53fa8b9eab5ff1ab09fbb28b4b65
---------------------------------- ------------------------------------------------------------------
</pre></div>
<h3><a id="user-content-34-显示账户余额" class="anchor" aria-hidden="true" href="#34-显示账户余额"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.4 显示账户余额</h3>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -l</pre></div>
<div class="highlight highlight-source-shell"><pre>INDEX                            ADDRESS BALANCE                           (LOCKED)   TYPE
----- ---------------------------------- ------------------------------------------ ------
    1 ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 2.92998500                    (2.92998500) MASTER
----- ---------------------------------- ------------------------------------------ ------</pre></div>
<h3><a id="user-content-35-单签转账" class="anchor" aria-hidden="true" href="#35-单签转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.5 单签转账</h3>
<h4><a id="user-content-351-创建交易生成" class="anchor" aria-hidden="true" href="#351-创建交易生成"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.5.1 创建交易生成</h4>
<ol>
<li>from:花费地址</li>
<li>to:到账地址</li>
<li>amount:转账金额</li>
<li>fee:交易费</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t create --from ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 --to EXYPqZpQQk4muDrdXoRNJhCpoQtFBQetYg --amount 100 --fee 0.00001

生成:to_be_signed.txn 文件</pre></div>
<h4><a id="user-content-352-签名交易" class="anchor" aria-hidden="true" href="#352-签名交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.5.2 签名交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t sign --file  to_be_signed.txn

生成:ready_to_send.txn 文件</pre></div>
<h4><a id="user-content-353-发送交易" class="anchor" aria-hidden="true" href="#353-发送交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.5.3 发送交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t send --file  ready_to_send.txn

生成txid:94d4b62bc91532dc357ee411394540f301efb723d5356e4864abcc7e42a717ec</pre></div>
<h3><a id="user-content-36-多签转账" class="anchor" aria-hidden="true" href="#36-多签转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.6 多签转账</h3>
<h4><a id="user-content-361-创建多签地址" class="anchor" aria-hidden="true" href="#361-创建多签地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.6.1 创建多签地址</h4>
<ol>
<li>创建多签地址需要三个或三个以上地址对应的公钥，默认签名数量为：M=N/2+1,M为签名数，N为公钥数</li>
<li>创建的多签地址是8开头，多签地址转账需要M个私钥进行签名</li>
</ol>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet --addaccount 03AFFC115E36CEFBC32081D57E1373781266989A40B7B70714DC118C7A5E6FD713,02F3A141103E46164263C7F4695F273F00E253388F5C56A3D61CAC995F7D556542,024E232C5201824526246336DF9CA6BC33ADF9726464FF4BF6164EC2F90116EEF6,02EE4469ED7948630F709E90F6B2519CA57FA0C2141EE8C9BA1F811171EEE20F52</pre></div>
<div class="highlight highlight-source-shell"><pre>----- ---------------------------------- ------------------------------------------ ------
    1 ENMnJUCiwLnZoV51buMGuiLbwSTBRndh17 0                             (5.85997000) MASTER
----- ---------------------------------- ------------------------------------------ ------
    2 8YaHDqipzMEqGyqCgPSBQxVdWwLyhWJrSp 0                                      (0)  MULTI
----- ---------------------------------- ------------------------------------------ ------</pre></div>
<h4><a id="user-content-362-创建交易生成" class="anchor" aria-hidden="true" href="#362-创建交易生成"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.6.2 创建交易生成</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t create --from 8YaHDqipzMEqGyqCgPSBQxVdWwLyhWJrSp --to EXYPqZpQQk4muDrdXoRNJhCpoQtFBQetYg --amount 100 --fee 0.00001

生成:to_be_signed.txn 文件</pre></div>
<h4><a id="user-content-363-签名交易" class="anchor" aria-hidden="true" href="#363-签名交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.6.3 签名交易</h4>
<div class="highlight highlight-source-shell"><pre>签名M次

$ ./ela-cli wallet -t sign --file  to_be_signed.txn

生成: to_be_signed_1_of_3.txn 文件


$ ./ela-cli wallet -t sign --file  to_be_signed_1_of_3.txn

生成: to_be_signed_2_of_3.txn 文件


$ ./ela-cli wallet -t sign --file  to_be_signed_2_of_3.txn

生成: ready_to_send.txn  文件</pre></div>
<h4><a id="user-content-364-发送交易" class="anchor" aria-hidden="true" href="#364-发送交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.6.4 发送交易</h4>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet -t send --file  ready_to_send.txn

生成txid: 94d4b62bc91532dc357ee411394540f301efb723d5356e4864abcc7e42a717ec</pre></div>
<h2><a id="user-content-4-更多说明" class="anchor" aria-hidden="true" href="#4-更多说明"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4. 更多说明</h2>
<div class="highlight highlight-source-shell"><pre>$ ./ela-cli wallet
NAME:
   ela-cli wallet - wallet operations

USAGE:
   ela-cli wallet [command options] [args]

DESCRIPTION:
   With ela-cli wallet, you can create an account, check account balance or build, sign and send transactions.

OPTIONS:
   --password value, -p value     arguments to pass the password value
   --name value, -n value         to specify the created keystore file name or the keystore file path to open (default: <span class="pl-s"><span class="pl-pds">"</span>keystore.dat<span class="pl-pds">"</span></span>)
   --import value                 create your wallet using an existed private key
   --export                       <span class="pl-k">export</span> your private key from this wallet
   --create, -c                   create wallet, this will generate a keystore file within you account information
   --account, -a                  show account address, public key and program <span class="pl-c1">hash</span>
   --changepassword               change the password to access this wallet, must <span class="pl-k">do</span> not forget it
   --reset                        clear the UTXOs stored <span class="pl-k">in</span> the <span class="pl-k">local</span> database
   --addaccount value             add a standard account with a public key, or add a multi-sign account with multiple public keys
                                  use -m to specify how many signatures are needed to create a valid transaction
                                  by default M is public keys / 2 + 1, witch means greater than half
   -m value                       the M value to specify how many signatures are needed to create a valid transaction (default: 0)
   --delaccount value             delete an account from database using it<span class="pl-s"><span class="pl-pds">'</span>s address</span>
<span class="pl-s">   --list, -l                     list accounts information, including address, public key, balance and account type.</span>
<span class="pl-s">   --transaction value, -t value  use [create, sign, send], to create, sign or send a transaction</span>
<span class="pl-s">                                  create:</span>
<span class="pl-s">                                    use --to --amount --fee [--lock], or --file --fee [--lock]</span>
<span class="pl-s">                                    to create a standard transaction, or multi output transaction</span>
<span class="pl-s">                                  sign, send:</span>
<span class="pl-s">                                    use --file or --hex to specify the transaction file path or content</span>
<span class="pl-s">   --from value                   the spend address of the transaction</span>
<span class="pl-s">   --to value                     the receive address of the transaction</span>
<span class="pl-s">   --amount value                 the transfer amount of the transaction</span>
<span class="pl-s">   --fee value                    the transfer fee of the transaction</span>
<span class="pl-s">   --lock value                   the lock time to specify when the received asset can be spent</span>
<span class="pl-s">   --hex value                    the transaction content in hex string format to be sign or send</span>
<span class="pl-s">   --file value, -f value         the file path to specify a CSV file path with [address,amount] format as multi output content,</span>
<span class="pl-s">                                  or the transaction file path with the hex string content to be sign or send</span></pre></div>
</article>