<?php
function getFooter() {
    ob_start();
    ?>
    <footer class="container mt-5">
        <div class="d-flex justify-content-md-center py-3 border-top">
            <p class="text-muted">
                Copyright 2025
            </p>
        </div>
    </footer>
    <?php
    return ob_get_clean();
}
?>