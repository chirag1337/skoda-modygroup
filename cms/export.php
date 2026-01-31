<?php
include "config/db.php";
include "auth/check.php";

$brands = json_decode(file_get_contents("config/brands.json"), true);
?>

<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

<div id="mainContent" class="content-wrapper">
    <div class="content">

	    <h3 class="mb-4">Export</h3>

		<div class="card shadow-sm">
		    <div class="card-body">
		        <div class="row g-3">
				    <div class="col-md-3">
				        <label class="form-label">Brand</label>
				        <select id="brand" class="form-select">
				            <option value="">Select Brand</option>
				            <?php foreach ($brands as $key => $brand): ?>
				                <option value="<?= $key ?>">
				                    <?= htmlspecialchars($brand['label']) ?>
				                </option>
				            <?php endforeach; ?>
				        </select>
				    </div>

				    <div class="col-md-3">
				        <label class="form-label">City</label>
				        <select id="city" class="form-select">
						    <option value="all">All Cities</option>
						</select>
				    </div>

				    <div class="col-md-2">
				        <label class="form-label">Start Date</label>
				        <input type="date" id="start_date" class="form-control">
				    </div>

				    <div class="col-md-2">
				        <label class="form-label">End Date</label>
				        <input type="date" id="end_date" class="form-control">
				    </div>

				    <div class="col-md-2 d-flex align-items-end">
				        <button id="downloadBtn" class="btn btn-success w-100">
				            <i class="bi bi-download me-1"></i> Download
				        </button>
				    </div>
				</div>

		    </div>
		</div>

	</div>

	<script>
		const brands = <?= json_encode($brands); ?>;

		$("#brand").on("change", function () {
		    const brandKey = $(this).val();
		    let options = '<option value="all">All Cities</option>';

		    if (brands[brandKey]) {
		        brands[brandKey].locations.forEach(city => {
		            options += `<option value="${city}">${city}</option>`;
		        });
		    }

		    $("#city").html(options);
		});

		$("#downloadBtn").on("click", function () {
		    const brand = $("#brand").val();
		    const city = $("#city").val();
		    const start = $("#start_date").val();
		    const end = $("#end_date").val();

		    if (!brand) {
		        alert("Please select brand");
		        return;
		    }

		    window.location =
		        "ajax/export_leads.php?" +
		        $.param({
		            brand: brand,
		            city: city,
		            start: start,
		            end: end
		        });
		});
	</script>

<?php include "partials/footer.php"; ?>
