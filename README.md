Laravel new laravelpractice
Cd laravelpractice
Php artisan serve
Frontend ko project lai copy garera public ma lagera paste garne
Create controller
Php arisan make:controller TemplateController
Resources>views>frontend (frontend folder create garne)
Frontend folder ma files haru create garne i.e
Master.blade.php
Home.blade.php
Aba home.blade.php ma kei lekhne ani route create garne
Web.php ma
Use App\Http\Controllers\TemplateController;
Route::get(‘/home’,[TemplateController::class,’index’]);
Yedi welcome ko route pani falne ani home narakhera / matra rakhne vane pani sabi auxa
Aba TemplateController ma jane ani
class TemplateController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
}


 Yeti garera aba public ko main html file lai copy gareara master.blade.php ma copy garne
Ani home.blade.php ma 
@extends (‘frontend.master’) 
