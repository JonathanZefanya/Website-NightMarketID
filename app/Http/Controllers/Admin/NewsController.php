<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function create()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('components.admin.news', ['news' => $news]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'thumbnail' => 'required|file|mimes:jpg,png',
            'konten' => 'required',
            'type' => 'required'
        ]);
        
        $file = $request->file('thumbnail');
        $folder = 'assets/news';
        $file->move($folder, $file->getClientOriginalName());    

        $news = new News();
        $news->title = $request->judul;
        $news->slug = Str::slug($request->judul, '-');
        $news->thumbnail = "/".$folder."/".$file->getClientOriginalName();
        $news->type = $request->type;
        $news->content = $request->konten;
        $news->save();

        return back()->with('success', 'Berhasil input berita');
    }
    
    public function destroy($id)
    {
        $news = News::where('id', $id)->first();

        if(!$news) return back()->with('error', 'Berita tidak ditemukan');
        
        try{
            unlink(public_path($news->thumbnail));
        }catch (\Exception $e){
            
        }

        $news->delete();

        return back()->with('success', 'Berhasil menghapus');
    }

}
