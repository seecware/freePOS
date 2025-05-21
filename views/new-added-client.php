<h1 class="text-2xl font-bold mb-4"><?= htmlspecialchars($title) ?></h1>

<p>El cliente fue agregado exitosamente:</p>

<ul class="mt-4 space-y-1">
    <li><strong>Nombre:</strong> <?= htmlspecialchars($client['first_name']) ?> <?= htmlspecialchars($client['last_name']) ?></li>
    <li><strong>Teléfono:</strong> <?= htmlspecialchars($client['phone']) ?></li>
    <li><strong>Email:</strong> <?= htmlspecialchars($client['email']) ?></li>
</ul>
