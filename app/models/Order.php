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

  public function __construct($data) {
    $this->SalesOrder = $data($data['salesOrder']);
    $this->SoldToParty = $data['soldToParty'];
    $this->CustRef = $data['customerReference'];
    $this->DeliveryDate = $data($data['requestedDelivDate']);
    $this->OverallStatus = $data($data['overallStatus']);
    $this->NetValue = $data($data['netValue']);
    $this->DocumentDate = $data($data['documentDate']);
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
