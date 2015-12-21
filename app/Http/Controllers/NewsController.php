<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index(){
        $new = new \App\News();
        $news = $new->all();
        return view('new.noticia', ['news'=>$news]);
    
    }
    public function create(){
        //return view('create');
        return View::make('create');
    }
    public function edit($id){
        $ne = new \App\News();
        $news = $ne->find($id);
        
        return view('editar', ['news'=>$news]);
        
    
    
    }
    public function imagem($id){
                
                $ne = new \App\News();
                $news = $ne->find($id);
                $imagem = $news->title;
                //$url = "http://www.blogwebdesignmicrocamp.com.br/wp-content/uploads/2015/09/carro.png";
                $url = "http://www.google.com.br/search?hl=pt-BR&safe=off&gbv=2&sout=1&biw=1024&bih=548&tbm=isch&sa=1&q=".$imagem.".png";
                //$url =  "http://ajax.googleapis.com/ajax/services/search/images?v=2.0&hl=pt-br&cr=countryBR&q=".$imagem;
                $ext = pathinfo($url,PATHINFO_EXTENSION);
                $nomeImage = str_random(4).'-'.str_slug($imagem).'.'.$ext;
                $file = file_get_contents($url);
                file_put_contents('C:/xampp/htdocs/laravel/public/assets/img/'.$nomeImage, $file);
                $showImage = '<img src="http://localhost/laravel/public/assets/img/'.$nomeImage.'" width="200" height="200">';
                
                return view('editar', ['showImage'=>$showImage,'news'=>$news]);
    
    }
    
    public function update(Request $request, $id){
        
        $new = new \App\News();
        $new = $new->find($id)->update($request->all());
        
        return redirect('noticia');
    
    }
    
    public function store(Request $request){
        $data = $request->all();
        $new = new \App\News();
        $new->create($data);
        return redirect('noticia');
    
    }
    public function delete($ID){
        
        $new = new \App\News();
        $new->find($ID)->delete();
        return redirect('noticia');
    
    }
}
