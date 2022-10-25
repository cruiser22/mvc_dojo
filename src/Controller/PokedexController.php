<?php
namespace App\Controller;
use App\Model\PokedexManager;

class PokedexController extends AbstractController{
    public function index(): string {
        $pokedexManager = new PokedexManager();
        $pokemons = $pokedexManager->selectAll();
        return $this->twig->render('Pokedex/pokedex.html.twig', ['bananes' => $pokemons]);
    }
}

