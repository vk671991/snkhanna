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
    public function caseStudy1()
    {
        $title = env('APP_NAME','Dr. S N Khanna').' | Case Study 1';
        return view('pages.caseStudy1',compact('title'));
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
