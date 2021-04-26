<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Базовый контроллер, является родителем для всех контроллеров управления блогом
 */

abstract class BaseController extends Controller
{
    /**
     * BaseController constructor
     */
    public function __construct()
    {
        //Инициализация общих вопросов админки, наследуемых
    } 
    //
}