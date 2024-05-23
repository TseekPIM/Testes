<?php

use PHPUnit\Framework\TestCase;
use App\CompetitionSearchEngine;

class CompetitionTest extends TestCase
{
    public function testSearchExistingCompetition()
    {

        $searchEngine = new CompetitionSearchEngine();
        $result = $searchEngine->search("Jogo Exemplo");
        $this->assertNotEmpty($result);
    }

    public function testSearchNonExistingCompetition()
    {

        $searchEngine = new CompetitionSearchEngine();
        $result = $searchEngine->search("Jogo Inexistente");
        $this->assertEmpty($result);
    }
}
