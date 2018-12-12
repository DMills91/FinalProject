<?php
class Order
{
  public $SalesOrder;
  public $SoldToParty;
  public $CustRef;
  public $DeliveryDate;
  public $OverallStatus;
  public $NetValue;
  public $DocumentDate;

  public function __construct($row) {
    $this->SalesOrder = $row['salesOrder'];
    $this->SoldToParty = $row['soldToParty'];
    $this->CustRef = $row['customerReference'];
    $this->DeliveryDate = $row['requestedDelivDate'];
    $this->OverallStatus = $row['overallStatus'];
    $this->NetValue = $row['netValue'];
    $this->DocumentDate = $row['documentDate'];
  }

  public static function fetchOrders() {
    // 1. Connect to the database
    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    // 2. Prepare the query
    $sql = 'SELECT * FROM Paccar';
    $statement = $db->prepare($sql);
    // 3. Run the query
    $success = $statement->execute();
    // 4. Handle the results
    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $theOrder =  new Order($row);
      array_push($arr, $theOrder);
    }
    return $arr;
  }
}
