<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\StudentModel;
 
class Student extends Controller
{
 
	public function __construct()
    {
        
    }
    public function index()
    {   
		$model = new StudentModel(); 
 
        $data = [
            'students' => $model->orderBy('id', 'DESC')->findAll()
        ];
        
        return view('list', $data);
    }
	
	function convertToPdf(){
		$model = new StudentModel(); 
		$data = $model->orderBy('id', 'DESC')->findAll();
		
        $dompdf = new \Dompdf\Dompdf();
		// Sending data to view file
        $dompdf->loadHtml(view('list', ["students" => $data]));		
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }  
 
}

?>