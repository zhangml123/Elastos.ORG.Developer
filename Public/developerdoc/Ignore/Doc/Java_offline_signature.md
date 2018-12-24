<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-java-offline-signature-tool" class="anchor" aria-hidden="true" href="#java-offline-signature-tool"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Java offline signature tool</h1>
<h2><a id="user-content-1-there-are-two-ways-to-get-the-jar-package" class="anchor" aria-hidden="true" href="#1-there-are-two-ways-to-get-the-jar-package"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 There are two ways to get the jar package</h2>
<h3><a id="user-content-11-download-the-latest-version-of-the-jar-package" class="anchor" aria-hidden="true" href="#11-download-the-latest-version-of-the-jar-package"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1 Download the latest version of the jar package</h3>
<pre><code>URL: https://github.com/elastos/Elastos.ELA.Utilities.Java/releases

Download: Elastos.ELA.Utilities.Java_v0.1.*.jar
</code></pre>
<h3><a id="user-content-12-download-the-source-code-compile-the-jar-package" class="anchor" aria-hidden="true" href="#12-download-the-source-code-compile-the-jar-package"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2 Download the source code, compile the jar package</h3>
<pre><code>URL: https://github.com/elastos/Elastos.ELA.Utilities.Java
</code></pre>
<ul>
<li>
<p>Compile the jar package</p>
<pre><code>File -&gt; Project Structure -&gt; Artifacts -&gt; + -&gt; JAR -&gt; From modules with
1、-&gt; Main Class
2、-&gt; extract to the target JAR
3、-&gt; META-INF PATH （C:\DNA\src\ela_tool\src\main\resources）
4、ok -&gt;  Include in project build -&gt; Apply -&gt;ok
</code></pre>
</li>
<li>
<p>Delete signature jar package dependencies, must be used</p>
<pre><code>Command: zip -d Elastos.ELA.Utilities.Java 'META-INF/*.SF' 'META-INF/*.RSA' 'META-INF/*SF'
</code></pre>
</li>
</ul>
<h3><a id="user-content-13-start-jar-package" class="anchor" aria-hidden="true" href="#13-start-jar-package"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3 Start jar package</h3>
<pre><code>Recommended java version: 1.8

Start command: java -cp Elastos.ELA.Utilities.v0.1.*.Java  org.elastos.elaweb.HttpServer

