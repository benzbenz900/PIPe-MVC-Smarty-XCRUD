{if !isset($title) }
{$title="lnwPHP"}
{/if}

{include file="header.tpl"}

<div class="album py-5">
	<div class="container">

		<div class="row">
			<div class="col-md-8">

				{if !isset($pageview) }

				{include file="viewLayout/main_view.tpl"}

				{else}

				{include file="viewLayout/{$pageview}_view.tpl"}
				
				{/if}
				

			</div>
			<div class="col-md-4">

				{include file="viewLayout/sidebar_view.tpl"}

			</div>

		</div>
	</div>
</div>


{include file="footer.tpl"}