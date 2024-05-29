<?php

namespace App\Http\Controllers;

use setasign\Fpdi\Fpdi;
use Illuminate\Http\Request;

use function Psy\debug;

class FilePDFController extends Controller
{
    // Template Registrasi
    public function test()
    {
        return view('user/cetakuser');
    }

    public function proses(Request $request)
    {
        $name = $request->post('name');
        // $name = '';
        $outputfile = public_path() . 'Sertifikat4.pdf';
        $this->fillPDF(public_path() . '/pdf/default_registrasi.pdf', $outputfile, $name);

        return response()->file($outputfile);
    }
    public function fillPDF($file, $outputfile, $name)
    {
        $fpdi = new Fpdi;
        $fpdi->setSourceFile($file);
        $template = $fpdi->importPage('1');
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);
        $top = 117;
        $left = 98;
        // $fpdi->SetXY(40, 40);
        $nama = $name;
        $nama = strtoupper($name);
        $fpdi->AddFont('RobotoSlab-Regular', '', 'RobotoSlab-Regular.php', true);
        $fpdi->SetFont('RobotoSlab-Regular', '', 20);
        // $fpdi->SetTextColor(255,255,255, 0.3);
        $fpdi->SetTextColor(0, 0, 0, 0.3);
        $fpdi->Text($left, $top, $nama);

