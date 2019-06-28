<?php
/**
 * Created by wking.
 * @author: wking <1974655618@qq.com>
 * @date: 2019/6/25 11:30
 */

namespace App\Http\Controllers;


class CategoryController extends Controller
{
    public function __construct()
    {
        echo "this is category construct \r\n";
    }

    public function getCategory($id)
    {
        return 'this is getCategory method and param is '. $id;
    }

}