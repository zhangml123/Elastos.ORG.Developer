<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-环境使用说明" class="anchor" aria-hidden="true" href="#环境使用说明"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>环境使用说明</h1>
<p>建议使用 1，最简单便捷，也可从 2 中选择一种来使用。</p>
<h2><a id="user-content-1-直接访问节点" class="anchor" aria-hidden="true" href="#1-直接访问节点"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 直接访问节点</h2>
<p>当前我们提供了一个开放的 <code>testnet</code> 节点可以供您开发测试使用：</p>
<div class="highlight highlight-source-shell"><pre>IP地址：54.64.220.165

访问示例：

$ curl http://54.64.220.165:21334/api/v1/block/height    //获取主链节点高度
$ curl http://54.64.220.165:21604/api/v1/block/height    //获取侧链节点高度</pre></div>
<p>wallet.Service 和 did.Service 的服务部署：</p>
<pre><code>18.179.20.67:8080  // 这是 did.Service
18.179.207.38:8080   // 这是 wallet.Service
</code></pre>
<h2><a id="user-content-2-启动节点连接测试环境" class="anchor" aria-hidden="true" href="#2-启动节点连接测试环境"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 启动节点，连接测试环境</h2>
<p>另外您还可以使用如下两种方式来启动一个主链和侧链节点，节点已经默认配置连接<code>testnet</code>环境同步数据；本文档假设您至少熟悉 <code>AWS EC2</code> 管理后台或者 <code>Docker</code> 基本操作。</p>
<h3><a id="user-content-21-使用我们定制的-aws-ami-启动一个实例来运行-elastos-主链和侧链节点" class="anchor" aria-hidden="true" href="#21-使用我们定制的-aws-ami-启动一个实例来运行-elastos-主链和侧链节点"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1 使用我们定制的 <code>AWS AMI</code> 启动一个实例来运行 <code>Elastos</code> 主链和侧链节点：</h3>
<ul>
<li>
<p>在 <code>AWS EC2 Dashbord</code> 控制面板中选择 <code>Launch Instance</code></p>
</li>
<li>
<p>在第一步选择 <code>AWS AMI</code> 时候，在搜索框输入 <code>ami-0d9009b28b8aa3bc8</code>，然后使用这个 <code>AMI</code> 启动一个镜像</p>
</li>
<li>
<p>使用 <code>ssh</code> 客户端连接到这个服务器</p>
</li>
<li>
<p>应用启动命令(使用 <code>aws ec2</code> 默认用户 <code>ubuntu</code> 登录服务器)：</p>
<div class="highlight highlight-source-shell"><pre>$ <span class="pl-c1">cd</span> <span class="pl-k">~</span>/ela_v0.2.0
$ ./ela <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span></pre></div>
</li>
</ul>
<blockquote>
<p>启动主链节点，启动之后会在当前目录下生成 Chain 和 Logs目录分别存放账本数据和日志文件；如果出现数据同步错误，节点高度不增加问题，请删除这些文件之后重新启动应用
启动主链节点之后，服务器会打开 TCP 21333 21334 21335 21336 21338 21866端口，请在 AWS 防火墙打开这些应用端口</p>
</blockquote>
<div class="highlight highlight-source-shell"><pre>$ <span class="pl-c1">cd</span> <span class="pl-k">~</span>/did_v0.0.1
$ ./did <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span></pre></div>
<blockquote>
<p>启动侧链节点，启动之后会在当前目录下生成 Chain Logs SPVLogs data_store.bin headers.bin queue.db文件；如果出现数据同步错误，节点高度不增加问题，请删除这些文件之后重新启动应用
启动侧链节点之后，服务器会打开 TCP 21603 21604 21605 21606 21608端口，请在 AWS 防火墙打开这些应用端口</p>
</blockquote>
<ul>
<li>主链和侧链节点启动后等待节点从种子节点同步数据，期间可以使用 <code>/api/v1/block/height</code>接口查看数据同步情况</li>
</ul>
<h3><a id="user-content-22-使用我们创建的-docker-镜像启动服务" class="anchor" aria-hidden="true" href="#22-使用我们创建的-docker-镜像启动服务"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2 使用我们创建的 <code>docker</code> 镜像启动服务</h3>
<ul>
<li>
<p>先在目标服务器准备好 <code>docker</code> 运行环境</p>
</li>
<li>
<p><code>docker</code> 镜像可以从<a href="https://s3-ap-northeast-1.amazonaws.com/elastos-docker-img/ela_node_hackson.docker.img.zip" rel="nofollow">这里</a>下载，然后导入本地镜像库</p>
</li>
<li>
<p>使用如下命令启动一个 <code>container</code>：</p>
<div class="highlight highlight-source-shell"><pre>docker run -d -p 21334:21334 -p 21335:21335 -p 21336:21336 -p 21338:21338 -p 21604:21604 -p 21605:21605 -p 21606:21606 -p 21608:21608 ela-node-did</pre></div>
</li>
</ul>
<blockquote>
<p><code>container</code> 中的应用会自动启动同步数据，同步过程中可以使用 <code>/api/v1/block/height</code> 接口查看同步情况</p>
</blockquote>
</article>