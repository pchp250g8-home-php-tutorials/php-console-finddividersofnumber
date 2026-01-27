<?php
    system("cls");
    echo("Input an integer positive number:\r\n");
    $ulNumber = intval(chop(fgets(STDIN)));
    printf("The number %lu has the folowing dividers:\r\n", $ulNumber);
    for ($i = 1; $i <= $ulNumber; $i++)
    {
        if($ulNumber % $i == 0)
        {
            printf("%lu ", $i);
        }
    }
    echo("\r\n");
    fgetc(STDIN);
?>