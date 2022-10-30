$json = '
{
    "type": "donut",
    "name": "Cake"
}';

$yummy = json_decode($json);

echo $yummy->type; //donut
$json = '
[
    "Glazed",
    "Chocolate with Sprinkles",
    "Maple"
]';

$toppings = json_decode($json);

echo $toppings[1]; //Chocolate with Sprinkles

foreach ($toppings as $topping) {
    echo $topping, "\n";
}


$json = '
{
    "type": "donut",
    "name": "Cake",
    "toppings": [
        { "id": "5002", "type": "Glazed" },
        { "id": "5006", "type": "Chocolate with Sprinkles" },
        { "id": "5004", "type": "Maple" }
    ]
}';

$yummy = json_decode($json);

echo $yummy->toppings[2]->id; //5004


$json = '
{
    "type": "donut",
    "name": "Cake",
    "toppings": [
        { "id": "5002", "type": "Glazed" },
        { "id": "5006", "type": "Chocolate with Sprinkles" },
        { "id": "5004", "type": "Maple" }
    ]
}';

$yummy = json_decode($json, true);

echo $yummy['toppings'][2]['type']; //Maple

$json = '
{
    "foo": "foo value",
    "bar": "bar value",
    "baz": "baz value"
}';

$assoc = json_decode($json, true);
foreach ($assoc as $key => $value) {
    echo "The value of key '$key' is '$value'", PHP_EOL;
}

$json = '
{
    "type": "donut",
    "name": "Cake",
    "toppings": [
        { "id": "5002", "type": "Glazed" },
        { "id": "5006", "type": "Chocolate with Sprinkles" },
        { "id": "5004", "type": "Maple" }
    ]
}';

$yummy = json_decode($json);

print_r($yummy);