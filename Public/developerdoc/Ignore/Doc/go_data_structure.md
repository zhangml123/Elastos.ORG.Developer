<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-overview" class="anchor" aria-hidden="true" href="#overview"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Overview</h1>
<h2><a id="user-content-1data-structure" class="anchor" aria-hidden="true" href="#1data-structure"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.data structure</h2>
<h3><a id="user-content-11-data-structure" class="anchor" aria-hidden="true" href="#11-data-structure"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1. data structure</h3>
<h4><a id="user-content-payload-information" class="anchor" aria-hidden="true" href="#payload-information"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>payload Information</h4>
<div class="highlight highlight-source-go"><pre><span class="pl-k">type</span> <span class="pl-v">PayloadInfo</span> <span class="pl-k">interface</span>{}

<span class="pl-k">type</span> <span class="pl-v">RechargeToSideChainInfo</span> <span class="pl-k">struct</span> {
    <span class="pl-v">MainChainTransactionHash</span> <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"mainchaintxhash"<span class="pl-pds">`</span></span>
}

<span class="pl-k">type</span> <span class="pl-v">CrossChainAssetInfo</span> <span class="pl-k">struct</span> {
    <span class="pl-v">CrossChainAddress</span> <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"crosschainaddress"<span class="pl-pds">`</span></span>
    <span class="pl-v">OutputIndex</span>       <span class="pl-k">uint64</span> <span class="pl-s"><span class="pl-pds">`</span>json:"outputindex"<span class="pl-pds">`</span></span>
    <span class="pl-v">CrossChainAmount</span>  <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"crosschainamount"<span class="pl-pds">`</span></span>
}

<span class="pl-k">type</span> <span class="pl-v">TransferCrossChainAssetInfo</span> <span class="pl-k">struct</span> {
    <span class="pl-v">CrossChainAssets</span> []<span class="pl-v">CrossChainAssetInfo</span> <span class="pl-s"><span class="pl-pds">`</span>json:"crosschainassets"<span class="pl-pds">`</span></span>
}</pre></div>
<h4><a id="user-content-transaction-information" class="anchor" aria-hidden="true" href="#transaction-information"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>transaction information</h4>
<div class="highlight highlight-source-go"><pre><span class="pl-k">type</span> <span class="pl-v">InputInfo</span> <span class="pl-k">struct</span> {
   <span class="pl-v">TxID</span>     <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"txid"<span class="pl-pds">`</span></span>
   <span class="pl-v">VOut</span>     <span class="pl-k">uint16</span> <span class="pl-s"><span class="pl-pds">`</span>json:"vout"<span class="pl-pds">`</span></span>
   <span class="pl-v">Sequence</span> <span class="pl-k">uint32</span> <span class="pl-s"><span class="pl-pds">`</span>json:"sequence"<span class="pl-pds">`</span></span>
}

<span class="pl-k">type</span> <span class="pl-v">OutputInfo</span> <span class="pl-k">struct</span> {
   <span class="pl-v">Value</span>      <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"value"<span class="pl-pds">`</span></span>
   <span class="pl-v">Index</span>      <span class="pl-k">uint32</span> <span class="pl-s"><span class="pl-pds">`</span>json:"n"<span class="pl-pds">`</span></span>
   <span class="pl-v">Address</span>    <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"address"<span class="pl-pds">`</span></span>
   <span class="pl-v">OutputLock</span> <span class="pl-k">uint32</span> <span class="pl-s"><span class="pl-pds">`</span>json:"outputlock"<span class="pl-pds">`</span></span>
}

<span class="pl-k">type</span> <span class="pl-v">AttributeInfo</span> <span class="pl-k">struct</span> {
   <span class="pl-v">Usage</span> <span class="pl-v">AttributeUsage</span> <span class="pl-s"><span class="pl-pds">`</span>json:"usage"<span class="pl-pds">`</span></span>
   <span class="pl-v">Data</span>  <span class="pl-k">string</span>         <span class="pl-s"><span class="pl-pds">`</span>json:"data"<span class="pl-pds">`</span></span>
}

