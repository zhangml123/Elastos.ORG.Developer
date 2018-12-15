<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-elastos-did-specificationdraft" class="anchor" aria-hidden="true" href="#elastos-did-specificationdraft"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Elastos DID Specification（draft）</h1>
<ul>
<li>CREATE, READ AND WRITE A DID</li>
<li>作者 SONG SJUN</li>
</ul>
<h2><a id="user-content-目录" class="anchor" aria-hidden="true" href="#目录"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>目录</h2>
<ul>
<li>概述</li>
<li>ELASTOS DID
<ul>
<li>DID的生成方法</li>
<li>DID的命名规则</li>
<li>验证DID与公钥的对应关系</li>
<li>验证是否是DID的身份持有人</li>
<li>ELASTOS DID的费用</li>
</ul>
</li>
<li>ELASTOS DID SIDE-CHAIN接口方法
<ul>
<li>DID属性的格式</li>
<li>DID的WRITE方法</li>
<li>DID的READ方法</li>
<li>DID的REMOVE方法</li>
</ul>
</li>
</ul>
<h2><a id="user-content-概述" class="anchor" aria-hidden="true" href="#概述"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>概述</h2>
<p>DID (Decentralized Identifier) 是指可以由用户自主发行、自主证明拥有权的数字身份。</p>
<p>在传统互联网的技术实现里，通常需要由中心发行数字身份。这样即可以避免命名冲突；也可以完成身份验证。再通过这个中心完成陌生人之间的身份验证。</p>
<p>受比特币的去中心化钱包的启发，我们可以使用钱包地址作为用户的ID，通过地址对应的公钥进行验签，完成身份验证。陌生人之间不再需要第三方来确认身份。从而为互联网的独立、自主运行提供了一种数字身份的解决方案。</p>
<p>Elastos在上述基础之上，实现了Elastos DID Side-Chain，为互联网世界提供去中心数字身份的解决方案。让每个人都可以免费拥有属于自己的DID。通过拥有DID，每个人都可以在互联网世界里自我证明 (self-sovereign)；每个人都可以为自己的数字资产确权；每个人都可以基于可信身份安全通信；</p>
<p>Elastos DID基于Elastos DID Side-Chain生成、验证和存证。本文档将对Elastos DID进行描述和定义。</p>
<h2><a id="user-content-elastos-did" class="anchor" aria-hidden="true" href="#elastos-did"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Elastos DID</h2>
<p>我们在这里将这个Elastos DID Side-Chain私钥对应的地址定义为Elastos DID。</p>
<h3><a id="user-content-did的生成方法" class="anchor" aria-hidden="true" href="#did的生成方法"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DID的生成方法</h3>
<p>Elastos基于BIP44实现多侧链私钥方案，DID Side-Chain具体算法和参数如下：</p>
<p>生成私钥的路径为：” m/44'/1'/0'/change/address_index”。</p>
<p>生成公钥的算法和参数：基于ECC结合HMAC-SHA512算法和secp256r1参数生成对应公钥。</p>
<p>生成DID的算法和参数：基于SHA256算法采用P2SH方式生成对应地址。</p>
<p>签名的算法和参数：采用ECDSA算法和secp256r1参数实现签名。</p>
<h3><a id="user-content-did的命名规则" class="anchor" aria-hidden="true" href="#did的命名规则"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DID的命名规则</h3>
<p>DID的首字母为“I”。</p>
<h3><a id="user-content-验证did与公钥的对应关系" class="anchor" aria-hidden="true" href="#验证did与公钥的对应关系"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>验证DID与公钥的对应关系</h3>
<p>通过根据公钥生成DID 的算法再次生成DID，可以用来检验所得到的公钥和DID是否匹配。</p>
<h3><a id="user-content-验证是否是did的身份持有人" class="anchor" aria-hidden="true" href="#验证是否是did的身份持有人"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>验证是否是DID的身份持有人</h3>
<p>用公钥生成DID，验证两个DID是否匹配，用来验证DID与公钥是否匹配。</p>
<p>通过公钥对签名进行验签，用来验证是否是该公钥对应的私钥的签名。</p>
<h3><a id="user-content-elastos-did的费用" class="anchor" aria-hidden="true" href="#elastos-did的费用"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Elastos DID的费用</h3>
<p>创建DID不需要手续费。但任何向Elastos DID Side-Chain的写入操作都需要手续费。</p>
<p>一次交易写入小数据量的收费比较低，收费标准是：xxxxxxx（待补充）</p>
<p>一次交易写入大量数据的收费比较高，收费标准是：xxxxxxx</p>
<h2><a id="user-content-elastos-did-side-chain接口方法" class="anchor" aria-hidden="true" href="#elastos-did-side-chain接口方法"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Elastos DID Side-Chain接口方法</h2>
<p>Elastos DID Side-Chain拥有标准区块链访问接口，可以通过这些标准接口查询区块信息、交易信息和原始内容。另外也可以通过Elastos DID 相关接口完成对DID属性的写入和读取。</p>
<h3><a id="user-content-did属性的格式" class="anchor" aria-hidden="true" href="#did属性的格式"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DID属性的格式</h3>
<p>DID的属性路径兼容标准URI (<a href="https://tools.ietf.org/html/rfc3986" rel="nofollow">https://tools.ietf.org/html/rfc3986</a>) 中path-absolute的定义。它的根是DID，从次一级开始作为属性的路径。ABNF定义如下：</p>
<pre><code>DID-Property-Path = DID [ *(did-path) ] ”/” did-property [ "#" did-fragment ]
DID    = Elastos DID side-chain private key address
did-path   = "/" [ 1*pchar *( "/" 1*pchar) ]
did-property  = 1*pchar
did-fragment  = 1*pchar
pchar   = unreserved / pct-encoded / sub-delims / ":" / "@"
unreserved     = ALPHA / DIGIT / "-" / "." / "_" / "~"
sub-delims     = "!" / "$" / "&amp;" / "'" / "(" / ")" / "*" / "+" / "," / ";" / "="
pct-encoded    = "%" HEXDIG HEXDIG
</code></pre>
<h3><a id="user-content-did的write方法" class="anchor" aria-hidden="true" href="#did的write方法"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DID的Write方法</h3>
<p>Write方法用于写入DID的属性。</p>
<p>参数：</p>
<ul>
<li>Path：DID Property path，用于标识目标操作的DID和相应的属性。</li>
<li>Value：写入属性的具体内容，采用固定的JSON格式 [ “value”, “value”,… ]</li>
<li>Sign：使用DID的私钥对Value进行签名的结果。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>TXID：对应此次写入的交易Hash值。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>签名不正确。</li>
<li>公钥与DID不匹配。</li>
</ul>
<p>举例：</p>
<pre><code>为一个DID写入名字属性
Path：”IHLhCEbwViWBPwh1VhpECzYEA7jQHZ4zLv/name”
Value： [ “Alice” ]
Sign：”E6BB279CBD4727B41F2AA8B18E99B3F99DECBB8737D284FFDD408B356C912EE21AD478BCC0ABD65246938F17DDE64258FD8A9684C0649B23AE1318F7B9CEEEC7”
</code></pre>
<h3><a id="user-content-did的read方法" class="anchor" aria-hidden="true" href="#did的read方法"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DID的Read方法</h3>
<p>Read方法用于读取DID的属性，如果有多条记录，默认只返回最新的。</p>
<p>如果传入DID对应的公钥，将使用它验证Value的签名是否匹配。如果没有传入公钥参数，则不做验证。</p>
<p>参数：</p>
<ul>
<li>Path：DID Property path，用于标识目标操作的DID和相应的属性。</li>
<li>TXID：写入时返回的TXID。如果提供TXID，则返回它对应的Value，否则返回最新记录。</li>
<li>Public Key：对应DID的公钥，用于验证返回内容，可选。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result：执行结果，成功或失败。</li>
<li>Value：要读取的属性的内容。</li>
<li>TXID：该记录所在的交易Hash。</li>
<li>Verified：标识所返回的结果是否验证过签名。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>没有找到对应的属性。</li>
<li>查找到的属性已被删除。</li>
<li>签名不正确。</li>
<li>公钥与DID不匹配。</li>
</ul>
<h3><a id="user-content-did的remove方法" class="anchor" aria-hidden="true" href="#did的remove方法"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>DID的Remove方法</h3>
<p>Remove用于删除DID的属性。当一个DID的属性被Remove以后，Read将不会再返回它的Value。</p>
<p>参数：</p>
<ul>
<li>Path：DID Property path，用于标识目标操作的DID和相应的属性。</li>
<li>TXID：最近一次写入该属性时返回的TXID</li>
<li>Sign：使用DID的私钥对TXID参数进行签名的结果。</li>
</ul>
<p>返回：</p>
<ul>
<li>Result，执行结果，成功或失败。</li>
<li>TXID：该记录所在的交易Hash。</li>
</ul>
<p>可能失败的原因：</p>
<ul>
<li>没有找到对应的属性。</li>
<li>查找到的属性已被删除。</li>
<li>签名不正确。</li>
<li>公钥与DID不匹配。</li>
</ul>
</article>