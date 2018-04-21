<!-- Main Content -->
<div class="page-container" id="PageContainer">
		<main class="main-content" id="MainContent" role="main">
			<section class="heading-content">
				<div class="heading-wrapper">
					<div class="container">
						<div class="row">
							<div class="page-heading-inner heading-group">
								<div class="breadcrumb-group">
									<h1 class="hidden">Wish List</h1>
									<div class="breadcrumb clearfix">
										<span><a href="<?=base_url();?>" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
										</span>
										<span class="arrow-space"></span>
										<span>
											<a href="<?=base_url();?>Pizza/show_wishlist" title="Wish List" itemprop="url"><span itemprop="title">Wish List</span></a>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="container wishlist-page shop_area">
				<div class="row">
					<div id="wishlistcontent">
						<span class="wishlist-count"> Total Wish list <h2><?= $wish_total;?></h2> </span>
						<ul>
							<li class="wishlist-heading">
								<div class="wishlist-image">
									Image
								</div>
								<div class="wishlist-name">
									Name
								</div>
								<div class="wishlist-price">
									Price
								</div>
								<div class="wishlist-addCart">
									Add to cart
								</div>
								<div class="wishlist-remove">
									Remove
								</div>
							</li>
							<?php foreach($data as $d){ ?>
							<?php $p_i=explode(",",$d->p_img); ?>
							<li class="wlr wishlist-juice-ice-tea-1 wishlist-added">
								<div class="wishlist-image"><?php echo anchor('Pizza/product_info/?pid='.$d->w_prod_id, str_ireplace("height='100' width='100'","",$p_i[0])) ?></div>
								<div class="wishlist-name"><?php echo anchor('Pizza/product_info/?pid='.$d->w_prod_id, $d->p_name) ?></div>
								<div class="wishlist-price">
									<span class="price">
										<span class="money fa fa-rupee" ><?= getPrice($d->p_price,$d->p_discount);?></span>
									</span>
								</div>
								<div class="wishlist-addCart">
									<a data-productid="<?= $d->w_prod_id; ?>" data-productname="<?=  $d->p_name; ?>"
								                              data-productprize="<?=  getPrice($d->p_price,$d->p_discount) ?>"
								                              data-productimg="<?=getImgUrl($p_i[0])?>" class="_btn add-to-cart" type="submit" name="add"><span><i class="cs-icon icon-cart"></i>Add to cart</span></a>
								</div>
								<div class="wishlist-remove" data-wishlisthandle="juice-ice-tea-1">									
									<?php echo anchor('Pizza/remove_wishlist/?id='.$d->w_id, '<span class="cs-icon icon-bin"></span>',array("onclick"=>"return confirm('Are you sure want to remove from Wishlist?')")) ?>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</main>
	</div>
<script>
$(document).ready(function(){
	// disply_cart();
	$(".add-to-cart").click(function(){
		
			var p_id=$(this).data("productid");
			var p_name=$(this).data("productname");
			var p_price=$(this).data("productprize");
			var p_img=$(this).data("productimg");
			
			$.ajax({
				url:"<?= base_url(); ?>Pizza/cart_insert",
				method:"post",
				data:{id:p_id,name:p_name,price:p_price,img:p_img}
			})
			.done(function(msg){
				 $("#getmsg").html(msg);
				$("#mymodel").modal('show');
			});
	})	;	
});
</script>
<div class="modal fade" id="mymodel" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Add cart</h4>
        </div>
        <div class="modal-body">
          <p class="" id="getmsg"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>