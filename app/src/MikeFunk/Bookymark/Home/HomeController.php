<?php
/**
 * @package Bookymark
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\Bookymark\Home;

use MikeFunk\Bookymark\Common\BaseController;
use View;

/**
 * HomeController
 *
 * @author Michael Funk <mfunk@christianpublishing.com>
 */
class HomeController extends BaseController
{
    /**
     * index
     *
     * @return View
     */
    public function index()
    {
        return View::make('home.home_index');
    }
}
