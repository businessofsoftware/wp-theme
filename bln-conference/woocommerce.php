<?php

	get_header();
	get_template_part('content', 'register-full-width');
?>

<style type="text/css">
	
.product .onsale, .product .woocommerce-product-gallery, .product .woocommerce-tabs, .product .related, .product .product_meta {
	display: none;
}

.product-thumbnail {
	display: none;
}

.product .price {
	color: black;
    margin-top: 20px;
    font-weight: bold;
}

.quantity-label {
	color: #000;
}

.product del {
	color: gray;
}

.product h1 {
	font-size: 36px;
}

.product h3 {
	font-size: 24px;
}

.product .woocommerce-product-details__short-description {
	margin-bottom: 20px;
}

.product input.qty {
	padding: 6px;
	font-weight: bold;
}

.product .wc-box-office-ticket-fields {
	margin-bottom: 40px;
}

.product button {
	color: #fff !important;
    background: rgb(238,94,48);
    font-size: 1.5em;
    box-shadow: 2px 3px #000;
    border: none;
    border-radius: 1.55em;
    cursor: pointer;
    display: inline-block;
    padding: .667em 1.333em;
    text-align: center;
    text-decoration: none;
    overflow-wrap: break-word;
}

.product input[type=text], .product input[type=email] {
	width: 300px;
}

.woocommerce-notices-wrapper {
	margin-bottom: 20px;
}

.woocommerce-notices-wrapper .button {
	padding: 0.0em 1.0em;
}

.product .form-row label {
    display: inline-block;
    width: 100%;
	color: #000;
	font-size: 14px;
	font-weight: 400;
}

.product .ticket-field-option-label {
	margin-left: 20px;
	font-weight: 100 !important;
}

.woocommerce {
	margin-top: 40px;
}

</style>


<script type="text/javascript">
	$( document ).ready(function() {

		$( ".quantity" ).prepend( "<span class='quantity-label'>Quantity: </span>" );

	});
</script>


<section>

	<div class="container-outer bk-white overflow">
		<div class="container-inner" style="padding: 40px">
			<div class="content-main">
				<?php
					woocommerce_content();
				?>
			</div>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>

