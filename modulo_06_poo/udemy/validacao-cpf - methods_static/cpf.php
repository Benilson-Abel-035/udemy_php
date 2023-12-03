<?php

class CPFValidator {
    public static function validarCPF($cpf) {
        $cpf = preg_replace('/[^0-9]/', '', $cpf); // Remove caracteres não numéricos

        if (strlen($cpf) != 11) {
            return false; // Um CPF válido deve ter 11 dígitos numéricos
        }

        // Calcula o primeiro dígito verificador
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += intval($cpf[$i]) * (10 - $i);
        }
        $primeiroDigito = 11 - ($soma % 11);
        if ($primeiroDigito > 9) {
            $primeiroDigito = 0;
        }

        // Calcula o segundo dígito verificador
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += intval($cpf[$i]) * (11 - $i);
        }
        $segundoDigito = 11 - ($soma % 11);
        if ($segundoDigito > 9) {
            $segundoDigito = 0;
        }

        // Verifica se os dígitos verificadores calculados são iguais aos dígitos do CPF
        return $cpf[9] == strval($primeiroDigito) && $cpf[10] == strval($segundoDigito);
    }
}

// Exemplo de uso
$cpf = "123.456.789-09"; // Substitua pelo CPF que deseja validar
if (CPFValidator::validarCPF($cpf)) {
    echo "CPF válido: " . $cpf;
} else {
    echo "CPF inválido!";
}

?>
