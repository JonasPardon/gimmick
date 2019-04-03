<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PageRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $pageRepository;

    /**
     * PageController constructor.
     *
     * @param PageRepository $pageRepository
     */
    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Show the page with the specified slug.
     *
     * @param $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $page = $this->pageRepository->show($slug);

        $data = [
            'page' => $page,
        ];

        return view('core.page')
            ->with($data);
    }
}
