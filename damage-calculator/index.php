<?php
$api_url = "https://api.pokeapi.com/v2/pokemon/";
$pokemon_name = $_POST["attacker_name"];
$response = file_get_contents($api_url . $pokemon_name);
$pokemon_data = json_decode($response);
$attacker_attack = $pokemon_data->attack;
?>
