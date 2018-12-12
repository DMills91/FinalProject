<?php
class Order153
{
  public $SalesOrder;
  public $SoldToParty;
  public $CustRef;
  public $DeliveryDate;
  public $OverallStatus;
  public $NetValue;
  public $DocumentDate;

  public function __construct($row) {
    $this->SalesOrder = $row['SalesOrder'];
    $this->SoldToParty = $row['SoldToParty'];
    $this->CustRef = $row['CustRef'];
    $this->DeliveryDate = $row['DeliveryDate'];
    $this->OverallStatus = $row['OverallStatus'];
    $this->NetValue = $row['NetValue'];
    $this->DocumentDate = $row['DocumentDate'];
  }

  public static function fetchOrder153() {
    // 1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    // 2. Prepare the query
    $sql = 'SELECT * FROM Deere';
    $statement = $db->prepare($sql);
    // 3. Run the query
    $success = $statement->execute();
    // 4. Handle the results
    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $theOrder153 =  new Order153($row);
      array_push($arr, $theOrder153);
    }
    return $arr;
  }
}
