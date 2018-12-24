<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-java离线签名工具" class="anchor" aria-hidden="true" href="#java离线签名工具"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>java离线签名工具</h1>
<h2><a id="user-content-1-获得jar包二种方式" class="anchor" aria-hidden="true" href="#1-获得jar包二种方式"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1. 获得jar包二种方式</h2>
<h3><a id="user-content-11-下载最新版本的jar包" class="anchor" aria-hidden="true" href="#11-下载最新版本的jar包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1 下载最新版本的jar包</h3>
<pre><code>网址：https://github.com/elastos/Elastos.ELA.Utilities.Java/releases

下载：Elastos.ELA.Utilities.Java_v0.1.*.jar
</code></pre>
<h3><a id="user-content-12-下载源代码编译jar包" class="anchor" aria-hidden="true" href="#12-下载源代码编译jar包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2 下载源代码，编译jar包</h3>
<pre><code>网址：https://github.com/elastos/Elastos.ELA.Utilities.Java
</code></pre>
<ul>
<li>
<p>编译jar包</p>
<pre><code>File -&gt; Project Structure -&gt; Artifacts -&gt; + -&gt; JAR -&gt; From modules with
1、-&gt; Main Class
2、-&gt; extract to the target JAR
3、-&gt; META-INF PATH （C:\DNA\src\ela_tool\src\main\resources）
4、ok -&gt;  Include in project build -&gt; Apply -&gt;ok
</code></pre>
</li>
<li>
<p>删除签名jar包依赖，必须使用</p>
<pre><code>命令： zip -d Elastos.ELA.Utilities.Java 'META-INF/*.SF' 'META-INF/*.RSA' 'META-INF/*SF'
</code></pre>
</li>
</ul>
<h3><a id="user-content-13-启动jar包" class="anchor" aria-hidden="true" href="#13-启动jar包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3 启动jar包</h3>
<pre><code>建议java版本：1.8

启动命令：java -cp Elastos.ELA.Utilities.v0.1.*.Java  org.elastos.elaweb.HttpServer

