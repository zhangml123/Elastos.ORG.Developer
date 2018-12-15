<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-elastos-did-servicedraft" class="anchor" aria-hidden="true" href="#elastos-did-servicedraft"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Elastos DID Service（draft）</h1>
<ul>
<li>DATA MODEL AND SYNTAXES FOR DID</li>
<li>作者 SONG SJUN</li>
</ul>
<h2><a id="user-content-目录" class="anchor" aria-hidden="true" href="#目录"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>目录</h2>
<ul>
<li>概述</li>
<li>ELASTOS DID SERVICE 接口
<ul>
<li>DID管理
<ul>
<li>创建DID</li>
<li>向DID充值【收费】</li>
<li>从DID提现【收费】</li>
<li>注销DID【收费】</li>
<li>签名</li>
<li>验签</li>
<li>获取DID公钥</li>
<li>写入属性【收费】</li>
<li>读取属性</li>
</ul>
</li>
<li>身份管理
<ul>
<li>用户帐号绑定DID【收费】</li>
<li>生成验证身份请求</li>
<li>应答验证身份请求</li>
<li>应答身份验证同时请求验证对方身份</li>
<li>第三方登录</li>
</ul>
</li>
<li>数据管理
<ul>
<li>数据存证【收费】</li>
<li>读取存证</li>
<li>为属性增加证明【收费】</li>
</ul>
</li>
</ul>
</li>
</ul>
<h2><a id="user-content-概述" class="anchor" aria-hidden="true" href="#概述"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>概述</h2>
<p>Elastos DID Service是面向DApp开发者的一个软件服务包，其代码完全按照《Elastos DID Programming Guide》中的建议来实现。</p>
<p>Elastos DID Side-Chain在区块链共识层面提供了基础操作方法，而DID Service将在这些基础方法之上，结合具体业务场景，将常用操作进行封装和实现，从而为DApp开发者提供更简单、更方便和使用的接口方法。</p>
<p>Elastos DID Service以两种方式提供：</p>
<ul>
<li>二进制软件包和源代码，目前版本是java语言实现的jar包；</li>
<li>公共服务器接口，由Elastos基金会提供和运营的服务器运行的DID Service，全网可以直接访问。</li>
</ul>
<p>Elastos DID Service定位于DID Side-Chain与应用之间的中间层，结合应用常见的业务场景，结合DID编程规范，封装高级功能。</p>
<p>在DID Side-Chain基础接口的之上，增加传统数据库作为数据存储，DID Side-Chain用于保存业务数据的摘要存证。从应用的角度，DID是一个完整、独立的基础服务。</p>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DID_Service_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DID_Service_1.png" alt="image" style="max-width:100%;"></a></p>
<p>DID Service目标是在不改变传统、现有的应用业务逻辑，将存证、确权、证明、第三方登录、访问授权等等一些列操作和实现都放在DID Service内实现。对现有应用改造成本最低。</p>
<p>当多个应用的用户身份、业务数据存证上链以后，可以通过DID互联互通、组合出新的业务模式。</p>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DID_Service_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DID_Service_2.png" alt="image" style="max-width:100%;"></a></p>
<p>DID Service提供的功能包括：DID管理、绑定身份、身份验证、数据存证、据授权、证明、第三方登录等等。</p>
<h2><a id="user-content-elastos-did-service-接口" class="anchor" aria-hidden="true" href="#elastos-did-service-接口"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Elastos DID Service 接口</h2>
<h3><a id="user-content-did管理" class="anchor" aria-hidden="true" href="#did管理"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DID管理</h3>
<h4><a id="user-content-创建did" class="anchor" aria-hidden="true" href="#创建did"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>创建DID</h4>
<p>生成一个DID，包括私钥、公钥和DID字符串。</p>
<p>参数：</p>
<ul>
<li>无</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Private Key：DID的私钥。</li>
<li>Public Key：DID的公钥。</li>
<li>DID：DID的字符内容。</li>
</ul>
<h4><a id="user-content-向did充值收费" class="anchor" aria-hidden="true" href="#向did充值收费"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>向DID充值【收费】</h4>
<p>向DID充值手续费，用于支付向Elastos DID Side-Chain写入数据的矿工费。</p>
<p>ToDo：待补充参数</p>
<h4><a id="user-content-从did提现收费" class="anchor" aria-hidden="true" href="#从did提现收费"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>从DID提现【收费】</h4>
<p>向DID充值手续费，用于支付写入Elastos DID Side-Chain时的矿工费。</p>
<p>ToDo：待补充参数</p>
<h4><a id="user-content-注销did收费" class="anchor" aria-hidden="true" href="#注销did收费"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>注销DID【收费】</h4>
<p>注销一个已有的DID。</p>
<p>参数：</p>
<ul>
<li>DID：目标要注销的DID。</li>
<li>Private Key：DID对应的私钥。</li>
<li>Value：使用DID的私钥对字符串“Destroy”签名的结果。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>TXID：该记录所在的交易Hash。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>没有找到对应的属性。</li>
<li>查找到的属性已被删除。</li>
<li>签名不正确。</li>
<li>公钥与DID不匹配。</li>
</ul>
<h4><a id="user-content-签名" class="anchor" aria-hidden="true" href="#签名"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>签名</h4>
<p>使用DID的私钥对一段内容进行签名操作。此操作需要谨慎，需要确定被签名的内容是否真实，避免被骗取签名。</p>
<p>参数：</p>
<ul>
<li>DID：签名所使用的DID。</li>
<li>Private Key：DID对应的私钥。</li>
<li>Value：目标要签名的文本内容。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Signature：签名结果。</li>
</ul>
<h4><a id="user-content-验签" class="anchor" aria-hidden="true" href="#验签"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>验签</h4>
<p>对签名内容进行验证。如果DID在链上有声明PublicKey属性，将会获取其属性值作为公钥与DID进行匹配校验。</p>
<p>参数：</p>
<ul>
<li>DID：签名所使用的DID。</li>
<li>Public Key：DID对应的公钥。</li>
<li>Value：签名内容的明文。</li>
<li>Signature：签名内容。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>没有找到对应的属性。</li>
<li>查找到的属性已被删除。</li>
<li>签名不正确。</li>
<li>公钥与DID不匹配。</li>
<li>入参的公钥与DID在链上PublicKey属性记录的公钥不一致。</li>
</ul>
<h4><a id="user-content-获取did公钥" class="anchor" aria-hidden="true" href="#获取did公钥"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>获取DID公钥</h4>
<p>根据DID从链上获取PublicKey属性内容。</p>
<p>参数：</p>
<ul>
<li>DID：想要获取公钥的DID。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result，执行结果，成功或失败。</li>
<li>Public Key，获取到的公钥。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>没有找到对应的属性。</li>
</ul>
<h4><a id="user-content-写入属性收费" class="anchor" aria-hidden="true" href="#写入属性收费"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>写入属性【收费】</h4>
<p>向DID写入属性。</p>
<p>参数：</p>
<ul>
<li>Private Key：DID对应的私钥。</li>
<li>Path：DID Property path，用于标识目标操作的DID和相应的属性。</li>
<li>Value：写入属性的具体内容，如果是多个，请使用JSON格式 [ “value”, “value”,… ]</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>TXID：对应此次写入的交易Hash值。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>私钥与DID不匹配。</li>
<li>余额不足以支付矿工费。</li>
</ul>
<h4><a id="user-content-读取属性" class="anchor" aria-hidden="true" href="#读取属性"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>读取属性</h4>
<p>从DID读取属性。从最新的区块高度开始向前查找，找到第一个匹配的属性后立即返回。</p>
<p>参数：</p>
<ul>
<li>Path：DID Property path，用于标识目标操作的DID和相应的属性。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Value：属性值，以JSON数组方式返回。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>没有找到目标属性。</li>
</ul>
<h3><a id="user-content-身份管理" class="anchor" aria-hidden="true" href="#身份管理"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>身份管理</h3>
<h4><a id="user-content-用户帐号绑定did收费" class="anchor" aria-hidden="true" href="#用户帐号绑定did收费"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>用户帐号绑定DID【收费】</h4>
<p>将应用账户系统里的用户身份与对应用户的DID绑定。</p>
<p>需要注意的是，这是一个单向绑定，是应用单方面声明与某个用户DID绑定，并不包括对应用户的签名确认。</p>
<p>如果用户愿意补充确认信息，可以用本方法返回的属性值作为自己的属性，填入本方法返回的Value作为属性内容。以此标识对该条绑定信息的确认。</p>
<p>参数：</p>
<ul>
<li>User ID：用户在第三方平台内的、不可变的唯一标识。</li>
<li>User DID：对应绑定用户的DID。</li>
<li>DID：应用的DID身份。</li>
<li>Private Key：应用的DID对应的私钥。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Value：属性值，以JSON数组方式返回。</li>
<li>TXID：对应此次写入的交易Hash值。</li>
<li>Path：对应绑定信息的属性路径。</li>
</ul>
<h4><a id="user-content-生成验证身份请求" class="anchor" aria-hidden="true" href="#生成验证身份请求"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>生成验证身份请求</h4>
<p>双向身份验证三次握手中的第一个步骤。生成一个随机数，并附带DID信息、公钥和签名信息，打包生成固定格式的请求内容。</p>
<p>参数：</p>
<ul>
<li>DID：请求方的DID身份。</li>
<li>Private Key：请求方的DID对应的私钥。</li>
<li>Random Num：需要对方签名返回的随机数，用于验证对方身份。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Request：身份验证请求的文本内容。</li>
</ul>
<h4><a id="user-content-应答验证身份请求" class="anchor" aria-hidden="true" href="#应答验证身份请求"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>应答验证身份请求</h4>
<p>双向身份验证三次握手中的第三个步骤。针对身份验证请求进行应答，验证DID、公钥和签名信息是否匹配。</p>
<p>参数：</p>
<ul>
<li>DID：应答方的DID身份。</li>
<li>Private Key：应答方的DID对应的私钥。</li>
<li>Request：身份验证请求的请求内容。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Response：身份验证请求的回应的文本内容。</li>
</ul>
<h4><a id="user-content-应答身份验证同时请求验证对方身份" class="anchor" aria-hidden="true" href="#应答身份验证同时请求验证对方身份"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>应答身份验证同时请求验证对方身份</h4>
<p>双向身份验证三次握手中的第二个步骤。针对身份验证请求进行应答，验证DID、公钥和签名信息是否匹配。同时也生成验证对方的身份的请求。</p>
<p>参数：</p>
<ul>
<li>DID：应答方的DID身份。</li>
<li>Private Key：应答方的DID对应的私钥。</li>
<li>Request：身份验证请求的请求内容。</li>
<li>Random Num：需要对方签名返回的随机数，用于验证对方身份。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Response：身份验证请求的回应的文本内容。</li>
</ul>
<h4><a id="user-content-第三方登录" class="anchor" aria-hidden="true" href="#第三方登录"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>第三方登录</h4>
<p>请求使用DID登录的应用也需要预先申请好DID，再基于应用的DID完成双向身份验证的三次握手。</p>
<h3><a id="user-content-数据管理" class="anchor" aria-hidden="true" href="#数据管理"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>数据管理</h3>
<h4><a id="user-content-数据存证收费" class="anchor" aria-hidden="true" href="#数据存证收费"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>数据存证【收费】</h4>
<p>需要被存证的数据写入数据库，同时将存证内容的Hash写入区块链。</p>
<p>参数：</p>
<ul>
<li>Private Key：DID对应的私钥。</li>
<li>DID：写入数据的DID身份。</li>
<li>User DID：拥有本条数据的用户的DID。可选，如果有，则将DID信息与数据一起存证。</li>
<li>Value：需要存证的数据内容。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>TXID：对应此次写入的交易Hash值。</li>
<li>Path：此次数据存证的属性值。</li>
<li>Key：对应此次写入数据的数据库记录的唯一性键值，用于读取数据时使用。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>私钥与DID不匹配。</li>
<li>余额不足以支付矿工费。</li>
</ul>
<h4><a id="user-content-读取存证" class="anchor" aria-hidden="true" href="#读取存证"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>读取存证</h4>
<p>只有写入数据或者写入时标识的数据主人才能从数据库读取目标数据的明文，并同时返回区块链存证的相关信息。</p>
<p>参数：</p>
<ul>
<li>Key：写入数据时返回的标识数据记录的唯一性键值。</li>
<li>Signature：针对Key+时间戳的签名。必须是写入数据的DID或者是拥有数据的DID提供的签名。只有最近60秒内的时间戳才有效。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Value：存证数据的明文。</li>
<li>TXID：存证时写入的交易Hash值。</li>
<li>Path：对应此次数据存证的DID属性值。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>没有找到目标内容。</li>
<li>签名不匹配。</li>
<li>时间戳非法。</li>
</ul>
<h4><a id="user-content-为属性增加证明收费" class="anchor" aria-hidden="true" href="#为属性增加证明收费"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>为属性增加证明【收费】</h4>
<p>针对已有的DID属性，增加对应的第三方证明信息。
证明内容会被设置为原有属性的下一级属性，键值为被证明的DID属性值的Hash值。</p>
<p>参数：</p>
<ul>
<li>Private Key：DID对应的私钥。</li>
<li>Path：DID Property path，被证明的DID的属性。</li>
<li>Key：被证明的DID属性的Value值。</li>
<li>Value：证明内容。</li>
<li>SyncToDB：是否保存证明内容到数据库。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>TXID：对应此次写入的交易Hash值。</li>
<li>Path：对应此次增加证明的DID属性的Path值。</li>
<li>Key：如果选择了SyncToDB选项，则对应此次写入数据的数据库记录的唯一性键值，用于读取数据时使用。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>私钥与DID不匹配。</li>
<li>余额不足以支付矿工费。</li>
</ul>
<p>举例：</p>
<pre><code>如果DID的“education”属性包含多个值（曾就读于多所学校），例如：

DID.Property(“xxxx/education”) = [“School A”, “School B”, “School C”];

如果我们要为“School B”增加一条证明，那么Key就是：

Key = Hash(“School B”) = “cc767d402617f3542……”;

那么证明的Path就是“xxxx/education/cc767d402617f3542……”
</code></pre>
</article>