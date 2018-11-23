<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-carrier-faq" class="anchor" aria-hidden="true" href="#carrier-faq"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Carrier FAQ</h1>
<h2><a id="user-content-basic-concept-introduction" class="anchor" aria-hidden="true" href="#basic-concept-introduction"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Basic concept introduction</h2>
<ol>
<li>
<p>What is <code>Carrier</code>?</p>
<p><code>Carrier</code> is a decentralized <code>F2F</code>-based messaging and data transfer platform that consists of two parts:</p>
<ul>
<li>
<p><code>Carrier</code> module</p>
<p>The basic module of the whole <code>Carrier</code> network completes node friend addition, deletion, and message transmission/reception between friend nodes.</p>
</li>
<li>
<p><code>Session</code> module</p>
<p>Based on the message of <code>Carrier</code> module, an extension module is implemented to complete the data communication between friends of nodes.</p>
</li>
</ul>
</li>
<li>
<p>Decentralized network</p>
<p><code>Carrier</code> transforms the original <code>TCP/IP</code> network based on <code>IPv4/IPv6</code> addressing into a virtual communication network based on <code>Carrier</code> Node <code>ID</code> (<code>base58</code> encoding) addressing. This virtual network breaks through the pure <code>TCP/IP</code> communication limitations due to the network topology between nodes.</p>
</li>
<li>
<p>Node type</p>
<ul>
<li>
<p><code>Boostrap</code> node</p>
<p>Such nodes must be placed at an accessible public address and resident. And the <code>Public Key</code> of the publishing node is used when the ordinary node accesses the <code>Carrier</code> network.</p>
<p>It will not participate in the application business, and will be completely transparent to the use of <code>Carrier</code> network.</p>
</li>
<li>
<p>Ordinary nodes</p>
</li>
</ul>
</li>
<li>
<p>what is <code>F2F</code> communication?</p>
<p>"F" is <code>Friend</code>, and any node must be <code>Friend</code> in order to allow message and data communication. The message and data communication between <code>Friend</code> is completely encrypted.</p>
</li>
<li>
<p>Node <code>UserId</code> and <code>Address</code></p>
<ul>
<li>
<p><code>UserId</code></p>
<p>The <code>UserId</code> is the unique identifier of the node and will not change after it is generated. Please note that the data cache file of the node is saved.</p>
</li>
<li>
<p><code>Address</code></p>
<p><code>Address</code> is a combination of <code>UserId</code>, Address Check Code (<code>Nospam</code>) and <code>Checksum</code>. The current node's <code>Address</code> can be obtained through the <code>ela_get_address()</code> interface. The peer node <code>Address</code> is required only when <code>ela_add_friend</code> is called. The node <code>Address</code> must be obtained through a third-party channel.</p>
</li>
</ul>
</li>
<li>
<p>The role of <code>Address</code></p>
<p>To prevent malicious addition of <code>Friend</code>, <code>Carrier</code> adds <code>Address</code> for being added as <code>Friend</code> by other nodes. If you are harassed, you can reset the <code>Address</code> by calling the <code>ela_set_nospam()</code> interface, and the previous <code>Address</code> will no longer receive any notifications.</p>
</li>
</ol>
<h2><a id="user-content-how-to-use-the-carrier-module" class="anchor" aria-hidden="true" href="#how-to-use-the-carrier-module"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>How to use the <code>Carrier</code> module</h2>
<ol>
<li>
<p><code>Carrier</code> creation and operation</p>
<p>a. Call <code>ela_new()</code> to create and initialize the <code>Carrier</code> and create a <code>Carrier</code> instance.</p>
<p>b. Call <code>ela_run()</code> to run the <code>Carrier</code> node.</p>
</li>
<li>
<p>Several callbacks of the representation status of the <code>Carrier</code> node</p>
<ul>
<li>
<p><code>ready</code></p>
<p>This callback is triggered when the node is ready. The application must wait until this callback before calling api to communicate with friend.</p>
</li>
<li>
<p><code>connection_status</code></p>
<p>This callback is triggered when the connection state of the node changes.</p>
</li>
<li>
<p><code>friend_connection</code></p>
<p>This callback is triggered when the friend's status changes.</p>
</li>
</ul>
</li>
<li>
<p>How to add <code>Friend</code></p>
<p>To add a <code>friend</code> by calling <code>ela_add_friend</code>, you need to pass in the <code>address</code> of the peer. You must have the peer <code>online</code> to be called successfully.</p>
<p>When a node requests to add a friend, the receiver will trigger <code>friend_request</code>, you can choose to call <code>ela_accept_friend()</code> to accept the request, or simply ignore the no processing.</p>
</li>
<li>
<p>How to send a message to a friend</p>
<p>Call <code>ela_send_friend_message()</code> to send a message to your friend. When this method is called, its own node must be in the <code>ready</code> state, and the peer must be in the <code>online</code> state.</p>
</li>
</ol>
<h2><a id="user-content-how-to-use-the-session-module" class="anchor" aria-hidden="true" href="#how-to-use-the-session-module"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>How to use the <code>Session</code> module</h2>
<ol>
<li>
<p>What is <code>Session</code>?</p>
<p>The <code>Carrier Session</code> is a <code>Stream</code> container. You can add multiple <code>Streams</code> in a <code>Session</code> (up to 4), but each time you add a <code>Stream</code>, the system resources consumed will be multiplied. Therefore, the number of <code>Stream</code> is appropriately created according to requirements, not as much as possible.</p>
</li>
<li>
<p><code>Sesion</code> and <code>Carrier</code> initialization sequence</p>
<p>You must have a <code>Carrier</code> instance to allow the <code>ela_session_init()</code> interface to be called to initialize the <code>Session</code> module. You can call <code>ela_session_init()</code> to initialize the <code>Session</code> module before calling the <code>ela_run()</code> interface, or you can call the <code>ela_session_init()</code> interface to initialize the <code>Session</code> module in the <code>ElaCallbacks</code> callback implementation.</p>
</li>
<li>
<p>Prerequisites for calling other interfaces of the <code>Session</code> module</p>
<ul>
<li>The <code>Session</code> module must be initialized by calling the <code>ela_session_init()</code> interface</li>
<li>Must ensure that both nodes of the <code>Session</code> are <code>Friend</code></li>
<li>Must ensure that the peer node is in the <code>Online</code> state (this step must be for <code>ela_session_request/reply_request/start</code>)</li>
</ul>
</li>
<li>
<p><code>Session</code> creation process</p>
<ul>
<li>
<p>Initiator</p>
<p>a. The current node calls <code>ela_session_new()</code> to create a <code>Session</code> instance.</p>
<p>b. Call <code>ela_session_add_stream</code> to add a <code>Stream</code> as needed</p>
<p>c. After waiting for the <code>Stream</code> state to be <code>initilized</code>, call the <code>ela_session_request()</code> interface and send it to the peer friend.</p>
<p>d. After the peer friend <code>reply session</code>, the <code>session_request_oncomplete</code> callback will be triggered. At this time, <code>ela_sesssion_start()</code> can be called to perform <code>session</code> negotiation and start <code>session</code> channel creation.</p>
<p>e. After the <code>Stream</code> status is <code>connected</code>, data can be transferred via <code>ela_write_stream()</code>.</p>
</li>
<li>
<p>Receiving end</p>
<p>a. In the <code>session_request callback</code> trigger reminder to receive a friend <code>session request</code>, call <code>ela_session_new()</code> to create a <code>Session</code> instance.</p>
<p>b. Call <code>ela_session_add_stream</code> to add a <code>Stream</code> as required. The <code>option</code> of the <code>Stream</code> must be the same as the initiator.</p>
<p>c. After waiting for the <code>Stream</code> state to be <code>initilized</code>, respond to the <code>session request</code> of the initiator through the <code>ela_session_reply_request()</code> interface.</p>
<p>d. After waiting for the <code>Stream</code> state to be <code>tansport ready</code>, call <code>ela_sesssion_start()</code> for <code>session</code> negotiation and start <code>session</code> channel creation.</p>
<p>e. After the <code>Stream</code> status is <code>connected</code>, data can be transferred via <code>ela_write_stream()</code>.</p>
</li>
</ul>
<p>After the data communication is completed, the <code>ela_session_close()</code> interface is called to close the <code>Session</code>. Before calling the <code>ela_session_close()</code> interface, it is recommended to call the interface <code>ela_session_remove_stream()</code> to delete all <code>stream</code> instances in the <code>Session</code> container.</p>
<p><code>Session</code> creation process timing diagram:</p>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/carrier_session_sequence_diagram.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/carrier_session_sequence_diagram.png" alt="Timing diagram" style="max-width:100%;"></a></p>
</li>
<li>
<p><code>Stream</code> life cycle</p>
<p>The <code>stream</code> in the <code>Session</code> container has the following states:</p>
<ul>
<li><code>Initalized</code> --- Asynchronous trigger after calling <code>ela_session_add_stream()</code> interface</li>
<li><code>Transport ready</code> --- Asynchronous trigger after calling <code>ela_session_request/reply_request()</code> interface</li>
<li><code>Connecting</code> --- Calling the <code>ela_session_start()</code> interface to trigger</li>
<li><code>Connected</code> --- Asynchronous trigger after calling <code>ela_session_start()</code> interface</li>
<li><code>Deactivated</code> --- Asynchronous trigger after calling <code>ela_session_start()</code> interface</li>
<li><code>Closed</code> --- Trigger when <code>ela_session_closed()</code> is called to close the <code>session</code> instance or when the peer closes the <code>session</code>.</li>
<li><code>Failed</code> --- After the error in the above process</li>
</ul>
</li>
</ol>
<h2><a id="user-content-carrier-error-analysis" class="anchor" aria-hidden="true" href="#carrier-error-analysis"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a><code>Carrier</code> error analysis</h2>
<ol>
<li>
<p><code>ela_get_error()</code> interface</p>
<p>If an error occurs after calling the <code>Carrier</code> interface, the error code can be obtained through the <code>ela_get_error()</code> interface to analyze the cause of the error.</p>
</li>
</ol>
<h2><a id="user-content-thread-in-carrier" class="anchor" aria-hidden="true" href="#thread-in-carrier"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Thread in <code>Carrier</code></h2>
<ol>
<li>
<p><code>Carrier</code> runtime <code>ElaCallbacks</code> trigger thread</p>
<p>All <code>ElaCallbacks</code> associated with the <code>Carrier</code> instance are triggered by threads that call the <code>ela_run()</code> interface, including <code>friend request/added/removed/friend_connection</code>, as well as <code>message</code> receiving and <code>invite/invite reply</code>.</p>
</li>
<li>
<p>Can I complete a <code>carrier</code> based application with a single thread (one thread)?</p>
<p>Yes, but you must consider the application logic with an asynchronous idea. You can create a <code>Carrier</code> instance and run the <code>Carrier</code> with the <code>ela_run()</code> interface on the main thread. The application service can be placed into the <code>on_idle callback</code> to be fragmented after being split.</p>
</li>
<li>
<p>Can I call the <code>Carrier</code> interface in the <code>Carrier Callbacks</code> callback?</p>
<p>Yes, the <code>Carrier</code> interface can be called in <code>Callbacks</code> as long as the call dependency condition of the interface is met. For example, you can call the <code>ela_accept_friend()</code> interface in the <code>friend_request callback</code> to accept the peer as <code>fiend</code>.</p>
</li>
<li>
<p><code>Session</code> module <code>ElaStreamCallbacks</code> trigger thread</p>
<p>The <code>ela_session_new()</code> interface internally creates a <code>worker</code> thread that handles the <code>Session</code> related data reception and callback triggers in <code>ElaStreamCallbacks</code>, including <code>stream_data()</code> to receive stream data.</p>
</li>
<li>
<p>Can I call the <code>Carrier/Session</code> interface in the <code>Session</code> related <code>ElaStreamCallbacks</code> callback?</p>
<p>Yes, the <code>Carrier/Session</code> interface can be called in <code>Callbacks</code> as long as the calling dependency of the called interface is met. For example, you can call <code>ela_session_start</code> in <code>session_request_oncomplete</code> callback to establish a <code>Session</code> connection.</p>
</li>
<li>
<p>The <code>sesssion_request</code> callback is in which thread is triggered to be called</p>
<p>The <code>session_request</code> and <code>session_request_oncomplete</code> callback functions are triggered by the thread that calls the <code>ela_run()</code> interface in the <code>Carrier</code> module, and will not be triggered in the <code>Session</code> related <code>worker</code> thread.</p>
</li>
</ol>
</article>