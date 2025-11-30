<?php
// Render the header include
include __DIR__ . '/includes/header.php';
?>
<main class="container my-5 text-center">

    <h1 class="display-4">Access UAV Operations Console</h1>
    <p class="lead">Authorized Pilots Only. Verify mission access to continue.</p>

    <a href="#command" class="btn btn-primary btn-lg mt-3">Enter Command Console</a>

    <section id="command" class="mt-5">
        <h2>System Status: Standby</h2>
        <p>Mission modules will unlock once diagnostics complete.</p>
    </section>

</main>
<?php
// Render the footer include
include __DIR__ . '/includes/footer.php';
?>
