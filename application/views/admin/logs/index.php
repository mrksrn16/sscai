<div>
	<h3 style="text-transform: capitalize;"><?php echo $page;?></h3> 
	<?php echo form_open('admin/logs/filter');?>
	<small>Filter:</small>
		<input type="date" name="date" class="form-control" onchange="this.form.submit()" value="<?php echo $date;?>" style="width: 320px;">
	</form>
</div>
<div style="margin-top: 10px;">
<button class="btn btn-success" onclick="printDiv('printableArea')" >Print</button>
	<table class="table table-bordered" style="margin-top: 10px;">

		<tr>
			<th>Date</th>
			<th>User</th>
			<th style="">Transaction</th>
		</tr>
		<!-- <?php var_dump($result);?> -->
		<?php if(count($result)):?>
		<?php foreach($result as $r):?>
		<tr>
			<td><?php echo $r->datetime;?></td>
			<td>
				<?php
					if($r->user_id) {
						$this->db->where('user_id', $r->user_id);
						$usr = $this->db->get('user_details')->row();
						echo $usr->name;
					}
				?>		
			</td>
			<td><?php echo $r->transaction;?></td>
		</tr>
		<?php endforeach;?>
		<?php else: ?>
			<tr>
				<td colspan="4">No results found.</td>
			</tr>
		<?php endif;?>
	</table>
	<?php if($result):?>
		<div style="text-align: center;">
	        <?php echo $this->pagination->create_links();?> 
	    </div>
	<?php endif;?>
</div>
<div id="printableArea" style="display: none;">
	<h3>Audit Trail/Logs</h3>
	<table class="table table-bordered" style="margin-top: 10px;">
	<tr>
		<th>Date</th>
		<th>User</th>
		<th style="">Transaction</th>
	</tr>
	<?php if(count($printLogs)):?>
	<?php foreach($printLogs as $print):?>
	<tr>
		<td><?php echo $print->datetime;?></td>
		<td>
			<?php
				if($print->user_id) {
					$this->db->where('user_id', $print->user_id);
					$usr = $this->db->get('user_details')->row();
					echo $usr->name;
				}
			?>		
		</td>
		<td><?php echo $print->transaction;?></td>
	</tr>
	<?php endforeach;?>
	<?php else: ?>
		<tr>
			<td colspan="4">No results found.</td>
		</tr>
	<?php endif;?>
</table>
</div>
<script type="text/javascript">
	//print div
  function printDiv(divName) {
   var printContents = document.getElementById(divName).innerHTML;
   var originalContents = document.body.innerHTML;
   document.body.innerHTML = printContents;
   window.print();
   document.body.innerHTML = originalContents;
  }
</script>