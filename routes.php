<?php
return [
    'GET' => [
        '/' => ['StaticContentController', 'renderContent', "landing", ["title" => "Home"]],
        '/dashboard' => ['StaticContentController', 'renderContent', "dashboard/dashboard", ["title" => "Dashboard..."]],
        '/dashboard/ventas' => ['StaticContentController', 'renderContent', "dashboard/ventas", ["title" => "Ventas"]],
        '/dashboard/productos' => ['StaticContentController', 'renderContent', "dashboard/productos", ["title" => "Productos"]],
        '/dashboard/registroproducto' => ['StaticContentController', 'renderContent', "dashboard/registroproducto", ["title" => "Load Products"]],
        '/dashboard/almacen' => ['StaticContentController', 'renderContent', "dashboard/almacen", ["title" => "Almacén"]],
        '/contact' => ['StaticContentController', 'renderContent', 'contact', ["title" => "Contact"]],
        '/new-client' => ['StaticContentController', 'renderContent', 'new-client', ["title" => "Adding client..."]],
        '/new-added-client' => ['ClientsController', 'confirmation', 'new-added-client', ["title" => "Added!"]],
        '/login' => ['StaticContentController', 'renderContent', 'login/login', ["title" => "Login"]],
        '/signup' => ['StaticContentController', 'renderContent', 'login/signup', ["title" => "Registro!"]],
        '/reset-password' => ['StaticContentController', 'renderContent', 'login/reset-password', ["title" => "Registro"]],
    ],
    'POST' => [
        '/new-client' => ['ClientsController', 'addNewClient'],
    ],
];
