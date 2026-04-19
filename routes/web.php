use App\Http\Controllers\ProductController;

Route::get('/', function () { return view('home'); }); // Create a home view using the theme's index body
Route::resource('products', ProductController::class);