Web service default port: 8989, can be modified
</code></pre>
<h2><a id="user-content-2-mainchain---mainchain-transfer" class="anchor" aria-hidden="true" href="#2-mainchain---mainchain-transfer"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 MainChain - MainChain transfer</h2>
<h3><a id="user-content-21-single-sign-to-create-a-transaction-two-ways-automatically-get-utxo-and-manually-get-utxo" class="anchor" aria-hidden="true" href="#21-single-sign-to-create-a-transaction-two-ways-automatically-get-utxo-and-manually-get-utxo"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1 Single sign to create a transaction two ways (automatically get utxo and manually get utxo)</h3>
<h4><a id="user-content-211-automatically-get-utxo-also-known-as-non-offline-signature" class="anchor" aria-hidden="true" href="#211-automatically-get-utxo-also-known-as-non-offline-signature"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1.1 Automatically get utxo, also known as non-offline signature</h4>
<ul>
<li>
<p>Feature</p>
<ul>
<li>Convenient trading, no need to calculate utxo</li>
<li>Instead of calculating the amount of the change address, get the utxo sorted from small to large, and automatically calculate the change amount based on the output (outputs) amount.</li>
</ul>
</li>
<li>
<p>Parameter Description</p>
<ul>
<li>The <code>java-config.json</code> file needs to be placed in the same directory of the java program, in order to connect to the node to get utxo.</li>
<li>Host: Server ip and rpc port where the node program is located.</li>
<li>Fee: The transaction fee stipulated by both parties is the same for a single output or multiple output transaction fees for a transaction.</li>
<li>Confirmation: The number of times the block confirms the transaction, that is, the number of blocks; 16 confirmed numbers are recommended.</li>
<li>PrivateKey: Input (transfer) requires the private key of the address, the java program internally obtains utxo.</li>
<li>Outputs: Recharge address and amount</li>
<li>Amount:The unit is ELA,Namely:289.1ELA</li>
<li>ChangeAddress: Change the address after the transfer, the change amount is automatically processed by the java program</li>
<li>The input amount is less than the output amount, and the prompt amount is insufficient.</li>
</ul>
</li>
<li>
<p>Interface name: genRawTransactionByPrivateKey</p>
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
                            "amount":"289.1"
                        },
                        {
                            "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
                            "amount":"2.1"
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
<h3><a id="user-content-212-manually-get-utxo-also-known-as-offline-signature" class="anchor" aria-hidden="true" href="#212-manually-get-utxo-also-known-as-offline-signature"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1.2 Manually get utxo, also known as offline signature</h3>
<ul>
<li>
<p>Feature</p>
<ul>
<li>Offline signature to secure your account</li>
</ul>
</li>
<li>
<p>Parameter Description</p>
<ul>
<li>Need to calculate the change address balance, change the balance = inputs-outputs-fee, write the change address and balance in the last line of outputs.</li>
<li>txid: The transaction where the available balance of the address is located, the information returned by the following interface txid is written here.</li>
<li>index: The serial number in the transaction where the balance is available, the information returned by the interface vout is <code>index</code>.</li>
<li>address: The address of outputs is the outgoing address.</li>
<li>privateKey: Private key corresponding to the address.</li>
<li>amount: The unit is ELA,Namely:289.1ELA</li>
</ul>
</li>
<li>
<p>listunspent (Get the utxo interface by address)</p>
<ul>
<li>This interface is the ela node rpc interface</li>
</ul>
<pre><code> Get txid、index:

 request

 {
     "method":"listunspent",
     "params":{"addresses": ["EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB"]}
 }

 response
 {
     "error": null,
     "id": null,
     "jsonrpc": "2.0",
     "result": [
         {
             "assetid": "a3d0eaa466df74983b5d7c543de6904f4c9418ead5ffd6d25814234a96db37b0",
             "txid": "9132cf82a18d859d200c952aec548d7895e7b654fd1761d5d059b91edbad1768",
             "vout": 0,
             "address": "EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
             "amount": "33000000",
             "confirmations": 1102
         },
         {
             "assetid": "a3d0eaa466df74983b5d7c543de6904f4c9418ead5ffd6d25814234a96db37b0",
             "txid": "3edbcc839fd4f16c0b70869f2d477b56a006d31dc7a10d8cb49bd12628d6352e",
             "vout": 0,
             "address": "EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
             "amount": "0.01255707",
             "confirmations": 846
         }
     ]
 }
</code></pre>
</li>
<li>
<p>Interface name: genRawTransaction</p>
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
                            "txid":"9132cf82a18d859d200c952aec548d7895e7b654fd1761d5d059b91edbad1768",
                            "index":0,
                            "privateKey":"5FA927E5664E563F019F50DCD4D7E2D9404F2D5D49E31F9482912E23D6D7B9EB"
                        },
                        {
                            "txid":"3edbcc839fd4f16c0b70869f2d477b56a006d31dc7a10d8cb49bd12628d6352e",
                            "index":0,
                            "privateKey":"A65E9FB6735C5FD33F839036B15D2DA373E15AED38054B69386E322C6BE52994"
                        }
                    ],
                    "Outputs":[
                        {
                            "address":"ERz34iKa4nGaGYVtVpRWQZnbavJEe6PRDt",
                            "amount":"30000000"
                        },
                        {
                            "address":"EKjeZEmLSXyyJ42xxjJP4QsKJYWwEXabuC",
                            "amount":"240"
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
<h2><a id="user-content-3-mainchain---sidechain-transfer" class="anchor" aria-hidden="true" href="#3-mainchain---sidechain-transfer"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3. MainChain - SideChain transfer</h2>
<h3><a id="user-content-31-single-sign-to-create-a-transaction-two-ways-automatically-get-utxo-and-manually-get-utxo" class="anchor" aria-hidden="true" href="#31-single-sign-to-create-a-transaction-two-ways-automatically-get-utxo-and-manually-get-utxo"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1 Single sign to create a transaction two ways (automatically get utxo and manually get utxo)</h3>
<h4><a id="user-content-311-automatically-get-utxo-also-known-as-non-offline-signature" class="anchor" aria-hidden="true" href="#311-automatically-get-utxo-also-known-as-non-offline-signature"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1.1 Automatically get utxo, also known as non-offline signature</h4>
<ul>
<li>
<p>Feature</p>
<ul>
<li>Convenient trading, no need to calculate utxo</li>
<li>You do not need to calculate the amount of the change address, get the utxo sorted from small to large, and automatically calculate the change amount based on the output (outputs) amount.</li>
</ul>
</li>
<li>
<p>Parameter Description</p>
<ul>
<li>java-config.json file needs to be placed in the same directory of the java program, the purpose is to connect the node to get utxo</li>
<li>Host: server ip and rpc port where the node program is located</li>
<li>Fee: The transaction fee specified by both parties is the same for a single output or multiple output transaction fees for a transaction.</li>
<li>Confirmation: the number of times the block confirms the transaction, that is, the number of blocks; 16 confirmed numbers are recommended.</li>
<li>PrivateKey: input (inputs) transfer requires the private key of the address, java program internally obtain utxo</li>
<li>Outputs: address is the x address generated by the SideChain creation block hash, this transfer is recharge (MainChain - SideChain transfer)
<ul>
<li>If the address is "0000000000000000000000000000000000", this transfer is for the currency (SideChain - MainChain transfer)</li>
<li>Use this interface to raise coins, you should pay attention to the port of java-config host as SideChain rpc port</li>
<li>amount: the amount transferred out, long type</li>
</ul>
</li>
<li>CrossChainAsset: address is the SideChain address, amount &lt;= outputs amount - fee</li>
<li>ChangeAddress: the address to change to zero after the transfer, the zero amount of the java program is automatically processed</li>
<li>The input amount is less than the output amount, and the prompt amount is insufficient.</li>
</ul>
</li>
<li>
<p>Interface name: genCrossChainTxByPrivateKey</p>
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
    "method":"genCrossChainTxByPrivateKey",
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
                            "amount":"1000"
                        }
                    ],
                    "CrossChainAsset":[
                        {
                            "address":"ESH5SrT7GZ4uxTH6aQF3ne7X8AUzWdREzz",
                            "amount":"20.1"
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
    "Action": "genCrossChainTxByPrivateKey",
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
<h3><a id="user-content-312-manually-get-utxo-also-known-as-offline-signature" class="anchor" aria-hidden="true" href="#312-manually-get-utxo-also-known-as-offline-signature"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.1.2 Manually get utxo, also known as offline signature</h3>
<ul>
<li>
<p>Feature</p>
<ul>
<li>Offline signature to secure your account</li>
</ul>
</li>
<li>
<p>Parameter Description</p>
<ul>
<li>java program amount is the smallest unit 1 Serra (1 ela = 100000000 sela (100 million sela)), can only be a positive integer</li>
<li>Need to calculate the change address balance, change the balance = inputs-outputs-fee, write the change address and balance in the last line of outputs</li>
<li>txid: the transaction where the available balance of the address is located, the information txid returned by the following interface is written here.</li>
<li>index: the serial number in the transaction where the available balance is located. The information returned by the interface vout is <code>index</code>.</li>
<li>Outputs: address is the x address generated by the SideChain creation block hash, this transfer is recharge (MainChain - SideChain transfer)
<ul>
<li>If the address is "0000000000000000000000000000000000", this transfer is for the currency (SideChain - MainChain transfer)</li>
<li>Use this interface to raise coins, you should pay attention to the port of java-config host as SideChain rpc port</li>
<li>amount: the amount transferred out, long type</li>
</ul>
</li>
<li>privateKey: the private key corresponding to the input address, the same address can only write one private key.</li>
<li>CrossChainAsset: address is the SideChain address, amount &lt;= outputs amount - fee</li>
</ul>
</li>
<li>
<p>Interface name: genCrossChainTx</p>
<ul>
<li>
<p>Request</p>
<pre><code>{
    "method":"genCrossChainTx",
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
                            "amount":"200.123"
                        },
                        {
                            "address":"EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB",
                            "amount":"23.1"
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
                            "amount":"200.12"
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
    "Action": "genCrossChainTx",
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
<h2><a id="user-content-4-send-transaction" class="anchor" aria-hidden="true" href="#4-send-transaction"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4 Send transaction</h2>
<ul>
<li>
<p>The sending transaction is the node <code>rpc</code> interface, java does not provide the sending transaction interface.</p>
</li>
<li>
<p>sendrawtransaction</p>
<ul>
<li>
<p>Request</p>
<pre><code>Post request: http://127.0.0.1:20336 (20336 is the node default port)

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
<h2><a id="user-content-5-web-rpc-interface" class="anchor" aria-hidden="true" href="#5-web-rpc-interface"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5 web rpc interface</h2>
<h3><a id="user-content-51-decoderawtransactionanti-parse-rawtransaction" class="anchor" aria-hidden="true" href="#51-decoderawtransactionanti-parse-rawtransaction"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.1 decodeRawTransaction（Anti-parse rawTransaction）</h3>
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
<h3><a id="user-content-52-genprivatekeygenerate-private-key" class="anchor" aria-hidden="true" href="#52-genprivatekeygenerate-private-key"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.2 genPrivateKey（Generate private key）</h3>
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
<h3><a id="user-content-53-genpublickeygenerate-public-key" class="anchor" aria-hidden="true" href="#53-genpublickeygenerate-public-key"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.3 genPublicKey（Generate public key）</h3>
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
<h3><a id="user-content-54-genaddressgenerate-address" class="anchor" aria-hidden="true" href="#54-genaddressgenerate-address"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.4 genAddress（Generate address）</h3>
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
<h3><a id="user-content-55-gen_priv_pub_addrgenerate-private-key-public-key-address" class="anchor" aria-hidden="true" href="#55-gen_priv_pub_addrgenerate-private-key-public-key-address"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.5 gen_priv_pub_addr（Generate private key, public key, address）</h3>
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
<h3><a id="user-content-56-checkaddress-check-address" class="anchor" aria-hidden="true" href="#56-checkaddress-check-address"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.6 checkAddress (Check address)</h3>
<ul>
<li>
<p>Request</p>
<pre><code>Check address support map format and array format

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
<h3><a id="user-content-57-gengenesisaddress-creation-block-hash-generation-x-address" class="anchor" aria-hidden="true" href="#57-gengenesisaddress-creation-block-hash-generation-x-address"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.7 genGenesisAddress (creation block hash generation x address)</h3>
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