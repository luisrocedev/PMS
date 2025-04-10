<?php
// partials/sidebar.php

$sidebarItems = [
    'dashboard.php'        => 'Inicio',
    'checkin_checkout.php' => 'Check-in/Check-out',
    'ocupacion.php'        => 'Ocupación',
    'reportes.php'         => 'Reportes',
    'clientes.php'         => 'Clientes',
    'empleados.php'        => 'Empleados',
    'habitaciones.php'     => 'Habitaciones',
    'reservas.php'         => 'Reservas',
    'reportes_avanzados.php' => 'Reportes Avanzados',
    'mantenimiento.php'    => 'Mantenimiento',
    'facturas.php'         => 'Facturas',
    'tarifas.php'          => 'Tarifas',
    'calendario.php'       => 'Calendario',
];


?>

<div class="sidebar">
    <?php foreach ($sidebarItems as $file => $label): ?>
        <a href="<?php echo $file; ?>"><?php echo $label; ?></a>
    <?php endforeach; ?>
</div>