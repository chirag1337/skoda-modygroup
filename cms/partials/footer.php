</div> <!-- end .content -->

    <footer class="footer bg-light text-center py-3">
        <small>© 2026 Leads CMS</small>
    </footer>
</div> <!-- end .content-wrapper -->

<!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
$("#sidebarToggle").on("click", function () {
    $("#sidebar").toggleClass("collapsed");
    $("#mainContent").toggleClass("collapsed");
});
</script>

<?php if (!empty($useDataTables)): ?>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<?php endif; ?>


</body>
</html>
