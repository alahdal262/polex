<!-- need subscription -->
<div class="text-center text-muted">
  {include file='__svg_icons.tpl' icon="locked" class="mb20" width="96px" height="96px"}
  <div class="text-md">
    <span style="padding: 8px 20px; background: #ececec; border-radius: 18px; font-weight: bold;">
      {if $price}
        {__("SUBSCRIBE TO SEE THIS")} {$node_type|upper} {__("CONTENT")}
      {else}
        {__("PAID CONTENT")}
      {/if}
    </span>
  </div>
  {if $price}
    <button class="btn btn-info btn-block rounded rounded-pill mt20" data-toggle="modal" data-url="#payment" data-options='{ "handle": "subscribe", "subscribe": "true", "id": {$node_id}, "node": "{$node_type}", "price": {$price} }'>
      <i class="fa fa-money-check-alt mr5"></i>{__("SUBSCRIBE")} ({print_money($price|number_format:2)} {__("per month")})
    </button>
  {/if}
</div>
<!-- need subscription -->