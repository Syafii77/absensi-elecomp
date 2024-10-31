<?php

use App\Controllers\AuthController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);;
$routes->get('/', 'AuthController::login');
$routes->get('/home', 'Home::index');
$routes->get('/signUp', 'AuthController::signUp');
$routes->post('/signUp', 'AuthController::tambahUser');
$routes->get('/riwayat', 'historyUserController::riwayat');
$routes->get('/piket', 'PiketController::piket');
$routes->get('/checklist', 'ChecklistController::checklist');

$routes->get('/dashboardadmin', 'DashboardAdmin::index', ['filter' => 'admin']);
$routes->get('/verifyuser/updateVerifikasi/(:num)/(:alpha)', 'VerifyUser::updateVerifikasi/$1/$2',['filter' => 'admin']);
$routes->get('/verifyuser', 'VerifyUser::index', ['filter' => 'admin']);
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::authenticate');

$routes->get('/izin-form', 'IzinController::index');
$routes->post('/izin-form', 'IzinController::store');

$routes->get('/check-in-form', 'CheckInController::index');
$routes->post('/check-in-form', 'CheckInController::store');
$routes->get('/checkout', 'CheckoutController::index');
$routes->post('/checkout', 'CheckoutController::checkout');
$routes->get('/success-check-in', 'SuccesCheckInController::index');
$routes->get('/pending-check-in', 'PendingCheckInController::index');
$routes->get('/success-izin', 'SuccesIzinController::index');
$routes->get('/success-checkout', 'SuccessCheckoutController::index');

$routes->post('/piket-form', 'PiketController::piketForm');
$routes->get('/success-piket', 'PiketController::sukses_piket');

$routes->get('/lokasiSemua', 'LokasiController::index',['filter' => 'admin']);
$routes->get('/logout', 'AuthController::logout');
$routes->get('/user-list', 'UserListController::index',['filter' => 'admin']);
$routes->get('/detail-user/(:num)', 'UserListController::detail/$1');
$routes->get('/detail-user/edit-user/(:num)', 'UserListController::edit/$1');
$routes->post('/detail-user/update-user/(:num)', 'UserListController::update/$1');
$routes->get('/trouble-form', 'TroubleFormController::index');
$routes->get('/help-support', 'HelpSupportController::index');
$routes->post('delete-user/(:num)', 'UserListController::delete/$1',['filter' => 'admin']);
$routes->post('/markAlpha','MarkAlphaController::markAlpha',['filter' => 'admin']);

$routes->post('/deleteFoto','deleteFotoController::deleteAll');
$routes->get('RekapitulasiAbsen/updateStatusAlpha/(:num)', 'MarkAlphaController::updateStatusAlpha/$1',['filter' => 'admin']);
$routes->group('', ['filter' => 'admin'], function($routes) {
    $routes->get('/summary-presensi', 'SummaryPresensiController::index');
    // Tambahkan route lainnya dari SummaryPresensiController jika ada
    $routes->get('rekapitulasi-check-list', 'RekapitulasiCheckList::rekapitulasichecklist');
});

