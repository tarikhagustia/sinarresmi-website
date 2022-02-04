<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Utilities\ResourceUtilities;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.news.index', [
            'news' => News::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'required',
            'image' => 'image|file',
        ]);

        News::create(array_merge($validated, [
            'image' => ResourceUtilities::storeImage($request->image),
            'status' => 'Published',
            'slug' => Str::slug($validated['title'])
        ]));

        return redirect()->route('dashboard.news.index')->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('dashboard.news.show', [
            'event' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', [
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validated = $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'content' => 'required',
            'image' => 'image|file',
        ]);

        $news->update(array_merge($validated, [
            'image' => ResourceUtilities::updateImage($news->image, $request->image),
        ]));

        return redirect()->route('dashboard.news.index')->with('success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        ResourceUtilities::deleteImage($news->image);

        $news->delete();

        return redirect()->route('dashboard.news.index')->with('success', 'News deleted successfully');
    }
}
