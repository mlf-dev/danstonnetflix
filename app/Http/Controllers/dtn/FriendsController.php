<?php

namespace App\Http\Controllers\dtn;

use App\Notifications\RequestToAddFriend;
use App\User;
use App\UserLinks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{
    //
    public function addFriend(Request $request){
        $current_user_id = Auth::user()->id;
        $second_user_id = intval($request->second_user);
        // echo 'min : '.min($user1,$user2).' ';
        // echo 'max : '.max($user1,$user2).' ';

        // définition du lien dans la base de donnée
        $userlink = new UserLinks();
        $userlink->current_user_id = $current_user_id;
        $userlink->second_user_id = $second_user_id;
        $userlink->confirmed = false;

        // dd($userlink);
        //stockage dans la BDD
        $userlink->save();

        $userlink2 = new UserLinks();
        $userlink2->current_user_id = $second_user_id;
        $userlink2->second_user_id = $current_user_id;
        $userlink2->confirmed = false;
        $userlink2->save();

        $user_pseudo = Auth::user()->pseudo;
        // dd($user_pseudo);

        // Récupération du user à qui envoyer la notification :
        $userToNotify = User::where('id','=',$second_user_id)->first();
        // dd($userToNotify);
        // Création de la notification
        $userToNotify->notify(new RequestToAddFriend($user_pseudo, $current_user_id, $second_user_id));

        // COnfirmation par message flash à l'utilisateur
        flash("Invitation envoyée avec succès")->success();

        return redirect()->back();
    }

    public function acceptFriend(Request $request, $notification){
        // récupération de la notification grâce à son ID dans la request
        $notif = Auth::user()->notifications->where('id','=',$notification)->first();

        // dd($notif->data);

        //$current_user = Auth::user()->id;
        //$second_user = $request->second_user;

        // récupération des datas de la notification
        $first_user = $notif->data['id_user1'];
        $second_user = $notif->data['id_user2'];

        // dd($first_user,$second_user);


        // 1/ Mettre à jour le lien du user1 vers user2

        // Récupération du user courant
        $user = User::find(Auth::user()->id);
        //dd($user->userLinks);
        // Update de confirmed->false à confirmed->true
        $user->userLinks()->updateExistingPivot([$first_user,$second_user], ['confirmed'=>true]);

        // 2/ Mettre à jour le lien du user2 vers le user1
        // Récupération du deuxième user
        $user2 = User::find($first_user);
        $user2->userLinks()->updateExistingPivot([$second_user,$first_user], ['confirmed'=>true]);


        // Notification : lue (notification->read_at)
        $notif->markAsRead();

        // On emmet un message flash à l'utilisateur pour lui confirmer l'acceptation de l'invitation.
        flash("Invitation acceptée avec succès")->success();

        // redirection sur la page des notifications avec affichage des messages flash
        return redirect()->back();
    }

    public function denyFriend(Request $request, $notification){
        // Récupération de la notification
        $notif = Auth::user()->notifications->where('id','=',$notification)->first();

        // dd($notification);

        // Pas d'update à faire, si la demande est refusée par l'utilisateur, les deux user_links->confirmed restent à false. Si l'utilisateur change d'avis plus tard, il ira sur le profil de l'autre utilisateur et cliquera sur 'accepter l'invitation'. La demande reste donc en attente.

        // Notification : lue
        $notif->markAsRead();

        // message flash généré qui s'affichera sur la page des notification après la redirection
        flash("L'invitation a bien été refusée")->success();
        return redirect()->back();
    }
}