        return $fpdi->Output($outputfile, 'F');
    }

    // Template Registrasi
    public function template1()
    {
        return view('admin/adminprint1');
    }

    public function print1(Request $request)
    {
        //Mengambil data pilihan dari input template
        $template = $request->input('template');
        switch ($template) {
            case 'default':
                $pdfFile = public_path() . '/pdf/default_registrasi.pdf';
                break;
            case 'template-registrasi1':
                $pdfFile = public_path() . '/pdf/registrasi(1).pdf';
                break;
            case 'template-registrasi2':
                $pdfFile = public_path() . '/pdf/registrasi(2).pdf';
                break;
            case 'template-registrasi3':
                $pdfFile = public_path() . '/pdf/registrasi(3).pdf';
                break;
            default:
                return redirect()->back()->with('error', 'Template Tidak Tersedia!.');
        }
        //mengambil value nama dari inputan name
        $name = $request->input('name');
        $outputfile = public_path() . '/Sertifikat.pdf';
        $this->pdf1($pdfFile, $outputfile, $name, $template);

        return response()->file($outputfile);
    }

    public function pdf1($file, $outputfile, $name, $template)
    {
        $fpdi = new Fpdi;
        $fpdi->setSourceFile($file);
        $top = 116;
        $left = 90;
        $fpdi->AddFont('RobotoSlab', '', 'RobotoSlab-Regular.php', true);
        $fpdi->SetFont('RobotoSlab', '', 22);
        $fpdi->SetTextColor(0, 0, 0, 0.3);
        
        // Mengatur Posisi Inpuntan Nama
        if ($template == 'default') {
            $template_page = '1';
            $top = 117;
            $left = 100;
            $fpdi->SetFont('RobotoSlab', '', 20);
        } elseif ($template == 'template-registrasi1') {
            $template_page = '1';
            $top = 125;
            $left = 98;
            $fpdi->SetFont('RobotoSlab', '', 21);
        } elseif ($template == 'template-registrasi2') {
            $template_page = '1';
            $top = 105;
            $left = 98;
            $fpdi->AddFont('Ysabeau-Medium', '', 'Ysabeau-Medium.php', true);
            $fpdi->SetFont('Ysabeau-Medium', '', 22);
        } elseif ($template == 'template-registrasi3') {
            $template_page = '1';
            $top = 120;
            $left = 103;
            $fpdi->AddFont('Ysabeau-Medium', '', 'Ysabeau-Medium.php', true);
            $fpdi->SetFont('Ysabeau-Medium', '', 21);
        }

        $template = $fpdi->importPage($template_page);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);

        // $fpdi->SetXY(40,40);
        // $fpdi->SetTextColor(255,80,0, 0.3);
        $nama = $name;
        $nama = strtoupper($name);

        // if ($template == 'default') {
        //     $fpdi->Text($left,$top,$nama);
        // }elseif($template == 'template-registrasi1'){
        //     $fpdi->Text($left,$top,$nama);
        // }elseif ($template == 'template-registrasi2') {
        //     $fpdi->Text($left,$top,$nama);
        // } elseif ($template == 'template-registrasi3') {
        //     $fpdi->Text($left,$top,$nama);
        // }
        
        $fpdi->Text($left, $top, $nama);

        return $fpdi->Output($outputfile, 'F');
    }


    //TEMPLATE 2
    public function template2()
    {
        return view('admin/adminprint2');
    }

    //Template Penghargaan
    public function print2(Request $request)
    {
        $name = $request->input('name');
        $template = $request->input('template');

        switch ($template) {
            case 'default':
                $pdfFile = public_path() . '/pdf/default_penghargaan.pdf';
                break;
            case 'template-penghargaan1':
                $pdfFile = public_path() . '/pdf/penghargaan(1).pdf';
                break;
            case 'template-penghargaan2':
                $pdfFile = public_path() . '/pdf/penghargaan(2).pdf';
                break;
            case 'template-penghargaan3':
                $pdfFile = public_path() . '/pdf/penghargaan(3).pdf';
                break;
            default:
                return redirect()->back()->with('error', 'Template Tidak Tersedia!.');
        }

        $outputfile = public_path() . '/Sertifikat.pdf';
        $this->pdf2($pdfFile, $outputfile, $name, $template);
        // $this->pdf2(public_path().'/pdf/Sertifikat (2).pdf',$outputfile,$name);

        return response()->file($outputfile);
    }
    public function pdf2($file, $outputfile, $name, $template)
    {
        $fpdi = new Fpdi;
        $fpdi->setSourceFile($file);
        $top = 117;
        $left = 110;
        $fpdi->AddFont('Dongle', '', 'Dongle.php', true);
        $fpdi->SetFont('Dongle', '', 35);
        $fpdi->SetTextColor(100, 84, 0, 0.3);
        
        if ($template == 'default') {
            $template_page = '1';
            $top = 117;
            $left = 110;
            $fpdi->SetFont('Dongle', '', 34);
        } elseif ($template == 'template-penghargaan1') {
            $template_page = '1';
            $top = 120;
            $left = 105;
        } elseif ($template == 'template-penghargaan2') {
            $template_page = '1';
            $top = 119;
            $left = 95;
            $fpdi->AddFont('Inconsolata-Regular', '', 'Inconsolata-Regular.php', true);
            $fpdi->SetFont('Inconsolata-Regular', '', 29);
        } elseif ($template == 'template-penghargaan3') {
            $template_page = '1';
            $top = 119;
            $left = 98;
            $fpdi->AddFont('Inconsolata-Regular', '', 'Inconsolata-Regular.php', true);
            $fpdi->SetFont('Inconsolata-Regular', '', 30);
        }


        $template = $fpdi->importPage($template_page);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);
        // $fpdi->SetXY(40,40);

        $nama = $name;
        $nama = strtoupper($name);
        // $fpdi->SetTextColor(0,0,0, 0.3);

        // if ($template == 'default') {
        //     $fpdi->Text($left, $top, $nama);
        // } elseif ($template == 'template-penghargaan1') {
        //     $fpdi->Text($left, $top, $nama);
        // } elseif ($template == 'template-penghargaan2') {
        //     $fpdi->Text($left, $top, $nama);
        // } elseif ($template == 'template-penghargaan3') {
        //     $fpdi->Text($left, $top, $nama);
        // }
        $fpdi->Text($left, $top, $nama);

        return $fpdi->Output($outputfile, 'F');
    }

    //Template Kelulusan
    public function template3()
    {
        return view('admin/adminprint3');
    }
    public function print3(Request $request)
    {
        // $name = 'The Sig1t';
        $name = $request->input('name');
        $template = $request->input('template');

        switch ($template) {
            case 'default':
                $pdfFile = public_path() . '/pdf/default_kelulusan.pdf';
                break;
            case 'template-kelulusan1':
                $pdfFile = public_path() . '/pdf/kelulusan(1).pdf';
                break;
            case 'template-kelulusan2':
                $pdfFile = public_path() . '/pdf/kelulusan(2).pdf';
                break;
            case 'template-kelulusan3':
                $pdfFile = public_path() . '/pdf/kelulusan(3).pdf';
                break;

            default:
                return redirect()->back()->with('error', 'Template Tidak Tersedia!.');
        }

        $outputfile = public_path() . '/Sertifikat.pdf';
        // $this->pdf3(public_path().'/pdf/Sertifikat (4).pdf',$outputfile,$name);
        $this->pdf3($pdfFile, $outputfile, $name, $template);

        return response()->file($outputfile);
    }

    public function pdf3($file, $outputfile, $name, $template)
    {
        $fpdi = new Fpdi;
        $fpdi->setSourceFile($file);
        $top = 158;
        $left = 83;
        $fpdi->SetTextColor(0, 0, 0, 0.3);
        $fpdi->AddFont('IBMPlexSerif', '', 'IBMPlexSerif.php', true);
        $fpdi->SetFont('IBMPlexSerif', '', 27);
        
        if ($template == 'default') {
            $template_page = '1';
            $top = 158;
            $left = 93;
            $fpdi->SetTextColor(100, 84, 0, 0.3);
            $fpdi->SetFont('IBMPlexSerif', '', 25);
        } elseif ($template == 'template-kelulusan1') {
            $template_page = '1';
            $top = 110;
            $left = 97;
            $fpdi->AddFont('Dosis-Regular', '', 'Dosis-Regular.php', true);
            $fpdi->SetFont('Dosis-Regular', '', 26);
            $fpdi->SetTextColor(100, 84, 0, 0.3);
        } elseif ($template == 'template-kelulusan2') {
            $template_page = '1';
            $top = 103;
            $left = 88;
            $fpdi->AddFont('RobotoSlab-Regular', '', 'RobotoSlab-Regular.php', true);
            $fpdi->SetFont('RobotoSlab-Regular', '', 25);
        } elseif ($template == 'template-kelulusan3') {
            $template_page = '1';
            $top = 124;
            $left = 97;
            $fpdi->AddFont('Ysabeau-Medium', '', 'Ysabeau-Medium.php', true);
            $fpdi->SetFont('Ysabeau-Medium', '', 23);
            $fpdi->SetTextColor(160,129, 0, 0.3);
        }

        $template = $fpdi->importPage($template_page);
        $size = $fpdi->getTemplateSize($template);
        $fpdi->AddPage($size['orientation'], array($size['width'], $size['height']));
        $fpdi->useTemplate($template);
        // $fpdi->SetXY(40,40);

        $nama = $name;
        $nama = strtoupper($name);
        // $fpdi->SetTextColor(255,255,255, 0.3);

        // if ($template == 'default') {
        //     $fpdi->Text($left, $top, $nama);
        // } elseif ($template == 'template-kelulusan1') {
        //     $fpdi->Text($left, $top, $nama);
        // } elseif ($template == 'template-kelulusan2') {
        //     $fpdi->Text($left, $top, $nama);
        // } elseif ($template == 'template-kelulusan3') {
        //     $fpdi->Text($left, $top, $nama);
        // }

        $fpdi->Text($left, $top, $nama);

        return $fpdi->Output($outputfile, 'F');
    }
    // $fpdi->Rect(0, 0, $size['width'], $size['height'], 'F'); CODE UNTUK MENGHAPUS SEMUA KONTEN PADA PDF (MENJADI BLANK PUTIH)
}
