<?php

namespace App\Http\Controllers;
use App\Models\Contact; // Le modèle devrait commencer par une majuscule
use App\Models\organisation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{
  
   public function Contact(Request $request) {
    if ($request->filled('search')) {
        $searchTerm = $request->input('search');

        $contacts = Contact::search($searchTerm)
            ->join('organisation', 'contact.organisation_id', '=', 'organisation.id')
            ->select('contact.id', 'contact.nom', 'contact.prenom', 'organisation.nom as societe', 'organisation.statut')
            ->paginate(10);
    }else{

        $contacts =  Contact::join('organisation', 'contact.organisation_id', '=', 'organisation.id')
        ->select('contact.id','contact.nom','contact.prenom', 'organisation.nom as societe', 'organisation.statut')
        ->paginate(10);
    }
     return view('index',compact('contacts'));

    }

    public function Store(Request $request){
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'entreprise'=>'required|string|max:255',
            'adresse'=>'required|string|max:255',
            'email'=>'required',
        ]);

         $id=(int)$request->Input('id_contact');
        if (!$id ) {
            $contact = new Contact ;
            $organisation= new organisation;
        }else{
            $contact = Contact::findOrFail($id);
            $organisation = organisation::findOrFail($contact->organisation_id);
        }
        $organisation->nom = $request->Input('entreprise');
        $organisation->adresse=$request->Input('adresse');
        $organisation->statut=$request->Input('statut');
        $organisation->code_postal = $request->Input('Cpostal');
        $organisation->ville = $request->Input('ville');

        $organisation->save();

        $contact->nom =$request->Input('nom');
        $contact->prenom =$request->Input('prenom');
        $contact->e_mail =$request->Input('email');
        $contact->organisation()->associate($organisation);
        
        $contact->save();
        return redirect('/');
    }


    public function Delete(Request $request) {
                // Chargez l'enregistrement que vous souhaitez supprimer par son ID
        $enregistrement = Contact::find($request->Input('id_contact'));

        // Vérifiez si l'enregistrement existe
        if ($enregistrement) {
            // Supprimez l'enregistrement
            $enregistrement->delete();
        }
            
              return redirect('/');
    }

    public function Show(Request $request) {
        $id = $request->input('id');
        $contact = Contact::findOrFail($id);
        $org = organisation::findOrFail($contact->organisation_id);
        // Faites quelque chose avec $contact
        $contact =[
            'contact'=> $contact,
            'org' =>$org,
        ];
        return ($contact);
    }

}
