<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ErrorComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\BlogFourColumnsComponent;
use App\Http\Livewire\BlogLeftSidebarComponent;
use App\Http\Livewire\BlogListLeftSidebarComponent;
use App\Http\Livewire\BlogListRightSidebarComponent;
use App\Http\Livewire\BlogMasonryFourColumnsComponent;
use App\Http\Livewire\BlogMasonryLeftSidebarComponent;
use App\Http\Livewire\BlogMasonryRightSidebarComponent;
use App\Http\Livewire\BlogMasonryThreeColumnsComponent;
use App\Http\Livewire\BlogRightSideBarComponent;
use App\Http\Livewire\BlogSingleComponent;
use App\Http\Livewire\BlogSingleAudioComponent;
use App\Http\Livewire\BlogSingleLeftSidebarComponent;
use App\Http\Livewire\BlogSingleSliderComponent;
use App\Http\Livewire\BlogSingleVideoComponent;
use App\Http\Livewire\BlogStandardLeftSidebarComponent;
use App\Http\Livewire\BlogStandardRightSidebarComponent;
use App\Http\Livewire\BlogThreeColumnsComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\CompareComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\LoginComponent;
use App\Http\Livewire\MyAccountComponent;
use App\Http\Livewire\OrderCompletedComponent;
use App\Http\Livewire\ShopCartComponent;
use App\Http\Livewire\ShopCompareComponent;
use App\Http\Livewire\ShopLeftSidebarComponent;
use App\Http\Livewire\ShopListComponent;
use App\Http\Livewire\ShopListLeftSidebarComponent;
use App\Http\Livewire\ShopListRightSidebarComponent;
use App\Http\Livewire\ShopLoadMoreComponent;
use App\Http\Livewire\ShopProductDetailComponent;
use App\Http\Livewire\ShopProductDetailLeftSidebarComponent;
use App\Http\Livewire\ShopProductDetailRightSidebarComponent;
use App\Http\Livewire\ShopProductDetailThumbnailsLeftComponent;
use App\Http\Livewire\ShopQuickViewComponent;
use App\Http\Livewire\ShopRightSidebarComponent;
use App\Http\Livewire\SignupComponent ;
use App\Http\Livewire\TermConditionComponent;
use App\Http\Livewire\WishlistComponent;

use App\Http\Livewire\Furniture1Component;
//use App\Http\Livewire\HomeFurniture1Component;

use App\Http\Livewire\ShopProductBrosseToilletteComponent;
use App\Http\Livewire\ShopProductHachoirManuelComponent;
use App\Http\Livewire\ShopProductPeigneChauffantComponent;
use App\Http\Livewire\ShopProductPlaqueDegivranteComponent;

use App\Http\Livewire\ShopProductBocauxPlastiquesComponent;

use App\Http\Livewire\ShopProductParfumGreyFlannelComponent;
use App\Http\Livewire\ShopProductParfumCollectionPriveeComponent;


use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');   
//});
      
Route::get('/',HomeComponent::class); 

 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
