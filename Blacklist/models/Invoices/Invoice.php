<?php

namespace
Blacklist\Model\Invoice;

use
    Blacklist\Object\OrderObject,
    Blacklist\Object\BasicSettingsObject,
    Blacklist\Object\EshopSettingsObject;

require_once(__DIR__ . '/Fpdf.php');

class InvoicePDF extends \Blacklist\Model\PDF\FPDF
{
    private
        /** @var type array of integers (cell sizes by font size) */
        $fh = array
    (
        8   => 3,
        9   => 4,
        10  => 4.5,
        11  => 5,
        12  => 5
    );

    private
        /** @var \Blacklist\Object\OrderObject */
        $order  = NULL,
        /** @var \Blacklist\Object\BasicSettingsObject */
        $basics = NULL,
        /** @var \Blacklist\Object\EshopSettingsObject */
        $eshops = NULL,
        /** @var \Blacklist\Object\LanguageObject */
        $language = NULL;

    /**
     *
     * @param \Blacklist\Object\OrderObject $order
     * @param \Blacklist\Object\BasicSettingsObject $basic
     * @param \Blacklist\Object\EshopSettingsObject $eshop
     */
    public function __construct(OrderObject $order, BasicSettingsObject $basic, EshopSettingsObject $eshop)
    {
        $this->order    = (object) $order;
        $this->basics   = (object) $basic;
        $this->eshops   = (object) $eshop;
        $this->language = $order->getLanguage();
        $this->FPDFinit('real', 180, 10, 10, array('Arial' => 'arial.php', 'ArialBD' => 'arialbd.php'));
    }

    /**
     * just fpdf lib initialization for using this library
     *
     * @param $displayMode
     * @param $drawColor
     * @param $marginL
     * @param $marginR
     * @param array $fonts
     */
    private function FPDFinit($displayMode, $drawColor, $marginL, $marginR, $fonts = array())
    {
        parent::FPDF();
        // load fonts ^_^
        foreach($fonts as $name => $path){ $this->AddFont($name, '', $path);}
        $this->AddPage();
        $this->AliasNbPages();
        $this->SetDisplayMode($displayMode);
        $this->SetDrawColor($drawColor);
        $this->SetMargins($marginL, $marginR);
    }

    /**
     *
     * @param type $string
     * @return type
     */
    private function decode($string)
    {
        return iconv("UTF-8", "WINDOWS-1250", $string);
    }

    /**
     * automatic like "startup" -> header rendering
     */
    public function Header()
    {
        // TITLE LEFT
        $this->setFont('ArialBD', '', 12);
        $width = $this->GetStringWidth($this->basics->siteurl);
        $height = $this->fh[12];
        $this->Cell($width, $height, $this->decode($this->basics->siteurl), NULL, NULL, 'l');
        // TITLE RIGHT
        $rTitle = $this->decode($this->language->title . ' ' . $this->order->code);
        $rwidth = $this->GetStringWidth($rTitle);
        $this->SetX(209 - $rwidth - $this->lMargin);
        $this->Cell($rwidth, $height, $rTitle);
        $this->Ln(10);
    }

    private function nformat($number)
    {
        return number_format($number, 2, ',', ' ');
    }

    /**
     * @param int $y
     * @param int $start
     * @param int $end
     */
    private function drawLine($y = 0, $start = 0, $end = 100)
    {
        $y = $this->GetY() + $y;
        $x1 = 11 + (190 / 100 * $start);
        $x2 = 11 + (190 / 100 * $end);
        $this->Line($x1, $y, $x2, $y);
    }

    /**
     *
     * @param type $string
     * @return type
     */
    private function getPaymentFromString($string)
    {
        $myPayment = NULL;
        if($string == 'H'){ $myPayment = $this->language->casch; }
        else if($this->order->payment == 'P'){ $myPayment = $this->language->transfer; }
        else if($this->order->payment == 'K'){ $myPayment = $this->language->cart; }
        else{ $myPayment = $this->language->delivery; }
        return $this->decode($myPayment);
    }

