{if !isset($title) }
{$title="lnwPHP"}
{/if}

{include file="header.tpl"}

<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
}

@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}
</style>

<div class="album py-5 bg-light">
	<div class="container">

		<div class="row">

			<div class="col-md-12">

				{include file="viewLayout/main_view.tpl"}

			</div>
			

		</div>
	</div>
</div>


{include file="footer.tpl"}