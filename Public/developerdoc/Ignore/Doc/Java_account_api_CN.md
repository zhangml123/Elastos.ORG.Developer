<article class="markdown-body entry-content" itemprop="text"><h3><a id="user-content-java钱包文档" class="anchor" aria-hidden="true" href="#java钱包文档"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>java钱包文档</h3>
<h4><a id="user-content-一获得jar包二种方式" class="anchor" aria-hidden="true" href="#一获得jar包二种方式"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>一.获得jar包二种方式</h4>
<h5><a id="user-content-1下载最新版本的jar包" class="anchor" aria-hidden="true" href="#1下载最新版本的jar包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.下载最新版本的jar包</h5>
<pre><code>网址：https://github.com/elastos/Elastos.ELA.Utilities.Java/releases

下载：Elastos.ELA.Utilities.Java_v0.1.*.jar
</code></pre>
<h5><a id="user-content-2下载源代码编译jar包" class="anchor" aria-hidden="true" href="#2下载源代码编译jar包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.下载源代码，编译jar包</h5>
<pre><code>网址：https://github.com/elastos/Elastos.ELA.Utilities.Java
</code></pre>
<ul>
<li>编译jar包</li>
</ul>
<pre><code>File -&gt; Project Structure -&gt; Artifacts -&gt; + -&gt; JAR -&gt; From modules with 
1、-&gt; Main Class
2、-&gt; extract to the target JAR
3、-&gt; META-INF PATH （C:\DNA\src\ela_tool\src\main\resources）
4、ok -&gt;  Include in project build -&gt; Apply -&gt;ok
</code></pre>
<ul>
<li>删除签名jar包依赖，必须使用</li>
</ul>
<pre><code>命令： zip -d Elastos.ELA.Utilities.Java 'META-INF/*.SF' 'META-INF/*.RSA' 'META-INF/*SF'
</code></pre>
<h4><a id="user-content-二启动jar包" class="anchor" aria-hidden="true" href="#二启动jar包"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>二.启动jar包</h4>
<pre><code>建议java版本：1.8

启动命令：java -cp Elastos.ELA.Utilities.v0.1.*.Java  org.elastos.elaweb.HttpServer

web服务默认端口：8989，可修改
</code></pre>
<h4><a id="user-content-三创建交易自动获取utxo" class="anchor" aria-hidden="true" href="#三创建交易自动获取utxo"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>三.创建交易（自动获取utxo）</h4>
<h5><a id="user-content-自动获取utxo也称非离线签名" class="anchor" aria-hidden="true" href="#自动获取utxo也称非离线签名"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>自动获取utxo,也称非离线签名</h5>
<h5><a id="user-content-特点" class="anchor" aria-hidden="true" href="#特点"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>特点：</h5>
<ul>
<li>构造交易方便，不用计算utxo</li>
<li>不用计算找零地址金额，拿到从小到大排序的utxo，根据输出(outputs)金额，自动计算找零金额</li>
</ul>
<h5><a id="user-content-需要准备程序并且后三个程序必须在同级目录下" class="anchor" aria-hidden="true" href="#需要准备程序并且后三个程序必须在同级目录下"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>需要准备程序，并且后三个程序必须在同级目录下：</h5>
<ul>
<li>ela —— ela节点</li>
<li>jar包 —— java离线签名程序</li>
<li>java-config.json —— 用来连接ela节点</li>
<li>keystore.dat —— 账户钱包</li>
</ul>
<h5><a id="user-content-参数说明" class="anchor" aria-hidden="true" href="#参数说明"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>参数说明：</h5>
<ul>
<li>
<p>java程序金额为最小单位0.00000001ela(即:amount="00.00000001"ELA)，String类型</p>
</li>
<li>
<p>java-config.json 文件需要放在java程序同级目录，目的是连接节点获取utxo</p>
</li>
<li>
<p>Host：节点程序所在的服务器ip和rpc端口</p>
</li>
<li>
<p>Fee：双方规定的交易费，一笔交易的单个输出或多个输出交易费是一样的</p>
</li>
<li>
<p>Confirmation:区块确认交易的次数，即区块数;建议16个确认数</p>
</li>
<li>
<p>Account:password是该address对应账户密码</p>
</li>
<li>
<p>Outputs：充值地址及金额</p>
</li>
<li>
<p>ChangeAddress：转账后找零的地址，找零金额java程序自动处理</p>
</li>
<li>
<p>输入金额小于输出金额，提示金额不足</p>
</li>
<li>
<h4><a id="user-content-接口名genrawtransactionbyaccount" class="anchor" aria-hidden="true" href="#接口名genrawtransactionbyaccount"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>接口名：genRawTransactionByAccount</h4>
</li>
</ul>
<h5><a id="user-content-java-configjson" class="anchor" aria-hidden="true" href="#java-configjson"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>java-config.json</h5>
<pre><code>{
  "Host": "127.0.0.1:11336",
  "Fee":"0.0005",
  "Confirmation":16
}

