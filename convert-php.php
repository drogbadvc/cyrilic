<?php

function cyrilic($result){
    $cyrilic = ['а','е','і','v','с','о','u', 'ѕ', 'р', 'ј', 'І', 'Ј', 'Х', 'Е', 'О', 'К', 'Н', 'y', 'х', 'А', 'В', 'Р', 'С', 'Т', '’'];
    $latin = ['a','e','i','v','c', 'o', 'u', 's', 'p', 'j', 'I', 'J', 'X','E', 'O', 'K', 'H', 'y', 'x', 'A', 'B', 'P', 'C', 'T', '\''];

    return str_replace($cyrilic, $latin, $result);
}
