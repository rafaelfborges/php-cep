<?php 

namespace Red\PhpCep;

class Search {
  private $url = "https://viacep.com.br/ws/";

  public function getAddressFromZipcode(string $zipCode): array{
    $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

    $get = file_get_contents($this->url . $zipCode . "/json");

    print_r($get);
  }
}