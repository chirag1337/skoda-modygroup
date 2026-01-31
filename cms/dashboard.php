<?php
include "config/db.php";
include "auth/check.php";

$brands = json_decode(file_get_contents("config/brands.json"), true);

$totalLeads = 0;
$totalLocations = 0;
?>

<?php include "partials/header.php"; ?>
<?php include "partials/sidebar.php"; ?>

<div id="mainContent" class="content-wrapper">
    <div class="content">

        <h3 class="mb-4">Dashboard Overview</h3>

        <!-- SUMMARY CARDS -->
        <div class="row g-3 mb-4">

            <!-- TOTAL BRANDS -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <small class="text-muted">Total Brands</small>
                        <h3><?= count($brands) ?></h3>
                    </div>
                </div>
            </div>

            <!-- TOTAL LOCATIONS -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <small class="text-muted">Total Locations</small>
                        <h3>
                            <?php
                            foreach ($brands as $b) {
                                $totalLocations += count($b['locations']);
                            }
                            echo $totalLocations;
                            ?>
                        </h3>
                    </div>
                </div>
            </div>

            <!-- TOTAL LEADS -->
            <div class="col-md-4">
                <div class="card shadow-sm text-center">
                    <div class="card-body">
                        <small class="text-muted">Total Leads</small>
                        <h3>
                            <?php
                            foreach ($brands as $b) {
                                $table = $b['table'];
                                $q = mysqli_query(
                                    $conn,
                                    "SELECT COUNT(*) AS cnt FROM `$table`"
                                );
                                $totalLeads += (int)mysqli_fetch_assoc($q)['cnt'];
                            }
                            echo $totalLeads;
                            ?>
                        </h3>
                    </div>
                </div>
            </div>

        </div>

        <!-- BRAND-WISE BREAKDOWN -->
        <?php foreach ($brands as $brandKey => $brand): ?>

        <?php
        $table = $brand['table'];

        // normalize allowed locations from brands.json
        $locations = array_map(
            fn($l) => "'" . strtolower(trim($l)) . "'",
            $brand['locations']
        );
        $locationList = implode(',', $locations);

        // brand total ONLY from valid locations (case-insensitive)
        $qBrand = mysqli_query(
            $conn,
            "SELECT COUNT(*) AS cnt
             FROM `$table`
             WHERE LOWER(TRIM(city)) IN ($locationList)"
        );

        $brandTotal = (int)mysqli_fetch_assoc($qBrand)['cnt'];
        ?>


        <div class="card shadow-sm mb-4">
            <div class="card-header fw-bold">
                <?= htmlspecialchars($brand['label']) ?>
            </div>

            <div class="card-body">
                <div class="row g-3">

                    <!-- BRAND TOTAL -->
                    <div class="col-md-3">
                        <div class="border rounded p-3 text-center">
                            <small class="text-muted">Total Leads</small>
                            <h4 class="mb-0"><?= $brandTotal ?></h4>
                        </div>
                    </div>

                    <!-- LOCATION WISE -->
                    <?php foreach ($brand['locations'] as $loc): ?>

                    <?php
                    $qLoc = mysqli_query(
                        $conn,
                        "SELECT COUNT(*) AS cnt
                         FROM `$table`
                         WHERE LOWER(TRIM(city)) = LOWER(TRIM('$loc'))"
                    );
                    $locCount = (int)mysqli_fetch_assoc($qLoc)['cnt'];
                    ?>

                    <div class="col-md-3">
                        <div class="border rounded p-3 text-center">
                            <small class="text-muted"><?= ucfirst($loc) ?></small>
                            <h4 class="mb-0"><?= $locCount ?></h4>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </div>

<?php include "partials/footer.php"; ?>
