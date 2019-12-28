<?php

    use PHPUnit\Framework\TestCase;
    use Red\PhpCep\Search;

    class SearchTest extends TestCase{

        /**
         * @dataProvider dadosTeste
         * @param string $input
         * @param array $esperado
         */
        public function testeGetAddressFromZipcodeDefaultUsage(string $input, array $esperado) {
            $resultado = new Search;
            $resultado = $resultado->getAddressFromZipcode($input);

            $this->assertEquals($esperado, $resultado);
        }

        public function dadosTeste(){
            return [
                "Endereço Lugar A" => [
                    "83035090",
                    [
                        "cep" => "83035-090",
                        "logradouro" => "Rua Padre João da Veiga Coutinho",
                        "complemento" => "",
                        "bairro" => "Cidade Jardim",
                        "localidade" => "São José dos Pinhais",
                        "uf" => "PR",
                        "unidade" => "",
                        "ibge" => "4125506",
                        "gia" => ""
                    ]
                ],
                "Endereço Lugar B" => [
                    "83035170",
                    [
                        "cep" => "83035-170",
                        "logradouro" => "Rua Aristides França",
                        "complemento" => "",
                        "bairro" => "Cidade Jardim",
                        "localidade" => "São José dos Pinhais",
                        "uf" => "PR",
                        "unidade" => "",
                        "ibge" => "4125506",
                        "gia" => ""
                    ]
                ],
            ];
        }
    }