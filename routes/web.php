<?php

Route::get('/','IndexController@index');
Route::get('/index','IndexController@index')->name('index');
Route::get('/inscription','IndexController@inscription');
Route::get('/presentation','IndexController@presentation');
Route::get('/contact','IndexController@contact');
Route::get('/connexion','IndexController@connexion')->name('connexion');
Route::post('/postinscription','IndexController@postinscription')->name('postinscription');
Route::post('/rechercher','IndexController@rechercher')->name('rechercher');
Route::get('/contacter','IndexController@contacter');


Route::get('/profile','ProfilController@profile')->name('profile');
Route::get('/deconnexion','ProfilController@deconnexion')->name('deconnexion');
Route::post('/postconnexion','ProfilController@postconnexion')->name('postconnexion');
Route::get('/profileinfo','ProfilController@profileinfo')->name('profileinfo');
Route::post('/profileinfo','ProfilController@update');
Route::post('/postinfoedit','ProfilController@postinfoedit')->name('postinfoedit');
Route::get('/profileinfoedit','ProfilController@profileinfoedit');
Route::get('/charte','ProfilController@charte');

Route::post('/postmailoffre','ProfilController@postmailoffre')->name('postmailoffre');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/listeoffres','OffreController');

/***********************************admin*******************************************/

Route::group(['prefix'=>'admin'],function (){
    Route::get('/login','AdminController@getlogin');
    Route::post('/postloginadmin','AdminController@postloginadmin')->name('postloginadmin');
    Route::get('/adminprofile','AdminController@adminprofile')->name('adminprofile');
    Route::get('/affichelisteoffres','AdminController@affichelisteoffres')->name('affichelisteoffres');
    Route::get('/affichelisteoffres1','AdminController@affichelisteoffres1')->name('affichelisteoffres1');
    Route::get('/affichelisteoffres2','AdminController@affichelisteoffres2')->name('affichelisteoffres2');
    Route::get('/affichelisteoffres3','AdminController@affichelisteoffres3')->name('affichelisteoffres3');
    Route::get('/activer_offre\{id}','AdminController@activer_offre')->name('activer_offre');
    Route::get('/desactiver_offre\{id}','AdminController@desactiver_offre')->name('desactiver_offre');
    Route::get('/afficher_offre\{id}','AdminController@afficher_offre')->name('afficher_offre');
    Route::get('/afficher_fournisseur','AdminController@afficher_fournisseur')->name('afficher_fournisseur');
    Route::get('/deconnecter','AdminController@deconnecter')->name('deconnecter');
    Route::get('/offres_de_fournisseur\{id}','AdminController@offres_de_fournisseur')->name('offres_de_fournisseur');

});

?>