    /**
     *
     */
    public function build()
    {
        $date = new \Nette\DateTime($this->order->createDate, NULL);
        $this->drawLine(-2);
        $this->SetLeftMargin(14);

        $this->y = $this->GetY() + 2;
        $this->SetLeftMargin(12);
        $this->SetFont('Arial', '', 10);
        $this->Cell(20, 3, $this->decode($this->language->supplier . ":"));
        $x = $this->x;
        $this->SetX(113);

        $this->Cell(67, 5, $this->decode($this->language->variable));
        $this->Cell(-1, 5, $this->decode(str_replace('/', '', $this->order->code)), 0, 0, 'l');
        $this->SetY($this->GetY() + 5);
        $this->SetX(113);
        $this->Cell(65, 5, $this->decode($this->language->myorder));
        $this->Cell(-1, 5, $this->decode($date->format('d.m.Y')), 0, 0, 'l');
        $this->SetY($this->GetY() + 7);
        $this->SetX(111);
        $this->Cell(90, 35, '', 1, 0);

        $this->SetFont('ArialBD', '', 11);
        $this->Text(113, 40, $this->decode($this->language->subscriber));
        $this->SetFont('Arial', '', 11);
        $this->Text(114, 46, $this->decode($this->order->username . ' ' . $this->order->surname));
        $this->Text(114, 51, $this->decode($this->order->address));
        $this->Text(114, 56, $this->decode($this->order->zip . ' ' . $this->order->city));
        if($this->order->ico != '' && $this->order->dic != '')
        {
            $this->Text(114, 61, $this->decode($this->language->ico . ': ' . $this->order->ico));
            $this->Text(114, 66, $this->decode($this->language->dic . ': ' . $this->order->dic));
        }
        else
        {
            $this->SetFont('Arial', '', 9);
            $tel = $this->decode($this->order->phone ? $this->language->phone . ' ' . $this->order->phone : $this->language->phone . ' ' . $this->language->none);
            $mail = $this->decode($this->order->email ? ', ' . $this->language->email . ': ' . $this->order->email : ', ' . $this->language->email . ': ' . $this->language->none);
            $this->Text(114, 63, $tel . $mail);
        }


        $this->SetFont('ArialBD', '', 11);
        $this->Text(113, 76, $this->decode($this->language->final_beneficiary . ':'));
        $this->SetFont('Arial', '', 11);
        $this->Text(114, 82, $this->decode($this->order->username . ' ' . $this->order->surname));
        $this->Text(114, 87, $this->decode($this->order->address));
        $this->Text(114, 92, $this->decode($this->order->zip . ' ' . $this->order->city));
        if($this->order->ico != '' && $this->order->dic != '')
        {
            $this->SetFont('Arial', '', 9);
            $tel = $this->decode($this->order->phone ? $this->language->phone . ' ' . $this->order->phone : $this->language->phone . ' ' . $this->language->none);
            $mail = $this->decode($this->order->email ? ', ' . $this->language->email . ': ' . $this->order->email : ', ' . $this->language->email . ': ' . $this->language->none);
            $this->Text(114, 97, $tel . $mail);
        }
        $this->SetY($this->GetY() - 12);
        $this->SetX($x);

        $this->Line($this->GetX() + 77, $this->GetY() - 4, $this->GetX() + 77, $this->GetY() + 83);
        $this->Ln(5);
        $this->SetLeftMargin(14);
        $this->SetFont('ArialBD', '', 11);
        $this->Cell(50, 5, $this->decode($this->eshops->company));
        $this->SetFont('Arial', '', 11);
        $this->Cell(-1, 4.5, $this->decode( $this->language->phone . ": " . $this->eshops->company_tel), 0, 1);

        $this->Cell(50, 5, $this->decode($this->eshops->company_address));
        $this->Cell(-1, 4.5, $this->decode($this->eshops->company_email), 0, 1);
        $this->Cell(50, 5, $this->decode($this->eshops->company_zip . ' ' . $this->eshops->company_city));
        $this->Cell(-1, 4.5, $this->decode($this->eshops->company_url), 0, 1);

        $this->Ln(2);
        $this->Cell(-1, 4.5, $this->decode($this->language->ico . ": " . $this->eshops->ic), 0, 1);
        $this->Cell(-1, 4.5, $this->decode($this->language->dic. ": " . $this->eshops->dic), 0, 1);
        $this->Cell(-1, 4.5, $this->decode($this->language->dph), 0, 1);

        $this->Cell(35, 6, $this->decode($this->language->account_number . ':'));
        $this->SetFont('ArialBD', '', 12);
        $this->Cell(60, 6, $this->decode($this->eshops->account_number), 1, 1, 'C');
        $this->Ln(3);

        $this->SetFont('Arial', '', 11);
        $this->Cell(-1, 5, $this->decode($this->language->swift. ': ' . $this->eshops->swift), 0, 1);
        $this->Cell(-1, 5, $this->decode($this->language->iban . ': ' . $this->eshops->iban), 0, 1);

        $this->Ln(5);
        $this->Cell(72, 5, $this->decode($this->language->form_of_payment));
        $this->Cell(-1, 5, $this->getPaymentFromString($this->order->payment), 0, 1);

        $this->Ln(1);
        $this->Cell(65, 5, $this->decode($this->language->date_of_issue));

        $this->Cell(30, 5, $this->decode($date->format('d.m.Y')), 1, 1, 'C');

        $this->Ln(1);
        $this->Cell(65, 5, $this->decode($this->language->due_date));

        ########
        $mydate = $date->getTimestamp() + ((24 * 60 * 60) * $this->eshops->due_date);
        $myitime = new \Nette\DateTime();
        $myitime->setTimestamp($mydate);

        $mytxdate =$date->getTimestamp() + ((24 * 60 * 60) * $this->eshops->taxation_date);
        $myitxdate = new \Nette\DateTime();
        $myitxdate->setTimestamp($mytxdate);

        ########
        $this->Cell(30, 5, $this->decode(($this->order->payment == 'H') ? $date->format('d.m.Y') : $myitime->format('d.m.Y')), 1, 1, 'C');

        $this->Ln(1);
        $this->Cell(65, 5, $this->decode($this->language->real_date));
        $this->Cell(30, 5, $this->decode(($this->order->payment == 'H') ? $date->format('d.m.Y') : $myitxdate->format('d.m.Y')), 1, 1, 'C');


        $this->Line($this->GetX() - 3, $this->GetY() + 2, $this->GetX() + 187, $this->GetY() + 2);
        $this->Ln(8);


        $header = array(
            $this->language->description                            => 87,
            $this->language->price . ' / ' . $this->language->stack => 30,
            'Zľava'                                                 => 30,
            $this->language->number                                 => 11,
            $this->language->price                                  => 30
        );

        if($this->order->invoice_wdph == 'true'){
            $header = array(
                $this->language->description                            => 87,
                $this->language->price . '/' . $this->language->stack . ' ' . $this->language->without_dph => 30,
                'Zľava' . ' ' . $this->language->without_dph                                                 => 30,
                $this->language->number                                 => 11,
                $this->language->price     . ' ' . $this->language->without_dph                              => 30
            );
        }

        $data = array();
        $maxDPH = 0;    // with dph
        $maxWDPH = 0;   // without dph
        foreach($this->order->getProducts() as $product)
        {
            if($this->order->invoice_wdph == 'false')
            {
                $data[] = array(
                    $product->name => 87,
                    $this->nformat(round($product->price,2)) . " € " . $this->language->without_dph . "\n" . $this->nformat(round($product->pricedph,2)) . " € " . $this->language->with_dph => 30,
                    $this->nformat(round($product->discount / $this->eshops->dph,2)) . " € " . $this->language->without_dph . "\n" . $this->nformat(round($product->discount,2)) . " € " . $this->language->with_dph . "   " => 30,
                    $product->count ." \n "                               => 11,
                    $this->nformat((round($product->price,2) * $product->count)) . " € " . $this->language->without_dph . "\n" . $this->nformat((round($product->pricedph,2) * $product->count)) . " € " . $this->language->with_dph . " "  => 30
                );
            }
            else
            {
                $data[] = array(
                    $product->name => 87,
                    $this->nformat(round($product->price,2)) . " € "  => 30,
                    $this->nformat(round($product->discount / $this->eshops->dph,2)) . " € " .  "   " => 30,
                    $product->count                               => 11,
                    $this->nformat((round($product->price,2) * $product->count)) . " € " . " "  => 30
                );
            }
            $maxDPH += round($product->pricedph,2) * $product->count;
            $maxWDPH += $product->price * $product->count; // without DPH
        }
        // Header
        if($this->order->invoice_wdph == 'true')
        {
            $this->SetFont('Arial', '', 10);
            $this->Text($this->GetX(), $this->GetY(), $this->decode('Dodanie je oslobodené od dane (podľa §74 zákona 222/2004 Z.z.)'));
            $this->SetY($this->GetY() + 2);
        }
        $this->setX(12);
        foreach($header as $col => $value){
            $this->SetFont('Arial', '', 10);
            $this->Cell($value,7, $this->decode($col),1, 0, 'C');
        }
        $this->Ln();
        $this->SetFont('Arial', '', 8);
        // Data
        foreach($data as $row)
        {
            $this->setX(12);
            $current_y = $this->GetY();
            $current_x = $this->GetX();

            foreach($row as $col => $size){
                if($size == 87){
                    if($this->order->invoice_wdph == 'false') {$this->Cell($size, 10, $this->decode($col), 1, 0, 'L');}
                    else{$this->MultiCell($size, 5, $this->decode($col), 1, 'L');}
                }
                else if($size === 11){
                    if($this->order->invoice_wdph == 'false') {$this->Cell($size, 10, '    ' . $this->decode($col), 1, 0, 'C');}
                    else{$this->MultiCell($size, 5, $this->decode($col), 1, 'C');}
                }else{
                    $this->MultiCell($size, 5, $this->decode($col), 1, 'C');
                }
                $current_x += $size;
                $this->SetXY($current_x, $current_y);
            }
            $this->Ln(10);
        }
        $this->SetFont('Arial', '', 9);
        $this->Text(148, $this->GetY() + (($this->order->invoice_wdph == 'false') ? 8 : 0), $this->decode($this->language->delivery_price . ':'));
        $this->SetFont('ArialBD', '', 9);
        $this->Text(147, $this->GetY() + (($this->order->invoice_wdph == 'false') ? 22 : 6), $this->decode($this->language->final_price . ':'));
        $this->SetFont('Arial', '', 8);
        $this->SetX(170);
        if($this->order->invoice_wdph == 'true'){$this->SetY($this->GetY() - 5); $this->SetX(170);}
        if($this->order->invoice_wdph == 'true'){
            $this->MultiCell(30, 7, $this->decode($this->nformat(($this->order->deliveryPrice * $this->eshops->dph)). " € "), 1, 'C');
        }else{
            $this->MultiCell(30, 7, $this->decode($this->nformat(($this->order->deliveryPrice * $this->eshops->dph)). " € " . $this->language->without_dph. "\n" . $this->nformat(($this->order->deliveryPrice + 0)). " € " . $this->language->with_dph), 1, 'C');
        }
        $this->SetX(170);
        // total price
        if($this->order->invoice_wdph == 'true'){
            $this->MultiCell(30, 7, $this->decode($this->nformat(round((round($maxWDPH,2) + ($this->order->deliveryPrice * $this->eshops->dph)),2)). " € " ), 1, 'C');
        }else{
            $this->MultiCell(30, 7, $this->decode($this->nformat(round((round($maxWDPH,2) + ($this->order->deliveryPrice * $this->eshops->dph)),2)). " € " . $this->language->without_dph . "\n" . $this->nformat(round((round($maxDPH,2) + ($this->order->deliveryPrice)),2)). " € " . $this->language->with_dph ), 1, 'C');
        }
        $this->Line(11, 18, 11, $this->GetY() + 60);
        // RIGHT LINE
        $this->Line(201, 18, 201, $this->GetY() + 60);
        // BOTTOM LINE

        $this->Line(11, $this->GetY() + 38, 201, $this->GetY() + 38);
        $this->Line(11, $this->GetY() + 60, 201, $this->GetY() + 60);

        $this->SetFont('Arial', '', 10);
        if($this->order->invoice_wdph == 'false')
        {
            $this->Line(11, $this->GetY() + 18, 201, $this->GetY() + 18);
            $this->Text(25, $this->GetY() + 25, $this->decode($this->language->tax_base . ':'));
            $this->Text(27, $this->GetY() + 32, $this->decode($this->nformat(round(round($maxWDPH,2) + ($this->order->deliveryPrice * $this->eshops->dph),2)) . ' €'));

            $this->Text(75, $this->GetY() + 25, $this->decode($this->language->vat_rate . ':'));
            $this->Text(82, $this->GetY() + 32, $this->decode('20%'));

            $this->Text(120, $this->GetY() + 25, $this->decode($this->language->amout_vat . ':'));
            $this->Text(123, $this->GetY() + 32, $this->decode($this->nformat(round((round($maxDPH,2) - round($maxWDPH,2)) + ($this->order->deliveryPrice * $this->eshops->dph),2)) . ' €'));

            $this->Text(170, $this->GetY() + 25, $this->decode($this->language->total . ':'));
            $this->Text(174, $this->GetY() + 32, $this->decode($this->nformat(round((round($maxDPH,2) + ($this->order->deliveryPrice * $this->eshops->dph)),2)) . ' €'));
        }
        $this->SetFont('ArialBD', '', 14);
        $this->Text(145, $this->GetY() + 48, $this->decode($this->language->total_total . ':'));
        if($this->order->invoice_wdph == 'false'){
            $this->Text(156, $this->GetY() + 55, $this->decode($this->nformat(round((round($maxDPH,2) + ($this->order->deliveryPrice * $this->eshops->dph)),2)) . ' €'));
        }else{
            $this->Text(156, $this->GetY() + 55, $this->decode($this->nformat(round((round($maxWDPH,2) + ($this->order->deliveryPrice * $this->eshops->dph)),2)) . ' €'));
        }
        $this->SetFont('Arial', '', 11);
        $this->Text(12, $this->GetY() + 70, $this->decode($this->language->subscriber . ':'));
        $this->Text(115, $this->GetY() + 70, $this->decode($this->language->supplier . ':'));

        $this->Image($this->eshops->stamp, 140, $this->getY() + 75, 50);
    }

    /**
     * automatics function -> footer rendering
     */
    function Footer()
    {
        $this->SetY(-15);
        $this->SetTextColor(90);
        $this->SetFont('Arial', '', 8);

        $this->Cell(0, 10, $this->decode($this->language->footer), 0, 0, 'L');
        $this->Cell(0, 10, '' . $this->PageNo() . " / {nb}", 0, 0, 'R');
    }
}