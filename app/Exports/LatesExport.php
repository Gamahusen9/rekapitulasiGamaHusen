<?php

namespace App\Exports;

use App\Models\Lates;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LatesExport implements FromCollection, WithHeadings, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lates::all();
    }

    public function styles(Worksheet $sheet)
    {
        // Styling untuk header
        $sheet->getStyle('A1:F1')->applyFromArray([
            'font' => [
                'bold' => true,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'DDDDDD'],
            ],
        ]);

        // Styling untuk sel data
        $sheet->getStyle('A2:E' . $sheet->getHighestRow())->applyFromArray([
            'font' => [
                'bold' => false,
            ],
        ]);
    }
    public function headings(): array
    {
	return [
        'Nis',
        'Nama',
        'Rombel',
        'Rayon',
        'Total Keterlambatan',
	];
    }
}
