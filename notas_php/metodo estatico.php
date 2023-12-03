class CPCValidator {
    public static function validate($cpc) {
        // Verifique se o CPC é um número positivo
        if (is_numeric($cpc) && $cpc > 0) {
            return true; // CPC válido
        } else {
            return false; // CPC inválido
        }
    }
}

// Exemplo de uso:
$cpc = 2.5; // Substitua isso pelo seu valor de CPC
if (CPCValidator::validate($cpc)) {
    echo "CPC válido.";
} else {
    echo "CPC inválido.";
}


class CPCValidator {
    private $cpc;

    public function getCPC() {
        return $this->cpc;
    }

    public function setCPC($cpc) {
        if (is_numeric($cpc) && $cpc > 0) {
            $this->cpc = $cpc;
        } else {
            echo "CPC inválido. O CPC deve ser um número positivo.";
        }
    }

    public function validate() {
        if (isset($this->cpc)) {
            return true; // CPC válido
        } else {
            return false; // CPC não definido ou inválido
        }
    }
}

// Exemplo de uso:
$cpcValidator = new CPCValidator();
$cpcValidator->setCPC(2.5); // Defina o valor do CPC
if ($cpcValidator->validate()) {
    echo "CPC válido: " . $cpcValidator->getCPC();
} else {
    echo "CPC inválido.";
}

class CPCValidator {
    private $cpc;

    public function getCPC() {
        return $this->cpc;
    }

    public function setCPC($cpc) {
        if (is_numeric($cpc) && $cpc > 0) {
            $this->cpc = $cpc;
        } else {
            echo "CPC inválido. O CPC deve ser um número positivo.";
        }
    }

    public function validate() {
        if (isset($this->cpc)) {
            return true; // CPC válido
        } else {
            return false; // CPC não definido ou inválido
        }
    }

    public static function validateCPCStatic($cpc) {
        if (is_numeric($cpc) && $cpc > 0) {
            return true; // CPC válido
        } else {
            return false; // CPC inválido
        }
    }
}

// Exemplo de uso:
$cpcValidator = new CPCValidator();
$cpcValidator->setCPC(2.5); // Defina o valor do CPC usando método set
if ($cpcValidator->validate()) {
    echo "CPC válido: " . $cpcValidator->getCPC();
} else {
    echo "CPC inválido.";
}

// Exemplo de uso do método estático:
$cpc = 3.0; // Substitua isso pelo seu valor de CPC
if (CPCValidator::validateCPCStatic($cpc)) {
    echo "CPC estático válido: " . $cpc;
} else {
    echo "CPC estático inválido.";
}

