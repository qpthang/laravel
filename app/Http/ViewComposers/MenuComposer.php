<?php 
namespace App\Http\ViewComposers;
/**
* 
*/
use Illuminate\View\View;
class MenuComposer	
{
	
	public function compose(View $view)
    {
    	$thangpq=100;
        $view->with('thangpq',$thangpq);
    }
}

 ?>