<?php


namespace App\Controller\API;


use Symfony\Component\HttpFoundation\Request;

interface APIObject
{
    function addObject(Request $request):array;
    function removeObject(Request $request):array;
    function updateObject(Request $request):array;
    function getObject(Request $request):array;


}