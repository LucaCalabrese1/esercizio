<?php 
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Servizio as Servizio;
use App\Models\Point as Point;
use Illuminate\Http\Request;

/**
 * Dato che dobbiamo gestire una anagrafica dei servizi
 * un po di metodi per permettere all'utente di gestire 
 * nuovi servizi ed assegnarli ai point
 * Chiaramente ci andrebbero i vari metodi per visualizzare tutti i punti vendita
 * selezionare un punto vendita ed assegnare i servizi disponibili
 */
class AnagraficaController extends BaseController 
{
    /**
     * Immagino di avere una pagina nella quale l'utente può creare un nuovo servizio
     * @return \Illuminate\View\View
     */
    public function nuovo(Request $request) 
    {
        /*
           Mettiamo qui la logica per creare un nuovo servizio tipo:
            $servizio = new Servizio();
            $servizio->nome = $request->nome;
            $servizio->prezzo = $request->prezzo;
            $product->save();
         */
    }
    //  ma anche metterei metodi
    //  delete() e edit() per modificare il prezzo del servizio
    
    /**
     * Immaginiamo una pagina che permetta di assegnare i vari servizi vendibili al point
     * @param id point
     * @return una view 
     */
    public function assignServicesToPoint(Request $request, int $pointId)
    {
        /**
         * Ad esempio da una request un array di id servizi vendibili dal point selezionato
         * prendiamo un istanza del point
         * facciamo un servizi()->detach();
         * mi chiamerei poi un $point->servizi()->attach($serviceId); per ogni servizio 
         */
    }
}