 <?php
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Matrisa normalarini hisoblash funktsiyasi
function calculateMatrixNorms($matrix)
{
    $norms = array();

    // Matrisa normalarini hisoblaymiz
    $norms['Frobenius'] = calculateFrobeniusNorm($matrix);
    $norms['Max'] = calculateMaxNorm($matrix);

    return $norms;
}

// Frobenius normalasini hisoblash
function calculateFrobeniusNorm($matrix)
{
    $sumOfSquares = 0;

    // Matrisa elementlarining kvadratlarini yig'indisini hisoblaymiz
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            $sumOfSquares += pow($element, 2);
        }
    }

    
    $frobeniusNorm = sqrt($sumOfSquares);

    return $frobeniusNorm;
}

// Maksimal normalani hisoblash
function calculateMaxNorm($matrix)
{
    $maxNorm = 0;

    // Matrisaning elementlarini tekshirib, maksimal normalani hisoblaymiz
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            $maxNorm = max($maxNorm, abs($element));
        }
    }

    return $maxNorm;
}

// Matrisa normalarini hisoblash
$matrixNorms = calculateMatrixNorms($matrix);

// Natijani chiqaramiz
echo "Matrisa normalari:\n";
echo "Frobenius normasi: " . $matrixNorms['Frobenius'] . "\n";
echo "Max normasi: " . $matrixNorms['Max'];
?>

