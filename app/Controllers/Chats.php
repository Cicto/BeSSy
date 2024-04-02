<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;

class Chats extends BaseController
{
    public function index(){
        $this->viewData['title'] = 'Department Chats';
        return view('chats/chatList', $this->viewData);
    }
}