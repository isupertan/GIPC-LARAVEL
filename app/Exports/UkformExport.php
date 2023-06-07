<?php

namespace App\Exports;

use App\Models\Ukform\Ukhistory;
use App\Models\Ukform\Primary;
use App\Models\Ukform\Langiage;
use App\Models\Ukform\immigration;
use App\Models\Ukform\Document;
use App\Models\Ukform\Course;
use App\Models\Ukform\Conenct;
use App\Models\Ukform\agent;
use App\Models\Ukform\academy;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\FromCollection;

class UkformExport implements FromCollection, WithMapping, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Primary::with('history', 'immigration', 'language', 
        'course', 'document', 'conenct','agent', 'academy')->get();
    }

    public function map($formDetail): array
    {
       
        // return dd($formDetail);
        
        return [



            $formDetail->id,
            $formDetail->f_name,
            $formDetail->m_name,
            $formDetail->l_name,
            $formDetail->email,
            $formDetail->mobile,
            $formDetail->address,
            $formDetail->zip,
            $formDetail->immigration->birth_country,
            $formDetail->immigration->present_natinality,
            $formDetail->immigration->residence_country,
            $formDetail->immigration->residence_uk ,
            $formDetail->immigration->studied_uk_prev,
            $formDetail->immigration->denied_uk,
            $formDetail->immigration->overstayed_uk,
            $formDetail->immigration->refuse_visa,
            $formDetail->agent->agent_name,
            $formDetail->language->eng_qualification,
            $formDetail->language->other,
            $formDetail->language->grades,
            $formDetail->language->achive_date,
            $formDetail->conenct->source,
            $formDetail->conenct->other,
            $formDetail->document->passport,
            $formDetail->document->school_certificate,
            $formDetail->document->a_level_certificate,
            $formDetail->document->eng_certificate,
            $formDetail->document->work_experince,
            $formDetail->document->cv,
            // $form->email,
            // $user->immigration->birth_country,

        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'First Name',
            'Middle Name',
            'Last Name',
            'Email',
            'Mobile',
            'Address',
            'Zip',
            'Birth Country',
            'Present Natinality',
            'Residence Country',
            'Residence UK',
            'Studied UK Prev',
            'Denied UK',
            'Overstayed UK',
            'Refuse Visa',
            'Agent Name',
            'Eng Qualification',
            'Other',
            'Grades',
            'Achive Date',
            'Source',
            'Conenct Other',
            'Passport',
            'School Certificate',
            'A Level Certificate',
            'Eng Certificate',
            'Work Experince',
            'CV',

        ];
    }
}
