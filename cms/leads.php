<?php
include "config/db.php";
include "auth/check.php";

$brands = json_decode(file_get_contents("config/brands.json"), true);

$selectedBrand = $_GET['brand'] ?? '';
$selectedCity  = $_GET['city'] ?? '';

$rows = [];

?>

<?php $useDataTables = true; ?>
<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

<div id="mainContent" class="content-wrapper">
    <div class="content">

        <h3 class="mb-4">Leads</h3>

        <!-- FILTERS -->
        <form method="get" class="row g-3 mb-4">

            <div class="col-md-3">
                <label class="form-label">Brand</label>
                <select name="brand" id="brand" class="form-select">
                    <option value="">All Brands</option>
                    <?php foreach ($brands as $key => $b): ?>
                        <option value="<?= $key ?>" <?= ($key === $selectedBrand) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($b['label']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">City</label>
                <select name="city" id="city" class="form-select">
                    <option value="">All Cities</option>
                </select>
            </div>

            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-primary w-100">Filter</button>
            </div>
        </form>

        <!-- LEADS TABLE -->
        <div class="card shadow-sm">
            <div class="card-body table-responsive">
                <table id="leadsTable"
			       class="table table-bordered table-hover align-middle nowrap"
			       style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>Brand</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($brands as $brandKey => $brand) {

                        if ($selectedBrand && $selectedBrand !== $brandKey) {
                            continue;
                        }

                        $table = $brand['table'];

                        $sql = "SELECT name, mobile, email, city, model, salesOrService, created_at
                                FROM `$table` WHERE 1";

                        if ($selectedCity) {
                            $sql .= " AND LOWER(TRIM(city)) = LOWER(TRIM(?))";
                        }

                        $stmt = mysqli_prepare($conn, $sql);

                        if ($selectedCity) {
                            mysqli_stmt_bind_param($stmt, "s", $selectedCity);
                        }

                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>{$brand['label']}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['mobile']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['city']}</td>";
                            echo "<td>{$row['model']}</td>";
                            echo "<td>{$row['salesOrService']}</td>";
                            echo "<td>{$row['created_at']}</td>";
                            echo "</tr>";
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
		const brands = <?= json_encode($brands); ?>;
		const selectedBrand = "<?= $selectedBrand ?>";
		const selectedCity  = "<?= $selectedCity ?>";

		function populateCities(brandKey, selected = '') {
		    let html = '<option value="">All Cities</option>';

		    if (brands[brandKey]) {
		        brands[brandKey].locations.forEach(city => {
		            const sel = (city.toLowerCase() === selected.toLowerCase())
		                ? 'selected'
		                : '';
		            html += `<option value="${city}" ${sel}>${city}</option>`;
		        });
		    }

		    $("#city").html(html);
		}

		/* 🔹 ON PAGE LOAD (for filter via URL) */
		if (selectedBrand) {
		    populateCities(selectedBrand, selectedCity);
		}

		/* 🔹 ON BRAND CHANGE (IMMEDIATE UPDATE) */
		$("#brand").on("change", function () {
		    const brandKey = $(this).val();

		    populateCities(brandKey);     // update city dropdown
		    $("#city").val('');           // reset city selection
		});

		$(document).ready(function () {
		    $('#leadsTable').DataTable({
		        pageLength: 10,
		        lengthMenu: [10, 25, 50, 100],
		        order: [[7, 'desc']], // Created column (0-based index)
		        responsive: true,
		        stateSave: true,
		        language: {
		            search: "_INPUT_",
		            searchPlaceholder: "Search leads..."
		        }
		    });
		});
	</script>

<?php include "partials/footer.php"; ?>
