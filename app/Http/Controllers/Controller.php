<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Modele;

class Controller extends BaseController
{
 
    public function DREtudiant(){
      $Modele = new Modele();
        
      $Modele = $Modele->D();

      if(empty($Modele)){
        return view("login");
      }else{
        return view("DREtudiant", [ "Data" => $Modele  ]);

      }
    }
    public function DRProf (){
      $Modele = new Modele();
        
      $Modele = $Modele->D();

      if(empty($Modele)){
        return view("login");
      }else{
        return view("DRProf", [ "Data" => $Modele  ]);

      } 
    }
    public function DRSalle(){
      $Modele = new Modele();
        
      $Modele = $Modele->D();

      if(empty($Modele)){
        return view("login");
      }else{
        return view("DRSalle", [ "Data" => $Modele  ]);

      }
    }
    
    public function DRAnonce(){
        $Modele = new Modele();
        
        $Modele = $Modele->D();

      if(empty($Modele)){
        return view("login");
      }else{
        return view("DRAnonce", [ "Data" => $Modele  ]);

      }
    }
    

    public function  DashBordResponsable(){
      $Modele = new Modele();
        
      $Modele = $Modele->D();

      if(empty($Modele)){
        return view("login");
      }else{
        return view("DashBordResponsable", [ "Data" => $Modele  ]);

      }
    }


    public function  DashBordProf(){
        $Modele = new Modele();
        $password = "secret456";
        $email ="karim@example.com";
        $Modele = $Modele->DashBordProf($email,$password);

      if(empty($Modele)){
        return view("login");
      }else{
        return view("DashBordProf", [ "Data" => $Modele  ]);

      }
    }


    public function DashBord(Request $request){
      $Modele = new Modele(); 
      $password = "secret456";
      $email ="karim@example.com";
      $Modele = $Modele->DashBordProf($email,$password);

    if(empty($Modele)){
      return view("login");
    }
      return view("DashBordEtudiant", [ "Data" => $Modele  ]);
  }


  public function DEAnonce(Request $request){
    $Modele = new Modele();
    $password = "secret456";
    $email ="karim@example.com";
    $Modele = $Modele->DashBordProf($email,$password);

  if(empty($Modele)){
    return view("login");
  }
    return view("DEAnnonce", [ "Data" => $Modele  ]);
}
public function DEDemande(Request $request){
  $Modele = new Modele();
  $password = "secret456";
  $email ="karim@example.com";
  $Modele = $Modele->DashBordProf($email,$password);

if(empty($Modele)){
  return view("login");
}
  return view("DEDemande", [ "Data" => $Modele  ]);
}
public function DEEtudiant(Request $request){
  $Modele = new Modele();
  $password = "secret456";
  $email ="karim@example.com";
  $Modele = $Modele->DashBordProf($email,$password);

if(empty($Modele)){
  return view("login");
}
  return view("DEEtudiant", [ "Data" => $Modele  ]);
}

public function DashBordLogin(Request $request){
  $email = $request->input('email');
  $password = $request->input('password');
  $Modele = new Modele();
  $Modele = $Modele->DashBordLogin($email,$password);
  if($Modele["user"] == "etu"){
    return view("DashBordEtudiant", [ "Data" => $Modele  ]);

  }elseif($Modele["user"] == "prof"){
    return view("DashBordProf", [ "Data" => $Modele  ]);

  }elseif ($Modele["user"] == "resp"){
    return view("DashBordResponsable", [ "Data" => $Modele  ]);


  }
  return view("login");
 
  
}
  
  
public function D (){
  $Modele = new Modele();
  $Modele = $Modele->D();
  return view("DashBordResponsable",[ "Data" =>$Modele]);
}
    
}
