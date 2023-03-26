<?php

/**
 * Default date time format
 */

if (!function_exists('dd_format')) {
    function dd_format($value, $format = 'd-m-Y h:i a')
    {
        return date($format, strtotime($value));
    }
    if (!function_exists('tableRowSrNo')) {
        function tableRowSrNo($index, $paginator)
        {
            return $index + 1 + (($paginator->resolveCurrentPage() - 1) * $paginator->perPage());
        }
    }
}
if (!function_exists('str_limit')) {
    function str_limit($title, $value = 21){
        return \Illuminate\Support\Str::limit($title, $value, '...');
    }
}

if (! function_exists('gst')) {
    /**
     ** GST Calculator
     * @param float $value original amount
     * @param string $mode (inc, exc) tax inclusive or exclusive
     * @return array
     */
    function gst(float $value, $mode = 'inc'): array
    {
        $cgstPerc = (int)env('CGST');
        $sgstPerc = (int)env('SGST');
        // $cgstPerc = env('CGST');
        // $sgstPerc = env('SGST');
        $gstPerc = $cgstPerc + $sgstPerc;
        if ($mode === 'exc') {
            return [
                'cgst' => number_format(($value * $cgstPerc) / 100, 2),
                'sgst' => number_format(($value * $sgstPerc) / 100, 2),
                'total' => number_format(($value * $gstPerc) / 100, 2),
            ];
        }
        // $new_total=$value-number_format(($value - ($value * (100 / (100 + $gstPerc)))), 2);
        // // dd($new_total);
        // return [
        //     'cgst' => number_format(((($cgstPerc/100)*$new_total)), 2),
        //     'sgst' => number_format(((($sgstPerc/100)*$new_total)), 2),
        //     'total' => number_format(($value - ($value * (100 / (100 + $gstPerc)))), 2),
        // ];
        return [
            'cgst' => number_format(($value - ($value * (100 / (100 + $cgstPerc)))), 2),
            'sgst' => number_format(($value - ($value * (100 / (100 + $sgstPerc)))), 2),
            'total' => number_format(($value - ($value * (100 / (100 + $gstPerc)))), 2),
        ];
    }
}

if ( !function_exists('amt') ) {
    /**
     ** remove "00" suffix from amount returned by api and convert to int
     * @param string $amount
     * @return int
     */
    function amt($amount)
    {
        return (int)substr($amount,0, -2);
    }
}


if ( !function_exists('toast') ) {
    /**
     ** Toastr alerts
     * @param string $message
     */
    function toast($message, $type = 'success')
    {
        return [
            "message" => $message,
            "alert-type" => $type,
        ];
    }
}
