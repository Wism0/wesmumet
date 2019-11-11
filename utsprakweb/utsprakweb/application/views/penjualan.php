<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">List anime</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>



<div class="container">
	<table border='1' id="tabelToko" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
		<thead>
			<tr>
            <th>jenis_operator</th>
            <th>kode_area</th>
            <th>nomor_telpon</th>
            <th>nominal</th>
			</tr>
		</thead>
		<?php
		foreach ($data as $data) {
			?>
				<tr>
					<td><?= $data->jenis_operator ?></td>
                    <td><?= $data->kode_area?></td>
                    <td><?= $data->nomor_telpon?></td>
                    <td><?= $data->nominal?></td>
				</tr>
			<?php
		}
		?>
	</table>
</div>

