<?php

namespace App\Presenters;

use Nette;


final class ProductPresenter extends Nette\Application\UI\Presenter
{
    /** @var \App\Config @inject  */
	public $config;

    /** @var \App\ProductModel @inject  */
	public $modelProduct;

    /** @var \App\ExportXLS @inject  */
	public $excel;

    public function actionDefault(){
        $toSanitaze = ["!!!!SIMPLE_HTML_DOM__VOKU__AMP!!!!quot;" => '"',
                        "!!!!SIMPLE_HTML_DOM__VOKU__PLUS!!!!" => '+',
                        "!!!!SIMPLE_HTML_DOM__VOKU__PERCENT!!!!" => '%',];
        $categories = $this->modelProduct->getCategories();
        $count = $this->modelProduct->getTotalCount();
        // $products = $this->modelProduct->getAllProducts();
        $test = "abc";
        $new = str_replace($test, "g", "p");
        dd($new);
        // $fp = fopen($this->config->getWwwDir().'/products.csv', 'w');

        // foreach ($products as $p) {
        //     fputcsv($fp, $p->toArray());
        // }

        // fclose($fp);
        // dd($count);
    }
    #include the export-xls.class.php file
// require('export-xls.class.php');


// $filename = 'test.xls'; // The file name you want any resulting file to be called.

// #create an instance of the class
// $xls = new ExportXLS($filename);


// #lets set some headers for top of the spreadsheet
// #

// $header = "Test Spreadsheet"; // single first col text
// $xls->addHeader($header);

// #add blank line
// $header = null;
// $xls->addHeader($header);

// #add 2nd header as an array of 3 columns
// $header[] = "Name";
// $header[] = "Age";
// $header[] = "Height";

// $xls->addHeader($header);


// # Lets add some sample data
// #
// # Of course this can be from a SQL query or anyother data source
// #

// #first line
// $row[] = "Jack";
// $row[] = "24";
// $row[] = "6ft 5";
// $xls->addRow($row);

// #second line
// $row = array();
// $row[] = "Jim";
// $row[] = "22";
// $row[] = "5ft 5";
// $xls->addRow($row);

// #add a multi dimension array
// $row = array();
// $row[] = array(0 =>'Jess', 1=>'54', 2=>'4ft');
// $row[] = array(0 =>'Luke', 1=>'6', 2=>'2ft');
// $xls->addRow($row);


// # You can return the xls as a variable to use with;
// # $sheet = $xls->returnSheet();
// #
// # OR
// #
// # You can send the sheet directly to the browser as a file 
// #
// $xls->sendFile();
}