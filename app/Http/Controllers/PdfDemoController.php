<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
 
use PDF;
use App\PdfDemo;
use Elibyy\TCPDF\Facades\TCPDF;
use Storage;
 
class PdfDemoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $pdf_demos = PdfDemo::all();
        $editor1 = "";
        //dd($pdfs);
        return view('PdfDemo')->with(compact('pdf_demos','editor1'));
    }
 
    
    public function htmlToPDF(Request $request)
    {
         
        switch ($request->input('action')) {
        case 'Ver PDF':
            $title = $request->input('select');
            $ruta = Storage::disk('pdfFiles')->getDriver()->getAdapter()->getPathPrefix().$title.'.pdf';
            return response()->file($ruta);
            break;
        case 'Guardar PDF':
            $rules = ['title' => 'required|unique:pdf_demos'];
            $messages = [
            'title.required' => 'Es necesario ingresar el título del archivo.',
            'title.unique' => 'Este título ya se encuentra en uso.'];
            $this->validate($request, $rules, $messages);
            $html_content = $request->input('editor1');
            $title = $request->input('title');
            $ruta = Storage::disk('pdfFiles')->getDriver()->getAdapter()->getPathPrefix().$title.'.pdf';
            $pdfDemo = new PdfDemo();
            $pdfDemo->title = $title;
            $pdfDemo->path = $ruta;
            $pdfDemo->html_content = $html_content; 
            $user = auth()->user();
            $pdfDemo->user_id = $user->id;
            $pdfDemo->save();
            PDF::SetTitle($title);
            PDF::AddPage();
            PDF::writeHTML($html_content, true, false, true, false, '');
            PDF::Output( $ruta, 'F');
            return back()->with('notification', 'El instructivo se ha registrado correctamente.'); 
            break;
        }        
    }
}