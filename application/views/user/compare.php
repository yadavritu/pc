<!-- Main Content -->
<div class="page-container" id="PageContainer">
	<main class="main-content" id="MainContent" role="main">
		<section class="heading-content">
			<div class="heading-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-heading-inner heading-group">
							<div class="breadcrumb-group">
								<h1 class="hidden">Compare</h1>
								<div class="breadcrumb clearfix">
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="" title="Pizza Corner" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a>
									</span>
									<span class="arrow-space"></span>
									<span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
										<a href="" title="Compare" itemprop="url"><span itemprop="title">Compare</span></a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php error_reporting(0); ?>
		<?php if(get_cookie("compare")!==''){ ?>	
		<section class="page-content compare-page">
			<div class="page-content-wrapper">
				<div class="container">
					<div class="row">
						<div class="page-content-inner">
							<div class="main-content">
								<div id="comparecontent">
									<span class="compare-count"><?= count(unserialize(get_cookie("compare"))); ?> Saved products</span>
									<ul>
										
										
										<?php  $data=array_unique(unserialize(get_cookie("compare")));
										
										$count=0;
												foreach($data as $data1)
												{
													$p=$this1->get_product($data1);
													foreach($p as $pro){}
													$i=explode(",",$pro->p_img);
										?>
										<li class="compare ">
											<div class="compare-remove"><a href="<?= base_url() ?>Pizza/remoce_compare/?id=<?= $pro->p_id; ?>&count=<?= $count; ?>"><span class="cs-icon icon-close"><a></span></div>
											<div class=""><?= str_ireplace("height='50' width='50'",'height="100"',$i[0]);?></div>
											<div class="compare-name"><a href="product.html"><?= $pro->p_name; ?></a></div>
											<div class="compare-price"><span class="price"><span class="money fa fa-rupee"><?= $pro->p_price; ?></span></span>
											<div class="compare-price"><span class="price"><span class="money">Discount <?= $pro->p_discount; ?>%</span></span>
											<div class="compare-price"><span class="price"><span class="money">Tag :<?= $pro->p_tag; ?></span></span>
											<div class="compare-price"><span class="price"><span class="money">Available In :<?= $pro->p_pizza_size; ?></span></span>
											</div>
											</li>
										
										
									<?php $count++; } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php } else{ ?>
		 <center>No Product Yet</center>
		<?php } ?>
	</main>
</div>		