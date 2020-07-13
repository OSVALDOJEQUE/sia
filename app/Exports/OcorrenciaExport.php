<?php

namespace App\Exports;

use App\Models\Ocorrencia;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class OcorrenciaExport implements WithColumnFormatting,FromCollection,WithHeadings,WithMapping,WithEvents
{

    public function registerEvents(): array{

        $arrayStyle=[
            'font' =>[
                'bold'=>true,
            ]
        ];
        return [
            // Handle by a closure.
            AfterSheet::class => function(AfterSheet $event) use ($arrayStyle) {

                $event->sheet->getStyle('A1:G1')->applyFromArray($arrayStyle);
            },
        ];
    }


    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Ocorrencia::select('id','nome','celular','descricao','nivel','provincia_id','created_at')->get();
    }

    public function map($ocorrencia): array
    {
        return [
            $ocorrencia->id,
            $ocorrencia->nome,
            $ocorrencia->celular,
            $ocorrencia->descricao,
            $ocorrencia->nivel,
            $ocorrencia->provincia->provincia,
            Date::dateTimeToExcel($ocorrencia->created_at),
        ];
    }

    public function headings(): array
    {
        return [
            '#','Nome','celular','Descrição','Violação','Província','Data',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'G' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
