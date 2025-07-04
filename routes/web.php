<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
#use App\Http\Controllers\SliderController;
#use App\Http\Controllers\StripHomepageController;
#use App\Http\Controllers\ProductOfferController;
#use App\Http\Controllers\ProcessSectionController;
#use App\Http\Controllers\ChooseUsController;
#use App\Http\Controllers\HereToHelpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CampaignController;
#use App\Http\Controllers\BankOfferListController;
#use App\Http\Controllers\SavingAccountListController;
#use App\Http\Controllers\LoanListController;
#use App\Http\Controllers\DematAccountListController;
#use App\Http\Controllers\MutualFundListController;
#use App\Http\Controllers\FixedDepositListController;
#use App\Http\Controllers\HeaderLogoController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutUsController;
#use App\Http\Controllers\PopupController;
#use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
#Route::get('credit-cards', [HomeController::class, 'creditcard'])->name('creditcards');
#Route::post('credit-cards-search', [HomeController::class, 'ccCardSearch'])->name('ccCardSearch');
#Route::get('saving-account', [HomeController::class, 'savingaccount'])->name('savingaccount');
#Route::post('saving-account-search', [HomeController::class, 'savingaccountSearch'])->name('savingaccountSearch');
#Route::get('loans/{url_link}', [HomeController::class, 'loans'])->name('loans');
#Route::post('loan-search', [HomeController::class, 'loanSearch'])->name('loanSearch');
#Route::get('demat-account', [HomeController::class, 'demataccount'])->name('demataccount');
#Route::post('demat-account-search', [HomeController::class, 'demataccountSearch'])->name('demataccountSearch');
//Route::get('mutual-fund', [HomeController::class, 'mutualfund'])->name('mutualfund');
//Route::post('mutual-fund-search', [HomeController::class, 'mutualfundSearch'])->name('mutualfundSearch');
#Route::get('fixed-deposit', [HomeController::class, 'fixeddeposit'])->name('fixeddeposit');
#Route::post('fixed-deposit-search', [HomeController::class, 'fixeddepositSearch'])->name('fixeddepositSearch');
Route::post('/newsletter-signup', [NewsletterController::class, 'signup'])->name('newsletter.signup');
Route::post('customer/sign-up', [HomeController::class, 'signup'])->name('signup');
Route::get('about-us', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('ad-formats', [HomeController::class, 'adformat'])->name('adformat');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('cookies', [HomeController::class, 'cookiesPolicy'])->name('cookiesPolicy');
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('terms-of-use', [HomeController::class, 'terms'])->name('terms');
Route::get('cancellation-refund-policy', [HomeController::class, 'refundPolicy'])->name('refundPolicy');
Route::get('pricing', [HomeController::class, 'pricingPlan'])->name('pricingPlan');
#User List
Route::get('userlist', [HomeController::class, 'userList'])->name('userList');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin', [AdminController::class, 'index']);
#Route::resource('sliders', SliderController::class);
#Route::resource('striphomepages', StripHomepageController::class);
#Route::resource('productoffers', ProductOfferController::class);
#Route::resource('processsection', ProcessSectionController::class);
#Route::resource('chooseus', ChooseUsController::class);
#Route::resource('heretohelp', HereToHelpController::class);


Route::get('/contact-us', [ContactController::class, 'showContactFormWithoutLoggedInUser'])->name('contact.form.user');
Route::post('/contact-us', [ContactController::class, 'submitContactFormWithoutLoggedInUser'])->name('contact.submit.user');


Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);

    Route::post('fetchreports', [DashboardController::class, 'fetchreportsdata'])->name('fetchreports');

    Route::resource('campaign', CampaignController::class);
    Route::get('/search-cities', [CampaignController::class, 'searchCities']);
    Route::post('/campaign/{id}/stop', [CampaignController::class, 'stopCampaign'])->name('campaign.stop');
    Route::post('/campaign/{id}/start', [CampaignController::class, 'startCampaign'])->name('campaign.start');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    Route::get('/add-fund', [FundController::class, 'showAddFundForm'])->name('fund.add');
    Route::post('/add-fund', [FundController::class, 'store'])->name('fund.store');
    Route::post('/payment/callback', [FundController::class, 'handlePayment'])->name('fund.payment.callback');
    Route::get('/funds', [FundController::class, 'fundHistory'])->name('fund.index');

    Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');
});


Route::get('/updateCampaignStatus', [CampaignController::class, 'updateCampaignStatus'])->name('statusbyapi');
Route::get('/campaignstatisticsupdate', [CampaignController::class, 'CampaignStatisticsUpdate'])->name('Campaignstatistics');

#Route::resource('bankofferlist', BankOfferListController::class);
#Route::resource('savingaccountslist', SavingAccountListController::class);
#Route::resource('loanlist', LoanListController::class);
#Route::resource('demataccountlist', DematAccountListController::class);
#Route::resource('mutualfundlist', MutualFundListController::class);
#Route::resource('fixeddepositlist', FixedDepositListController::class);
#Route::resource('headerlogo', HeaderLogoController::class);
Route::resource('footer', FooterController::class);
Route::resource('aboutus', AboutUsController::class);
#Route::post('upload', [CKEditorController::class, 'upload'])->name('upload');
//Route::get('/admin/about-us/edit', [AboutUsController::class, 'edit'])->name('aboutus.edit');
//Route::post('/admin/about-us/update', [AboutUsController::class, 'update'])->name('aboutus.update');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
#Route::post('/submit-popup-form', [PopupController::class, 'submitForm'])->name('submit.popup.form');

Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

#Route::get('{category}/{url_link}', [HomeController::class, 'offershowByUrl'])->name('offershowByUrl');
