<?php
namespace App\Http\Controllers;
use Request;

/* Décommenter cette ligne dans php.ini extension=php_fileinfo.dll */

class OfficeController extends Controller
{
    public function generateDocx(Request $request){

    	$nameOfTemplate = '\vN';
    	$extension = '.docx';
    	$filename = $nameOfTemplate.$extension;

    	$file = public_path('docs\templates\word'.$filename);

    	$phpword = new \PhpOffice\PhpWord\TemplateProcessor($file);
    	$phpword->setValue('$ {replaceKey}','Santosh...');
        $phpword->setValue('$ {WINDOWS}','User Henry !');
    	$phpword->setValue('$ {content}','Adresse Mail...');
        $phpword->setValue('$ {small_name}','Small Henry !');        
        $phpword->setValue('$ {WindowsUser}','Tous le monde...');
        $phpword->setValue('$ {Societe}','Nouvelle société...');
    	$phpword->saveAs(public_path('docs\word'.$filename));

    	// Saving the document as HTML file...
    	/*$saveAsHTMLName = $nameOfTemplate;
    	$saveAsExtension = '.html';
    	$saveAsFilename = $saveAsHTMLName.$saveAsExtension;

    	$phpWord = new \PhpOffice\PhpWord\PhpWord();
    	$temp = \PhpOffice\PhpWord\IOFactory::load($file); // Read the temp file
    	$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($temp, 'HTML');
		$objWriter->save(public_path('docs\html'.$saveAsFilename));*/

    	/*$phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $section->addText($description);

        // Saving the document as HTML file...
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
		$objWriter->save('docs\Html\helloWorld.html');
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');*/
        
        /*try {
            
            $objWriter->save(storage_path('hello.docx'));

        } catch (Exception $e) {

        }

        return response()->download(storage_path('hello.docx'));*/

       return view('pages.office');

    }
}
