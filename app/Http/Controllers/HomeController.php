<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Home';
        return view('pages.home',compact('title'));
    }
    public function aboutMe()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | About Me';
        return view('pages.about-me',compact('title'));
    }
    public function caseStudies()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Case Studies';
        return view('pages.case-studies',compact('title'));
    }
    public function pdfcaseStudy($id)
    {
        if($id==NULL || !is_numeric($id)){
            abort(404);
        }
        $title = env('APP_NAME','Dr. S N Khanna').' | Case Study '.$id;
        $path= NULL;
        switch($id) {
            case 1 :
                $path =  url('/assets/casestudies/Surgical treatment of aneurysms------Asian Cardiovascular Thoracic Annalsmagotra1996.pdf');
                break;
            case 2 :
                $path =  url('/assets/casestudies/Early results with bilateral and single ------Asian Cardiovascular and Thoracic Annals trehan1997.pdf');
                break;
            case 3 :
                $path =  url('/assets/casestudies/Biatrial drainage of right superior vena cava with anomalous right.pdf');
                break;
            case 4 :
                $path =  url('/assets/casestudies/Multimodality targeted approach in redo.... Asian Cardiovascular Thoracic Annalsmishra2003.pdf');
                break;
            case 5 :
                $path =  url('/assets/casestudies/Predictors of early outcome after coronary artery surgery...Journal of cardiac surgery trehan2003.pdf');
                break;
            case 6 :
                $path =  url('/assets/casestudies/Port Access Approach for cardiac surgical procedure --- Indian Heart Journal Page 688Nov Dec2005 (2).pdf');
                break;
            case 7 :
                $path =  url('/assets/casestudies/Ascending aortic aneurysm resection....Asian Cardiovascular Thoracic Annmeharwal2006.pdf');
                break;
            case 8 :
                $path =  url('/assets/casestudies/Management of Pt with unstable angina ------ Journal of cardiac surgerykhanna2013.pdf');
                break;
            case 9 :
                $path =  url('/assets/casestudies/Repair of Tricuspid Insufficiency following blunt Trauma chest---Cardiovascular Disease and diagnosis nathkhanna2014.pdf');
                break;
            case 10 :
                $path =  url('/assets/casestudies/Surgical correction of Lutembacher syndrome -----Journal of cardiac surgerykhanna2014.pdf');
                break;
            case 11 :
                $path =  url('/assets/casestudies/Concomitant coronary bypass and below knee amputation CASE REPORT - -The thoracic and cardiovascular surgeon.pdf');
                break;
            default:
                $path = NULL;
        }
        if($path==NULL){
            abort(404);
        }
        return view('pages.caseStudy',compact('title','path'));
    }
    public function getArticles()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Aricles';
        return view('pages.articles',compact('title'));
    }
    public function article1()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Papers Published by Dr S N Khanna';
        return view('pages.article1',compact('title'));
    }
    public function article2()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Doctor revive 50 year old bypass patient dead for 30minutes';
        return view('pages.article2',compact('title'));
    }
    public function article3()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Cardiac Surgery in patients with severe valvular and coronary heart disease';
        return view('pages.article3',compact('title'));
    }
    public function getGallery()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Photo Gallery';
        return view('pages.gallery',compact('title'));
    }
    public function getVideos()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Educational Videos';
        return view('pages.educational',compact('title'));
    }
    public function contactUs()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Contact Us';
        return view('pages.contact-us',compact('title'));
    }
    public function getAppointment()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Appointment';
        return view('pages.appointment',compact('title'));
    }
}