web服务默认端口：8989，可修改
</code></pre>
<h2><a id="user-content-2-主链-主链转账" class="anchor" aria-hidden="true" href="#2-主链-主链转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2. 主链-主链转账</h2>
<h3><a id="user-content-21-单签创建交易二种方式自动获取utxo和手动获取utxo" class="anchor" aria-hidden="true" href="#21-单签创建交易二种方式自动获取utxo和手动获取utxo"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1 单签创建交易二种方式（自动获取utxo和手动获取utxo）</h3>
<h4><a id="user-content-211-自动获取utxo也称非离线签名" class="anchor" aria-hidden="true" href="#211-自动获取utxo也称非离线签名"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1.1 自动获取utxo,也称非离线签名</h4>
<ul>
<li>
<p>特点</p>
<ul>
<li>构造交易方便，不用计算utxo</li>
<li>不用计算找零地址金额，拿到从小到大排序的utxo，根据输出(outputs)金额，自动计算找零金额</li>
</ul>
</li>
<li>
<p>参数说明</p>
<ul>
<li>java程序金额为最小单位0.00000001ela(即:amount="00.00000001"ELA)，String类型</li>
<li>java-config.json 文件需要放在java程序同级目录，目的是连接节点获取utxo</li>
<li>Host：节点程序所在的服务器ip和rpc端口</li>
<li>Fee：双方规定的交易费，一笔交易的单个输出或多个输出交易费是一样的</li>
<li>Confirmation:区块确认交易的次数，即区块数;建议16个确认数</li>
<li>PrivateKey：输入(inputs)转账需要地址的私钥,java程序内部获取utxo</li>
<li>Outputs：充值地址及金额</li>
<li>ChangeAddress：转账后找零的地址，找零金额java程序自动处理</li>
<li>输入金额小于输出金额，提示金额不足</li>
</ul>
</li>
<li>
<p>接口名：genRawTransactionByPrivateKey</p>
<ul>
<li>
<p>java-config.json</p>
<div class="highlight highlight-source-json"><pre>{
<span class="pl-s"><span class="pl-pds">"</span>Host<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>127.0.0.1:11336<span class="pl-pds">"</span></span>,
<span class="pl-s"><span class="pl-pds">"</span>Fee<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>0.0005<span class="pl-pds">"</span></span>,
<span class="pl-s"><span class="pl-pds">"</span>Confirmation<span class="pl-pds">"</span></span>:<span class="pl-c1">16</span>
}</pre></div>
</li>
<li>
<p>Request</p>
<pre><code>{
    "method":"genRawTransactionByPrivateKey",
    "id":0,
    "params":[
        {
            "Transactions":[
                {
                    "PrivateKeys":[
                        {
                            "privateKey":"5FA927E5664E563F019F50DCD4D7E2D9404F2D5D49E31F9482912E23D6D7B9EB"
                        },
                        {
                            "privateKey":"4C573939323F11BCDB57B61CCE095D4B1E55E986F9944F88072141F3DFA883A3"
                        }
                    ],
                    "Outputs":[
                        {
                            "address":"Eazj14ifau5eH1SP5F8MJRuiSsPMiGbJV1",
                            "amount":"0.1"
                        },
                        {
                            "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
                            "amount":"10.2"
                        }
                    ],
                    "ChangeAddress":"Edi5WWMFBsEL2qgggrFhnJe1HTjDnw447H"
                }
            ]
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action": "genRawTransaction",
    "Desc": "SUCCESS",
    "Result": {
        "rawTx": "0200010013323235E5F9463B37EDE39688**********8E7456FDE2554E77E1D9A1AB3360562F1D6FF4BAC",
        "txHash": "A32203B48C740552AF0CDB1E77ECCEBE147C5CDA51B2BD80BA9C59662CDCD322"
    }
}
</code></pre>
</li>
</ul>
</li>
</ul>
<h3><a id="user-content-212-手动获取utxo也称离线签名" class="anchor" aria-hidden="true" href="#212-手动获取utxo也称离线签名"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1.2 手动获取utxo,也称离线签名</h3>
<ul>
<li>
<p>特点</p>
<ul>
<li>离线签名，保障账户安全</li>
</ul>
</li>
<li>
<p>参数说明</p>
<ul>
<li>java程序金额为最小单位0.00000001ela(即:amount="00.00000001"ELA)，String类型</li>
<li>需要计算找零地址余额，找零余额=inputs-outputs-fee，将找零地址和余额写在outputs最后一行</li>
<li>txid：地址的可用余额所在的交易,下面接口返回的信息txid写入这里</li>
<li>index：可用余额所在交易中的序号, 下面接口返回的信息vout为index</li>
<li>address：outputs的address为转出地址</li>
<li>privateKey：地址对应的私钥</li>
<li>amount：转出的金额,long类型</li>
</ul>
</li>
<li>
<p>listunspent (通过地址获取utxo接口)</p>
<ul>
<li>
<p>此接口是ela节点rpc接口</p>
<pre><code>获取txid、index：
request:

{
    "method":"listunspent",
    "params":{"addresses": ["8ZNizBf4KhhPjeJRGpox6rPcHE5Np6tFx3", "EeEkSiRMZqg5rd9a2yPaWnvdPcikFtsrjE"]}
}

response:

{
    "error": null,
    "id": null,
    "jsonrpc": "2.0",
    "result": [
        {
            "assetid": "a3d0eaa466df74983b5d7c543de6904f4c9418ead5ffd6d25814234a96db37b0",
            "txid": "61c22a83bb96d958f473148fa64f3b2be02653c66ede506e83b82e522200d446",
            "vout": 0,
            "address": "8ZNizBf4KhhPjeJRGpox6rPcHE5Np6tFx3",
            "amount": "33000000",
            "confirmations": 1102
        },
        {
            "assetid": "a3d0eaa466df74983b5d7c543de6904f4c9418ead5ffd6d25814234a96db37b0",
            "txid": "a91b63ba6ffdb13379451895c51abd25c54678bc89268db6e6c3dcbb7bb07062",
            "vout": 0,
            "address": "8ZNizBf4KhhPjeJRGpox6rPcHE5Np6tFx3",
            "amount": "0.01255707",
            "confirmations": 846
        }
    ]
}
</code></pre>
</li>
</ul>
</li>
<li>
<p>接口名：genRawTransaction</p>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"genRawTransaction",
    "id":0,
    "params":[
        {
            "Transactions":[
                {
                    "UTXOInputs":[
                        {
                            "txid":"61c22a83bb96d958f473148fa64f3b2be02653c66ede506e83b82e522200d446",
                            "index":0,
                            "privateKey":"5FA927E5664E563F019F50DCD4D7E2D9404F2D5D49E31F9482912E23D6D7B9EB"
                        },
                        {
                            "txid":"a91b63ba6ffdb13379451895c51abd25c54678bc89268db6e6c3dcbb7bb07062",
                            "index":0,
                            "privateKey":"A65E9FB6735C5FD33F839036B15D2DA373E15AED38054B69386E322C6BE52994"
                        }
                    ],
                    "Outputs":[
                        {
                            "address":"ERz34iKa4nGaGYVtVpRWQZnbavJEe6PRDt",
                            "amount":"0.1"
                        },
                        {
                            "address":"EKjeZEmLSXyyJ42xxjJP4QsKJYWwEXabuC",
                            "amount":"10.2"
                        }
                    ]
                }
            ]
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action":"genRawTransaction",
    "Desc":"SUCCESS",
    "Result":{
        "rawTx":"020001001234333238333AC482F4F********09131B13B648EEF428885A5F8AFB44EE38FAC",
        "txHash":"B14A65207B801E991292FED3A4CAB06E29D54A792115BC3D45B7F8235C1A0CF6"
    }
}
</code></pre>
</li>
</ul>
</li>
</ul>
<h2><a id="user-content-3-主链-侧链转账" class="anchor" aria-hidden="true" href="#3-主链-侧链转账"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3. 主链-侧链转账</h2>
<h3><a id="user-content-31-单签创建交易二种方式自动获取utxo和手动获取utxo" class="anchor" aria-hidden="true" href="#31-单签创建交易二种方式自动获取utxo和手动获取utxo"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1 单签创建交易二种方式（自动获取utxo和手动获取utxo）</h3>
<h4><a id="user-content-311-自动获取utxo也称非离线签名" class="anchor" aria-hidden="true" href="#311-自动获取utxo也称非离线签名"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1.1 自动获取utxo,也称非离线签名</h4>
<ul>
<li>
<p>特点</p>
<ul>
<li>构造交易方便，不用计算utxo</li>
<li>不用计算找零地址金额，拿到从小到大排序的utxo，根据输出(outputs)金额，自动计算找零金额</li>
</ul>
</li>
<li>
<p>参数说明</p>
<ul>
<li>java程序金额为最小单位0.00000001ela(即:amount="00.00000001"ELA)，String类型</li>
<li>java-config.json 文件需要放在java程序同级目录，目的是连接节点获取utxo</li>
<li>Host：节点程序所在的服务器ip和rpc端口</li>
<li>Fee：双方规定的交易费，一笔交易的单个输出或多个输出交易费是一样的</li>
<li>Confirmation:区块确认交易的次数，即区块数;建议16个确认数</li>
<li>PrivateKey：输入(inputs)转账需要地址的私钥,java程序内部获取utxo</li>
<li>Outputs：address是侧链创世区块hash生成的x地址，此转账为充值（主链-侧链转账）
<ul>
<li>如果address是"0000000000000000000000000000000000",此转账为提币（侧链-主链转账）</li>
<li>用到此接口提币就要注意java-config host的端口为侧链rpc端口</li>
<li>amount：转出的金额,long类型</li>
</ul>
</li>
<li>CrossChainAsset:address是侧链地址，amount &lt;= outputs的amount - fee</li>
<li>ChangeAddress：转账后找零的地址，找零金额java程序自动处理</li>
<li>输入金额小于输出金额，提示金额不足</li>
</ul>
</li>
<li>
<p>接口名：genCrossChainRawTransactionByPrivateKey</p>
<ul>
<li>
<p>java-config.json</p>
<pre><code>{
"Host": "127.0.0.1:11336",
"Fee":"0.0005",
"Confirmation":16
}
</code></pre>
</li>
<li>
<p>Request</p>
<pre><code>{
    "method":"genCrossChainRawTransactionByPrivateKey",
    "id":0,
    "params":[
        {
            "Transactions":[
                {
                    "PrivateKeys":[
                        {
                            "privateKey":"5FA927E5664E563F019F50DCD4D7E2D9404F2D5D49E31F9482912E23D6D7B9EB"
                        }
                    ],
                    "Outputs":[
                        {
                            "address":"XLC69K4932zZf1SRwJCDbv5HGk7DbDYZ9H",
                            "amount":"10.2"
                        }
                    ],
                    "CrossChainAsset":[
                        {
                            "address":"ESH5SrT7GZ4uxTH6aQF3ne7X8AUzWdREzz",
                            "amount":"10.2"
                        }
                    ],

                    "ChangeAddress":"Edi5WWMFBsEL2qgggrFhnJe1HTjDnw447H"
                }
            ]
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Desc": "SUCCESS",
    "Action": "genCrossChainRawTransactionByPrivateKey",
    "Result": {
        "rawTx": "02000100132D39353032333632323639300001B037DB964A033990D77CBFD9E9BE08651456BB7C2A0854AE",
        "txHash": "0605EE84FA7C28B353806E00CC40477487586A9A03AAAD7154DBE0AD4197E15F"
    }
}
</code></pre>
</li>
</ul>
</li>
</ul>
<h3><a id="user-content-312-手动获取utxo也称离线签名" class="anchor" aria-hidden="true" href="#312-手动获取utxo也称离线签名"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1.2 手动获取utxo,也称离线签名</h3>
<ul>
<li>
<p>特点：</p>
<ul>
<li>离线签名，保障账户安全</li>
</ul>
</li>
<li>
<p>参数说明：</p>
<ul>
<li>java程序金额为最小单位0.00000001ela(即:amount="00.00000001"ELA)，String类型</li>
<li>需要计算找零地址余额，找零余额=inputs-outputs-fee，将找零地址和余额写在outputs最后一行</li>
<li>txid：地址的可用余额所在的交易,下面接口返回的信息txid写入这里</li>
<li>index：可用余额所在交易中的序号, 下面接口返回的信息vout为index</li>
<li>Outputs：address是侧链创世区块hash生成的x地址，此转账为充值（主链-侧链转账）
<ul>
<li>如果address是"0000000000000000000000000000000000",此转账为提币（侧链-主链转账）</li>
<li>用到此接口提币就要注意java-config host的端口为侧链rpc端口</li>
<li>amount：转出的金额,long类型</li>
</ul>
</li>
<li>privateKey：inputs地址对应的私钥，相同地址只写一个私钥即可</li>
<li>CrossChainAsset:address是侧链地址，amount &lt;= outputs的amount - fee</li>
</ul>
</li>
<li>
<p>接口名：genRawTransaction</p>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"genCrossChainRawTransaction",
    "id":0,
    "params":[
        {
            "Transactions":[
                {
                    "UTXOInputs":[
                        {
                            "txid":"3a6b2653dc2dcc0f065e7d955bbe0e3bc71a2d7f44900fc1cb75402af89fd978",
                            "index":1,
                            "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB"
                        }
                    ],
                    "Outputs":[
                        {
                            "address":"XKUh4GLhFJiqAMTF6HyWQrV9pK9HcGUdfJ",
                            "amount":"10.2"
                        },
                        {
                            "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
                            "amount":"0.1"
                        }
                    ],
                    "PrivateKeySign":[
                        {
                            "privateKey":"4849048B13242F83107CAD9F8C0DF4A3698A0DFB37055F11B91A2E5F044557C2"
                        }
                    ],
                    "CrossChainAsset":[
                        {
                            "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
                            "amount":"10.1"
                        }
                    ]
                }
            ]
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Desc": "SUCCESS",
    "Action": "genCrossChainRawTransaction",
    "Result": {
        "rawTx": "02000100132D39353032333632323639300001B037DB964A033990D77CBFD9E9BE08651456BB7C2A0854AE",
        "txHash": "0605EE84FA7C28B353806E00CC40477487586A9A03AAAD7154DBE0AD4197E15F"
    }
}
</code></pre>
</li>
</ul>
</li>
</ul>
<h2><a id="user-content-4-发送交易" class="anchor" aria-hidden="true" href="#4-发送交易"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4. 发送交易</h2>
<ul>
<li>
<p>发送交易是节点rpc接口，java不提供发送交易接口</p>
</li>
<li>
<p>sendrawtransaction</p>
<ul>
<li>
<p>Request</p>
<pre><code>post请求： http://127.0.0.1:20336 （20336是节点默认端口）

{
"method":"sendrawtransaction",
"params": ["xxxxxx"]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
"result":"764691821f937fd566bcf533611a5e5b193008ea1ba1396f67b7b0da22717c02",
"id": null,
"jsonrpc": "2.0",
"error": null
}
</code></pre>
</li>
</ul>
</li>
</ul>
<h2><a id="user-content-5-web-rpc-接口" class="anchor" aria-hidden="true" href="#5-web-rpc-接口"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5. web rpc 接口</h2>
<h3><a id="user-content-51-decoderawtransaction反解析rawtransaction" class="anchor" aria-hidden="true" href="#51-decoderawtransaction反解析rawtransaction"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.1 decodeRawTransaction（反解析rawTransaction）</h3>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"decodeRawTransaction",
    "id":0,
    "params":[
        {
            "RawTransaction":"02000100142D37323733373**********54E77E1D9A1AB3360562F1D6FF4BAC"
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action":"decodeRawTransaction",
    "Desc":"SUCCESS",
    "Result":{
        "UTXOInputs":[
            {
                "Txid":"22BADE15481F1AF8240993207E1DF61144A7776E6087994D240917A887F72052"
            }
        ],
        "Outputs":[
            {
                "Address":"Eazj14ifau5eH1SP5F8MJRuiSsPMiGbJV1",
                "Value":2999000000000000
            }
        ]
    }
}
</code></pre>
</li>
</ul>
<h3><a id="user-content-52-genprivatekey生成私钥" class="anchor" aria-hidden="true" href="#52-genprivatekey生成私钥"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.2 genPrivateKey（生成私钥）</h3>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"genPrivateKey",
    "id":0,
    "params":[

    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action":"genPrivateKey",
    "Desc":"SUCCESS",
    "Result":"94F2D1492963E991EA2878C55754293A627277108C2205C7F0EBC592896726D8"
}
</code></pre>
</li>
</ul>
<h3><a id="user-content-53-genpublickey生成公钥" class="anchor" aria-hidden="true" href="#53-genpublickey生成公钥"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.3 genPublicKey（生成公钥）</h3>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"genPublicKey",
    "id":0,
    "params":[
        {
            "PrivateKey":"4EA80EDBFC783A19FAC1072D15893AC7A20B4EDE1402FD57DE76D02EA61E28E4"
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action":"genPublicKey",
    "Desc":"SUCCESS",
    "Result":"03B462F4DB3F67A6A71E51BF3034A183022F092E8E6ED0C91F139E4871F5BA0B57"
}
</code></pre>
</li>
</ul>
<h3><a id="user-content-54-genaddress生成地址" class="anchor" aria-hidden="true" href="#54-genaddress生成地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.4 genAddress（生成地址）</h3>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"genAddress",
    "id":0,
    "params":[
        {
            "PrivateKey":"4EA80EDBFC783A19FAC1072D15893AC7A20B4EDE1402FD57DE76D02EA61E28E4"
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action":"genAddress",
    "Desc":"SUCCESS",
    "Result":"EPUhMEA8RVxqMEvxGDtC95Cwmm1gjtcsB3"
}
</code></pre>
</li>
</ul>
<h3><a id="user-content-55-gen_priv_pub_addr生成私钥公钥地址" class="anchor" aria-hidden="true" href="#55-gen_priv_pub_addr生成私钥公钥地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.5 gen_priv_pub_addr（生成私钥、公钥、地址）</h3>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"gen_priv_pub_addr",
    "id":0,
    "params":[

    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action":"genAddress",
    "Desc":"SUCCESS",
    "Result":{
        "PrivateKey":"579750E68061727B023FD0AB8A5ABFEE9FC00491220BA2C82402463E5AF3E84A",
        "PublicKey":"0278421F86F850D73A458680EEA36B49679CD09BE3F0D56E969AF8F0761E94BC46",
        "Address":"EZ4u7ewRX3LhUCJYZGENpRVPbeCWU2AdXQ"
    }
}
</code></pre>
</li>
</ul>
<h3><a id="user-content-56-checkaddress-检查地址" class="anchor" aria-hidden="true" href="#56-checkaddress-检查地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.6 checkAddress (检查地址)</h3>
<ul>
<li>
<p>Request</p>
<pre><code>检查地址支持map格式和数组格式

{
    "method":"checkAddress",
    "id":0,
    "params":[
        {
            "Addresses":[
                {
                    "address":"EXgtxGg4ep6vM6uCqWuxkP9KG4AGFyufZz"
                },
                {
                    "address":"1C1mCxRukix1KfegAY5zQQJV7samAciZpv"
                },
                {
                    "address":"8Frmgg4KMudMEPc5Wow5tYXH8XBgctT8QT"
                },
                {
                    "address":"XQd1DCi6H62NQdWZQhJCRnrPn7sF9CTjaU"
                }
                ]
        }
    ]
}

or

{
    "method":"checkAddress",
    "id":0,
    "params":[
        {
            "Addresses":["EXgtxGg4ep6vM6uCqWuxkP9KG4AGFyufZz","1C1mCxRukix1KfegAY5zQQJV7samAciZpv","8Frmgg4KMudMEPc5Wow5tYXH8XBgctT8QT","XQd1DCi6H62NQdWZQhJCRnrPn7sF9CTjaU"]
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Action": "checkAddress",
    "Desc": "SUCCESS",
    "Result": {
        "EXgtxGg4ep6vM6uCqWuxkP9KG4AGFyufZz": true,
        "1C1mCxRukix1KfegAY5zQQJV7samAciZpv": false,
        "8Frmgg4KMudMEPc5Wow5tYXH8XBgctT8QT": true,
        "XQd1DCi6H62NQdWZQhJCRnrPn7sF9CTjaU": false
    }
}
</code></pre>
</li>
</ul>
<h3><a id="user-content-57-gengenesisaddress创世区块hash生成x地址" class="anchor" aria-hidden="true" href="#57-gengenesisaddress创世区块hash生成x地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.7 genGenesisAddress（创世区块hash生成x地址）</h3>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"genGenesisAddress",
    "id":0,
    "params":[
        {
            "BlockHash":"56be936978c261b2e649d58dbfaf3f23d4a868274f5522cd2adb4308a955c4a3"
        }
    ]
}
</code></pre>
</li>
<li>
<p>Response</p>
<pre><code>{
    "Desc": "SUCCESS",
    "Action": "genGenesisAddress",
    "Result": "XKUh4GLhFJiqAMTF6HyWQrV9pK9HcGUdfJ"
}
</code></pre>
</li>
</ul>
</article>