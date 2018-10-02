<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Inicio', route('home'));
});


// Home > Provedores
Breadcrumbs::for('suppliers', function ($trail) {
    $trail->parent('home');
    $trail->push('Proveedores', route('suppliers.index'));
});



// Home > Provedores > Forms
Breadcrumbs::for('suppliers.forms', function ($trail, $text) {
    $trail->parent('suppliers');
    $trail->push($text);
});



// Home > Grupos
Breadcrumbs::for('groups', function ($trail) {
    $trail->parent('home');
    $trail->push('Grupos', route('groups.index'));
});


// Home > Grupos > Forms
Breadcrumbs::for('groups.forms', function ($trail, $text) {
    $trail->parent('groups');
    $trail->push($text);
});
