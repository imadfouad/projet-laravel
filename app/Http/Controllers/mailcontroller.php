<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail ;
use function foo\func;


class mailcontroller extends Controller
{
    public function send2()
    {
        Mail::send([],[], function ($message){

            $message->to('Imadfouad48@gmail.com')->subject('confirm')
            ->setBody('Hi','Congrats !  ');

        });

}}
