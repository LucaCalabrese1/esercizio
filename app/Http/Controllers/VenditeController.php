<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Servizio as Servizio;
use App\Models\Point as Point;
use App\Models\Vendita as Vendita;
use Illuminate\Http\Request;

/**
 * Facciamo finta dobbiamo gestire le vendite da qui
 * Metto solo alcuni metodi d'esempio
 */
class VenditeController extends BaseController
{	
    /**
     * Elaboriamo una nuova vendita
     * @param class
     * @param array servizi venduti
     * @return bool se ci siamo riusciti
     */
    protected function nuovaVendita(Point $point, array $servizi) : bool
    {
        /*
           Ci istanziamo il point
           Facciamo una nuova vendita
           $vendita = new Vendita;
           vendita->poin
         */
    }
	
	/**
	 * Utente che vuole visualizzare lo storico di vendite
     * @param  int  $id
     * @return \Illuminate\View\View
	*/
	public function storico>Vendite(Request $request)
	{
		/*
		* Vabe qui ci prendiamo l'id del point e del servizio per cui guardare le vendite
		* ci prendiamo dal db le vendite relative al point $point->vendite()->get(); 
		* e filtriamo quelle per il servizio richiesto
		* o il contrario, poi le mandiamo alla view
		*/
	}
    
}