<div class="row">
	<div class="col-sm-12">
		<table class="skyblue">
			<thead>
				<tr>
					<th>S.N</th>
					<th>Product No</th>
					<th>Views</th>
					<th>Likes</th>
					<th>Share</th>
					<th>Country</th>
					<th>City</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$itemid = 0;
				 	$cnt = 0;
					$visits = 0;
					$likes = 0;
					$shares = 0;
				?>
				<?php foreach ($product_history as $key=>$product_history_stat) { ?>
				<tr>
					<td><?php echo $key+1;?></td>
					<td><?php echo $product_history_stat['model_no'];?></td>
					<td><?php echo $product_history_stat['visits'];?></td>
					<td><?php echo $product_history_stat['likes'];?></td>
					<td><?php echo $product_history_stat['shares'];?></td>
					<td><?php echo !empty($product_history_stat['country_name']) ? $product_history_stat['country_name']:'Unknown';?></td>
					<td><?php echo !empty($product_history_stat['city_name']) ? $product_history_stat['city_name']:'Unknown';?></td>
					<td><?php echo date('d M Y',strtotime($product_history_stat['visit_date']));?></td>
				</tr>
				<?php 
					if($itemid == 0 || $itemid != $product_history_stat['item_id']) {
						$cnt++;
					} 
					$visits = $visits + $product_history_stat['visits'];
					$likes = $likes + $product_history_stat['likes'];
					$shares = $shares + $product_history_stat['shares'];
					$itemid = $product_history_stat['item_id'];
				?>
				<?php } ?>
				<tr>
					<td style="border:0px;"></td>
					<td style="border:0px;"><strong><?php echo $cnt;?></strong></td>
					<td style="border:0px;"><strong><?php echo $visits;?></strong></td>
					<td style="border:0px;"><strong><?php echo $likes;?></td>
					<td style="border:0px;"><strong><?php echo $shares;?></strong></td>
					<td style="border:0px;"></td>
					<td style="border:0px;"></td>
					<td style="border:0px;"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<br>