</code></pre>
<h5><a id="user-content-request" class="anchor" aria-hidden="true" href="#request"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request</h5>
<pre><code>{
    "method":"genRawTransactionByAccount",
    "id":0,
    "params":[
        {
            "Transactions":[
                {
                    "Account":[
                        {
                            "password":"12345",
                            "address":"ENKj2J5dGjSRgHHxBZ3yLjB6RyXvHikW5K"
                        }
                    ],
                    "Outputs":[
                        {
                            "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
                            "amount":"3"
                        }
                    ],
                    "ChangeAddress":"Edi5WWMFBsEL2qgggrFhnJe1HTjDnw447H"
                }
            ]
        }
    ]
}

</code></pre>
<h5><a id="user-content-response" class="anchor" aria-hidden="true" href="#response"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response</h5>
<pre><code>{
    "Action": "genRawTransaction",
    "Desc": "SUCCESS",
    "Result": {
        "rawTx": "0200010013323235E5F9463B37EDE39688**********8E7456FDE2554E77E1D9A1AB3360562F1D6FF4BAC",
        "txHash": "A32203B48C740552AF0CDB1E77ECCEBE147C5CDA51B2BD80BA9C59662CDCD322"
    }
}
</code></pre>
<h4><a id="user-content-四账户接口" class="anchor" aria-hidden="true" href="#四账户接口"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>四.账户接口</h4>
<pre><code>生成的keystore.dat文件在java离线签名程序同级目录下
</code></pre>
<ul>
<li>
<h4><a id="user-content-createaccount-创建账户" class="anchor" aria-hidden="true" href="#createaccount-创建账户"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>createAccount 创建账户</h4>
</li>
</ul>
<h5><a id="user-content-request-1" class="anchor" aria-hidden="true" href="#request-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request</h5>
<pre><code>{
    "method":"createAccount",
    "id":0,
    "params":[
    	{
	       "Account":[
	            {
	                "password":"12345"
	            }
	        ]
    	}
    ]
}
</code></pre>
<h5><a id="user-content-response-1" class="anchor" aria-hidden="true" href="#response-1"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response</h5>
<pre><code>{
    "Action": "createAccount",
    "Desc": "SUCCESS",
    "Result": [
        {
            "address": "EbrydLF4BuJ7mPJYpxk7qzwx1CirFCDcPg",
            "encryptedPrivateKey": "8xHdZwJFeYLs0zRRf4uvxZThhGUA0jwwkae/WFxIXbf1aBy3Hm+iTbuVtkusFYiA",
            "salt": "ZUPbh6H6LcNv6PZ64e1HPw==",
            "scrypt": {
                "dkLen": 64,
                "n": 16384,
                "p": 8,
                "r": 8
            },
            "version": "1.0"
        }
    ]
}
</code></pre>
<ul>
<li>
<h4><a id="user-content-importaccount-导入账户" class="anchor" aria-hidden="true" href="#importaccount-导入账户"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>importAccount 导入账户</h4>
</li>
</ul>
<h5><a id="user-content-request-2" class="anchor" aria-hidden="true" href="#request-2"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request</h5>
<pre><code>{
    "method":"importAccount",
    "id":0,
    "params":[
    	{
	       "Account":[
	            {
	                "password":"12345",
	                "privateKey":"5FA927E5664E563F019F50DCD4D7E2D9404F2D5D49E31F9482912E23D6D7B9EB"
	            }
	        ]
    	}
    ]
}
</code></pre>
<h5><a id="user-content-response-2" class="anchor" aria-hidden="true" href="#response-2"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response</h5>
<pre><code>{
    "Action": "importAccount",
    "Desc": "SUCCESS",
    "Result": [
        {
            "address": "EKNh1wS42ur6Pfai6DthfH61vDUmg8M93v",
            "encryptedPrivateKey": "sbMP2vWA/5rDMUT0aB22rLkS+QA7zHVXS3xEhJjhzEX0YPR4+HkPaQ8QSAg5LRJw",
            "salt": "sE7vPJSD2pnd1qDjIsHXnw==",
            "scrypt": {
                "dkLen": 64,
                "n": 16384,
                "p": 8,
                "r": 8
            },
            "version": "1.0"
        },
        {
            "address": "EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
            "encryptedPrivateKey": "+PVIa2LLfWWwsfRIWGE1BwGGqg1YtnG5jBHepI6x26TtEB12y2jf0m6FCp7Tc9BN",
            "salt": "Zu0sQcTq14ce7mCcP9emkA==",
            "scrypt": {
                "dkLen": 64,
                "n": 16384,
                "p": 8,
                "r": 8
            },
            "version": "1.0"
        }
    ]
}
</code></pre>
<ul>
<li>
<h4><a id="user-content-removeaccount-移出账户" class="anchor" aria-hidden="true" href="#removeaccount-移出账户"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>removeAccount 移出账户</h4>
</li>
</ul>
<h5><a id="user-content-request-3" class="anchor" aria-hidden="true" href="#request-3"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request</h5>
<pre><code>{
    "method":"removeAccount",
    "id":0,
    "params":[
    	{
	       "Account":[
	            {
	                "password":"12345",
	                "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB"
	            }
	        ]
    	}
    ]
}
</code></pre>
<h5><a id="user-content-response-3" class="anchor" aria-hidden="true" href="#response-3"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response</h5>
<pre><code>{
    "Action": "removeAccount",
    "Desc": "SUCCESS",
    "Result": [
        {
            "address": "EKNh1wS42ur6Pfai6DthfH61vDUmg8M93v",
            "encryptedPrivateKey": "sbMP2vWA/5rDMUT0aB22rLkS+QA7zHVXS3xEhJjhzEX0YPR4+HkPaQ8QSAg5LRJw",
            "salt": "sE7vPJSD2pnd1qDjIsHXnw==",
            "scrypt": {
                "dkLen": 64,
                "n": 16384,
                "p": 8,
                "r": 8
            },
            "version": "1.0"
        }
    ]
}
</code></pre>
<ul>
<li>
<h4><a id="user-content-exportprivatekey-导出私钥" class="anchor" aria-hidden="true" href="#exportprivatekey-导出私钥"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>exportPrivateKey 导出私钥</h4>
</li>
</ul>
<h5><a id="user-content-request-4" class="anchor" aria-hidden="true" href="#request-4"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request</h5>
<pre><code>{
    "method":"exportPrivateKey",
    "id":0,
    "params":[
    	{
	       "Account":[
	            {
	                "password":"12345",
	                "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB"
	            },
	            {
	                "password":"12345",
	                "address":"EKNh1wS42ur6Pfai6DthfH61vDUmg8M93v"
	            }
	        ]
    	}
    ]
}
</code></pre>
<h5><a id="user-content-response-4" class="anchor" aria-hidden="true" href="#response-4"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response</h5>
<pre><code>{
    "Action": "exportPrivateKey",
    "Desc": "SUCCESS",
    "Result": [
        "5fa927e5664e563f019f50dcd4d7e2d9404f2d5d49e31f9482912e23d6d7b9eb",
        "06d243f6835ced1253c6cd939de12d4f482922b86c165d532384368ea2bbe72b"
    ]
}
</code></pre>
<ul>
<li>
<h4><a id="user-content-getaccounts-获取所有账户" class="anchor" aria-hidden="true" href="#getaccounts-获取所有账户"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>getAccounts 获取所有账户</h4>
</li>
</ul>
<h5><a id="user-content-request-5" class="anchor" aria-hidden="true" href="#request-5"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request</h5>
<pre><code>{
    "method":"getAccounts",
    "id":0,
    "params":[
    	
    ]
}
</code></pre>
<h5><a id="user-content-response-5" class="anchor" aria-hidden="true" href="#response-5"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response</h5>
<pre><code>{
    "Action": "getAccounts",
    "Desc": "SUCCESS",
    "Result": [
        {
            "address": "EKNh1wS42ur6Pfai6DthfH61vDUmg8M93v",
            "encryptedPrivateKey": "sbMP2vWA/5rDMUT0aB22rLkS+QA7zHVXS3xEhJjhzEX0YPR4+HkPaQ8QSAg5LRJw",
            "salt": "sE7vPJSD2pnd1qDjIsHXnw==",
            "scrypt": {
                "dkLen": 64,
                "n": 16384,
                "p": 8,
                "r": 8
            },
            "version": "1.0"
        },
        {
            "address": "EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
            "encryptedPrivateKey": "+PVIa2LLfWWwsfRIWGE1BwGGqg1YtnG5jBHepI6x26TtEB12y2jf0m6FCp7Tc9BN",
            "salt": "Zu0sQcTq14ce7mCcP9emkA==",
            "scrypt": {
                "dkLen": 64,
                "n": 16384,
                "p": 8,
                "r": 8
            },
            "version": "1.0"
        }
    ]
}
</code></pre>
<ul>
<li>
<h4><a id="user-content-getaccountaddresses-获取所有账户地址" class="anchor" aria-hidden="true" href="#getaccountaddresses-获取所有账户地址"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>getAccountAddresses 获取所有账户地址</h4>
</li>
</ul>
<h5><a id="user-content-request-6" class="anchor" aria-hidden="true" href="#request-6"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Request</h5>
<pre><code>{
    "method":"getAccountAddresses",
    "id":0,
    "params":[
    ]
}
</code></pre>
<h5><a id="user-content-response-6" class="anchor" aria-hidden="true" href="#response-6"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Response</h5>
<pre><code>{
    "Action": "getAccountAddresses",
    "Desc": "SUCCESS",
    "Result": "[EKNh1wS42ur6Pfai6DthfH61vDUmg8M93v, EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB]"
}
</code></pre>
</article>