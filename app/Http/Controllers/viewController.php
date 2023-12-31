<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory as ViewFactory;

class viewController extends DataController
{

    public function __construct(ViewFactory $view)
    {
        $this->view = $view;
    }

    public function default($data)
    {

        //Default script
        $script =array(
            config('site-specific.default-theme-js'),
            config('site-specific.default-alpine-js'),
            config('site-specific.chartJs-js'),
            config('site-specific.chartJs-line-js'),
            config('site-specific.chartJs-pie-js'),
            config('site-specific.sweetAlert-js'),
            config('site-specific.jQueryCDN-js'),
        );

        // Defalut css
        $css =array(
            config('site-specific.google-font'),
            config('site-specific.tailwind-css'),
            config('site-specific.chartJS-css'),
            config('site-specific.fontAwesome-cdn'),
        );

        if(isset($data['css'])){
            $data['css'] = array_merge($css,$data['css']);
        }else{
            $data['css'] = $css;
        }
        if(isset($data['script'])){
            $data['script'] = array_merge($script,$data['script']);
        }else{
            $data['script'] = $script;
        }

        return View::make('layouts.dashboard', $data);
    }

    public function dashboard()
    {
        $data =array(
            'title'             => 'Dashboard',
            'view'              => 'pages.createGroup',
            'css'               => array(config('site-specific.create-group-css')),
            'script'            => array(config('site-specific.createGroup-js')),
        );
       return $this->default($data);

    }

    public function groupsList()
    {
        $data =array(
            'title'             => 'Groups List',
            'view'              => 'pages.groupsList',
            'groupList'         => $this->getGroupList(),
        );
       return $this->default($data);
    }

    public function viewGroup($id)
    {
        $data = array(
            'title'         => 'Group Details',
            'view'          => 'pages.groupView',
            'groupDetails'  => $this->getGroupDetails($id),
        );

        return $this->default($data);
    }
}
