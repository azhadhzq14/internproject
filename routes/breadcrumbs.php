<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('admin.dashboardmms', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboardmms'));
});
//Dashboard > Module Learning
Breadcrumbs::for('admin.modulelearning', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboardmms');
    $trail->push('Tahap Pendidikan', route('admin.modulelearning'));
});
//Dashboard > Module Learning > Pra sekolah
Breadcrumbs::for('admin.prasekolah', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.modulelearning');
    $trail->push('Pra Sekolah', route('admin.prasekolah'));
});

//Dashboard > Module Learning > Sek Rendah
Breadcrumbs::for('admin.sekren', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.modulelearning');
    $trail->push('Sekolah Rendah', route('admin.sekren'));
    
});
//Dashboard > Module Learning > Sek Menengah
Breadcrumbs::for('admin.sekmen', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.modulelearning');
    $trail->push('Sekolah Menengah', route('admin.sekmen'));
    
});


//Dashboard > Contributor
Breadcrumbs::for('admin.contributor', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboardmms');
    $trail->push('Author/Contributor', route('admin.contributor'));
});
//Dashboard > Contributor > [Listcontributor]
Breadcrumbs::for('admin.listcontributor', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.contributor');
    $trail->push('Senarai Author/Contributor', route('admin.listcontributor'));
});
//Dashboard > Contributor > List Contributor > Add Contributor
Breadcrumbs::for('admin.addcontributor', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.listcontributor');
    $trail->push('Daftar Author/Contributor', route('admin.addcontributor'));
});
//Dashboard > Contributor > List Contributor > Detail Contributor
Breadcrumbs::for('admin.detailcontributor', function (BreadcrumbTrail $trail, $details_author) {
    $trail->parent('admin.listcontributor');
    $trail->push('Senarai Author/Contributor', route('admin.detailcontributor', $details_author));
});

// Home > Blog > [Category]
//Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//    $trail->parent('blog');
//    $trail->push($category->title, route('category', $category));
//});
