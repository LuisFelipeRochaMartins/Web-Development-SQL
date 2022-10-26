 <?php
    $data = file_get_contents('contact.json'); 
    $id = $data["ID"];
    $data = json_decode($data);

    unset($data[$id]);

    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('contact.json',$data);

?>