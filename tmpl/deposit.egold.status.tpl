{include file="header.tpl"}
<h3>Your Deposit status</h3><br>
<br>
{if $process eq 'yes' || $frm.m_status eq 'success'}
We have received your deposit. Thank you!
{else}
We have not received your deposit. Please try again.
{/if}
{include file="footer.tpl"}