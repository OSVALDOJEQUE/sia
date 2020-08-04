<?php

namespace App\Exports;

use App\Models\Jornalista;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class JornalistaExport implements FromCollection,WithHeadings,WithEvents
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

                $event->sheet->getStyle('A1:J1')->applyFromArray($arrayStyle);
            },
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Jornalista::select('id','nome','celular','email','contacto','entidade','modelo','plataforma','serie','estado')->get();
    }

       public function headings(): array
    {
        return [
            '#','Nome','Telefone','Email','Telefone do Editor','Entidade','Dispositivo','Plataforma','Serie','Estado'
        ];
    }
}
