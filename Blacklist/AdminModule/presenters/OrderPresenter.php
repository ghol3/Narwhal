<?php

/**
 * This is part of Blacklist CMS developed by Beepvix.
 *
 * @date 04.07.2014
 * @author Томас Петр <tomas.petr@beepvix.com>
 * @package Blacklist\AdminModule\Presenters
 */

namespace 
    Blacklist\AdminModule\Presenters;

use Blacklist\Factory\OrderFactory;
use
    Nette,
    Nette\Database\Context,
    Nette\Mail\Message,
    Nette\Mail\SendmailMailer;

/**
 * @author Томас Петр
 */
class OrderPresenter extends BasePresenter
{   
    /**
     *
     * @var type 
     */
    private $database;
    
    /**
     * This is the constructor of this class just set the
     * database context from Nette to my parent.
     * 
     * @param Nette\Database\Context $db
     */
    public function __construct(Context $db)
    {
        parent::__construct();
        $this->database = $db;
    }
    
    /**
     * @param type $orderId
     */
    public function renderEdit($orderId)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $languageF = new \Blacklist\Factory\LanguageFactory($this->database);
        $this->template->order = $factory->getById($orderId);
        $this->getDefaultInit($this->database);
        $this->template->languages = $languageF->getAll();
        $set = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $this->template->dph = $set->getEshopSettings()->dph;
    }
    
    /**
     * 
     */
    public function handleeditProductsOrderNew()
    {
        $data = $_POST;
        $settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $es = $settings->getEshopSettings();
        
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $factory->getById($data['order']);
        $myOrder->productCount = ($myOrder->productCount + 1);
        $myOrder->update();
        
        $counts = isset($data['count']) ? $data['count'] : array();
        $names  = isset($data['name']) ? $data['name'] : array();
        $prices  = isset($data['price']) ? $data['price'] : array();
        $pricesDPH = isset($data['pricedph']) ? $data['pricedph'] : array();
        $discounts = isset($data['discount']) ? $data['discount'] : array();
        $codes = isset($data['code']) ? $data['code'] : array();
        
        foreach($codes as $id => $value){
            
            $jee = $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)->get($id);
            
            $myargs = array(
                'count'     => $counts[$id],
                'discount'  => $discounts[$id],
                'name'      => $names[$id],
                //'price'     => ($pricesDPH[$id] / $es->dph),
                //'pricedph'  => ($pricesDPH[$id]),
                'code'      => $value
            );
            
            if(round($jee->pricedph,2) == $pricesDPH[$id]){
                $myargs['price'] = ($prices[$id]);
                $myargs['pricedph'] = ($prices[$id] * $es->dph);
            }else{
                $myargs['price'] = ($pricesDPH[$id] / $es->dph);
                $myargs['pricedph'] = ($pricesDPH[$id]);
            }


            $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                    ->where('id', $id)
                    ->update($myargs);
        }
        
        if($data['myproduct'] != 0)
        {
            $exists = $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                    ->where(array('product' => $data['myproduct'], 'orderkey' => $data['order']))->fetch();
            
            if(isset($exists->product)){
                $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                        ->where('id', $exists->id)
                        ->update(array('count' => ($exists->count + 1), 'discount' => $data['mydiscount']));
            }else{
                $pfactory = new \Blacklist\Factory\ProductFactory($this->database);
                $myproductO = $pfactory->getById($data['myproduct']);
                $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                    ->insert(array(
                        'product' => $data['myproduct'], 
                        'orderkey' => $data['order'], 
                        'count' => $data['mycount'],
                        'discount'  => $data['mydiscount'],
                        'name'  => $myproductO->name,
                        'code'  => $myproductO->code,
                        'price' => $myproductO->getPrice(),
                        'pricedph' => $myproductO->pricedph
                        )
                );
            }
        }
        $this->saveLog(STR_462 .' ' . $myOrder->code, $this->database);
        $this->flashMessage(STR_463, 'success');
        
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('products');
        }
    }
    
    /**
     * 
     * @param type $orderId
     */
    public function renderEditOrder($orderId)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $this->template->order = $factory->getById($orderId);
        $this->getDefaultInit($this->database);
        $factoryP = new \Blacklist\Factory\ProductFactory($this->database);
        $this->template->products = $factoryP->getAll();
        $setFactory = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $this->template->eshopSettings = $setFactory->getEshopSettings();
    }
    
    /**
     * @param type $orderId
     */
    public function renderEditProducts($orderId)
    {
        $productF = new \Blacklist\Factory\ProductFactory($this->database);
        $this->template->products = $productF->getAll();
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $this->template->order = $factory->getById($orderId);
        $this->getDefaultInit($this->database);
    }
    
    /**
     *
     */
    public function startup()
    {
        parent::startup();
        $this->template->user = $this->getUser();
    }
    
    /**
     * This method just render the default page in 
     * my homepage...
     */
    public function renderDefault()
    {
        if(!isset($this->template->orders)){
            $factory = new \Blacklist\Factory\OrderFactory($this->database);
            $this->template->orders = $factory->getDone();
        } 
    }  
    
    /**
     * 
     */
    public function renderNew()
    {
        if(!isset($this->template->orders)){
            $factory = new \Blacklist\Factory\OrderFactory($this->database);
            $this->template->orders = $factory->getNews();
        }
    }
    
    /**
     * 
     */
    public function renderBroken()
    {
        if(!isset($this->template->orders)){
            $factory = new \Blacklist\Factory\OrderFactory($this->database);
            $this->template->orders = $factory->getBroken();
        }
    }
    
    /**
     * @param type $status
     * @param type $order
     */
    public function handleChangeStatus($status, $order)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $order = $factory->getById($order);
        $order->status = $status;
        $order->update();
        $this->saveLog(STR_464 . ' ' . $order->code, $this->database);
        
        if($order->status == 'broken')
        {
            $wrhf = new \Blacklist\Factory\WarehouseFactory($this->database);
            foreach($order->getProducts() as $p){
                $wr = $wrhf->get($p->product, 'sklad');
                $wr->stack = ($wr->stack + $p->count);
                $wr->update();
            }
        }
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
    
    /**
     * @param type $status
     */
    public function handleFilterByDate($status)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $orders = $factory->getArray(array('status' => $status), 'createDate DESC');
        $this->template->orders = $orders;
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
    
    /**
     * @param type $status
     */
    public function handleFilterByName($status)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $orders = $factory->getArray(array('status' => $status), 'username');
        $this->template->orders = $orders;
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
    
    /**
     * @param type $status
     */
    public function handleFilterByProductCount($status)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $orders = $factory->getArray(array('status' => $status), 'productCount DESC');
        $this->template->orders = $orders;
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
    
    /**
     * @param type $status
     */
    public function handleFilterByPrice($status)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $orders = $factory->getArray(array('status' => $status), 'pricedph DESC');
        $this->template->orders = $orders;
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
    
    /**
     * @param type $status
     */
    public function handleFilterByNoTrack($status)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $orders = $factory->getArray(array('status' => $status), 'track DESC');
        $this->template->orders = $orders;
        
        if($this->isAjax()){
            $this->redrawControl('orders');
        }
    }
    
    /**
     * @param type $payment
     * @param type $order
     */
    public function handleChangePayment($payment, $order)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $ord = $factory->getById($order);
        $ord->payment = $payment;
        $ord->update();
        $this->saveLog(STR_465 . ' ' . $ord->code, $this->database);
        if($this->isAjax()){
            $this->redrawControl('payment');
            $this->redrawControl('status');
        }
    }
    
    /**
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentEditForm()
    {
        $form = new \Nette\Application\UI\Form;
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $myorder = $factory->getById($this->getParameter('orderId'));
        
        $form->addHidden('order', $myorder->id);
        
        $form->addText('installments', 'Splátky:')
                ->setDefaultValue($myorder->installments);
        
        $form->addText('createDate', 'Datum')
                ->setDefaultValue($myorder->createDate);
        
        $form->addText('username', 'Jméno:')
                ->setRequired(STR_681)
                ->setDefaultValue($myorder->username);
        
        $form->addText('surname', 'Příjmení')
                ->setRequired(STR_682)
                ->setDefaultValue($myorder->surname);
        
        $form->addText('address', 'Ulice a čp.')
                ->setRequired(STR_683)
                ->setDefaultValue($myorder->address);
        
        $form->addText('city', 'Město')
                ->setRequired(STR_684)
                ->setDefaultValue($myorder->city);
        
        $form->addText('zip', 'PSČ')
                ->setRequired(STR_685)
                ->setDefaultValue($myorder->zip);
        
        $form->addText('firm' , 'Firma')
                ->setDefaultValue($myorder->firm);
        
        $form->addText('ico', 'IČO')
                ->setDefaultValue($myorder->ico);
        
        $form->addText('dic', 'DIČ')
                ->setDefaultValue($myorder->dic);
        
        $form->addText('email', 'Email')
                ->setType('email')
                ->setDefaultValue($myorder->email);
        
        $form->addText('phone', 'Telefon')
                ->setDefaultValue($myorder->phone);
        
        $form->addTextArea('note', 'Poznámka')
                ->setDefaultValue($myorder->note);
        
        $form->addText('firm_address', 'Adresa')
                ->setDefaultValue($myorder->firm_address);
        
        $form->addText('firm_city', 'Město')
                ->setDefaultValue($myorder->firm_city);
        
        $form->addText('firm_zip', 'PSČ')
                ->setDefaultValue($myorder->firm_zip);
        $form->addText('deliveryType', 'typ dopravy')
                ->setDefaultValue($myorder->deliveryType);
        $form->addText('deliveryPrice', 'cena dopravy')
                ->setDefaultValue($myorder->deliveryPrice);

        $form->addText('country', 'country')
            ->setDefaultValue($myorder->country);

        $form->addSelect('payment', 'Platba', array(
            'D' => 'Dobírkou',
            'H' => 'Hotově',
            'P' => 'Převodem',
            'K' => 'Kartou'
        ))->setDefaultValue($myorder->payment);

        $form->addText('state', 'Stát')
            ->setDefaultValue($myorder->state);
        
        $dealers = array('0' => 'ne');
        $deals = new \Blacklist\Factory\DealerFactory($this->database);
        foreach($deals->getCompleteAll() as $deal){
            $dealers[$deal->id] = $deal->identificator;
        }
        
        $form->addSelect('commission', 'Provize', $dealers)
                ->setDefaultValue($myorder->commission);
        
        $form->addSubmit('send', 'ULOŽIT ZMĚNY');
        $form->onSuccess[] = $this->editOrderSubmitted;
        return $form;
    }
    
    /**
     * @param type $myorder
     */
    public function renderEmails($myorder)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $this->template->emails = $factory->getEmails($myorder);
    }
    
    /**
     * @param \Nette\Application\UI\Form $form
     */
    public function editOrderSubmitted(\Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $factory->getById($data->order);
        $myOrder->make($data);
        $myOrder->setDatabase($this->database);
        $myOrder->update();
        
        if($data->commission != 0)
        {
            $dealerFactory = new \Blacklist\Factory\DealerFactory($this->database);
            $myDealer = $dealerFactory->getById($data->commission);
            $myDealer->city = $data->city;
            $myDealer->lastOrder = $data->order;
            $myDealer->name = $data->username . ' ' . $data->surname;
            $myDealer->name .= ($data->firm != '') ? ' - ' . $data->firm : '';
            $myDealer->email = $data->email;
            $myDealer->setDatabase($this->database);
            $myDealer->update();

            $ox = $this->database->table('turnover')->where(array('dealer'=> $myDealer->id, 'orderkey' => $myOrder->id))->fetch();
            if(!isset($ox->id)){
                $this->database->table('turnover')->insert(array('dealer' => $myDealer->id, 'orderkey' => $myOrder->id));
            }
            $this->database->table(\Blacklist\Model\String\TableString::ORDERS)
                    ->where(array('email' => $myDealer->email))
                    ->update(array('commission' => $data->commission));
        }
        $this->saveLog(STR_466 . ' ' . $myOrder->code, $this->database);
        $this->flashMessage(STR_467, 'success');
        $this->redirect('Order:edit', $data->order);
    }
    
    /**
     * 
     */
    public function renderAddNewOrder()
    {
        $settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $eshopsettings = $settings->getEshopSettings();
        $order = new \Blacklist\Object\OrderObject(($eshopsettings->last_order + 1 . '/' . date("Y"))
                , '', '', '', '', '', '', 'sk', 'PPL', 'H', 'www.antiradary.k', 'sk', '€');
        $order->status = 'new';
        $order->country = 'Slovenská republika';
        $order->facture_lang = $eshopsettings->default_language;
        $order->createuser = $this->getUser()->id;
        $order->setDatabase($this->database);
        $order->create();
        $this->saveLog(STR_468 . ' '. $order->code, $this->database);
        $eshopsettings->last_order = ($eshopsettings->last_order + 1);
        $settings->updateEshopSettings($eshopsettings);
        $this->redirect('Order:new');
    }
    
    /**
     * @param type $order
     */
    public function handleGetPDF($order)
    {
        $xaxa = new \Blacklist\Factory\OrderFactory($this->database);
        $settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $pdf = new \Blacklist\Model\Invoice\InvoicePDF($xaxa->getById($order),
                $settings->getBasicSettings(), $settings->getEshopSettings());
        $pdf->build();
        $pdf->Output();
    }
    
    /**
     * @param type $order
     */
    public function renderPrint($order)
    {
        $orderFactory = new \Blacklist\Factory\OrderFactory($this->database);
        $settingsFactory = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $this->template->order = $orderFactory->getById($order);
        $this->template->eshopSettings = $settingsFactory->getEshopSettings();
        $this->template->settings = $settingsFactory->getBasicSettings();
        $this->template->language = $this->template->order->getLanguage();
    }
    
    /**
     * @param type $order
     * @param type $mails
     */
    public function handleSendMails($order, $mails)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $this->sendMailHtmlContent($factory->getById($order), explode(',', $mails), false);    
        $this->flashMessage(STR_470 . ': ' . $mails, 'success');
        $this->redirect('Order:edit', $order);
    }
    
    private function sendMailHtmlContent(\Blacklist\Object\OrderObject $myorder, $myMails, $invoice)
    {
        $produkty = '';
        $totaldph = 0;
        $totalwdph = 0;
                
        foreach($myorder->getProducts() as $product){
                
            $produkty .= '<tr>
                <td><font face="Tahoma">'.$product->name.'</font></td>
                <td align="right"><font face="Tahoma">'.$product->pricedph.' €</font></td><td align="right"><font face="Tahoma">'.$product->count.'x</font></td>
                <td align="right"><font face="Tahoma">'.($product->pricedph * $product->count).' €</font></td>
                </tr>';
                $totaldph += round((round($product->pricedph,2) * $product->count),2);
                $totalwdph += round((round($product->price,2) * $product->count),2);
            }
                
            $settings = new \Blacklist\Model\Settings\SettingsAction($this->database);
            $esettings = $settings->getBasicSettings();

            $mail = new Message;
            $mail->setFrom($esettings->site_email);
            $mailString = '';
            $first = true;
            foreach($myMails as $myMail){
            if(filter_var($myMail, FILTER_VALIDATE_EMAIL)) {
                    $mail->addTo($myMail);
                    $mailString .= ($first) ? $myMail : (',' . $myMail);
                    $first = false;
                    // save email to database :) for orders
                    $this->saveEmail($myMail, $myorder->id, 'N');
                }
            }
            
            if($invoice){
                $pdf = new \Blacklist\Model\Invoice\InvoicePDF($myorder, $esettings, $settings->getEshopSettings());
                $pdf->build();
                $pdf->Output('faktura' . $myorder->id . '.pdf');
                $mail->addAttachment('faktura' . $myorder->id . '.pdf', null, 'application/pdf');
            }
            
            $pay = '';
            if($myorder->payment == 'P'){$pay = 'Prevodom na účet';}
            else if($myorder->payment == 'K'){$pay = 'Kartou';}
            else if($myorder->payment == 'D'){$pay = 'Dobierkou';}
            else {$pay = 'V hotovosti';}
                
            $fakturacni = '';
                if($myorder->firm != ''){
                    $fakturacni = '<td valign="top"><font face="Tahoma"><u>Fakturačné údaje</u>:</font></td>
                                            <td valign="top"><font face="Tahoma">'.$myorder->firm.'<br>
                                                '.$myorder->address.'<br>
                                                '.$myorder->zip.' '.$myorder->city.'<br>
                                                IČ: '.$myorder->ico.'<br>
                                                DIČ: '.$myorder->dic.'</font></td>';
                }
                
                $delivery = '';
                if($myorder->deliveryType != ''){
                    $delivery = '<tr>
                                            <td valign="top"><font face="Tahoma"><u>Doprava</u>:</font></td>
                                            <td valign="top"><font face="Tahoma"><b>'.$myorder->deliveryType.', kód pre sledovanie <a href="http://ppl.cz/main2.aspx?cls=Package&idSearch='. $myorder->track . '">'.$myorder->track.'</a></b></font></td>
                                        </tr>';
                }
                $mail->setSubject($esettings->siteurl . ' - Vaša objednávka ' . $myorder->code);
                $mail->setHtmlBody(''
                        . '<font color="#F16101" face="Tahoma" size="4">'. $esettings->siteurl .'</font><br/>
                           <font face="Tahoma">Vaša objednávka bola spracovaná.</font><br/><br/>
                           <font face="Tahoma">
                                <table cellpadding="3" cellspacing="1">
                                    <tbody>
                                        <tr>
                                            <td valign="top"><font face="Tahoma"><u>Objednávka</u>:</font></td>
                                            <td valign="top"><font face="Tahoma">' . $myorder->createDate .', číslo: '. $myorder->code . '</font></td>
                                        </tr>
                                        '.$delivery.'
                                        <tr>
                                            <td valign="top"><font face="Tahoma"><u>Platba</u>:</font></td>
                                            <td valign="top"><font face="Tahoma">'.$pay.'</font></td>
                                        </tr>
                                        <tr>
                                            <td valign="top"><font face="Tahoma"><u>Dodací adresa</u>:</font></td>
                                            <td valign="top"><font face="Tahoma">'.$myorder->username .' ' . $myorder->surname. '<br>
                                                '.$myorder->address.'<br>
                                                '.$myorder->zip.' '.$myorder->city.' (tel.: '.$myorder->phone.')</font></td>
                                        </tr>
                                        <tr>
                                            '.$fakturacni.'
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <table cellpadding="3" cellspacing="1" border="1">
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#dddddd"><font color="#444444" face="Tahoma"><b>Názov</b></font></td>
                                            <td align="right" bgcolor="#dddddd"><font color="#444444" face="Tahoma"><b>Cena bez DPH / ks</b></font></td>
                                            <td align="right" bgcolor="#dddddd"><font color="#444444" face="Tahoma"><b>Počet</b></font></td>
                                            <td align="right" bgcolor="#dddddd"><font color="#444444" face="Tahoma"><b>Cena bez DPH</b></font></td>
                                        </tr>
                                        '.$produkty.'
                                        <tr>
                                            <td colspan="3" align="right"><font face="Tahoma">Základ daně:</font></td>
                                            <td align="right"><font face="Tahoma">'.$totalwdph.' €</font></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" align="right"><font face="Tahoma">DPH (20%):</font></td>
                                            <td align="right"><font face="Tahoma">+'.($totaldph - $totalwdph).' €</font></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" align="right"><font face="Tahoma"><b>Celkom k úhrade:</b></font></td>
                                            <td align="right"><font face="Tahoma"><b>'.$totaldph.' €</b></font></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                V prípade nejasností, pripomienok alebo otázok sa na nás, prosím, obráťte: buď odpoveďou na tento email alebo telefonicky.
                                <br><br>
                                S pozdravom<br>
                                <br>
                                <b>'.$esettings->siteurl.'</b><br>
                                <a href="http://www.antiradary.sk" target="_blank">www.antiradary.sk</a><br>
                                <a value="'.$esettings->phone.'" target="_blank"><span class="js-phone-number highlight-phone" title="">'.$esettings->phone.'</span></a><br>
                                <a href="//e.mail.ru/compose/?mailto=mailto%3ainfo@antiradary.net" target="_blank">info@antiradary.sk</a><br>

                                <font color="#C00000"><b>
                                    Výhradný distribútor produktov Beltronics, Escort Radar a AntiLaser pre SK.<br>
                                    Exclusive importer of Beltronics, Escort Radar and AntiLaser products for Slovakia.
                                    </b>
                                </font>
                                <br><br>
                                Pri zasielaní odpovede prosím pre prehľadnosť zanechávajte v emaile pôvodný text.<br>
                                When replying please leave the history of the previous communication for better orientation.</font>'
                        
                        );
                
        
            $mailer = new SendmailMailer;
            $mailer->send($mail);
    }
    
    /**
     * @param type $email
     * @param type $order
     * @param type $status
     */
    private function saveEmail($email, $order, $status)
    {
        $mailObject = new \Blacklist\Object\OrderEmailObject(
            $this->getUser()->id,
            $email, 
            $status, 
            $order
        );
        $mailObject->setDatabase($this->database);
        $mailObject->create();
    }
    
    /**
     * @param type $order
     * @param type $mails
     */
    public function handleSendFMails($order, $mails)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $this->sendMailHtmlContent($factory->getById($order), explode(',', $mails), true);    
        $this->flashMessage(STR_470 . ': ' . $mails, 'success');
        $this->redirect('Order:edit', $order);
    }
    
    /**
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentNewProductOrder()
    {
        $form = new \Nette\Application\UI\Form;
        $array = array('0' => STR_472);
        $factory = new \Blacklist\Factory\ProductFactory($this->database);
        foreach($factory->getAll() as $product){
            $array[$product->id] = $product->name;
        }
        $form->addSelect('product', 'Produkty:', $array)
                ->setDefaultValue(0);
        $form->addText('discount', 'Sleva');
        $form->addSubmit('send', 'Odeslat');
        $form->addHidden('order', $this->getParameter('orderId'));
        $form->onSuccess[] = $this->newProductOrderSubmitted;
        return $form;
    }
    
    /**
     * @param \Nette\Application\UI\Form $form
     */
    public function newProductOrderSubmitted(\Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        if($data->product != 0)
        {
            $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                    ->insert(array(
                        'product' => $data->product, 
                        'orderkey' => $data->order, 
                        'count' => 1,
                        'discount'  => $data->discount
                        )
                    );
        }
        
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $factory->getById($data->order);
        $myOrder->productCount = ($myOrder->productCount + 1);
        $myOrder->update();
        $this->saveLog(STR_473 . ' ' . $myOrder->code, $this->database);
        if($this->isAjax()){
            $this->redrawControl('products');
        }
    }
    
    /**
     * @param type $productId
     * @param type $order
     */
    public function handledeleteProduct($productId, $order)
    {
        $this->database->table(\Blacklist\Model\String\TableString::ORDER_PRODUCTS)
                ->where('id', $productId)
                ->delete();
        
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $factory->getById($order);
        $myOrder->productCount = ($myOrder->productCount - 1);
        $myOrder->upt();
        
        $this->flashMessage(STR_474, 'success');
        $this->saveLog(STR_475 . ' ' . $myOrder->code, $this->database);
        if($this->isAjax()){
            $this->redrawControl('products');
        }
    }
    
    /**
     * @param type $order
     */
    public function handleDuplicateAddress($order)
    {
        $fctry = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $fctry->getById($order);
        
        $newOrder = new \Blacklist\Object\OrderObject('CODE', $myOrder->username, 
                $myOrder->surname, $myOrder->address, $myOrder->city, '', 
                '', 'sk', 'PPL', 'D', $myOrder->shop, 'sk', '€');
        $newOrder->status = $myOrder->status;
        
        $newOrder->setDatabase($this->database);
        $newOrder->create();
        $this->flashMessage(STR_476 , 'success');
        $this->saveLog(STR_477 . ' ' . $myOrder->code . ')', $this->database);
        if($this->isAjax()){
            $this->redrawControl('flashes');
        }
    }
    
    /**
     * @param type $order
     */
    public function handleDuplicateAll($order)
    {
        $fctry = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $fctry->getById($order);
        $myOrder->id = NULL;
        $myOrder->createDate = NULL;
        $myOrder->setDatabase($this->database);
        $myOrder->create();
        
        $this->flashMessage(STR_478, 'success');
        $this->saveLog(STR_479 . ' ' . $myOrder->code, $this->database);
        if($this->isAjax()){
            $this->redrawControl('flashes');
        }
    }
    
    /**
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentChangeTrack()
    {
        $form = new \Nette\Application\UI\Form;
        $form->addText('track', 'track');
        $form->addHidden('order', $this->getParameter('orderId'));
        $form->addSubmit('send');
        $form->onSuccess[] = $this->changeTrackSubmitted;
        return $form;
    }
    
    /**
     * @param \Nette\Application\UI\Form $form
     */
    public function changeTrackSubmitted(\Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        $orderF = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $orderF->getById($data->order);
        $myOrder->track = $data->track;
        $myOrder->setDatabase($this->database);
        $myOrder->update();
        
        $this->flashMessage(STR_481, 'success');
        $this->redirect('Order:edit', $data->order);
    }
    
    /**
     * 
     * @param type $order
     * @param type $note
     */
    public function handleChangeNote($order, $note)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $factory->getById($order);
        $myOrder->note = (string) $note;
        $myOrder->setDatabase($this->database);
        $myOrder->update();
        
        $this->flashMessage(STR_482, 'success');
        $this->saveLog(STR_483 . ' ' . $myOrder->code, $this->database);
        if($this->isAjax()){
            $this->redirect('note');
        }
    }
    
    /**
     * 
     * @param type $order
     * @param type $date
     */
    public function handleChangeOrderDate($order)
    {
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $myOrder = $factory->getById($order);
        $iDate = new \Nette\DateTime($_POST['mydate']);
        $myOrder->createDate = $iDate->format('Y-m-d');
        $myOrder->setDatabase($this->database);
        $myOrder->update();
        
        $this->flashMessage(STR_484 . ' ' . $myOrder->createDate . '.', 'success');
        $this->saveLog(STR_485 . ' ' . $myOrder->code, $this->database);
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('date');
        }
    }
    
    /**
     * 
     * @param type $order
     * @param type $langid
     */
    public function handleChangeLanguage($order, $langid)
    {
        $orderFactory = new \Blacklist\Factory\OrderFactory($this->database);
        $myorder = $orderFactory->getById($order);
        $myorder->facture_lang = $langid;
        $myorder->update();
        
        $this->saveLog(STR_486 . ' ' . $myorder->code, $this->database);
        $this->flashMessage(STR_487 . ' - '. $myorder->getLanguage()->name , 'success');
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('languages');
        }
    }
    
    /**
     * 
     * @param type $order
     */
    public function handleSend($order)
    {
        $orderFactory = new \Blacklist\Factory\OrderFactory($this->database);
        $set = new \Blacklist\Model\Settings\SettingsAction($this->database);
        $myorder = $orderFactory->getById($order);
        if($myorder->send != 1){
            $myorder->send = 1;
            $myorder->update();

            $this->sendMailHtmlContent($myorder, $set->getBasicSettings()->site_email, true);
            $this->flashMessage(STR_488, 'success');
            //$this->saveLog('označil objednávku jako odeslanou (objednávka s kódem ' . $myorder->code . ') + email byl odeslán na ' . $esettings->site_email, $this->database);
        }else{
            $myorder->send = '0';
            $myorder->update();
            
            foreach($myorder->getProducts() as $product){
                $original = $product->getProductObject();
                $original->stock = ($original->stock + $product->count);
                $original->update();
            }
            $this->flashMessage(STR_489, 'success');
        }
       
        if($this->isAjax()){
            
            $this->redrawControl('orders');
            $this->redrawControl('status');
            $this->redrawControl('flashes');
        }
    }
    
    /**
     * 
     * @param type $order
     */
    public function handleSenden($order)
    {
        $orderFactory = new \Blacklist\Factory\OrderFactory($this->database);
        $myorder = $orderFactory->getById($order);
        if($myorder->senden != 1){
            $myorder->senden = 1;
            $myorder->update();
            
            $wfact = new \Blacklist\Factory\WarehouseFactory($this->database);
            foreach($myorder->getProducts() as $product){
                $myp = $wfact->get($product->product, 'sklad');
                $myp->stack = ($myp->stack - $product->count);
                $myp->setDatabase($this->database);
                $ox = $myp->getProductObject();
                $ox->setTotalSolds($product->count);
                $myp->update();
                
                
                $log = new \Blacklist\Object\WarehouseLog();
                $log->code = $myp->getProductObject()->code;
                $log->note = $myorder->code;
                $log->product = $myp->product;
                $log->stack = ($product->count * -1);
                $log->user = $this->getUser()->id;
                $log->warehouse = 'sklad';
                $log->setDatabase($this->database);
                $log->create();
            }
            
            $this->saveLog(STR_490 . ' ' . $myorder->code . ' ' . STR_491, $this->database);
            $this->flashMessage(STR_492, 'success');
        }else{
            $myorder->senden = '0';
            $myorder->update();
            
            $wfact = new \Blacklist\Factory\WarehouseFactory($this->database);
            foreach($myorder->getProducts() as $product){
                $myp = $wfact->get($product->product, 'sklad');
                $myp->stack = ($myp->stack + $product->count);
                $myp->setDatabase($this->database);
                $xxx = $myp->getProductObject();
                $xxx->setTotalSolds(($product->count * (-1)));
                $myp->update();
                
                $log = new \Blacklist\Object\WarehouseLog();
                $log->code = $myp->getProductObject()->code;
                $log->note = $myorder->code;
                $log->product = $myp->product;
                $log->stack = ($product->count);
                $log->user = $this->getUser()->id;
                $log->warehouse = 'sklad';
                $log->setDatabase($this->database);
                $log->create();
            }
            
            $this->flashMessage(STR_493, 'success');
        }
      
        if($this->isAjax()){
            $this->redrawControl('orders');
            $this->redrawControl('status');
            $this->redrawControl('flashes');
        }
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentEditNoteForm()
    {
        $form = new \Nette\Application\UI\Form;
        $orderf = new \Blacklist\Factory\OrderFactory($this->database);
        $order = $orderf->getById($this->getParameter('orderId'));
        $form->addTextArea('note', '')->setDefaultValue($order->note);
        $form->addHidden('order', $order->id);
        $form->addSubmit('send');
        $form->onSuccess[] = $this->editNoteFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Nette\Application\UI\Form $form
     */
    public function editNoteFormSubmitted(\Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
        $orderFactory = new \Blacklist\Factory\OrderFactory($this->database);
        $order = $orderFactory->getById($data->order);
        $order->note = $data->note;
        $order->setDatabase($this->database);
        $order->update();
        
        $this->flashMessage(STR_494, 'success');
        $this->saveLog(STR_495 . ' ' . $order->code, $this->database);
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('note');
        }
    }
    
    /**
     * 
     * @param type $order
     */
    public function handleExport($order, $i)
    {
        $orderF = new \Blacklist\Factory\OrderFactory($this->database);
        $myorder = $orderF->getById($order);
        if($i == 1){$myorder->export = '0';}else{$myorder->export = '1';}
        $myorder->doneuser = $this->getUser()->id;
        $myorder->update();
        
        $this->flashMessage(STR_496, 'success');
        $this->saveLog(STR_490 . ' ' . $myorder->code . ' '. STR_487, $this->database);
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('export');
        }
    }
    
    /**
     * 
     * @return \Nette\Application\UI\Form
     */
    protected function createComponentSearchForm()
    {
        $form = new \Nette\Application\UI\Form;
        $form->addText('search', 'Hledat:');
        $form->addSubmit('send');
        $form->onSuccess[] = $this->searchFormSubmitted;
        return $form;
    }
    
    /**
     * 
     * @param \Nette\Application\UI\Form $form
     */
    public function searchFormSubmitted(\Nette\Application\UI\Form $form)
    {
        $data = $form->getValues();
       
        $factory = new \Blacklist\Factory\OrderFactory($this->database);
        $this->template->orders = $factory->search($data->search);
        
        if($this->isAjax()){
            $this->redrawControl('flashes');
            $this->redrawControl('orders');
        }
    }
    
    /**
     * 
     * @param type $order
     */
    public function handlePaid($order)
    {
        $ordf = new \Blacklist\Factory\OrderFactory($this->database);
        $myorder = $ordf->getById($order);
        
        if($myorder->paid == 'Y')
        {
            $myorder->paid = 'N';
            $myorder->status = 'new';
            $myorder->doneuser = 0;
            $myorder->update();
        }
        else
        {
            $myorder->paid = 'Y';
            $myorder->status = 'done';
            $myorder->doneuser = $this->getUser()->id;
            $myorder->update();
            if($myorder->send == 0){
            //    $this->handleSend($order);
            }
            $this->flashMessage(STR_498, 'success');
        }
        
        if($this->isAjax()){
            $this->redrawControl('status');
            $this->redrawControl('flashes');
        }
    }

    /**
     * @param $state
     * @param $order
     */
    public function handleChangeInvoiceState($order)
    {
        $of = new OrderFactory($this->database);
        $myord = $of->getById($order);
        $myord->invoice_wdph = ($myord->invoice_wdph == 'true') ? 'false' : 'true';
        $myord->update();

        if($this->isAjax()){
            $this->redrawControl('invoicestate');
        }
    }
}