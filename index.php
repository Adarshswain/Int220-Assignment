<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class CA
    {
        public $maxCA = 40;
        public $ca1 = 57;
        public $ca2 = 88;
    }

    class TotalMark extends CA
    {
        public $finalPaper, $maxFinal = 100;

        function __construct($marks)
        {
            $this->finalPaper = $marks;
        }

        function totalMarks()
        {
            $this->grandTotal = $this->ca1 + $this->ca2 + $this->finalPaper;
            echo "Marks obtained by Student $this->grandTotal <br>";
            $marksGivenFrom = $this->maxCA + $this->maxCA + $this->maxFinal;
            echo "Total Marks obtained by Student $marksGivenFrom <br>";
        }
    }

    $Adarsh = new Totalmark(98);
    $Adarsh->totalMarks();
    ?>
</body>

</html>
