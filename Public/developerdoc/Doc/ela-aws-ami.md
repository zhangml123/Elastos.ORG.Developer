<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-environmental-instructions" class="anchor" aria-hidden="true" href="#environmental-instructions"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Environmental instructions</h1>
<p>It is recommended to use <code>1</code>, which is the easiest and most convenient. You can also choose one of the <code>2</code> to use.</p>
<h2><a id="user-content-1-direct-access-node" class="anchor" aria-hidden="true" href="#1-direct-access-node"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 Direct access node</h2>
<p>Currently we have an open <code>testnet</code> node that you can use for development testing:</p>
<div class="highlight highlight-source-shell"><pre>IP address: 54.64.220.165

Example of access:

$ curl http://54.64.220.165:21334/api/v1/block/height    //Get the height of the MainChain node
$ curl http://54.64.220.165:21604/api/v1/block/height    //Get the height of the SideChain node</pre></div>
<p>Service deployment for wallet.Service and did.Service：</p>
<pre><code>18.179.20.67:8080  // this is did.Service
18.179.207.38:8080   // this is wallet.Service
</code></pre>
<h2><a id="user-content-2-start-the-node-and-connect-to-the-test-environment" class="anchor" aria-hidden="true" href="#2-start-the-node-and-connect-to-the-test-environment"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 Start the node and connect to the test environment</h2>
<p>In addition, you can use two ways to start a main chain and side chain nodes. The node has been configured to connect to the <code>testnet</code> environment synchronization data by default.</p>
<p>This document assumes that you are at least familiar with the <code>AWS EC2</code> administrative backend or <code>Docker</code> basic operations.</p>
<h3><a id="user-content-21-start-an-instance-of-our-elastos-main-chain-and-sidechain-nodes-using-our-custom-aws-ami" class="anchor" aria-hidden="true" href="#21-start-an-instance-of-our-elastos-main-chain-and-sidechain-nodes-using-our-custom-aws-ami"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1 Start an instance of our <code>Elastos</code> main chain and sidechain nodes using our custom <code>AWS AMI</code></h3>
<ul>
<li>
<p>Select <code>Launch Instance</code> in the <code>AWS EC2 Dashbord</code> control panel</p>
</li>
<li>
<p>In the first step, select <code>AWS AMI</code>, type <code>ami-0d9009b28b8aa3bc8</code> in the search box, and then use this <code>AMI</code> to start a mirror.</p>
</li>
<li>
<p>Connect to this server using the <code>ssh</code> client</p>
</li>
<li>
<p>Apply the launch command (use <code>aws ec2</code> default user <code>ubuntu</code> to log in to the server):</p>
<div class="highlight highlight-source-shell"><pre>$ <span class="pl-c1">cd</span> ela_v0.2.0
$ ./ela <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span></pre></div>
</li>
</ul>
<blockquote>
<p>Start the MainChain node. After startup, the <code>Chain</code> and <code>Logs</code> directories will be generated in the current directory to store the account data and log files respectively. If there are a data synchronization error and the node height does not increase. Please delete these files and restart the application.
After starting the MainChain node, the server will open <code>TCP 21333 21334 21335 21336 21338 21866</code> ports, please open these application ports in <code>AWS</code> firewall.</p>
</blockquote>
<div class="highlight highlight-source-shell"><pre>$ <span class="pl-c1">cd</span> <span class="pl-k">~</span>/did_v0.0.1
$ ./did <span class="pl-k">&gt;</span> /dev/null <span class="pl-k">&amp;</span></pre></div>
<blockquote>
<p>Start the SideChain node. After startup, the <code>Chain Logs SPVLogs data_store.bin headers.bin queue.db</code> file will be generated in the current directory. If there are a data synchronization error and the node height does not increase. Please delete these files and restart the application.
After starting the SideChain node, the server will open <code>TCP 21603 21604 21605 21606 21608</code> ports, please open these application ports in <code>AWS</code> firewall.</p>
</blockquote>
<ul>
<li>After the MainChain and SideChain nodes are started, they wait for the node to synchronize data from the seed node. During the period, the data synchronization can be viewed using the <code>/api/v1/block/height</code> interface.</li>
</ul>
<h3><a id="user-content-22-start-the-service-with-the-docker-image-we-created" class="anchor" aria-hidden="true" href="#22-start-the-service-with-the-docker-image-we-created"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2 Start the service with the <code>docker</code> image we created</h3>
<ul>
<li>
<p>Prepare the <code>docker</code> runtime environment on the target server first.</p>
</li>
<li>
<p>The <code>docker</code> image can be downloaded from [here] (<a href="https://s3-ap-northeast-1.amazonaws.com/elastos-docker-img/ela_node_hackson.docker.img.zip" rel="nofollow">https://s3-ap-northeast-1.amazonaws.com/elastos-docker-img/ela_node_hackson.docker.img.zip</a>), then imported into the local image library.</p>
</li>
<li>
<p>Start a <code>container</code> with the following command:</p>
<div class="highlight highlight-source-shell"><pre>docker run -d -p 21334:21334 -p 21335:21335 -p 21336:21336 -p 21338:21338 -p 21604:21604 -p 21605:21605 -p 21606:21606 -p 21608:21608 ela-node-did</pre></div>
</li>
</ul>
<blockquote>
<p>The application in <code>container</code> will automatically start the synchronization data. You can use the <code>/api/v1/block/height</code> interface to check the synchronization during synchronization.</p>
</blockquote>
</article>