<span class="pl-k">type</span> <span class="pl-v">ProgramInfo</span> <span class="pl-k">struct</span> {
    <span class="pl-v">Code</span>      <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"code"<span class="pl-pds">`</span></span>
    <span class="pl-v">Parameter</span> <span class="pl-k">string</span> <span class="pl-s"><span class="pl-pds">`</span>json:"parameter"<span class="pl-pds">`</span></span>
}

<span class="pl-k">type</span> <span class="pl-v">TransactionInfo</span> <span class="pl-k">struct</span> {
   <span class="pl-v">TxId</span>           <span class="pl-k">string</span>          <span class="pl-s"><span class="pl-pds">`</span>json:"txid"<span class="pl-pds">`</span></span>
   <span class="pl-v">Payload</span>        <span class="pl-v">PayloadInfo</span>     <span class="pl-s"><span class="pl-pds">`</span>json:"payload"<span class="pl-pds">`</span></span>
}</pre></div>
<h4><a id="user-content-transaction-type" class="anchor" aria-hidden="true" href="#transaction-type"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>transaction type</h4>
<div class="highlight highlight-source-go"><pre><span class="pl-k">type</span> <span class="pl-v">TransactionType</span> <span class="pl-k">byte</span>

<span class="pl-k">const</span> (
    <span class="pl-v">CoinBase</span>                <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x00</span>
    <span class="pl-v">RegisterAsset</span>           <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x01</span>
    <span class="pl-v">TransferAsset</span>           <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x02</span>
    <span class="pl-v">Record</span>                  <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x03</span>
    <span class="pl-v">Deploy</span>                  <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x04</span>
    <span class="pl-v">SideChainPow</span>            <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x05</span>
    <span class="pl-v">RechargeToSideChain</span>     <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x06</span>
    <span class="pl-v">WithdrawFromSideChain</span>   <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x07</span>
    <span class="pl-v">TransferCrossChainAsset</span> <span class="pl-v">TransactionType</span> = <span class="pl-c1">0x08</span>
)</pre></div>
<p>error code and message</p>
<div class="highlight highlight-source-json"><pre>const (
    Error                   ErrCode = <span class="pl-c1">-1</span>
    Success                 ErrCode = <span class="pl-c1">0</span>
    ErrInvalidInput         ErrCode = <span class="pl-c1">45003</span>
    ErrInvalidOutput        ErrCode = <span class="pl-c1">45004</span>
    ErrAssetPrecision       ErrCode = <span class="pl-c1">45005</span>
    ErrTransactionBalance   ErrCode = <span class="pl-c1">45006</span>
    ErrAttributeProgram     ErrCode = <span class="pl-c1">45007</span>
    ErrTransactionSignature ErrCode = <span class="pl-c1">45008</span>
    ErrTransactionPayload   ErrCode = <span class="pl-c1">45009</span>
    ErrDoubleSpend          ErrCode = <span class="pl-c1">45010</span>
    ErrTxHashDuplicate      ErrCode = <span class="pl-c1">45011</span>
    ErrSidechainTxDuplicate ErrCode = <span class="pl-c1">45012</span>
    ErrMainchainTxDuplicate ErrCode = <span class="pl-c1">45013</span>
    ErrXmitFail             ErrCode = <span class="pl-c1">45014</span>
    ErrTransactionSize      ErrCode = <span class="pl-c1">45015</span>
    ErrUnknownReferedTxn    ErrCode = <span class="pl-c1">45016</span>
    ErrInvalidReferedTxn    ErrCode = <span class="pl-c1">45017</span>
    ErrIneffectiveCoinbase  ErrCode = <span class="pl-c1">45018</span>
    ErrUTXOLocked           ErrCode = <span class="pl-c1">45019</span>
    ErrRechargeToSideChain  ErrCode = <span class="pl-c1">45020</span>

    SessionExpired          ErrCode = <span class="pl-c1">41001</span>
    IllegalDataFormat       ErrCode = <span class="pl-c1">41003</span>
    PowServiceNotStarted    ErrCode = <span class="pl-c1">41004</span>
    InvalidMethod           ErrCode = <span class="pl-c1">42001</span>
    InvalidParams           ErrCode = <span class="pl-c1">42002</span>
    InvalidToken            ErrCode = <span class="pl-c1">42003</span>
    InvalidTransaction      ErrCode = <span class="pl-c1">43001</span>
    InvalidAsset            ErrCode = <span class="pl-c1">43002</span>
    UnknownTransaction      ErrCode = <span class="pl-c1">44001</span>
    UnknownAsset            ErrCode = <span class="pl-c1">44002</span>
    UnknownBlock            ErrCode = <span class="pl-c1">44003</span>
    InternalError           ErrCode = <span class="pl-c1">45002</span>
)

var ErrMap = map[<span class="pl-ii">ErrCode</span>]string{
    <span class="pl-ii">Error</span>:                   <span class="pl-s"><span class="pl-pds">"</span>Unclassified error<span class="pl-pds">"</span></span>,
    <span class="pl-ii">Success</span>:                 <span class="pl-s"><span class="pl-pds">"</span>Success<span class="pl-pds">"</span></span>,
    <span class="pl-ii">SessionExpired</span>:          <span class="pl-s"><span class="pl-pds">"</span>Session expired<span class="pl-pds">"</span></span>,
    <span class="pl-ii">IllegalDataFormat</span>:       <span class="pl-s"><span class="pl-pds">"</span>Illegal Dataformat<span class="pl-pds">"</span></span>,
    <span class="pl-ii">PowServiceNotStarted</span>:    <span class="pl-s"><span class="pl-pds">"</span>pow service not started<span class="pl-pds">"</span></span>,
    <span class="pl-ii">InvalidMethod</span>:           <span class="pl-s"><span class="pl-pds">"</span>Invalid method<span class="pl-pds">"</span></span>,
    <span class="pl-ii">InvalidParams</span>:           <span class="pl-s"><span class="pl-pds">"</span>Invalid Params<span class="pl-pds">"</span></span>,
    <span class="pl-ii">InvalidToken</span>:            <span class="pl-s"><span class="pl-pds">"</span>Verify token error<span class="pl-pds">"</span></span>,
    <span class="pl-ii">InvalidTransaction</span>:      <span class="pl-s"><span class="pl-pds">"</span>Invalid transaction<span class="pl-pds">"</span></span>,
    <span class="pl-ii">InvalidAsset</span>:            <span class="pl-s"><span class="pl-pds">"</span>Invalid asset<span class="pl-pds">"</span></span>,
    <span class="pl-ii">UnknownTransaction</span>:      <span class="pl-s"><span class="pl-pds">"</span>Unknown Transaction<span class="pl-pds">"</span></span>,
    <span class="pl-ii">UnknownAsset</span>:            <span class="pl-s"><span class="pl-pds">"</span>Unknown asset<span class="pl-pds">"</span></span>,
    <span class="pl-ii">UnknownBlock</span>:            <span class="pl-s"><span class="pl-pds">"</span>Unknown Block<span class="pl-pds">"</span></span>,
    <span class="pl-ii">InternalError</span>:           <span class="pl-s"><span class="pl-pds">"</span>Internal error<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrUTXOLocked</span>:           <span class="pl-s"><span class="pl-pds">"</span>Error utxo locked<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrInvalidInput</span>:         <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrInvalidInput<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrInvalidOutput</span>:        <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrInvalidOutput<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrAssetPrecision</span>:       <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrAssetPrecision<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrTransactionBalance</span>:   <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrTransactionBalance<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrAttributeProgram</span>:     <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrAttributeProgram<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrTransactionSignature</span>: <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrTransactionSignature<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrTransactionPayload</span>:   <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrTransactionPayload<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrDoubleSpend</span>:          <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrDoubleSpend<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrTxHashDuplicate</span>:      <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrTxHashDuplicate<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrXmitFail</span>:             <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrXmitFail<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrTransactionSize</span>:      <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrTransactionSize<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrUnknownReferedTxn</span>:    <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrUnknownReferedTxn<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrInvalidReferedTxn</span>:    <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrInvalidReferedTxn<span class="pl-pds">"</span></span>,
    <span class="pl-ii">ErrIneffectiveCoinbase</span>:  <span class="pl-s"><span class="pl-pds">"</span>INTERNAL ERROR, ErrIneffectiveCoinbase<span class="pl-pds">"</span></span>,
}</pre></div>
<h3><a id="user-content-12-sample-recharge-to-side-chain-transaction" class="anchor" aria-hidden="true" href="#12-sample-recharge-to-side-chain-transaction"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2. sample recharge to side chain transaction</h3>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>764342ae4a9a60e02a28339b9302871973fd60c25ca79380064dd09dcf14aeb0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>hash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>764342ae4a9a60e02a28339b9302871973fd60c25ca79380064dd09dcf14aeb0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>size<span class="pl-pds">"</span></span>:<span class="pl-c1">555</span>,
    <span class="pl-s"><span class="pl-pds">"</span>vsize<span class="pl-pds">"</span></span>:<span class="pl-c1">555</span>,
    <span class="pl-s"><span class="pl-pds">"</span>version<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>locktime<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>vin<span class="pl-pds">"</span></span>:[],
    <span class="pl-s"><span class="pl-pds">"</span>vout<span class="pl-pds">"</span></span>:[{
        <span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>0.00100000<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>n<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>address<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>outputlock<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>
    }],
    <span class="pl-s"><span class="pl-pds">"</span>blockhash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>9a89993bed88466e91b81cf86ad9ca31613837bfdf823e0f13199a06eddcf8a5<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>confirmations<span class="pl-pds">"</span></span>:<span class="pl-c1">4427</span>,
    <span class="pl-s"><span class="pl-pds">"</span>time<span class="pl-pds">"</span></span>:<span class="pl-c1">1536918424</span>,
    <span class="pl-s"><span class="pl-pds">"</span>blocktime<span class="pl-pds">"</span></span>:<span class="pl-c1">1536918424</span>,
    <span class="pl-s"><span class="pl-pds">"</span>type<span class="pl-pds">"</span></span>:<span class="pl-c1">6</span>,
    <span class="pl-s"><span class="pl-pds">"</span>payloadversion<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>payload<span class="pl-pds">"</span></span>:{
   <span class="pl-s"><span class="pl-pds">"</span>mainchaintxhash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>6685c5608de13be95badfd4605bab372276a7cad09202a810169185be31f247d<span class="pl-pds">"</span></span>
    },
    <span class="pl-s"><span class="pl-pds">"</span>attributes<span class="pl-pds">"</span></span>:[{
        <span class="pl-s"><span class="pl-pds">"</span>usage<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>data<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>313338333534343230383237303133343633<span class="pl-pds">"</span></span>
    }],
     <span class="pl-s"><span class="pl-pds">"</span>programs<span class="pl-pds">"</span></span>:[]
}</pre></div>
<h3><a id="user-content-13-sample-withdraw-transaction-on-side-chain" class="anchor" aria-hidden="true" href="#13-sample-withdraw-transaction-on-side-chain"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3. sample withdraw transaction on side chain</h3>
<div class="highlight highlight-source-json"><pre>{
   <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>e30e315681fc104820737baa41e65eb0668d979f81c4169708f72801a0046683<span class="pl-pds">"</span></span>,
   <span class="pl-s"><span class="pl-pds">"</span>hash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>e30e315681fc104820737baa41e65eb0668d979f81c4169708f72801a0046683<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>size<span class="pl-pds">"</span></span>:<span class="pl-c1">282</span>,
                <span class="pl-s"><span class="pl-pds">"</span>vsize<span class="pl-pds">"</span></span>:<span class="pl-c1">282</span>,
                <span class="pl-s"><span class="pl-pds">"</span>version<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
                <span class="pl-s"><span class="pl-pds">"</span>locktime<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
                <span class="pl-s"><span class="pl-pds">"</span>vin<span class="pl-pds">"</span></span>:[
                    {
       <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>5228401cca844cc51b255e675cd56bf8b8bce585b19398958829301b617836b6<span class="pl-pds">"</span></span>,
                        <span class="pl-s"><span class="pl-pds">"</span>vout<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
                        <span class="pl-s"><span class="pl-pds">"</span>sequence<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>
                    }
                ],
                <span class="pl-s"><span class="pl-pds">"</span>vout<span class="pl-pds">"</span></span>:[
                    {
                        <span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>0.96000000<span class="pl-pds">"</span></span>,
                        <span class="pl-s"><span class="pl-pds">"</span>n<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
                        <span class="pl-s"><span class="pl-pds">"</span>address<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>0000000000000000000000000000000000<span class="pl-pds">"</span></span>,
                        <span class="pl-s"><span class="pl-pds">"</span>outputlock<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>
                    }
                ],
                <span class="pl-s"><span class="pl-pds">"</span>blockhash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>d77a9e0db69dd815f2b5c004852ad7b0b8782ba74aa475f6e1cec203b9ab2bb8<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>confirmations<span class="pl-pds">"</span></span>:<span class="pl-c1">8</span>,
                <span class="pl-s"><span class="pl-pds">"</span>time<span class="pl-pds">"</span></span>:<span class="pl-c1">1537503765</span>,
                <span class="pl-s"><span class="pl-pds">"</span>blocktime<span class="pl-pds">"</span></span>:<span class="pl-c1">1537503765</span>,
                <span class="pl-s"><span class="pl-pds">"</span>type<span class="pl-pds">"</span></span>:<span class="pl-c1">8</span>,
                <span class="pl-s"><span class="pl-pds">"</span>payloadversion<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
                <span class="pl-s"><span class="pl-pds">"</span>payload<span class="pl-pds">"</span></span>:{
                    <span class="pl-s"><span class="pl-pds">"</span>crosschainassets<span class="pl-pds">"</span></span>:[{
                          <span class="pl-s"><span class="pl-pds">"</span>crosschainaddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB<span class="pl-pds">"</span></span>,
                       <span class="pl-s"><span class="pl-pds">"</span>outputindex<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
                       <span class="pl-s"><span class="pl-pds">"</span>crosschainamount<span class="pl-pds">"</span></span>:<span class="pl-c1">95000000</span>
                    }]
                },
                <span class="pl-s"><span class="pl-pds">"</span>attributes<span class="pl-pds">"</span></span>:[{
                    <span class="pl-s"><span class="pl-pds">"</span>usage<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
                    <span class="pl-s"><span class="pl-pds">"</span>data<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>2d36393130383137303436333135373037373130<span class="pl-pds">"</span></span>
                }],
                <span class="pl-s"><span class="pl-pds">"</span>programs<span class="pl-pds">"</span></span>:[{
 <span class="pl-s"><span class="pl-pds">"</span>code<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>21037f3caede72447b6082c1e8f7705ffd1ed6e24f348130d34cbc7c0a35c9e993f5ac<span class="pl-pds">"</span></span>,
 <span class="pl-s"><span class="pl-pds">"</span>parameter<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>406c9fa867dfb54051ea75932782914fb2212c8c5f3c46b6a27fb50dadf1ca4ee5e699dcf8b7f098745457dc75d3f41f2263dd46a6a06aebdccac8d668d4429ebd<span class="pl-pds">"</span></span>}]
}</pre></div>
<h2><a id="user-content-2-rpc-interface" class="anchor" aria-hidden="true" href="#2-rpc-interface"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2. rpc interface</h2>
<h3><a id="user-content-21-getblockcount" class="anchor" aria-hidden="true" href="#21-getblockcount"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1. getblockcount</h3>
<p>description: get block count</p>
<p>argument sample:</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>method<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>getblockcount<span class="pl-pds">"</span></span>
}</pre></div>
<p>result sample:</p>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>result<span class="pl-pds">"</span></span>: <span class="pl-c1">171454</span>,
    <span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span>: <span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>error<span class="pl-pds">"</span></span>: <span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>jsonrpc<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>2.0<span class="pl-pds">"</span></span>,
}</pre></div>
<h3><a id="user-content-22-sendtransactioninfo" class="anchor" aria-hidden="true" href="#22-sendtransactioninfo"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2. sendtransactioninfo</h3>
<p>description: send recharge to side chain transaction to transaction pool</p>
<p>argument sample:</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>method<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>sendtransactioninfo<span class="pl-pds">"</span></span>,
  <span class="pl-s"><span class="pl-pds">"</span>params<span class="pl-pds">"</span></span>:{
  <span class="pl-s"><span class="pl-pds">"</span>info<span class="pl-pds">"</span></span>:{
    <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>764342ae4a9a60e02a28339b9302871973fd60c25ca79380064dd09dcf14aeb0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>hash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>764342ae4a9a60e02a28339b9302871973fd60c25ca79380064dd09dcf14aeb0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>size<span class="pl-pds">"</span></span>:<span class="pl-c1">555</span>,
    <span class="pl-s"><span class="pl-pds">"</span>vsize<span class="pl-pds">"</span></span>:<span class="pl-c1">555</span>,
    <span class="pl-s"><span class="pl-pds">"</span>version<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>locktime<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>vin<span class="pl-pds">"</span></span>:[],
    <span class="pl-s"><span class="pl-pds">"</span>vout<span class="pl-pds">"</span></span>:[{
        <span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>0.00100000<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>n<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>address<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>outputlock<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>
    }],
    <span class="pl-s"><span class="pl-pds">"</span>blockhash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>9a89993bed88466e91b81cf86ad9ca31613837bfdf823e0f13199a06eddcf8a5<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>confirmations<span class="pl-pds">"</span></span>:<span class="pl-c1">4427</span>,
    <span class="pl-s"><span class="pl-pds">"</span>time<span class="pl-pds">"</span></span>:<span class="pl-c1">1536918424</span>,
    <span class="pl-s"><span class="pl-pds">"</span>blocktime<span class="pl-pds">"</span></span>:<span class="pl-c1">1536918424</span>,
    <span class="pl-s"><span class="pl-pds">"</span>type<span class="pl-pds">"</span></span>:<span class="pl-c1">6</span>,
    <span class="pl-s"><span class="pl-pds">"</span>payloadversion<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
    <span class="pl-s"><span class="pl-pds">"</span>payload<span class="pl-pds">"</span></span>:{
   <span class="pl-s"><span class="pl-pds">"</span>mainchaintxhash<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>6685c5608de13be95badfd4605bab372276a7cad09202a810169185be31f247d<span class="pl-pds">"</span></span>
    },
    <span class="pl-s"><span class="pl-pds">"</span>attributes<span class="pl-pds">"</span></span>:[{
        <span class="pl-s"><span class="pl-pds">"</span>usage<span class="pl-pds">"</span></span>:<span class="pl-c1">0</span>,
        <span class="pl-s"><span class="pl-pds">"</span>data<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>313338333534343230383237303133343633<span class="pl-pds">"</span></span>
    }],
     <span class="pl-s"><span class="pl-pds">"</span>programs<span class="pl-pds">"</span></span>:[]
    }
  }
}</pre></div>
<p>result sample:</p>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>error<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>jsonrpc<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>2.0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>result<span class="pl-pds">"</span></span>:[<span class="pl-s"><span class="pl-pds">"</span>764342ae4a9a60e02a28339b9302871973fd60c25ca79380064dd09dcf14aeb0<span class="pl-pds">"</span></span>]
}</pre></div>
<p>if the recharge to side chain transaction double spend, need to return ErrDoubleSpend error</p>
<p>if the recharge to side chain transaction  duplicated, need to return ErrMainchainTxDuplicate error</p>
<h3><a id="user-content-23-getwithdrawtransaction" class="anchor" aria-hidden="true" href="#23-getwithdrawtransaction"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.3. getwithdrawtransaction</h3>
<p>description: get transaction information by hash for check tx3</p>
<p>parameters:</p>
<table>
<thead>
<tr>
<th>name</th>
<th>type</th>
<th>description</th>
</tr>
</thead>
<tbody>
<tr>
<td>txid</td>
<td>string</td>
<td>the hash of transaction</td>
</tr>
</tbody>
</table>
<p>arguments sample:</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>method<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>getwithdrawtransaction<span class="pl-pds">"</span></span>,
  <span class="pl-s"><span class="pl-pds">"</span>params<span class="pl-pds">"</span></span>: {
           <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>e30e315681fc104820737baa41e65eb0668d979f81c4169708f72801a0046683<span class="pl-pds">"</span></span>
  }
}</pre></div>
<p>result sample:</p>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>error<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>jsonrpc<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>2.0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>result<span class="pl-pds">"</span></span>: {
          <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>e30e315681fc104820737baa41e65eb0668d979f81c4169708f72801a0046683<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>crosschainassets<span class="pl-pds">"</span></span>:[
             {
                <span class="pl-s"><span class="pl-pds">"</span>crosschainaddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>crosschainamount<span class="pl-pds">"</span></span>:<span class="pl-c1">95000000</span>
             },
             {
                <span class="pl-s"><span class="pl-pds">"</span>crosschainaddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EYN7QVArMS23YtCxTEbTiy3EfZjD1Vk86M<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>crosschainamount<span class="pl-pds">"</span></span>:<span class="pl-c1">5000000</span>
             }
          ]
    }
}</pre></div>
<h3><a id="user-content-24-getwithdrawtransactionsbyheight" class="anchor" aria-hidden="true" href="#24-getwithdrawtransactionsbyheight"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.4. getwithdrawtransactionsbyheight</h3>
<p>description: get withdraw transactions by block height</p>
<p>parameters:</p>
<table>
<thead>
<tr>
<th>name</th>
<th>type</th>
<th>description</th>
</tr>
</thead>
<tbody>
<tr>
<td>height</td>
<td>integer</td>
<td>the height of block chain</td>
</tr>
</tbody>
</table>
<p>arguments sample:</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>method<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>getwithdrawtransactionsbyheight<span class="pl-pds">"</span></span>,
  <span class="pl-s"><span class="pl-pds">"</span>params<span class="pl-pds">"</span></span>:{
      <span class="pl-s"><span class="pl-pds">"</span>height<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>1<span class="pl-pds">"</span></span>
  }
}</pre></div>
<p>result sample:</p>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>error<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>jsonrpc<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>2.0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>result<span class="pl-pds">"</span></span>:[
       {
          <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>e30e315681fc104820737baa41e65eb0668d979f81c4169708f72801a0046683<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>crosschainassets<span class="pl-pds">"</span></span>:[
             {
                <span class="pl-s"><span class="pl-pds">"</span>crosschainaddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>crosschainamount<span class="pl-pds">"</span></span>:<span class="pl-c1">95000000</span>
             },
             {
                <span class="pl-s"><span class="pl-pds">"</span>crosschainaddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EYN7QVArMS23YtCxTEbTiy3EfZjD1Vk86M<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>crosschainamount<span class="pl-pds">"</span></span>:<span class="pl-c1">5000000</span>
             }
          ]
       },
       {
          <span class="pl-s"><span class="pl-pds">"</span>txid<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>6685c5608de13be95badfd4605bab372276a7cad09202a810169185be31f247d<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>crosschainassets<span class="pl-pds">"</span></span>:[
             {
                <span class="pl-s"><span class="pl-pds">"</span>crosschainaddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EQSpUzE4XYJhBSx5j7Tf2cteaKdFdixfVB<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>crosschainamount<span class="pl-pds">"</span></span>:<span class="pl-c1">1000000</span>
             },
             {
                <span class="pl-s"><span class="pl-pds">"</span>crosschainaddress<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>EYN7QVArMS23YtCxTEbTiy3EfZjD1Vk86M<span class="pl-pds">"</span></span>,
                <span class="pl-s"><span class="pl-pds">"</span>crosschainamount<span class="pl-pds">"</span></span>:<span class="pl-c1">2000000</span>
             }
          ]
       }
    ]
}</pre></div>
<h3><a id="user-content-25-getexistdeposittransactions" class="anchor" aria-hidden="true" href="#25-getexistdeposittransactions"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.5. getexistdeposittransactions</h3>
<p>description: check deposit transactions and return existed transactions</p>
<p>parameters:</p>
<table>
<thead>
<tr>
<th>name</th>
<th>type</th>
<th>description</th>
</tr>
</thead>
<tbody>
<tr>
<td>txs</td>
<td>[]string</td>
<td>hashes of deposit transactions</td>
</tr>
</tbody>
</table>
<p>arguments sample:</p>
<div class="highlight highlight-source-json"><pre>{
  <span class="pl-s"><span class="pl-pds">"</span>method<span class="pl-pds">"</span></span>: <span class="pl-s"><span class="pl-pds">"</span>getexistdeposittransactions<span class="pl-pds">"</span></span>,
  <span class="pl-s"><span class="pl-pds">"</span>params<span class="pl-pds">"</span></span>: {
      <span class="pl-s"><span class="pl-pds">"</span>txs<span class="pl-pds">"</span></span>: [
          <span class="pl-s"><span class="pl-pds">"</span>164691821f937fd566bcf533611a5e5b193008ea1ba1396f67b7b0da22717c01<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>264691821f937fd566bcf533611a5e5b193008ea1ba1396f67b7b0da22717c02<span class="pl-pds">"</span></span>,
          <span class="pl-s"><span class="pl-pds">"</span>364691821f937fd566bcf533611a5e5b193008ea1ba1396f67b7b0da22717c03<span class="pl-pds">"</span></span>
      ]
  }
}</pre></div>
<p>result sample:</p>
<div class="highlight highlight-source-json"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>error<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span>:<span class="pl-c1">null</span>,
    <span class="pl-s"><span class="pl-pds">"</span>jsonrpc<span class="pl-pds">"</span></span>:<span class="pl-s"><span class="pl-pds">"</span>2.0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>result<span class="pl-pds">"</span></span>:{
    <span class="pl-s"><span class="pl-pds">"</span>txs<span class="pl-pds">"</span></span>: [
        <span class="pl-s"><span class="pl-pds">"</span>264691821f937fd566bcf533611a5e5b193008ea1ba1396f67b7b0da22717c02<span class="pl-pds">"</span></span>,
        <span class="pl-s"><span class="pl-pds">"</span>364691821f937fd566bcf533611a5e5b193008ea1ba1396f67b7b0da22717c03<span class="pl-pds">"</span></span>
     ]
    }
}</pre></div>
<h3><a id="user-content-26-rpc-error" class="anchor" aria-hidden="true" href="#26-rpc-error"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.6. rpc error</h3>
<div class="highlight highlight-source-js"><pre>{
    <span class="pl-s"><span class="pl-pds">"</span>jsonrpc<span class="pl-pds">"</span></span><span class="pl-k">:</span> <span class="pl-s"><span class="pl-pds">"</span>2.0<span class="pl-pds">"</span></span>,
    <span class="pl-s"><span class="pl-pds">"</span>error<span class="pl-pds">"</span></span><span class="pl-k">:</span> {
        <span class="pl-s"><span class="pl-pds">"</span>code<span class="pl-pds">"</span></span><span class="pl-k">:</span> error code,
        <span class="pl-s"><span class="pl-pds">"</span>message<span class="pl-pds">"</span></span><span class="pl-k">:</span> error message,
        <span class="pl-s"><span class="pl-pds">"</span>id<span class="pl-pds">"</span></span><span class="pl-k">:</span> error id,
     }
}</pre></div>
</article>