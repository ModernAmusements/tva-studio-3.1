<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Shop', route('shop.home.index'));
});

// Sing In
Breadcrumbs::for('register', function ($trail) {
    $trail->parent('home');
    $trail->push('Registrieren', route('customer.register.index'));
});

// log In
Breadcrumbs::for('login', function ($trail) {
    $trail->parent('register');
    $trail->push('Anmelden', route('customer.session.index'));
});


// Profile Index
Breadcrumbs::for('profileIndex', function ($trail) {
    $trail->parent('home');
    $trail->push('Konto', route('customer.profile.index'));
});

// Profile Edit
Breadcrumbs::for('profileEdit', function ($trail) {
    $trail->parent('profileIndex');
    $trail->push('Bearbeiten', route('customer.profile.edit'));
});

Breadcrumbs::for('profileAddress', function ($trail) {
    $trail->parent('profileIndex');
    $trail->push('Anschrift', route('customer.address.index'));
});

Breadcrumbs::for('profileReviews', function ($trail) {
    $trail->parent('profileIndex');
    $trail->push('Bewertungen', route('customer.reviews.index'));
});

Breadcrumbs::for('profileWishlist', function ($trail) {
    $trail->parent('profileIndex');
    $trail->push('Wunschzettel', route('customer.wishlist.index'));
});


Breadcrumbs::for('profileCompare', function ($trail) {
    $trail->parent('profileIndex');
    $trail->push('Artikel vergleichen', route('velocity.product.compare'));
});

Breadcrumbs::for('profileOrders', function ($trail) {
    $trail->parent('profileIndex');
    $trail->push('Aufträge prüfen', route('customer.orders.index'));
});


Breadcrumbs::for('profileDownload', function ($trail) {
    $trail->parent('profileIndex');
    $trail->push('Produkte zum Herunterladen', route('customer.downloadable_products.index'));
});




// Product
Breadcrumbs::for('product', function ($trail) {
    $trail->parent('home');
    $trail->push('Produkt', route('shop.home.index'));
});


// Product
Breadcrumbs::for('cart', function ($trail) {
    $trail->parent('product');
    $trail->push('Warenkorb', route('shop.checkout.cart.index'));
});

// Product
Breadcrumbs::for('checkout', function ($trail) {
    $trail->parent('cart');
    $trail->push('Kasse', route('shop.checkout.onepage.index'));
});

Breadcrumbs::for('orderSuccess', function ($trail) {
    $trail->parent('checkout');
    $trail->push('Erfolgreich', route('shop.checkout.success'));
});






