<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function home()
{
  return view('welcome');
  }

  public function contact()
{
  return view('frontend.layouts.partials.contact');
}


    public function team()
   {
  return view('frontend.layouts.partials.team');

   }


      public function mission()
   {
     return view('frontend.layouts.partials.mission');

      }
      public function goal()
    {
     return view('frontend.layouts.partials.goals');

      }
      public function other()
    {
     return view('frontend.layouts.partials.others');

      }

      public function project()
    {
     return view('frontend.layouts.partials.projects');

      }

}
