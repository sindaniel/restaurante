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





// Home > Unidades
Breadcrumbs::for('units', function ($trail) {
    $trail->parent('home');
    $trail->push('Unidades', route('units.index'));
});


// Home > Unidades > Forms
Breadcrumbs::for('units.forms', function ($trail, $text) {
    $trail->parent('units');
    $trail->push($text);
});




// Home > Productos
Breadcrumbs::for('products', function ($trail) {
    $trail->parent('home');
    $trail->push('Productos', route('products.index'));
});


// Home > Productos > Forms
Breadcrumbs::for('products.forms', function ($trail, $text) {
    $trail->parent('products');
    $trail->push($text);
});




