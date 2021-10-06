<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.cards.index', function ($trail) {
    $trail->push('Cards List', route('admin.cards.index'));
});


Breadcrumbs::for('admin.emailtool.index', function ($trail) {
    $trail->push('Email Tools', route('admin.emailtool.index'));
});

Breadcrumbs::for('admin.emailtool.email_orders.index', function ($trail) {
    $trail->push('Email Orders', route('admin.emailtool.email_orders.index'));
});

Breadcrumbs::for('admin.emailtool.email_orders.show', function ($trail) {
    $trail->push('Open Email Campaign', route('admin.emailtool.email_orders.show',1));
});





require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
